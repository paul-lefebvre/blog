<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;
use src\Model\User;
use DateTime;
use src\Model\Categorie;

class ArticleController extends AbstractController {



    public function Index(){
        return $this->ListAll();
    }



    //Fonction : 
    public function ListAll(){

        //Ajout du model + liste toutes les catégories$categorie = new Categorie();        
        $categorie = new Categorie();
        $listCategorie = $categorie->getAllCategories(Bdd::GetInstance());
        

        //ajout du model + liste tout les article ET les 5 premiers
        $article = new Article();
        $listArticleFiveLast = $article->ArticleGetFiveLast(Bdd::GetInstance());
        $articleAll = $article->getAllArticles(Bdd::GetInstance());


        
        //vérification : est-ce que l'utilisateur à une session valide ?
        if(isset($_SESSION['email']) && isset($_SESSION['pass'])){

            $mailAVerif = $_SESSION['email'];
            $passAVerif = $_SESSION['pass'];

            $user = new User();

            //Récupération de l'id de l'user en fonction de sa session
            $userId = $user->checkMailandPass(Bdd::GetInstance(), $mailAVerif, $passAVerif);

            //Récupération de ses infos depuis son id
            $listUser = $user->getUserData(Bdd::GetInstance(), $userId);

            $isConnected = 1;

        }else{
            //Si l'user est un visiteur (pas de compte)
            $isConnected = 0;
            $listUser = "";
        }



        //Lancement de Twig
        return $this->twig->render(
            'Article/list.html.twig',[
                'articleList' => $listArticleFiveLast,
                'articleListAll' => $articleAll,
                'pageResultat' => 0,
                'user' => $listUser,
                'listCategorie' => $listCategorie,
                'isConnected' => $isConnected
            ]
        ); 


    }





    public function add(){

        $role = UserController::roleNeed();

        if($role == "Administrateur" OR $role == "Redacteur"){ 
            if($_POST AND $_SESSION['token'] == $_POST['token']){
                $sqlRepository = null;
                $nomImage = null;

                if(!empty($_FILES['image']['name']) )
                {
                    $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                    $extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    if(in_array(strtolower($extension),$tabExt))
                    {
                        $nomImage = md5(uniqid()) .'.'. $extension;
                        $dateNow = new DateTime();
                        $sqlRepository = $dateNow->format('Y/m');
                        $repository = './uploads/images/'.$dateNow->format('Y/m');
                        if(!is_dir($repository)){
                            mkdir($repository,0777,true);
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'], $repository.'/'.$nomImage);
                    }
                }

                
                //Récupération de l'id de l'user en fonction de sa session
                $user = new User();
                $userId = $user->checkMailandPass(Bdd::GetInstance(), $_SESSION['email'], $_SESSION['pass']);


                //SET D'UN NOUVEAU MODELE D'ARTICLE
                $articleModel = new Article();

                $articleModel->setID_MEMBRE($userId);
                $articleModel->setID_CATEGORIE($_POST['Categorie']);
                $articleModel->setART_TITRE($_POST['Titre']);
                $articleModel->setART_DESCRIPTION($_POST['Description']);
                $articleModel->setART_AUTEUR($_POST['Auteur']);
                $articleModel->setART_DATEAJOUT($_POST['DateAjout']);
                $articleModel->setART_IMAGEREPOSITORY($sqlRepository);
                $articleModel->setART_IMAGEFILENAME($nomImage);

                var_dump($articleModel);

                $articleModel->SqlAdd(BDD::getInstance());
                
                header('Location:/dashboard');

                
            }else{
                // Génération d'un TOKEN
                $token = bin2hex(random_bytes(32));
                $_SESSION['token'] = $token;

                //Ajout du model + liste toutes les catégories      
                $categorie = new Categorie();
                $listCategorie = $categorie->getAllCategories(Bdd::GetInstance());

                return $this->twig->render('Article/add.html.twig',
                    [
                        'token' => $token,
                        'AllCategorie' => $listCategorie
                    ]);
            }

        }   

    }

    public function update($articleID){
        UserController::roleNeed('redacteur');
        if($_POST AND $_SESSION['token'] == $_POST['token']){

            $articleSQL = new Article();
            $article = $articleSQL->SqlGet(BDD::getInstance(),$articleID);
            if($_POST){
                $sqlRepository = null;
                $nomImage = null;
                if(!empty($_FILES['image']['name']) )
                {
                    $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
                    $extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    if(in_array(strtolower($extension),$tabExt))
                    {
                        $nomImage = md5(uniqid()) .'.'. $extension;
                        $dateNow = new DateTime();
                        $sqlRepository = $dateNow->format('Y/m');
                        $repository = './uploads/images/'.$dateNow->format('Y/m');
                        if(!is_dir($repository)){
                            mkdir($repository,0777,true);
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'], $repository.'/'.$nomImage);
                        // suppression ancienne image si existante

                        if($_POST['imageAncienne'] != '/'){
                            unlink('./uploads/images/'.$_POST['imageAncienne']);
                        }
                    }
                }

                $article->setTitre($_POST['Titre'])
                    ->setDescription($_POST['Description'])
                    ->setAuteur($_POST['Auteur'])
                    ->setDateAjout($_POST['DateAjout'])
                    ->setImageRepository($sqlRepository)
                    ->setImageFileName($nomImage)
                ;

                $article->SqlUpdate(BDD::getInstance());
            }

            return $this->twig->render('Article/update.html.twig',[
                'article' => $article
            ]);
        }else{
            // Génération d'un TOKEN
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('Article/update.html.twig',
                [
                    'token' => $token
                ]);
        }
    }

    public function Delete($articleID){
        $articleSQL = new Article();
        $article = $articleSQL->SqlGet(BDD::getInstance(),$articleID);
        $article->SqlDelete(BDD::getInstance(),$articleID);
        if($article->getImageFileName() != ''){
            unlink('./uploads/images/'.$article->getImageRepository().'/'.$article->getImageFileName());
        }

        header('Location:/');
    }

    public function Write(){
        $article = new Article();
        $listArticle = $article->ArticleGetFiveLast(Bdd::GetInstance());

        $file = 'article.json';
        if(!is_dir('./uploads/file/')){

            mkdir('./uploads/file/', 0777, true);
        }
        file_put_contents('./uploads/file/'.$file, json_encode($listArticle));

        header('location:/Article/');
    }

    public function Read(){
        $file='article.json';
        $datas = file_get_contents('./uploads/file/'.$file);
        $contenu = json_decode($datas);

        return $this->twig->render('Article/readfile.html.twig', [
            'fileData' => $contenu
        ]);
    }





    public function WriteOne($idArticle){
        $article = new Article();
        $articleData = $article->SqlGet(Bdd::GetInstance(), $idArticle);

        $file = 'article_'.$idArticle.'.json';
        if(!is_dir('./uploads/file/')){
            mkdir('./uploads/file/', 0777, true);
        }
        file_put_contents('./uploads/file/'.$file, json_encode($articleData));

        header('location:/Article/');
    }





    public function search(){
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            $search = $_POST['search'];
            $filter = $_POST['filtre'];
            $article = new Article();
            
            $articleData = $article->sqlSearch(Bdd::GetInstance(),$search,$filter);
            $categorie = new Categorie();
            $listCategorie = $categorie->getAllCategories(Bdd::GetInstance());
            
            return $this->twig->render(
                'Article/list.html.twig',[
                    'articleData' => $articleData,
                    'pageResultat' => 1,
                    'searchResult' => $_POST['search']
                    ,'listCategorie' => $listCategorie
                    
                ]
            );
        }else{
            $categorie = new Categorie();
            $listCategorie = $categorie->getAllCategories(Bdd::GetInstance());
            // Génération d'un TOKEN
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('index.html.twig',
                [
                    'token' => $token,
                    'filtre' => $listCategorie
                ]);
        }

        
    }



    public function listArticlesAdmin(){


        $articleModel = new Article();
        $listArticles =  $articleModel->getAllArticles(bdd::GetInstance());


        //Récupération du rôle du compte
        $role = UserController::roleNeed();

        return $this->twig->render('Dashboard/listeArticles.html.twig',[
        'allArticles'=> $listArticles,
        'role'=>$role
        ]);


    }
    public function justOneArticle($articleID){

            $articleSQL = new Article();
            $article = $articleSQL->SqlGet(BDD::getInstance(),$articleID);

            var_dump($article);

            return $this->twig->render('Article/view.html.twig',[
                'article' => $article
            ]);
        
        
        
    }
}


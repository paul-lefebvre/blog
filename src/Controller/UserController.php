<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\User;
use src\Model\Bdd;
use DateTime;

class UserController extends  AbstractController {

    public function loginForm(){
        
        return $this->twig->render('User/login.html.twig');
    }

    public function loginCheck(){

        if(!filter_var(
            $_POST['password'],
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp"=>"/[a-zA-Z]{3,}/")
            )
        )){
            $_SESSION['errorlogin'] = "Le mot de passe doit contenir minimum 3 caractères";
            header('Location:/Login');
            return;
        }

        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $_SESSION['errorlogin'] = "Mail invalide";
            header('Location:/Login');
            return;
        }

        // A MODIFIER POUR LE CHECK LOGIN
        if($_POST["email"]=="admin@admin.com"
            AND $_POST["password"] == "password"
        ){

            $_SESSION['login'] = array(
                'Nom' => 'Administrateur'
            ,'Prénom' => 'Sylvain'
            ,'roles' => array('admin', 'redacteur')
            );
            header('Location:/');
        }else{
            $_SESSION['errorlogin'] = "Erreur d'Authentification";
            header('Location:/Login');
        }



    }

    public static function roleNeed($roleATester){
        if(isset($_SESSION['login'])){
            if(!in_array($roleATester,$_SESSION['login']['roles'])){
                $_SESSION['errorlogin'] = "Vous ne possédez pas le rôle : ".$roleATester;
                header('Location:/Contact');
            }
        }else{
            $_SESSION['errorlogin'] = "Veuillez vous identifier !";
            header('Location:/Login');
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);

        header('Location:/');
    }


    public function pageInscription(){

        return $this->twig->render('User/inscription.html.twig',[
            'inscrit'=>1
        ]);

    }














    //quand l'user à terminé son inscription
    public function inscription(){

       
        if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) 
        && isset($_POST['pass'])) {
                           
            $userModel = new user();
            $verifInscriptionUser = $userModel->inscrireUser(Bdd::GetInstance(), $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pass']);

            if($verifInscriptionUser){

                $inscrit = 1;

                return $this->twig->render('User/inscription.html.twig', [

                    'inscrit'=>$inscrit

                ]);

            }else{

                $inscrit = 0;

                return $this->twig->render('User/inscription.html.twig',[

                    'inscrit'=>$inscrit

                ]);

            }


        }else{

        }
     
             
    }
    








    public function pageDashboard(){
    
        $userId = 1;

        $user = new User();
        $listUser = $user->getUserData(Bdd::GetInstance(), $userId);




        //AJOUTER LES INFOS DE L'UTILISATEUR
        return $this->twig->render(
            'Dashboard/dashboard.html.twig',[
                'user' => $listUser
            ]
        );
    }



    
}
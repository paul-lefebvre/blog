<?php
namespace src\Controller;

use src\Model\Categorie;
use src\Model\User;
use src\Model\Bdd;

class CategorieController extends AbstractController {



    public function addCategorie(){

        $role = UserController::roleNeed(); 
        if($role == "Administrateur"){ 
            if($_POST AND $_SESSION['token'] == $_POST['token']){
                echo 'test';

                //SET D'UN NOUVEAU MODELE DE CATEGORIE
                $categorieModel = new Categorie();

                $categorieModel->setCAT_NOM($_POST['name']);

                $categorieModel->addCategorieSql(BDD::getInstance(), $_POST['name']);
                var_dump($categorieModel);
                $_SESSION['successMsg'] = 'La catégorie a bien été créé !';
                header('Location: /dashboard');

                
            }else{

                // Génération d'un TOKEN
                $token = bin2hex(random_bytes(32));
                $_SESSION['token'] = $token;


                return $this->twig->render('Categorie/add.html.twig',
                    [
                        'token' => $token
                    ]);
            }

        } 
    }

}
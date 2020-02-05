<?php
namespace src\Model;

class Categorie {

    //ATTRIBUTS
    private $ID_CATEGORIE;
    private $CAT_NOM;

  

    //Function : récupère toutes les catégories de la bdd
    public function getAllCategories(\PDO $bdd){

        $requete = $bdd->prepare('SELECT * FROM t_categorie;');
        $requete->execute();
        $arrayCategorie = $requete->fetchAll();

        $listCategorie = [];

        foreach ($arrayCategorie as $categorieSQL){
            $categorie = new Article();
            $categorie->setID_CATEGORIE($categorieSQL['ID_CATEGORIE']);
            $categorie->setCAT_NOM($categorieSQL['CAT_NOM']);

            $listCategorie[] = $categorie;
        }   
        return $listCategorie;
    }









    //=====================================
    //        GETTERS & SETTERS           =
    //=====================================



    public function getID_CATEGORIE()
    {
        return $this->ID_CATEGORIE;
    }


    public function setID_CATEGORIE($ID_CATEGORIE)
    {
        $this->ID_CATEGORIE = $ID_CATEGORIE;

        return $this;
    }


    public function getCAT_NOM()
    {
        return $this->CAT_NOM;
    }


    public function setCAT_NOM($CAT_NOM)
    {
        $this->CAT_NOM = $CAT_NOM;

        return $this;
    }
}
<?php
namespace src\Model;

class Categorie {

    //ATTRIBUTS
    private $ID_CATEGORIE;
    private $CAT_NOM;

  












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
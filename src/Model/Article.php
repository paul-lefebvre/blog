<?php
namespace src\Model;

class Article implements \JsonSerializable {

    private $ID_ARTICLE;
    private $ID_MEMBRE;
    private $ID_CATEGORIE;
    private $ART_TITRE;
    private $ART_DESCRIPTION;
    private $ART_DATEAJOUT;
    private $ART_AUTEUR;
    private $ART_IMAGEREPOSITORY;
    private $ART_IMAGEFILENAME;
    private $ART_STATUT;


    //=======================================================
    //                [FONCTION INCONNUE]                   =
    //=======================================================
    
    
    public function firstXwords($nb){
        $phrase = $this->getART_DESCRIPTION();
        $arrayWord = str_word_count($phrase,1);

        return implode(" ",array_slice($arrayWord,0,$nb));
    }




    //=======================================================
    //                [AJOUT D'UN ARTICLE]                  =
    //=======================================================
    public function SqlAdd(\PDO $bdd) {
        try{
            $requete = $bdd->prepare("INSERT INTO t_articles (ID_MEMBRE, ID_CATEGORIE, ART_TITRE, ART_DESCRIPTION, 
            ART_DATEAJOUT, ART_AUTEUR, ART_IMAGEREPOSITORY, ART_IMAGEFILENAME) 
            VALUES(:membreParent, :categorieParente, :Titre, :DescriptionArt, :DateAjout, :Auteur, :ImageRepository, :ImageFileName)");
            $requete->execute([
                "membreParent" => $this->getID_MEMBRE(),
                "categorieParente" => $this->getID_CATEGORIE(),
                "Titre" => $this->getART_TITRE(),
                "DescriptionArt" => $this->getART_DESCRIPTION(),
                "DateAjout" => $this->getART_DATEAJOUT(),
                "Auteur" => $this->getART_AUTEUR(),
                "ImageRepository" => $this->getART_IMAGEREPOSITORY(),
                "ImageFileName" => $this->getART_IMAGEFILENAME(),
            ]);

            return array("result"=>true,"message"=>$bdd->lastInsertId());

        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }

    }




    //=======================================================
    //          [RECUPERER TOUT LES ARTICLES]               =
    //=======================================================
    public function getAllArticles(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM t_articles');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setID_ARTICLE($articleSQL['ID_ARTICLE']);
            $article->setART_TITRE($articleSQL['ART_TITRE']);
            $article->setART_AUTEUR($articleSQL['ART_AUTEUR']);
            $article->setART_DESCRIPTION($articleSQL['ART_DESCRIPTION']);
            $article->setART_DATEAJOUT($articleSQL['ART_DATEAJOUT']);
            $article->setART_IMAGEREPOSITORY($articleSQL['ART_IMAGEREPOSITORY']);
            $article->setART_IMAGEFILENAME($articleSQL['ART_IMAGEFILENAME']);
            $article->setART_STATUT($articleSQL['ART_STATUT']);

            $listArticle[] = $article;
        }
        return $listArticle;
}





    //=======================================================
    //         [RECUPERER LES 5 DERNIERS ARTICLES]          =
    //=======================================================
    public function ArticleGetFiveLast(\PDO $bdd){

            $requete = $bdd->prepare('SELECT * FROM t_articles LIMIT 5;');
            $requete->execute();
            $arrayArticle = $requete->fetchAll();

            return $arrayArticle;

    }







    //=======================================================
    //           [RECUPERER 1 ARTICLE SELON L'ID]           =
    //=======================================================
    public function SqlGet(\PDO $bdd,$idArticle){
        $requete = $bdd->prepare('SELECT * FROM t_articles where ID_ARTICLE = :idArticle');
        $requete->execute([
            'idArticle' => $idArticle
        ]);

        $datas =  $requete->fetch();

        $article = new Article();
        $article->setID_ARTICLE($datas['ID_ARTICLE']);
        $article->setART_TITRE($datas['ART_TITRE']);
        $article->setART_AUTEUR($datas['ART_AUTEUR']);
        $article->setART_DESCRIPTION($datas['ART_DESCRIPTION']);
        $article->setART_DATEAJOUT($datas['ART_DATEAJOUT']);
        $article->setART_IMAGEREPOSITORY($datas['ART_IMAGEREPOSITORY']);
        $article->setART_IMAGEFILENAME($datas['ART_IMAGEFILENAME']);

        return $article;
    }



    //=======================================================
    //          [UPDATE DES ATTRIBUTS D'ARTICLES]           =
    //=======================================================
    public function SqlUpdate(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE t_articles set Titre=:Titre, Description=:Description, DateAjout=:DateAjout, Auteur=:Auteur, ImageRepository=:ImageRepository, ImageFileName=:ImageFileName WHERE id=:IDARTICLE');
            $requete->execute([
                'Titre' => $this->getART_TITRE()
                ,'Description' => $this->getART_DESCRIPTION()
                ,'DateAjout' => $this->getART_DATEAJOUT()
                ,'Auteur' => $this->getART_AUTEUR()
                ,'ImageRepository' => $this->getART_IMAGEREPOSITORY()
                ,'ImageFilename' => $this->getART_IMAGEFILENAME()
                ,'IDARTICLE' => $this->getID_ARTICLE()
            ]);
            return array("0", "[UPDATE] VALIDE");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }




    //=======================================================
    //                [DELETE D'UN ARTICLE]                 =
    //=======================================================
    public function SqlDelete (\PDO $bdd,$idArticle){
        try{
            $requete = $bdd->prepare('DELETE FROM t_articles where ID_ARTICLE = :idArticle');
            $requete->execute([
                'idArticle' => $idArticle
            ]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }


    //=======================================================
    //                   [VIDE TOUTE UNE TABLE]             =
    //=======================================================
    public function SqlTruncate (\PDO $bdd){
        try{
            $requete = $bdd->prepare('TRUNCATE TABLE t_articles');
            $requete->execute();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }



    //Fonction inconnue ??
    public function jsonSerialize()
    {
        return [
            'Id' => $this->getId()
            ,'Titre' => $this->getTitre()
            ,'Description' => $this->getDescription()
            ,'DateAjout' => $this->getART_DATEAJOUT()
            ,'ImageRepository' => $this->getART_IMAGEREPOSITORY()
            ,'ImageFileName' => $this->getART_IMAGEFILENAME()
            ,'Auteur' => $this->getART_AUTEUR()
        ];
    }


    //=======================================================
    //[RECHERCHER 10 ARTICLES CORRESPONDANT A UNE RECHERCHE]=
    //=======================================================
    public function sqlSearch(\PDO $bdd,$search,$filter){

        try{
            
            $search = "%".$search."%";
            var_dump($search);

            $requeteFiltre = $bdd->prepare("SELECT ID_CATEGORIE FROM t_categorie WHERE CAT_NOM = ? ;");
            $requeteFiltre->execute(array($filter));
            var_dump($requeteFiltre);
            $numFilter = $requeteFiltre->fetch();
            var_dump($numFilter);

            if($numFilter == 0){
                $requete = $bdd->prepare("SELECT * FROM t_articles WHERE ART_TITRE like ? ORDER BY ID_ARTICLE DESC LIMIT 10 ");
                $requete->execute(array($search));
                echo "tous";
                $arrayArticle = $requete->fetchAll();

            }else{
                echo "filtre";
                $requete = $bdd->prepare("SELECT * FROM t_articles WHERE ART_TITRE like ? AND ID_CATEGORIE LIKE ? ORDER BY ID_ARTICLE DESC LIMIT 10 ");
                $requete->execute(array($search,$numFilter["ID_CATEGORIE"]));
                $arrayArticle = $requete->fetchAll();
            }
            var_dump($arrayArticle);
            return $arrayArticle;

        }catch(\Exception $e){
            return false;
        }

    }
   
















    /**
     * Get the value of ID_ARTICLE
     */ 
    public function getID_ARTICLE()
    {
        return $this->ID_ARTICLE;
    }

    /**
     * Set the value of ID_ARTICLE
     *
     * @return  self
     */ 
    public function setID_ARTICLE($ID_ARTICLE)
    {
        $this->ID_ARTICLE = $ID_ARTICLE;

        return $this;
    }

    /**
     * Get the value of ID_MEMBRE
     */ 
    public function getID_MEMBRE()
    {
        return $this->ID_MEMBRE;
    }

    /**
     * Set the value of ID_MEMBRE
     *
     * @return  self
     */ 
    public function setID_MEMBRE($ID_MEMBRE)
    {
        $this->ID_MEMBRE = $ID_MEMBRE;

        return $this;
    }

    /**
     * Get the value of ID_CATEGORIE
     */ 
    public function getID_CATEGORIE()
    {
        return $this->ID_CATEGORIE;
    }

    /**
     * Set the value of ID_CATEGORIE
     *
     * @return  self
     */ 
    public function setID_CATEGORIE($ID_CATEGORIE)
    {
        $this->ID_CATEGORIE = $ID_CATEGORIE;

        return $this;
    }

    /**
     * Get the value of ART_TITRE
     */ 
    public function getART_TITRE()
    {
        return $this->ART_TITRE;
    }

    /**
     * Set the value of ART_TITRE
     *
     * @return  self
     */ 
    public function setART_TITRE($ART_TITRE)
    {
        $this->ART_TITRE = $ART_TITRE;

        return $this;
    }

    /**
     * Get the value of ART_DESCRIPTION
     */ 
    public function getART_DESCRIPTION()
    {
        return $this->ART_DESCRIPTION;
    }

    /**
     * Set the value of ART_DESCRIPTION
     *
     * @return  self
     */ 
    public function setART_DESCRIPTION($ART_DESCRIPTION)
    {
        $this->ART_DESCRIPTION = $ART_DESCRIPTION;

        return $this;
    }

    /**
     * Get the value of ART_DATEAJOUT
     */ 
    public function getART_DATEAJOUT()
    {
        return $this->ART_DATEAJOUT;
    }

    /**
     * Set the value of ART_DATEAJOUT
     *
     * @return  self
     */ 
    public function setART_DATEAJOUT($ART_DATEAJOUT)
    {
        $this->ART_DATEAJOUT = $ART_DATEAJOUT;

        return $this;
    }

    /**
     * Get the value of ART_AUTEUR
     */ 
    public function getART_AUTEUR()
    {
        return $this->ART_AUTEUR;
    }

    /**
     * Set the value of ART_AUTEUR
     *
     * @return  self
     */ 
    public function setART_AUTEUR($ART_AUTEUR)
    {
        $this->ART_AUTEUR = $ART_AUTEUR;

        return $this;
    }

    /**
     * Get the value of ART_IMAGEREPOSITORY
     */ 
    public function getART_IMAGEREPOSITORY()
    {
        return $this->ART_IMAGEREPOSITORY;
    }

    /**
     * Set the value of ART_IMAGEREPOSITORY
     *
     * @return  self
     */ 
    public function setART_IMAGEREPOSITORY($ART_IMAGEREPOSITORY)
    {
        $this->ART_IMAGEREPOSITORY = $ART_IMAGEREPOSITORY;

        return $this;
    }

    /**
     * Get the value of ART_IMAGEFILENAME
     */ 
    public function getART_IMAGEFILENAME()
    {
        return $this->ART_IMAGEFILENAME;
    }

    /**
     * Set the value of ART_IMAGEFILENAME
     *
     * @return  self
     */ 
    public function setART_IMAGEFILENAME($ART_IMAGEFILENAME)
    {
        $this->ART_IMAGEFILENAME = $ART_IMAGEFILENAME;

        return $this;
    }

    /**
     * Get the value of ART_STATUT
     */ 
    public function getART_STATUT()
    {
        return $this->ART_STATUT;
    }

    /**
     * Set the value of ART_STATUT
     *
     * @return  self
     */ 
    public function setART_STATUT($ART_STATUT)
    {
        $this->ART_STATUT = $ART_STATUT;

        return $this;
    }
}
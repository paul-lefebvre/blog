<?php
namespace src\Model;

class Article extends Categorie implements \JsonSerializable {
    private $ID_ARTICLE;
    private $ID_MEMBRE;
    private $ID_CATEGORIE;
    private $ART_TITRE;
    private $ART_DESCRIPTION;
    private $ART_DATEAJOUT;
    private $ART_AUTEUR;
    private $ART_IMAGEREPOSITORY;
    private $ART_IMAGEFILENAME;




    //=======================================================
    //                [REQUETES SQL ICI]                    =
    //=======================================================
    


    
    public function firstXwords($nb){
        $phrase = $this->getART_DESCRIPTION();
        $arrayWord = str_word_count($phrase,1);

        return implode(" ",array_slice($arrayWord,0,$nb));
    }


    //REQUETE A MODIFIER
    public function SqlAdd(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO t_articles (Titre, Description, DateAjout, Auteur, ImageRepository, ImageFileName) VALUES(:Titre, :Description, :DateAjout, :Auteur, :ImageRepository, :ImageFileName)');
            $requete->execute([
                "Titre" => $this->getART_TITRE(),
                "Description" => $this->getART_DESCRIPTION(),
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



    public function SqlGetAll(\PDO $bdd){
            $requete = $bdd->prepare('SELECT * FROM t_articles LIMIT 5');
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

                $listArticle[] = $article;
            }
            return $listArticle;
    }



    public function SqlGet(\PDO $bdd,$idArticle){
        $requete = $bdd->prepare('SELECT * FROM t_articles where ID_ARTICLE = :idArticle');
        $requete->execute([
            'idArticle' => $idArticle
        ]);

        $datas =  $requete->fetch();

        $article = new Article();
        $article->setId($datas['ID_ARTICLE']);
        $article->setTitre($datas['ART_TITRE']);
        $article->setART_AUTEUR($datas['ART_AUTEUR']);
        $article->setDescription($datas['ART_DESCRIPTION']);
        $article->setART_DATEAJOUT($datas['ART_DATEAJOUT']);
        $article->setART_IMAGEREPOSITORY($datas['ART_IMAGEREPOSITORY']);
        $article->setART_IMAGEFILENAME($datas['ART_IMAGEFILENAME']);

        return $article;


    }



    //requête sql à modifier
    public function SqlUpdate(\PDO $bdd){
        try{
            $requete = $bdd->prepare('UPDATE t_articles set Titre=:Titre, Description=:Description, DateAjout=:DateAjout, Auteur=:Auteur, ImageRepository=:ImageRepository, ImageFileName=:ImageFileName WHERE id=:IDARTICLE');
            $requete->execute([
                'Titre' => $this->getTitre()
                ,'Description' => $this->getDescription()
                ,'DateAjout' => $this->getART_DATEAJOUT()
                ,'Auteur' => $this->getART_AUTEUR()
                ,'ImageRepository' => $this->getART_IMAGEREPOSITORY()
                ,'ImageFileName' => $this->getART_IMAGEFILENAME()
                ,'IDARTICLE' => $this->getId()
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }



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



    public function SqlTruncate (\PDO $bdd){
        try{
            $requete = $bdd->prepare('TRUNCATE TABLE t_articles');
            $requete->execute();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }


    //return à modifier
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



    public function sqlSearch(\PDO $bdd,$search){

        try{
            
            $search = '%'.$search.'%';
            
            $requete = $bdd->prepare("SELECT * FROM t_articles WHERE ART_TITRE like ? ORDER BY ID_ARTICLE DESC LIMIT 10 ");
            
            $requete->execute(array($search));

            $arrayArticle = $requete->fetchAll();
            return $arrayArticle;

        }
        catch(\Exception $e){
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
}
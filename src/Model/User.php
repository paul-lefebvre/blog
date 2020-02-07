<?php
namespace src\Model;


 
class User {
 
    private $ID_MEMBRE;
    private $MEM_NOM;
    private $MEM_PRENOM;
    private $MEM_EMAIL;
    private $MEM_MDP;
    private $MEM_ROLE;
    private $MEM_ACTIF;

    //      =======================================================
    //  [Récupérer les informations de l'utilisateur lors de l'inscription]
    //      =======================================================

    function inscrireUser(\PDO $bdd, $nom, $prenom, $email, $mdp){

        try{
            // On hash le mot de passe saisie
            $pass_hash = password_hash($mdp, PASSWORD_BCRYPT);
                
            $requete=$bdd->prepare("INSERT 
            INTO t_membre (`MEM_NOM`, `MEM_PRENOM`, `MEM_EMAIL`, `MEM_MDP`) 
            VALUES (:nom, :prenom, :email, :mdp);");
            $requete->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'mdp' => $pass_hash
            ]);

            return true;
            
        }catch (\Exception $e){

                die('Erreur : ' . $e->getMessage());

        }
    }

    function getUserValid(\PDO $bdd, $actif){

        try{
            $requete=$bdd->prepare("SELECT `ID_MEMBRE`, `MEM_NOM`, `MEM_PRENOM`, `MEM_EMAIL`,`MEM_ACTIF` 
            FROM t_membre
            WHERE  `MEM_ACTIF`=0;");
            $requete->execute(['actif'=>$actif]);
            $arrayUserData = $requete->fetch();

            
            return ;

        }catch (\Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
            
    }

    function updateUserValid(\PDO $bdd, $idUser){

        try{
            $requete=$bdd->prepare("UPDATE t_membre 
            SET `MEM_ACTIF`= 1 
            WHERE  `ID_MEMBRE`=:actif;");
            $requete->execute(['actif'=>$idUser]);
            $arrayUpdateUser = $requete->fetch();

            
            return $arrayUpdateUser;

        }catch (\Exception $e){
            die('Erreur : ' . $e->getMessage());
        }


    }

    function updateActicleValid(\PDO $bdd, $idArticle){

        try{
            $requete=$bdd->prepare("UPDATE t_articles 
            SET `ART_STATUT`='1' 
            WHERE  `ID_ARTICLE`=:verif;");
            $requete->execute(['verif'=>$idArticle]);
            $arrayUpdateArticle = $requete->fetch();

            
            return $arrayUpdateArticle;

        }catch (\Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        

    }


    //=======================================================
    //  [Récupérer les informations de l'utilisateur]       =
    //=======================================================



    function getUserData(\PDO $bdd, $userId){

        try{
            $requete = $bdd->prepare('SELECT * FROM t_membre WHERE ID_MEMBRE = :id ;');
            $requete->execute(['id'=>$userId]);
            $arrayUserData = $requete->fetch();


            return $arrayUserData;
        
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }


       

    }



    function checkMailandPass(\PDO $bdd, $mail, $passHash){


        try{
            $requete = $bdd->prepare("SELECT * FROM t_membre 
            WHERE MEM_EMAIL= :mail AND MEM_MDP = :pass ;");

            $requete->execute(['mail'=>$mail, 'pass'=>$passHash]);
            $idUser = $requete->fetch();

             return $idUser['ID_MEMBRE'];
        

        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }


    }
    public function getUserLogin(\PDO $bdd, $email){

        $requete = $bdd->prepare("SELECT MEM_EMAIL,MEM_MDP,MEM_NOM,MEM_PRENOM,ROLE FROM t_membre WHERE MEM_EMAIL = ?");
        $requete -> execute(array($email));
        $donnee = $requete ->fetch();
        
        return $donnee;
    }



    function getAllUser(\PDO $bdd){

        try{
            $requete = $bdd->prepare('SELECT * FROM t_membre');
            $requete->execute();
            $arrayUserData = $requete->fetchAll();


            return $arrayUserData;
        
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }

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
     * Get the value of MEM_NOM
     */ 
    public function getMEM_NOM()
    {
        return $this->MEM_NOM;
    }

    /**
     * Set the value of MEM_NOM
     *
     * @return  self
     */ 
    public function setMEM_NOM($MEM_NOM)
    {
        $this->MEM_NOM = $MEM_NOM;

        return $this;
    }

    /**
     * Get the value of MEM_PRENOM
     */ 
    public function getMEM_PRENOM()
    {
        return $this->MEM_PRENOM;
    }

    /**
     * Set the value of MEM_PRENOM
     *
     * @return  self
     */ 
    public function setMEM_PRENOM($MEM_PRENOM)
    {
        $this->MEM_PRENOM = $MEM_PRENOM;

        return $this;
    }

    /**
     * Get the value of MEM_EMAIL
     */ 
    public function getMEM_EMAIL()
    {
        return $this->MEM_EMAIL;
    }

    /**
     * Set the value of MEM_EMAIL
     *
     * @return  self
     */ 
    public function setMEM_EMAIL($MEM_EMAIL)
    {
        $this->MEM_EMAIL = $MEM_EMAIL;

        return $this;
    }

    /**
     * Get the value of MEM_MDP
     */ 
    public function getMEM_MDP()
    {
        return $this->MEM_MDP;
    }

    /**
     * Set the value of MEM_MDP
     *
     * @return  self
     */ 
    public function setMEM_MDP($MEM_MDP)
    {
        $this->MEM_MDP = $MEM_MDP;

        return $this;
    }

    /**
     * Get the value of MEM_ROLE
     */ 
    public function getMEM_ROLE()
    {
        return $this->MEM_ROLE;
    }

    /**
     * Set the value of MEM_ROLE
     *
     * @return  self
     */ 
    public function setMEM_ROLE($MEM_ROLE)
    {
        $this->MEM_ROLE = $MEM_ROLE;

        return $this;
    }

    /**
     * Get the value of MEM_ACTIF
     */ 
    public function getMEM_ACTIF()
    {
        return $this->MEM_ACTIF;
    }

    /**
     * Set the value of MEM_ACTIF
     *
     * @return  self
     */ 
    public function setMEM_ACTIF($MEM_ACTIF)
    {
        $this->MEM_ACTIF = $MEM_ACTIF;

        return $this;
    }
}
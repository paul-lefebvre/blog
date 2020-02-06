<?php
namespace src\Model;


 
class User {
 
    private $ID_MEMBRE;
    private $MEM_NOM;
    private $MEM_PRENOM;
    private $MEM_EMAIL;
    private $MEM_MDP;
    private $MEM_ROLE;

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
               
            $requete->execute(array($nom, $prenom, $email, $pass_hash));

            return true;
            
        }catch (\Exception $e){

                die('Erreur : ' . $e->getMessage());

        }

    
     
    }


    //=======================================================
    //  [Récupérer les informations de l'utilisateur]       =
    //=======================================================



    function getUserData(\PDO $bdd, $userId){

        try{
            $requete = $bdd->prepare('SELECT * FROM t_membre WHERE ID_MEMBRE = ?');
            $requete->execute([$userId]);
            $arrayUserData = $requete->fetch();


            return $arrayUserData;
        
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }




    }



    function checkMailandPass(\PDO $bdd, $mail, $passHash){


        try{
            $requete = $bdd->prepare("SELECT ID_MEMBRE FROM t_membre 
            WHERE MEM_EMAIL= :mail AND MEM_MDP = :pass ;");

            $requete->execute(['mail'=>$mail, 'pass'=>$passHash]);
            $idUser = $requete->fetch();

            return $idUser;
        

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
}
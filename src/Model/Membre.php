<?php
 
class membre {
 
    private $id_membre;
    private $nom_membre;
    private $prenom_membre;
    private $date_naissance;
    private $cp_membre;
    private $adresse_membre;
    private $ville_membre;
    private $pays_membre;
    private $tel_membre;
    private $email_membre;
 
 
	public function __construct(array $params)
	{
		foreach($params as $k => $p)
		{
			$kTmp = explode('_', $k);
			foreach($kTmp as &$k2)
			{
				$k2 = ucfirst($k2);
			}
 
			$methodName = 'set' . implode('', $kTmp); 
			if(method_exists($this, $methodName))
			{
				$this->$methodName($p);
			}
		}
    }











































    

    /**
     * Get the value of id_membre
     */ 
    public function getId_membre()
    {
        return $this->id_membre;
    }

    /**
     * Set the value of id_membre
     *
     * @return  self
     */ 
    public function setId_membre($id_membre)
    {
        $this->id_membre = $id_membre;

        return $this;
    }

    /**
     * Get the value of nom_membre
     */ 
    public function getNom_membre()
    {
        return $this->nom_membre;
    }

    /**
     * Set the value of nom_membre
     *
     * @return  self
     */ 
    public function setNom_membre($nom_membre)
    {
        $this->nom_membre = $nom_membre;

        return $this;
    }

    /**
     * Get the value of prenom_membre
     */ 
    public function getPrenom_membre()
    {
        return $this->prenom_membre;
    }

    /**
     * Set the value of prenom_membre
     *
     * @return  self
     */ 
    public function setPrenom_membre($prenom_membre)
    {
        $this->prenom_membre = $prenom_membre;

        return $this;
    }

    /**
     * Get the value of date_naissance
     */ 
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set the value of date_naissance
     *
     * @return  self
     */ 
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get the value of cp_membre
     */ 
    public function getCp_membre()
    {
        return $this->cp_membre;
    }

    /**
     * Set the value of cp_membre
     *
     * @return  self
     */ 
    public function setCp_membre($cp_membre)
    {
        $this->cp_membre = $cp_membre;

        return $this;
    }

    /**
     * Get the value of adresse_membre
     */ 
    public function getAdresse_membre()
    {
        return $this->adresse_membre;
    }

    /**
     * Set the value of adresse_membre
     *
     * @return  self
     */ 
    public function setAdresse_membre($adresse_membre)
    {
        $this->adresse_membre = $adresse_membre;

        return $this;
    }

    /**
     * Get the value of ville_membre
     */ 
    public function getVille_membre()
    {
        return $this->ville_membre;
    }

    /**
     * Set the value of ville_membre
     *
     * @return  self
     */ 
    public function setVille_membre($ville_membre)
    {
        $this->ville_membre = $ville_membre;

        return $this;
    }

    /**
     * Get the value of pays_membre
     */ 
    public function getPays_membre()
    {
        return $this->pays_membre;
    }

    /**
     * Set the value of pays_membre
     *
     * @return  self
     */ 
    public function setPays_membre($pays_membre)
    {
        $this->pays_membre = $pays_membre;

        return $this;
    }

    /**
     * Get the value of tel_membre
     */ 
    public function getTel_membre()
    {
        return $this->tel_membre;
    }

    /**
     * Set the value of tel_membre
     *
     * @return  self
     */ 
    public function setTel_membre($tel_membre)
    {
        $this->tel_membre = $tel_membre;

        return $this;
    }

    /**
     * Get the value of email_membre
     */ 
    public function getEmail_membre()
    {
        return $this->email_membre;
    }

    /**
     * Set the value of email_membre
     *
     * @return  self
     */ 
    public function setEmail_membre($email_membre)
    {
        $this->email_membre = $email_membre;

        return $this;
    }
}
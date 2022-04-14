<?php



class Personne{
    protected $nom;
    protected $prenom;
    protected $sexe;
    protected $birth;

    function __construct($nom, $prenom, $sexe, $birth){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->birth = $birth;
    }

    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }

    public function getAge()
    {
        $age = $this->birth;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($this->birth), date_create($aujourdhui));
        return $diff->format('%y');
    }
    public function setAge(string $age)
    {
        $this->Age = $age;
        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of birth
     */ 
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of birth
     *
     * @return  self
     */ 
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }
}
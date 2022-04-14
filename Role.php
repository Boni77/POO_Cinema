<?php 

class Role {
    
    private $role;
    private $_castings;
    

    function __construct($role){
        $this->role = $role;
        $this->_castings= [];
    }

    public function __toString()
    {
        return $this->role;
    }
    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }
    public function afficherCasting()
    {
        foreach ($this->_castings as $castings) {
            echo "".$castings->getActeur()." joue dans ".$castings->getFilm()."<br>";
        }
        echo "";
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of _castings
     */ 
    public function get_castings()
    {
        return $this->_castings;
    }

    /**
     * Set the value of _castings
     *
     * @return  self
     */ 
    public function set_castings($_castings)
    {
        $this->_castings = $_castings;

        return $this;
    }
}
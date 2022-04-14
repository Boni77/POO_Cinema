<?php



class Acteur extends Personne
{

    private $_castings;


    function __construct($nom, $prenom, $sexe, $birth)
    {
        parent::__construct($nom, $prenom, $sexe, $birth);
        $this->_castings = [];
    }



    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }
    public function afficherCasting()
    {
        foreach ($this->_castings as $castings) {
            echo "Dans " . $castings->getFilm() . "," . $castings->getRole() . " à été incarné par " . $castings->getActeur() . "<br>";
        }
        echo "";
    }

    // Dans Star Wars, Han Solo a été incarné par Harison Ford,


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

    /**
     * Get the value of acteur
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set the value of acteur
     *
     * @return  self
     */
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }
}

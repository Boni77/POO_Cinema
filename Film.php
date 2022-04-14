<?php



class Film
{
    private $titre;
    private $date_sortie;
    private $duree;
    private $synopsis;
    private $_realisateur;
    private $_genre;
    private $_castings;


    function __construct($titre, $date_sortie, $duree, $synopsis, $_realisateur, $_genre)
    {
        $this->titre = $titre;
        $this->date_sortie = $date_sortie;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->_realisateur = $_realisateur;
        $this->_genre = $_genre;
        $this->_castings = [];
        $_realisateur->ajouterRealisateur($this);
        $_genre->ajouterGenre($this);
    }

    public function ajouterCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }
    public function afficherCasting()
    {
        foreach ($this->_castings as $casting) {
            echo "L'acteur " . $casting->getActeur() . " incarne :<br><li>" . $casting->getRole() . "</li><br>";
        }
    }




    public function __toString()
    {
        return $this->titre;
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of date_sortie
     */
    public function getDate_sortie()
    {
        return $this->date_sortie;
    }

    /**
     * Set the value of date_sortie
     *
     * @return  self
     */
    public function setDate_sortie($date_sortie)
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    /**
     * Get the value of duree
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of synopsis
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     *
     * @return  self
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of _realisateur
     */
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    /**
     * Set the value of _realisateur
     *
     * @return  self
     */
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }

    /**
     * Get the value of _genre
     */
    public function get_genre()
    {
        return $this->_genre;
    }

    /**
     * Set the value of _genre
     *
     * @return  self
     */
    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    /**
     * Get the value of _casting
     */
    public function get_casting()
    {
        return $this->_casting;
    }

    /**
     * Set the value of _casting
     *
     * @return  self
     */
    public function set_casting($_casting)
    {
        $this->_casting = $_casting;

        return $this;
    }
}

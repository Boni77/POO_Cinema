<?php



class Realisateur extends Personne
{
    function __construct($nom, $prenom, $sexe, $birth)
    {
        parent::__construct($nom, $prenom, $sexe, $birth);
        $this->_film = [];
    }

    public function ajouterRealisateur(Film $_film)
    {
        $this->_film[] = $_film;
    }
    public function afficherRea()
    {
        echo "Les films de $this sont :<br/><ul>";
        foreach ($this->_film as $fi) {
            echo "<li>$fi</li>";
        }
        echo "</ul>";
    }
}

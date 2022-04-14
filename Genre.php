<?php



class Genre
{
    private $genre;

    function __construct($genre)
    {
        $this->genre = $genre;
        $this->_genre = [];
    }

    public function __toString()
    {
        return $this->genre . "";
    }

    public function ajouterGenre(Film $_genre)
    {
        $this->_genre[] = $_genre;
    }
    public function afficherGenre()
    {
        echo "Dans le genre $this il y à " . count($this->_genre) . " films :<ul>";
        foreach ($this->_genre as $gen) {
            echo "<li>$gen</li>";
        }
        echo "</ul>";
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
}

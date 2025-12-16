<?php

class Cinema {

    private string $name;
    private string $town;
    private array $movies;

    public function __construct(string $name, string $town, array $movies) {
        $this->name = $name;
        $this->town = $town;
        $this->movies = $movies;
    }

    public function setMovies(array $movies) : void {
        $this->movies = $movies;
    }

    public function getMovies() : array {
        return $this->movies;
    }

    public function showLongestMovie() : string {
       $longestMovieIndex = 0;
       
        for ($i = 1; $i < count($this->movies); $i++){
            if ($this->movies[$i]->getDuration() > $this->movies[$longestMovieIndex]->getDuration()){
                $longestMovieIndex = $i;
            }
        }

        return "Movie: {$this->movies[$longestMovieIndex]->getName()}, Duration: {$this->movies[$longestMovieIndex]->getDuration()}";
    }

    public function __toString()
    {
        $moviesList = "";
        foreach ($this->movies as $movie) {
            $moviesList .= $movie . "<br>";
        }

        return "Cinema: " . $this->name . "<br>"
        . "Town: " . $this->town . "<br>"
        . "Movies:<br>" . $moviesList;
    }

}

?>
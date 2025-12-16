<?php

class Movie {

    private string $name;
    private float $duration;
    private string $director;

    public function __construct(string $name, float $duration, string $director) {
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getName() : string {
        return $this->name;
    }
    public function getDuration() : float {
        return $this->duration;
    }

    public function getDirector() : string {
        return $this->director;
    }

    public function __toString()
    {
        return "Movie: " . $this->name . "<br>"
        . ", Duration: " . $this->duration . "<br>"
        . " mins, Director: " . $this->director;
    }
}

?>
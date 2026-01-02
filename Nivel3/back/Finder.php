<?php
include 'Cinema.php';
include 'Movie.php';

class Finder {

    function searchByDirector(string $director, array $cinemas) : array {
        $moviesFound = [];
            foreach ($cinemas as $cinema){
                foreach ($cinema->movies as $movie) { 
                    if ($movie->getDirector() === $director) { //Searching for director coincidence in cinema
                    $alreadyListed = false; // Condition to keep in order to be added.

                    foreach ($moviesFound as $movieFound) { 
                        if ($movieFound->getName() === $movie->getName()){ // Checks if the movie is already in the list by name
                            $alreadyListed = true;
                        }
                    }
                    if(!$alreadyListed) { 
                        array_push($moviesFound, $movie); // Only adds the movie if it isn't already in the array.
                    }
                    }
                }
            }
        return $moviesFound;
    }
}
?>
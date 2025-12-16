<?php
/*
Imagine you have to present the movie catalog of a cinema chain. 
Each cinema has a name, a town where it belongs, and a list of movies. 
Each movie has a name, a duration, and a director.

It's about making a program that allows us to record this information for later:
For each cinema, display the data for each film.
For each cinema, show the film with the longest duration.
Implement a function/method that searches by director name for movies in different theaters.  LLEGUE HASTA AQUI
No need to repeat movies.
In addition, you can take advantage of this exercise to work on a good presentation 
with HTML+CSS that supports the logic.
*/

// MOVIE CATALOG //

// Inicializo con valores a fuego:

$movies = [
    new Movie("Ghostbusters", 1.20, "Ivan Reitman"),
    new Movie("Star Wars: A new hope", 1.55, "George Lucas"),
    new Movie("Avengers: Secret Wars", 2.30, "Russo Brothers"),
    new Movie("Inception", 2.28, "Christopher Molan"),
    new Movie("Once upon a time in Hollywood", 2.37, "Quentin Taranchino"),
];

$movies2 = [
    new Movie("The Dark Knight", 2.32, "Christopher Molan"),
    new Movie("Pulp Fiction", 2.34, "Quentin Taranchino"),
    new Movie("The Matrix", 2.16, "The Wachowskis"),
    new Movie("Star Wars: A new hope", 1.55, "George Lucas"),
];

$cinemas = [
    new Cinema("NewTheater", "New York", $movies),
    new Cinema("OldTheater", "Madrid", $movies2)
];


function searchByDirector(string $director, array $cinemas) : array {
 $moviesFound = [];
    foreach ($cinemas as $cinema) { // Goes trough each cinema 
        foreach ($cinema->getMovies() as $movie) { //  Goes trough each cinema
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


?>
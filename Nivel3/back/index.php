<?php
include 'Cinema.php';
include 'Movie.php';
// MOVIE CATALOG //

// Inicializing movies and cinemas with hardcoded values ("a fuego") :
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
    new Cinema("New Theater", "Madrid", $movies),
    new Cinema("Old Theater", "Miami", $movies2)
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cinema Catalog</title>
    <link rel="stylesheet" href="../front/styles.css">
</head>
<body>

    <h1 class="title">CINEMA CATALOG</h1>
    <div class='container'>
        <?php
        foreach ($cinemas as $cinema) {
            echo $cinema;
            echo $cinema->showLongestMovie() . "<br><br>";
        }
        ?>
    </div>
</body>
</html>

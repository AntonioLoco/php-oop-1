<?php
require_once __DIR__ . "/Models/Movie.php";

$movies =
    [
        new Movie("Io sono Leggenda", 69, ["Avventura", "Horror"], "Lorem ipsum"),
        new Movie("Francesco e i suoi push su git", 104, ["Horror", "Fantasy", "Commedy"], "Test Debug In Test debug")
    ];


foreach ($movies as $movie) {
    echo $movie->__toString() . "<br>";
}

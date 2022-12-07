<?php

class Movie
{
    public $title;
    public $duration;
    public $genre;
    public $description;

    function __construct(String $title, int $durationMinute, String $genre, String $description)
    {
        $this->title = $title;
        $this->duration = $durationMinute;
        $this->genre = $genre;
        $this->description = $description;
    }

    public function __toString()
    {
        return "Titolo: $this->title; Durata: $this->duration min; Genere: $this->genre; Descrizione: $this->description;";
    }
}

$movies =
    [
        new Movie("Io sono Leggenda", 69, "Avventura", "Lorem ipsum"),
        new Movie("Francesco e i suoi push su git", 104, "Horror", "Test Debug In Test debug")
    ];


foreach ($movies as $movie) {
    echo $movie->__toString() . "<br>";
}

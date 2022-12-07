<?php

/**
 * class Movie
 * defines Movie Class
 * @author Antonio Locorotondo
 */
class Movie
{
    public $title;
    public $duration;
    public $genres;
    public $description;


    /**
     * @param String $title Titolo del film
     * @param int $durationMinute Durata del film in minuti
     * @param array $genres Generi del film
     * @param String $description Descrizione del film
     * @author Antonio Locorotondo
     */
    function __construct(String $title, int $durationMinute, array $genres, String $description)
    {
        $this->title = $title;
        $this->duration = $durationMinute;
        $this->genres = $genres;
        $this->description = $description;
    }

    /**
     * @return String Ritorna tutti i generi dei film in stringa
     * @author Antonio Locorotondo
     */
    public function getGenres()
    {
        $result = "";
        foreach ($this->genres as $genre) {
            $result .= $genre . " ";
        }
        return $result;
    }


    public function __toString()
    {
        return "Titolo: $this->title; Durata: $this->duration min; Genere: " . $this->getGenres() . " Descrizione: $this->description";
    }
}

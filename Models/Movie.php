<?php

class Movie{
    public $title;
    public $originalTitle;
    public $director;
    public $genres = [];
    public $year;
    public $originalLanguage;
    public $rating;

    function __construct(String $_title, String $_director, Array $_genres, Int $_year, String $_originalLanguage, $_rating, String $_originalTitle = null){
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->originalLanguage = $_originalLanguage;
        $this->rating = $_rating;
        $this->originalTitle = $_originalTitle;
        $this->getOriginalTitle();
    }

    public function getOriginalTitle(){
        if($this->originalTitle == null){
            $this->originalTitle = $this->title;
        }
    }
}

?>
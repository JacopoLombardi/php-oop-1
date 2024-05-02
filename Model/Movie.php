
<?php

class Movie{
   public $title;
   public $description;
   public $genre;
   public $year;

   // construct
   public function __construct(string $_title, string $_description, string $_genre, int $_year){
      $this->title = $_title;
      $this->description = $_description;
      $this->genre = $_genre;
      $this->year = $_year;
   }

   // metodo
   public function getMovieInfo(){
      return "$this->title - $this->year";
   }


}


?>
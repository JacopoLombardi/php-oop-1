
<?php

class Movie{
   public $title;
   public $description;
   public $type;
   public $year;

   // construct
   public function __construct(string $_title, string $_description, string $_type, int $_year){
      $this->title = $_title;
      $this->description = $_description;
      $this->type = $_type;
      $this->year = $_year;
   }



}


?>
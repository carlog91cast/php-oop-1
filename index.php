<?php
  class Movie {
    private $movieName;
    private $director;
    private $year;
    private $mainActor;
    private $genre;
    private $oscar;

    public function __construct ($_movieName, $_director, $_year, $_mainActor, $_genre, $_oscar){
        $this->movieName = $_movieName;
        $this->director = $_director;
        $this->year = $_year;
        $this->mainActor = $_mainActor;
        $this->genre = $_genre;
    }
    public function setName($movieName){
        $this->movieName = $movieName;
        var_dump($movieName);
    }
  }

  $movieUno = new Movie('Avatar', '2012', 'Osvaldo Paniccia', '2012', 'Nino Frassica', 'snuff movie', '1');

  var_dump($movieUno);


?>
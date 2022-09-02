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
        $this->setOscar($_oscar);
    }
    public function setOscar ($oscar){
        if($this->oscar > 1){
            $this->oscar = $oscar;
        } else {
            $this->oscar = 'è un filMaccio';
        }
        
    }
    public function setName ($movieName){
        if (strlen($movieName) > 3) {
            $this->movieName = $movieName;
        }
    }
  }

  $movieUno = new Movie('Avatar', 'Osvaldo Paniccia', '2012', 'Nino Frassica', 'snuff movie', '3');

  var_dump($movieUno);


?>
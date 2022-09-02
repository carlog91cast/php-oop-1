<?php
class Movie
{
    private $movieName;
    private $director;
    private $year;
    private $mainActor;
    private $genre;
    private $oscar;

    public function __construct($_movieName, $_director, $_year, $_mainActor, $_genre, $_oscar)
    {
        $this->movieName = $_movieName;
        $this->director = $_director;
        $this->year = $_year;
        $this->mainActor = $_mainActor;
        $this->genre = $_genre;
        $this->oscar = $_oscar;
    }

    public function getName()
    {
        return $this->movieName;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getMainActor()
    {
        return $this->mainActor;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getOscar()
    {
        return $this->oscar;
    }
}

$movieOne = new Movie('Avatar', 'Osvaldo Paniccia', '2012', 'Nino Frassica', 'snuff movie', 3);
$movieTwo = new Movie('The Batman', 'Matt Reeves', '2021', 'Robert Pattinson', 'comic movie', 0);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Movies</h1>
    <h2>
        movie one:
        <?php
        echo $movieOne->getName() . ' - director: ' .  $movieOne->getDirector() . ' - year: ' . $movieOne->getYear() . ' - main actor: ' . $movieOne->getMainActor() . ' - genre: ' .  $movieOne->getGenre() . ' - oscar: ' .  $movieOne->getOscar()
        ?>
    </h2>
    <br>
    <h2>
        movie two:
        <?php
        echo $movieTwo->getName() . ' - director: ' .  $movieTwo->getDirector() . ' - year: ' . $movieTwo->getYear() . ' - main actor: ' . $movieTwo->getMainActor() . ' - genre: ' . $movieTwo->getGenre() . ' - oscar: ' .  $movieTwo->getOscar()
        ?>
    </h2>
   

</body>

</html>
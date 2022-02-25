<?php

include './db/database.php';

class Movie
{
  public $id;
  public $poster;
  public $title;
  public $originaLanguage;
  public $description;
  public $vote;
  public $filmDirector;

  function __construct(array $_movieData)
  {
    $this->id = $_movieData['id'];
    $this->poster = $_movieData['poster'];
    $this->title = $_movieData['title'];
    $this->originaLanguage = $_movieData['language'];
    $this->description = $_movieData['description'];
    $this->vote = $_movieData['vote'];
    $this->filmDirector = $_movieData['filmDirector'];
  }
}

$movieCard1 = new Movie($movieList[0]);
var_dump($movieCard1);

$movieCard2 = new Movie($movieList[1]);
var_dump($movieCard2);
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyMovieList</title>
</head>

<body>

</body>

</html>
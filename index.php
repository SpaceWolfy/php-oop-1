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

  public function dataPrint()
  {
    echo $this->poster;
    echo '<div class="text">';
    echo '<h2>' . $this->title . '</h2>';
    echo '<div> <strong> Lingua: </strong>' . $this->originaLanguage . '</div>';
    echo '<div> <strong> Descrizione: </strong> ' . $this->description . '</div>';
    echo '<div> <strong> Voto: </strong> ' . $this->vote . '</div>';
    echo '<div> <strong> Regista: </strong> ' . $this->filmDirector . '</div>';
    echo '</div>';
  }
}

$movieCard1 = new Movie($movieList[0]);
/* var_dump($movieCard1); */
/* echo $movieCard1->dataPrint(); */

$movieCard2 = new Movie($movieList[1]);
/* var_dump($movieCard2); */
/* echo $movieCard2->dataPrint(); */

?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyMovieList</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header>
    <h1>MyMovieList</h1>
  </header>

  <div class="container">
    <div class="cardbox">
      <?php echo $movieCard1->dataPrint() ?>
    </div>
    <div class="cardbox">
      <?php echo $movieCard2->dataPrint() ?>
    </div>
  </div>
</body>

</html>
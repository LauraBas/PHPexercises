<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>   
<?php
class Movie {
    private $title;
    private $director;
    private $rating;

    function __construct($title, $director) {
        $this->title = $title;
        $this->director = $director;
        $this->rating = 0;

      }

  function getTitle() {
    return $this->title;
  }

  function getMovieInformation() {
    return $this->title . $this->director;
  }
}

$titanic = new Movie("Titanic","James Cameron");

echo 
'<div class="card" style="width: 18rem;">';
    '<div class="card-body">';
    $titanic->getMovieInformation();
    '</div>';
'</div>';

?>
</body>
</html>
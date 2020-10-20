<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>   
<?php
class Movie {
    public String $title;
    public String $director;
    public String $image;

    public function __construct(String $title, String $director, String $image) 
    {
        $this->title = $title;
        $this->director = $director;
        $this->image = $image;
    }
}


$titanicImage = 'titanic.jpg';
$titanic = new Movie("Titanic", "James Cameron", $titanicImage);
// echo 
echo <<<TAG
                <div class="col-lg-3 col-md-6">
                    <article class='card' >
                    <main class='card-body'>
                    <h5 class="card-header">$titanic->title</h5>
                    <p class="card-title">$titanic->director</p>
                   <img class='card-img-top'src='${titanicImage}'/>
                    </main>
                    </article>
                </div>
                
TAG;

// $titanic->title . " - " . $titanic->director ."<br>";
// echo '<img src='.${titanicImage}.'/>'
    ?>
</body>
</html>
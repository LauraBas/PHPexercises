<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    .container{
        display: flex;
    }
</style>
<body>   
    <section>
    <div class="container">
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



    $titanic = new Movie("Titanic", "James Cameron",'titanic.jpg' );
    $inception = new Movie("Inception", "Christopher Nolan",'inseption.jpg');

    $films = [$titanic,$inception];

    foreach ($films as $film){
        echo <<<TAG
        <div class="container">
        <div "card border-primary mb-3" style="max-width: 18rem;"">
            <article class='card' >
                    <main class='card-body'>
                        <h5 class="card-header">$film->title</h5>
                        <p class="card-title">$film->director</p>
                        <img class='card-img-top'src='$film->image'/>
                    </main>
                </article>
            </div>
            </div>
            
        TAG;
    }
        ?>
    </div>
    </section>
</body>
</html>
<?php
include_once __DIR__ . '/Models/Movie.php';
include __DIR__ . '/partials/header.php';

include __DIR__ . '/Database/moviesDB.php';

$movies = [];

foreach($moviesDB as $movie){
    $newMovie = new Movie($movie['title'], $movie['director'], $movie['genres'], $movie['year'], $movie['rating'], $movie['originalTitle']);
    array_push($movies, $newMovie);
}

// $movie1 = new Movie('Interstellar', 'Cristopher Nolan', ['fantascienza', 'avventura', 'drammatico'], 2014, 'eng', 8.5);
// $movie2 = new Movie('Avatar', 'James Cameron', ['fantascienza', 'azione', 'avventura'], 2009, 'eng', 8, 'Blue Aliens');

// var_dump($movie1);
// var_dump($movie2);
?>

<div id="app">
    
<header class="p-3">
    <h1>A simple movie list.</h1>
</header>

<div class="container">

    <?php
    foreach ($movies as $movie) {
    ?>

        <div class="movie-card mb-2 border border-secondary rounded p-2">
            <div>
                <h3 class="d-inline-block m-0"><?php echo $movie->title; ?></h3>
                <span class="ms-2 text-secondary"><?php echo '/ '.$movie->originalTitle; ?></span>
            </div>
            <div class="d-flex infos">
                <div class="director-year">Director:  <?php echo $movie->director?> - <?php echo $movie->year ?></div>
                <div class="d-flex">
                    <span>Genres: </span>
                    <ul class="genres p-0 ms-2 mb-0">
                        <?php
                        foreach ($movie->genres as $genre) {
                        ?>
                            <li class="me-2"> <?php echo $genre?> </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="language"> Lang: <?php echo $movie->originalLanguage; ?> </div>
                <div class="rating">Rating: <?php echo $movie->rating; ?></div>
            </div>
        </div>

    <?php
    }
    ?>

</div>

</div>

<?php
include __DIR__ . '/partials/footer.php';
?>
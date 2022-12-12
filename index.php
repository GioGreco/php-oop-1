<?php
include_once __DIR__ . '/Models/Movie.php';
include __DIR__ . '/partials/header.php';

$movie1 = new Movie('Interstellar', 'Cristopher Nolan', ['fantascienza', 'avventura', 'drammatico'], 2014, 'eng', 8.5);
$movie2 = new Movie('Avatar', 'James Cameron', ['fantascienza', 'azione', 'avventura'], 2009, 'eng', 8, 'Blue Aliens');

var_dump($movie1);
var_dump($movie2);
?>

<div id="app">
    <h1>{{message}}</h1>
</div>

<?php
include __DIR__ . '/partials/footer.php';
?>
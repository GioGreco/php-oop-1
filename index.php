<?php
include_once __DIR__ . '/Models/Movie.php';
include __DIR__ . '/partials/header.php';

$movie1 = new Movie('Interstellar', 'Cristopher Nolan', ['fantascienza', 'avventura', 'drammatico'], 2014, 'eng', 7.5);

var_dump($movie1);
?>

<div id="app">
    <h1>{{message}}</h1>
</div>

<?php
include __DIR__ . '/partials/footer.php';
?>
<?php require 'functions.php'; ?>
<?php


$movie = query("SELECT movie.*, genre.genre_name
                FROM movie
                INNER JOIN genre
                ON movie.genre_idgenre = genre.idgenre");

$rating = query("SELECT id_movie, title, description, release_year,rating, picture FROM `movie` ORDER BY `movie`.`rating` DESC LIMIT 5;");


if (isset($_POST['cari'])) {
    $movie = cari_movie($_POST['keyword']);
}
?>
<?php require 'views/partial_guest/header.php'; ?>
<?php require 'views/partial_guest/navigation.php'; ?>
<?php require 'views/partial_guest/slide.php'; ?>
<?php require 'views/partial_guest/content.php'; ?>
<?php require 'views/partial_guest/footer.php'; ?>
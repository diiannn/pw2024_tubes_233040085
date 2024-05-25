<?php require '../functions.php' ?>
<?php
$keyword = $_GET["keyword"];

$query = "SELECT movie.*, genre.genre_name
FROM movie
INNER JOIN genre
ON movie.genre_idgenre = genre.idgenre
WHERE
    movie.title LIKE '%$keyword%' 
    OR movie.description LIKE '%$keyword%'
    OR movie.release_year LIKE '%$keyword%'
    OR movie.rating LIKE '%$keyword%'
    OR movie.movie_trailer LIKE '%$keyword%'
    OR movie.age_rating LIKE '%$keyword%'
    OR movie.writer LIKE '%$keyword%'
    OR movie.director LIKE '%$keyword%'
    OR movie.actor LIKE '%$keyword%'
    OR genre.genre_name LIKE '%$keyword%'
    ";
$movie = query($query);

$rating = query("SELECT id_movie, title, description, release_year,rating, picture FROM `movie` ORDER BY `movie`.`rating` DESC LIMIT 5;");
?>
<?php require '../views/partial_guest/content.php' ?>
<?php ?>
<?php ?>
<?php ?>
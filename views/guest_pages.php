<?php require 'functions.php'; ?>
<?php


// page
$jmldataperhalaman = 10;
$jumlahData = count(query("SELECT movie.*, genre.genre_name 
FROM movie
INNER JOIN genre
ON movie.genre_idgenre = genre.idgenre"));
$jumlahHalaman = ceil($jumlahData / $jmldataperhalaman);
//var_dump($jumlahHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jmldataperhalaman * $halamanAktif) - $jmldataperhalaman;


$movie = query("SELECT movie.*, genre.genre_name
                FROM movie
                INNER JOIN genre
                ON movie.genre_idgenre = genre.idgenre LIMIT $awalData, $jmldataperhalaman");

$rating = query("SELECT movie.*, genre.genre_name FROM movie INNER JOIN genre ON movie.genre_idgenre = genre.idgenre ORDER BY `movie`.`rating` DESC LIMIT 5;");


?>
<?php require 'views/partial_guest/header.php'; ?>
<?php require 'views/partial_guest/navigation.php'; ?>
<?php require 'views/partial_guest/header2.php'; ?>
<?php require 'views/partial_guest/content.php'; ?>
<?php require 'views/partial_guest/footer.php'; ?>
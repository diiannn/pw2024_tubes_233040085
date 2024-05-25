<?php $title = 'Daftar movie'; ?>
<?php require 'views/partial_admin/header.php'; ?>
<?php require 'views/partial_admin/session_check.php'; ?>
<?php require 'views/partial_admin/navigation.php'; ?>
<?php require 'functions.php'; ?>

<!-- Content -->
<?php

//pagination 
$jmldataperhalaman = 2;
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


if (isset($_POST['cari'])) {
    $movie = cari_movie($_POST['keyword']);
}

require 'views/movie/list-view.php';
?>
<!-- Batas Content -->

<?php require 'views/partial_admin/footer.php'; ?>
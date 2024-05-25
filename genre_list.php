<?php $title = 'Daftar Genre'; ?>
<?php require 'views/partial_admin/header.php'; ?>
<?php require 'views/partial_admin/session_check.php'; ?>
<?php require 'views/partial_admin/navigation.php'; ?>
<?php require 'functions.php'; ?>

<!-- Content -->
<?php
$genre = query("SELECT * FROM genre");

if (isset($_POST['cari'])) {
    $genre = cari_genre($_POST['keyword']);
}
require 'views/genre/list-view.php';

?>
<!-- Batas Content -->

<?php require 'views/partial_admin/footer.php'; ?>
<?php $title = 'Tambah Movie'; ?>
<?php require 'views/partial_admin/header.php'; ?>
<?php require 'views/partial_admin/session_check.php'; ?>
<?php require 'views/partial_admin/navigation.php'; ?>
<?php require 'functions.php'; ?>
<!--  Content -->


<?php

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // die;
    if (tambah_movie($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'movie_list.php';
    </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'movie_add.php';
    </script>";
    }
}
?>
<?php $genre = query("SELECT * FROM genre"); ?>
<?php require ('views/movie/add-view.php'); ?>

<!-- Batas Content -->
<?php require 'views/partial_admin/footer.php'; ?>
<?php $title = 'Tambah Genre'; ?>
<?php require 'views/partial_admin/header.php'; ?>
<?php require 'views/partial_admin/session_check.php'; ?>
<?php require 'views/partial_admin/navigation.php'; ?>
<?php require 'functions.php'; ?>
<!--  Content -->

<?php
if (isset($_POST['submit'])) {
    if (tambah_genre($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'genre_list.php';
    </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'genre_add.php';
    </script>";
    }
}
?>

<?php require ('views/genre/add-view.php'); ?>

<!-- Batas Content -->
<?php require 'views/partial_admin/footer.php'; ?>
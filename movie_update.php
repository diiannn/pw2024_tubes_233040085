<?php $title = 'Ubah Movie'; ?>
<?php require 'views/partial_admin/header.php'; ?>
<?php require 'views/partial_admin/session_check.php'; ?>
<?php require 'views/partial_admin/navigation.php'; ?>
<?php require 'functions.php'; ?>

<!-- Content -->
<?php
$id = $_GET['id'];
if ($id == NULL) {
    echo "<script>
    alert('Pilih data terlebih dahulu!');
    document.location.href = 'movie_list.php';
</script>";
}

$data = query("SELECT * FROM movie WHERE id_movie = $id")[0];

if (isset($_POST['submit'])) {
    if (ubah_movie($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah!');
        document.location.href = 'movie_list.php';
    </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah!');
        document.location.href = 'movie_list.php';
    </script>";
    }
}
?>
<?php $genre = query("SELECT * FROM genre"); ?>
<?php require ('views/movie/update-view.php'); ?>

<!-- Batas Content -->
<?php require 'views/partial_admin/footer.php'; ?>
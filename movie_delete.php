<?php require 'views/partial_admin/session_check.php'; ?>
<?php
require 'functions.php';


$id = $_GET['id'];

if ($id == NULL) {
    echo "<script>
    alert('Pilih data terlebih dahulu!');
    document.location.href = 'movie_list.php';
</script>";
} else {
    if (hapus_movie($id) > 0) {
        echo "
<script>
    alert('Data berhasil dihapus!');
    document.location.href = 'movie_list.php';
</script>";
    } else {
        echo "
<script>
    alert('Data gagal dihapus!');
    document.location.href = 'movie_list.php';
</script>";
    }
}

?>
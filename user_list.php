<?php $title = 'Daftar User'; ?>
<?php require 'views/partial_admin/header.php'; ?>
<?php require 'views/partial_admin/session_check.php'; ?>
<?php require 'views/partial_admin/navigation.php'; ?>
<?php require 'functions.php'; ?>

<!-- Content -->
<?php
$user = query("SELECT * FROM user");
if (isset($_POST['cari'])) {
    $user = cari_user($_POST['keyword']);
}
require 'views/user/list-view.php';
?>
<!-- Batas Content -->

<?php require 'views/partial_admin/footer.php'; ?>
<?php require 'functions.php'; ?>
<?php require 'views/partial_guest/header.php'; ?>
<?php require 'views/partial_guest/navigation.php'; ?>
<?php

// Ambil kategori yang dipilih dari parameter URL
$kategoriValue = $_GET['genre'];

// Query untuk mendapatkan data berdasarkan kategori
if ($kategoriValue == 'all') {
    $query = "SELECT * FROM genre";
} else {

    $query = "SELECT * FROM genre WHERE genre_name = '$kategoriValue'";
}

$kategori = mysqli_query($conn, $query);
?>
<section id="cardkatalog  " style="background-color:#FCBC94; padding-top:20px">
    <div class="container">
        <div class="row">
            <?php foreach ($kategori as $brg): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 gambarnaik">
                    <a class="text-decoration-none" href="./detailitem.php?id=<?= $brg["id"] ?>">
                        <div class="card p-1" style="width: 20rem; background:#D5A3B8;">
                            <img src="../assets/img/<?= $brg['gambar'] ?>" alt="" style="width: 100%; height: 400px;" />
                            <div class="card-body">
                                <h4 style="color: white;">
                                    <?= $brg['nama'] ?> <br />
                                    <br />
                                    <span style="font-size: 13px; color:white;"><?= $brg['detail']; ?></span>
                                </h4>
                                <p style="color:#F96204 !important;">Produk Terbaru</p>
                                <div class="card-fasilitas">
                                    <h4 style="color: white;">Rp.<?= $brg['harga'] ?></h4>
                                    <p style="color:#F96204 !important;">&nbsp; Diskon</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- Footer -->

<?php require 'views/partial_guest/footer.php'; ?>
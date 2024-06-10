<?php require 'functions.php'; ?>
<?php require 'views/partial_guest/header.php'; ?>
<?php require 'views/partial_guest/navigation.php'; ?>
<?php
//kategori movie
$genre = query("SELECT * FROM genre ORDER BY genre_name ASC");
$selected_genre = $_GET['genre'] ?? null;

if ($selected_genre) {
    $movie = query("SELECT movie.*, genre.genre_name
                    FROM movie
                    INNER JOIN genre
                    ON movie.genre_idgenre = genre.idgenre
                    WHERE genre.idgenre = $selected_genre");
} else {
    $movie = query("SELECT movie.*, genre.genre_name
                    FROM movie
                    INNER JOIN genre
                    ON movie.genre_idgenre = genre.idgenre");
}

if (isset($_POST['cari'])) {
    $movie = cari_movie($_POST['keyword']);
}

?>

<section id="kategori">
    <div class="container text-left pt-5">
        <hr>
        <h1 class="pw-bold">Movie By Genre</h1>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-primary">Show All</a>
        <?php foreach ($genre as $gen): ?>
            <a href="?genre=<?= $gen['idgenre']; ?>" class="btn btn-warning"><?= $gen['genre_name']; ?></a>
        <?php endforeach; ?>
        <?php if (empty($movie)): ?>
            <div class="col">
                <div class="pt-3">
                    <h2>Not found any film</h2>
                </div>
            </div>
        <?php else: ?>
            <div class="row row-col-1 row-col-md-5 g-3">
                <?php foreach ($movie as $mv): ?>
                    <div class="col pt-3 pb-4">
                        <div class="card" style="width: 15rem; border:none; border-radius: ;">
                            <div class="img-card">
                                <img src="images/<?= $mv["picture"]; ?>" class="card-img-top img-hover" alt="..."
                                    style="widht:300px; height:350px;">
                                <div class="overlay">
                                    <a class="info" href="detail_movie.php?id=<?= $mv["id_movie"]; ?>">READ MORE</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-start" style="height:20px;"> <?php
                                if (strlen($mv["title"]) > 20):
                                    echo substr($mv["title"], 0, 19) . '..';
                                else:
                                    echo $mv['title'];
                                endif;
                                ?></h5>
                                <div class="col text-start"><span><?= $mv["release_year"]; ?></span></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<script src="js/scriptkategori.js"></script>
<?php require 'views/partial_guest/footer.php'; ?>
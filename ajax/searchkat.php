<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT movie.*, genre.genre_name
FROM movie
INNER JOIN genre
ON movie.genre_idgenre = genre.idgenre
WHERE
    movie.title LIKE '%$keyword%' 
    OR movie.release_year LIKE '%$keyword%'
    OR movie.rating LIKE '%$keyword%'
    OR movie.age_rating LIKE '%$keyword%'
    OR movie.writer LIKE '%$keyword%'
    OR movie.director LIKE '%$keyword%'
    OR movie.actor LIKE '%$keyword%'
    OR genre.genre_name LIKE '%$keyword%'
    ";
$movie = query($query);


$query = "SELECT * FROM genre WHERE genre_name LIKE '%$keyword%'";
$genre = query($query);

// '../kategori.php';
?>
<section id="kategori">
    <div class="container text-left pt-5">
        <hr>
        <h1>Movie By Genre</h1>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-primary">Show All</a>
        <?php foreach ($genre as $gen): ?>
            <a href="?genre=<?= $gen['idgenre']; ?>" class="btn btn-warning"><?= $gen['genre_name']; ?></a>
        <?php endforeach; ?>
        <div class="row">
            <?php foreach ($movie as $mv): ?>
                <div class="col pt-3 pb-4">
                    <div class="card" style="width: 15rem; border:none; border-radius: ;">
                        <div class="img-card">
                            <img src="images/<?= $mv["picture"]; ?>" class="card-img-top img-hover" alt="..."
                                style="widht:300px; height:350px;">
                            <div class="overlay">
                                <a class="info" href="detail_movie.php?id=<?= $mv["id_movie"]; ?>">Detail here</a>
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
    </div>
</section>
<?php require 'functions.php'; ?>
<?php require 'views/partial_guest/header.php'; ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $movie = query(
        "SELECT movie.*, genre.genre_name
    FROM movie
    INNER JOIN genre
    ON movie.genre_idgenre = genre.idgenre
    WHERE id_movie='$id'"
    );
}
?>


<div class="container mt-2 ">
    <div class="container-fluid">
        <?php
        foreach ($movie as $mv):

            ?>
            <div class="card">
                <div class="card-header">
                    MOVIE
                </div>

            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="container-detail-movie">
                        <h1><?= $mv["title"]; ?></h1>
                        <h5><?= $mv["release_year"]; ?></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rting pt-2">
                        <div class="row text-start">
                            <div class="col-5">
                                <h5>Rating</h5>
                                <i class="bi bi-star-fill m-1"
                                    style="color:yellow;"></i><span><?= $mv["rating"]; ?>/10</span>
                            </div>
                            <div class="col-md-5">
                                <h5>Age Rating</h5>
                                <span><?= $mv["age_rating"]; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-3">
                        <div class="img-fluid text-center p-0 m-0">
                            <img src="images/<?= $mv["picture"]; ?>" alt=""
                                style="width: 300px; height: 450px; border: 1px solid;">
                        </div>
                    </div>
                    <div class=" container-tr col-9 text-end">
                        <iframe class="mt-2"
                            src='https://www.youtube.com/embed/<?= $mv["movie_trailer"]; ?>?autoplay=1&mute=0'></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="detail-mv">
                    <div class="row">
                        <div class="col-md-9 pt-2">
                            <button
                                class="btn btn-outline-light rounded-pill w-60 h-10"><?= $mv["genre_name"]; ?></button><br>
                            <br>
                            <p><?= $mv["description"]; ?></p>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="director">
                                    <hr>
                                    <h5>Director</h5>
                                    <p><?= $mv["director"]; ?></p>
                                </div>
                                <hr>
                                <div class="writer">
                                    <h5>Writer</h5>
                                    <p><?= $mv["writer"]; ?></p>
                                </div>
                                <hr>
                                <div class="actor">
                                    <h5>Actor</h5>
                                    <p><?= $mv["actor"]; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
</div>



<?php require 'views/partial_guest/footer.php'; ?>
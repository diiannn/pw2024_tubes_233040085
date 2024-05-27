<?php require 'functions.php'; ?>
<?php require 'views/partial_guest/header.php'; ?>
<?php require 'views/partial_guest/navigation.php'; ?>
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

<!-- detail movie -->
<div class="container mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <?php
            foreach ($movie as $mv):
                ?>
                <div class="col-4">
                    <div class="container-img text-center" style="padding-top:70px;">
                        <img src="images/<?= $mv["picture"]; ?>" alt="" style="width: 300px;
      height: 450px;
      border: 1px solid;">
                    </div>
                </div>
                <div class=" col-8 text-start">
                    <div class="col-12">
                        <h1><?= $mv["title"]; ?></h1>
                        <hr>
                        <button class="btn btn-outline-light rounded-pill"><?= $mv["genre_name"]; ?></button>
                    </div>
                    <div class="col-12 d-flex pt-2">
                        <h6 class="pe-2"><i class="bi bi-star-fill"></i><?= $mv["rating"]; ?></h6>
                        <h6 class="px-2"><i class="bi bi-info-circle"></i><?= $mv["age_rating"]; ?></h6>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-8"><?= $mv["description"]; ?></div>
                        <div class="col-4">
                            <div class="row">
                                <div class="director">
                                    <h5>Director</h5>
                                    <p><?= $mv["director"]; ?></p>
                                </div>
                                <div class="writer">
                                </div>                      <h5>Writer</h5>
                                    <p><?= $mv["writer"]; ?></p>
                                </div>
                                <div class="actor">
                                    <h5>Actor</h5>
                                    <p><?= $mv["actor"]; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <?php
                            //         $sql = "SELECT movie_trailer FROM movie";
                            //         $res = mysqli_query($conn, $sql);
                        
                            //         while ($row = mysqli_fetch_assoc($res)) {
                        
                            //             $data = $row['movie_trailer'];
                            //             $final = str_replace('watch?v=', 'embed/', $data);
                            //             echo "
                            //     <iframe
                            //         src='$final'
                            //         frameborder='0'
                            //         allow='autoplay; encrypted-media'
                            //         allowfullscreen>
                            //     </iframe>
                            // ";
                            //         }
                        
                            ?> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12">colum</div> -->
        </div>
    <?php endforeach; ?>
</div>

</div>
</div>

<!-- ++++++++++++++++++++++++++++++++= -->


<?php require 'views/partial_guest/footer.php'; ?>
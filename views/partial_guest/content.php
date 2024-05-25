<!-- TOP Movie -->
<div class="" id="container">
    <div class="container text-center pt-5 ">
        <h1 class="fw-bold ">Top<sub>5</sub> Rated Movies</h1>
        <div class="row">
            <?php
            foreach ($rating as $rt):
                ?>
                <div class="col pt-3 pb-4">
                    <div class="card bg-dark" style="width: 15rem;" data-bs-theme="dark">
                        <img src="images/<?= $rt["picture"]; ?>" class="card-img-top" alt="..."
                            style="widht:300px; height:350px;">
                        <div class="card-body" style="height:15rem;">
                            <h5 class="card-title" style="height:50px"><?= $rt["title"]; ?></h5>
                            <p class="card-text">
                                <?php
                                if (strlen($rt["description"]) > 30):
                                    echo substr($rt["description"], 0, 30) . '...';
                                else:
                                    echo $rt['description'];
                                endif;
                                ?>
                            </p>
                            <div class="row">

                                <div class="col"><span><?= $rt["release_year"]; ?></span></div>
                                <div class="col"><span><i class="bi bi-star-fill"></i><?= $rt["rating"]; ?></span></div>
                            </div>
                            <a href="detail_movie.php?id=<?= $rt["id_movie"]; ?>"><span
                                    class="badge text-bg-info">Detail</span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Movie -->
    <section id="movie">
        <div class="container text-center pt-5">
            <hr>
            <h1 class="fw-bold text-start">Movie</h1>
            <div class="button text-start">
            </div>
            <div class="row">
                <?php
                foreach ($movie as $mv):
                    ?>
                    <div class="col pt-3 pb-4">
                        <div class="card bg-dark" style="width: 15rem;" data-bs-theme="dark">
                            <img src="images/<?= $mv["picture"]; ?>" class="card-img-top" alt="..."
                                style="widht:300px; height:350px;">
                            <div class="card-body" style="height:15rem;">
                                <h5 class="card-title" style="height:60px"><?= $mv["title"]; ?></h5>
                                <p class="card-text">
                                    <?php
                                    if (strlen($mv["description"]) > 60):
                                        echo substr($mv["description"], 0, 60) . '...';
                                    else:
                                        echo $mv['description'];
                                    endif;
                                    ?>
                                </p>
                                <div class="row">

                                    <div class="col"><span><?= $mv["release_year"]; ?></span></div>
                                    <div class="col"><span><i class="bi bi-star-fill"></i><?= $mv["rating"]; ?></span></div>
                                </div>
                                <a href="detail_movie.php?id=<?= $mv["id_movie"]; ?>"><span
                                        class="badge text-bg-info">Detail</span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
</div>
</section>
<?php ?>
<script src="../../pw2024_tubes_233040085/js/script.js"></script>
</body>
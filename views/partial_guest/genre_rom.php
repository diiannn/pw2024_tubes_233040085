<div class="container text-center pt-5 ">
    <hr>
    <h1 class="fw-bold text-start">Romance</h1>
    <div class="row">
        <?php
        foreach ($genre_romance as $rom):
            ?>
            <div class="col pt-3 pb-4">
                <div class="card bg-dark" style="width: 15rem;" data-bs-theme="dark">
                    <img src="images/<?= $rom["picture"]; ?>" class="card-img-top" alt="..."
                        style="widht:300px; height:350px;">
                    <div class="card-body" style="height:15rem;">
                        <h5 class="card-title" style="height:60px"><?= $rom["title"]; ?></h5>
                        <p class="card-text">
                            <?php
                            if (strlen($rom["description"]) > 60):
                                echo substr($rom["description"], 0, 60) . '...';
                            else:
                                echo $rom['description'];
                            endif;
                            ?>
                        </p>
                        <div class="row">

                            <div class="col"><span><?= $rom["release_year"]; ?></span></div>
                            <div class="col"><span><i class="bi bi-star-fill"></i><?= $rom["rating"]; ?></span></div>
                        </div>
                        <a href="detail_movie.php?id=<?= $rom["id_movie"]; ?>"><span
                                class="badge text-bg-info">Detail</span></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
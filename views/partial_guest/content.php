<!-- TOP Movie -->

<div class="" id="container">
    <div class="container text-center pt-5 pb-3" id="rating-movie" style="display:block">
        <h1 class="fw-bold ">Top<sub>5</sub> Rated Movies</h1>
        <div class="row row-col-1 row-col-md-5 g-3">
            <?php
            foreach ($rating as $rt):
                ?>
                <div class="col pt-3 pb-4">
                    <div class="card"
                        style="width: 15rem; border:none; border-radius: ; position: relative; overflow: hidden;">
                        <div class="img-card">
                            <img src="images/<?= $rt["picture"]; ?>" class="card-img-top img-hover" alt="..."
                                style="widht:300px; height:350px;">
                            <div class="overlay">
                                <a class="info" href="detail_movie.php?id=<?= $rt["id_movie"]; ?>">Detail here</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-start" style="height:20px;"> <?php
                            if (strlen($rt["title"]) > 20):
                                echo substr($rt["title"], 0, 19) . '..';
                            else:
                                echo $rt['title'];
                            endif;
                            ?></h5>
                            <div class="row">
                                <div class="col text-start"><span><?= $rt["release_year"]; ?></span></div>
                                <div class="col text-end"><i class="bi bi-star" style="color:yellow;"></i>
                                    <span class="" style=" color :yellow; width: 40px;"><?= $rt["rating"]; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Movie -->
    <section id="movie">
        <div class="container text-center pt-5">
            <hr style="border : 0;
          height: 3px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 146, 0, 0.8), rgba(0, 0, 0, 0));">
            <h1 class="fw-bold text-start">Movie</h1>
            <div class="text-start">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <?php if ($halamanAktif > 1): ?>
                                <a href="?halaman=<?= $halamanAktif - 1 ?> " class="page-link"><span
                                        aria-hidden="true">&laquo;</span></a>
                            <?php endif ?>
                        </li>
                        <li class="page-item d-flex"><?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                                <?php if ($i == $halamanAktif): ?>
                                    <a href="?halaman=<?= $i; ?>" class="page-link"
                                        style="baground-color: blue; color: white;"><?= $i; ?></a>
                                <?php else: ?>
                                    <a href="?halaman=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </li>

                        <li class="page-item">
                            <?php if ($halamanAktif < $jumlahHalaman): ?>
                                <a href="?halaman=<?= $halamanAktif + 1 ?>" class="page-link"><span
                                        aria-hidden="true">&raquo;</span></a>
                            <?php endif ?>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row row-col-1 row-col-md-5 g-3">
                <?php
                foreach ($movie as $mv):
                    ?>
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
</div>

</section>

<?php ?>

<script src="../../pw2024_tubes_233040085/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
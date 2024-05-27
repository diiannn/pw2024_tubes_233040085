<div class="container">
    <div class="containertext-left pt-5">
        <div class="row">
            <div class="col">
                <h1 class="list">List <span class="badge text-bg-secondary">Movie</span></h1>
                <hr>
                <a class=" btn btn-primary m-1" href="movie_add.php" target="blank" role="button">Tambah</a> | <a
                    class=" btn btn-danger m-1" href="cetak.php" role="button">Cetak</a>
                <form class="form-cari" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Cari"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="submit" name="cari"
                            id="button-addon2">Cari</button>
                    </div>

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
                </form>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th style="width: 5%" class="text-center">#</th>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center" style="width:40%;">Description</th>
                            <th scope="col" class="text-center">Release year</th>
                            <th scope="col" class="text-center">Rating</th>
                            <th scope="col" class="text-center">Trailer</th>
                            <th scope="col" class="text-center">Age rating</th>
                            <th scope="col" class="text-center">Writer</th>
                            <th scope="col" class="text-center">Director</th>
                            <th scope="col" class="text-center">Aktor</th>
                            <th scope="col" class="text-center">Thumbnail</th>
                            <th scope="col" class="text-center">Genre</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($movie as $mv):
                            ?>

                            <tr>
                                <th scope="row" class="text-center"><?= $i; ?></th>
                                <td><?= $mv["title"]; ?></td>
                                <td><?= $mv["description"]; ?></td>
                                <td><?= $mv["release_year"]; ?></td>
                                <td><?= $mv["rating"]; ?></td>
                                <td><?= $mv["movie_trailer"]; ?></td>
                                <td><?= $mv["age_rating"]; ?></td>
                                <td><?= $mv["writer"]; ?></td>
                                <td><?= $mv["director"]; ?></td>
                                <td><?= $mv["actor"]; ?></td>
                                <td><img src="images/<?= $mv["picture"]; ?>" alt="gambar movie" width="100"></td>
                                <td><?= $mv["genre_name"]; ?></td>
                                <td class="text-center">
                                    <a href="movie_update.php?id=<?= $mv["id_movie"]; ?>" class="btn btn-warning"> Ubah</a>
                                    <a href="movie_delete.php?id=<?= $mv['id_movie']; ?>" class="btn btn-danger"
                                        onclick="return confirm('Yakin')">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
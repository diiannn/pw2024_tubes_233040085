<div class="container text-left pt-3">
    <div class="row">
        <div class="col">
            <h1>List <span class="badge text-bg-secondary">Genre</span></h1>
            <hr>

            <a class="btn btn-primary m-1" href="genre_add.php" role="button"><i class="bi bi-plus"></i>
                Tambah</a>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="submit" name="cari" id="button-addon2">Cari</button>
                </div>
            </form>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="table-dark">
                        <th style="width: 5%" class="text-center">#</th>
                        <th scope="col" style="width: 80%" class="text-center">Genre</th>
                        <th scope="col" style="width: 15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($genre as $gen):
                        ?>

                        <tr>
                            <th scope="row" class="text-center"><?= $i; ?></th>
                            <td><?= $gen["genre_name"]; ?></td>
                            <td class="text-center">
                                <a href="genre_update.php?id=<?= $gen["idgenre"]; ?>" class="btn btn-warning"> <i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="genre_delete.php?id=<?= $gen['idgenre']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Yakin')"><i class="bi bi-trash" style="color:black;"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
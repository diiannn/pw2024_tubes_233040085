<div class="container text-left pt-3">
    <div class="row">
        <div class="col">
            <h1>List <span class="badge text-bg-secondary">User</span></h1>
            <hr>
            <a class="btn btn-primary m-1" href="user_add.php" role="button"><i class="bi bi-plus"></i>Tambah</a>
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
                        <th scope="col" style="width: 35%" class="text-center">Name</th>
                        <th scope="col" style="width: 35%" class="text-center">Username</th>
                        <!-- <th scope="col" class="text-center">Password</th> -->
                        <th scope="col" style="width: 10%" class="text-center">status</th>
                        <th scope="col" style="width: 15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($user as $usr):
                        ?>

                        <tr>
                            <th scope="row" class="text-center"><?= $i; ?></th>
                            <td><?= $usr["full_name"]; ?></td>
                            <td><?= $usr["username"]; ?></td>
                            <!-- <td><?= $usr["password"]; ?></td> -->
                            <td><?php
                            if ($usr["status"] == 1):
                                echo '<span class="badge text-bg-success">Admin</span>';
                            else:
                                echo '<span class="badge text-bg-danger">Guest</span>';
                            endif; ?>

                            </td>
                            <td class="text-center">
                                <a href="user_update.php?id=<?= $usr["iduser"]; ?>" class="btn btn-warning"> <i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="user_delete.php?id=<?= $usr['iduser']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Yakin')"><i class="bi bi-trash" style="color:black;" s></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
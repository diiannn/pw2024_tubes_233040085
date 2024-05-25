<div class="container text-left pt-5">
    <div class="row">
        <div class="col">
            <h1>Ubah <span class="badge text-bg-secondary">user</span></h1>
            <hr>
            <form action="" method="POST" class="text-decoration-none pb-5">
                <input type="hidden" value="<?= $data["iduser"] ?>" name="iduser">
                <div class="mb-3">
                    <label for="full_name" class="form-label fs-4">Name</label>
                    <input type="text" name="full_name" class="form-control" id="full_name"
                        value="<?= $data["full_name"] ?>" placeholder="Add user here" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label fs-4">Username</label>
                    <input type="text" name="username" class="form-control" id="username"
                        placeholder="Add username here" value="<?= $data["username"] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-4">Password</label>
                    <span class="badge text-bg-warning">*) Kosongkan jika tidak ingin merubah password</span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="********"
                        minlength="8" value="">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label fs-4">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status1" <?= ($data["status"] == 1) ? "checked" : ""; ?> value="1">
                        <label class="form-check-label" for="status1">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status2" <?= ($data["status"] == 0) ? "checked" : ""; ?> value="0">
                        <label class="form-check-label" for="status2">
                            Guest
                        </label>
                    </div>
                </div>

                <button class="btn btn-danger" type="submit" name="submit">Simpan</button> <a href="user_list.php"
                    class="btn btn-primary">Kembali</a>

            </form>


        </div>
    </div>
</div>
<div class="container text-left pt-5">
    <div class="row">
        <div class="col">
            <h1>Ubah <span class="badge text-bg-secondary">Genre</span></h1>
            <hr>
            <form action="" method="POST">
                <input type="hidden" value="<?= $data["idgenre"] ?>" name="idgenre">
                <!-- <ul>
                    <li> -->
                <div class="mb-3">
                    <label for="genre_name" class="form-label">Genre</label>
                    <input type="text" class="form-control" name="genre_name" id="genre_name"
                        value="<?= $data["genre_name"] ?>" required placeholder="Genre">
                </div>

                <!-- </li>
                    <li> -->
                <button class="btn btn-danger" type="submit" name="submit">Simpan</button> <a href="genre_list.php"
                    class="btn btn-primary">Kembali</a>
                <!-- </li>
                </ul> -->

            </form>
        </div>
    </div>
</div>
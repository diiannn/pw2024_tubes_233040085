<div class="container text-left pt-5">
    <div class="row">
        <div class="col">
            <h1>Ubah <span class="badge text-bg-secondary">movie</span></h1>
            <hr>
            <form action="" method="POST" class="text-decoration-none pb-5" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data["id_movie"] ?>" name="id_movie">
                <div class="mb-3">
                    <label for="title" class="form-label fs-4 fw-medium">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= $data["title"] ?>"
                        placeholder="Add movie here" required>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Write description here" name="description"
                        id="description"><?= $data["description"] ?></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="mb-3">
                    <label for="release_year" class="form-label fs-4 fw-medium">release year</label>
                    <input type="number" name="release_year" class="form-control" id="release_year" placeholder="Year"
                        required maxlength="4" required value="<?= $data["release_year"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label fs-4 fw-medium">Rating</label>
                    <input type="text" name="rating" class="form-control" id="rating" value="<?= $data["rating"] ?>"
                        placeholder="Add rating here" required>
                </div>
                <div class="mb-3">
                    <label for="movie_trailer" class="form-label fs-4 fw-medium">Trailer <span
                            class="badge text-bg-warning fs-6">Masukan
                            id link youtube</span></label>
                    <input type="text" name="movie_trailer" class="form-control" id="movie_trailer"
                        value="<?= $data["movie_trailer"] ?>" placeholder="link movie_trailer" required>
                </div>
                <div class="mb-3">
                    <label for="age_rating" class="form-label fs-4 fw-medium">Age rating</label>
                    <input type="text" name="age_rating" class="form-control" id="age_rating"
                        value="<?= $data["age_rating"] ?>" placeholder="age rating" required>
                </div>
                <div class="mb-3">
                    <label for="writer" class="form-label fs-4 fw-medium">Writer</label>
                    <input type="text" name="writer" class="form-control" id="writer" placeholder="Add writer here"
                        required value="<?= $data["writer"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label fs-4 fw-medium">Director</label>
                    <input type="text" name="director" class="form-control" id="director"
                        value="<?= $data["director"] ?>" placeholder="director" required>
                </div>
                <div class="mb-3">
                    <label for="actor" class="form-label fs-4 fw-medium">Actor</label>
                    <input type="text" name="actor" class="form-control" id="actor" value="<?= $data["actor"] ?>"
                        placeholder="link actor" required>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label fs-4 fw-medium">Upload Thumbnail</label>
                    <input class="form-control" type="file" name="picture" id="picture" accept=".jpg,.jpeg,.png">
                    <input class="form-control" type="hidden" name="pictureLama" id="pictureLama"
                        value="<?= $data['picture']; ?>">
                    <br><img src="images/<?= $data["picture"]; ?>" alt="gambar movie" width="100">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label fs-4 fw-medium">Genre</label>
                    <select class="form-select" name="genre" id="genre" aria-label="Default select example" required>
                        <?php
                        foreach ($genre as $gn):
                            ?>
                            <option value="<?= $gn["idgenre"]; ?>" <?= ($gn["idgenre"] == $data["genre_idgenre"]) ? 'Selected' : ''; ?>><?= $gn["genre_name"]; ?>

                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button class="btn btn-danger" type="submit" name="submit">Simpan</button> <a href="movie_list.php"
                    class="btn btn-primary">Kembali</a>

            </form>


        </div>
    </div>
</div>
<div class="container text-left pt-5">
    <div class="row">
        <div class="col">
            <h1>Tambah <span class="badge text-bg-secondary">movie</span></h1>
            <hr>
            <form action="" method="POST" class="text-decoration-none pb-5" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="title" class="form-label fs-4">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Movie title" required>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Write description here" name="description"
                        id="description"></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="mb-3">
                    <label for="release_year" class="form-label fs-4">release year</label>
                    <input type="number" name="release_year" class="form-control" id="release_year" placeholder="Year"
                        required maxlength="4" required>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label fs-4">Rating</label>
                    <input type="text" name="rating" class="form-control" id="rating" placeholder="Add user here"
                        required>
                </div>
                <div class="mb-3">
                    <label for="movie_trailer" class="form-label fs-4">Movie trailer</label>
                    <input type="text" name="movie_trailer" class="form-control" id="movie_trailer"
                        placeholder="Input link here" required>
                </div>
                <div class="mb-3">
                    <label for="age_rating" class="form-label fs-4">Age rating</label>
                    <input type="text" name="age_rating" class="form-control" id="age_rating" placeholder="Age rating"
                        required>
                </div>
                <div class="mb-3">
                    <label for="writer" class="form-label fs-4">Writer</label>
                    <input type="text" name="writer" class="form-control" id="writer" placeholder="Add writer here"
                        required>
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label fs-4">Director</label>
                    <input type="director" name="director" class="form-control" id="director" placeholder="add director"
                        required>
                </div>
                <div class="mb-3">
                    <label for="actor" class="form-label fs-4">Actor</label>
                    <input type="actor" name="actor" class="form-control" id="actor" placeholder="add actor" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label fs-4">Genre</label>
                    <select class="form-select" name="genre" id="genre" aria-label="Default select example" required>
                        <?php
                        foreach ($genre as $gn):
                            ?>
                            <option value="<?= $gn["idgenre"]; ?>"><?= $gn["genre_name"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="picture" id="picture" accept=".jpg,.jpeg,.png"
                        required>
                </div>

                <button class="btn btn-danger" type="submit" name="submit">Simpan</button> <a href="movie_list.php"
                    class="btn btn-primary">Kembali</a>

            </form>


        </div>
    </div>
</div>
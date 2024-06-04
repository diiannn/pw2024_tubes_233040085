<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand position-absolute top-0 start-0" href="#"><img src="images/logo.png" style="width:180px;"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto fs-5">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movie_list.php">Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="genre_list.php">Genre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_list.php">User</a>
                </li>
            </ul>
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <button class="btn btn-danger"><a href="logout.php" style="text-decoration:none; color:white;"><i
                                class="bi bi-box-arrow-right"></i></a></button>
                </div>
            </div>
        </div>
    </div>
</nav>
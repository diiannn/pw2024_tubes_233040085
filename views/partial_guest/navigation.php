<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top" id="nav">
    <div class="container ">
        <a class="navbar-brand" href="#"><span>D</span>Cinema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex mx-auto my-2" role="search" action="" method="POST">
                <input class="form-control mx-auto rounded-pill" type="search" name="keyword" id="keyword"
                    placeholder="Search" aria-label="Search" autocomplete="off" style="width:600px" />
                <button class="btn btn-outline-primary" type="submit" name="cari" id="tombol-cari "
                    style="display: none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 15 15">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kategori.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#movie">MOVIE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://dummyimage.com/30x30/ffd4ff/fff" alt="" class="rounded-circle"></a>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="registrasi.php">Registration</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
        </div>
    </div>
</nav>
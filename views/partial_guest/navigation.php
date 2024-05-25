<!-- NAVBAR -->
<!-- <link rel="stylesheet" href="assets/css/sidebar.css" /> -->

<!-- <nav class="navbar navbar-light navbar-expand-lg sticky-top navbar-scroll">
    <div class="container-fluid">
        <a class="navbar-brand fs-3" href="#"><span>D</span>cinema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item fs-5">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item fs-5">
                    <a class="nav-link active" aria-current="page" href="kategori.php">movie</a>
                </li>

            </ul>
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <button class="btn btn-danger"><a href="login.php"
                            style="text-decoration:none; color:white;">LOGIN</a></button>
                </div>
                <div class="p-2">
                    <form class="d-flex" role="search" action="" method="POST">
                        <input class="form-control me-2" type="search" name="keyword" placeholder="Search"
                            aria-label="Search" autocomplete="off" />
                        <button class="btn btn-outline-primary" type="submit" name="cari">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 15 15">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
    <div class="container ">
        <a class="navbar-brand" href="#"><span>D</span>Cinema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex mx-auto my-2" role="search" action="" method="POST">
                <input class="form-control mx-auto rounded-pill" type="search" name="keyword" id="keyword"
                    placeholder="Search" aria-label="Search" autocomplete="off" style="width:500px" />
                <button class="btn btn-outline-primary" type="submit" name="cari" id="tombol-cari "
                    style="display: none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 15 15">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </form>
            <!-- <form class="form-inline mx-auto my-2">
                <input class="form-control mr-sm-1" type="search" name="keyword" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
            </form> -->

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MOVIE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://dummyimage.com/30x30/ffd4ff/fff" alt="" class="rounded-circle"></a>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="login.php">
                </li> -->
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul> -->

        </div>
    </div>
</nav>
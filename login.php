<?php require 'functions.php'; ?>
<?php session_start(); ?>
<?php require 'views/partial_guest/header.php'; ?>

<?php

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $data = query("SELECT * FROM user WHERE username = '$username' AND password = '$password' ");

    // cek username
    if (count($data) > 0) {
        $data = $data[0];
        // set session
        $_SESSION['login'] = true;

        $_SESSION['username'] = $data['username'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['iduser'] = $data['iduser'];
        header("Location: index.php");
    } else {
        echo "<script>
            alert('Login Gagal!');
            document.location.href = 'login.php';
        </script>";

    }
}
?>

<!-- Content -->
<section class="login vh-100" style="background-color:#76ABAE;">
    <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-5 pb-lg-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>


                                <button type="submit" name="submit" class="btn btn-danger d-grid gap-2 col-7 mx-auto"
                                    style="">LOG
                                    IN</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php require 'views/partial_guest/footer.php'; ?>
<?php require 'functions.php' ?>
<?php require 'views/partial_guest/header.php'; ?>
<?php
// if (isset($_POST["register"])) {
//     if (registrasi($_POST) > 0) {
//         echo " <script>
//         elert ('user baru berhsil ditambahkan!');
//         </script>";
//     } else {
//         echo mysqli_error($conn);
//     }
// }
if (isset($_POST['register'])) {
    // var_dump($_POST);
    // die;
    if (tambah_user($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'user_list.php';
    </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'registrasi.php';
    </script>";
    }
}
?>



<!-- content -->
<section class="regis" style="background-color:#76ABAE;height: 725px;">
    <div class="container py-2">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center" style="height: 700px;">
                        <div class="mb-md-5 mt-md-4">
                            <h2 class="fw-bold mb-2 text-uppercase">SIGN UP</h2>
                            <p class="text-white mb-5"> please registration</p>
                            <form action="" method="POST" class="text-decoration-none pb-5 text-start">

                                <div class="mb-3">
                                    <label for="full_name" class="form-label ">Name</label>
                                    <input type="text" name="full_name" class="form-control" id="full_name"
                                        placeholder="Add user here">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label ">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Add username here">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="password">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">Confirm password</label>
                                    <input type="password" name="password2" class="form-control" id="password2"
                                        placeholder="Repeat your password">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label ">Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status1"
                                            value="1">
                                        <label class="form-check-label" for="status1">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status2" checked
                                            value="0">
                                        <label class="form-check-label" for="status2">
                                            Guest
                                        </label>
                                    </div>
                                </div>


                                <button class="btn btn-danger" type="submit" name="register">Simpan</button> <a
                                    href="index.php" class="btn btn-primary">Kembali</a>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
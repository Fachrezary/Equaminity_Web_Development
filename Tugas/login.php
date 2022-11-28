<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/remixicons/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/aos.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login Page</title>
</head>

<body background="assets/img/Biru.jpg">
    <section class="my-5 vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="assets/img/Panel.jpg" alt="login image" class="img-fluid h-100 img-fill" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="login_action.php" enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb- pb-1">
                                            <i class="fas fa-cubes fa-2x me-3"></i>
                                            <span class="h1 fw-bold mb-0">Login</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3">Masuk ke akun anda</h5>

                                        <div class="form-floating mb-4">
                                            <input type="text" name="username" id="form2Example17" autofocus
                                                autocomplete class="form-control form-control-lg" required />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" id="form2Example27" name="pwd"
                                                class="form-control form-control-lg" required />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input type="submit" value="Login" name="login"
                                                class="btn btn-danger btn-lg btn-block">
                                        </div>

                                        <p class="mb-5 pb-lg-2 text-help">Belum memiliki akun?
                                            <a href="register.php">Registrasi disini</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.min.js"></script>
    <script src="./assets/js/app.js"></script>
 </body>

</html>
<!DOCTYPE html>
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
    <title>Register Page</title>
</head>

<body background="assets/img/Biru.jpg">
    <section class="my-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./assets/img/panel.jpg"
                                    alt="login image" class="img-fluid h-100 img-fill"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="register_action.php" enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3"></i>
                                            <span class="h1 fw-bold mb-0">Sign Up</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3">Buat akun kamu</h5>

                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example17" autofocus autocomplete 
                                            name="username" id="username" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="email" id="form2Example27" name="email" id="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Email</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example27" name="first_name" id="first_name"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">First Name</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="text" id="form2Example27" name="last_name" id="last_name"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Last Name</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" id="form2Example27" name="pwd" id="pwd"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password 1</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" id="form2Example27" name="pwd2" id="pwd2"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password 2</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input type="submit" value="Sign Up" name="submit" class="btn btn-dark btn-lg btn-block">
                                        </div>

                                        <p class="mb-5 pb-lg-2 text-help" >Apakah Kamu memiliki akun? 
                                            <a href="login.php">Login disini</a>
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
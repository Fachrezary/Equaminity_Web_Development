<?php
    session_start();
    if (!empty($_SESSION) && $_SESSION['another']) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
          echo "<body>
                <script>
                    alert('Anda harus login terlebih dahulu!')
                    window.location.replace('login.php')
                </script>
            </body>";
    }
?>

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
    <title>Login Page</title>
</head>

<body background="assets/img/Biru.jpg">

    <section class="vh-100 my-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./assets/img/Panel.jpg" alt="login image" class="img-fluid h-100 img-fill"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3"></i>
                                        <span class="h1 fw-bold mb-0">Account</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3">Informasi Akun Anda</h5>
                                    <form>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="username" id="username"
                                                value="<?php echo $dec['username']; ?>" class="form-control" readonly>
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="email" value="<?php echo $dec['email']; ?>"
                                                id="email" class="form-control" readonly>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="first_name" value="<?php echo $dec['fname']; ?>"
                                                id="first_name" class="form-control" readonly>
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="lname" value="<?php echo $dec['lname']; ?>"
                                                id="lname" class="form-control" readonly>
                                            <label for="lanme">Last Name</label>
                                        </div>
                                    </form>
                                        <br>
                                        <a href="logout.php" class="btn btn-outline-danger">Log out</a>
                                        <a href="home.php" class="btn btn-outline-danger">Home Page</a>
                                  
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
<?php
    include "dbconnect.php";
    $login = FALSE;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1 ) {
            $login = TRUE;
            session_start();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['email'] = $email;

            header("Location: index.html");
        }
        else{
            echo "Invalid Credentials";
        }
    }
 ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gaun Ko Achar</title>
    <link rel="shortcut icon" href="/img/gaunkoachar.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php
        if ($login) {
            echo "Logged in Successfully";
        }
     ?>

    <section class="h-100 gradient-form bg-gray" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <a href="index.html"><img src="/img/gaunkoachar.png" style="width: 185px;" alt="logo"></a>
                                        <h4 class="mt-1 mb-5 pb-1">Login or Register</h4>
                                    </div>

                                    <form>
                                        <p class="mb-5">Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label ps-1" for="form2Example11">Email</label>
                                            <input type="email" id="form2Example11" class="form-control mb-2"
                                                placeholder="Enter your email please" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label ps-1" for="form2Example22">Password</label>
                                            <input type="password" id="form2Example22" class="form-control mb-2"
                                                placeholder="Enter your password please" />
                                        </div>

                                        <div class="text-center pt-1 mb-1 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg me-3 mb-3 w-100 "
                                                type="button">Login</button>
                                        </div>

                                        <div class="text-center mb-5">
                                            <a class="link" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="register.html"><button type="button"
                                                    class="btn btn-outline-secondary ">Create new</button></a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center login-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="index.html"><i class="fas fa-copyright text-light me-2"></i>Gaun Ko
                            Achar</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed and Maintained By <a class="border-bottom" href="https://project0rbit.com">Antarikshya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
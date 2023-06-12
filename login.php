<?php include ('koneksi.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NadiaBakery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Nadia</span>Bakery</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                    <a href="" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Nadia</span>Bakery</h1>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    <div class="container p-5">
        <!--register new-->
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="service-item p-3">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-1" src="img/register.png" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <div class="mt-5 mb-3 pt-5">
                                <a href="" id="regis" role="button" data-toggle="modal" 
                                data-target="#regisModal" 
                                class="btn btn-sm btn-secondary btn-block rounded-pill p-2"
                                style="font-size: 20px;">Register</a>
                                <br>as new customer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="service-item p-3">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-1" src="img/log-in.png" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <div class="mt-5 mb-3 pt-5">
                                <a href="" id="login" role="button" data-toggle="modal" 
                                    data-target="#loginModal" 
                                    class="btn btn-sm btn-secondary btn-block rounded-pill p-2"
                                    style="font-size: 20px;">Login</a>
                                <br>if you have an account
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!--end register new-->
    </div>

    <!-- regis modal -->
    <div class="modal fade" id="regisModal" 
        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="login_query.php">
                            <div class="form-group">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label><br>
                                <input type="text" class="form-control form-control-user"
                                    name="username_regis" id="exampleInputuser" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label><br>
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" name="password_regis" required>
                            </div>
                            <label for="exampleFormControlInput1">Nama</label><br>
                                <input type="text" class="form-control form-control-user"
                                    name="nama_regis" id="exampleInputname" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">No. Telp</label><br>
                                <input type="number" class="form-control form-control-user"
                                    id="exampleInputTelp" name="telp_regis" required>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="regis" class="btn btn-primary btn-user btn-block" 
                                    value="Kirim">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End regis modal -->


    <!-- login modal -->
    <div class="modal fade" id="loginModal" 
        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="login_query.php">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    name="username_login" id="exampleInputuser" 
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Username..." required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" name="password_login" 
                                    placeholder="Password" required>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="login" class="btn btn-primary btn-user btn-block" 
                                    value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End login modal -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
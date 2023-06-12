<?php include ('koneksi.php');
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    if($_SESSION['role']=="1"){
        header("Location: index.php");
    }
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
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      rel="stylesheet"
    />
    
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
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="instagram.php" style="font-size: 30px;">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a class="text-white px-3" href="twitter.php" style="font-size: 30px;">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="location.php" style="font-size: 30px;">
                        <i class="fa-solid fa-location-dot"></i>
                        </a>
                        <a class="text-white px-3" href="bantuan.php">Bantuan</a>
                        <span class="text-white">|</span>
                        <ul class="navbar-nav ml-auto">                     
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle text-white pl-3" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle"
                                        src="dash_admin/img/pelanggan.png"
                                        width="30">
                                    <span class="text-white pl-3"><?php 
                                    if(!isset($_SESSION['username'])){
                                        echo "Belum Login ???";
                                    }else{
                                        echo $_SESSION['username'];
                                    }?></span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <?php 
                                    if(!isset($_SESSION['username'])){?>
                                        <a class="dropdown-item" href="login.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Login
                                        </a>
                                    <?php
                                    }else{?>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                   <?php }?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="product.php" class="nav-item nav-link">Product</a>
                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Nadia</span>Bakery</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="order.php" class="nav-item nav-link">Order</a>
                        <a href="product_cart.php" class="nav-item nav-link active">Cart</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/header_food.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white display-3 mt-lg-5">Cart</h1>
                            <div class="d-inline-flex align-items-center text-white">
                                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                                <i class="fa fa-circle px-3"></i>
                                <p class="m-0">Cart</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Content Table -->
    <?php
        $user=$_SESSION['username'];
        $tampil = mysqli_query($conn, "select * from keranjang,produk,pelanggan 
        where keranjang.id_produk = produk.id_produk AND pelanggan.username_pel = '$user' 
        AND keranjang.id_keranjang NOT IN (SELECT pesanan.id_keranjang from pesanan 
        WHERE keranjang.id_keranjang = pesanan.id_keranjang)");
        $row_tampil = mysqli_num_rows($tampil);
        if ($row_tampil!=0) {?>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Keranjang Anda</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>FOTO PRODUK</th>
                            <th>NAMA PRODUK</th>
                            <th>BANYAK</th>
                            <th>TOTAL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php    
                            while($hasil = mysqli_fetch_array($tampil)){
                        ?>
                        <tr>
                            <td>
                                <img class="img-profile rounded-circle"
                                        src="dash_admin/<?php echo $hasil['foto_produk']; ?>"
                                        width="100">
                            </td>
                            <td><?php echo $hasil['nama_produk']; ?></td>
                            <td><?php echo $hasil['banyak_produk']; ?></td>
                            <td><?php echo $hasil['banyak_produk']*$hasil['harga_produk']; ?></td>
                            <td><a href="" 
                                id="update" role="button" data-toggle="modal" 
                                data-target="#updateModal<?php echo $hasil['id_produk']; ?>">Ubah Jumlah |</a>
                                <!-- update modal -->
                                <div class="modal fade" id="updateModal<?php echo $hasil['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update produk</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="produk_cart_update.php">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id="id_keranjang" name="id_keranjang" 
                                                        value="<?php echo $hasil['id_keranjang']; ?>" hidden>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Banyak Produk</label>
                                                        <input type="number" class="form-control" id="banyak_produk" name="banyak_produk" 
                                                        value="<?php echo $hasil['banyak_produk']; ?>" min="1" required>
                                                    </div>
                                                    <div class="form-group">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- End update modal -->
                                <a href="product_cart_delete.php?id=<?php echo $hasil['id_keranjang'];?>"  
                                id="delete" role="button">Hapus </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <a class="btn btn-secondary" href="order_transaksi.php"  
                    id="bayar" role="button">Order Now</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Content Table -->
    <?php }
    ?>
            
    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.php" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Nadia</span>Bakery</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">Jl. Trunojoyo No. 30A Perumnas Kamal</p>
                            <p class="mb-0">+62 813-3259-0200</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Monday – Sunday</p>
                            <p class="mb-0">06.30 – 21.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


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
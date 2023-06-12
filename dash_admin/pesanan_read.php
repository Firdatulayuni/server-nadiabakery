<?php include ('koneksi.php');
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }
    if($_SESSION['role']=="2"){
        header("Location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Nadia Bakery - Lihat Produk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript" src="Chart.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Nadia Bakery</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Produk:</h6>
                        <a class="collapse-item" href="produk_read.php">Lihat Produk</a>
                        <a class="collapse-item" href="produk_create.php">Tambah Produk</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="pesanan_read.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pesanan</span>
                </a>
                <a class="nav-link collapsed" href="pelanggan_read.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pelanggan</span>
                </a>
                
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

     
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                     
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Lihat Pesanan</h1>
                        
                    </div>

                    <!-- Content Table -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID PESANAN</th>
                                            <th>USERNAME PELANGGAN</th>
                                            <th>NAMA PRODUK</th>
                                            <th>BANYAK PESANAN</th>
                                            <th>TOTAL</th>
                                            <th>WAKTU PEMESANAN</th>
                                            <th>STATUS PESANAN</th>
                                            <th>DIPROSES OLEH</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $tampil = mysqli_query($conn, "select * from pesanan,keranjang,
                                        admin,produk,pelanggan 
                                        where pesanan.id_keranjang = keranjang.id_keranjang
                                        AND pesanan.username_admin = admin.username_admin
                                        AND keranjang.id_produk = produk.id_produk
                                        AND keranjang.username_pel = pelanggan.username_pel");
                                        while($hasil = mysqli_fetch_array($tampil)){
                                    ?>
                                        <tr>
                                            <td><?php echo $hasil['id_pesanan']; ?></td>
                                            <td><?php echo $hasil['username_pel']; ?></td>
                                            <td><?php echo $hasil['nama_produk']; ?></td>
                                            <td><?php echo $hasil['banyak_pesanan']; ?></td>
                                            <td><?php echo $hasil['bayar_pesanan'] ?></td>
                                            <td><?php echo $hasil['waktu_pesanan']; ?></td>
                                            <td>
                                            <?php if($hasil['status_pesanan'] == 1){
                                                echo "Sudah Pick Up";
                                            }else{
                                                echo "Sedang Disiapkan";
                                            } ?>
                                            </td>
                                            <td><?php echo $hasil['username_admin']; ?></td>
                                            <td>
                                            <a href="" 
                                            id="update" role="button" data-toggle="modal" 
                                            data-target="#updateModal<?php echo $hasil['id_pesanan']; ?>">Update</a>
                                            <!-- update modal -->
                                            <div class="modal fade" id="updateModal<?php echo $hasil['id_pesanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update status</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form method="POST" action="pesanan_update.php">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Status Pesanan</label>
                                                            <input id="id_pesanan" name="id_pesanan" value="<?php echo $hasil['id_pesanan']; ?>" hidden>
                                                            <select class="form-control" id="status_pesanan" name="status_pesanan">
                                                            <option value="1">Sudah Pick Up</option>
                                                            <option value="0">Sedang Disiapkan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End update modal -->
                                            </td>    
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <?php
                include('koneksi.php');
                $bulann = mysqli_query($conn,"select DATE_FORMAT(waktu_pesanan,'%b %y') as bulan ,sum(bayar_pesanan) as total from pesanan group by DATE_FORMAT(waktu_pesanan,'%b %y') desc");
                while($row = mysqli_fetch_array($bulann)){
                    $bulan[] = $row['bulan'];
                    $total[] = $row['total'];
                }
                ?>
                <div id="content-wrapper" class="d-flex flex-column">
                    <canvas id="myChart"></canvas>
                </div>


                <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($bulan); ?>,
                            datasets: [{
                                label: 'Grafik Laporan Penjualan Perbulan',
                                data: <?php echo json_encode($total); ?>,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255,99,132,1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
                <!-- Footer -->
                
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Kelompok 4 Rekayasa Perangkat Lunak A</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
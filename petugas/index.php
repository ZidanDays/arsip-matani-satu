<?php
include '../conf/conf.php';
session_start();
if ($_SESSION['status'] != "petugas_login") {
    header("location:../login.php?alert=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arsip - Matani Satu</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/andi1.css">
    <link rel="stylesheet" href="../assets/css/petugas3.css">
    <link rel="stylesheet" href="../assets/css/animasix.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/faviconn.ico" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrapp.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/fontawesome/css/allx.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="brand-logo" href="?q=beranda"><img src="../assets/images/logo2.png" alt="logo"
                        width="200" /></a>
                <a class="navbar-brand brand-logo-mini" href="?q=beranda"><img src="../assets/images/logo-mini.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php
            include '../conf/conf.php';
            $id = $_SESSION['id'];
            $saya = mysqli_query($koneksi, "select * from petugas where petugas_id='$id'");
            $s = mysqli_fetch_assoc($saya);
            ?>
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="../gambar/petugas/<?php echo $s['petugas_foto']; ?>" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">

                                <span class="font-weight-bold mb-2"><?php echo $s['petugas_nama']; ?></span>
                                <span class="text-secondary text-small">User</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=beranda">
                            <span class="menu-title">Home</span>
                            <i class="menu-icon fa-solid fa-chart-line"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=data-arsip-masuk">
                            <span class="menu-title">Surat Masuk</span>
                            <i class="fa-solid fa-file-circle-plus menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=data-arsip-keluar">
                            <span class="menu-title">Surat Keluar</span>
                            <i class="fa-solid fa-file-circle-minus menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=kategori">
                            <span class="menu-title">Kategori</span>
                            <i class="fa-solid fa-table-list menu-icon" style="margin-right: 2px;"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="?q=riwayat_unduhan">
                            <span class="menu-title">Riwayat Unduh</span>
                            <i class="fa-solid fa-floppy-disk menu-icon" style="margin-right: 3px;"></i>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="?q=riwayat_unduhan">
                            <span class="menu-title">
                                Riwayat Unduh <br>
                                Surat Masuk
                            </span>
                            <i class="fa-solid fa-clock-rotate-left menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=riwayat_unduhan_skeluar">
                            <span class="menu-title">
                                Riwayat Unduh <br>
                                Surat Keluar
                            </span>
                            <i class="fa-solid fa-clock-rotate-left menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=gantipas">
                            <span class="menu-title">Ganti Password</span>
                            <i class="fa-solid fa-cash-register menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=petugas_edit">
                            <span class="menu-title">Pengaturan</span>
                            <i class="fa-solid fa-sliders menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">
                            <span class="menu-title">Tentang</span>
                            <i class="fa-solid fa-sliders menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?q=logout">
                            <span class="menu-title">Logout</span>
                            <i class="fa-solid fa-right-from-bracket menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item sidebar-actions">
                    </li>
                </ul>
            </nav>

            <?php include 'link.php'; ?>

        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Salsa
                    2024</span>
                <!-- <span class="float-none float-sm-end mt-1 mt-sm-0 text-end">By Andi</span> -->
            </div>
        </footer>

        <!-- page-body-wrapper ends -->

    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- End custom js for this page -->





</body>

</html>
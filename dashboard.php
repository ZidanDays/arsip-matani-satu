<?php
include 'conf/conf.php';
session_start();
if ($_SESSION['status'] != "user_login") {
    header("location:../login.php?alert=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arsip</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.basxe.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/andibaru2.css">
    <link rel="stylesheet" href="assets/css/dashboard1.css">
    <link rel="stylesheet" href="assets/css/andi1.css">
    <link rel="stylesheet" href="assets/css/animasix.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/faviconn.ico" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrapp.min.css">

    <link rel="stylesheet" href="assets/fontawesome/css/allx.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row shadow">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a href="?q=beranda"><img src="assets/images/logo2.png" width="200" /></a>
                <a class="navbar-brand brand-logo-mini" href="?q=beranda"><img src="assets/images/logo-mini.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php
            include 'conf/conf.php';
            $id = $_SESSION['id'];
            $saya = mysqli_query($koneksi, "select * from user where user_id='$id'");
            $s = mysqli_fetch_assoc($saya);
            ?>
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="gambar/user/<?= $s['user_foto']; ?>" alt="profile">
                                <span class="login-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column">

                                <span class="font-weight-bold mb-2"><?php echo $s['user_nama']; ?></span>
                                <span class="warna-user">User</span>
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
                        <a class="nav-link" data-toggle="collapse" href="#arsipDropdown" aria-expanded="false"
                            aria-controls="arsipDropdown">
                            <span class="menu-title">Data Arsip</span>
                            <i class="menu-icon fa-solid fa-server"></i>
                        </a>
                        <div class="collapse" id="arsipDropdown">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="?q=data-arsip">
                                        <i class="fas fa-inbox"></i>
                                        <span class="menu-title"> Surat Masuk</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?q=surat_keluar">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span class="menu-title"> Surat Keluar</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?q=user_edit">
                            <span class="menu-title">Pengaturan Akun</span>
                            <i class="menu-icon fa-solid fa-sliders"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=gantipas">
                            <span class="menu-title">Ganti Password</span>
                            <i class="menu-icon fa-solid fa-wrench"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?q=logout">
                            <span class="menu-title">Logout</span>
                            <i class="menu-icon fa-solid fa-right-from-bracket"></i>
                        </a>
                    </li>
                    <li class="nav-item sidebar-actions">
                    </li>
                </ul>
            </nav>


            <?php include 'link.php'; ?>

        </div>

        <!-- page-body-wrapper ends -->

    </div>




    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->





</body>

</html>
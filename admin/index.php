<?php
include '../conf/conf.php';
session_start();
if ($_SESSION['status'] != "admin_login") {
    header("location:../login.php?alert=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Arsip Desa Matani Satu</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.basxe.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/andibaru2.css">
    <link rel="stylesheet" href="../assets/css/dashboard1.css">
    <link rel="stylesheet" href="../assets/css/andi1.css">
    <link rel="stylesheet" href="../assets/css/animasix.css">
    <link rel="stylesheet" href="table.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/Lambang_Kabupaten_Minahasa_Selatan.png" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrapp.min.css">

    <link rel="stylesheet" href="../assets/fontawesome/css/allx.min.css">

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
                <a href="?q=beranda"><img src="../assets/images/logo2.png" width="200" /></a>
                <a class="navbar-brand brand-logo-mini" href="?q=beranda"><img src="../assets/images/logo-mini.png"
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
            include '../conf/conf.php';
            $id = $_SESSION['id'];
            $saya = mysqli_query($koneksi, "select * from admin where admin_id='$id'");
            $s = mysqli_fetch_assoc($saya);
            ?>
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <!-- <img src="../gambar/user/<?= $s['admin_foto']; ?>" alt="profile"> -->
                                <img src="../assets/images/Lambang_Kabupaten_Minahasa_Selatan.png" alt="profile">
                                <span class="login-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column">

                                <span class="font-weight-bold mb-2"><?php echo $s['admin_nama']; ?></span>
                                <span class="warna-user">Admin</span>
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
                        <a class="nav-link" href="?q=data-penduduk">
                            <span class="menu-title">Data Penduduk</span>
                            <i class="fa-solid fa-file-circle-plus menu-icon"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#arsipDropdown" aria-expanded="false"
                            aria-controls="arsipDropdown">
                            <span class="menu-title">Data Arsip</span>
                            <i class="menu-icon fa-solid fa-folder-open"></i>
                        </a>
                        <div class="collapse" id="arsipDropdown">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="?q=data-arsip">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <span class="menu-title">Surat Masuk</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?q=surat_keluar">
                                        <i class="fas fa-paper-plane"></i>
                                        <span class="menu-title">Surat Keluar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#userDropdown" aria-expanded="false"
                            aria-controls="userDropdown">
                            <span class="menu-title">Pengaturan Akun</span>
                            <i class="menu-icon fa-solid fa-user-cog"></i>
                        </a>
                        <div class="collapse" id="userDropdown">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="?q=data_user">
                                        <i class="fas fa-users"></i>
                                        <span class="menu-title">Daftar Pegawai</span>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="?q=data_person">
                                        <i class="fas fa-user-friends"></i>
                                        <span class="menu-title">Daftar User</span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
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
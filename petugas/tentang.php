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

    <style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
    }

    h1,
    h2 {
        color: black;
    }

    ul {
        list-style-type: disc;
        margin-left: 20px;
    }
    </style>

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="brand-logo" href="index.php?q=beranda"><img src="../assets/images/logo2.png" alt="logo"
                        width="200" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.php?q=beranda"><img
                        src="../assets/images/logo-mini.png" alt="logo" /></a>
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
                        <a class="nav-link" href="index.php?q=beranda">
                            <span class="menu-title">Home</span>
                            <i class="menu-icon fa-solid fa-chart-line"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=data-arsip-masuk">
                            <span class="menu-title">Surat Masuk</span>
                            <i class="fa-solid fa-file-circle-plus menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=data-arsip-keluar">
                            <span class="menu-title">Surat Keluar</span>
                            <i class="fa-solid fa-file-circle-minus menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=kategori">
                            <span class="menu-title">Kategori</span>
                            <i class="fa-solid fa-table-list menu-icon" style="margin-right: 2px;"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php?q=riwayat_unduhan">
                            <span class="menu-title">Riwayat Unduh</span>
                            <i class="fa-solid fa-floppy-disk menu-icon" style="margin-right: 3px;"></i>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=riwayat_unduhan">
                            <span class="menu-title">
                                Riwayat Unduh <br>
                                Surat Masuk
                            </span>
                            <i class="fa-solid fa-clock-rotate-left menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=riwayat_unduhan_skeluar">
                            <span class="menu-title">
                                Riwayat Unduh <br>
                                Surat Keluar
                            </span>
                            <i class="fa-solid fa-clock-rotate-left menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=gantipas">
                            <span class="menu-title">Ganti Password</span>
                            <i class="fa-solid fa-cash-register menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=petugas_edit">
                            <span class="menu-title">Pengaturan</span>
                            <i class="fa-solid fa-sliders menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?q=logout">
                            <span class="menu-title">Logout</span>
                            <i class="fa-solid fa-right-from-bracket menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item sidebar-actions">
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-dark text-white me-2">
                                <i class="fa-solid fa-chart-line"></i>
                            </span> Tentang Sistem
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card animated-card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <h1>SELAMAT DATANG DI SISTEM MANAJEMEN ARSIP</h1>
                                    </h4>
                                    <p class="card-description">Sistem Pengarsipan Desa Matani Satu</p>
                                    <h1>Manfaat Sistem Manajemen Arsip dengan Algoritma Sequential Search untuk Kantor
                                        Balai Desa
                                        Matani Satu</h1>

                                    <h2>1. Efisiensi Operasional</h2>
                                    <ul>
                                        <li><strong>Penghematan Waktu:</strong> Proses pencarian arsip yang manual
                                            sering memakan
                                            waktu. Dengan sistem digital yang menggunakan sequential search, staf dapat
                                            menemukan
                                            dokumen dengan lebih cepat.</li>
                                        <li><strong>Pengurangan Beban Kerja:</strong> Automatisasi pencarian arsip
                                            mengurangi beban
                                            kerja administratif, memungkinkan staf untuk fokus pada tugas-tugas yang
                                            lebih
                                            strategis.</li>
                                    </ul>

                                    <h2>2. Penyimpanan dan Aksesibilitas yang Lebih Baik</h2>
                                    <ul>
                                        <li><strong>Penyimpanan Terpusat:</strong> Semua arsip disimpan secara digital
                                            dalam satu
                                            sistem, memudahkan akses dan pengelolaan.</li>
                                        <li><strong>Aksesibilitas:</strong> Arsip dapat diakses dengan mudah kapan saja
                                            dan dari
                                            mana saja oleh staf yang berwenang, tanpa perlu mencari di tumpukan dokumen
                                            fisik.</li>
                                    </ul>

                                    <h2>3. Peningkatan Keamanan</h2>
                                    <ul>
                                        <li><strong>Keamanan Data:</strong> Arsip digital dapat dilindungi dengan
                                            password dan hak
                                            akses, mengurangi risiko kehilangan atau kerusakan dokumen fisik.</li>
                                        <li><strong>Backup Data:</strong> Sistem digital memungkinkan pencadangan data
                                            secara
                                            berkala, memastikan arsip aman dari kehilangan akibat bencana atau kerusakan
                                            fisik.</li>
                                    </ul>

                                    <h2>4. Organisasi dan Manajemen yang Lebih Baik</h2>
                                    <ul>
                                        <li><strong>Pengelompokan dan Klasifikasi:</strong> Dokumen dapat diorganisir
                                            secara
                                            terstruktur berdasarkan kategori, tanggal, atau kriteria lain, membuat
                                            pencarian lebih
                                            efisien.</li>
                                        <li><strong>Pelacakan Dokumen:</strong> Mudah melacak siapa yang mengakses atau
                                            mengedit
                                            dokumen, meningkatkan transparansi dan akuntabilitas.</li>
                                    </ul>

                                    <h2>5. Fleksibilitas dan Kemudahan Penggunaan</h2>
                                    <ul>
                                        <li><strong>Antarmuka Pengguna Sederhana:</strong> Dengan menggunakan algoritma
                                            pencarian
                                            yang sederhana, sistem ini dapat dirancang dengan antarmuka pengguna yang
                                            mudah
                                            digunakan oleh staf desa yang mungkin tidak memiliki latar belakang teknis.
                                        </li>
                                        <li><strong>Pencarian Fleksibel:</strong> Sequential search dapat disesuaikan
                                            untuk mencari
                                            dokumen berdasarkan berbagai kriteria yang relevan dengan kebutuhan balai
                                            desa.</li>
                                    </ul>

                                    <h2>6. Penghematan Biaya</h2>
                                    <ul>
                                        <li><strong>Biaya Implementasi Rendah:</strong> Implementasi algoritma
                                            sequential search
                                            lebih murah dibandingkan dengan algoritma yang lebih kompleks, sehingga
                                            cocok untuk
                                            anggaran desa yang mungkin terbatas.</li>
                                        <li><strong>Pengurangan Penggunaan Kertas:</strong> Dengan digitalisasi arsip,
                                            penggunaan
                                            kertas dapat dikurangi secara signifikan, menghemat biaya dan mendukung
                                            prakarsa ramah
                                            lingkungan.</li>
                                    </ul>

                                    <h2>7. Peningkatan Pelayanan Publik</h2>
                                    <ul>
                                        <li><strong>Respons Cepat:</strong> Staf dapat memberikan layanan yang lebih
                                            cepat kepada
                                            masyarakat karena mereka dapat menemukan dan menyediakan dokumen yang
                                            diminta dengan
                                            cepat.</li>
                                        <li><strong>Kepuasan Masyarakat:</strong> Masyarakat desa akan lebih puas dengan
                                            pelayanan
                                            yang lebih efisien dan responsif.</li>
                                    </ul>

                                    <h2>8. Skalabilitas untuk Masa Depan</h2>
                                    <ul>
                                        <li><strong>Peningkatan Kapasitas:</strong> Sistem dapat dengan mudah
                                            ditingkatkan seiring
                                            bertambahnya jumlah arsip, tanpa perlu perubahan besar dalam infrastruktur.
                                        </li>
                                        <li><strong>Kemudahan Integrasi:</strong> Sistem dapat diintegrasikan dengan
                                            teknologi atau
                                            sistem lain di masa depan jika diperlukan, seperti basis data yang lebih
                                            kompleks atau
                                            fitur pencarian yang lebih canggih.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Salsabila
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
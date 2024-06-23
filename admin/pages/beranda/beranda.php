 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title">
                 <span class="page-title-icon bg-gradient-dark text-white me-2">
                     <i class="fa-solid fa-chart-line"></i>
                 </span> Home
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
             <div class="col-md-6 stretch-card grid-margin">
                 <div class="card card-img-holder text-black">
                     <div class="card-body">
                         <img src="../assets/images/a2.svg" class="card-img-absolute" alt="chart-image" />
                         <h4 class="font-weight-normal mb-3">Total Penduduk <i class="fa-solid fa-folder-open"></i></h4>
                         <?php
                            include '../conf/conf.php';
                            $jumlah_penduduk = mysqli_query($koneksi, "SELECT * FROM penduduk");
                            ?>
                         <h2 class="mb-5"><?php echo mysqli_num_rows($jumlah_penduduk); ?></h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <footer class="footer">
         <div class="container-fluid text-center">
             <span class="text-center">Copyright©Salsabila 2024</span>
         </div>
     </footer>
 </div>
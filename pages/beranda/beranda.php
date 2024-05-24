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
                         <img src="assets/images/a2.svg" class="card-img-absolute" alt="chart-image" />
                         <h4 class="font-weight-normal mb-3">Total Arsip <i class="fa-solid fa-folder-open"></i></h4>
                         <?php
                            include './conf/conf.php';
                            $jumlah_arsip = mysqli_query($koneksi, "SELECT * FROM arsip");
                            ?>
                         <h2 class="mb-5">Jumlah <?php echo mysqli_num_rows($jumlah_arsip); ?> <br> Arsip</h2>
                     </div>
                 </div>
             </div>

             <div class="col-md-6 stretch-card grid-margin">
                 <div class="card card-img-holder text-black">
                     <div class=" card-body">
                         <img src="assets/images/a3.svg" class="card-img-absolute" alt="book-image" />
                         <h4 class="font-weight-normal mb-3">Kategori Arsip <i class="fa-solid fa-folder-tree"></i></h4>
                         <?php
                            include './conf/conf.php';
                            $jumlah_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                            ?>
                         <h2 class="mb-5">Jumlah <?php echo mysqli_num_rows($jumlah_kategori); ?> <br> kategori</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <footer class="footer">
         <div class="container-fluid text-center">
             <span class="text-center">Copyright©Hallooo-Tech 2024</span>
         </div>
     </footer>
 </div>
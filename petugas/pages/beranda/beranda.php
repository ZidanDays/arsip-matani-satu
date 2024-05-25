<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-chart-line"></i>
                </span> Dashboard
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
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Arsip <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <?php
                        include '../conf/conf.php';
                        $jumlah_arsip = mysqli_query($koneksi, "SELECT * FROM arsip");
                        ?>
                        <h2 class="mb-5"><?php echo mysqli_num_rows($jumlah_arsip); ?></h2>
                        <!-- <h6 class="card-text">Increased by 60%</h6> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total Arsip Keluar <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <?php
                        include '../conf/conf.php';
                        $jumlah_arsip = mysqli_query($koneksi, "SELECT * FROM arsip_keluar");
                        ?>
                        <h2 class="mb-5"><?php echo mysqli_num_rows($jumlah_arsip); ?></h2>
                        <!-- <h6 class="card-text">Increased by 60%</h6> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Kategori Arsip <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <?php
                        include '../conf/conf.php';
                        $jumlah_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                        ?>
                        <h2 class="mb-5"><?php echo mysqli_num_rows($jumlah_kategori); ?></h2>
                        <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card animated-card">
                    <div class="card-body">
                        <h4 class="card-title">SELAMAT DATANG DI SISTEM MANAJEMEN ARSIP</h4>
                        <p class="card-description">Arsip Desa Matani Satu</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
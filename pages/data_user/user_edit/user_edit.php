<?php
include './conf/conf.php';

// Mendapatkan ID pengguna dari sesi
$id = $_SESSION['id'];


// Mengambil data pengguna dari database
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$id'");
$user = mysqli_fetch_array($data);
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-sliders"></i>
                </span> Pengaturan Akun
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel">
                        <div class="panel-body">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="?q=user_update" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Atas Nama</label>
                                                <input type="hidden" name="id" value="<?php echo $user['user_id']; ?>">
                                                <input type="text" class="form-control" name="nama" required="required"
                                                    value="<?php echo $user['user_nama']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    required="required" value="<?php echo $user['user_username']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <input type="file" name="foto">
                                                <!-- <small>Jangan diisi kalau tidak ingin mengganti foto</small> -->
                                            </div>

                                            <div class="form-group">
                                                <label></label>
                                                <input type="submit" class="btn-simpan" style="color: white;"
                                                    value="Simpan">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
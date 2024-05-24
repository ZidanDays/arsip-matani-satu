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
                                        <?php
                                        // $id = $_GET['id'];              
                                        $id = $_SESSION['id'];
                                        $data = mysqli_query($koneksi, "select * from user where user_id='$id'");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                        <form method="post" action="?q=user_update" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Atas Nama</label>
                                                <input type="hidden" name="id" value="<?php echo $d['user_id']; ?>">
                                                <input type="text" class="form-control" name="nama" required="required"
                                                    value="<?php echo $d['user_nama']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    required="required" value="<?php echo $d['user_username']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <!-- <label>Foto</label> -->
                                                <input type="file" name="foto">
                                                <small>Jangan diisi kalau tidak ingin mengganti foto</small>
                                            </div>

                                            <div class="form-group">
                                                <label></label>
                                                <input type="submit" class="btn-simpan" style="color: white;"
                                                    value="Simpan">
                                            </div>

                                        </form>

                                        <?php
                                        }
                                        ?>
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
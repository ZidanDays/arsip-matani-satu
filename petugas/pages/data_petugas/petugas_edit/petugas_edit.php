<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Edit Petugas
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
            <div class="col-lg-12">
                <div class="panel panel">
                    <div class="panel-body">
                        <!-- <div class="pull-right">
                                <a href="?q=data_petugas" class="btn btn-primary" style="margin-bottom: 20px;"><i
                                        class="fa fa-arrow-left"></i>
                                    Kembali</a>
                            </div> -->
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    // $id = $_GET['id'];              
                                    $id = $_SESSION['id'];
                                    $data = mysqli_query($koneksi, "select * from petugas where petugas_id='$id'");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <form method="post" action="?q=petugas_update" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Atas Nama</label>
                                            <input type="hidden" name="id" value="<?php echo $d['petugas_id']; ?>">
                                            <input type="text" class="form-control" name="nama" required="required"
                                                value="<?php echo $d['petugas_nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Username</label>
                                            <input type="text" class="form-control" name="username" required="required"
                                                value="<?php echo $d['petugas_username']; ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password">
                                                <small>Kosongkan jika tidak ingin mengubah password.</small>
                                            </div> -->
                                        <div class="form-group">
                                            <input type="file" name="foto">
                                            <small>Jangan diisi kalau tidak ingin mengganti foto</small>
                                        </div>

                                        <div class="form-group">
                                            <label></label>
                                            <input type="submit" class="btn-simpan" value="Simpan">
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
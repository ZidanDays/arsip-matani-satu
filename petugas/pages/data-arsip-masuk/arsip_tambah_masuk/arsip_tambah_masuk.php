<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Arsip Masuk
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
            <div class="col-lg-12 col-lg-offset-3">
                <div class="panel panel">
                    <div class="panel-body">
                        <div class="pull-right">
                            <a href="?q=data-arsip-masuk" class="btn btn-sm btn-primary" style="margin-bottom: 20px;"><i
                                    class="fa fa-arrow-left"></i>
                                Kembali</a>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload Arsip Kamu </h4>
                                    <!-- <p class="card-description"> Add class </p> -->
                                    <div class="table-responsive">
                                        <form method="post" action="?q=arsip_aksi_masuk" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label>Kode Arsip</label>
                                                <input type="text" class="form-control" name="kode" required="required">
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Arsip</label>
                                                <input type="text" class="form-control" name="nama" required="required">
                                            </div>

                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori" required="required">
                                                    <option value="">Pilih kategori</option>
                                                    <?php
                                                    // include '../conf/conf.php';
                                                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                    while ($k = mysqli_fetch_array($kategori)) {
                                                    ?>
                                                    <option value="<?php echo $k['kategori_id']; ?>">
                                                        <?php echo $k['kategori_nama']; ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" name="keterangan"
                                                    required="required"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>File</label>
                                                <input type="file" name="file">
                                            </div>

                                            <div class="form-group">
                                                <label></label>
                                                <input type="submit" class="btn btn-primary" value="Upload">
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
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-wrench"></i>
                </span> Edit Kategori
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
                            <div class="pull-right">

                            </div>
                            <div class="col-lg-12 grid-margin stretch-card mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        $id = $_GET['id'];
                                        $data = mysqli_query($koneksi, "select * from kategori where kategori_id='$id'");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>

                                        <form method="post" action="?q=kategori_update">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="hidden" name="id" value="<?php echo $d['kategori_id']; ?>">
                                                <input type="text" class="form-control" name="nama" required="required"
                                                    value="<?php echo $d['kategori_nama']; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Katerangan</label>
                                                <textarea class="form-control" name="keterangan"
                                                    required="required"><?php echo $d['kategori_keterangan']; ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn bg-gradient-dark text-white mb-2"
                                                    value="Simpan Perubahan">
                                                <a href="?q=kategori" class="btn-back"><i class="fa fa-arrow-left"></i>
                                                    Kembali</a>
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
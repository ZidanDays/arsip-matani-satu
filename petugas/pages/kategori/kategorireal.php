<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-table-list"></i>
                </span> Data Kategori
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
        <div class="panel panel">
            <div class="panel-body">
                <div class="pull-right">

                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href=" kategori_tambah.php" class="btn-tambah"> Tambah
                                kategori</a>
                            <div class="table-responsive mt-4">
                                <table id="table"
                                    class="table table-bordered table-striped table-hover table-datatable">
                                    <thead>
                                        <tr>
                                            <th class="text-center"
                                                style="padding: 20px 20px; background-color: rgb(238, 194, 0); color:black;"
                                                width="1%" width="1%">No</th>
                                            <th class="text-center"
                                                style="padding: 20px 20px; background-color: rgb(238, 194, 0); color:black;"
                                                width="1%">Nama</th>
                                            <th class="text-center"
                                                style="padding: 20px 20px; background-color: rgb(238, 194, 0); color:black;"
                                                width="1%">Katerangan</th>
                                            <th class="text-center"
                                                style="padding: 20px 20px; background-color: rgb(238, 194, 0); color:black;"
                                                width="1%" class="text-center" width="10%">OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../conf/conf.php';
                                        $no = 1;
                                        $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($p = mysqli_fetch_array($kategori)) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td><?php echo $p['kategori_nama'] ?></td>
                                            <td><?php echo $p['kategori_keterangan'] ?></td>
                                            <td class="text-center">
                                                <?php
                                                    if ($p['kategori_id'] != 1) {
                                                    ?>
                                                <div class="btn-group">
                                                    <a href="kategori_edit.php?id=<?php echo $p['kategori_id']; ?>"
                                                        class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                                    <a href="kategori_hapus.php?id=<?php echo $p['kategori_id']; ?>"
                                                        class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <?php
                                                    }
                                                    ?>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
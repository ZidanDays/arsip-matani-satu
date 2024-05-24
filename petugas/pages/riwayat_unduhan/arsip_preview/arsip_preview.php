<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-bars-staggered"></i>
                </span> Preview Arsip
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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <?php
                                        $id = $_GET['id'];
                                        $data = mysqli_query($koneksi, "SELECT * FROM arsip,kategori,petugas WHERE arsip_petugas=petugas_id and arsip_kategori=kategori_id and arsip_id='$id'");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>

                                        <div class="row">
                                            <div class="col-lg-12">

                                                <table class="table">
                                                    <tr>
                                                        <th>Kode Arsip</th>
                                                        <td><?php echo $d['arsip_kode']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Waktu Upload</th>
                                                        <td><?php echo date('H:i:s  d-m-Y', strtotime($d['arsip_waktu_upload'])) ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama File</th>
                                                        <td><?php echo $d['arsip_nama']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kategori</th>
                                                        <td><?php echo $d['kategori_nama']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis File</th>
                                                        <td><?php echo $d['arsip_jenis']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Petugas Pengupload</th>
                                                        <td><?php echo $d['petugas_nama']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?php echo $d['arsip_keterangan']; ?></td>
                                                    </tr>
                                                </table>

                                            </div>
                                            <div class="col-lg-8">
                                                <?php
                                                    if ($d['arsip_jenis'] == "png" || $d['arsip_jenis'] == "jpg" || $d['arsip_jenis'] == "gif" || $d['arsip_jenis'] == "jpeg") {
                                                    ?>
                                                <img src="../arsip/<?php echo $d['arsip_file']; ?>">

                                                <?php
                                                    } elseif ($d['arsip_jenis'] == "pdf") {
                                                    ?>

                                                <div class="pdf-singe-pro">
                                                    <a class="media"
                                                        href="../arsip/<?php echo $d['arsip_file']; ?>"></a>
                                                </div>

                                                <?php
                                                    } else {
                                                    ?>
                                                <p>Preview tidak tersedia, silahkan <a target="_blank"
                                                        style="color: blue"
                                                        href="../arsip/<?php echo $d['arsip_file']; ?>">Download di
                                                        sini.</a></p>.
                                                <?php
                                                    }
                                                    ?>

                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <br>
                                    <a href="?q=riwayat_unduhan" class="btn-back mt-4" style="margin-bottom: 20px;">
                                        Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
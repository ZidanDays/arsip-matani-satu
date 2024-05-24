<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-floppy-disk"></i>
                </span> Data Riwayat Unduhan Arsip
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table"
                                    class="table table-bordered table-striped table-hover table-datatable">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="padding: 20px 20px;background-color: rgb(88, 88, 88);
    color: white;" width="1%" width="1%" width="1%">No</th>
                                            <th class="text-center" style="padding: 20px 20px;background-color: rgb(88, 88, 88);
    color: white;" width="1%" width="1%" width="18%">Waktu Upload Arsip</th>
                                            <th class="text-center" style="padding: 20px 20px;background-color: rgb(88, 88, 88);
    color: white;" width="1%" width="1%" width="30%">Nama User</th>
                                            <th class="text-center" style="padding: 20px 20px;background-color: rgb(88, 88, 88);
    color: white;" width="1%" width="1%" width="30%">Nama Arsip</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../conf/conf.php';
                                        $no = 1;
                                        $saya = $_SESSION['id'];
                                        $arsip = mysqli_query($koneksi, "SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip=arsip_id and riwayat_user=user_id and arsip_petugas='$saya' ORDER BY riwayat_id DESC");
                                        while ($p = mysqli_fetch_array($arsip)) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?></td>
                                            <td class="text-center">
                                                <?php echo date('H:i:s  d-m-Y', strtotime($p['riwayat_waktu'])) ?>
                                            </td>
                                            <td class="text-center"><?php echo $p['user_nama'] ?></td>
                                            <td class="text-center"><a style="color: blue"
                                                    href="?q=arsip_preview&id=<?php echo $p['arsip_id']; ?>"><?php echo $p['arsip_nama'] ?></a>
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
</div>
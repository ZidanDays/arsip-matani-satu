<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-clock-rotate-left menu-icon"></i>
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
        <div class="container-fluid">
            <div class="panel panel">
                <div class="panel-body">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive text-center">
                                    <table id="table"
                                        class="table table-bordered table-striped table-hover table-datatable">
                                        <thead>
                                            <tr>
                                                <th style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;"
                                                    width="1%">No</th>
                                                <th style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;"
                                                    width="18%">Waktu Upload</th>
                                                <th style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;"
                                                    width="30%">User</th>
                                                <th style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;"
                                                    width="30%">Arsip yang diunduh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../conf/conf.php';
                                            $no = 1;
                                            $saya = $_SESSION['id'];
                                            $arsip = mysqli_query($koneksi, "SELECT * FROM riwayat,arsip_keluar,user WHERE riwayat_arsip=arsip_keluar_id and riwayat_user=user_id and arsip_petugas='$saya' ORDER BY riwayat_id DESC");
                                            while ($p = mysqli_fetch_array($arsip)) {
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td><?php echo date('H:i:s  d-m-Y', strtotime($p['riwayat_waktu'])) ?>
                                                </td>
                                                <td><?php echo $p['user_nama'] ?></td>
                                                <td><a style="color: blue"
                                                        href="?q=arsip_keluar_preview&id=<?php echo $p['arsip_keluar_id']; ?>"><?php echo $p['arsip_nama'] ?></a>
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
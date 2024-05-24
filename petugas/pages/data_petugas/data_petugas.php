<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Petugas
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
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary" style="margin-bottom: 20px;" data-toggle="modal"
                            data-target="#tambahPetugasModal">
                            <i class="fa fa-plus"></i> Tambah Petugas
                        </a>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bordered table</h4>
                                <p class="card-description"> Add class <code>.table-bordered</code></p>
                                <div class="table-responsive">
                                    <table id="table"
                                        class="table table-bordered table-striped table-hover table-datatable">
                                        <thead>
                                            <tr>
                                                <th width="1%">No</th>
                                                <th width="5%">Foto</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th class="text-center" width="10%">OPSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include '../conf/conf.php';
                                            $no = 1;
                                            $petugas = mysqli_query($koneksi,"SELECT * FROM petugas ORDER BY petugas_id DESC");
                                            while($p = mysqli_fetch_array($petugas)){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td>
                                                    <?php 
                                                    if($p['petugas_foto'] == ""){
                                                        ?>
                                                    <img class="img-user" src="./gambar/sistem/user.png">
                                                    <?php
                                                    }else{
                                                        ?>
                                                    <img class="img-user"
                                                        src="./gambar/petugas/<?php echo $p['petugas_foto']; ?>">
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                                <td><?php echo $p['petugas_nama'] ?></td>
                                                <td><?php echo $p['petugas_username'] ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="?q=petugas_edit&id=<?php echo $p['petugas_id']; ?>"
                                                            class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                                        <a href="#" class="btn btn-default" data-toggle="modal"
                                                            data-target="#hapusPetugasModal"
                                                            data-id="<?php echo $p['petugas_id']; ?>">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
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
    <!-- Modal Tambah Petugas -->
    <div class="modal fade" id="tambahPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulir tambah petugas di sini -->
                    <form method="post" action="?q=petugas_aksi" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Petugas</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus Petugas -->
    <div class="modal fade" id="hapusPetugasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus petugas ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a id="hapusPetugasBtn" href="#" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).on('click', '[data-toggle="modal"][data-target="#hapusPetugasModal"]', function() {
    var petugasId = $(this).data('id');
    $('#hapusPetugasBtn').attr('href', '?q=petugas_hapus&id=' + petugasId);
});
</script>
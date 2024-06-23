<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Data Penduduk
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
                            data-target="#tambahPendudukModal">
                            <i class="fa fa-plus"></i> Tambah Penduduk
                        </a>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table"
                                        class="table table-bordered table-striped table-hover table-datatable">
                                        <thead>
                                            <tr>
                                                <th width="1%">No</th>
                                                <th width="5%">Foto</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status Perkawinan</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Agama</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Pekerjaan</th>
                                                <th>Alamat Lengkap</th>
                                                <th>Kedudukan Keluarga</th>
                                                <th>NIK</th>
                                                <th>Nomor KK</th>
                                                <th>Keterangan</th>
                                                <th class="text-center" width="10%">OPSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include '../conf/conf.php';
                                            $no = 1;
                                            $penduduk = mysqli_query($koneksi,"SELECT * FROM penduduk ORDER BY id DESC");
                                            while($p = mysqli_fetch_array($penduduk)){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td>
                                                    <?php 
                                                    if($p['foto'] == ""){
                                                        ?>
                                                    <img class="img-user" src="./gambar/sistem/user.png">
                                                    <?php
                                                    }else{
                                                        ?>
                                                    <img class="img-user"
                                                        src="../gambar/petugas/<?php echo $p['foto']; ?>">
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $p['nama'] ?></td>
                                                <td><?php echo $p['jenis_kelamin'] ?></td>
                                                <td><?php echo $p['status_perkawinan'] ?></td>
                                                <td><?php echo $p['tempat_lahir'] ?></td>
                                                <td><?php echo $p['tanggal_lahir'] ?></td>
                                                <td><?php echo $p['agama'] ?></td>
                                                <td><?php echo $p['pendidikan_terakhir'] ?></td>
                                                <td><?php echo $p['pekerjaan'] ?></td>
                                                <td><?php echo $p['alamat_lengkap'] ?></td>
                                                <td><?php echo $p['kedudukan_keluarga'] ?></td>
                                                <td><?php echo $p['nik'] ?></td>
                                                <td><?php echo $p['nomor_kk'] ?></td>
                                                <td><?php echo $p['keterangan'] ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="index.php?q=data-edit&id=<?php echo $p['id']; ?>"
                                                            class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                                        <a href="#" class="btn btn-default" data-toggle="modal"
                                                            data-target="#hapusPendudukModal"
                                                            data-id="<?php echo $p['id']; ?>">
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

    <!-- Modal Tambah Penduduk -->
    <div class="modal fade" id="tambahPendudukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penduduk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulir tambah penduduk di sini -->
                    <form method="post" action="?q=data-aksi" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" required="required">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select class="form-control" name="status_perkawinan" required="required">
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                                <option value="Janda">Janda</option>
                                <option value="Duda">Duda</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" required="required">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required="required">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama" required="required">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Kepercayaan lain">Kepercayaan lain</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" name="pendidikan_terakhir" required="required">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana (S1)">Sarjana (S1)</option>
                                <option value="Magister (S2)">Magister (S2)</option>
                                <option value="Doktor (S3)">Doktor (S3)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" required="required">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" class="form-control" name="alamat_lengkap" required="required">
                        </div>
                        <div class="form-group">
                            <label>Kedudukan Keluarga</label>
                            <select class="form-control" name="kedudukan_keluarga" required="required">
                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                <option value="Istri">Istri</option>
                                <option value="Suami">Suami</option>
                                <option value="Anak">Anak</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Famili Lain">Famili Lain</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" required="required">
                        </div>
                        <div class="form-group">
                            <label>Nomor KK</label>
                            <input type="text" class="form-control" name="nomor_kk" required="required">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus Penduduk -->
    <div class="modal fade" id="hapusPendudukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Penduduk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus penduduk ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a id="hapusPendudukBtn" href="#" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).on('click', '[data-toggle="modal"][data-target="#hapusPendudukModal"]', function() {
    var pendudukId = $(this).data('id');
    $('#hapusPendudukBtn').attr('href', '?q=penduduk_hapus&id=' + pendudukId);
});

// Menggunakan SweetAlert untuk memberikan umpan balik yang lebih baik
function showAlert(type, message) {
    Swal.fire({
        icon: type,
        title: type === 'success' ? 'Sukses' : 'Gagal',
        text: message,
        confirmButtonText: 'OK'
    });
}

<?php
if(isset($_GET['alert'])) {
    if($_GET['alert'] == 'sukses') {
        echo "showAlert('success', 'Penduduk berhasil ditambahkan atau dihapus.');";
    } else if($_GET['alert'] == 'gagal') {
        echo "showAlert('error', 'Terjadi kesalahan saat menambahkan atau menghapus penduduk.');";
    }
}
?>
</script>
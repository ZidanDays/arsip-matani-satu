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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    $id = $_GET['id']; // atau cara sesuai dengan kebutuhan Anda
                                    $query = "SELECT * FROM penduduk WHERE id=?";
                                    $stmt = mysqli_prepare($koneksi, $query);

                                    if ($stmt) {
                                        mysqli_stmt_bind_param($stmt, "i", $id);
                                        mysqli_stmt_execute($stmt);
                                        mysqli_stmt_store_result($stmt);
                                        
                                        if (mysqli_stmt_num_rows($stmt) > 0) {
                                            mysqli_stmt_bind_result($stmt, $id, $nama, $jenis_kelamin, $status_perkawinan, $tempat_lahir, $tanggal_lahir, $agama, $pendidikan_terakhir, $pekerjaan, $baca_huruf, $kewarganegaraan, $alamat_lengkap, $kedudukan_keluarga, $nik, $nomor_kk, $keterangan, $foto);
                                            mysqli_stmt_fetch($stmt);
                                    ?>
                                    <form method="post" action="?q=data-edit-proses" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="<?php echo $nama; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" required>
                                                <option value="laki-laki"
                                                    <?php if ($jenis_kelamin == 'laki-laki') echo 'selected'; ?>>
                                                    Laki-laki</option>
                                                <option value="perempuan"
                                                    <?php if ($jenis_kelamin == 'perempuan') echo 'selected'; ?>>
                                                    Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select class="form-control" name="status_perkawinan" required>
                                                <option value="Belum Menikah"
                                                    <?php if ($status_perkawinan == 'Belum Menikah') echo 'selected'; ?>>
                                                    Belum Menikah</option>
                                                <option value="Menikah"
                                                    <?php if ($status_perkawinan == 'Menikah') echo 'selected'; ?>>
                                                    Menikah</option>
                                                <option value="Cerai"
                                                    <?php if ($status_perkawinan == 'Cerai') echo 'selected'; ?>>Cerai
                                                </option>
                                                <option value="Janda"
                                                    <?php if ($status_perkawinan == 'Janda') echo 'selected'; ?>>Janda
                                                </option>
                                                <option value="Duda"
                                                    <?php if ($status_perkawinan == 'Duda') echo 'selected'; ?>>Duda
                                                </option>
                                                <option value="Lainnya"
                                                    <?php if ($status_perkawinan == 'Lainnya') echo 'selected'; ?>>
                                                    Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir"
                                                value="<?php echo $tempat_lahir; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir"
                                                value="<?php echo $tanggal_lahir; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama" required>
                                                <option value="Islam" <?php if ($agama == 'Islam') echo 'selected'; ?>>
                                                    Islam</option>
                                                <option value="Kristen"
                                                    <?php if ($agama == 'Kristen') echo 'selected'; ?>>Kristen</option>
                                                <option value="Katolik"
                                                    <?php if ($agama == 'Katolik') echo 'selected'; ?>>Katolik</option>
                                                <option value="Hindu" <?php if ($agama == 'Hindu') echo 'selected'; ?>>
                                                    Hindu</option>
                                                <option value="Buddha"
                                                    <?php if ($agama == 'Buddha') echo 'selected'; ?>>Buddha</option>
                                                <option value="Konghucu"
                                                    <?php if ($agama == 'Konghucu') echo 'selected'; ?>>Konghucu
                                                </option>
                                                <option value="Kepercayaan lain"
                                                    <?php if ($agama == 'Kepercayaan lain') echo 'selected'; ?>>
                                                    Kepercayaan lain</option>
                                                <option value="Lainnya"
                                                    <?php if ($agama == 'Lainnya') echo 'selected'; ?>>Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Terakhir</label>
                                            <select class="form-control" name="pendidikan_terakhir" required>
                                                <option value="SD"
                                                    <?php if ($pendidikan_terakhir == 'SD') echo 'selected'; ?>>SD
                                                </option>
                                                <option value="SMP"
                                                    <?php if ($pendidikan_terakhir == 'SMP') echo 'selected'; ?>>SMP
                                                </option>
                                                <option value="SMA/SMK"
                                                    <?php if ($pendidikan_terakhir == 'SMA/SMK') echo 'selected'; ?>>
                                                    SMA/SMK</option>
                                                <option value="Diploma"
                                                    <?php if ($pendidikan_terakhir == 'Diploma') echo 'selected'; ?>>
                                                    Diploma</option>
                                                <option value="Sarjana (S1)"
                                                    <?php if ($pendidikan_terakhir == 'Sarjana (S1)') echo 'selected'; ?>>
                                                    Sarjana (S1)</option>
                                                <option value="Magister (S2)"
                                                    <?php if ($pendidikan_terakhir == 'Magister (S2)') echo 'selected'; ?>>
                                                    Magister (S2)</option>
                                                <option value="Doktor (S3)"
                                                    <?php if ($pendidikan_terakhir == 'Doktor (S3)') echo 'selected'; ?>>
                                                    Doktor (S3)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan"
                                                value="<?php echo $pekerjaan; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <input type="text" class="form-control" name="alamat_lengkap"
                                                value="<?php echo $alamat_lengkap; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kedudukan Keluarga</label>
                                            <select class="form-control" name="kedudukan_keluarga" required>
                                                <option value="Kepala Keluarga"
                                                    <?php if ($kedudukan_keluarga == 'Kepala Keluarga') echo 'selected'; ?>>
                                                    Kepala Keluarga</option>
                                                <option value="Istri"
                                                    <?php if ($kedudukan_keluarga == 'Istri') echo 'selected'; ?>>Istri
                                                </option>
                                                <option value="Suami"
                                                    <?php if ($kedudukan_keluarga == 'Suami') echo 'selected'; ?>>Suami
                                                </option>
                                                <option value="Anak" <?php if ($kedudukan_keluarga == 'Anak') echo
                                                'selected'; ?>>Anak</option>
                                                <option value="Orang Tua"
                                                    <?php if ($kedudukan_keluarga == 'Orang Tua') echo 'selected'; ?>>
                                                    Orang Tua</option>
                                                <option value="Famili Lain"
                                                    <?php if ($kedudukan_keluarga == 'Famili Lain') echo 'selected'; ?>>
                                                    Famili Lain</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" name="nik"
                                                value="<?php echo $nik; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor KK</label>
                                            <input type="text" class="form-control" name="nomor_kk"
                                                value="<?php echo $nomor_kk; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan"
                                                value="<?php echo $keterangan; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" class="form-control" name="foto">
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="?q=data_petugas" class="btn btn-secondary">Batal</a>
                                        </div>
                                    </form>
                                    <?php
                                        } else {
                                            echo "Data tidak ditemukan.";
                                        }

                                        mysqli_stmt_close($stmt);
                                    } else {
                                        echo "Error: " . mysqli_error($koneksi);
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
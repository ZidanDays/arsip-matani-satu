<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Tambah Petugas
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
                                <a href="?q=data_petugas" class="btn btn-sm btn-primary" style="margin-bottom: 20px;"><i
                                        class="fa fa-arrow-left"></i>
                                    Kembali</a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Bordered table</h4>
                                                    <p class="card-description"> Add class <code>.table-bordered</code>
                                                    </p>
                                                    <form action="process_input.php" method="POST"
                                                        enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="nama">Nama Lengkap/Panggilan</label>
                                                            <input type="text" id="nama" name="nama" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                                            <select id="jenis_kelamin" name="jenis_kelamin" required>
                                                                <option value="Laki-Laki">Laki-Laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status_perkawinan">Status Perkawinan</label>
                                                            <input type="text" id="status_perkawinan"
                                                                name="status_perkawinan" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tempat_lahir">Tempat Lahir</label>
                                                            <input type="text" id="tempat_lahir" name="tempat_lahir"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="agama">Agama</label>
                                                            <input type="text" id="agama" name="agama" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                            <input type="text" id="pendidikan_terakhir"
                                                                name="pendidikan_terakhir" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pekerjaan">Pekerjaan</label>
                                                            <input type="text" id="pekerjaan" name="pekerjaan" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="baca_huruf">Dapat Membaca Huruf</label>
                                                            <input type="text" id="baca_huruf" name="baca_huruf"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                                            <input type="text" id="kewarganegaraan"
                                                                name="kewarganegaraan" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_lengkap">Alamat Lengkap</label>
                                                            <input type="text" id="alamat_lengkap" name="alamat_lengkap"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kedudukan_keluarga">Kedudukan dalam
                                                                Keluarga</label>
                                                            <input type="text" id="kedudukan_keluarga"
                                                                name="kedudukan_keluarga" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nik">NIK</label>
                                                            <input type="text" id="nik" name="nik" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nomor_kk">Nomor KK</label>
                                                            <input type="text" id="nomor_kk" name="nomor_kk" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keterangan">Keterangan</label>
                                                            <input type="text" id="keterangan" name="keterangan">
                                                        </div>
                                                        <div class="form-buttons">
                                                            <button type="submit">Submit</button>
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


        </div>
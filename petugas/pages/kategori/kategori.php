<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="menu-icon fa-regular fa-rectangle-list"></i>
                </span> Tambah Kategori
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
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-block btn-gradient-dark btn-lg font-weight-medium auth-form-btn"
                                    style="margin-bottom: 20px;" data-toggle="modal" data-target="#tambahModal">
                                    <i class="fa fa-plus"></i> Tambah kategori
                                </button>
                                <div class="table-responsive">
                                    <table id="table"
                                        class="table table-bordered table-striped table-hover table-datatable">
                                        <thead class="text-center">
                                            <tr>
                                                <th style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;"
                                                    width=" 1%">No</th>
                                                <th
                                                    style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;">
                                                    Nama</th>
                                                <th
                                                    style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;">
                                                    Katerangan</th>
                                                <th style="padding: 20px 20px; background-color: rgb(88, 88, 88); color:white;"
                                                    class="text-center" width="10%">OPSI</th>
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
                                                        <a href="?q=kategori_edit&id=<?php echo $p['kategori_id']; ?>"
                                                            class="btn btn-default"><i class="fa fa-wrench"></i></a>
                                                        <a href="#" class="btn btn-default delete-btn"
                                                            data-toggle="modal" data-target="#hapusModal"
                                                            data-id="<?php echo $p['kategori_id']; ?>">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                    </div>
                                                </td>

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
    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulir tambah kategori -->
                    <form method="post" action="?q=kategori_aksi">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn bg-gradient-warning text-white" value="Tambah Kategori">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus kategori ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="#" id="delete-confirm-btn" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    // Menangani klik tombol hapus
    $('.delete-btn').on('click', function() {
        // Ambil ID kategori dari atribut data-id
        var kategoriId = $(this).data('id');

        // Set action URL untuk tombol konfirmasi hapus
        $('#delete-confirm-btn').attr('href', '?q=kategori_hapus&id=' + kategoriId);
    });
});
</script>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-home"></i>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel">
                                <div class="panel-body">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Bordered table</h4>
                                                <p class="card-description"> Add class <code>.table-bordered</code></p>

                                                <form method="post" action="?q=kategori_aksi">
                                                    <div class="form-group">
                                                        <label>Nama Kategori</label>
                                                        <input type="text" class="form-control" name="nama"
                                                            required="required">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <textarea class="form-control" name="keterangan"
                                                            required="required"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label></label>
                                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                                        <a href="?q=kategori" class="btn btn-sm btn-primary"
                                                            style="margin-bottom: 20px;"><i
                                                                class="fa fa-arrow-left"></i>
                                                            Kembali</a>
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
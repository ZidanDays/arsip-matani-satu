<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Tambah User
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
                                <a href="?q=data_user" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                                    Kembali</a>
                            </div>
                            <br>
                            <br>

                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bordered table</h4>
                                        <p class="card-description"> Add class <code>.table-bordered</code></p>
                                        <form method="post" action="?q=user_aksi" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" required="required">
                                            </div>

                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    required="required">
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    required="required">
                                            </div>

                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" name="foto">
                                            </div>

                                            <div class="form-group">
                                                <label></label>
                                                <input type="submit" class="btn btn-primary" value="Simpan">
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
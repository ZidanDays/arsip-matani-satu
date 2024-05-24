<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Ganti Password
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bordered table</h4>
                                        <p class="card-description"> Add class <code>.table-bordered</code></p>
                                        <?php 
                                        if(isset($_GET['alert'])){
                                            if($_GET['alert'] == "sukses"){
                                                echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                                            }
                                        }
                                        ?>

                                        <form action="gantipassword_act.php" method="post">
                                            <div class="form-group">
                                                <label>Masukkan Password Baru</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Masukkan Password Baru .." name="password"
                                                    required="required" min="5">
                                            </div>
                                            <div class="form-group">
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
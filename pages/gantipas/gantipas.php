<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-wrench"></i>
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
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        </p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel">
                                    <div class="panel-body">

                                        <?php
                                        if (isset($_GET['alert'])) {
                                            if ($_GET['alert'] == "sukses") {
                                                echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                                            }
                                        }
                                        ?>

                                        <form action="?q=gantipasproses" method="post">
                                            <div class="form-group">
                                                <input type="password" class="form-control"
                                                    placeholder="Masukkan Password Baru Anda" name="password"
                                                    required="required" min="5">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn-simpan" value="Simpan">
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
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Hallooo-Tech
                2024</span>
            <!-- <span class="float-none float-sm-end mt-1 mt-sm-0 text-end">By Andi</span> -->
        </div>
    </footer>
</div>
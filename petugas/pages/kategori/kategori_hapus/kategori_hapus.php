<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-danger text-white me-2">
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
                <div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            include '../conf/conf.php';
                            $id = $_GET['id'];

                            $data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$id'");
                            $result = mysqli_query($koneksi, "DELETE FROM kategori WHERE kategori_id='$id'");

                            if ($result) {
                                echo '<script>';
                                echo 'Swal.fire({
        title: "Berhasil",
        text: "Data berhasil dihapus.",
        icon: "success",
        confirmButtonColor: "#28a745"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "?q=kategori";
        }
    });';
                                echo '</script>';
                            } else {
                                $error = mysqli_error($koneksi);
                                echo '<script>';
                                echo 'Swal.fire({
        title: "Gagal",
        text: "Gagal menghapus data. Error: ' . $error . '",
        icon: "error",
        confirmButtonColor: "#dc3545"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "?q=kategori";
        }
    });';
                                echo '</script>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
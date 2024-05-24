<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Arsip Pelabuhan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="assets/fontawesome/css/allx.min.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/andibaru2.css">
    <link rel="stylesheet" href="assets/css/andi1.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/faviconn.ico" />


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo text-center">
                                <img src="assets/images/Lambang_Kabupaten_Minahasa_Selatan.png">
                            </div>
                            <h4 class="text-center">SISTEM MANAJEMEN ARSIP MENGGUNAKAN SEQUANTIAL SEARCH</h4>
                            <h3 class="text-center">KANTOR BALAI</h3>
                            <h3 class="text-center">DESA MATANI SATU</h3>
                            <form class="mt-4" action="p_login.php" method="POST" id="loginForm">
                                <div class="form-group">

                                    <input type="text" placeholder="Username" title="Please enter you username"
                                        required="required" autocomplete="off" name="username" id="username"
                                        class="form-control">
                                </div>
                                <div class="form-group">

                                    <input type="password" title="Please enter your password" placeholder="Password"
                                        required="required" autocomplete="off" name="password" id="password"
                                        class="form-control">
                                </div>
                                <!-- Your existing HTML code -->
                                <div class="form-group">
                                    <label class="control-label" for="password">
                                        Pilih Role Anda
                                        <i class="mb-1 fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                                            title="Klik untuk informasi"></i>
                                        <select class="form-control" name="akses">
                                            <option value="petugas">Petugas</option>
                                            <option value="user">User</option>
                                        </select>
                                    </label>
                                </div>
                                <input type="submit" class="loginbtn" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $('.fa-info-circle').on('click', function() {
            // Hapus modal yang mungkin ada sebelumnya
            $('#infoModal').remove();

            var role = $(this).siblings('select[name="akses"]').val();
            var roleName = (role === 'user') ? 'User' : (role === 'petugas') ? 'Petugas' :
                'Role tidak valid';

            var modalContent = `
            <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <p>${getRoleInformation(role)}</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        `;

            $('body').append(modalContent);
            $('#infoModal').modal('show');
        });

        function getRoleInformation(role) {
            if (role === 'user') {
                return 'Petugas memiliki akses penuh terhadap sistem dan User hanya memiliki akses sebagian daripada petugas. Klik diluar notifikasi ini untuk keluar.';
            } else if (role === 'petugas') {
                return 'Petugas memiliki akses penuh terhadap sistem dan User hanya memiliki akses sebagian daripada petugas. Klik diluar notifikasi ini untuk keluar.';
            } else {
                return 'Informasi tidak tersedia.';
            }
        }
    });
    </script>

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>

</body>

</html>
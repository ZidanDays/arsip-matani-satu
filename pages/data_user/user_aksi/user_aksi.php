<?php
include './conf/conf.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if ($filename == "") {
    mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','')");
    echo '<script>
            Swal.fire({
                title: "Berhasil",
                text: "Data user berhasil ditambahkan.",
                icon: "success",
                confirmButtonColor: "#28a745"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "?q=user_edit";
                }
            });
          </script>';
} else {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed)) {
        echo '<script>
                Swal.fire({
                    title: "Gagal",
                    text: "Format file tidak diizinkan. Silakan upload file dengan format gambar.",
                    icon: "error",
                    confirmButtonColor: "#dc3545"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "?q=user_edit";
                    }
                });
              </script>';
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], './gambar/user/' . $rand . '_' . $filename);
        $file_gambar = $rand . '_' . $filename;
        mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','$file_gambar')");
        echo '<script>
                Swal.fire({
                    title: "Berhasil",
                    text: "Data user berhasil ditambahkan.",
                    icon: "success",
                    confirmButtonColor: "#28a745"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "?q=user_edit";
                    }
                });
              </script>';
    }
}

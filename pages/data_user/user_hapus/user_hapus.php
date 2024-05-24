<?php 
include '../conf/conf.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['user_foto'];
unlink("./gambar/user/$foto");

$result = mysqli_query($koneksi, "DELETE FROM user WHERE user_id='$id'");

if ($result) {
    echo '<script>
            Swal.fire({
                title: "Sukses",
                text: "Data user berhasil dihapus.",
                icon: "success",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.href = "?q=data_user";
            });
         </script>';
} else {
    $error = mysqli_error($koneksi);
    echo '<script>
            Swal.fire({
                title: "Gagal",
                text: "Gagal menghapus data user. Error: ' . $error . '",
                icon: "error",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.href = "?q=data_user";
            });
         </script>';
}
?>
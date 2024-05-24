<?php
include '../conf/conf.php';
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    // Handle kesalahan jika tidak ada sesi yang terdaftar
    header("location: ?q=gantipas&alert=gagal");
    exit;
}

if (isset($_POST['password'])) {
    $password = md5($_POST['password']);
    $stmt = mysqli_prepare($koneksi, "UPDATE petugas SET petugas_password=? WHERE petugas_id=?");
    mysqli_stmt_bind_param($stmt, "si", $password, $id);

    if (mysqli_stmt_execute($stmt)) {
        // Update berhasil dilakukan
        echo '<script>window.location = "?q=gantipas&alert=sukses";</script>';
    } else {
        // Handle kesalahan jika update gagal
        echo '<script>window.location = "?q=gantipas&alert=gagal";</script>';
    }
} else {
    // Handle kesalahan jika password tidak tersedia dalam POST
    echo '<script>window.location = "?q=gantipas&alert=gagal";</script>';
}

mysqli_close($koneksi);

<?php 
include '../conf/conf.php';

// Pastikan ID tersedia sebelum mengaksesnya
$id = $_GET['id'];

if ($id !== null) {
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$id'");
    $d = mysqli_fetch_assoc($data);

    // Pastikan data ditemukan sebelum menghapus foto
    if ($d) {
        $foto = $d['user_foto'];
        unlink("../gambar/user/$foto");
    }

    // Lakukan penghapusan
    $result = mysqli_query($koneksi, "DELETE FROM user WHERE user_id='$id'");

    if ($result) {
        // Penghapusan berhasil
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
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
        // Terjadi kesalahan saat penghapusan
        $error = mysqli_error($koneksi);
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
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
} else {
    // ID tidak tersedia, alihkan kembali ke halaman data user
    echo '<script>
        window.location.href = "?q=data_user";
    </script>';
}
?>
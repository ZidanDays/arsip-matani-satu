<?php
include '../conf/conf.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($koneksi, "UPDATE kategori SET kategori_nama='$nama', kategori_keterangan='$keterangan' WHERE kategori_id='$id'");

if ($query) {
    // Jika query berhasil, tampilkan SweetAlert sukses
    echo '<script>
        Swal.fire({
            title: "Sukses!",
            text: "Kategori berhasil diperbarui.",
            icon: "success",
            confirmButtonText: "OK"
        }).then(() => {
            window.location.href = "?q=kategori";
        });
    </script>';
} else {
    // Jika query gagal, tampilkan SweetAlert error
    echo '<script>
        Swal.fire({
            title: "Error!",
            text: "Terjadi kesalahan saat memperbarui kategori.",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>';
}
<?php
include '../conf/conf.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['petugas_foto'];
unlink("./gambar/petugas/$foto");

$result = mysqli_query($koneksi, "DELETE FROM petugas WHERE petugas_id='$id'");

if ($result) {
    echo '<script>';
    echo 'Swal.fire({
        title: "Berhasil",
        text: "Data petugas berhasil dihapus.",
        icon: "success",
        confirmButtonColor: "#28a745"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "?q=data_petugas&alert=hapus_berhasil";
        }
    });';
    echo '</script>';
} else {
    $error = mysqli_error($koneksi);
    echo '<script>';
    echo 'Swal.fire({
        title: "Gagal",
        text: "Gagal menghapus data petugas. Error: ' . $error . '",
        icon: "error",
        confirmButtonColor: "#dc3545"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "?q=data_petugas";
        }
    });';
    echo '</script>';
}
?>
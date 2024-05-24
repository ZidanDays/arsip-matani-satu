<?php
include '../conf/conf.php';
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$petugas = $_SESSION['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if ($jenis == "php") {
    echo '<script>
            Swal.fire({
                title: "Gagal",
                text: "Format file PHP tidak diizinkan.",
                icon: "error",
                confirmButtonText: "OK"
            }).then(function() {
                window.location.href = "?q=data-arsip-keluar";
            });
         </script>';
} else {
    move_uploaded_file($_FILES['file']['tmp_name'], 'arsipkeluar/' . $rand . '_' . $filename);
    $nama_file = $rand . '_' . $filename;

    $query = "INSERT INTO arsip_keluar VALUES ('', '$waktu', '$petugas', '$kode', '$nama', '$jenis', '$kategori', '$keterangan', '$nama_file')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script>
                Swal.fire({
                    title: "Sukses",
                    text: "Data arsip keluar berhasil ditambahkan.",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then(function() {
                    window.location.href = "?q=data-arsip-keluar&alert=sukses";
                });
             </script>';
    } else {
        $error = mysqli_error($koneksi);
        echo '<script>
                Swal.fire({
                    title: "Gagal",
                    text: "Gagal menambahkan data arsip keluar. Error: ' . $error . '",
                    icon: "error",
                    confirmButtonText: "OK"
                }).then(function() {
                    window.location.href = "?q=data-arsip-keluar";
                });
             </script>';
    }
}

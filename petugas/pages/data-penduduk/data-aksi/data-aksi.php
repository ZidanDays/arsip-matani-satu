<?php
include '../conf/conf.php'; // Pastikan file konfigurasi sudah benar

// Mendapatkan data dari form
$nama = $_POST['nama'] ?? '';
$jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
$status_perkawinan = $_POST['status_perkawinan'] ?? '';
$tempat_lahir = $_POST['tempat_lahir'] ?? '';
$tanggal_lahir = $_POST['tanggal_lahir'] ?? '';
$agama = $_POST['agama'] ?? '';
$pendidikan_terakhir = $_POST['pendidikan_terakhir'] ?? '';
$pekerjaan = $_POST['pekerjaan'] ?? '';
$baca_huruf = $_POST['baca_huruf'] ?? ''; // Pastikan baca_huruf diambil dari form jika dibutuhkan
$kewarganegaraan = $_POST['kewarganegaraan'] ?? ''; // Pastikan kewarganegaraan diambil dari form jika dibutuhkan
$alamat_lengkap = $_POST['alamat_lengkap'] ?? '';
$kedudukan_keluarga = $_POST['kedudukan_keluarga'] ?? '';
$nik = $_POST['nik'] ?? '';
$nomor_kk = $_POST['nomor_kk'] ?? '';
$keterangan = $_POST['keterangan'] ?? '';

// Logika untuk menangani pengunggahan file foto
$file_gambar = '';
if (!empty($_FILES['foto']['name'])) {
    $rand = rand();
    $allowed = array('gif', 'png', 'jpg', 'jpeg');
    $filename = $_FILES['foto']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array(strtolower($ext), $allowed)) {
        echo '<script>';
        echo 'Swal.fire({
            title: "Gagal",
            text: "Format file tidak didukung.",
            icon: "error",
            confirmButtonColor: "#dc3545"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?q=data-penduduk&alert=gagal";
            }
        });';
        echo '</script>';
        exit();
    } else {
        $file_gambar = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/petugas/' . $file_gambar);
    }
}

// Query untuk memasukkan data ke dalam database dengan prepared statement
$query = "INSERT INTO penduduk 
          (nama, jenis_kelamin, status_perkawinan, tempat_lahir, tanggal_lahir, agama, pendidikan_terakhir, pekerjaan, baca_huruf, kewarganegaraan, alamat_lengkap, kedudukan_keluarga, nik, nomor_kk, keterangan, foto) 
          VALUES 
          (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($koneksi, $query);
if ($stmt === false) {
    die('Query preparation failed: ' . mysqli_error($koneksi));
}

mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $nama, $jenis_kelamin, $status_perkawinan, $tempat_lahir, $tanggal_lahir, $agama, $pendidikan_terakhir, $pekerjaan, $baca_huruf, $kewarganegaraan, $alamat_lengkap, $kedudukan_keluarga, $nik, $nomor_kk, $keterangan, $file_gambar);

if (mysqli_stmt_execute($stmt)) {
    echo '<script>';
    echo 'Swal.fire({
        title: "Berhasil",
        text: "Data berhasil ditambahkan.",
        icon: "success",
        confirmButtonColor: "#28a745"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "?q=data-penduduk";
        }
    });';
    echo '</script>';
} else {
    $error = mysqli_stmt_error($stmt);
    echo '<script>';
    echo 'Swal.fire({
        title: "Gagal",
        text: "Gagal menambahkan data. Error: ' . $error . '",
        icon: "error",
        confirmButtonColor: "#dc3545"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "?q=data-penduduk&alert=gagal";
        }
    });';
    echo '</script>';
}

mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
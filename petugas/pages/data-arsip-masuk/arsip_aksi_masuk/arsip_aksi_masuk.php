<?php
include '../conf/conf.php';

//tidakpake session
// session_start();

date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$petugas = $_SESSION['id'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if ($jenis == "php") {
	echo "<script>window.location.href = '?q=data-arsip-masuk&alert=gagal';</script>";
} else {
	move_uploaded_file($_FILES['file']['tmp_name'], 'arsipmasuk/' . $rand . '_' . $filename);
	$nama_file = $rand . '_' . $filename;
	mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu','$petugas','$kode','$nama','$jenis','$kategori','$keterangan','$nama_file')") or die(mysqli_error($koneksi));
	echo "<script>window.location.href = '?q=data-arsip-masuk&alert=sukses';</script>";
}

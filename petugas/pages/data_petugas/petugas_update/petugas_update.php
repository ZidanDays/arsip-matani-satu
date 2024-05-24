<?php
include '../conf/conf.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username = $_POST['username'];
// $pwd = $_POST['password'];
if (isset($_POST['password'])) {
    $pwd = $_POST['password'];
    // Lakukan sesuatu dengan variabel $pwd di sini
}
if (isset($_POST['password'])) {
    $password = md5($_POST['password']);
    // Lakukan sesuatu dengan variabel $pwd di sini
}


// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
    mysqli_query($koneksi, "update petugas set petugas_nama='$nama', petugas_username='$username' where petugas_id='$id'");
    echo '<script>window.location.href = "?q=petugas_edit";</script>';
}elseif($pwd==""){
    if(!in_array($ext,$allowed) ) {
        echo '<script>window.location.href = "?q=petugas_edit&alert=gagal";</script>';
    }else{
        move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/petugas/'.$rand.'_'.$filename);
        $x = $rand.'_'.$filename;
        mysqli_query($koneksi, "update petugas set petugas_nama='$nama', petugas_username='$username', petugas_foto='$x' where petugas_id='$id'");
        echo '<script>window.location.href = "?q=petugas_edit&alert=berhasil";</script>';
    }
}elseif($filename==""){
    mysqli_query($koneksi, "update petugas set petugas_nama='$nama', petugas_username='$username', petugas_password='$password' where petugas_id='$id'");
    echo '<script>window.location.href = "?q=petugas_edit";</script>';
}

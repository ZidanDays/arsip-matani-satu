<?php 
include 'conf/conf.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$password = md5($_POST['password']);

// cek gambar
$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if ($pwd == "" && $filename == "") {
    mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username' where user_id='$id'");
    echo '<script> window.location.href = "?q=user_edit";</script>';
} elseif ($pwd == "") {
    if (!in_array($ext, $allowed)) {
        echo '<script> window.location.href= "?q=user_edit";</script>';
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], './gambar/user/' . $rand . '_' . $filename);
        $x = $rand . '_' . $filename;
        mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_foto='$x' where user_id='$id'");        
        echo '<script> window.location.href = "?q=user_edit";</script>';
    }
} elseif ($filename == "") {
    mysqli_query($koneksi, "update user set user_nama='$nama', user_username='$username', user_password='$password' where user_id='$id'");
    echo '<script> window.location.href = "?q=user_edit";</script>';
}
?>
<?php 
include 'conf/conf.php';

// Mendapatkan data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];

// cek gambar
$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Mengatur jalur penyimpanan gambar
$upload_dir = './gambar/user/';
$target_file = $upload_dir . $rand . '_' . $filename;

// Fungsi untuk menampilkan alert dan mengarahkan halaman
function redirect_with_alert($message) {
    echo "<script>alert('$message'); window.location.href = '?q=user_edit';</script>";
}

// Jika tidak ada file gambar diunggah
if ($filename == "") {
    mysqli_query($koneksi, "UPDATE user SET user_nama='$nama', user_username='$username' WHERE user_id='$id'");
    redirect_with_alert("Berhasil update data");
} else {
    // Jika ada file gambar diunggah
    if (!in_array($ext, $allowed)) {
        redirect_with_alert("File type not allowed");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
        $x = $rand . '_' . $filename;
        mysqli_query($koneksi, "UPDATE user SET user_nama='$nama', user_username='$username', user_foto='$x' WHERE user_id='$id'");        
        redirect_with_alert("Berhasil update data");
    }
}
?>
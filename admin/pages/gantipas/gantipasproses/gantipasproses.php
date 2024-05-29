<?php
include '../conf/conf.php';

// Mendapatkan data dari form
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
$id = $_SESSION['id']; // Asumsi user_id disimpan dalam sesi setelah login

// Ambil password saat ini dari database
$query = "SELECT user_password FROM user WHERE user_id='$id'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

// Verifikasi password saat ini
if (password_verify($current_password, $row['user_password'])) {
    // Periksa apakah password baru dan konfirmasi password cocok
    if ($new_password === $confirm_password) {
        // Hash password baru
        $hashed_new_password = password_hash($new_password, PASSWORD_BCRYPT);

        // Update password baru ke database
        $update_query = "UPDATE user SET user_password='$hashed_new_password' WHERE user_id='$id'";
        if (mysqli_query($koneksi, $update_query)) {
            echo '<script>window.location.href = "?q=gantipas&alert=sukses";</script>';
        } else {
            echo '<script>window.location.href = "?q=gantipas&alert=gagal";</script>';
        }
    } else {
        echo '<script>alert("Password baru dan konfirmasi password tidak cocok."); window.location.href = "?q=gantipas";</script>';
    }
} else {
    echo '<script>window.location.href = "?q=gantipas&alert=gagal";</script>';
}
?>
<?php
include 'conf/conf.php';

// Mendapatkan data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// cek gambar
$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Mengatur jalur penyimpanan gambar
$upload_dir = './gambar/user/';
$target_file = $upload_dir . $rand . '_' . $filename;

// Validasi input
if ($password !== $confirm_password) {
    echo '<script>alert("Password and Confirm Password do not match."); window.location.href = "registration.php";</script>';
    exit();
}

if (!in_array($ext, $allowed)) {
    echo '<script>alert("File type not allowed. Please upload a gif, png, jpg, or jpeg file."); window.location.href = "registration.php";</script>';
    exit();
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Upload file
if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
    $foto = $rand . '_' . $filename;

    // Insert data ke database
    $query = "INSERT INTO user (user_nama, user_username, user_password, user_foto) VALUES ('$nama', '$username', '$hashed_password', '$foto')";
    if (mysqli_query($koneksi, $query)) {
        echo '<script>alert("Registration successful!"); window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Registration failed. Please try again."); window.location.href = "registration.php";</script>';
    }
} else {
    echo '<script>alert("File upload failed. Please try again."); window.location.href = "registration.php";</script>';
}
?>
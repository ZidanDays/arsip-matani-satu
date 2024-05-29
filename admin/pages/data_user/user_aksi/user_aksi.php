<?php
include '../conf/conf.php';

// Mendapatkan data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Menggunakan bcrypt untuk hashing kata sandi

// Cek gambar
$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Mengatur jalur penyimpanan gambar
$upload_dir = '../gambar/user/';
$target_file = $upload_dir . $rand . '_' . $filename;

// Fungsi untuk menampilkan alert dan mengarahkan halaman
function redirect_with_alert($message) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
        Swal.fire({
            title: '$message',
            icon: 'success',
            confirmButtonColor: '#28a745'
        }).then((result) => {
            window.location.href = '?q=data_user';
        });
    </script>";
}

if ($filename == "") {
    mysqli_query($koneksi, "INSERT INTO user (user_nama, user_username, user_password, user_foto) VALUES ('$nama', '$username', '$password', '')");
    redirect_with_alert("Data user berhasil ditambahkan.");
} else {
    // Jika ada file gambar diunggah
    if (!in_array($ext, $allowed)) {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
                Swal.fire({
                    title: "Gagal",
                    text: "Format file tidak diizinkan. Silakan upload file dengan format gambar.",
                    icon: "error",
                    confirmButtonColor: "#dc3545"
                }).then((result) => {
                    window.location.href = "?q=data_user";
                });
              </script>';
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
        $file_gambar = $rand . '_' . $filename;
        mysqli_query($koneksi, "INSERT INTO user (user_nama, user_username, user_password, user_foto) VALUES ('$nama', '$username', '$password', '$file_gambar')");
        redirect_with_alert("Data user berhasil ditambahkan.");
    }
}
?>
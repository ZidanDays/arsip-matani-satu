<?php 
include '../conf/conf.php';

// Mendapatkan data dari form
$id = isset($_POST['id']) ? (int)$_POST['id'] : null;
$nama = $_POST['nama'];
$username = $_POST['username'];

// Fungsi untuk menampilkan alert dan mengarahkan halaman
function redirect_with_alert($message, $id) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
    echo "<script>
        Swal.fire({
            title: '$message',
            icon: 'success',
            confirmButtonColor: '#28a745'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '?q=user_edit&id=$id';
            } else {
                window.location.href = '?q=user_edit&id=$id';
            }
        });
    </script>";
}

// Periksa apakah ID valid
if ($id === null) {
    redirect_with_alert("ID tidak valid", $id);
    exit(); // Berhenti eksekusi lebih lanjut jika ID tidak valid
}

// Periksa apakah file foto diunggah
if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    // cek gambar
    $rand = rand();
    $allowed = array('gif', 'png', 'jpg', 'jpeg');
    $filename = $_FILES['foto']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    // Periksa apakah ekstensi file foto diizinkan
    if (!in_array($ext, $allowed)) {
        redirect_with_alert("File type not allowed", $id);
        exit(); // Berhenti eksekusi lebih lanjut jika tipe file tidak diizinkan
    }

    // Pindahkan file foto ke direktori yang ditentukan
    $upload_dir = '../gambar/user/';
    $target_file = $upload_dir . $rand . '_' . $filename;
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
        redirect_with_alert("Gagal mengunggah file foto", $id);
        exit(); // Berhenti eksekusi lebih lanjut jika gagal mengunggah file foto
    }

    // Update data pengguna dengan foto baru
    $query = "UPDATE user SET user_nama=?, user_username=?, user_foto=? WHERE user_id=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $nama, $username, $target_file, $id);
} else {
    // Update data pengguna tanpa foto baru
    $query = "UPDATE user SET user_nama=?, user_username=? WHERE user_id=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $nama, $username, $id);
}

// Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    redirect_with_alert("Berhasil update data", $id);
} else {
    redirect_with_alert("Gagal update data", $id);
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
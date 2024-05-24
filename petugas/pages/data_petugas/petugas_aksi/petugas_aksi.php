<?php
include '../conf/conf.php';
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
    $result = mysqli_query($koneksi, "INSERT INTO petugas VALUES (NULL,'$nama','$username','$password','')");
    if ($result) {
        echo '<script>';
        echo 'Swal.fire({
            title: "Berhasil",
            text: "Data berhasil ditambahkan.",
            icon: "success",
            confirmButtonColor: "#28a745"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?q=data_petugas";
            }
        });';
        echo '</script>';
    } else {
        $error = mysqli_error($koneksi);
        echo '<script>';
        echo 'Swal.fire({
            title: "Gagal",
            text: "Gagal menambahkan data. Error: ' . $error . '",
            icon: "error",
            confirmButtonColor: "#dc3545"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?q=data_petugas&alert=gagal";
            }
        });';
        echo '</script>';
    }
} else {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$allowed) ) {
        echo '<script>';
        echo 'Swal.fire({
            title: "Gagal",
            text: "Format file tidak didukung.",
            icon: "error",
            confirmButtonColor: "#dc3545"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?q=data_petugas&alert=gagal";
            }
        });';
        echo '</script>';
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], './gambar/petugas/'.$rand.'_'.$filename);
        $file_gambar = $rand.'_'.$filename;
        $result = mysqli_query($koneksi, "INSERT INTO petugas VALUES (NULL,'$nama','$username','$password','$file_gambar')");
        if ($result) {
            echo '<script>';
            echo 'Swal.fire({
                title: "Berhasil",
                text: "Data berhasil ditambahkan.",
                icon: "success",
                confirmButtonColor: "#28a745"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "?q=data_petugas";
                }
            });';
            echo '</script>';
        } else {
            $error = mysqli_error($koneksi);
            echo '<script>';
            echo 'Swal.fire({
                title: "Gagal",
                text: "Gagal menambahkan data. Error: ' . $error . '",
                icon: "error",
                confirmButtonColor: "#dc3545"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "?q=data_petugas&alert=gagal";
                }
            });';
            echo '</script>';
        }
    }
}
?>
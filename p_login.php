<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Pelabuhan</title>
    <link rel="stylesheet" href="assets/css/andibaru1.css">
    <link rel="stylesheet" href="assets/css/andi1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

    <?php
	// Menghubungkan dengan koneksi
	include 'conf/conf.php';

	// Menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
	$akses = $_POST['akses'];

	if ($akses == "user") {
		$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username'");
		$data = mysqli_fetch_assoc($login);

		if ($data && password_verify($password, $data['user_password'])) {
			session_start();
			$_SESSION['id'] = $data['user_id'];
			$_SESSION['nama'] = $data['user_nama'];
			$_SESSION['username'] = $data['user_username'];
			$_SESSION['status'] = "user_login";

			// SweetAlert berhasil login
			echo '<script type="text/javascript">
            Swal.fire({
                icon: "success",
                title: "Berhasil Login!",
                text: "Selamat datang, ' . $data['user_nama'] . '!",
                showConfirmButton: false,
                timer: 1500
            }).then(function(){
                window.location.href = "dashboard.php";
            });
         </script>';
		} else {
			// SweetAlert gagal login
			echo '<script type="text/javascript">
            Swal.fire({
                icon: "error",
                title: "Login Gagal!",
                text: "Username atau password salah!",
                showConfirmButton: false,
                timer: 1500
            }).then(function(){
                window.location.href = "index.php?alert=gagal";
            });
         </script>';
		}
	} else {
		$login = mysqli_query($koneksi, "SELECT * FROM petugas WHERE petugas_username='$username'");
		$data = mysqli_fetch_assoc($login);

		if ($data && password_verify($password, $data['petugas_password'])) {
			session_start();
			$_SESSION['id'] = $data['petugas_id'];
			$_SESSION['nama'] = $data['petugas_nama'];
			$_SESSION['username'] = $data['petugas_username'];
			$_SESSION['status'] = "petugas_login";

			// SweetAlert berhasil login
			echo '<script type="text/javascript">
				Swal.fire({
					icon: "success",
					title: "Berhasil Login!",
					text: "Selamat datang, ' . $data['petugas_nama'] . '!",
					showConfirmButton: false,
					timer: 1500
				}).then(function(){
					window.location.href = "petugas/";
				});
			 </script>';
		} else {
			// SweetAlert gagal login
			echo '<script type="text/javascript">
				Swal.fire({
					icon: "error",
					title: "Login Gagal!",
					text: "Username atau password salah!",
					showConfirmButton: false,
					timer: 1500
				}).then(function(){
					window.location.href = "index.php?alert=gagal";
				});
			 </script>';
		}
	}

	?>

</body>

</html>
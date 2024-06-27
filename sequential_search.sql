-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 12:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sequential_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'Administrator', 'admin', '$2y$10$PvnP8jQa6TAjX3SV2byPTeLqpf9ZTniO8qX75LV3T44MEXYmsVLc.', '1471275613_Screen Shot 2019-10-11 at 16.26.42.png');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int(11) NOT NULL,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int(11) NOT NULL,
  `arsip_kode` varchar(255) NOT NULL,
  `arsip_nama` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int(11) NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`arsip_id`, `arsip_waktu_upload`, `arsip_petugas`, `arsip_kode`, `arsip_nama`, `arsip_jenis`, `arsip_kategori`, `arsip_keterangan`, `arsip_file`) VALUES
(25, '2023-12-03 20:01:34', 4, '322eees', 'test', 'pdf', 11, 'kkkk', '289851481_2.7.1.b SK indikator kinerja.pdf'),
(26, '2024-05-25 09:25:48', 5, '1057/BM-XII-2023', 'ANALISA PENCAPAIAN INDIKATOR', 'pdf', 4, 'ini adalah arsip aktif', '843942882_Keamanan Sistem Jaringan Komputer (Agus Wibowo).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_keluar`
--

CREATE TABLE `arsip_keluar` (
  `arsip_keluar_id` int(11) NOT NULL,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int(11) NOT NULL,
  `arsip_kode` varchar(255) NOT NULL,
  `arsip_nama` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int(11) NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `arsip_keluar`
--

INSERT INTO `arsip_keluar` (`arsip_keluar_id`, `arsip_waktu_upload`, `arsip_petugas`, `arsip_kode`, `arsip_nama`, `arsip_jenis`, `arsip_kategori`, `arsip_keterangan`, `arsip_file`) VALUES
(10, '2023-12-03 20:02:08', 4, '898ccc', 'test keluar', 'pdf', 11, 'okoko', '292569455_2.7.1.a hasil analisis penetapan UKM pengembangan.pdf'),
(11, '2024-05-25 09:33:41', 5, 'cdnka909', 'surat pembukaan', 'pdf', 4, 'ini adalah surat pembukaan', '1731489347_Keamanan Sistem Jaringan Komputer (Agus Wibowo).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
(1, 'Arsip Dinamis', 'Arsip yang digunakan secara langsung dalam kegiatan pencipta arsip dan disimpan selama jangka waktu tertentu'),
(3, 'Arsip Vital', 'Format arsip untuk surat keputusan\narsip yang keberadaannya merupakan persyaratan dasar bagi kelangsungan operasional pencipta arsip, tidak dapat diperbarui, dan tidak tergantikan apabila rusak atau hilang'),
(4, 'Arsip Aktif', 'Arsip yang frekuensi penggunaannya tinggi dan/atau terus menerus'),
(5, 'Arsip Inaktif', 'Arsip yang frekuensi penggunaannya telah menurun'),
(6, 'Arsip Statis', 'Arsip yang dihasilkan oleh pencipta arsip karena memiliki nilai guna kesejarahan, telah habis retensinya, dan berketerangan dipermanenkan yang telah diverifikasi baik secara langsung maupun tidak langsung oleh Arsip Nasional Republik Indonesia dan/atau lembaga kearsipan'),
(7, 'Arsip Terjaga', 'Arsip negara yang berkaitan dengan keberadaan dan kelangsungan hidup bangsa dan negara yang harus dijaga keutuhan, keamanan, dan keselamatannya'),
(8, 'Arsip Umum', 'Arsip yang tidak termasuk dalam kategori arsip terjaga'),
(10, 'Tidak Berkategori', 'Contoh format surat curiculum vitae untuk kenaikan jabatan');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Menikah','Cerai','Janda','Duda','Lainnya') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu','Kepercayaan lain','Lainnya') NOT NULL,
  `pendidikan_terakhir` enum('SD','SMP','SMA/SMK','Diploma','Sarjana (S1)','Magister (S2)','Doktor (S3)') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `baca_huruf` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kedudukan_keluarga` enum('Kepala Keluarga','Istri','Suami','Anak','Orang Tua','Famili Lain') NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nomor_kk` varchar(20) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `jenis_kelamin`, `status_perkawinan`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `baca_huruf`, `kewarganegaraan`, `alamat_lengkap`, `kedudukan_keluarga`, `nik`, `nomor_kk`, `keterangan`, `foto`) VALUES
(2, 'Sasuke Uchiha', 'laki-laki', 'Belum Menikah', 'Konohagakure', '2024-05-30', 'Islam', 'Doktor (S3)', 'Mahasiswa', '', '', 'Konohagakure', 'Anak', '710512210301001', '111111111111111', 'normal', '515171702_wallpaperflare.com_wallpaper (15).jpg'),
(3, 'Gojo Satoru', '', '', 'vsdv sdv', '2024-06-13', '', '', 'vds', '', '', 'vds', '', 'vdsvs', 'vdsvdsv', 'vdsvds', '1384378488_wallpaperflare.com_wallpaper (19).jpg'),
(4, 'Yuta Okkotsu', 'laki-laki', 'Belum Menikah', 'Shibuya', '2024-05-27', 'Hindu', 'Magister (S2)', 'witcher', '', '', 'shibuya', 'Anak', '2222222222222222', '2222222222222222', 'anak ', '560395370_Yuta Okkotsu.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(11) NOT NULL,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_username` varchar(255) NOT NULL,
  `petugas_password` varchar(255) NOT NULL,
  `petugas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_foto`) VALUES
(4, 'Ruslan Durand', 'petugas1', '$2y$10$VwopqN.6mz0pnsOIsP9KpubbQRH30vP3VtS7HQvOyL5Ogq.6afddO', '1029496344_ab67616d0000b2734394d6c9304ca2d805f185a2.jpg'),
(5, 'Santi', 'petugas2', '$2y$10$PvnP8jQa6TAjX3SV2byPTeLqpf9ZTniO8qX75LV3T44MEXYmsVLc.', '326646755_images.jpeg'),
(6, 'Jamilah Suanda', 'petugas3', '$2y$10$PvnP8jQa6TAjX3SV2byPTeLqpf9ZTniO8qX75LV3T44MEXYmsVLc.', ''),
(7, 'Jhon Doe', 'Jhon ', '$2y$10$PvnP8jQa6TAjX3SV2byPTeLqpf9ZTniO8qX75LV3T44MEXYmsVLc.', '1818315888_pngwing.com (5).png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `riwayat_waktu` datetime NOT NULL,
  `riwayat_user` int(11) NOT NULL,
  `riwayat_arsip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `riwayat_waktu`, `riwayat_user`, `riwayat_arsip`) VALUES
(25, '2023-12-03 20:02:22', 4, 10),
(26, '2023-12-03 20:02:37', 4, 25),
(27, '2023-12-03 20:03:01', 8, 25),
(28, '2023-12-03 20:13:53', 4, 25),
(29, '2023-12-03 20:16:19', 4, 10),
(30, '2024-05-25 09:35:15', 8, 11),
(31, '2024-05-25 10:02:17', 8, 11),
(32, '2024-05-25 10:04:16', 9, 26),
(33, '2024-05-25 10:04:46', 9, 26);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(9, 'Zidan Dailer', 'Zidan', '$2y$10$p.WgMTQ.gkDPAsOShJ3.re5dEmv9Y0UHT1ht/NvUtrtnICopXs8Da', '650404921_yuta.jpeg'),
(10, 'I Wayan Suardi', 'Suardi', '$2y$10$QaAyOtv87.tPrwR00BakrOAJz06O8VUtaenQ8CuxTtAY/LAyfFXPa', '525346313_wallpaperflare.com_wallpaper (27).jpg'),
(11, 'Cannvavaro Lefrand', 'nom', '$2y$10$tdob04GSDMKCz520kOE3dut.pKMREXC9nY8/BzY/h2kGuNCvy.Bci', '885250792_wallpaperflare.com_wallpaper (2).jpg'),
(16, 'zidan', 'Yunchan', '202cb962ac59075b964b07152d234b70', '../gambar/user/2055911007_KTP.jpg'),
(17, 'zidancscs', 'Yunchancs', '202cb962ac59075b964b07152d234b70', '541636225_666.jpg'),
(18, 'zzzzzzzzzzz', 'Yunchancscacsa', '$2y$10$.24kcjNS2hnz28NAIeVzo.XWLO19FXasUmsoXjuP5hJvSXnDrd0my', '474316523_wallpaperflare.com_wallpaper (28).jpg'),
(19, 'okokokoko', 'Yunchakkk', '$2y$10$mra4Mp..0ua5Wx7pUIx0Suu3ennKKXeskIiyACA/i6g3W.jYvQ22G', '1703128739_Kementerian_Agama_new_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`);

--
-- Indexes for table `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  ADD PRIMARY KEY (`arsip_keluar_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  MODIFY `arsip_keluar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

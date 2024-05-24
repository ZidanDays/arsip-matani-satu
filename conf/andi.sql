-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 03:07 PM
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
-- Database: `arsip_kita`
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
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', '1471275613_Screen Shot 2019-10-11 at 16.26.42.png');

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
(2, '2019-10-10 15:09:59', 4, 'ARSIP-MN-0002', 'File keberngkatan', 'png', 4, 'tes ttead', '1162363338_Screen Shot 2019-10-10 at 13.22.15.png'),
(3, '2019-10-10 16:02:44', 4, 'asd', 'asdasd 2x', 'pdf', 3, 'asdasd', '432536246_mamunur.pdf'),
(4, '2019-10-12 17:02:16', 5, 'MN-002', 'Contoh Surat Izin Pelaksanaan', 'pdf', 4, 'Ini Contoh Surat Izin Pelaksanaan', '1352467019_c4611_sample_explain.pdf'),
(5, '2019-10-12 17:03:01', 5, 'MN-003', 'Contoh Keputusan Kerja', 'pdf', 3, 'Contoh Keputusan Kerja pegawai', '1765932248_Contoh-surat-lamaran-kerja-pdf (1).pdf'),
(6, '2019-10-12 17:03:37', 5, 'MN-004', 'Contoh Surat Izin Pegawai', 'pdf', 7, 'berikut Contoh Surat Izin Pegawai untuk pelaksana kerja', '1651167980_instructions-for-adding-your-logo.pdf'),
(7, '2019-10-12 17:04:30', 5, 'MN-005', 'Contoh SPK Proyek Kontraktor', 'pdf', 5, 'Contoh SPK Proyek Kontraktor adalah contoh surat SPK KONTRAK', '142845393_OoPdfFormExample.pdf'),
(8, '2019-10-12 17:05:22', 5, 'MN-006', 'SPK Kontrak Jembatan', 'pdf', 6, 'Surat SPK Kontrak Jembatan Layang', '106615077_sample-link_1.pdf'),
(9, '2019-10-12 17:06:55', 6, 'MN-008', 'Contoh Curiculum Vitae Untuk Lamaran Kerja', 'pdf', 10, 'Contoh Curiculum Vitae Untuk Lamaran Kerja untuk pegawai baru', '927990343_pdf-sample(1).pdf'),
(10, '2019-10-12 17:07:30', 6, 'MN-009', 'Surat Cuti Sakit Pegawai', 'pdf', 7, 'Contoh Surat Cuti Sakit Pegawai baru', '2071946811_PEMBUATAN FILE PDF_FNH_tamim (1).pdf'),
(11, '2023-11-10 04:56:32', 4, 'jn9', 'mmo', 'pdf', 3, 'mk', '1698695105_Data Warehouse Faldo.pdf'),
(12, '2023-11-10 05:16:32', 4, 'jn9', 'mmo', 'pdf', 3, 'mk', '1282284937_Data Warehouse Faldo.pdf'),
(13, '2023-11-10 05:25:01', 4, 'kmk9m', 'cfc', 'pdf', 4, 'mmm', '22298670_Herawati Pelayanan Publik.pdf'),
(14, '2023-11-10 05:26:19', 4, 'mm00', 'kmo', 'pdf', 5, 'mkkm', '2002498681_lapORAN-SKM-Dnas-PMD-2021.pdf'),
(15, '2023-11-10 14:53:03', 4, 'vsdv09', 'vdvn', 'pdf', 4, 'dv', '1687445735_Herawati Pelayanan Publik.pdf'),
(16, '2023-11-10 17:31:11', 4, 'dsdw1', 'dfds', 'pdf', 3, 'vdv', '1299236144_Kepuasan Pengguna.pdf'),
(17, '2023-11-10 18:16:55', 4, 'zz', 'zz', 'pdf', 3, 'zz', '411242138_Yunefri Naive Bayes.pdf'),
(18, '2023-11-10 18:21:23', 4, 'lll', 'lll', 'pdf', 3, 'll', '2036445429_Penelitian Relevan Naive Bayes 3.pdf'),
(19, '2023-11-13 10:58:31', 4, 'asas', 'Onal', 'pdf', 5, 'anjas', '1855173507_Alasan Implementasi Naive Bayes.pdf'),
(20, '2023-11-13 11:41:48', 4, 'sas', 'sas', 'pdf', 3, 'sas', '1727796473_Herawati Pelayanan Publik.pdf'),
(21, '2023-11-13 11:42:47', 4, 'asa', 'sas', 'pdf', 1, 'asa', '1771569017_Herawati Pelayanan Publik.pdf'),
(22, '2023-11-13 11:43:12', 4, 'asa', 'sas', 'pdf', 6, 'asa', '1064943282_Kepuasan Pengguna.pdf');

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
(1, '2023-11-10 18:12:22', 4, 'oooo1o', 'ooo', 'pdf', 3, 'ooo', '1020421313_Data Warehouse Faldo.pdf'),
(2, '2023-11-10 18:14:17', 4, 'mmm', 'mmm', 'pdf', 7, 'mm', '1168558886_Herawati Pelayanan Publik.pdf'),
(3, '2023-11-10 18:15:11', 4, 'mmm', 'mmm', 'pdf', 7, 'mm', '1848460775_Herawati Pelayanan Publik.pdf'),
(4, '2023-11-10 18:15:42', 4, 'mmm', 'mmm', 'pdf', 7, 'mmm', '1138790401_Penelitian Relevan Naive Bayes 7.pdf'),
(5, '2023-11-10 18:17:23', 4, 'xx', 'xx', 'pdf', 6, 'xx', '359178251_Supriati.pdf'),
(6, '2023-11-10 18:24:10', 4, 'ss', 'ss', 'pdf', 7, 'ss', '982523728_Suryantoro & Kusdyana.pdf'),
(7, '2023-11-13 12:03:37', 4, '0007', 'asas', 'pdf', 6, 'sas', '800445143_Alasan Implementasi Naive Bayes.pdf');

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
(1, 'Tidak berkategori', 'Semua yang tidak memiliki kategori'),
(3, 'Surat Kaputusan', 'suatu penetapan tertulis yang dikeluarkan oleh kepala kepolisian yang berwenang yang menimbulkan akibat hukum bagi seseorang atau organisasi Polri'),
(4, 'Surat Instruksi', 'Satu bentuk naskah dinas yang memuat arahan pelaksanaan suatu kebijaksanaan pokok yang tertuang dalam  peraturan dan keputusan'),
(5, 'Surat Perintah Harian/Amanat Anggaran', 'Bentuk tulisan dinas yang dikeluarkan untuk memperingati suatu peristiwa penting, memuat suatu kebijaksanaan pokok, pesan - pesan pribadi atau pernyataan kehendak pimpinan yang harus ditaati. Wewenang dan pembuatan hanya ada pada Kapolri.'),
(6, 'Surat Edaran', 'Bentuk naskah dinas yang memuat pembuatan dan penandatanganan adalah KA, sesuai dengan bidang tugas, wewenang dan tanggung jawab.'),
(7, 'Surat Tugas', 'Suatu bentuk naskah dinas yang memuat pernyataan kehendak pimpinan kepada seseorang yang bukan anggota Polri/PNS guna melaksanakan tugas demi kepentingan Polri.'),
(8, 'Surat Laporan', 'Bentuk naskah dinas yang memuat pemberitahuan hasil dari pelaksanaan suatu kegiatan tugas atau suatu kejadian secara kronologis.'),
(10, 'Surat', 'Bentuk naskah dinas yang dibuat secara tertulis oleh seorang pejabat dalam melaksanakan tugas dan jabatannya guna menyampaikan pemberitahuan, pernyataan, permintaan kepada pejabat lain diluar instansi/Satuannya sendiri, pembuatan dan penandatanganan adalah KA/ Pimpinan Satker dengan lingkup tugas wewenang dan tanggung jawab.');

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
(4, 'Jhony Andrean', 'petugas1', 'b53fe7751b37e40ff34d012c7774d65f', '179905422_transparent-relaxing-lady-woman-609aa734e5a528.8604063016207480849406.png'),
(5, 'Junaidi Mus', 'petugas2', 'b53fe7751b37e40ff34d012c7774d65f', ''),
(6, 'Jamilah Suanda', 'petugas3', 'b73fdaa1fb7669da760b49600c45d9be', ''),
(7, 'Jhon Doe', 'Jhon ', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '1818315888_pngwing.com (5).png');

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
(1, '2019-10-11 15:32:29', 8, 3),
(2, '2019-10-12 17:09:31', 8, 10),
(3, '2019-10-12 17:09:45', 8, 9),
(4, '2019-10-12 17:09:50', 8, 8),
(5, '2019-10-12 17:09:53', 8, 3),
(6, '2019-10-12 17:10:07', 9, 10),
(7, '2019-10-12 17:10:16', 9, 9),
(8, '2019-10-12 17:10:19', 9, 8),
(9, '2019-10-12 17:10:22', 9, 6),
(10, '2019-10-12 17:10:26', 9, 2);

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
(8, 'Samsul Bahri', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '1079944771_WhatsApp Image 2023-10-30 at 19.32.56_81ad66bb.jpg'),
(9, 'Reza Yuzanni', 'user2', '7e58d63b60197ceb55a1c487989a3720', ''),
(10, 'Ajir Muhajier', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', ''),
(11, 'Cut Nanda Somay', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '');

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
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `arsip_keluar`
--
ALTER TABLE `arsip_keluar`
  MODIFY `arsip_keluar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

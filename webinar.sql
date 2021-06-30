-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 04:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(128) NOT NULL,
  `admin_email` varchar(128) NOT NULL,
  `admin_password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_nama`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cp`
--

CREATE TABLE `tbl_cp` (
  `cp_id` int(11) NOT NULL,
  `cp_webinar_id` varchar(128) NOT NULL,
  `cp_nama` varchar(128) NOT NULL,
  `cp_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_materi`
--

CREATE TABLE `tbl_materi` (
  `materi_id` int(11) NOT NULL,
  `materi_webinar_id` varchar(50) NOT NULL,
  `materi_nama` varchar(128) NOT NULL,
  `materi_jenis` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_materi`
--

INSERT INTO `tbl_materi` (`materi_id`, `materi_webinar_id`, `materi_nama`, `materi_jenis`) VALUES
(18, 'WB-1597217656', 'bab7.pdf', 2),
(19, 'WB-1597217656', '6-Cloud-IBMCloud.pdf', 2),
(26, 'WB-1597217656', 'kartu ujian.pdf', 2),
(27, 'WB-1597217656', 'Couple tshirt mockup.pdf', 2),
(28, 'WB-1597217656', 'Belajar NodeJS - 21_ Instalasi  Konfigurasi MongoDB2.mp4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_method`
--

CREATE TABLE `tbl_method` (
  `method_id` int(11) NOT NULL,
  `method_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_method`
--

INSERT INTO `tbl_method` (`method_id`, `method_nama`) VALUES
(1, 'BCA'),
(2, 'BNI'),
(3, 'Mandiri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembicara`
--

CREATE TABLE `tbl_pembicara` (
  `pembicara_id` int(11) NOT NULL,
  `pembicara_webinar_id` varchar(100) NOT NULL,
  `pembicara_nama` varchar(128) NOT NULL,
  `pembicara_dari` text NOT NULL,
  `pembicara_foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profesi`
--

CREATE TABLE `tbl_profesi` (
  `profesi_id` int(11) NOT NULL,
  `profesi_nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profesi`
--

INSERT INTO `tbl_profesi` (`profesi_id`, `profesi_nama`) VALUES
(1, 'Pelajar/Mahasiswa'),
(2, 'Pegawai Negri Sipil'),
(4, 'Docter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `provinsi_id` int(5) NOT NULL,
  `provinsi_nama` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`provinsi_id`, `provinsi_nama`) VALUES
(1, 'BANTEN'),
(2, 'DKI JAKARTA'),
(3, 'JAWA BARAT'),
(4, 'JAWA TENGAH'),
(5, 'DI YOGYAKARTA'),
(6, 'JAWA TIMUR'),
(7, 'BALI'),
(8, 'NANGGROE ACEH DARUSSALAM (NAD)'),
(9, 'SUMATERA UTARA'),
(10, 'SUMATERA BARAT'),
(11, 'RIAU'),
(12, 'KEPULAUAN RIAU'),
(13, 'JAMBI'),
(14, 'BENGKULU'),
(15, 'SUMATERA SELATAN'),
(16, 'BANGKA BELITUNG'),
(17, 'LAMPUNG'),
(18, 'KALIMANTAN BARAT'),
(19, 'KALIMANTAN TENGAH'),
(20, 'KALIMANTAN SELATAN'),
(21, 'KALIMANTAN TIMUR'),
(22, 'KALIMANTAN UTARA'),
(23, 'SULAWESI BARAT'),
(24, 'SULAWESI SELATAN'),
(25, 'SULAWESI TENGGARA'),
(26, 'SULAWESI TENGAH'),
(27, 'GORONTALO'),
(28, 'SULAWESI UTARA'),
(29, 'MALUKU'),
(30, 'MALUKU UTARA'),
(31, 'NUSA TENGGARA BARAT (NTB)'),
(32, 'NUSA TENGGARA TIMUR (NTT)'),
(33, 'PAPUA BARAT'),
(34, 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sertif`
--

CREATE TABLE `tbl_sertif` (
  `sertif_id` int(11) NOT NULL,
  `sertif_webinar_id` varchar(128) NOT NULL,
  `sertif_template` varchar(128) DEFAULT NULL,
  `sertif_ukuran` int(11) NOT NULL,
  `sertif_warna` varchar(30) NOT NULL,
  `sertif_vertical` int(11) NOT NULL,
  `sertif_horizontal` int(11) NOT NULL,
  `sertif_publish` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sertif`
--

INSERT INTO `tbl_sertif` (`sertif_id`, `sertif_webinar_id`, `sertif_template`, `sertif_ukuran`, `sertif_warna`, `sertif_vertical`, `sertif_horizontal`, `sertif_publish`) VALUES
(5, 'WB-1623044155', 'Sertifikat.jpg', 145, '#161515', 41, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_id` int(11) NOT NULL,
  `users_nama` varchar(128) NOT NULL,
  `users_email` varchar(128) NOT NULL,
  `users_phone` varchar(15) NOT NULL,
  `users_profesi` varchar(128) NOT NULL,
  `users_instansi` varchar(128) NOT NULL,
  `users_provinsi` varchar(128) NOT NULL,
  `users_password` varchar(128) NOT NULL,
  `users_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `users_nama`, `users_email`, `users_phone`, `users_profesi`, `users_instansi`, `users_provinsi`, `users_password`, `users_active`) VALUES
(6, 'Mahesa Anugrah Mulyo', 'mahesaanugrah123@gmail.com', '081115551555', 'Pelajar/Mahasiswa', 'UNISBANK', 'JAWA TENGAH', '3051085ddce70013d6c496bd86b4dbe1', 1),
(62, 'eri', 'mhsanugrah@gmail.com', '0895360698523', 'Pelajar/Mahasiswa', 'unisbank', 'JAWA TENGAH', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(63, 'mahesaanugrah', 'mahesa@gmail.com', '0895360698523', 'Pelajar/Mahasiswa', 'unisbank', 'JAWA TENGAH', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webinar`
--

CREATE TABLE `tbl_webinar` (
  `webinar_id` varchar(100) NOT NULL,
  `webinar_nama` varchar(500) NOT NULL,
  `webinar_free` int(1) NOT NULL,
  `webinar_method` varchar(100) DEFAULT NULL,
  `webinar_atas_nama` varchar(128) DEFAULT NULL,
  `webinar_no_rek` varchar(50) DEFAULT NULL,
  `webinar_htm` int(11) DEFAULT NULL,
  `webinar_pamflet` varchar(128) NOT NULL,
  `webinar_tanggal` date NOT NULL,
  `webinar_jam_mulai` time NOT NULL,
  `webinar_jam_selesai` time NOT NULL,
  `webinar_deskripsi` text NOT NULL,
  `webinar_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webinar`
--

INSERT INTO `tbl_webinar` (`webinar_id`, `webinar_nama`, `webinar_free`, `webinar_method`, `webinar_atas_nama`, `webinar_no_rek`, `webinar_htm`, `webinar_pamflet`, `webinar_tanggal`, `webinar_jam_mulai`, `webinar_jam_selesai`, `webinar_deskripsi`, `webinar_link`) VALUES
('WB-1623044155', 'SEMINAR MARKETING', 0, 'BCA', 'eri', '5789978', 50000, '1_20210521_115443_0000.png', '2021-06-11', '16:40:00', '17:41:00', 'sdjksjdksd', 'facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webinar_peserta`
--

CREATE TABLE `tbl_webinar_peserta` (
  `peserta_id` int(11) NOT NULL,
  `peserta_users_id` int(11) NOT NULL,
  `peserta_webinar_id` varchar(128) NOT NULL,
  `peserta_bukti_pembayaran` varchar(128) DEFAULT NULL,
  `peserta_status` int(1) NOT NULL,
  `peserta_absen` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webinar_peserta`
--

INSERT INTO `tbl_webinar_peserta` (`peserta_id`, `peserta_users_id`, `peserta_webinar_id`, `peserta_bukti_pembayaran`, `peserta_status`, `peserta_absen`) VALUES
(14, 6, 'WB-1623044155', '7df7f405-ecb3-41c4-b7aa-2ce531a284a7.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_token`
--

CREATE TABLE `users_token` (
  `token_id` int(11) NOT NULL,
  `token_email` varchar(128) NOT NULL,
  `token_code` varchar(128) NOT NULL,
  `token_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cp`
--
ALTER TABLE `tbl_cp`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  ADD PRIMARY KEY (`materi_id`);

--
-- Indexes for table `tbl_method`
--
ALTER TABLE `tbl_method`
  ADD PRIMARY KEY (`method_id`);

--
-- Indexes for table `tbl_pembicara`
--
ALTER TABLE `tbl_pembicara`
  ADD PRIMARY KEY (`pembicara_id`);

--
-- Indexes for table `tbl_profesi`
--
ALTER TABLE `tbl_profesi`
  ADD PRIMARY KEY (`profesi_id`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `tbl_sertif`
--
ALTER TABLE `tbl_sertif`
  ADD PRIMARY KEY (`sertif_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `tbl_webinar`
--
ALTER TABLE `tbl_webinar`
  ADD PRIMARY KEY (`webinar_id`);

--
-- Indexes for table `tbl_webinar_peserta`
--
ALTER TABLE `tbl_webinar_peserta`
  ADD PRIMARY KEY (`peserta_id`);

--
-- Indexes for table `users_token`
--
ALTER TABLE `users_token`
  ADD PRIMARY KEY (`token_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cp`
--
ALTER TABLE `tbl_cp`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  MODIFY `materi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_method`
--
ALTER TABLE `tbl_method`
  MODIFY `method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pembicara`
--
ALTER TABLE `tbl_pembicara`
  MODIFY `pembicara_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_profesi`
--
ALTER TABLE `tbl_profesi`
  MODIFY `profesi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `provinsi_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_sertif`
--
ALTER TABLE `tbl_sertif`
  MODIFY `sertif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_webinar_peserta`
--
ALTER TABLE `tbl_webinar_peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_token`
--
ALTER TABLE `users_token`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

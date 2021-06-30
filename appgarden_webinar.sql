-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: appgarden.xyz
-- Generation Time: Apr 16, 2021 at 01:23 PM
-- Server version: 10.2.37-MariaDB-cll-lve
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appgarden_webinar`
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

--
-- Dumping data for table `tbl_cp`
--

INSERT INTO `tbl_cp` (`cp_id`, `cp_webinar_id`, `cp_nama`, `cp_number`) VALUES
(3, 'WB-1596404530', 'Eko Saputra', '081115551555');

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

--
-- Dumping data for table `tbl_pembicara`
--

INSERT INTO `tbl_pembicara` (`pembicara_id`, `pembicara_webinar_id`, `pembicara_nama`, `pembicara_dari`, `pembicara_foto`) VALUES
(7, 'WB-1596404530', 'Mahesa Anugrah Mulyo', 'Universitas Stikubank Semarang', '59131.jpg'),
(8, 'WB-1597217656', 'Ir. Joko Widodo', 'Presiden Indonesia', 'joko widodo.jpg'),
(9, 'WB-1597217656', 'Ganjar Pranowo', 'Gubernur Jawa Tengah', 'ganjar pranowo.jpg'),
(10, 'WB-1597521138', 'Bapak Jokowi', 'Presiden Indonesia', 'joko widodo.jpg');

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
(1, 'WB-1596404530', 'sertif.jpg', 200, '#f90707', 50, 50, 0),
(2, 'WB-1596404530', 'sertif.jpg', 200, '#f90707', 50, 50, 0),
(3, 'WB-1597217656', '', 200, '#161515', 50, 50, 0),
(4, 'WB-1597521138', 'download.jpg', 200, '#161515', 50, 50, 0);

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
(54, 'mahesa', 'mhsanugrah@gmail.com', '081115551555', 'Pelajar/Mahasiswa', 'Unisbank', 'JAMBI', 'e10adc3949ba59abbe56e057f20f883e', 1),
(55, 'mahesa anugrah mulyo', 'mahesamulyo123@gmail.com', '0895360698523', 'Pelajar/Mahasiswa', 'Unisbank', 'JAWA TENGAH', '6a3260dcac7a6c0b2e396e9e8946b311', 1),
(56, 'mahesa', 'salsa811000@gmail.com', '0895360698523', 'Pelajar/Mahasiswa', 'khjhkjhk', 'BENGKULU', '827ccb0eea8a706c4c34a16891f84e7b', 1);

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
('WB-1596404530', 'Seminar Uang Elektronik', 0, 'BCA', 'Eko Saputra', '827392737483', 50000, 'seminar uang elek.jpg', '2020-08-19', '04:47:00', '07:42:00', 'Seminar Tentang Uang Elektronik', 'https://www.zoom.com/822f890'),
('WB-1596432241', 'Seminar Menjaga Hutan', 1, '', '', '', 0, 'seminar uang elek.jpg', '2020-08-12', '15:24:00', '17:28:00', 'Tentang Menjaga Hutan', NULL),
('WB-1597217656', 'Seminiar Pengusaha', 0, 'BNI', 'Siti', '182937485943', 40000, 'seminar.jpg', '2020-08-17', '17:34:00', '18:34:00', 'Seminar Tentang Cara Mendirikan Usaha', 'www.youtub.com'),
('WB-1597521138', 'Seminar Kesehatan Badan', 0, 'BCA', 'Eri Lukmanudin', '123456787654', 50000, 'kesehatan.jpeg', '2020-08-20', '05:56:00', '06:56:00', 'Seminar Kesehatan', '');

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
(8, 6, 'WB-1596404530', 'sistem cerdas 3.jpg', 1, 1),
(9, 6, 'WB-1597217656', 'input sppd (1).jpg', 0, 0);

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
-- Dumping data for table `users_token`
--

INSERT INTO `users_token` (`token_id`, `token_email`, `token_code`, `token_date`) VALUES
(48, 'nasigor.gr@gmail.com', '/9HHxDutQgbmQ44VA/1pRlT6OzfAWrc+cxmB+ZuvzP0=', 1597878230);

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
  MODIFY `sertif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_webinar_peserta`
--
ALTER TABLE `tbl_webinar_peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_token`
--
ALTER TABLE `users_token`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

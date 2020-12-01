-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fl_notoaturan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_client`
--

INSERT INTO `tb_client` (`id_client`, `nama_client`, `email`, `no_hp`, `foto`, `pass`) VALUES
(1, 'nuzul', 'nuzul@gmail.com', '085327035224', 'user1.png', 'nuzul'),
(2, 'Ali Abdelaziz', 'ali@gmail.com', '081556772233', 'user2.png', 'ali'),
(3, 'xx', 'xx', 'xx', '1.PNG', 'xx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lawyer`
--

CREATE TABLE `tb_lawyer` (
  `id_lawyer` int(11) NOT NULL,
  `nama_lawyer` varchar(50) NOT NULL,
  `email_lawyer` varchar(50) NOT NULL,
  `no_hp_lawyer` varchar(13) NOT NULL,
  `tarif` int(15) NOT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `deskripsi` varchar(400) NOT NULL,
  `foto_lawyer` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lawyer`
--

INSERT INTO `tb_lawyer` (`id_lawyer`, `nama_lawyer`, `email_lawyer`, `no_hp_lawyer`, `tarif`, `spesialisasi`, `deskripsi`, `foto_lawyer`, `pass`) VALUES
(1, 'Anis Fitri Dzakiyah, SH', 'anis@gmail.com', '123321456654', 18000000, 'Sengketa Tanah', 'sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah ', 'user1.png', 'anis'),
(2, 'Muhammad Iqbal, SH., MH.', 'iqbal@gmail.com', '087765454345', 1000000, 'Programmer', 'sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah ', 'user2.png', 'nuzul'),
(3, 'Muhammad Firdaus, SH., MH.', 'nuzul@gmail.com', '087765454345', 1000000, 'Programmer', 'sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah sengketa tanah ', 'user1.png', 'nuzula');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `deskripsi` varchar(700) NOT NULL,
  `harga` int(15) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`, `deskripsi`, `harga`, `icon`) VALUES
(1, 'NPWP', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'npwp.png'),
(2, 'Drafting', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'drafting.png'),
(3, 'Translator', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'legal.png'),
(4, 'Hak Cipta', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'hakcipta.png'),
(5, 'Izin Usaha', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'izinusaha.png'),
(6, 'Review', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'review.png'),
(7, 'Notaris Umum', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'notariskorporasi.png'),
(8, 'Legal Memorandum', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'legal.png'),
(9, 'Perpajakan', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'ptpma.png'),
(10, 'Desain Industri', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'ptpma.png'),
(11, 'Notaris Korporasi', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'notariskorporasi.png'),
(12, 'Badan Usaha CV', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', 900000, 'cekmerk.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notaris`
--

CREATE TABLE `tb_notaris` (
  `id_notaris` int(11) NOT NULL,
  `nama_notaris` varchar(50) NOT NULL,
  `email_notaris` varchar(50) NOT NULL,
  `no_hp_notaris` varchar(13) NOT NULL,
  `foto_notaris` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_notaris`
--

INSERT INTO `tb_notaris` (`id_notaris`, `nama_notaris`, `email_notaris`, `no_hp_notaris`, `foto_notaris`, `pass`) VALUES
(0, 'default', 'default', '-', '-', '-'),
(1, 'adib', 'adib@gmail.com', '085327035224', 'user1.png', 'adib'),
(2, 'nzl1', 'nzl@gmail1', 'aa1', 'rek.jpg', 'aa1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan_lawyer`
--

CREATE TABLE `tb_pesan_lawyer` (
  `id_pesan_lawyer` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_lawyer` int(11) NOT NULL,
  `ket_masalah` varchar(400) NOT NULL,
  `tgl` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `file` varchar(50) NOT NULL,
  `metode_bayar` varchar(20) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan_lawyer`
--

INSERT INTO `tb_pesan_lawyer` (`id_pesan_lawyer`, `id_client`, `id_lawyer`, `ket_masalah`, `tgl`, `jam_mulai`, `jam_selesai`, `file`, `metode_bayar`, `status`) VALUES
(1, 1, 1, 'ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ', '2020-09-23', '17:00:00', '18:00:00', 'file.png', 'BNI', '3'),
(2, 2, 1, 'aaaaaa', '2020-09-28', '12:12:00', '23:00:00', 'peta.png', 'BNI', '4'),
(4, 2, 2, 'xxxxxxxxxxxxxxxx ccccccccc bbbbbbbbbbbb', '2020-09-29', '16:04:00', '17:05:00', 'kaos-hitam.png', 'Mandiri', '3'),
(5, 2, 1, 'ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ket masalah ', '2020-09-30', '15:33:00', '17:05:00', 'kaos-hitam1.png', 'BCA', '4'),
(6, 3, 1, 'xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx xx x', '2020-09-30', '14:22:00', '15:33:00', 'rek.jpg', 'BCA', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan_layanan`
--

CREATE TABLE `tb_pesan_layanan` (
  `id_pesan_layanan` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_notaris` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `ket_masalah` varchar(400) NOT NULL,
  `tgl` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `file` varchar(50) NOT NULL,
  `metode_bayar` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan_layanan`
--

INSERT INTO `tb_pesan_layanan` (`id_pesan_layanan`, `id_client`, `id_notaris`, `id_layanan`, `ket_masalah`, `tgl`, `jam_mulai`, `jam_selesai`, `file`, `metode_bayar`, `status`) VALUES
(2, 3, 1, 3, 'xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss xx ss ss ', '2020-09-30', '14:32:00', '16:56:00', 'rek2.jpg', 'BNI', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tb_lawyer`
--
ALTER TABLE `tb_lawyer`
  ADD PRIMARY KEY (`id_lawyer`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_notaris`
--
ALTER TABLE `tb_notaris`
  ADD PRIMARY KEY (`id_notaris`);

--
-- Indexes for table `tb_pesan_lawyer`
--
ALTER TABLE `tb_pesan_lawyer`
  ADD PRIMARY KEY (`id_pesan_lawyer`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_lawyer` (`id_lawyer`);

--
-- Indexes for table `tb_pesan_layanan`
--
ALTER TABLE `tb_pesan_layanan`
  ADD PRIMARY KEY (`id_pesan_layanan`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_notaris` (`id_notaris`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lawyer`
--
ALTER TABLE `tb_lawyer`
  MODIFY `id_lawyer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_notaris`
--
ALTER TABLE `tb_notaris`
  MODIFY `id_notaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pesan_lawyer`
--
ALTER TABLE `tb_pesan_lawyer`
  MODIFY `id_pesan_lawyer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pesan_layanan`
--
ALTER TABLE `tb_pesan_layanan`
  MODIFY `id_pesan_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pesan_lawyer`
--
ALTER TABLE `tb_pesan_lawyer`
  ADD CONSTRAINT `tb_pesan_lawyer_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesan_lawyer_ibfk_2` FOREIGN KEY (`id_lawyer`) REFERENCES `tb_lawyer` (`id_lawyer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesan_layanan`
--
ALTER TABLE `tb_pesan_layanan`
  ADD CONSTRAINT `tb_pesan_layanan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesan_layanan_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesan_layanan_ibfk_3` FOREIGN KEY (`id_notaris`) REFERENCES `tb_notaris` (`id_notaris`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

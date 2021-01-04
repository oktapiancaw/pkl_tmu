-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 02:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kasus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jurusan`
--

CREATE TABLE `data_jurusan` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(3) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jurusan`
--

INSERT INTO `data_jurusan` (`id`, `id_sekolah`, `nama_jurusan`) VALUES
(1, 1, 'RPT'),
(2, 1, 'TKJ'),
(4, 1, 'TKI');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelompok`
--

CREATE TABLE `data_kelompok` (
  `id` int(10) NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  `id_jurusan` int(10) NOT NULL,
  `angkatan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelompok`
--

INSERT INTO `data_kelompok` (`id`, `id_sekolah`, `id_jurusan`, `angkatan`) VALUES
(2, 3, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_peserta`
--

CREATE TABLE `data_peserta` (
  `id` int(10) NOT NULL,
  `id_data_kelompok` int(10) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlpn` varchar(13) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL COMMENT '1. Pria, 2. Wanita'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peserta`
--

INSERT INTO `data_peserta` (`id`, `id_data_kelompok`, `nama_peserta`, `email`, `no_tlpn`, `photo`, `jenis_kelamin`) VALUES
(7, 2, 'Ucok', 'oxtcode00@gmail.com', '081122334455', '', 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(10) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_tlpn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id`, `nama_sekolah`, `alamat`, `no_tlpn`) VALUES
(1, 'SMKN 4 PADALARANG', ' Jl raya Padalarang ', '081122334455'),
(3, 'SMP KRIDA UTAMA', 'jl Gedong Lima', '0811223344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kelompok`
--
ALTER TABLE `data_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kelompok`
--
ALTER TABLE `data_kelompok`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_peserta`
--
ALTER TABLE `data_peserta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 07:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find_your_partner`
--

-- --------------------------------------------------------

--
-- Table structure for table `join_lokasi`
--

CREATE TABLE `join_lokasi` (
  `user_nim` varchar(12) NOT NULL,
  `id_lokasi_terpilih` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(5) NOT NULL,
  `latitude` varchar(8) NOT NULL,
  `longitude` varchar(8) NOT NULL,
  `nama_kota` varchar(30) NOT NULL,
  `nim_ketua` varchar(12) NOT NULL,
  `alamat_lokasi` varchar(60) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_screening` date NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(60) NOT NULL,
  `fakultas` varchar(60) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `telepon` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sosmed` varchar(60) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(12) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(1) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nim_pengikut` varchar(12) DEFAULT NULL,
  `id_lokasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `join_lokasi`
--
ALTER TABLE `join_lokasi`
  ADD KEY `user_nim` (`user_nim`),
  ADD KEY `id_lokasi_terpilih` (`id_lokasi_terpilih`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim_ketua` (`nim_ketua`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `nim_pengikut` (`nim_pengikut`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `join_lokasi`
--
ALTER TABLE `join_lokasi`
  ADD CONSTRAINT `join_lokasi_lokasi_fk` FOREIGN KEY (`id_lokasi_terpilih`) REFERENCES `lokasi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `join_lokasi_user_fk` FOREIGN KEY (`user_nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_user_fk` FOREIGN KEY (`nim_ketua`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_lokasi_fk` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_mhs_fk` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

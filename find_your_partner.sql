-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 07:21 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

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
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(4) NOT NULL,
  `latitude` varchar(8) NOT NULL,
  `longitude` varchar(8) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `ketua` varchar(40) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `proker1` varchar(1000) NOT NULL,
  `proker2` varchar(1000) NOT NULL,
  `proker3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `latitude`, `longitude`, `kota`, `ketua`, `lokasi`, `proker1`, `proker2`, `proker3`) VALUES
(2, '-6.765', '111.050', 'Pati', 'Hisnuaslam', 'Ds Muktiharjo Kec Margorejo', '', '', ''),
(3, '-7.268', '112.731', 'Surabaya', 'Arif Farid ', 'Wetane Lumpur Lapindo', '', '', ''),
(4, '-7.261', '112.742', 'Surabaya', 'Bonex', 'Ngarep Markas Bonex', '', '', ''),
(5, '-6.438', '106.875', 'Jakarta', 'Nugroho', 'Mburine Monas, Ngulon Sithik', '', '', ''),
(6, '-7.759', '110.682', 'Klaten', 'Hudacrot', 'mburi indomaret klaten', '', '', ''),
(7, '-8.670', '115.216', 'Denpasar', 'Erlingga', 'Mburi omah walikota ngidul sithik cedhak bangjo', 'Pertanian : Irigasi sawah', 'Kesehatan : Sunat massal gratis', 'Teknologi : Pengenalan Sistem Operasi Linux'),
(8, '-6.946', '106.935', 'Sukabumi', 'Muca', 'Sukakamu, Mburi pom bensin ', '', '', ''),
(10, '-1.270', '116.873', 'Balikpapan', 'Mareta', 'belakang pom bensi deket indomaret', 'Pertanian : Reboisasi Hutan', 'Kesehatan : Berantas HIV', 'Teknologi : Internet masuk Desa (kerjasama dengan kominfo setempat)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(8) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `username`, `password`, `level`, `status`) VALUES
('M0514016', 'hisnuaslam', 'hisnuaslam', 1, 'belumjoin'),
('M0514034', 'mujahidah', 'mujahidah', 2, 'belumjoin'),
('m0514056', 'kucing', 'kucing', 2, 'belumjoin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

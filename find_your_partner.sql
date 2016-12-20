-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 09:16 AM
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
-- Table structure for table `joinlokasi`
--

CREATE TABLE `joinlokasi` (
  `nim` varchar(100) NOT NULL,
  `id` int(3) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinlokasi`
--

INSERT INTO `joinlokasi` (`nim`, `id`, `username`) VALUES
('M0514031', 7, 'adamcupu'),
('m0514056', 7, 'kucing');

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
  `tglmulai` date NOT NULL,
  `tglakhir` date NOT NULL,
  `tglscreening` date NOT NULL,
  `tglpengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `latitude`, `longitude`, `kota`, `ketua`, `lokasi`, `tglmulai`, `tglakhir`, `tglscreening`, `tglpengumuman`) VALUES
(7, '-8.670', '115.216', 'Denpasar', 'Erlingga', 'Mburi omah walikota ngidul sithik cedhak bangjo', '2016-12-01', '2016-12-31', '2016-12-14', '2016-12-20'),
(8, '-6.946', '106.935', 'Sukabumi', 'Muca', 'Sukakamu, Mburi pom bensin ', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, '-0.000', '113.291', 'Kalimantan', 'Rafa', 'Gak tau', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `uploadfoto`
--

CREATE TABLE `uploadfoto` (
  `id` int(10) NOT NULL,
  `file` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(8) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `username`, `password`, `level`) VALUES
('admin', 'admin', 'adminggwp', 3),
('M0514001', 'johnlennon', 'johnlennon', 2),
('M0514016', 'hisnuaslam', 'hisnuaslam', 1),
('M0514031', 'adamcupu', 'adamcupu', 2),
('M0514034', 'mujahidah', 'mujahidah', 2),
('M0514041', 'rafaokta', 'rafaokta', 1),
('m0514056', 'kucing', 'kucing', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadfoto`
--
ALTER TABLE `uploadfoto`
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
--
-- AUTO_INCREMENT for table `uploadfoto`
--
ALTER TABLE `uploadfoto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

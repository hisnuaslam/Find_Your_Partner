-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 07:48 PM
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
  `tgl_screening` date DEFAULT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `latitude`, `longitude`, `nama_kota`, `nim_ketua`, `alamat_lokasi`, `tgl_awal`, `tgl_screening`, `tgl_pengumuman`, `tgl_akhir`) VALUES
(1, '-8.39349', '115.2589', 'Denpasar', 'M0514016', 'Puhu Payangan Denpasar Bali', '2016-12-01', NULL, '2016-12-25', '2016-12-21'),
(2, '-7.66992', '112.4326', 'Mojokerto', 'M0514031', 'Jatirejo, Mojokerto, Jawa Timur', '2016-12-01', '2016-12-19', '2016-12-21', '2016-12-17'),
(3, '3.179746', '99.65630', 'Ujung Kubu', 'B0315032', 'Tj. Tiram, Kabupaten Batu Bara, Sumatera Utara', '2016-11-09', '2016-12-12', '2016-12-16', '2016-12-09');

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
  `sosmed` text NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `fakultas`, `angkatan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`, `email`, `sosmed`, `agama`, `kewarganegaraan`) VALUES
('B0315032', 'Khansa Abi Safira', 'Sastra Inggris', 'Fakultas Ilmu Budaya', 2015, 'Perempuan', 'Magelang', '1997-03-02', 'Jl. Medan Raya Nomor 12 Kota Magelang', 783023, 'khansa.aca@gmail.com', 'FB: Khansa Abi Safira', 'Islam', 'Indonesia'),
('D0313019', 'Dhany Oktaviany Putri', 'Sosiologi', 'Fakultas Ilmu Sosial dan Ilmu Politik', 2013, 'Perempuan', 'Mojokerto', '1994-12-03', 'Jl. Medan Raya nomor 3 Mojokerto', 890345, 'dhany.putri95@gmail.com', 'FB: Dhany Putri\r\nIG: @dhanyoktaviany', 'Katolik', 'Indonesia'),
('E0014215', 'Joshua H P Samosir', 'Ilmu Hukum', 'Fakultas Hukum', 2014, 'Laki-laki', 'Medan', '1996-12-24', 'Jl. Moh. Yamin No. 1 RT 01 RW 12 Medan', 632102, 'joshua.samosir@yahoo.com', 'FB:Joshua H P Samosir', 'Kristen', 'Indonesia'),
('G0116123', 'Eva Nur Chanifah Rasyidatil ''Ilmi', 'Pendidikan Dokter', 'Fakultas Kedokteran', 2016, 'Perempuan', 'Surakarta', '1998-03-05', 'Jl. Tiga Negeri nomor 2 Laweyan Solo', 739269, 'eva.encri@gmail.com', 'IG: @evanurchanifah', 'Islam', 'Indonesia'),
('H0913080', 'Putri Nimas Nusantari', 'Ilmu dan Teknologi Pangan', 'Fakultas Pertanian', 2013, 'Perempuan', 'Boyolali', '1995-04-03', 'Desa Sidomulyo, Kecamatan Ampel, Boyolali Jawa Tengah', 783990, 'nimas.putri@yahoo.co.id', 'TW: @nimasputri,\r\nIG: @nimasputri95', 'Islam', 'Indonesia'),
('K0114005', 'Agung Satrio Prabanda', 'Matematika', 'Fakultas Keguruan dan Ilmu Pengetahuan', 2014, 'Laki-laki', 'Magelang', '1996-05-21', 'Jl. Mega Merdeka nomor 234 Magelang', 637482, 'prabanda.agung@gmail.com', 'FB: Agung Satrio Prabanda', 'Islam', 'Indonesia'),
('M0514016', 'Figur Hisnu Aslam', 'Informatika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 2014, 'Laki-laki', 'Pati', '1996-03-21', 'Desa Joyotakan Kecamatan Pesanggrahan Pati', 638456, 'aslam.figur@gmail.com', 'FB: Figur Hisnu Aslam\r\nIG: @hisnuaslam', 'Islam', 'Indonesia'),
('M0514026', 'Kartini Aprilia', 'Informatika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 2014, 'Perempuan', 'Kendari', '1996-04-21', 'Jl. Kendari nomor 5 Kendari', 890324, 'kartini.aprilia@gmail.com', 'FB: Kartini Aprilia,\r\nTW: @kartiniapril', 'Islam', 'Indonesia'),
('M0514031', 'Muhammad Adam Fahmil ''Ilmi', 'Informatika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 2014, 'Laki-laki', 'Surakarta', '1996-06-20', 'Jl. Tiga Negeri nomor 2 Laweyan Solo', 739269, 'batik.adam@gmail.com', 'FB: Muhammad Adam Fahmil ''Ilmi', 'Islam', 'Indonesia'),
('M0514034', 'Mujahidah Showafah', 'Informatika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 2014, 'Perempuan', 'Sukabumi', '1996-06-19', 'Jl. Ir. Soekarno Sukabumi Jawa Barat', 574890, 'mujahidah.shwfh@gmail.com', 'FB: Mujahidah Showafah', 'Islam', 'Indonesia'),
('M0514042', 'Rafa Oktarinda', 'Informatika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 2014, 'Perempuan', 'Depok', '1996-10-09', 'Jl. Permata Hati nomor 1 Depok', 5672938, 'rafa.okta@gmail.com', 'FB: Rafa Oktarinda,\r\nIG: @rafaokta', 'Islam', 'Indonesia');

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
  `id_lokasi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `username`, `password`, `level`, `status`, `nim_pengikut`, `id_lokasi`) VALUES
('B0315032', 'khansaabi', 'khansaabi', 1, NULL, NULL, NULL),
('G0116123', 'evanurchanifah', 'evanurchanifah', 2, NULL, NULL, NULL),
('K0114005', 'admin', 'adminggwp', 3, NULL, NULL, NULL),
('M0514016', 'hisnuaslam', 'hisnuaslam', 1, NULL, NULL, NULL),
('M0514031', 'adamfahmil', 'adamfahmil', 1, NULL, NULL, NULL),
('M0514034', 'mujahidah', 'mujahidah', 2, NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `nim_pengikut` (`nim_pengikut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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

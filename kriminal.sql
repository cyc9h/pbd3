-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 10:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriminal`
--

-- --------------------------------------------------------

--
-- Table structure for table `bap`
--

CREATE TABLE `bap` (
  `id` int(11) NOT NULL,
  `no_laporan` int(11) NOT NULL,
  `pukul` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemeriksaan`
--

CREATE TABLE `detail_pemeriksaan` (
  `bap_id` int(11) NOT NULL,
  `nrp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pertanyaan`
--

CREATE TABLE `detail_pertanyaan` (
  `bap_id` int(11) NOT NULL,
  `no_pertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `korban`
--

CREATE TABLE `korban` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `j_kel` int(11) NOT NULL,
  `kwn` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(11) NOT NULL,
  `nrp` int(11) NOT NULL,
  `latitude` varchar(40) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `pukul` time NOT NULL,
  `apa` varchar(100) NOT NULL,
  `bagaimana` varchar(100) NOT NULL,
  `barang_bukti` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `j_kel` int(11) NOT NULL,
  `kwn` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personil`
--

CREATE TABLE `personil` (
  `nrp` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `pangkat_id` int(11) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(40) NOT NULL,
  `j_kel` int(11) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saksi`
--

CREATE TABLE `saksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `j_kel` int(11) NOT NULL,
  `kwn` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terlapor`
--

CREATE TABLE `terlapor` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `j_kel` int(11) NOT NULL,
  `kwn` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bap`
--
ALTER TABLE `bap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_laporan` (`no_laporan`);

--
-- Indexes for table `detail_pemeriksaan`
--
ALTER TABLE `detail_pemeriksaan`
  ADD KEY `bap_id` (`bap_id`),
  ADD KEY `nrp` (`nrp`);

--
-- Indexes for table `detail_pertanyaan`
--
ALTER TABLE `detail_pertanyaan`
  ADD PRIMARY KEY (`no_pertanyaan`),
  ADD KEY `bap_id` (`bap_id`);

--
-- Indexes for table `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `personil_id` (`nrp`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personil`
--
ALTER TABLE `personil`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `pangkat_id` (`pangkat_id`);

--
-- Indexes for table `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terlapor`
--
ALTER TABLE `terlapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korban`
--
ALTER TABLE `korban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no_laporan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personil`
--
ALTER TABLE `personil`
  MODIFY `nrp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `saksi`
--
ALTER TABLE `saksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terlapor`
--
ALTER TABLE `terlapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemeriksaan`
--
ALTER TABLE `detail_pemeriksaan`
  ADD CONSTRAINT `detail_pemeriksaan_ibfk_2` FOREIGN KEY (`nrp`) REFERENCES `personil` (`nrp`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`nrp`) REFERENCES `personil` (`nrp`);

--
-- Constraints for table `personil`
--
ALTER TABLE `personil`
  ADD CONSTRAINT `personil_ibfk_1` FOREIGN KEY (`pangkat_id`) REFERENCES `pangkat` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

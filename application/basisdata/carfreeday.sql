-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 08:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carfreeday`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` varchar(6) NOT NULL,
  `namaAdmin` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaAdmin`, `status`, `email`, `password`) VALUES
('A01', 'Admin', 'sepenuhnya', 'angga3399@gmail.com', '7df7d0936b7e849444b385a0b1f5baf7'),
('A02', 'Maulana', 'sepenuhnya', 'maulanaas@gmail.com', 'cac5493d6ccf0e56f154970c0ee60513');

-- --------------------------------------------------------

--
-- Table structure for table `carfree`
--

CREATE TABLE `carfree` (
  `idCarFree` varchar(6) NOT NULL,
  `namaCFD` varchar(30) DEFAULT NULL,
  `lat` varchar(60) DEFAULT NULL,
  `lng` varchar(60) DEFAULT NULL,
  `deskrip` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carfree`
--

INSERT INTO `carfree` (`idCarFree`, `namaCFD`, `lat`, `lng`, `deskrip`) VALUES
('C01', 'Dago', '-6.88767', '107.615', 'CFD jl.DAGO');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idEvent` varchar(6) NOT NULL,
  `namaEvent` varchar(50) DEFAULT NULL,
  `deskripEvent` text,
  `pamflet` varchar(60) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `idJadwal` varchar(6) DEFAULT NULL,
  `idAdmin` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idEvent`, `namaEvent`, `deskripEvent`, `pamflet`, `status`, `idJadwal`, `idAdmin`) VALUES
('E01', 'Atraksi Badut Bandung', 'Hay Guys Di CFD Dago nanti minggu kedatangan badut pastinya acaranya akan berbeda dengan beberapa bulan yang lalu.. ', 'pamflet.png', 'Aktif', 'J01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` varchar(6) NOT NULL,
  `tgl` date DEFAULT NULL,
  `idCarFree` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`idJadwal`, `tgl`, `idCarFree`) VALUES
('J01', '2017-09-03', 'C01');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `idLam` varchar(7) NOT NULL,
  `namaLam` varchar(50) DEFAULT NULL,
  `idCarFree` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `noKtp` varchar(15) DEFAULT NULL,
  `namaPanitia` varchar(30) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kontak` char(12) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `idCarFree` varchar(6) NOT NULL,
  `idAdmin` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`noKtp`, `namaPanitia`, `tgl`, `alamat`, `kontak`, `email`, `password`, `foto`, `idCarFree`, `idAdmin`) VALUES
(NULL, NULL, NULL, NULL, NULL, 'maulanaamsors@gmail.com', '2817a68561dfc6daa9a00bf269bfe23d', NULL, 'C01', 'A01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `carfree`
--
ALTER TABLE `carfree`
  ADD PRIMARY KEY (`idCarFree`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `idJadwal` (`idJadwal`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idJadwal`),
  ADD KEY `idCarFree` (`idCarFree`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`idLam`),
  ADD KEY `idCarFree` (`idCarFree`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`email`),
  ADD KEY `idCarFree` (`idCarFree`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`idJadwal`) REFERENCES `jadwal` (`idJadwal`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`idCarFree`) REFERENCES `carfree` (`idCarFree`);

--
-- Constraints for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `lampiran_ibfk_1` FOREIGN KEY (`idCarFree`) REFERENCES `carfree` (`idCarFree`);

--
-- Constraints for table `panitia`
--
ALTER TABLE `panitia`
  ADD CONSTRAINT `panitia_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`),
  ADD CONSTRAINT `panitia_ibfk_2` FOREIGN KEY (`idCarFree`) REFERENCES `carfree` (`idCarFree`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

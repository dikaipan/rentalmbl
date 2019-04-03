-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 10:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'siremon', 'siremon');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id` int(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `no_ktp` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama_lengkap`, `username`, `alamat`, `telepon`, `password`, `no_ktp`) VALUES
(3, 'Edy Purnomo', 'edy3369', 'Yogya', 2147483647, '7436969', '1145214521455');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
`id` int(50) NOT NULL,
  `mobil` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `mobil`, `kota`, `harga`) VALUES
(31, '24', '6', '325000'),
(32, '21', '6', '275000'),
(33, '25', '6', '300000'),
(34, '24', '9', '425000'),
(35, '21', '9', '375000'),
(36, '25', '9', '400000'),
(37, '24', '10', '525000'),
(38, '21', '10', '475000'),
(39, '25', '10', '500000'),
(40, '26', '11', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `merek`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(5, 'Suzuki');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id` int(50) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `kota_asal`, `kota_tujuan`) VALUES
(6, 'Yogyakarta', 'Solo'),
(9, 'Yogyakarta', 'Purworejo'),
(10, 'Yogyakarta', 'Kebumen'),
(11, 'Yogyakarta', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `kursi` int(11) NOT NULL,
  `no_plat` varchar(50) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `merek`, `nama`, `tahun`, `warna`, `kursi`, `no_plat`, `gambar`) VALUES
(21, '1', 'Avanza', '2018', 'Hitam', 6, 'AB 6075 DM', 'avanza.png'),
(24, '2', 'Jazz', '2018', 'Merah', 4, 'AB 555 CD', 'JazzMerah.png'),
(25, '5', 'Ertiga', '2018', 'Putih', 6, 'AB 5872 CD', 'ertigaputih.png'),
(26, '1', 'Alphard', '2018', 'Hitam', 8, 'AB 333 CC', 'AlphardHtml.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
`id` int(50) NOT NULL,
  `nobooking` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `durasi` int(1) NOT NULL DEFAULT '1',
  `id_mobil` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nobooking`, `tgl_pinjam`, `durasi`, `id_mobil`, `user_id`, `harga`, `asal`, `tujuan`, `status`) VALUES
(41, 'S3HIE62NDK', '2018-11-29', 2, 24, 3, '325000', 'Yogyakarta', 'Solo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

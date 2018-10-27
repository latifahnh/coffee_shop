-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 03:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(10) NOT NULL,
  `admin_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id_kar` varchar(10) NOT NULL,
  `kode_kar` varchar(50) NOT NULL,
  `nama_kar` varchar(100) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `alm_kar` varchar(100) NOT NULL,
  `tlp_kar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_kar`, `kode_kar`, `nama_kar`, `bagian`, `alm_kar`, `tlp_kar`) VALUES
('ADM', '01', 'Nisriina Nuur H', 'Administrasi', 'Pangeran IX,02/34, Triharjo, Sleman', '081234785'),
('DIR', '01', 'Latifah Nurrohmah H', 'Direksi', 'Jl. STM Pembangunan Yogyakarta', '085432123'),
('SPV', '01', 'Novi Indah P', 'Supervisor', 'Gendolwetan,10/10 Sumberejo, Tempel', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE IF NOT EXISTS `tb_konsumen` (
  `id_kon` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kon` varchar(50) NOT NULL,
  `alm_kon` varchar(100) NOT NULL,
  `tlp_kon` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_kon`, `nama_kon`, `alm_kon`, `tlp_kon`) VALUES
(1, 'Yogatama Putri S', 'Barongan 01/05, Bangurejo, Tempel', '0812345678'),
(2, 'Irvine Pramudya B', 'Jl. Tamansiswa, Brojohito Yogyakarta', '0812345678'),
(3, 'Gruda Sakti Krida', 'Jl. Beo 34, Demangan Baru, Papringan, Yogyakarta', '0812345678'),
(4, 'Wahyu Kukuh', 'Jl. Seturan, Maos, Cilacap', '012345'),
(5, 'Nurul Arifah', 'Gandok, Sinduharjo, Jaksel', '0123455'),
(6, 'Kautsar P', 'Perumahan Nogotirto', '01234567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id_produk` int(10) NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` decimal(22,2) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `id_sup` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga_produk`, `status_produk`, `id_sup`, `gambar`) VALUES
(1, 'AC-G', 'Aceh Gayo Arabbica', '100000.00', 'Ready Stock', 'KNO', 'coffee1.jpg'),
(2, 'AC-M', 'Mandailing Arabbica', '60000.00', 'Ready Stock', 'YG', 'coffee1.jpg'),
(3, 'AC-F', 'Flores Bajawa Arabbica', '85000.00', 'Ready Stock', 'SUB', 'coffee1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `id_sup` varchar(10) NOT NULL,
  `nama_sup` varchar(50) NOT NULL,
  `alm_sup` varchar(100) NOT NULL,
  `tlp_sup` varchar(20) NOT NULL,
  `jenis_sup` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_sup`, `nama_sup`, `alm_sup`, `tlp_sup`, `jenis_sup`) VALUES
('FAL', 'Falcon Supplier ', 'JL.STM Pembangunan Yogyakarta', '21345678', 'Pre Order'),
('KNO', 'Kuala Namu Supplier', 'Jl, Merdeka, Medan', '01234567', 'Pre-Order'),
('YG', 'Yogya Supplier', 'Jl. HOS. Cokroaminoto Yogyakarta', '0274123456', 'Pre Order');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_trx` int(11) NOT NULL AUTO_INCREMENT,
  `id_kon` int(11) NOT NULL,
  `id_kar` int(11) NOT NULL,
  `tgl_trx` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_produk` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `jml_harga` decimal(20,2) NOT NULL,
  PRIMARY KEY (`id_trx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Latifah Nurrohmah', 'latifah', 'latifahhandayani99@gmail.com', '123'),
(2, 'Rizki Nur Ikhtiari', 'rizki', 'rizki25@gmail.com', '123'),
(3, 'Nadita Putri', 'nadita', 'nadita@dita.com', '123'),
(4, 'Burhan Nurhasan', 'burhan', 'burhan@burhan.com', 'burhan'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, 'Kautsar P', 'kautsar', 'kautsar@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

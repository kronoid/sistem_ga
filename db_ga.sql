-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 06:19 AM
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
-- Database: `db_ga`
--

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_barang`
--

CREATE TABLE `kondisi_barang` (
  `ID_Barang` varchar(5) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Nama_Ruangan` varchar(50) NOT NULL,
  `Jumlah_Barang` int(3) NOT NULL,
  `Status_Barang` text NOT NULL,
  `Kondisi_Barang` text NOT NULL,
  `Catatan_GA_Barang` text NOT NULL,
  `Saran_Barang` text NOT NULL,
  `Waktu_Report` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_barang`
--

INSERT INTO `kondisi_barang` (`ID_Barang`, `Nama_Barang`, `Nama_Ruangan`, `Jumlah_Barang`, `Status_Barang`, `Kondisi_Barang`, `Catatan_GA_Barang`, `Saran_Barang`, `Waktu_Report`) VALUES
('B4uh0', 'Tester', 'Parkir', 221, '-', '-', '-', '-', '2018-03-01'),
('B4uhh', 'Tester', 'Parkir', 221, '-', '-', '-', '-', '2018-02-01'),
('B4uj9', 'Sofa', 'Tamu', 2, 'baru', 'mulus', '', '-', '2018-07-01'),
('Bjn10', 'Komputer', 'Basement', 2, '-', '-', '-', '-', '2018-03-01'),
('Bjn1m', 'Komputer', 'Basement', 2, '-', '-', '-', '-', '2018-02-01'),
('Bo6jw', 'Komputer', 'Programmer Jr.', 2, '-', '-', '-', '-', '2018-02-01'),
('Bqt1a', 'Komputer', 'Parkir', 2, '-', '-', '-', '-', '2018-02-01'),
('Bryp5', 'Cobaaa', 'Tamu', 123, '-', '-', '-', '-', '2018-02-01'),
('Bzxqk', 'Komputer', 'Creative Design', 2, '-', '-', '-', '-', '2018-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_gedung`
--

CREATE TABLE `kondisi_gedung` (
  `ID_Ruangan` varchar(5) NOT NULL,
  `Nama_Ruangan` varchar(50) NOT NULL,
  `Status_Ruangan` text NOT NULL,
  `Kondisi_Ruangan` text NOT NULL,
  `Catatan_GA_Ruangan` text NOT NULL,
  `Saran_Ruangan` text NOT NULL,
  `Waktu_Report` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_gedung`
--

INSERT INTO `kondisi_gedung` (`ID_Ruangan`, `Nama_Ruangan`, `Status_Ruangan`, `Kondisi_Ruangan`, `Catatan_GA_Ruangan`, `Saran_Ruangan`, `Waktu_Report`) VALUES
('R0001', 'Parkir', '-', 'Sudah diperbaiki', '-', '-', '2018-02-01'),
('R0002', 'Parkir', '-', 'Sudah diperbaiki', '-', '-', '2018-03-01'),
('R0003', 'Basement', 'Gelap', 'Tidak ada penerangan', 'Beli lampu baru', 'Lampu yang 15 watt', '2018-03-01'),
('R0004', 'Creative Design', '-', '-', '-', '-', '2018-03-01'),
('R0005', 'Lobi samping', '-', '-', '-', '-', '2018-03-01'),
('R0006', 'Tamu', '-', 'Wallpaper mengelupas', '-', 'Diganti wallpaper', '2018-03-01'),
('R0007', 'Security', '-', 'Cat tembok kusam', '-', 'Dilakukan pengecatan', '2018-03-01'),
('R0008', 'Meeting', '-', '-', '-', '-', '2018-03-01'),
('R0009', 'Programmer Jr.', '-', '-', '-', '-', '2018-03-01'),
('R0010', 'Admin', '-', 'Kosong', '-', '-', '2018-03-01'),
('R8sf0', 'Basement', 'Gelap', 'Tidak ada penerangan', 'Beli lampu baru', 'Lampu yang 15 watt', '2018-02-01'),
('Raiz9', 'Creative Design', '-', '-', '-', '-', '2018-02-01'),
('Ro7mi', 'Lobi samping', '-', '-', '-', '-', '2018-02-01'),
('Rot0a', 'Tamu', '-', 'Wallpaper mengelupas', '-', 'Diganti wallpaper', '2018-02-01'),
('Rr3om', 'Security', '-', 'Cat tembok kusam', '-', 'Dilakukan pengecatan', '2018-02-01'),
('Rt6ms', 'Lift', 'Nyala', 'mulus', '-', '-', '2018-03-01'),
('Rtb1q', 'Meeting', '-', '-', '-', '-', '2018-02-01'),
('Rw859', 'Programmer Jr.', '-', '-', '-', '-', '2018-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_kendaraan`
--

CREATE TABLE `kondisi_kendaraan` (
  `ID_Kendaraan` varchar(5) NOT NULL,
  `Nama_Kendaraan` varchar(100) NOT NULL,
  `Nomor_Polisi` varchar(10) NOT NULL,
  `Masa_Berlaku_STNK` varchar(50) NOT NULL,
  `Masa_Berlaku_Pajak` varchar(50) NOT NULL,
  `Kondisi_Badan_Kendaraan` text NOT NULL,
  `Kondisi_Ban_Kendaraan` text NOT NULL,
  `Kondisi_Interior_Kendaraan` text NOT NULL,
  `Kondisi_Mesin_Kendaraan` text NOT NULL,
  `Kondisi_Panel_Kendaraan` text NOT NULL,
  `Catatan_GA_Kendaraan` text NOT NULL,
  `Saran_Kendaraan` text NOT NULL,
  `Waktu_Report` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_kendaraan`
--

INSERT INTO `kondisi_kendaraan` (`ID_Kendaraan`, `Nama_Kendaraan`, `Nomor_Polisi`, `Masa_Berlaku_STNK`, `Masa_Berlaku_Pajak`, `Kondisi_Badan_Kendaraan`, `Kondisi_Ban_Kendaraan`, `Kondisi_Interior_Kendaraan`, `Kondisi_Mesin_Kendaraan`, `Kondisi_Panel_Kendaraan`, `Catatan_GA_Kendaraan`, `Saran_Kendaraan`, `Waktu_Report`) VALUES
('Ktxw4', 'Motor', 'B 6234 TT', '19/02/2018 - 19/02/2018', '19/02/2018 - 19/02/2018', '-', '-', '-', '-', '-', '-', '-', '2018-02-08'),
('Rsc1v', 'Mobil', 'B 5555 RR', '27/02/2018 - 27/02/2018', '27/02/2018 - 27/02/2018', '-', '-', '-', '-', '-', '-', '-', '2018-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_kantor`
--

CREATE TABLE `pembayaran_kantor` (
  `ID_Pembayaran` varchar(5) NOT NULL,
  `Nama_Pembayaran` varchar(50) NOT NULL,
  `Total_Pembayaran` int(15) NOT NULL,
  `Tgl_Pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran_kantor`
--

INSERT INTO `pembayaran_kantor` (`ID_Pembayaran`, `Nama_Pembayaran`, `Total_Pembayaran`, `Tgl_Pembayaran`) VALUES
('K0001', 'Telekomunikasi', 1000000, '2018-02-15'),
('K0002', 'Sumbangan Warga', 500000, '2018-02-15'),
('K0003', 'Listrik', 2000000, '2018-02-15'),
('K0004', 'Air', 1000000, '2018-02-15'),
('K0005', 'Sewa Gedung DYO', 10000000, '2018-02-15'),
('K0006', 'Telekomunikasi', 1000000, '2019-02-15'),
('K0007', 'Sumbangan Warga', 500000, '2019-02-15'),
('K0008', 'Listrik', 2000000, '2019-02-15'),
('K0009', 'Air', 1000000, '2019-02-15'),
('K0010', 'Sewa Gedung DYO', 10000000, '2019-02-15'),
('RTh3o', 'HJHH', 9912025, '2018-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_rumahtangga`
--

CREATE TABLE `pembayaran_rumahtangga` (
  `ID_PembayaranRT` varchar(5) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Jumlah_Barang` int(3) NOT NULL,
  `Total_Harga` int(15) NOT NULL,
  `Tgl_Beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran_rumahtangga`
--

INSERT INTO `pembayaran_rumahtangga` (`ID_PembayaranRT`, `Nama_Barang`, `Jumlah_Barang`, `Total_Harga`, `Tgl_Beli`) VALUES
('RT001', 'Makanan', 100, 30000, '2018-02-13'),
('RT003', 'Makanan', 100, 30000, '2017-10-10'),
('RT004', 'Makanan', 100, 30000, '2018-02-13'),
('RT006', 'Makanan', 100, 30000, '2017-10-10'),
('RTe57', 'aaaaa', 20, 111, '2018-02-01'),
('RTqhs', 'Kopi Hitam Kupu Kupu', 10, 50000, '2018-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Password`, `Nama_User`, `Jabatan`) VALUES
('akuntansi', '1792cf6d1c5c64db5ad2e83c753339a1', 'Akuntansi', 'Akuntansi'),
('sarysuryadewi', '1792cf6d1c5c64db5ad2e83c753339a1', 'Sary Suryadewi', 'General Affairs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kondisi_barang`
--
ALTER TABLE `kondisi_barang`
  ADD PRIMARY KEY (`ID_Barang`),
  ADD KEY `Nama_Ruangan` (`Nama_Ruangan`);

--
-- Indexes for table `kondisi_gedung`
--
ALTER TABLE `kondisi_gedung`
  ADD PRIMARY KEY (`ID_Ruangan`),
  ADD KEY `Nama_Ruangan_2` (`Nama_Ruangan`);

--
-- Indexes for table `kondisi_kendaraan`
--
ALTER TABLE `kondisi_kendaraan`
  ADD PRIMARY KEY (`ID_Kendaraan`);

--
-- Indexes for table `pembayaran_kantor`
--
ALTER TABLE `pembayaran_kantor`
  ADD PRIMARY KEY (`ID_Pembayaran`);

--
-- Indexes for table `pembayaran_rumahtangga`
--
ALTER TABLE `pembayaran_rumahtangga`
  ADD PRIMARY KEY (`ID_PembayaranRT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kondisi_barang`
--
ALTER TABLE `kondisi_barang`
  ADD CONSTRAINT `kondisi_barang_ibfk_1` FOREIGN KEY (`Nama_Ruangan`) REFERENCES `kondisi_gedung` (`Nama_Ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

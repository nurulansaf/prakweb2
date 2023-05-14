-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 03:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hyungiemarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategoriproduk`
--

CREATE TABLE `tb_kategoriproduk` (
  `id_kategoriproduk` int(11) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategoriproduk`
--

INSERT INTO `tb_kategoriproduk` (`id_kategoriproduk`, `nama_kategori`) VALUES
(1, 'Sayuran Daun'),
(2, 'Sayuran Batang'),
(3, 'Sayuran Bunga'),
(4, 'Sayuran Buah'),
(5, 'Sayuran Umbi'),
(6, 'Sayuran Umbi Lapis'),
(7, 'Sayuran Jamur'),
(8, 'Sayuran Kacang '),
(11, 'Sayuran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(100) NOT NULL,
  `nohp_pemesan` varchar(20) NOT NULL,
  `email_pemesan` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `tgl_pesanan`, `nama_pemesan`, `alamat_pemesan`, `nohp_pemesan`, `email_pemesan`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(12, '2023-05-20', 'Uyung 2', 'Kota depok', '089636126372', 'uyung@gmail.com', 12, 'sehat', 18),
(15, '2023-05-12', 'Nurul', 'kp sawah', '089636126372', 'nurulansaf@gmail.com', 20, 'tolong hati hati saat packing', 18),
(16, '2023-05-26', 'Nurul Anisa Fitriya', 'Kota depok', '089636126372', 'fitriya@gmail.com', 1, 'jangna layu', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategoriproduk_id` int(11) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategoriproduk_id`, `gambar_produk`) VALUES
(15, 'K-SB', 'Kelapa Muda', 480000, 400000, 19, 5, 'Kelapa muda baik untuk tubuh', 4, 'categories7.png'),
(22, 'K-SB', 'Sayur bayam', 6000, 5000, 10, 5, 'bayam organik', 1, 'big-product5.jpg'),
(23, 'P-SB', 'Pepaya', 30000, 25000, 50, 10, 'Fresh dan sehat ', 4, 'categories9.png'),
(24, 'K-PB', 'Kelapa Parut ', 18000, 15000, 20, 10, 'Diparut di tempat', 4, 'categories7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategoriproduk`
--
ALTER TABLE `tb_kategoriproduk`
  ADD PRIMARY KEY (`id_kategoriproduk`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategoriproduk`
--
ALTER TABLE `tb_kategoriproduk`
  MODIFY `id_kategoriproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

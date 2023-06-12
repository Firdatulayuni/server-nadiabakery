-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 11:41 AM
-- Server version: 10.4.22-MariaDB-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(25) NOT NULL,
  `password_admin` varchar(25) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`, `role`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `username_pel` varchar(25) NOT NULL,
  `banyak_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `username_pel`, `banyak_produk`) VALUES
(39, 9, 'aini', 1),
(42, 18, 'nabila', 1),
(43, 17, 'nabila', 1),
(44, 9, 'nabila', 1),
(46, 11, 'nabila', 1),
(47, 13, 'nabila', 1),
(48, 16, 'nabila', 1),
(49, 9, 'nabila', 1),
(50, 15, 'nabila', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `username_pel` varchar(25) NOT NULL,
  `password_pel` varchar(25) NOT NULL,
  `nama_pel` varchar(25) NOT NULL,
  `telp_pel` int(11) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`username_pel`, `password_pel`, `nama_pel`, `telp_pel`, `role`) VALUES
('aini', 'aini', 'aini', 2147483647, 2),
('amel', '5678', 'amel', 2147483647, 2),
('Andii', '19809', 'Andi', 13917121, 2),
('ani', 'ani', 'ani', 2838192, 2),
('bibi', 'bibi', 'bibi', 7966457, 2),
('budi', 'budi', 'budi', 31627389, 2),
('bunga', 'bunga', 'shj', 7668, 2),
('Diaah', '88888', 'Diah', 18117392, 2),
('didi', 'didi', 'didi', 81973131, 2),
('Filaa', '91897', 'Fila', 13917392, 2),
('Finaa', '12434', 'Fina', 2839723, 2),
('firdaa', '18032003', 'firda', 89226828, 2),
('Ichaa', '16278', 'icha', 1391217, 2),
('nabila', 'aini', 'nabila', 87, 2),
('nana', 'nana', 'nana', 836492, 2),
('nina', '123456', 'nina anisa', 8923008, 2),
('puput', 'puput', 'puput', 858273628, 2),
('tutik', 'tutik', 'tutik tutik didinding', 86747474, 2),
('widi', '123', 'widi', 89371818, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL,
  `username_admin` varchar(25) NOT NULL,
  `banyak_pesanan` int(11) NOT NULL,
  `bayar_pesanan` int(11) NOT NULL,
  `waktu_pesanan` date NOT NULL,
  `status_pesanan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_keranjang`, `username_admin`, `banyak_pesanan`, `bayar_pesanan`, `waktu_pesanan`, `status_pesanan`) VALUES
(75, 39, 'admin', 1, 60000, '2023-06-06', 0),
(76, 42, 'admin', 1, 75000, '2023-06-06', 0),
(77, 42, 'admin', 1, 75000, '2023-06-06', 0),
(78, 43, 'admin', 1, 3500, '2023-06-06', 0),
(79, 42, 'admin', 1, 75000, '2023-06-07', 0),
(80, 43, 'admin', 1, 3500, '2023-06-07', 0),
(81, 44, 'admin', 1, 60000, '2023-06-07', 0),
(82, 42, 'admin', 1, 75000, '2023-06-07', 0),
(83, 43, 'admin', 1, 3500, '2023-06-07', 0),
(84, 44, 'admin', 1, 60000, '2023-06-07', 0),
(85, 46, 'admin', 1, 5000, '2023-06-07', 0),
(86, 42, 'admin', 1, 75000, '2023-06-07', 0),
(87, 43, 'admin', 1, 3500, '2023-06-07', 0),
(88, 44, 'admin', 1, 60000, '2023-06-07', 0),
(89, 46, 'admin', 1, 5000, '2023-06-07', 0),
(90, 47, 'admin', 1, 3000, '2023-06-07', 0),
(91, 42, 'admin', 1, 75000, '2023-06-07', 0),
(92, 43, 'admin', 1, 3500, '2023-06-07', 0),
(93, 44, 'admin', 1, 60000, '2023-06-07', 0),
(94, 46, 'admin', 1, 5000, '2023-06-07', 0),
(95, 47, 'admin', 1, 3000, '2023-06-07', 0),
(96, 48, 'admin', 1, 30000, '2023-06-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(50) NOT NULL,
  `status_produk` tinyint(1) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `status_produk`, `stok`) VALUES
(9, 'Sponge Cake', 60000, 'img/sponge cake.jpeg', 1, 6),
(11, 'Croissant', 5000, 'img/croissant.jpeg', 1, -2),
(12, 'Brownies Kering', 11000, 'img/brownies kering.jpeg', 1, 1),
(13, 'Nagasari', 3000, 'img/nagasari.jpeg', 1, 3),
(14, 'Caramel Cake', 80000, 'img/caramel cake.jpeg', 1, 1),
(15, 'Bagel', 7000, 'img/roti bagel.jpeg', 1, 5),
(16, 'Brownies Talas', 30000, 'img/brownies talas.jpeg', 1, 9),
(17, 'Lemper Ayam', 3500, 'img/lemper ayam.jpeg', 1, 10),
(18, 'Red Velved Cake', 75000, 'img/red velvet.jpeg', 1, -1),
(20, 'Muffin', 5000, 'img/muffin.jpeg', 1, 6),
(21, 'Brownies Pandan', 30000, 'img/brownies pandan.jpeg', 1, 5),
(22, 'Kue Lumpur', 5000, 'img/kue lumpur.jpeg', 1, 10),
(23, 'Tiramisu Whole Cake', 120000, 'img/tiramisu whole  cake.jpeg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `username_pel` (`username_pel`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`username_pel`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_keranjang` (`id_keranjang`),
  ADD KEY `username_admin` (`username_admin`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`username_pel`) REFERENCES `pelanggan` (`username_pel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`username_admin`) REFERENCES `admin` (`username_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

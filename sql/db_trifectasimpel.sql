-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 05:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trifectasimpel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `idcart` varchar(55) NOT NULL,
  `produk` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `sales` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idcart`, `produk`, `qty`, `sales`, `status`) VALUES
(12, 'C-2024000001', 4, NULL, 1, 1),
(13, 'C-2024000001', 6, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `namacustomer` varchar(55) NOT NULL,
  `alamatcustomer` text NOT NULL,
  `kontakcustomer` varchar(55) NOT NULL,
  `nikcustomer` bigint(20) NOT NULL,
  `pointcustomer` int(11) NOT NULL DEFAULT 0,
  `tanggalcustomer` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `namacustomer`, `alamatcustomer`, `kontakcustomer`, `nikcustomer`, `pointcustomer`, `tanggalcustomer`, `status`) VALUES
(1, 'Dimas Anugerah', 'Purbalingga', '0812-0000-2222', 330228808012121, 0, '2024-01-20', 1),
(2, 'Adit', 'Purwokerto', '0812-0000-2222', 330228808012121, 0, '2024-01-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` int(11) NOT NULL,
  `jenisidentitas` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `jenisidentitas`, `status`) VALUES
(1, 'KTP', 1),
(2, 'SIM', 1),
(3, 'KARTU PELAJAR', 1),
(5, 'PASSPORT', 1),
(6, 'KARTU IZIN TINGGAL SEMENTARA (KITAS)', 1),
(7, 'KARTU IZIN TINGGAL TETAP (KITAP)', 1),
(10, 'KTP WNA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenisproduk`
--

CREATE TABLE `jenisproduk` (
  `id` int(11) NOT NULL,
  `jenis` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenisproduk`
--

INSERT INTO `jenisproduk` (`id`, `jenis`, `status`) VALUES
(1, 'CINCIN', 1),
(2, 'KALUNG', 1),
(3, 'GELANG', 1),
(4, 'ANTING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(55) NOT NULL,
  `profesi` int(11) NOT NULL,
  `ttd` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `kontak`, `profesi`, `ttd`, `status`) VALUES
(1, 'Indra Kusuma', 'Purwokerto', '0822-1133-1113', 1, '2024-1704901076.png', 1),
(3, 'Dimas Anugerah', 'Purbalingga', '0822-1133-1113', 2, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(55) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deskripsi`, `status`) VALUES
(1, 'SURAT', 'PRODUK YANG MENGGUNAKAN SURAT SURAT / PRODUK YANG BERSURAT LENGKAP', 1),
(2, 'NON SURAT', 'PRODUK YANG TIDAK MENGGUNAKAN / TIDAK BERSURAT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `jeniskontak` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `jeniskontak`, `status`) VALUES
(1, 'TELEPON SELULER', 1),
(2, 'TELEPON RUMAH', 1),
(3, 'TELEPON KANTOR', 1),
(4, 'EMAIL', 1),
(6, 'ALAT MEDIA SOSIAL', 1),
(7, 'FAX', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kodeproduk` varchar(55) NOT NULL,
  `namaproduk` varchar(55) NOT NULL,
  `hargaproduk` decimal(20,0) NOT NULL,
  `keteranganproduk` text NOT NULL,
  `jenisproduk` int(11) NOT NULL,
  `beratproduk` double NOT NULL,
  `karatproduk` double NOT NULL,
  `fotoproduk` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kodeproduk`, `namaproduk`, `hargaproduk`, `keteranganproduk`, `jenisproduk`, `beratproduk`, `karatproduk`, `fotoproduk`, `status`) VALUES
(4, '44852215609137509', 'Cincin 1', 2500000, 'Cincin 1', 1, 3.5, 24, '2024-1705286373.png', 1),
(5, '73990597627436009', 'Cincin 2', 2500000, 'Cincin 2', 1, 3.5, 24, '2024-1705286391.png', 1),
(6, '89465531448365380', 'Cincin 3', 2500000, 'Cincin 3', 1, 3.5, 24, '2024-1705286408.png', 1),
(7, '9226656419886110', 'Kalung 1', 2500000, 'Kalung 1', 2, 3.5, 24, '2024-1705286621.png', 1),
(8, '1177745372027653', 'Kalung 2', 2500000, 'Kalung 2', 2, 3.5, 24, '2024-1705286652.png', 1),
(9, '67012908316606076', 'Kalung 3', 2500000, 'Kalung 3', 2, 3.5, 24, '2024-1705286677.png', 1),
(10, '31980908491484474', 'Gelang 1', 2500000, 'Gelang 1', 3, 3.5, 24, '2024-1705287538.png', 1),
(11, '86329771565751904', 'Gelang 2', 2500000, 'Gelang 2', 3, 3.5, 24, '2024-1705287576.png', 1),
(12, '95321884073739879', 'Anting 1', 2500000, 'Anting 1', 4, 3.5, 24, '2024-1705287812.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `jenisprofesi` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profesi`
--

INSERT INTO `profesi` (`id`, `jenisprofesi`, `status`, `created_at`, `update_at`) VALUES
(1, 'KEPALA TOKO', 1, '2024-01-01 04:07:28', '2024-01-19 14:11:59'),
(2, 'KARYAWAN', 1, '2024-01-01 06:07:46', '2024-01-19 14:12:02'),
(3, 'MARKETING', 1, '2024-01-19 07:07:52', '2024-01-19 14:12:05'),
(5, 'KASIR', 1, '2024-01-01 07:08:07', '2024-01-19 14:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `status`) VALUES
(1, 'Admin', 1),
(2, 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'AKTIF'),
(2, 'TIDAK AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int(11) NOT NULL,
  `namasuplier` varchar(55) NOT NULL,
  `alamatsuplier` text NOT NULL,
  `kontaksuplier` varchar(55) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `namasuplier`, `alamatsuplier`, `kontaksuplier`, `status`) VALUES
(1, 'Central Musik Purwokerto', 'Roxy Square Building\r\nLt LG blok C6 no3 Purwokerto – Banyumas', '0857-1692-8889', 1),
(3, 'Triple 3 Music', 'Purwokerto', '0857-1692-8887', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `idtransaksi` varchar(55) NOT NULL,
  `idcart` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `payment` int(11) NOT NULL,
  `total` decimal(20,0) NOT NULL,
  `sales` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `iduser`, `username`, `password`, `role`, `status`) VALUES
(1, 1, 'indrakusuma', '$2y$12$.Qw/y33owwFeOPBYKLUxOOB1ESywtNqHUxNskTzhKYw/NrdSAXoIC', 1, 1),
(4, 3, 'dimas', '$2y$12$ADoZRBq9GZYoxRrlHrSbheVcxyTZP0gZdupL7H36QsgiqCdWSZ5Vi', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisproduk`
--
ALTER TABLE `jenisproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenisproduk`
--
ALTER TABLE `jenisproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

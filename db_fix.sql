-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 05:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `kompetensi_keahlian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'X RPl 1', 'Rekayasa Perangkat Lunak'),
(2, 'X RPL 2', 'Rekayasa Perangkat Lunak'),
(3, 'XI RPL 1', 'Rekayasa Perangkat Lunak'),
(4, 'XI RPL 2', 'Rekayasa Perangkat Lunak'),
(5, 'XII RPL 1', 'Rekayasa Perangkat Lunak'),
(6, 'XII RPL 2', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(30) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `id_spp` int(20) DEFAULT NULL,
  `jumlah_bayar` int(20) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `nama_petugas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_siswa`, `nisn`, `jatuh_tempo`, `bulan`, `tgl_bayar`, `id_spp`, `jumlah_bayar`, `keterangan`, `nama_petugas`) VALUES
(279, 2, '1301742', '2019-01-10', 'januari  2019', '2021-03-29', 1, 150000, 'Lunas', 'Sutanto Dwi Putra'),
(280, 2, '1301742', '2019-02-10', 'Februari  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(281, 2, '1301742', '2019-03-10', 'Maret  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(282, 2, '1301742', '2019-04-10', 'April  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(283, 2, '1301742', '2019-05-10', 'Mei  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(284, 2, '1301742', '2019-06-10', 'Juni  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(285, 2, '1301742', '2019-07-10', 'Juli  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(286, 2, '1301742', '2019-08-10', 'Agustus  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(287, 2, '1301742', '2019-09-10', 'September  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(288, 2, '1301742', '2019-10-10', 'Oktober  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(289, 2, '1301742', '2019-11-10', 'November  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(290, 2, '1301742', '2019-12-10', 'Desember  2019', '0000-00-00', 1, 150000, 'Belum Lunas', NULL),
(303, 4, '12989177', '1970-01-01', 'januari  1970', '2021-03-29', 3, 200000, 'Lunas', 'Sutanto Dwi Putra'),
(304, 4, '12989177', '1970-02-01', 'Februari  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(305, 4, '12989177', '1970-03-01', 'Maret  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(306, 4, '12989177', '1970-04-01', 'April  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(307, 4, '12989177', '1970-05-01', 'Mei  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(308, 4, '12989177', '1970-06-01', 'Juni  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(309, 4, '12989177', '1970-07-01', 'Juli  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(310, 4, '12989177', '1970-08-01', 'Agustus  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(311, 4, '12989177', '1970-09-01', 'September  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(312, 4, '12989177', '1970-10-01', 'Oktober  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(313, 4, '12989177', '1970-11-01', 'November  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL),
(314, 4, '12989177', '1970-12-01', 'Desember  1970', '0000-00-00', 3, 200000, 'Belum Lunas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', 'admin123', 'Sutanto Dwi Putra', 'admin'),
(2, 'petugas', 'petugas123', 'Dwitra Alyas', 'petugas'),
(3, 'tanto', 'tanto123', 'Tanto Putra', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `id_spp` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `nomor_telepon`, `id_spp`, `password`) VALUES
(1, '1234567', '77777', 'Bagza Jaya Wiguna', 6, 'Bukanegara', '08765546676', 1, ''),
(2, '1301742', '123123', 'Deran Maulana Rizky', 2, 'Lembang', '08544532236', 1, 'deran'),
(3, '123', '123', 'Achmad Hafizh', 1, 'Lembang', '0875555332', 1, ''),
(4, '12989177', '1283838', 'Dani Setiawan', 5, 'Sukamaju', '008976555444', 3, 'dani');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 2019, 150000),
(2, 2020, 175000),
(3, 2021, 200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `siswa` (`id_spp`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

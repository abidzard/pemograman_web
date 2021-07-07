-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 06:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` varchar(14) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mhs`, `prodi`, `jk`, `skill`) VALUES
('1910631170149', 'Abidzard Lintang Adhiasta', 'S1 - Teknik Informatika', 'Laki-laki', 'Programming, Networking, Multimedia'),
('1910631170150', 'Dwi Putri Pebriani', 'S1 - Sistem Informasi', 'Perempuan', 'Programming, Multimedia'),
('1910631170151', 'Naufaldi Mahardika', 'D4 - Teknik Komputer', 'Laki-laki', 'Programming, Networking'),
('1910631170152', 'Wahid Maulana', 'D4 - Teknik Komputer', 'Laki-laki', 'Programming, Multimedia'),
('1910631170153', 'Rejive Dewangga', 'S1 - Sistem Informasi', 'Laki-laki', 'Programming, Multimedia'),
('1910631170154', 'Adhiny Putri', 'S1 - Sistem Informasi', 'Perempuan', 'Programming, Networking, Multimedia'),
('1910631170155', 'Kunaifi Kurnia Abdullah', 'S1 - Teknik Informatika', 'Laki-laki', 'Programming, Networking, Multimedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2026 at 06:43 AM
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
-- Database: `tugas_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `deadline_kelas`
--

CREATE TABLE `deadline_kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `deadline` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deadline_kelas`
--

INSERT INTO `deadline_kelas` (`id`, `kelas`, `deadline`) VALUES
(3, 'TI-1A', '2026-02-18 18:00:00'),
(4, '1KA', '2026-03-02 11:08:00'),
(5, '1A', '2026-02-23 10:01:00'),
(6, '1K', '2026-02-23 09:45:00'),
(7, '1K,A', '2026-02-25 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `password`) VALUES
(1, 'Fadly', '23001', 'fff6f444c0fd08f8cca7eb254a216565'),
(2, 'Fadly', '23001', 'fff6f444c0fd08f8cca7eb254a216565'),
(3, '', '23001', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `tanggal_nilai` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `tugas_id` int(11) DEFAULT NULL,
  `nilai` int(3) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`tanggal_nilai`, `id`, `tugas_id`, `nilai`, `komentar`) VALUES
('2026-02-27 04:12:17', 5, 64, 50, 'sudah ditindaklanjuti oleh akademik'),
('2026-03-09 05:35:12', 6, 66, 2, 'jjjj\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `tanggal` date DEFAULT NULL,
  `topik` varchar(200) NOT NULL,
  `masalah` text NOT NULL,
  `solusi` text NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`tanggal`, `topik`, `masalah`, `solusi`, `id`, `nama`, `nim`, `kelas`, `file`, `judul`) VALUES
('2026-02-27', 'Kendala Biaya Kuliah', 'Belum membayar SPP Februari', 'Diarahkan untuk mencicil sebagian', 64, 'Yusra', '220555580031', '2AB', '1772164797_mahasiswa.jpeg', ''),
('2026-02-27', 'Kendala Biaya Kuliah', 'Belum membayar SPP Februari', 'Diarahkan untuk mencicil sebagian', 65, 'Yusra', '220555580031', '2AB', '1772164987_mahasiswa.jpeg', ''),
('2026-03-02', 'Kendala Biaya Kuliah', 'hh', 'jj', 66, 'akbar', '23001', '1 Administrasi Bisnis', '1772425849_kokak.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_2`
--

CREATE TABLE `tugas_2` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT ' Menunggu',
  `catatan` text NOT NULL,
  `versi` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deadline_kelas`
--
ALTER TABLE `deadline_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tugas` (`tugas_id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_2`
--
ALTER TABLE `tugas_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deadline_kelas`
--
ALTER TABLE `deadline_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tugas_2`
--
ALTER TABLE `tugas_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_tugas` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 04:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iplm_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `iplm`
--

CREATE TABLE `iplm` (
  `ID_IPLM` int(11) NOT NULL,
  `ID_UPLM7` float DEFAULT NULL,
  `ID_UPLM5` float DEFAULT NULL,
  `ID_UPLM4` float DEFAULT NULL,
  `ID_UPLM3` float DEFAULT NULL,
  `ID_UPLM6` float DEFAULT NULL,
  `ID_UPLM2` float DEFAULT NULL,
  `ID_UPLM1` float DEFAULT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TOTAL_IPLM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iplm`
--

INSERT INTO `iplm` (`ID_IPLM`, `ID_UPLM7`, `ID_UPLM5`, `ID_UPLM4`, `ID_UPLM3`, `ID_UPLM6`, `ID_UPLM2`, `ID_UPLM1`, `TGL_INPUT`, `TOTAL_IPLM`) VALUES
(6, 1.27824, 1.01698, 0.00613739, 0.00902, 0.260901, 1.22459, 0.00266003, '2024-01-29 06:44:56', 54.2647);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_1`
--

CREATE TABLE `uplm_1` (
  `ID_UPLM1` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_UNIT_P_UMUM` float DEFAULT NULL,
  `RATIO_UNIT_P_SEKOLAH` float DEFAULT NULL,
  `PERPUS_PT` float DEFAULT NULL,
  `PERPUS_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM1` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_1`
--

INSERT INTO `uplm_1` (`ID_UPLM1`, `TGL_INPUT`, `RATIO_UNIT_P_UMUM`, `RATIO_UNIT_P_SEKOLAH`, `PERPUS_PT`, `PERPUS_P_KHUSUS`, `HASIL_UPLM1`) VALUES
(1, '2024-01-26 02:17:54', 0.000142826, 0.0113859, 0.000923191, 0, 0.00253323),
(2, '2024-01-26 07:08:13', 0.000142826, 0.0113859, 0.000923191, 0, 0.00253323),
(3, '2024-01-26 07:49:26', 0.000142826, 0.0123921, 0.000550995, 0, 0.00266003),
(4, '2024-01-29 03:22:28', 0.000142826, 0.0123921, 0.000550995, 0, 0.00266003),
(5, '2024-01-31 02:06:01', 0.770683, 35.9281, 0.0565156, 101.952, 1445.11);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_2`
--

CREATE TABLE `uplm_2` (
  `ID_IPLM2` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_KOLEKSI_P_UMUM` float DEFAULT NULL,
  `RATIO_KOLEKSI_P_SEKOLAH` float DEFAULT NULL,
  `KOLEKSI_PT` float DEFAULT NULL,
  `KOLEKSI_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_2`
--

INSERT INTO `uplm_2` (`ID_IPLM2`, `TGL_INPUT`, `RATIO_KOLEKSI_P_UMUM`, `RATIO_KOLEKSI_P_SEKOLAH`, `KOLEKSI_PT`, `KOLEKSI_P_KHUSUS`, `HASIL_UPLM2`) VALUES
(1, '2024-01-26 07:16:34', 0.0107149, 4.47073, 22596, 0, 1.31671),
(2, '2024-01-26 07:51:24', 0.0110098, 4.85042, 22596, 0, 1.22459),
(3, '2024-01-26 08:12:16', 0.0145849, 4.85042, 22596, 0, 1.22638),
(4, '2024-01-29 03:24:50', 0.0110098, 4.85042, 22596, 0, 1.22459);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_3`
--

CREATE TABLE `uplm_3` (
  `ID_UPLM3` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_TENAGA_P_UMUM` float DEFAULT NULL,
  `RATIO_TENAGA_P_SEKOLAH` float DEFAULT NULL,
  `TENAGA_PT` float DEFAULT NULL,
  `TENAGA_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM3` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_3`
--

INSERT INTO `uplm_3` (`ID_UPLM3`, `TGL_INPUT`, `RATIO_TENAGA_P_UMUM`, `RATIO_TENAGA_P_SEKOLAH`, `TENAGA_PT`, `TENAGA_P_KHUSUS`, `HASIL_UPLM3`) VALUES
(1, '2024-01-26 07:14:17', 0.000127654, 0.0147705, 30, 0, 0.00357185),
(2, '2024-01-26 07:53:16', 0.000127654, 0.0160679, 30, 0, 0.003608),
(3, '2024-01-29 03:25:50', 0.000127654, 0.0160679, 30, 0, 0.003608);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_4`
--

CREATE TABLE `uplm_4` (
  `ID_UPLM4` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_KUNJUNGAN_P_UMUM` float DEFAULT NULL,
  `RATIO_KUNJUNGAN_P_SEKOLAH` float DEFAULT NULL,
  `KUNJUNGAN_PT` float DEFAULT NULL,
  `KUNJUNGAN_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM4` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_4`
--

INSERT INTO `uplm_4` (`ID_UPLM4`, `TGL_INPUT`, `RATIO_KUNJUNGAN_P_UMUM`, `RATIO_KUNJUNGAN_P_SEKOLAH`, `KUNJUNGAN_PT`, `KUNJUNGAN_P_KHUSUS`, `HASIL_UPLM4`) VALUES
(1, '2024-01-26 02:58:02', 0.0000755654, 0.0207343, 145, 0, 0.00686189),
(2, '2024-01-26 07:19:24', 0.0000829018, 0.0207343, 145, 0, 0.00686556),
(3, '2024-01-26 07:55:05', 0.0000829018, 0.0224903, 145, 0, 0.00613739),
(4, '2024-01-29 03:27:07', 0.0000829018, 0.0224903, 145, 0, 0.00613739),
(5, '2024-01-29 05:55:31', 0.0000829018, 0.0224903, 145, 0, 0.00613739);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_5`
--

CREATE TABLE `uplm_5` (
  `ID_UPLM5` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_P_STANDAR_UMUM` float DEFAULT NULL,
  `RATIO_P_STANDAR_SEKOLAH` float DEFAULT NULL,
  `STANDAR_PT` float DEFAULT NULL,
  `STANDAR_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM5` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_5`
--

INSERT INTO `uplm_5` (`ID_UPLM5`, `TGL_INPUT`, `RATIO_P_STANDAR_UMUM`, `RATIO_P_STANDAR_SEKOLAH`, `STANDAR_PT`, `STANDAR_P_KHUSUS`, `HASIL_UPLM5`) VALUES
(1, '2024-01-26 07:20:53', 0.00689655, 0.333965, 0, 0, 0.0702412),
(2, '2024-01-26 07:56:14', 0.00689655, 0.333965, 0, 0, 0.0702412),
(3, '2024-01-29 03:28:21', 1, 0.333965, 0, 0, 0.566793);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_6`
--

CREATE TABLE `uplm_6` (
  `ID_UPLM6` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_KETERLIBATAN_P_UMUM` float DEFAULT NULL,
  `RATIO_KETERLIBATAN_P_SEKOLAH` float DEFAULT NULL,
  `KETERLIBATAN_PT` float DEFAULT NULL,
  `KETERLIBATAN_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM6` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_6`
--

INSERT INTO `uplm_6` (`ID_UPLM6`, `TGL_INPUT`, `RATIO_KETERLIBATAN_P_UMUM`, `RATIO_KETERLIBATAN_P_SEKOLAH`, `KETERLIBATAN_PT`, `KETERLIBATAN_P_KHUSUS`, `HASIL_UPLM6`) VALUES
(1, '2024-01-26 07:58:08', 0.00445102, 0.0242117, 157, 0, 0.00709089),
(2, '2024-01-29 03:11:11', 0.0219852, 0.105373, 6756, 0.0737609, 0.702042),
(3, '2024-01-29 03:31:15', 0.00445102, 0.0242198, 157, 0, 0.00709251),
(4, '2024-01-29 03:33:06', 0.00445102, 0.49124, 157, 0, 0.102204);

-- --------------------------------------------------------

--
-- Table structure for table `uplm_7`
--

CREATE TABLE `uplm_7` (
  `ID_UPLM7` int(11) NOT NULL,
  `TGL_INPUT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RATIO_ANGGOTA_P_UMUM` float DEFAULT NULL,
  `RATIO_ANGGOTA_P_SEKOLAH` float DEFAULT NULL,
  `ANGGOTA_PT` float DEFAULT NULL,
  `ANGGOTA_P_KHUSUS` float DEFAULT NULL,
  `HASIL_UPLM7` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uplm_7`
--

INSERT INTO `uplm_7` (`ID_UPLM7`, `TGL_INPUT`, `RATIO_ANGGOTA_P_UMUM`, `RATIO_ANGGOTA_P_SEKOLAH`, `ANGGOTA_PT`, `ANGGOTA_P_KHUSUS`, `HASIL_UPLM7`) VALUES
(1, '2024-01-26 07:29:24', 0.00791529, 1.55169, 15518, 0, 0.600817),
(2, '2024-01-26 08:00:04', 0.00791529, 1.68145, 15518, 0, 0.511254),
(3, '2024-01-26 08:08:22', 0.00791529, 1.68145, 15518, 0, 0.511254),
(4, '2024-01-26 08:18:41', 0.00799526, 1.68145, 15518, 0, 0.511294),
(5, '2024-01-26 08:20:04', 700.62, 111.875, 41414, 0.00615584, 372.744),
(6, '2024-01-29 03:34:30', 0.00186272, 1.68145, 15518, 0, 0.508228),
(7, '2024-01-29 03:41:08', 0.00799526, 1.68145, 15518, 0, 0.511294);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iplm`
--
ALTER TABLE `iplm`
  ADD PRIMARY KEY (`ID_IPLM`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_UPLM1`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_UPLM2`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_UPLM3`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_UPLM4`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_UPLM5`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_UPLM6`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_UPLM7`);

--
-- Indexes for table `uplm_1`
--
ALTER TABLE `uplm_1`
  ADD PRIMARY KEY (`ID_UPLM1`);

--
-- Indexes for table `uplm_2`
--
ALTER TABLE `uplm_2`
  ADD PRIMARY KEY (`ID_IPLM2`);

--
-- Indexes for table `uplm_3`
--
ALTER TABLE `uplm_3`
  ADD PRIMARY KEY (`ID_UPLM3`);

--
-- Indexes for table `uplm_4`
--
ALTER TABLE `uplm_4`
  ADD PRIMARY KEY (`ID_UPLM4`);

--
-- Indexes for table `uplm_5`
--
ALTER TABLE `uplm_5`
  ADD PRIMARY KEY (`ID_UPLM5`);

--
-- Indexes for table `uplm_6`
--
ALTER TABLE `uplm_6`
  ADD PRIMARY KEY (`ID_UPLM6`);

--
-- Indexes for table `uplm_7`
--
ALTER TABLE `uplm_7`
  ADD PRIMARY KEY (`ID_UPLM7`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iplm`
--
ALTER TABLE `iplm`
  MODIFY `ID_IPLM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uplm_1`
--
ALTER TABLE `uplm_1`
  MODIFY `ID_UPLM1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uplm_2`
--
ALTER TABLE `uplm_2`
  MODIFY `ID_IPLM2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uplm_3`
--
ALTER TABLE `uplm_3`
  MODIFY `ID_UPLM3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uplm_4`
--
ALTER TABLE `uplm_4`
  MODIFY `ID_UPLM4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uplm_5`
--
ALTER TABLE `uplm_5`
  MODIFY `ID_UPLM5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uplm_6`
--
ALTER TABLE `uplm_6`
  MODIFY `ID_UPLM6` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uplm_7`
--
ALTER TABLE `uplm_7`
  MODIFY `ID_UPLM7` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

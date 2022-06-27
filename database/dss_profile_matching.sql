-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 07:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss_profile_matching`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_pelamar`
--

CREATE TABLE `master_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `nama_pelamar` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pelamar`
--

INSERT INTO `master_pelamar` (`id_pelamar`, `nama_pelamar`, `no_hp`, `email`) VALUES
(1, 'lpg001', '081212678712', 'lpg001@gmail.com'),
(2, 'lpg002', '081212678712', 'lpg002@gmail.com'),
(3, 'lpg003', '081212678712', 'lpg003@gmail.com'),
(4, 'lpg004', '081212678712', 'lpg004@gmail.com'),
(5, 'lpg005', '081212678712', 'lpg005@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `diubah_oleh` int(11) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id_user`, `username`, `nama`, `password`, `level`, `dibuat_oleh`, `tgl_dibuat`, `diubah_oleh`, `tgl_diubah`) VALUES
(1, 'HRD', 'Thalia', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '2020-08-25 22:05:05', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pm_aspek`
--

CREATE TABLE `pm_aspek` (
  `id_aspek` tinyint(3) UNSIGNED NOT NULL,
  `aspek` varchar(100) NOT NULL,
  `prosentase` float NOT NULL,
  `bobot_core` float NOT NULL,
  `bobot_secondary` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_aspek`
--

INSERT INTO `pm_aspek` (`id_aspek`, `aspek`, `prosentase`, `bobot_core`, `bobot_secondary`) VALUES
(1, 'Kecerdasan', 50, 60, 40),
(2, 'Sikap Kerja', 25, 60, 40),
(3, 'Perilaku', 25, 60, 40);

-- --------------------------------------------------------

--
-- Table structure for table `pm_bobot`
--

CREATE TABLE `pm_bobot` (
  `selisih` tinyint(3) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_bobot`
--

INSERT INTO `pm_bobot` (`selisih`, `bobot`, `keterangan`) VALUES
(0, 5, 'Tidak ada selisih (kompetensi sesuai dgn yg dibutuhkan)'),
(1, 4.5, 'Kompetensi individu kelebihan 1 tingkat'),
(-1, 4, 'Kompetensi individu kekurangan 1 tingkat'),
(2, 3.5, 'Kompetensi individu kelebihan 2 tingkat'),
(-2, 3, 'Kompetensi individu kekurangan 2 tingkat'),
(3, 2.5, 'Kompetensi individu  kelebihan 3 tingkat'),
(-3, 2, 'Kompetensi individu  kekurangan 3 tingkat'),
(4, 1.5, 'Kompetensi individu kelebihan 4 tingkat'),
(-4, 1, 'Kompetensi individu kekurangan 4 tingkat');

-- --------------------------------------------------------

--
-- Table structure for table `pm_faktor`
--

CREATE TABLE `pm_faktor` (
  `id_faktor` tinyint(3) UNSIGNED NOT NULL,
  `id_aspek` tinyint(3) UNSIGNED NOT NULL,
  `faktor` varchar(30) NOT NULL,
  `target` tinyint(3) NOT NULL,
  `type` set('core','secondary') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_faktor`
--

INSERT INTO `pm_faktor` (`id_faktor`, `id_aspek`, `faktor`, `target`, `type`) VALUES
(1, 1, 'Kecerdasan', 4, 'core'),
(2, 1, 'Verbalisasi Ide', 3, 'secondary'),
(3, 1, 'Sistematika Berfikir', 4, 'core'),
(4, 1, 'Kemampuan Penalaran', 4, 'core'),
(5, 1, 'Konsentrasi', 3, 'core'),
(6, 1, 'Logika', 4, 'core'),
(7, 1, 'Fleksibilitas Berfikit', 4, 'secondary'),
(8, 1, 'Imajinasi Kreatif', 5, 'secondary'),
(9, 1, 'Antisipasi', 3, 'secondary'),
(10, 1, 'Potensi Kecerdasan', 4, 'secondary'),
(11, 2, 'Energi Psikis', 3, 'secondary'),
(12, 2, 'Ketelitian dan Tanggung Jawab', 4, 'core'),
(13, 2, 'Kehati hatian', 2, 'core'),
(14, 2, 'Pengendalian Perasaan', 3, 'secondary'),
(15, 2, 'Dorongan Prestasi', 3, 'core'),
(16, 2, 'Vitalitas Perencanaan', 5, 'secondary'),
(17, 3, 'Kekuasaan', 3, 'secondary'),
(18, 3, 'Pengaruh', 3, 'secondary'),
(19, 3, 'Keteguhan Hati', 4, 'core'),
(20, 3, 'Pemenuhan', 5, 'core');

-- --------------------------------------------------------

--
-- Table structure for table `pm_ranking`
--

CREATE TABLE `pm_ranking` (
  `id_pelamar` int(11) NOT NULL,
  `nilai_akhir` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_ranking`
--

INSERT INTO `pm_ranking` (`id_pelamar`, `nilai_akhir`) VALUES
(8, '1.84'),
(9, '4.03'),
(1, '4.24'),
(2, '4.33'),
(3, '4.22'),
(4, '4.13'),
(5, '4.03');

-- --------------------------------------------------------

--
-- Table structure for table `pm_sample`
--

CREATE TABLE `pm_sample` (
  `id_sample` int(11) UNSIGNED NOT NULL,
  `id_pelamar` tinyint(3) UNSIGNED NOT NULL,
  `id_faktor` tinyint(3) UNSIGNED NOT NULL,
  `value` tinyint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_sample`
--

INSERT INTO `pm_sample` (`id_sample`, `id_pelamar`, `id_faktor`, `value`) VALUES
(632, 4, 14, 3),
(622, 2, 16, 3),
(621, 2, 15, 4),
(631, 4, 13, 3),
(630, 4, 12, 3),
(629, 4, 11, 2),
(628, 3, 16, 4),
(627, 3, 15, 3),
(626, 3, 14, 2),
(620, 2, 14, 3),
(625, 3, 13, 4),
(624, 3, 12, 4),
(623, 3, 11, 3),
(610, 5, 10, 3),
(609, 5, 9, 3),
(608, 5, 8, 3),
(619, 2, 13, 4),
(607, 5, 7, 2),
(618, 2, 12, 4),
(606, 5, 6, 2),
(605, 5, 5, 4),
(604, 5, 4, 4),
(603, 5, 3, 3),
(617, 2, 11, 4),
(602, 5, 2, 3),
(601, 5, 1, 3),
(600, 4, 10, 3),
(599, 4, 9, 3),
(598, 4, 8, 4),
(597, 4, 7, 4),
(596, 4, 6, 3),
(595, 4, 5, 4),
(616, 1, 16, 3),
(594, 4, 4, 3),
(593, 4, 3, 3),
(592, 4, 2, 3),
(615, 1, 15, 3),
(591, 4, 1, 2),
(590, 3, 10, 3),
(589, 3, 9, 3),
(588, 3, 8, 3),
(587, 3, 7, 2),
(586, 3, 6, 4),
(585, 3, 5, 3),
(614, 1, 14, 4),
(584, 3, 4, 2),
(583, 3, 3, 4),
(613, 1, 13, 5),
(582, 3, 2, 4),
(581, 3, 1, 3),
(580, 2, 10, 3),
(579, 2, 9, 3),
(578, 2, 8, 3),
(577, 2, 7, 5),
(576, 2, 6, 3),
(575, 2, 5, 4),
(574, 2, 4, 3),
(612, 1, 12, 4),
(573, 2, 3, 4),
(572, 2, 2, 4),
(571, 2, 1, 4),
(611, 1, 11, 3),
(570, 1, 10, 5),
(569, 1, 9, 4),
(568, 1, 8, 4),
(567, 1, 7, 3),
(566, 1, 6, 3),
(565, 1, 5, 3),
(564, 1, 4, 4),
(563, 1, 3, 5),
(562, 1, 2, 4),
(561, 1, 1, 3),
(633, 4, 15, 4),
(634, 4, 16, 3),
(635, 5, 11, 3),
(636, 5, 12, 3),
(637, 5, 13, 3),
(638, 5, 14, 4),
(639, 5, 15, 4),
(640, 5, 16, 2),
(641, 1, 17, 4),
(642, 1, 18, 2),
(643, 1, 19, 3),
(644, 1, 20, 3),
(645, 2, 17, 2),
(646, 2, 18, 3),
(647, 2, 19, 4),
(648, 2, 20, 3),
(649, 3, 17, 4),
(650, 3, 18, 3),
(651, 3, 19, 3),
(652, 3, 20, 2),
(653, 4, 17, 2),
(654, 4, 18, 4),
(655, 4, 19, 4),
(656, 4, 20, 2),
(657, 5, 17, 3),
(658, 5, 18, 4),
(659, 5, 19, 2),
(660, 5, 20, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_pelamar`
--
ALTER TABLE `master_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pm_aspek`
--
ALTER TABLE `pm_aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indexes for table `pm_bobot`
--
ALTER TABLE `pm_bobot`
  ADD PRIMARY KEY (`selisih`);

--
-- Indexes for table `pm_faktor`
--
ALTER TABLE `pm_faktor`
  ADD PRIMARY KEY (`id_faktor`);

--
-- Indexes for table `pm_sample`
--
ALTER TABLE `pm_sample`
  ADD PRIMARY KEY (`id_sample`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_pelamar`
--
ALTER TABLE `master_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pm_aspek`
--
ALTER TABLE `pm_aspek`
  MODIFY `id_aspek` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pm_faktor`
--
ALTER TABLE `pm_faktor`
  MODIFY `id_faktor` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pm_sample`
--
ALTER TABLE `pm_sample`
  MODIFY `id_sample` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

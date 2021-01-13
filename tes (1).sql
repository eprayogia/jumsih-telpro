-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 09.15
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `tanggal_input` varchar(50) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `area` varchar(6) NOT NULL,
  `fmbm` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `periode` varchar(12) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_data`, `tanggal_input`, `bulan`, `area`, `fmbm`, `lokasi`, `uraian`, `periode`, `foto`) VALUES
(15, '23 December 2020 - 4:48 am', 'December 2020', 'AREA1', 'FM ACEH', 'Lobby', 'Pel', '1', '1293735263_IMG_20200929_132254-min.jpg'),
(17, '07 January 2021 - 8:02 am', 'January 2021', 'AREA1', 'FM ACEH', 'A', 'A', '1', '1099957494_78257905_471557763542487_8452390063936897024_o.jpg'),
(18, '07 January 2021 - 8:03 am', 'January 2021', 'AREA1', 'FM ACEH', 'B', 'B', '2', '824461197_006f15a6a283df48c1cafcc18130170a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'user1', '1aab511329d928b342ee850feec24aee', 'FM ACEH', 'user1@telpro.co.id', 2),
(2, 'user2', '1aab511329d928b342ee850feec24aee', 'FM SUMUT BARAT', 'user1@telpro.co.id', 2),
(3, 'user3', '1aab511329d928b342ee850feec24aee', 'FM SUMUT TIMUR', 'user1@telpro.co.id', 2),
(4, 'user4', '1aab511329d928b342ee850feec24aee', 'FM SUMBAR', 'user1@telpro.co.id', 2),
(5, 'user5', '1aab511329d928b342ee850feec24aee', 'FM RIDAR', 'user1@telpro.co.id', 2),
(6, 'user6', '1aab511329d928b342ee850feec24aee', 'FM RIKEP', 'user1@telpro.co.id', 2),
(7, 'user7', '1aab511329d928b342ee850feec24aee', 'FM JAMBI', 'user1@telpro.co.id', 2),
(8, 'user8', '1aab511329d928b342ee850feec24aee', 'FM SUMSEL & BABEL', 'user1@telpro.co.id', 2),
(9, 'user9', '1aab511329d928b342ee850feec24aee', 'FM LAMPUNG & BENGKULU', 'user1@telpro.co.id', 2),
(10, 'user10', '1aab511329d928b342ee850feec24aee', 'BM GMP MEDAN', 'user1@telpro.co.id', 2),
(11, 'user11', '1aab511329d928b342ee850feec24aee', 'BM TTC MEDAN', 'user1@telpro.co.id', 2),
(12, 'user12', '1aab511329d928b342ee850feec24aee', 'BM TTC PEMATANG SIANTAR', 'user1@telpro.co.id', 2),
(13, 'user13', '1aab511329d928b342ee850feec24aee', 'BM GMP PEKANBARU', 'user1@telpro.co.id', 2),
(14, 'user14', '1aab511329d928b342ee850feec24aee', 'BM TTC PEKANBARU', 'user1@telpro.co.id', 2),
(15, 'user15', '1aab511329d928b342ee850feec24aee', 'BM TTC BATAM', 'user1@telpro.co.id', 2),
(16, 'user16', '1aab511329d928b342ee850feec24aee', 'BM TTC PALEMBANG', 'user1@telpro.co.id', 2),
(17, 'user17', '1aab511329d928b342ee850feec24aee', 'BM TTC BANDAR LAMPUNG', 'user1@telpro.co.id', 2),
(18, 'user18', '1aab511329d928b342ee850feec24aee', 'BM TTC KENANGA', 'user1@telpro.co.id', 2),
(19, 'user19', '1aab511329d928b342ee850feec24aee', 'FM JAKPUS & MM', 'user1@telpro.co.id', 3),
(20, 'user20', '1aab511329d928b342ee850feec24aee', 'FM JAKBAR & JAKUT', 'user1@telpro.co.id', 3),
(21, 'user21', '1aab511329d928b342ee850feec24aee', 'FM JAKSEL & BOGOR', 'user1@telpro.co.id', 3),
(22, 'user22', '1aab511329d928b342ee850feec24aee', 'FM JAKTIM & BEKASI', 'user1@telpro.co.id', 3),
(23, 'user23', '1aab511329d928b342ee850feec24aee', 'FM JAKARTA TANGERANG & BANTEN', 'user1@telpro.co.id', 3),
(24, 'user24', '1aab511329d928b342ee850feec24aee', 'BM MENARA MULTIMEDIA', 'user1@telpro.co.id', 3),
(25, 'user25', '1aab511329d928b342ee850feec24aee', 'BM TTC BUARAN', 'user1@telpro.co.id', 3),
(26, 'user26', '1aab511329d928b342ee850feec24aee', 'BM METRASAT BOGOR', 'user1@telpro.co.id', 3),
(27, 'user27', '1aab511329d928b342ee850feec24aee', 'BM TTC SIMATUPANG', 'user1@telpro.co.id', 3),
(28, 'user28', '1aab511329d928b342ee850feec24aee', 'BM TTC BSD & MERUYA', 'user1@telpro.co.id', 3),
(29, 'user29', '1aab511329d928b342ee850feec24aee', 'FM BANDUNG', 'user1@telpro.co.id', 4),
(30, 'user30', '1aab511329d928b342ee850feec24aee', 'FM CIREBON', 'user1@telpro.co.id', 4),
(31, 'user31', '1aab511329d928b342ee850feec24aee', 'FM SUKABUMI', 'user1@telpro.co.id', 4),
(32, 'user32', '1aab511329d928b342ee850feec24aee', 'FM TASIKMALAYA', 'user1@telpro.co.id', 4),
(33, 'user33', '1aab511329d928b342ee850feec24aee', 'FM KAWASAN CORPU', 'user1@telpro.co.id', 4),
(34, 'user34', '1aab511329d928b342ee850feec24aee', 'BM RUSUNAWA TU', 'user1@telpro.co.id', 4),
(35, 'user35', '1aab511329d928b342ee850feec24aee', 'BM AMMEERRA', 'user1@telpro.co.id', 4),
(36, 'user36', '1aab511329d928b342ee850feec24aee', 'BM GMP BUAH BATU', 'user1@telpro.co.id', 4),
(37, 'user37', '1aab511329d928b342ee850feec24aee', 'BM GMP BANDUNG', 'user1@telpro.co.id', 4),
(38, 'user38', '1aab511329d928b342ee850feec24aee', 'FM SEMARANG', 'user1@telpro.co.id', 5),
(39, 'user39', '1aab511329d928b342ee850feec24aee', 'FM SOLO', 'user1@telpro.co.id', 5),
(40, 'user40', '1aab511329d928b342ee850feec24aee', 'FM PEKALONGAN & PURWOKERTO', 'user1@telpro.co.id', 5),
(41, 'user41', '1aab511329d928b342ee850feec24aee', 'FM YOGYAKARTA', 'user1@telpro.co.id', 5),
(42, 'user42', '1aab511329d928b342ee850feec24aee', 'BM TELKOMSEL PAHLAWAN', 'user1@telpro.co.id', 5),
(43, 'user43', '1aab511329d928b342ee850feec24aee', 'BM TTC SEMARANG', 'user1@telpro.co.id', 5),
(44, 'user44', '1aab511329d928b342ee850feec24aee', 'BM TTC SOLO', 'user1@telpro.co.id', 5),
(45, 'user45', '1aab511329d928b342ee850feec24aee', 'FM SURABAYA INNER', 'user1@telpro.co.id', 6),
(46, 'user46', '1aab511329d928b342ee850feec24aee', 'FM SURABAYA OUTER', 'user1@telpro.co.id', 6),
(47, 'user47', '1aab511329d928b342ee850feec24aee', 'FM JATIM BARAT', 'user1@telpro.co.id', 6),
(48, 'user48', '1aab511329d928b342ee850feec24aee', 'FM JATIM TIMUR', 'user1@telpro.co.id', 6),
(49, 'user49', '1aab511329d928b342ee850feec24aee', 'FM BALI', 'user1@telpro.co.id', 6),
(50, 'user50', '1aab511329d928b342ee850feec24aee', 'FM NUSRA', 'user1@telpro.co.id', 6),
(51, 'user51', '1aab511329d928b342ee850feec24aee', 'BM SIGMA GICC', 'user1@telpro.co.id', 6),
(52, 'user52', '1aab511329d928b342ee850feec24aee', 'BM TTC JEMBER', 'user1@telpro.co.id', 6),
(53, 'user53', '1aab511329d928b342ee850feec24aee', 'BM TTC DENPASAR', 'user1@telpro.co.id', 6),
(54, 'user54', '1aab511329d928b342ee850feec24aee', 'BM TELKOMSEL SHIWA', 'user1@telpro.co.id', 6),
(55, 'user55', '1aab511329d928b342ee850feec24aee', 'FM BALIKPAPAN', 'user1@telpro.co.id', 7),
(56, 'user56', '1aab511329d928b342ee850feec24aee', 'FM KALBAR', 'user1@telpro.co.id', 7),
(57, 'user57', '1aab511329d928b342ee850feec24aee', 'FM KALSEL', 'user1@telpro.co.id', 7),
(58, 'user58', '1aab511329d928b342ee850feec24aee', 'FM KALTIM', 'user1@telpro.co.id', 7),
(59, 'user59', '1aab511329d928b342ee850feec24aee', 'BM TTC BALIKPAPAN', 'user1@telpro.co.id', 7),
(60, 'user60', '1aab511329d928b342ee850feec24aee', 'BM TTC BANJAR BARU', 'user1@telpro.co.id', 7),
(61, 'user61', '1aab511329d928b342ee850feec24aee', 'FM SULSEL', 'user1@telpro.co.id', 8),
(62, 'user62', '1aab511329d928b342ee850feec24aee', 'FM SULTRA', 'user1@telpro.co.id', 8),
(63, 'user63', '1aab511329d928b342ee850feec24aee', 'FM SULUT & MALUT', 'user1@telpro.co.id', 8),
(64, 'user64', '1aab511329d928b342ee850feec24aee', 'FM MALUKU', 'user1@telpro.co.id', 8),
(65, 'user65', '1aab511329d928b342ee850feec24aee', 'FM PAPUA', 'user1@telpro.co.id', 8),
(66, 'user66', '1aab511329d928b342ee850feec24aee', 'FM PAPUA BARAT', 'user1@telpro.co.id', 8),
(67, 'user67', '1aab511329d928b342ee850feec24aee', 'BM TTC MAKASSAR 1', 'user1@telpro.co.id', 8),
(68, 'user68', '1aab511329d928b342ee850feec24aee', 'BM TTC MAKASSAR 2', 'user1@telpro.co.id', 8),
(69, 'user69', '1aab511329d928b342ee850feec24aee', 'BM TELKOMSEL BARUGA', 'user1@telpro.co.id', 8),
(70, 'user70', '1aab511329d928b342ee850feec24aee', 'BM TTC TIMIKA', 'user1@telpro.co.id', 8),
(71, 'user71', '1aab511329d928b342ee850feec24aee', 'BM TELKOMSEL KOTI', 'user1@telpro.co.id', 8),
(72, 'user72', '1aab511329d928b342ee850feec24aee', 'BM TTC JAYAPURA', 'user1@telpro.co.id', 8),
(73, 'pusat', '1aab511329d928b342ee850feec24aee', 'PUSAT', 'nboc@telpro.co.id', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

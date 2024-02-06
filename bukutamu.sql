-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2024 pada 04.20
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtamu`
--

CREATE TABLE `tbtamu` (
  `No` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbtamu`
--

INSERT INTO `tbtamu` (`No`, `nama`, `email`, `pesan`) VALUES
(2, 'tiwi', 'aha@gmail.com', '123'),
(3, 'rahmi', 'rahmi@gmail.com', '123'),
(4, 'tiwi', 'aha@gmail.com', '26526'),
(5, 'bb', 'rahmi@gmail.com', '123456'),
(13, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbtamu`
--
ALTER TABLE `tbtamu`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbtamu`
--
ALTER TABLE `tbtamu`
  MODIFY `No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

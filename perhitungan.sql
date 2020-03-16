-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 08.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perhitungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah`
--

CREATE TABLE `jumlah` (
  `id` int(10) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jumlah`
--

INSERT INTO `jumlah` (`id`, `a`, `b`, `c`, `ket`) VALUES
(27, 2, 3, 5, 'D'),
(28, 4, 3, 7, 'C'),
(29, 0, 0, 0, 'E'),
(30, 0, 0, 0, 'E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlahruntun`
--

CREATE TABLE `jumlahruntun` (
  `id` int(10) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jumlahruntun`
--

INSERT INTO `jumlahruntun` (`id`, `a`, `b`, `c`, `ket`) VALUES
(50, 0, 0, 0, 'E'),
(51, 0, 0, 0, 'E'),
(52, 0, 0, 0, 'E'),
(53, 0, 0, 0, 'E'),
(54, 0, 0, 0, 'E'),
(55, 0, 0, 0, 'E'),
(56, 0, 0, 0, 'E'),
(57, 0, 0, 0, 'E'),
(58, 0, 0, 0, 'E'),
(59, 0, 0, 0, 'E'),
(60, 0, 0, 0, 'E');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jumlah`
--
ALTER TABLE `jumlah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jumlahruntun`
--
ALTER TABLE `jumlahruntun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jumlah`
--
ALTER TABLE `jumlah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `jumlahruntun`
--
ALTER TABLE `jumlahruntun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

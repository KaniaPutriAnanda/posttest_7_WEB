-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2022 pada 08.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `psw`) VALUES
(1, 'kpananda77@gmail.com', 'biblu', '$2y$10$D3y/0DDA4IUi2NvNHj8ycO63EXNXhS5BCuRsdALyCJj4lLj1esX86'),
(2, 'kania@gmail.com', 'assa', '$2y$10$PdiBi2Yc9mShW84ovlnihuamRLQ4attke9K2h/NIOBqVTovyucieK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `join2`
--

CREATE TABLE `join2` (
  `id` int(20) NOT NULL,
  `awal` varchar(20) NOT NULL,
  `akhir` varchar(20) NOT NULL,
  `birth` date NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `tglDaftar` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `join2`
--

INSERT INTO `join2` (`id`, `awal`, `akhir`, `birth`, `nohp`, `category`, `tglDaftar`, `gambar`) VALUES
(8, 'Ryujin ', 'Shin', '2000-06-27', '085248621059', 'Bronze', '27-10-2022', 'Shin.jpg'),
(9, 'Irene', 'Kim', '1992-05-06', '085248621159', 'Platinum', '27-10-2022', 'Kim.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kacans`
--

CREATE TABLE `kacans` (
  `id` int(50) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `versi` varchar(500) DEFAULT NULL,
  `kuantitas` int(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kacans`
--

INSERT INTO `kacans` (`id`, `nama`, `nohp`, `kategori`, `versi`, `kuantitas`, `harga`, `tanggal`, `alamat`, `pembayaran`, `gambar`) VALUES
(17, 'Kania Putri Ananda', '085248621059', 'pc', 'JENNIE (BLACKPINK) - 1st Mini Album[SOLO] Rp687.500', 2, 50000, '2022-10-31', 'Suwandi', 'banking', ''),
(19, 'Shin Ryujin', '087745631243', 'ls', 'ENHYPEN - Official Lightstick', 50, 500000, '2022-11-26', 'Suwandi', 'banking', ''),
(20, 'Yeji Kim', '087745631243', 'ls', 'ENHYPEN - Official Lightstick', 50, 500000, '2022-11-26', 'Suwandi', 'banking', ''),
(21, 'Kang Seulgi', '08376452772', 'pc', 'TREASURE - Official Lightstick', 4, 932980, '2022-11-01', 'Gg. Kampus Biru', 'paypal', ''),
(22, 'Asu Medinsu', '6457963858708', 'pc', 'JENNIE (BLACKPINK) - 1st Mini Album[SOLO] Rp687.500', 10, 50674679, '2022-11-01', 'Bengkuring', 'banking', ''),
(23, 'Jake Sim', '568348349297', 'album', 'JENNIE (BLACKPINK) - 1st Mini Album[SOLO] Rp687.500', 4, 700000, '2022-11-01', 'Jl. M. Yamin', 'banking', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `join2`
--
ALTER TABLE `join2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kacans`
--
ALTER TABLE `kacans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `join2`
--
ALTER TABLE `join2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kacans`
--
ALTER TABLE `kacans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

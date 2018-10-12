-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.01
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal_6`
--

CREATE TABLE `jurnal_6` (
  `nim` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal_6`
--

INSERT INTO `jurnal_6` (`nim`, `nama`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(12, 'sa', 'D3MI-41-03', 'Perempuan', 'Menulis,Menari,', 'FIT', 'kra'),
(678, 'putri', 'D3MI-41-02', 'Perempuan', 'ArrayMenulis,Menari,', 'FIT', 'jogja'),
(2147483647, 'Aan YAS', 'D3MI-41-02', 'Perempuan', 'Membaca,Menyanyi,', 'FIT', 'jogja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurnal_6`
--
ALTER TABLE `jurnal_6`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

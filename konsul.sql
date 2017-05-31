-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2017 pada 18.08
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konsul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `tlp`, `email`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Putra Laksana', '08573567235', 'putralaksana@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsn`
--

CREATE TABLE `dsn` (
  `nip` varchar(25) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `matkul` text NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `point` int(20) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'dosen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dsn`
--

INSERT INTO `dsn` (`nip`, `nama`, `matkul`, `tlp`, `email`, `fb`, `password`, `point`, `role`) VALUES
('111', 'Budi Santoso', 'Pemrograman Jaringan', '085735765876', 'budi@gmail.com', 'budisantoso', 'admin', 9, 'dosen'),
('123', 'Fajrul Iqba Mubaroq', 'Robotika', '0899833892', 'Fajrulpekok@gmail.com', 'fajrul87', '202cb962ac59075b964b07152d234b70', 0, 'dosen'),
('1234', 'Drs. Fajrul M.kom', 'IPA', '085791611247', 'fajrul@gmai.com', 'afrizal', '202cb962ac59075b964b07152d234b70', 2, 'dosen'),
('999', 'Ulum', 'WEB', '085745654876', 'ulum@gmail.com', 'ulum', 'ce28eed1511f631af6b2a7bb0a85d636', 0, 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `idKomen` int(70) NOT NULL,
  `idPengajuan` int(70) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nim` varchar(25) DEFAULT NULL,
  `komentar` text NOT NULL,
  `waktuKomen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`idKomen`, `idPengajuan`, `nip`, `nim`, `komentar`, `waktuKomen`) VALUES
(1, 3, '111', NULL, 'bisa mencari waktu lain, karena masih ada rapat waktu itu...', '2016-12-21 16:07:01'),
(2, 3, NULL, '222', 'coba ya', '2016-12-21 15:55:30'),
(4, 3, '111', NULL, 'gimana?', '2016-12-21 16:55:52'),
(5, 3, NULL, '222', 'bisa pak', '2016-12-21 17:01:24'),
(6, 3, NULL, '222', 'jam 8 siang pak?', '2016-12-21 17:06:01'),
(7, 3, NULL, '222', 'bisakah pak?', '2016-12-21 17:12:27'),
(8, 3, '111', NULL, 'ok sip...', '2016-12-21 17:12:58'),
(9, 3, '111', NULL, 'kita bertemu jam 8', '2016-12-21 17:17:05'),
(10, 3, '111', NULL, 'dilab multimedia', '2016-12-21 17:18:20'),
(11, 3, NULL, '222', 'iya  pak , terima kasih', '2016-12-21 17:18:48'),
(12, 3, '111', NULL, 'cek', '2017-05-11 13:17:29'),
(13, 8, NULL, '3', 'tes', '2017-05-16 14:22:16'),
(14, 10, NULL, '3', 'Tes', '2017-05-18 14:45:20'),
(15, 10, NULL, '3', 'kapan konsul?', '2017-05-18 14:45:41'),
(16, 11, '1234', NULL, 'elek skripsi ne', '2017-05-31 14:20:50'),
(17, 11, '1234', NULL, 'diperbaiki', '2017-05-31 14:21:09'),
(18, 11, NULL, '1465018', 'ok pak', '2017-05-31 14:22:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(9) NOT NULL DEFAULT 'mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `angkatan`, `tlp`, `email`, `fb`, `password`, `role`) VALUES
('14650018', 'afrizal setyo', '2014', '08997665', 'afrizalwibisono87@gmail.com', 'afrizal', '202cb962ac59075b964b07152d234b70', 'mahasiswa'),
('14650019', 'Afrizal Setyo ', '2016', '08793832929', 'afrizalwibisono681@gmail.com', 'afrizal87', '12', '1223'),
('1465018', 'Afrizal Setyo W', '2014', '085791611247', 'afrizalwibisono681@gmail.com', 'afrizal', '202cb962ac59075b964b07152d234b70', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idPengajuan` int(70) NOT NULL,
  `nim` int(20) NOT NULL,
  `nip` int(25) NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `jdl` text NOT NULL,
  `ket` text NOT NULL,
  `waktuPengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL COMMENT '0=tolak, 1=terima, null=proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`idPengajuan`, `nim`, `nip`, `tgl`, `jdl`, `ket`, `waktuPengajuan`, `status`) VALUES
(3, 222, 111, '2016-11-28 00:11:00 AM', 'PKL', 'ingin berkonsultasi tentang PKL yang pas dan minta rekomendasi untuk PKL', '2017-05-11 13:36:46', 0),
(4, 222, 111, '2016-12-25 19:12:00 PM', 'Skripsi', 'konsultasi skripsi bab 4', '2016-12-20 16:29:59', 1),
(5, 222, 111, '2017-01-02 16:01:00 PM', 'Konsultasi MatKul AI', 'konsultasi logika fuzzy', '2016-12-20 17:30:24', 1),
(6, 222, 111, '2016-12-12 22:12:00 PM', 'Penelitian', 'ingin konsultasi tentang penelitian game', '2017-05-11 13:18:11', 1),
(7, 222, 111, '10-12-2015', 'KKKKKK', 'skksk', '2017-05-12 03:00:56', NULL),
(8, 222, 111, ' 2017-12-30 24:59:00 PM', 'TesTesTes', 'mamamam', '2017-05-12 04:12:38', NULL),
(9, 3, 111, '10-12-2015', 'KKKKKK', 'Malang', '2017-05-16 14:22:44', NULL),
(10, 3, 999, 'SDSDS', 'Hsdsd', 'dsdsd', '2017-05-17 02:48:09', NULL),
(11, 1465018, 1234, '2017-05-10 00:05:00 AM', 'Proposal Skripsi', '    Robot rusak                      \r\n                        ', '2017-05-31 14:22:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dsn`
--
ALTER TABLE `dsn`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idKomen`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idPengajuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idKomen` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `idPengajuan` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 02.38
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `nip` varchar(11) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `nip`, `mapel`, `no_hp`, `gender`, `alamat`) VALUES
(1, 'Agastia Maulana Akbar', '00001', 'Bahasa Indonesia', '0812345678', 'Pria', 'Jalan Kutilang'),
(2, 'I Made Eko Satria Wiguna', '00002', 'Matematika', '081803634659', 'Pria', 'BTN Mandalika No.19'),
(3, 'Ranti Sukma Hayati', '00003', 'Biologi', '08123332312', 'Wanita', 'Jl. Merpati No. 2'),
(6, 'Mutiara Faza', '00006', 'Kimia', '10923991234', 'Wanita', 'Jl. Ahmad Yani No. 13'),
(8, 'Prayogi', '00004', 'Bahasa Inggris', '081234567890', 'Pria', 'Jl. Sarinah No. 12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `kelas`, `gender`, `no_hp`, `alamat`) VALUES
(1, 'I Made Eko Satria Wiguna', 'XII.MIPA 6', 'Pria', '081803634659', 'BTN Mandalika No.19'),
(2, 'Rabiatul Adawiyah', 'XII.MIPA 6', 'Wanita', '081803987221', 'Jl. Grenjeng No. 12'),
(4, 'Prayogi Thabrani', 'XII.MIPA 6', 'Pria', '081803634722', 'Jl. Sarinah No. 12'),
(5, 'Ranti Sukma Hayati', 'XII.MIPA 6', 'Wanita', '081803634733', 'Jl. Mantang No.24'),
(6, 'Mutiara Faza', 'XII.MIPA 6', 'Wanita', '081803634213', 'Jl. Puyung No. 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

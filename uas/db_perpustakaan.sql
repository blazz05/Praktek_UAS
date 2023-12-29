-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2023 pada 15.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `thn_terbit` date NOT NULL,
  `idjenis` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `pengarang` varchar(100) NOT NULL,
  `no_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penerbit`, `thn_terbit`, `idjenis`, `foto`, `pengarang`, `no_buku`) VALUES
(7, 'Koala Kumal', 'gagas media', '0015-12-01', 9, 'buku.jpeg', 'Aditya Dika', 3),
(8, ' Dragon Ball', 'Elex Media Komputindo ', '1984-07-05', 11, 'komik.jpeg', 'Akira Toriyama', 6),
(10, 'laskar pelangi', 'Bentang Pustaka', '2005-10-05', 9, 'laskar-pelangi.jpeg', 'Hendra Hiarata', 2),
(11, 'Kamus arab indonesia', ' PT. Mahmud Yunus Wa Dzurriyyah', '2018-07-03', 12, 'arab.png', '	Mahmud Yunus', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(9, 'Novel'),
(10, 'Majalah'),
(11, 'Komik'),
(12, 'Kamus'),
(13, 'Manga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `no_buku` int(11) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `gender` char(10) NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `idbuku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `no_buku`, `nama_peminjam`, `umur`, `gender`, `tgl_pengambilan`, `tgl_pengembalian`, `keterangan`, `idbuku`) VALUES
(3, 6, 'Aldi Budiansah', 19, 'Laki-Laki', '2023-12-21', '2023-12-25', 'ada', 8),
(4, 2, 'Budi', 17, 'Laki-Laki', '2023-12-27', '2023-12-28', 'ada', 10),
(6, 3, 'Eno', 17, 'Perempuan', '2023-10-03', '2023-11-02', 'ada', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

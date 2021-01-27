-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 19.20
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keluar`
--

CREATE TABLE `tbl_keluar` (
  `kode_input` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `kode` int(4) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok_awal` int(10) NOT NULL,
  `jumlah_masuk` int(10) NOT NULL,
  `jumlah_bs` int(10) NOT NULL,
  `jumlah_keluar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_keluar`
--

INSERT INTO `tbl_keluar` (`kode_input`, `tanggal`, `kode`, `nama_produk`, `harga`, `stok_awal`, `jumlah_masuk`, `jumlah_bs`, `jumlah_keluar`) VALUES
(21001, '2021-01-20', 2001, 'Mafin', 5000, 20, 21, 2, 25),
(21002, '2021-01-20', 2002, 'Pie Coklat', 4000, 20, 10, 0, 5),
(21003, '2021-01-20', 2003, 'Roti Kering', 3000, 10, 10, 1, 6),
(21004, '2021-01-20', 2004, 'Paha Ayam', 4000, 30, 20, 0, 42);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kode` int(4) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode`, `nama_produk`, `harga`) VALUES
(2001, 'Mafin', 5000),
(2002, 'Pie Coklat', 4000),
(2003, 'Roti Kering', 3000),
(2004, 'Paha Ayam', 4000),
(2005, 'Donat Crispy', 4000),
(2006, 'Donan Isi', 4000),
(2007, 'Dinat Bolong', 4000),
(2008, 'Bolu Pandan', 25000),
(2009, 'Bolu Pisang', 30000),
(2010, 'Brownis Gulung', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akhir`
--

CREATE TABLE `tb_akhir` (
  `kode_input` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `kode` int(10) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok_awal` int(10) NOT NULL,
  `jumlah_masuk` int(10) NOT NULL,
  `jumlah_bs` int(10) NOT NULL,
  `jumlah_keluar` int(10) NOT NULL,
  `stok_akhir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akhir`
--

INSERT INTO `tb_akhir` (`kode_input`, `tanggal`, `kode`, `nama_produk`, `harga`, `stok_awal`, `jumlah_masuk`, `jumlah_bs`, `jumlah_keluar`, `stok_akhir`) VALUES
(21001, '2021-01-20', 2001, 'Mafin', 5000, 20, 21, 2, 25, 14),
(21002, '2021-01-20', 2002, 'Pie Coklat', 4000, 20, 10, 0, 5, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('zakia', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Karyawan Zakia Cake & Bakery');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_keluar`
--
ALTER TABLE `tbl_keluar`
  ADD PRIMARY KEY (`kode_input`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tb_akhir`
--
ALTER TABLE `tb_akhir`
  ADD PRIMARY KEY (`kode_input`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_keluar`
--
ALTER TABLE `tbl_keluar`
  MODIFY `kode_input` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21005;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `kode` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2011;

--
-- AUTO_INCREMENT untuk tabel `tb_akhir`
--
ALTER TABLE `tb_akhir`
  MODIFY `kode_input` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2021 pada 06.03
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup_games`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `id_metode_bayar` int(11) NOT NULL,
  `metode_bayar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar_metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metode_bayar`
--

INSERT INTO `metode_bayar` (`id_metode_bayar`, `metode_bayar`, `keterangan`, `gambar_metode`) VALUES
(6, 'E-Wallet', 'Barcode (Dana, Ovo, LinkAja, Gopay, Shopeepay, Dll)', 'c7395094-c93e-46af-aa1d-760ca0e0e387.jpg'),
(7, 'Bank BCA', 'Media pembayaran melalui bank BCA hanya atas nama Dwi saputra [ 3120 7171 37 ]', 'bca-targetkan-rp350-miliar-transaksi-di-bca-expo-semarang-rIB-thumb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_bayar`
--

CREATE TABLE `status_bayar` (
  `id_faktur` int(11) NOT NULL,
  `status_bayar` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_bayar`
--

INSERT INTO `status_bayar` (`id_faktur`, `status_bayar`, `bukti_pembayaran`) VALUES
(5, 1, '31.png'),
(6, 1, 'Penguins.jpg'),
(7, 1, '23.PNG'),
(8, 1, 'Guitar_&_a061026f-c4bc-4c11-b513-f41f5a608a1a.jpg'),
(9, 1, '23.PNG'),
(10, 1, '23.PNG'),
(11, 0, ''),
(12, 1, 'Koala.jpg'),
(13, 1, '2.jpg'),
(14, 1, '2.jpg'),
(15, 1, '3.jpg'),
(16, 1, 'Desert.jpg'),
(17, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diamond`
--

CREATE TABLE `tb_diamond` (
  `id_diamond` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_upselling` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `up_selling` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_diamond`
--

INSERT INTO `tb_diamond` (`id_diamond`, `id_game`, `harga`, `harga_upselling`, `jumlah`, `up_selling`) VALUES
(1, 4, 100000, 0, 500, ''),
(2, 5, 10000, 5000, 200, 'Gratis 100 Diamond'),
(4, 5, 25000, 20000, 100, 'Gratis 100 Diamond'),
(5, 7, 70000, 0, 1000000, 'Gratis 100 Diamond'),
(6, 6, 50000, 0, 200, 'Gratis 100 Diamond'),
(7, 5, 10000, 0, 100, ''),
(8, 8, 8000, 0, 50, ''),
(9, 8, 10000, 0, 70, ''),
(10, 8, 16000, 0, 100, ''),
(11, 8, 20000, 0, 140, ''),
(12, 8, 30000, 0, 210, ''),
(13, 8, 50000, 0, 355, ''),
(14, 8, 100000, 0, 720, ''),
(15, 8, 50000, 65000, 355, 'Dapatkan bonus 140 Diamonds dengan pembelian harga berikut'),
(16, 8, 100000, 105000, 720, 'Dengan harga 105.000 dapatkan spesial bonus 720+100 diamonds'),
(17, 8, 20000, 27000, 140, 'Pembelian 140 diamonds dengan harga berikut, dapatkan bonus 140 diamonds khusus hari ini'),
(18, 10, 10000, 0, 100, ''),
(19, 10, 15000, 0, 200, ''),
(20, 10, 25000, 0, 300, ''),
(21, 10, 30000, 0, 400, ''),
(22, 10, 35000, 0, 500, ''),
(23, 10, 50000, 0, 700, ''),
(24, 11, 10000, 0, 50, ''),
(25, 11, 30000, 0, 150, ''),
(26, 11, 50000, 0, 250, ''),
(27, 11, 100000, 0, 500, ''),
(28, 11, 250000, 0, 1250, ''),
(29, 11, 500000, 0, 2500, ''),
(30, 12, 20000, 0, 100, ''),
(31, 12, 28000, 0, 150, ''),
(32, 12, 40000, 0, 250, ''),
(33, 12, 60000, 0, 300, ''),
(34, 13, 15000, 0, 50, ''),
(35, 13, 25000, 0, 100, ''),
(36, 14, 16000, 0, 50, ''),
(37, 14, 75000, 0, 250, ''),
(39, 11, 250000, 350000, 100, 'LEBIH MURAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faktur`
--

CREATE TABLE `tb_faktur` (
  `id_faktur` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `metode_bayar` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_diamond` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_diamond` int(11) NOT NULL,
  `status_notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_faktur`
--

INSERT INTO `tb_faktur` (`id_faktur`, `tgl_pembelian`, `id_user`, `metode_bayar`, `id_game`, `id_akun`, `id_diamond`, `harga`, `jumlah`, `status_diamond`, `status_notif`) VALUES
(5, '2021-03-28', 3, 1, 5, 0, 4, 25000, 100, 1, 0),
(6, '2021-03-31', 3, 1, 5, 25245, 4, 25000, 100, 1, 0),
(7, '2021-04-16', 3, 4, 5, 40754305, 4, 25000, 100, 1, 0),
(8, '2021-04-19', 3, 5, 7, 46563, 5, 70000, 1000000, 1, 0),
(9, '2021-04-24', 3, 1, 5, 0, 2, 10000, 200, 1, 0),
(12, '2021-07-27', 5, 4, 5, 28011998, 2, 10000, 200, 1, 0),
(13, '2021-07-28', 5, 6, 8, 66777088, 8, 8000, 50, 1, 0),
(14, '2021-07-28', 5, 7, 8, 66777088, 17, 20000, 140, 1, 0),
(15, '2021-07-28', 5, 6, 8, 66777088, 10, 16000, 100, 1, 0),
(16, '2021-08-09', 5, 6, 8, 1234567, 8, 8000, 50, 1, 0),
(17, '2021-08-24', 5, 6, 11, 1234, 39, 250000, 100, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_game`
--

CREATE TABLE `tb_game` (
  `id_game` int(11) NOT NULL,
  `nm_game` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_game`
--

INSERT INTO `tb_game` (`id_game`, `nm_game`, `keterangan`, `gambar`) VALUES
(8, 'Free Fire', 'Mobile Garena', 'ff.jpg'),
(10, 'Higgs Domino', 'Gaple QiuQiu Poker Game Online ', 'domino.png'),
(11, 'PUBG Mobile', ' Battle Royale  (Indonesia)', 'pubg.jpg'),
(12, 'Mobile Legends', 'Mobile Legends: Bang Bang', 'mobile-legends-bang-bang.jpg'),
(13, 'Hago Mobile', 'Game online penghasil pulsa', 'Hago-Header.jpg'),
(14, 'Need For Speed', 'Permainan Balap', 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl_buat` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `role_id`, `nama`, `email`, `password`, `no_hp`, `tgl_buat`, `gambar`) VALUES
(1, 1, 'Admin', 'Admin@gmail.com', '12345', '082211114449', 28072021, ''),
(5, 2, 'Dwi', 'dwi01@gmail.com', '123', '082388399998', 1627406763, 'user.png'),
(6, 2, 'Dika', 'dika01@gmail.com', '123', '082386960902', 1627408935, 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_metode_bayar`);

--
-- Indeks untuk tabel `status_bayar`
--
ALTER TABLE `status_bayar`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indeks untuk tabel `tb_diamond`
--
ALTER TABLE `tb_diamond`
  ADD PRIMARY KEY (`id_diamond`);

--
-- Indeks untuk tabel `tb_faktur`
--
ALTER TABLE `tb_faktur`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indeks untuk tabel `tb_game`
--
ALTER TABLE `tb_game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_diamond`
--
ALTER TABLE `tb_diamond`
  MODIFY `id_diamond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tb_faktur`
--
ALTER TABLE `tb_faktur`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_game`
--
ALTER TABLE `tb_game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

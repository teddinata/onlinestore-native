-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2020 pada 05.56
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Daster Piyama'),
(6, 'Daster Pajamas Korea'),
(7, 'One Set Tie Cardy'),
(8, 'One Set Tie Dye'),
(9, 'Piyama Kerah V'),
(10, 'Piyama Kimono Celana Panjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_merek`
--

CREATE TABLE `tb_merek` (
  `id_merek` int(11) NOT NULL,
  `nama_merek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_merek`
--

INSERT INTO `tb_merek` (`id_merek`, `nama_merek`) VALUES
(6, 'Pajamas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ongkir`
--

CREATE TABLE `tb_ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ongkir`
--

INSERT INTO `tb_ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Sragen', 10000),
(2, 'Solo', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(2, 'admin@gmail.com', 'admin', 'admin', '081326510748', 'Ini alamat baru saya'),
(7, 'teddi@gmail.com', 'teddi123', 'teddi', '08912312312', 'jl. bawean'),
(8, 'jul@gmail.com', '12345678', 'Julian', '0850959595985', 'Jl. Semongko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(2, 5, 'Weist Bag', 'bri', 10123, '2018-12-20', '20181220214702ea9e9d98665f34475a01802c35658be1.jpg'),
(3, 7, 'Weist Bag', 'bri', 133456, '2018-12-20', '20181220223341Lenovo-IP320-14ISK-7WID-Black.jpg'),
(4, 1, 'Weist Bag', 'bri', 10246, '2018-12-20', '20181220232637'),
(5, 1, 'Weist Bag', 'bri', 123, '2018-12-20', '20181220232807Lenovo-IP320-14ISK-7WID-Black.jpg'),
(6, 13, 'Testing', 'bri', 10123, '2018-12-21', '20181221082520Tutorial Membuat Toko Online PHP dan MySQLI - 20 daftar menjadi pelanggan - YouTube_2.'),
(7, 17, 'Pono Jono', 'Mandiri', 1312312, '2020-10-09', '20201009210956dpfilelist.PNG'),
(8, 21, '', '', 0, '2020-11-20', '20201120195213');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`, `provinsi`, `kabupaten`, `kecamatan`, `keterangan`) VALUES
(1, 2, 1, '2018-12-18', 10246, '', 0, '', 'barang dikirim', 'ABC123', '', '', '', ''),
(2, 2, 1, '2018-12-19', 10246, '', 0, '', 'pending', '', '', '', '', ''),
(3, 2, 1, '2018-12-20', 10123, '', 0, '', 'pending', '', '', '', '', ''),
(4, 2, 1, '2018-12-20', 10123, 'Sragen', 10000, '', 'pending', '', '', '', '', ''),
(5, 2, 1, '2018-12-20', 10123, 'Sragen', 10000, 'Bulak RT 08/03', 'barang dikirim', 'ABC123', '', '', '', ''),
(6, 2, 1, '2018-12-20', 133456, 'Sragen', 10000, 'guis', 'pending', '', '', '', '', ''),
(7, 2, 1, '2018-12-20', 133456, 'Sragen', 10000, 'Bulak RT 08', 'barang dikirim', 'ABC123', '', '', '', ''),
(8, 2, 1, '2018-12-20', 133579, '', 10000, 'Bulak', 'pending', '', '', '', '', ''),
(9, 2, 1, '2018-12-20', 133456, '', 10000, 'Bulak', 'pending', '', '', '', '', ''),
(10, 2, 1, '2018-12-20', 133456, 'Sragen', 10000, 'Bulak', 'pending', '', '', '', '', ''),
(11, 2, 1, '2018-12-20', 10000, 'Sragen', 10000, 'asdas', 'pending', '', '', '', '', ''),
(12, 2, 1, '2018-12-21', 256912, 'Sragen', 10000, 'bulak 57281', 'pending', '', '', '', '', ''),
(13, 2, 1, '2018-12-21', 10123, 'Sragen', 10000, 'Bulak RT 08/03', 'barang dikirim', 'ABC123', '', '', '', ''),
(14, 7, 0, '2020-10-06', 10000000, '', 0, '', 'pending', '', '', '', '', ''),
(15, 7, 0, '2020-10-09', 10000000, '', 0, '', 'pending', '', '', '', '', ''),
(16, 7, 0, '2020-10-09', 10000000, '', 0, 'Jl. Jalan', 'pending', '', '', '', '', ''),
(17, 7, 0, '2020-10-09', 10000000, '', 0, 'Jl. Ok', 'sudah kirim pembayaran', '', '', '', '', ''),
(18, 7, 0, '2020-10-10', 10000000, '', 0, 'jl', 'pending', '', 'Jawa Tengah', 'Kebumen', 'Buayan', 'ya'),
(19, 7, 0, '2020-10-12', 10000000, '', 0, '', 'pending', '', '', '', '', ''),
(20, 8, 0, '2020-11-18', 10000000, '', 0, 'Jl. Semongko', 'pending', '', 'Jawa Tengah', 'Kebumen', 'Buayan', 'Jumbo'),
(21, 8, 0, '2020-11-20', 30000000, '', 0, '', '', '', '', '', '', ''),
(22, 8, 0, '2020-11-20', 10000000, '', 0, '', 'pending', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian_produk`
--

CREATE TABLE `tb_pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian_produk`
--

INSERT INTO `tb_pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 15, 1, 'Weist Bag', 123, 123, 123, 123),
(2, 1, 16, 1, 'Asus A455LD', 123, 123, 123, 123),
(3, 2, 15, 1, 'Weist Bag', 123, 123, 123, 123),
(4, 2, 16, 1, 'Asus A455LD', 123, 123, 123, 123),
(5, 3, 16, 1, 'Asus A455LD', 123, 123, 123, 123),
(6, 4, 15, 1, 'Weist Bag', 123, 123, 123, 123),
(7, 5, 15, 1, 'Weist Bag', 123, 123, 123, 123),
(8, 6, 19, 1, 'Testing', 123456, 10, 10, 123456),
(9, 7, 19, 1, 'Testing', 123456, 10, 10, 123456),
(10, 8, 15, 1, 'Weist Bag', 123, 123, 123, 123),
(11, 8, 19, 1, 'Testing', 123456, 10, 10, 123456),
(12, 9, 19, 1, 'Testing', 123456, 10, 10, 123456),
(13, 10, 19, 1, 'Testing', 123456, 10, 10, 123456),
(14, 12, 19, 2, 'Testing', 123456, 10, 20, 246912),
(15, 13, 15, 1, 'Weist Bag', 123, 123, 123, 123),
(16, 14, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(17, 15, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(18, 16, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(19, 17, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(20, 0, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(21, 18, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(22, 19, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(23, 20, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000),
(24, 21, 21, 3, 'Spring Bed Latex Super Grand', 10000000, 80000, 240000, 30000000),
(25, 22, 21, 1, 'Spring Bed Latex Super Grand', 10000000, 80000, 80000, 10000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_merek`, `id_kategori`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok`) VALUES
(25, 6, 5, 'Daster Piyama tipe 1', 1000, 49, 'IMG-20201130-WA0161.jpg', 'Ini daster', 15),
(26, 6, 5, 'Daster Piyama tipe 2', 1000, 45, 'IMG-20201130-WA0162.jpg', '', 15),
(27, 6, 5, 'Daster Piyama tipe 3', 1000, 45, 'IMG-20201130-WA0163.jpg', '', 14),
(28, 6, 5, 'Daster Piyama tipe 4', 1000, 45, 'IMG-20201130-WA0167.jpg', '', 15),
(29, 6, 5, 'Daster Piyama tipe 5', 1000, 45, 'IMG-20201130-WA0173.jpg', '', 12),
(30, 6, 5, 'Daster Piyama tipe 6', 1000, 45, 'IMG-20201201-WA0096.jpg', '', 123),
(31, 6, 6, 'Daster Pajamas Korea', 2000, 45, 'IMG-20201130-WA0137.jpg', '', 123),
(32, 6, 6, 'Daster Pajamas Korea 2', 3000, 50, 'IMG-20201130-WA0138.jpg', '', 11),
(33, 6, 6, 'Daster Pajamas Korea 3', 3000, 50, 'IMG-20201130-WA0139.jpg', '', 48),
(34, 6, 6, 'Daster Pajamas Korea 4', 3000, 47, 'IMG-20201130-WA0140.jpg', '', 123),
(35, 6, 6, 'Daster Pajamas Korea 5', 3000, 2311, 'IMG-20201130-WA0146.jpg', '', 213),
(36, 6, 6, 'Daster Pajamas Korea 6', 12000, 45, 'IMG-20201130-WA0147.jpg', '', 12),
(37, 6, 7, 'One Set Tie Cardy 1', 12000, 454, 'IMG-20201127-WA0129.jpg', '', 123),
(38, 6, 7, 'One Set Tie Cardy 2', 12000, 123, 'IMG-20201127-WA0136.jpg', '', 123),
(39, 6, 7, 'One Set Tie Cardy 3', 12000, 123, 'IMG-20201127-WA0138.jpg', '', 123),
(40, 6, 7, 'One Set Tie Cardy 4', 12000, 123, 'IMG-20201127-WA0140.jpg', '', 123),
(41, 6, 7, 'One Set Tie Cardy 5', 12000, 117, 'IMG-20201127-WA0141.jpg', '', 123),
(42, 6, 8, 'One Set Tie Dye 1', 12000, 123, 'IMG-20201122-WA0072.jpg', '', 12),
(43, 6, 8, 'One Set Tie Dye 2', 12000, 213, 'IMG-20201122-WA0076.jpg', '', 12),
(44, 6, 8, 'One Set Tie Dye 3', 12000, 123, 'IMG-20201122-WA0082.jpg', '', 123),
(45, 6, 8, 'One Set Tie Dye 4', 12000, 123, 'IMG-20201125-WA0159.jpg', '', 12),
(46, 6, 8, 'One Set Tie Dye 5', 12000, 123, 'IMG-20201125-WA0162.jpg', '', 12),
(47, 6, 9, 'Piyama Kerah V Tipe 1', 2000, 121, 'IMG-20201130-WA0265.jpg', '', 12),
(48, 6, 9, 'Piyama Kerah V Tipe 2', 2000, 123, 'IMG-20201130-WA0266.jpg', '', 123),
(49, 6, 9, 'Piyama Kerah V Tipe 3', 21211, 8, 'IMG-20201130-WA0267.jpg', '', 123),
(50, 6, 9, 'Piyama Kerah V Tipe 4', 12000, 123, 'IMG-20201130-WA0268.jpg', '', 123),
(51, 6, 9, 'Piyama Kerah V Tipe 5', 12000, 123, 'IMG-20201130-WA0271.jpg', '', 123),
(52, 6, 10, 'Kimono Tipe 1', 500000, 123, 'IMG-20201130-WA0235.jpg', '', 123),
(53, 6, 10, 'Kimono Tipe 2', 500000, 123, 'IMG-20201130-WA0236.jpg', '', 123),
(54, 6, 10, 'Kimono Tipe 3', 500000, 3213, 'IMG-20201130-WA0237.jpg', '', 123),
(55, 6, 10, 'Kimono Tipe 4', 500000, 123, 'IMG-20201130-WA0238.jpg', '', 123),
(56, 6, 10, 'Kimono Tipe 5', 500000, 123, 'IMG-20201130-WA0243.jpg', '', 123);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_merek`
--
ALTER TABLE `tb_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_merek`
--
ALTER TABLE `tb_merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2020 pada 12.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelelangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `id_transaksi`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `jenisBarang` enum('hp','laptop') NOT NULL,
  `deskripsi` text NOT NULL,
  `statusBarang` enum('diterima','ditolak','pending') NOT NULL,
  `bukaHarga` int(11) NOT NULL,
  `kelipatanHarga` int(11) NOT NULL,
  `beliSekarang` int(11) NOT NULL,
  `hargaSekarang` int(11) NOT NULL,
  `waktuPelelangan` date DEFAULT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_penyedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `namaBarang`, `jenisBarang`, `deskripsi`, `statusBarang`, `bukaHarga`, `kelipatanHarga`, `beliSekarang`, `hargaSekarang`, `waktuPelelangan`, `gambar`, `id_penyedia`) VALUES
(5, 'laptop a', 'laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt vestibulum mauris vulputate pulvinar. Praesent non commodo neque. In vel auctor tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sit amet eros vel arcu faucibus pellentesque nec eget lectus. Sed dignissim sem quam, nec egestas purus elementum sollicitudin. Praesent placerat diam non tortor lacinia euismod. Sed vel nibh commodo, sodales nisl ac, tristique diam. Mauris molestie, massa sit amet fermentum maximus, ipsum nunc volutpat dui, in pellentesque nisi metus vel diam.', 'diterima', 2000000, 100000, 0, 200000, '2020-01-01', 'penyedialaptop_a.jpg', 1),
(6, 'hp b', 'hp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt vestibulum mauris vulputate pulvinar. Praesent non commodo neque. In vel auctor tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sit amet eros vel arcu faucibus pellentesque nec eget lectus. Sed dignissim sem quam, nec egestas purus elementum sollicitudin. Praesent placerat diam non tortor lacinia euismod. Sed vel nibh commodo, sodales nisl ac, tristique diam. Mauris molestie, massa sit amet fermentum maximus, ipsum nunc volutpat dui, in pellentesque nisi metus vel diam.', 'diterima', 500000, 20000, 0, 100000, '2019-11-28', 'penyediahp_b.jpg', 1),
(7, 'hp b', 'hp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'diterima', 2000000, 100000, 0, 0, '2019-12-03', 'penyediahp_b.jpg', 1),
(8, 'laptop apik', 'laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'diterima', 4000000, 200000, 0, 800000, '2019-12-03', 'edilaptop_apik.jpg', 13),
(9, 'hp apik', 'hp', 'Lorem ipsum dolor sit amet, sed et purus nulla fusce nonummy, neque suspendisse sem egestas, dui phasellus, libero vestibulum eget a pulvinar, quisque adipiscing. Ut velit aenean nulla donec ante, lectus suscipit praesent id maecenas, et eu diam dignissim sed elit vitae, sollicitudin consequat placerat nibh interdum, augue id ipsum morbi etiam. Et nulla nisl fermentum fames sed non, ut scelerisque vel malesuada ac consequat in, et sagittis luctus nec neque ut, diam ac magna dictum vestibulum arcu, porttitor elit urna turpis eros ante. Praesent vel metus dapibus ut consequat lectus, cras a tempus. Aut pellentesque vel, fusce dolor suspendisse eros senectus tortor. Rutrum porta lacus, lectus felis pretium porttitor, eget vitae quis, urna nec metus nulla at a gravida. Rutrum mattis quam explicabo purus, morbi eget, vestibulum vestibulum vestibulum tortor lectus, luctus tellus in elit nisl pede dis. Etiam velit. Similique cubilia platea pellentesque libero ornare, nulla cras semper ante cras mauris egestas, rutrum orci tortor nulla bibendum. Sollicitudin ante omnis.', 'diterima', 2000000, 100000, 0, 2500000, '2019-12-17', 'penyediahp_apik.jpg', 1),
(10, 'hp wawei', 'hp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel eros donec ac odio tempor. Varius sit amet mattis vulputate enim nulla aliquet. Molestie nunc non blandit massa enim nec dui nunc. Erat nam at lectus urna duis convallis convallis tellus id. Elementum facilisis leo vel fringilla. Pharetra sit amet aliquam id diam. Etiam non quam lacus suspendisse faucibus interdum posuere. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Enim ut sem viverra aliquet eget sit amet. Egestas integer eget aliquet nibh praesent tristique magna sit. Integer malesuada nunc vel risus commodo viverra. Massa enim nec dui nunc mattis enim ut tellus elementum. Nec feugiat in fermentum posuere urna nec tincidunt. Tristique risus nec feugiat in fermentum posuere urna nec tincidunt. Nisi est sit amet facilisis magna etiam tempor orci. Egestas tellus rutrum tellus pellentesque.', 'diterima', 1000000, 100000, 0, 1000000, '2019-12-04', 'tesphp_wawei.jpg', 2),
(11, 'laptop asoy', 'laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel eros donec ac odio tempor. Varius sit amet mattis vulputate enim nulla aliquet. Molestie nunc non blandit massa enim nec dui nunc. Erat nam at lectus urna duis convallis convallis tellus id. Elementum facilisis leo vel fringilla. Pharetra sit amet aliquam id diam. Etiam non quam lacus suspendisse faucibus interdum posuere. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Enim ut sem viverra aliquet eget sit amet. Egestas integer eget aliquet nibh praesent tristique magna sit. Integer malesuada nunc vel risus commodo viverra. Massa enim nec dui nunc mattis enim ut tellus elementum. Nec feugiat in fermentum posuere urna nec tincidunt. Tristique risus nec feugiat in fermentum posuere urna nec tincidunt. Nisi est sit amet facilisis magna etiam tempor orci. Egestas tellus rutrum tellus pellentesque.', 'diterima', 4000000, 200000, 0, 4000000, '2019-12-11', 'irfanhp_asoy.jpg', 15),
(12, 'laptop HAPE', 'laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel eros donec ac odio tempor. Varius sit amet mattis vulputate enim nulla aliquet. Molestie nunc non blandit massa enim nec dui nunc. Erat nam at lectus urna duis convallis convallis tellus id. Elementum facilisis leo vel fringilla. Pharetra sit amet aliquam id diam. Etiam non quam lacus suspendisse faucibus interdum posuere. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Enim ut sem viverra aliquet eget sit amet. Egestas integer eget aliquet nibh praesent tristique magna sit. Integer malesuada nunc vel risus commodo viverra. Massa enim nec dui nunc mattis enim ut tellus elementum. Nec feugiat in fermentum posuere urna nec tincidunt. Tristique risus nec feugiat in fermentum posuere urna nec tincidunt. Nisi est sit amet facilisis magna etiam tempor orci. Egestas tellus rutrum tellus pellentesque.', 'diterima', 900000, 100000, 0, 900000, '2019-12-05', 'irfanlaptop_HAPE.png', 15),
(13, 'ini verifikasi', 'laptop', 'barang rusak', 'ditolak', 5000000, 500000, 0, 5000000, '2019-12-06', 'penyediaini_verifikasi.jpg', 1),
(14, 'hp oviv', 'hp', 'hp oviv mulus no minus', 'diterima', 300000, 100000, 0, 300000, '2020-03-03', 'penyediahp_oviv.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ditawar`
--

CREATE TABLE `ditawar` (
  `id_tawar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_penawar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ditawar`
--

INSERT INTO `ditawar` (`id_tawar`, `id_barang`, `id_penawar`) VALUES
(1, 5, 1),
(5, 5, 1),
(2, 6, 1),
(3, 6, 1),
(4, 6, 1),
(7, 6, 1),
(6, 6, 3),
(11, 6, 4),
(8, 8, 1),
(9, 8, 1),
(12, 8, 1),
(10, 8, 3),
(13, 9, 1),
(14, 9, 1),
(15, 9, 1),
(16, 9, 1),
(17, 9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawar`
--

CREATE TABLE `penawar` (
  `id_penawar` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penawar`
--

INSERT INTO `penawar` (`id_penawar`, `username`, `email`, `password`, `status`) VALUES
(1, 'penawar', 'yujinkb77@gmail.com', 'e87ae387388d2351fd1890f5590443b0', '0'),
(2, 'te', 'd@s.c', '1aabac6d068eef6a7bad3fdf50a05cc8', ''),
(3, 'tes', 'edidwinugroho80@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780', ''),
(4, 'tesPenawar', 'tesPenawar@gmail', '28b662d883b6d76fd96e4ddc5e9ba780', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyedia_barang`
--

CREATE TABLE `penyedia_barang` (
  `id_penyedia` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyedia_barang`
--

INSERT INTO `penyedia_barang` (`id_penyedia`, `username`, `email`, `password`, `status`) VALUES
(1, 'penyedia', 'pen@p.co', '1907be021ac2ab668695ed339118b595', 0),
(2, 'tesp', 'tes@t.co', 'e6c2f934a35941a13fd3a0305085ae8a', 0),
(13, 'edi', 'edidwinugroho80@gmail.com', '8457dff5491b024de6b03e30b609f7e8', 0),
(14, 'ko', 'adzkar.fauzie02@gmail.com', '1aabac6d068eef6a7bad3fdf50a05cc8', 0),
(15, 'irfan', 'irfandw@k.co', '24b90bc48a67ac676228385a7c71a119', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `tb_barang` (`id_penyedia`) USING BTREE;

--
-- Indeks untuk tabel `ditawar`
--
ALTER TABLE `ditawar`
  ADD PRIMARY KEY (`id_tawar`),
  ADD KEY `id_barang` (`id_barang`,`id_penawar`),
  ADD KEY `id_penawar` (`id_penawar`);

--
-- Indeks untuk tabel `penawar`
--
ALTER TABLE `penawar`
  ADD PRIMARY KEY (`id_penawar`);

--
-- Indeks untuk tabel `penyedia_barang`
--
ALTER TABLE `penyedia_barang`
  ADD PRIMARY KEY (`id_penyedia`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ditawar`
--
ALTER TABLE `ditawar`
  MODIFY `id_tawar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penawar`
--
ALTER TABLE `penawar`
  MODIFY `id_penawar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penyedia_barang`
--
ALTER TABLE `penyedia_barang`
  MODIFY `id_penyedia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `rel_barang` FOREIGN KEY (`id_penyedia`) REFERENCES `penyedia_barang` (`id_penyedia`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ditawar`
--
ALTER TABLE `ditawar`
  ADD CONSTRAINT `ditawar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `ditawar_ibfk_2` FOREIGN KEY (`id_penawar`) REFERENCES `penawar` (`id_penawar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

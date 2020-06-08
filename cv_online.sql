-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2020 pada 21.53
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(191) NOT NULL,
  `password_repeat` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `password_repeat`) VALUES
(1, 'admin', '$2y$10$opiIs2Tqfy1V9IE7G6Y/cOFydNbx9.mvyUkA4vhMVSD0IfF7.n0Au', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buat_cv`
--

CREATE TABLE `buat_cv` (
  `id_buat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_template` int(11) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tahun_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `whatsapp` varchar(14) NOT NULL,
  `instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buat_cv`
--

INSERT INTO `buat_cv` (`id_buat`, `id_user`, `id_template`, `gambar`, `nama`, `tempat_lahir`, `tahun_lahir`, `jenis_kelamin`, `alamat`, `no_telpon`, `email`, `whatsapp`, `instagram`) VALUES
(1, 1, 1, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(2, 1, 1, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(3, 1, 1, '', '', '', '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendidikan`
--

CREATE TABLE `detail_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_buat` int(11) NOT NULL,
  `sd` varchar(50) NOT NULL,
  `dari_sd` date NOT NULL,
  `sampai_sd` date NOT NULL,
  `smp` varchar(50) NOT NULL,
  `dari_smp` date NOT NULL,
  `sampai_smp` date NOT NULL,
  `sma` varchar(50) NOT NULL,
  `dari_sma` date NOT NULL,
  `sampai_sma` date NOT NULL,
  `d3` varchar(191) DEFAULT NULL,
  `dari_d3` date DEFAULT NULL,
  `sampa_id3` date DEFAULT NULL,
  `s1` varchar(100) DEFAULT NULL,
  `dari_s1` date DEFAULT NULL,
  `sampai_s1` date DEFAULT NULL,
  `s2` varchar(100) DEFAULT NULL,
  `dari_s2` date DEFAULT NULL,
  `sampai_s2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_soal`
--

CREATE TABLE `detail_soal` (
  `id_detail` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(191) NOT NULL,
  `b` varchar(191) NOT NULL,
  `c` varchar(191) NOT NULL,
  `d` varchar(191) NOT NULL,
  `jawaban` varchar(191) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_download` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `tanggal_online` date NOT NULL,
  `hits` int(11) NOT NULL,
  `status_online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(191) NOT NULL,
  `jumlah_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `soal`, `jumlah_soal`) VALUES
(1, 'MS. Office', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_cv`
--

CREATE TABLE `template_cv` (
  `id_template` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` text NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `template_cv`
--

INSERT INTO `template_cv` (`id_template`, `deskripsi`, `thumbnail`, `gambar`, `tanggal_update`) VALUES
(2, '<p>test 1</p>', '', '5ebbfbce285c6.jpg', '2020-05-13'),
(3, '<p>test2</p>', '', '5ebbfbdb20f79.jpg', '2020-05-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(191) NOT NULL,
  `password_repeat` varchar(191) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `id_buat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `username`, `password`, `password_repeat`, `tanggal_daftar`, `id_buat`) VALUES
(1, 'gema fajar r', 'gemafajar09@gmail.com', 'gemafajar09', '$2y$10$BdWzKKJfkAAOjYjInZ0gGuYITEZPPGA1rkQL0BlnLW8izUdYbJkRi', 'fajar123', '2020-05-09', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `buat_cv`
--
ALTER TABLE `buat_cv`
  ADD PRIMARY KEY (`id_buat`);

--
-- Indeks untuk tabel `detail_pendidikan`
--
ALTER TABLE `detail_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `detail_soal`
--
ALTER TABLE `detail_soal`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `template_cv`
--
ALTER TABLE `template_cv`
  ADD PRIMARY KEY (`id_template`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_buat` (`id_buat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buat_cv`
--
ALTER TABLE `buat_cv`
  MODIFY `id_buat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pendidikan`
--
ALTER TABLE `detail_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_soal`
--
ALTER TABLE `detail_soal`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `template_cv`
--
ALTER TABLE `template_cv`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

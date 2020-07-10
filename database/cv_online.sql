-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Jul 2020 pada 15.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

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
-- Struktur dari tabel `balas_komentar`
--

CREATE TABLE `balas_komentar` (
  `id_balas` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_balasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `instagram` varchar(50) NOT NULL,
  `data_diri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buat_cv`
--

INSERT INTO `buat_cv` (`id_buat`, `id_user`, `id_template`, `gambar`, `nama`, `tempat_lahir`, `tahun_lahir`, `jenis_kelamin`, `alamat`, `no_telpon`, `email`, `whatsapp`, `instagram`, `data_diri`) VALUES
(3, 1, 1, 'default.jpg', 'gema fajar ramadhan', 'Padang', '2020-06-02', 'Laki-Laki', 'Jalan Raya lubuk minturun rt 1 rw 2', '082122855458', 'gemafajar09@gmail.com', '082122855458', '@gemafajarrrr', 'nama gema fajar ramdhan lahir di padang anak pertama dari empat bersaudara'),
(5, 1, 1, '', '', '', '0000-00-00', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendidikan`
--

CREATE TABLE `detail_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_buat` int(11) NOT NULL,
  `sd` varchar(50) NOT NULL,
  `dari_sd` varchar(5) NOT NULL,
  `sampai_sd` varchar(5) NOT NULL,
  `smp` varchar(50) NOT NULL,
  `dari_smp` varchar(5) NOT NULL,
  `sampai_smp` varchar(5) NOT NULL,
  `sma` varchar(50) NOT NULL,
  `dari_sma` varchar(5) NOT NULL,
  `sampai_sma` varchar(5) NOT NULL,
  `d3` varchar(191) DEFAULT NULL,
  `dari_d3` varchar(5) DEFAULT NULL,
  `sampai_d3` varchar(5) DEFAULT NULL,
  `s1` varchar(100) DEFAULT NULL,
  `dari_s1` varchar(5) DEFAULT NULL,
  `sampai_s1` varchar(5) DEFAULT NULL,
  `s2` varchar(100) DEFAULT NULL,
  `dari_s2` varchar(5) DEFAULT NULL,
  `sampai_s2` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pendidikan`
--

INSERT INTO `detail_pendidikan` (`id_pendidikan`, `id_buat`, `sd`, `dari_sd`, `sampai_sd`, `smp`, `dari_smp`, `sampai_smp`, `sma`, `dari_sma`, `sampai_sma`, `d3`, `dari_d3`, `sampai_d3`, `s1`, `dari_s1`, `sampai_s1`, `s2`, `dari_s2`, `sampai_s2`) VALUES
(1, 3, 'SD 22', '2002', '2008', 'smp 16', '2008', '2011', 'SMA 8', '2011', '2014', '', '', '', '', '', '', '', '', '');

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
  `jawaban_a` varchar(2) NOT NULL,
  `point_a` int(11) NOT NULL,
  `jawaban_b` varchar(2) NOT NULL,
  `point_b` int(11) NOT NULL,
  `jawaban_c` varchar(2) NOT NULL,
  `point_c` int(11) NOT NULL,
  `jawaban_d` varchar(2) NOT NULL,
  `point_d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_soal`
--

INSERT INTO `detail_soal` (`id_detail`, `id_soal`, `soal`, `a`, `b`, `c`, `d`, `jawaban_a`, `point_a`, `jawaban_b`, `point_b`, `jawaban_c`, `point_c`, `jawaban_d`, `point_d`) VALUES
(1, 1, 'Apa kegunaan word Microsoft Office 2010.…', 'Mengolah kata atau dokumen', 'Membuat aplikasi wab', ' Mengedit picture', 'Membuat vidio', 'a', 5, 'b', 2, 'c', 4, 'd', 3),
(2, 1, 'Berikut ini tidak termasuk menu dalan microsoft word 2010 adalah.…', 'Tools', 'Format', ' Favorites', 'Table', 'a', 4, 'b', 2, 'c', 5, 'd', 3),
(3, 1, 'Nama tempat untuk menyimpan pengelompokan beberapa file terutama yang sejenis, adalah…', 'Explorer', 'Folder', 'Drive', 'Dokumen', 'a', 2, 'b', 5, 'c', 4, 'd', 3),
(4, 1, 'Merupakan baris judul yang menunjukkan kerja aktif pada microsoft word 2010 disebut.…', 'Status Bar', 'Menu Bar', 'Work Area', 'Title Bar', 'a', 2, 'b', 3, 'c', 4, 'd', 5),
(5, 1, 'Menunjukan baris menu yang sedang aktif pada microsoft word 2010 disebut.…', 'Status Bar', 'Menu Bar', 'Work Area', 'Title Bar', 'a', 5, 'b', 3, 'c', 4, 'd', 2),
(6, 1, 'Digunakan untuk menggeser/menggulung layar keatas dan ke bawah pada microsoft word 2010 .…', 'Vertical Scoroll Lock', 'Horizontal Scoroll Lock', 'Hotkey / Shortcut', 'Ruler margin (Indent)', 'a', 5, 'b', 2, 'c', 3, 'd', 4),
(7, 1, 'Digunakan untuk menggeser layar kekiri dan kekanan pada microsoft word 2010…', 'Vertical Scoroll Lock', 'Horizontal Scoroll Lock', 'Hotkey / Shortcut', 'Ruler margin (Indent)', 'a', 2, 'b', 5, 'c', 4, 'd', 3),
(8, 1, 'Merupakan lembar kerja yang ada di microsoft word 2010 disebut..…', 'Status Bar', 'Title Bar', 'Menu Bar', 'Work Area', 'a', 2, 'b', 3, 'c', 4, 'd', 5),
(9, 1, 'Digunakan untuk mengatur posisi huruf pertama pada setiap awal paragraf didalam menu Ruler Margin (indent) disebut.…', 'Right Indent', 'Left Indent', 'Hanging Indent', 'First Line Indent', 'a', 2, 'b', 3, 'c', 5, 'd', 4),
(10, 1, 'Digunakan untuk mengatur posisi huruf setelah baris pertama pada suatu paragraf didalam menu Ruler Margin (indent) disebut..…', 'Right Indent', 'Left Indent', 'Hanging Indent', ' First Line Indent', 'a', 4, 'b', 5, 'c', 2, 'd', 3),
(11, 2, 'CorelDRAW adalah…', 'Aplikasi berhitung', 'Aplikasi editor grafik vektor', 'Aplikasi browser internet', ' Aplikasi membuat animasi flash', 'a', 2, 'b', 5, 'c', 3, 'd', 4),
(12, 2, 'Tombol pada keyboard yang digunakan untuk membuat grafik baru pada CorelDRAW adalah…', 'Ctrl+O', 'Ctrl+N', 'Ctrl+X', 'Ctrl+Z', 'a', 5, 'b', 2, 'c', 3, 'd', 4),
(13, 2, 'Cara mengexport gambar pada CorelDRAW adalah dengan…', 'File => Import', 'File => Save', 'File => Export', 'File => Print', 'a', 4, 'b', 3, 'c', 5, 'd', 2),
(14, 2, 'Rectangle Tool berfungsi untuk…', 'Membuat garis lurus', 'Membuat persegi atau persegi panjang', 'Membuat lingkaran atau elips', 'Membuat segitiga atau segibanyak', 'a', 3, 'b', 4, 'c', 5, 'd', 2),
(15, 2, 'Elips Tool berfungsi untuk…', 'Membuat persegi atau persegi panjang', 'Membuat segitiga atau segibanyak', ' Membuat gambar spiral', ' Membuat lingkaran atau elips', 'a', 4, 'b', 5, 'c', 3, 'd', 2),
(16, 2, 'Tombol pada keyboard yang digunakan untuk mengeksport gambar adalah menekan…', 'Ctrl+E', 'Ctrl+Z', 'Ctrl+R', 'Ctrl+N', 'a', 2, 'b', 4, 'c', 3, 'd', 5),
(17, 2, 'Tool yang digunakan untuk membentuk berbagai objek garis artistic adalah…', 'Artistic media Tool', ' Media Tool', 'Shape Tool', ' Pen Tool', 'a', 4, 'b', 2, 'c', 3, 'd', 5),
(18, 2, ' Dimension Tool adalah Tool yang berguna untuk…', 'Membuat garis artistic', ' Membuat kurva', 'Membuat tebel', 'Membentuk garis dimensi vertikal, horizontal, diagonal, dan sebagainya', 'a', 2, 'b', 4, 'c', 5, 'd', 3),
(19, 2, 'Tool yang digunakan untuk menarik, memindahkan objek adalah…', 'Pick Tool', 'Shape Tool', 'Envelope Tool', 'Berzier Tool', 'a', 4, 'b', 5, 'c', 2, 'd', 3),
(20, 2, 'Ctrl+Z adalah shortcut pada keyboard untuk…', 'Save grafik CorelDRAW', 'Membuka lembar baru', 'Mengulangi langkah sebelumnya', 'Membuat text', 'a', 4, 'b', 2, 'c', 5, 'd', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE `hobi` (
  `id` int(11) NOT NULL,
  `id_buat` int(11) NOT NULL,
  `hobi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hobi`
--

INSERT INTO `hobi` (`id`, `id_buat`, `hobi`) VALUES
(1, 3, 'fa fa-futbol-o'),
(2, 3, 'fa fa-camera-retro'),
(3, 3, 'fa fa-gamepad'),
(4, 3, 'fa fa-code'),
(5, 3, 'fa fa-plane'),
(6, 3, 'fa fa-headphones');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `id_buat` int(11) NOT NULL,
  `pengalaman` text NOT NULL,
  `tahun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `id_buat`, `pengalaman`, `tahun`) VALUES
(1, 3, 'Cv Chilipadi production', '2016'),
(2, 3, 'PT Gavatar', '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `deskripsi`) VALUES
(2, '5eddb324c442b.jpg', '<p>test 1</p>'),
(3, '5eddb330bc993.jpg', '<p>test 2</p>'),
(4, '5eddb33c35a69.jpg', '<p>test 3</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '::1', '2020-06-17', 1, '1592361214'),
(2, '::1', '2020-06-18', 1, '1592446752'),
(3, '192.168.100.21', '2020-06-19', 2, '1592533881'),
(4, '::1', '2020-06-25', 22, '1593095690'),
(5, '::1', '2020-06-28', 47, '1593361392'),
(6, '::1', '2020-06-29', 13, '1593421505'),
(7, '::1', '2020-06-30', 3, '1593531280'),
(8, '::1', '2020-07-01', 1, '1593571501'),
(9, '::1', '2020-07-06', 1, '1594013762'),
(10, '::1', '2020-07-07', 2, '1594124792'),
(11, '::1', '2020-07-08', 4, '1594195358'),
(12, '127.0.0.1', '2020-07-10', 1, '1594384955');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matrix`
--

CREATE TABLE `tb_matrix` (
  `id_matrix` int(11) NOT NULL,
  `id_buat` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `k5` int(11) NOT NULL,
  `k6` int(11) NOT NULL,
  `k7` int(11) NOT NULL,
  `k8` int(11) NOT NULL,
  `k9` int(11) NOT NULL,
  `k10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_matrix`
--

INSERT INTO `tb_matrix` (`id_matrix`, `id_buat`, `id_soal`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`) VALUES
(1, 3, 1, 2, 4, 5, 2, 2, 5, 3, 5, 4, 2),
(2, 3, 2, 3, 3, 2, 4, 3, 3, 3, 2, 5, 5);

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
(1, 'MS. Office', 10),
(2, 'corel draw', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_cv`
--

CREATE TABLE `template_cv` (
  `id_template` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `gambar` varchar(191) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `template_cv`
--

INSERT INTO `template_cv` (`id_template`, `deskripsi`, `thumbnail`, `gambar`, `tanggal_update`) VALUES
(1, '<p>test2</p>', '', '5ebbfbce285c6.jpg', '2020-05-13');

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
-- Indeks untuk tabel `balas_komentar`
--
ALTER TABLE `balas_komentar`
  ADD PRIMARY KEY (`id_balas`);

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
-- Indeks untuk tabel `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

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
-- Indeks untuk tabel `tb_matrix`
--
ALTER TABLE `tb_matrix`
  ADD PRIMARY KEY (`id_matrix`);

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
-- AUTO_INCREMENT untuk tabel `balas_komentar`
--
ALTER TABLE `balas_komentar`
  MODIFY `id_balas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buat_cv`
--
ALTER TABLE `buat_cv`
  MODIFY `id_buat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_pendidikan`
--
ALTER TABLE `detail_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_soal`
--
ALTER TABLE `detail_soal`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_matrix`
--
ALTER TABLE `tb_matrix`
  MODIFY `id_matrix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Jun 2020 pada 16.34
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
(1, 1, 1, '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(2, 1, 1, '', '', '', '0000-00-00', '', '', '', '', '', '', '');

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

--
-- Dumping data untuk tabel `detail_soal`
--

INSERT INTO `detail_soal` (`id_detail`, `id_soal`, `soal`, `a`, `b`, `c`, `d`, `jawaban`, `point`) VALUES
(1, 1, 'Apa kegunaan word Microsoft Office 2010.…', 'Mengolah kata atau dokumen', 'Membuat aplikasi wab', ' Mengedit picture', 'Membuat vidio', 'a', 10),
(2, 1, 'Berikut ini tidak termasuk menu dalan microsoft word 2010 adalah.…', 'Tools', 'Format', ' Favorites', 'Table', 'c', 10),
(3, 1, 'Nama tempat untuk menyimpan pengelompokan beberapa file terutama yang sejenis, adalah…', 'Explorer', 'Folder', 'Drive', 'Dokumen', 'b', 10),
(4, 1, 'Merupakan baris judul yang menunjukkan kerja aktif pada microsoft word 2010 disebut.…', 'Status Bar', 'Menu Bar', 'Work Area', 'Title Bar', 'd', 10),
(5, 1, 'Menunjukan baris menu yang sedang aktif pada microsoft word 2010 disebut.…', 'Status Bar', 'Menu Bar', 'Work Area', 'Title Bar', 'a', 10),
(6, 1, 'Digunakan untuk menggeser/menggulung layar keatas dan ke bawah pada microsoft word 2010 .…', 'Vertical Scoroll Lock', 'Horizontal Scoroll Lock', 'Hotkey / Shortcut', 'Ruler margin (Indent)', 'a', 10),
(7, 1, 'Digunakan untuk menggeser layar kekiri dan kekanan pada microsoft word 2010…', 'Vertical Scoroll Lock', 'Horizontal Scoroll Lock', 'Hotkey / Shortcut', 'Ruler margin (Indent)', 'b', 10),
(8, 1, 'Merupakan lembar kerja yang ada di microsoft word 2010 disebut..…', 'Status Bar', 'Title Bar', 'Menu Bar', 'Work Area', 'd', 10),
(9, 1, 'Digunakan untuk mengatur posisi huruf pertama pada setiap awal paragraf didalam menu Ruler Margin (indent) disebut.…', 'Right Indent', 'Left Indent', 'Hanging Indent', 'First Line Indent', 'd', 10),
(10, 1, 'Digunakan untuk mengatur posisi huruf setelah baris pertama pada suatu paragraf didalam menu Ruler Margin (indent) disebut..…', 'Right Indent', 'Left Indent', 'Hanging Indent', ' First Line Indent', 'c', 10),
(11, 2, 'CorelDRAW adalah…', 'Aplikasi berhitung', 'Aplikasi editor grafik vektor', 'Aplikasi browser internet', ' Aplikasi membuat animasi flash', 'b', 10),
(12, 2, 'Tombol pada keyboard yang digunakan untuk membuat grafik baru pada CorelDRAW adalah…', 'Ctrl+O', 'Ctrl+N', 'Ctrl+X', 'Ctrl+Z', 'b', 10),
(13, 2, 'Cara mengexport gambar pada CorelDRAW adalah dengan…', 'File => Import', 'File => Save', 'File => Export', 'File => Print', 'a', 10),
(14, 2, 'Rectangle Tool berfungsi untuk…', 'Membuat garis lurus', 'Membuat persegi atau persegi panjang', 'Membuat lingkaran atau elips', 'Membuat segitiga atau segibanyak', 'c', 10),
(15, 2, 'Elips Tool berfungsi untuk…', 'Membuat persegi atau persegi panjang', 'Membuat segitiga atau segibanyak', ' Membuat gambar spiral', ' Membuat lingkaran atau elips', 'c', 10),
(16, 2, 'Tombol pada keyboard yang digunakan untuk mengeksport gambar adalah menekan…', 'Ctrl+E', 'Ctrl+Z', 'Ctrl+R', 'Ctrl+N', 'b', 10),
(17, 2, 'Tool yang digunakan untuk membentuk berbagai objek garis artistic adalah…', 'Artistic media Tool', ' Media Tool', 'Shape Tool', ' Pen Tool', 'd', 10),
(18, 2, ' Dimension Tool adalah Tool yang berguna untuk…', 'Membuat garis artistic', ' Membuat kurva', 'Membuat tebel', 'Membentuk garis dimensi vertikal, horizontal, diagonal, dan sebagainya', 'c', 10),
(19, 2, 'Tool yang digunakan untuk menarik, memindahkan objek adalah…', 'Pick Tool', 'Shape Tool', 'Envelope Tool', 'Berzier Tool', 'b', 10),
(20, 2, 'Ctrl+Z adalah shortcut pada keyboard untuk…', 'Save grafik CorelDRAW', 'Membuka lembar baru', 'Mengulangi langkah sebelumnya', 'Membuat text', 'c', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobi`
--

CREATE TABLE `hobi` (
  `id` int(11) NOT NULL,
  `id_buat` int(11) NOT NULL,
  `hobi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, '::1', '2020-06-28', 6, '1593353371');

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
(1, 'gema fajar r', 'gemafajar09@gmail.com', 'gemafajar09', '$2y$10$BdWzKKJfkAAOjYjInZ0gGuYITEZPPGA1rkQL0BlnLW8izUdYbJkRi', 'fajar123', '2020-05-09', 2);

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
  MODIFY `id_buat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_pendidikan`
--
ALTER TABLE `detail_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_soal`
--
ALTER TABLE `detail_soal`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_matrix`
--
ALTER TABLE `tb_matrix`
  MODIFY `id_matrix` int(11) NOT NULL AUTO_INCREMENT;

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

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 11:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `postdate` datetime NOT NULL DEFAULT current_timestamp(),
  `lastupdate` datetime DEFAULT NULL,
  `author` int(11) NOT NULL,
  `ket` enum('draf','pending','publish','blok') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `url`, `isi`, `gambar`, `postdate`, `lastupdate`, `author`, `ket`) VALUES
(1, 1, 'Berita Satu', 'Berita-Satu', '<p>contoh isi berita</p>', 'no-gambar.png', '2020-01-12 15:45:51', NULL, 1, 'draf'),
(2, 3, 'Berita Dua', 'Berita-Dua', '', 'no-gambar.png', '2020-01-12 16:22:33', NULL, 1, 'draf'),
(3, 1, 'lorem', 'lorem', '<div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">\r\n<div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left;\">\r\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\"><strong style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Jakarta</strong><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">&nbsp;- Kans juara&nbsp;</span><a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e; font-family: helvetica, arial; font-size: 16px;\" href=\"https://www.detik.com/tag/manchester-city\">Manchester City</a><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">&nbsp;di&nbsp;</span><a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e; font-family: helvetica, arial; font-size: 16px;\" href=\"https://sport.detik.com/sepakbola/liga-inggris\">Liga Inggris</a><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">&nbsp;tipis meski tak bisa dibilang tertutup. Meski demikian, City tak boleh kecewa karena masih ada peluang di kompetisi lain.</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /></h2>\r\n<div id=\"vibeInjectorDiv\" style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">\r\n<div style=\"height: 0px;\">&nbsp;</div>\r\n<div id=\"_forkInArticleAdContainer\" style=\"border: none !important; width: 0px; height: 0px;\"><ins>\r\n<div id=\"beacon_8733e2c473\" style=\"position: absolute; left: 0px; top: 0px; visibility: hidden;\"><img style=\"max-width: 100%; height: 0px; width: 0px;\" src=\"https://wtf2.forkcdn.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=4563&amp;loc=https%3A%2F%2Fsport.detik.com%2Fsepakbola%2Fliga-inggris%2Fd-4857316%2Fmasih-bisa-juara-di-3-kompetisi-city-tak-punya-alasan-untuk-kecewa&amp;referer=https%3A%2F%2Fsport.detik.com%2F&amp;cb=8733e2c473\" alt=\"\" width=\"0\" height=\"0\" /></div>\r\n</ins></div>\r\n</div>\r\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\"><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">City saat ini menempati peringkat kedua&nbsp;</span><a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e; font-family: helvetica, arial; font-size: 16px;\" href=\"https://sport.detik.com/sepakbola/klasemen/liga-inggris\">klasemen Liga Inggris</a><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">&nbsp;dengan 47 poin dari 22 laga. Meski demikian, tim arahan Pep Guardiola itu tertinggal 14 poin dari Liverpool yang ada di puncak klasemen dan masih punya satu laga tunda.</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Peluang City untuk mempertahankan gelar juara Liga Inggris pun disebut-sebut menipis. Apalagi performa Liverpool sejauh ini amat impresif dengan mencatat 20 kemenangan dan belum kalah dalam 21 pertandingan Liga Inggris.</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /></h2>\r\n<div class=\"clearfix\" style=\"padding: 0px; color: #2d2d2d; font-family: helvetica, arial; font-size: 16px; clear: both !important; height: 0px !important; float: none !important;\">&nbsp;</div>\r\n<div class=\"parallax_detail parallaxB\" style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px; margin: 0px auto; position: relative;\">\r\n<div class=\"parallax_abs\" style=\"width: 430px; height: 0px; position: absolute; top: 0px; left: 0px; clip: rect(auto, auto, auto, auto);\">\r\n<div class=\"parallax_fix\" style=\"width: 430px; height: 813px; position: fixed; top: 0px; transform: translateZ(0px); margin: 0px auto;\">\r\n<div class=\"parallax_ads\" style=\"width: 430px; height: auto; border: none; position: absolute; left: 215px; top: 0px; transform: translateX(-50%);\">\r\n<div id=\"div-gpt-ad-1572510301589-0\">\r\n<div id=\"google_ads_iframe_/4905536/detik_desktop/sepakbola/parallax_detail_0__container__\" style=\"border: 0pt none; width: 1px; height: 1px;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<table class=\"linksisip\" style=\"color: red; font-weight: bold; margin: 15px 0px; padding: 0px; display: block; font-family: helvetica, arial; font-size: 16px;\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div class=\"lihatjg\"><strong>Baca juga:&nbsp;</strong><a style=\"text-decoration-line: none; border: none; color: #2a781e;\" href=\"https://tv.detik.com/readvideo/2020/01/13/115435/200113026/160426477/city-nyerah-kejar-liverpool-guardiola-lupakan-saja\" data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\">City Nyerah Kejar Liverpool, Guardiola: Lupakan Saja</a></div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\"><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Meski demikian, City disebut tak perlu terlalu kecewa. Sebab mereka masih punya peluang untuk meraih trofi di tiga kompetisi lain.</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Di kompetisi domestik, City sudah sampai semifinal Piala Liga Inggris dan babak keempat Piala FA. Sementara di Liga Champions, Sergio Aguero dkk melaju ke babak 16 besar dan akan menghadapi Real Madrid.</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">\"Saya tidak pernah bilang ini (perburuan gelar Liga Inggris) sudah selesai untuk City. Tidak mungkin mengatakan itu. Tapi ini tidak di tangan Manchester City dan itu disayangkan, tapi ada banyak hal yang bisa diharapkan,\" ujar mantan kapten City,&nbsp;</span><a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e; font-family: helvetica, arial; font-size: 16px;\" href=\"https://www.detik.com/tag/vincent-kompany\">Vincent Kompany</a><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">, seperti dilansir&nbsp;</span><em style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Sky Sports</em><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">.</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">\"Melihat secara sejarah bagaimana City tampil di kompetisi piala dan bagaimana Liga Champions masih jadi target besar klub.\"</span><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><br style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\" /><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">\"Tidak ada alasan untuk kecewa dengan musim ini, masih ada banyak yang bisa dikejar,\" kata pesepakbola asal Belgia itu.</span></h2>\r\n</div>\r\n</div>', 'no-gambar.png', '2020-01-13 17:58:15', NULL, 1, 'draf'),
(4, 3, 'judul berita', 'judul-berita', '<p style=\"text-align: center;\"><span style=\"font-size: 36pt;\">Ini adalah Judul Berita</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 12pt;\">hifhjijsdisdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 12pt;\">ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 12pt;\">ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</span></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>', 'no-gambar.png', '2020-01-13 18:04:15', NULL, 1, 'draf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `urai_kategori_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `urai_kategori_berita`) VALUES
(1, 'Kategori 1'),
(3, 'Kategori 2');

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level`, `nama_level`) VALUES
(1, 'Super'),
(2, 'Admin'),
(3, 'User'),
(4, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `urut` int(11) NOT NULL,
  `url` text NOT NULL,
  `nama_menu` text NOT NULL,
  `icon` text NOT NULL,
  `akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id_menu`, `parent`, `urut`, `url`, `nama_menu`, `icon`, `akses`) VALUES
(1, 0, 5, 'logout', 'Log Out', 'fa fa-sign-out', '1,2,3'),
(2, 0, 4, '', 'Pengaturan', 'fa fa-gears', '1,2'),
(3, 2, 1, 'rtoadmin/aplikasi', 'Aplikasi', 'fa fa-circle-o', '1,2'),
(5, 0, 1, 'rtoadmin', 'Dashboard', 'fa fa-dashboard', '1,2'),
(8, 0, 2, 'rtoadmin/pageStatis', 'Managemen Halaman Statis', 'fa fa-copy', '1,2'),
(9, 0, 3, '', 'Manajemen Berita', 'fa fa-book', '1,2'),
(10, 9, 1, 'rtoadmin/kategori', 'Kategori Berita', '', '1,2'),
(11, 0, 2, 'rtoadmin/slider', 'Managemen Slider', 'fa fa-copy', '1,2'),
(12, 0, 2, 'rtoadmin/projek', 'Managemen Projek', 'fa fa-copy', '1,2');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id_page` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id_page`, `judul`, `isi`, `gambar`) VALUES
(1, 'Home', '<h1 style=\"text-align: center;\"><strong>Home</strong></h1>\r\n<p>Ini adalah halaman beranda yeyeyeyeye</p>', ''),
(2, 'Profil', '<h1 style=\"text-align: center;\"><strong>Profil</strong></h1>\r\n<p style=\"text-align: left;\">Ini adalah contoh halaman profil</p>', ''),
(3, 'Kontak', '<h1 style=\"text-align: center;\"><strong>Kontak</strong></h1>\r\n<p>&nbsp;</p>\r\n<p>Kontak kami</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `projek`
--

CREATE TABLE `projek` (
  `id_projek` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `aktif` enum('1','0') NOT NULL,
  `urut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projek`
--

INSERT INTO `projek` (`id_projek`, `judul`, `keterangan`, `gambar`, `aktif`, `urut`) VALUES
(15, 'Landing Page | Company Profile', 'Landing page adalah halaman dalam website yang didesain khusus dengan mindset marketing. Halaman inilah yang ditampilkan ketika pengunjung mengakses website', '13042021104257_1_scott-graham-5fNmWej4tAA-unsplash.jpg', '1', 1),
(16, 'Toko Online', 'Website toko online memungkinkan anda untuk berbisnis jauh lebih mudah. Fitur lengkap secara penggunaan yang mudah akan menambah semangat dalam berbisnis online.', '13042021104458_1_taras-shypka-iFSvn82XfGo-unsplash.jpg', '1', 2),
(17, 'Sistem Informasi', 'Website ini ditujukan untuk penggunaan khusus dengan banyak proses. Sistem dapat mempermudah pekerjaan anda. Sistem seperti apa yang anda butuhkan, kami siap membantu.', '13042021104613_1_freestocks-I_pOqP6kCOI-unsplash.jpg', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `client` text NOT NULL,
  `nama_app` text NOT NULL,
  `nama_singkat_app` text NOT NULL,
  `gambar` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` text NOT NULL,
  `fax` text NOT NULL,
  `email` text NOT NULL,
  `fb` text NOT NULL,
  `tw` text NOT NULL,
  `ig` text NOT NULL,
  `nama_kepala` text NOT NULL,
  `foto_kepala` text NOT NULL,
  `nama_sekretaris` text NOT NULL,
  `foto_sekretaris` text NOT NULL,
  `sambutan` text NOT NULL,
  `maps` text NOT NULL,
  `bg1` text NOT NULL,
  `bg2` text NOT NULL,
  `bg3` text NOT NULL,
  `tahun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `client`, `nama_app`, `nama_singkat_app`, `gambar`, `alamat`, `telp`, `fax`, `email`, `fb`, `tw`, `ig`, `nama_kepala`, `foto_kepala`, `nama_sekretaris`, `foto_sekretaris`, `sambutan`, `maps`, `bg1`, `bg2`, `bg3`, `tahun`) VALUES
(1, 'Rio Triyanto', 'Rio Triyanto', 'Rio Dev', '13042021083915_1_logo.png', 'Turi RT 06, Sidomulyo, Bambanglipuro, Bantul, Yogyakarta', '082327775694', '878', 'riotriyanto18@gmail.com', 'fb', 'tw', '', 'Rio', 'kepala.png', 'Sekre', 'sekretaris.png', 'sambutan', '', '', '', '', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slide` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `aktif` enum('1','0') NOT NULL,
  `urut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slide`, `judul`, `keterangan`, `gambar`, `aktif`, `urut`) VALUES
(2, 'Teknologi Informasi', 'Website merupakan hal terpenting dalam dunia Teknologi Informasi', '13042021105448_1_slider1.png', '1', 2),
(14, 'Pengguna Meningkat', 'Seiring berkembangnya era digital website semakin banyak yang menggunakan', '13042021105129_1_slider2.png', '1', 2),
(15, 'Sistem Informasi', 'Ketepatan dan keakuratan suatau pekerjaan akan lebih mudah dengan sistem yang tertata', '13042021105517_1_slider2.png', '1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `level_akses` enum('1','2','3') NOT NULL,
  `foto` text DEFAULT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `no_hp`, `email`, `fb`, `tw`, `ig`, `id_bidang`, `level_akses`, `foto`, `last_login`) VALUES
(1, 'rto', '0a2f49ea33a5c3462bf5c59f58d7f93d', 'Rio Triyanto', '', '', '', '', '', 0, '1', '11022020035526_1_pp.jpeg', '2019-06-12 09:12:09'),
(6, 'admin', '9fc7d2a273397d75de6d1bce563e9861', 'Admin', '', '', '', '', '', 0, '2', 'no-foto.png', '2019-06-12 09:12:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id_projek`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projek`
--
ALTER TABLE `projek`
  MODIFY `id_projek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

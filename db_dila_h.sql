-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2022 pada 06.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dila_h`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(50) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_penulis` varchar(50) NOT NULL,
  `berita_tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `berita_lokasi` varchar(50) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `berita_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_penulis`, `berita_tanggal`, `berita_lokasi`, `kategori_id`, `berita_foto`) VALUES
(1, 'marifosa', ' TY5YT', 'DILA', '2021-09-13 15:20:57', 'TASIKMALAYA', 1, 'DI GOOGLE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(5) NOT NULL,
  `blog_judul` varchar(100) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_penulis` varchar(100) NOT NULL,
  `blog_tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_cover` varchar(100) NOT NULL,
  `kategori_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_judul`, `blog_content`, `blog_penulis`, `blog_tgl`, `blog_cover`, `kategori_id`) VALUES
(16, 'KIMIA', ' kimia adalah bagian dari ilmu kimia yang mempelajari interaksi antara atom, molekul kecil, dan cahaya. Sebagaimana disiplin ilmu lainnya, fotokimia menggunakan sistem satuan SI atau metrik. Fotokimia adalah bagian dari ilmu kimia yang mempelajari interaksi antara atom, molekul kecil, dan cahaya. Sebagaimana disiplin ilmu lainnya, fotokimia menggunakan sistem satuan SI atau metrik.', 'wikipedia', '2021-09-13 10:23:42', 'h1.jpg', 0),
(36, 'ekonomi sejarah', '        Infografik Sejarah Ekonomi Indonesia Karya Katadata Tercatat di MURI Museum Rekor Indonesia (MURI) memberikan piagam atas rekor infografik terpanjang tentang perjalanan ekonomi Indonesia 1945-2017. Tampilan visual berukuran 1,8 x 17 meter ini menjelaskan tentang sejarah perekonomian Indonesia pasca-kemerdekaan.\r\n\r\nArtikel ini telah tayang di Katadata.co.id dengan judul \"Infografik Sejarah Ekonomi Indonesia Karya Katadata Tercatat di MURI\" , https://katadata.co.id/donangwahyu/foto/5e9a563d96b6c/infografik-sejarah-ekonomi-indonesia-karya-katadata-tercatat-di-muri\r\nPenulis: Donang Wahyu\r\nEditor: Donang Wahyu', 'dila', '2021-09-03 14:50:35', 'h2.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(5) NOT NULL,
  `kategori_nama` varchar(100) NOT NULL,
  `kategori_ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_ket`) VALUES
(7, 'dila', '        izin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

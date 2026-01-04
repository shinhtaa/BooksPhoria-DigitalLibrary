-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2026 pada 03.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksphoria`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books_phorias`
--

CREATE TABLE `books_phorias` (
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `gambarBuku` varchar(255) NOT NULL,
  `namaBuku` varchar(255) NOT NULL,
  `deskripsiBuku` longtext NOT NULL,
  `penulisBuku` varchar(255) NOT NULL,
  `penerbitBuku` varchar(255) NOT NULL,
  `tahunTerbit` year(4) NOT NULL,
  `kategoriBuku` bigint(20) UNSIGNED NOT NULL,
  `stokBuku` int(11) NOT NULL,
  `stokTersedia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books_phorias`
--

INSERT INTO `books_phorias` (`id_buku`, `gambarBuku`, `namaBuku`, `deskripsiBuku`, `penulisBuku`, `penerbitBuku`, `tahunTerbit`, `kategoriBuku`, `stokBuku`, `stokTersedia`, `created_at`, `updated_at`) VALUES
(1, 'lautbercerita.jpg', 'Laut Bercerita', 'Novel berlatar sejarah Orde Baru yang mengisahkan penculikan aktivis mahasiswa, perjuangan keluarga korban, serta pencarian kebenaran atas tragedi kemanusiaan.', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', '2017', 2, 10, 11, '2026-01-03 00:44:16', '2026-01-03 01:13:14'),
(2, 'bumimanusia.jpg', 'Bumi Manusia', 'Kisah Minke dalam menghadapi ketidakadilan kolonial, diskriminasi ras, dan perjuangan mempertahankan martabat di Hindia Belanda.', 'Pramoedya Ananta Toer', 'Hasta Mitra', '1980', 2, 8, 8, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(3, 'perahukertas.jpg', 'Perahu Kertas', 'Cerita tentang persahabatan, cinta, dan pencarian jati diri melalui mimpi serta pilihan hidup.', 'Dee Lestari', 'Bentang Pustaka', '2009', 1, 12, 12, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(4, 'negeri5menara.jpg', 'Negeri 5 Menara', 'Perjalanan enam santri yang ditempa disiplin, persahabatan, dan mimpi besar untuk menaklukkan dunia.', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', '2009', 3, 15, 15, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(5, 'laskarpelangi.jpg', 'Laskar Pelangi', 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan di tengah keterbatasan dan semangat persahabatan.', 'Andrea Hirata', 'Bentang Pustaka', '2005', 5, 20, 20, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(6, 'filosofikopi.jpg', 'Filosofi Kopi', 'Kumpulan cerita tentang kehidupan, idealisme, dan makna hidup yang tersaji melalui filosofi kopi.', 'Dee Lestari', 'Bentang Pustaka', '2006', 5, 10, 10, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(7, 'ayatayatcinta.jpg', 'Ayat-Ayat Cinta', 'Kisah cinta dan nilai keislaman dalam perjalanan seorang mahasiswa Indonesia di Mesir.', 'Habiburrahman El Shirazy', 'Republika', '2004', 1, 14, 14, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(8, 'rectoverso.jpg', 'Rectoverso', 'Kumpulan cerita pendek tentang cinta dari berbagai sudut pandang perasaan dan emosi.', 'Dee Lestari', 'Bentang Pustaka', '2008', 1, 9, 9, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(9, 'cantikituluka.jpg', 'Cantik Itu Luka', 'Novel epik yang memadukan sejarah, tragedi keluarga, dan realisme magis dalam perjalanan sebuah generasi.', 'Eka Kurniawan', 'Gramedia Pustaka Utama', '2002', 2, 7, 7, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(10, 'hujan.jpg', 'Hujan', 'Kisah cinta, kehilangan, dan harapan di masa depan dengan sentuhan fiksi ilmiah.', 'Tere Liye', 'Gramedia Pustaka Utama', '2016', 9, 11, 11, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(11, 'senja.jpg', 'Senja Bersama Rosie', 'Kisah cinta, persahabatan, dan kehilangan yang menguji makna ketulusan serta pengorbanan.', 'Tere Liye', 'Gramedia Pustaka Utama', '2011', 1, 10, 10, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(12, 'dilan.jpg', 'Dilan: Dia Adalah Dilanku Tahun 1990', 'Cerita romansa remaja tentang pertemuan Milea dan Dilan yang sederhana namun berkesan.', 'Pidi Baiq', 'Pastel Books', '2014', 1, 14, 14, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(13, 'supernova.jpeg', 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'Novel fiksi ilmiah yang memadukan filsafat, sains, dan pencarian makna kehidupan.', 'Dee Lestari', 'Truedee Pustaka Sejati', '2001', 9, 9, 9, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(14, 'ronggeng.jpg', 'Ronggeng Dukuh Paruk', 'Novel berlatar pedesaan yang mengangkat konflik tradisi, cinta, dan tragedi sosial.', 'Ahmad Tohari', 'Gramedia Pustaka Utama', '1982', 2, 7, 7, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(15, 'hobbit.jpg', 'The Hobbit', 'Petualangan Bilbo Baggins dalam perjalanan berbahaya untuk menemukan harta dan keberanian.', 'J.R.R. Tolkien', 'George Allen & Unwin', '1937', 3, 6, 6, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(16, 'harrypotter.jpg', 'Harry Potter and the Philosopher’s Stone', 'Kisah awal petualangan Harry Potter dalam menemukan dunia sihir dan jati dirinya.', 'J.K. Rowling', 'Bloomsbury', '1997', 10, 12, 12, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(17, 'percyjackson.jpg', 'Percy Jackson: The Lightning Thief', 'Petualangan remaja setengah dewa dalam menyelamatkan dunia para dewa Yunani.', 'Rick Riordan', 'Disney Hyperion', '2005', 3, 11, 11, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(18, 'animalfarm.jpg', 'Animal Farm', 'Fabel politik yang menyindir kekuasaan, revolusi, dan pengkhianatan terhadap idealisme.', 'George Orwell', 'Secker & Warburg', '1945', 2, 8, 8, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(19, 'thealchemist.avif', 'The Alchemist', 'Perjalanan seorang gembala dalam menemukan mimpi, takdir, dan makna kehidupan.', 'Paulo Coelho', 'HarperCollins', '1988', 3, 13, 13, '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(20, '1984.jpg', '1984', 'Novel distopia tentang pengawasan, manipulasi, dan hilangnya kebebasan individu.', 'George Orwell', 'Secker & Warburg', '1949', 7, 10, 10, '2026-01-03 00:44:16', '2026-01-03 01:13:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `namaKategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id_kategori`, `namaKategori`, `created_at`, `updated_at`) VALUES
(1, 'Romansa', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(2, 'Sejarah', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(3, 'Petualangan', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(4, 'Sejarah', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(5, 'Drama', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(6, 'Misteri', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(7, 'Thriller', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(8, 'Kriminal', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(9, 'Fiksi Ilmiah', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(10, 'Fantasy', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(11, 'Horror', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(12, 'Misteri', '2026-01-03 00:44:16', '2026-01-03 00:44:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_15_091115_create_categories_table', 1),
(5, '2025_12_11_112749_create_books_phorias_table', 1),
(6, '2025_13_19_073344_create_myloans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `myloans`
--

CREATE TABLE `myloans` (
  `id_myloans` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `gambarBuku` varchar(255) NOT NULL,
  `namaBuku` varchar(255) NOT NULL,
  `kodePeminjaman` varchar(255) NOT NULL,
  `namaPengambil` varchar(255) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `tanggalPeminjaman` datetime NOT NULL,
  `batasPengembalian` varchar(255) NOT NULL,
  `tanggalPengembalian` datetime DEFAULT NULL,
  `status` enum('Pending','Dipinjam','Dikembalikan','Terlambat') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `myloans`
--

INSERT INTO `myloans` (`id_myloans`, `user_id`, `id_buku`, `gambarBuku`, `namaBuku`, `kodePeminjaman`, `namaPengambil`, `noHp`, `tanggalPeminjaman`, `batasPengembalian`, `tanggalPengembalian`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1984.jpg', '1984', 'PJ-SDRE', 'Test Seeder', '081234567890', '2026-01-03 07:44:16', '2026-01-10 07:44:16', '2026-01-03 08:13:14', 'Dikembalikan', '2026-01-03 00:44:16', '2026-01-03 01:13:14'),
(2, 12, 20, '1984.jpg', '1984', 'PJ-FK1L9', 'Shinta Aulia Priyatna', '086864525416', '2026-01-01 00:00:00', '2026-01-08 00:00:00', '2026-01-03 08:13:25', 'Dikembalikan', '2026-01-03 01:11:13', '2026-01-03 01:13:25'),
(3, 14, 20, '1984.jpg', '1984', 'PJ-AIN26', 'Priyatna Shania', '087667894326', '2025-12-30 00:00:00', '2026-01-06 00:00:00', '2026-01-03 08:13:23', 'Dikembalikan', '2026-01-03 01:12:46', '2026-01-03 01:13:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5hJ7zhQ2m7ADpaOIrhaSawLHhA1cu9RPuH92rPFo', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRFBIV3I3RkFYTzlKT254eVhyM2FzZFplemlaaHk5VDdTMUg3WkdhYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjtzOjU6InJvdXRlIjtzOjEyOiJ1c2VyLnByb2ZpbGUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjt9', 1767491959);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `birthday` date DEFAULT NULL,
  `noHp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `email_verified_at`, `password`, `role`, `birthday`, `noHp`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Cortney Gottlieb', 'arely.schiller@example.org', '2026-01-03 00:44:15', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'Ev21UW2J6F', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(2, 'Sheldon Heidenreich MD', 'kyle99@example.com', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'hVkc4GJkyW', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(3, 'Vada Kulas', 'shanie46@example.org', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'RMeoFClP3f', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(4, 'Jake Stiedemann', 'considine.janiya@example.org', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'hHfGocNPML', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(5, 'Geraldine McClure', 'kwalsh@example.com', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'ZsN9fNw5Yz', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(6, 'Dina Wyman', 'yziemann@example.com', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'ZqGfXNv9kC', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(7, 'Francis Murphy', 'qohara@example.com', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'qxraZ64lgN', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(8, 'Kirsten McCullough', 'ostroman@example.com', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'mCe5hNprB9', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(9, 'Keyon Sawayn', 'antonette.roberts@example.org', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'Y7DLywbgeO', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(10, 'Dr. Rowan Gibson DVM', 'lockman.quincy@example.org', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'vSWFiTrXUE', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(11, 'Test User', 'test@example.com', '2026-01-03 00:44:16', '$2y$12$Fn91TkBJhsZts3m5ie6gmOeXIL1KaM1PC4Z/J4TMjqvuFLywRKzva', 'user', NULL, NULL, NULL, 'JdMnUsPXUh', '2026-01-03 00:44:16', '2026-01-03 00:44:16'),
(12, 'Shinta Kireina', 'shinta@gmail.com', NULL, '$2y$12$cX5fMo2WxTXm7g7Yc8wIguNycDsxDUzZy6wtj1qFsJgD1T40997DG', 'user', '2026-01-01', '087656789087', 'profiles/09srluK5WBj8F5jZYMm12ruJNqsIIGrNggX4XGhA.jpg', NULL, '2026-01-03 00:44:44', '2026-01-03 17:00:48'),
(13, 'Zulfatul', 'aulia@admin.com', NULL, '$2y$12$kQcT1/pZ1Eg8upx2K4Ari.F9ir3K0hl2mnd1jR3DSC.XDx8Q/Y1Re', 'admin', '2025-12-24', '086554433345', 'profiles/xTaYcSFVGGAnWK9mBaux6BlnvhbUvpwLSQ6Z1gVv.jpg', NULL, '2026-01-03 00:56:51', '2026-01-03 17:46:23'),
(14, 'priyatna', 'priyatna@gmail.com', NULL, '$2y$12$75HcFodhTgoO6kriUaoug.CRs1qxqsCXOY908X72Czi0cM8BV4KhS', 'user', NULL, NULL, NULL, NULL, '2026-01-03 01:11:51', '2026-01-03 01:11:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books_phorias`
--
ALTER TABLE `books_phorias`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `books_phorias_kategoribuku_foreign` (`kategoriBuku`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `myloans`
--
ALTER TABLE `myloans`
  ADD PRIMARY KEY (`id_myloans`),
  ADD UNIQUE KEY `myloans_kodepeminjaman_unique` (`kodePeminjaman`),
  ADD KEY `myloans_user_id_foreign` (`user_id`),
  ADD KEY `myloans_id_buku_foreign` (`id_buku`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books_phorias`
--
ALTER TABLE `books_phorias`
  MODIFY `id_buku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `myloans`
--
ALTER TABLE `myloans`
  MODIFY `id_myloans` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books_phorias`
--
ALTER TABLE `books_phorias`
  ADD CONSTRAINT `books_phorias_kategoribuku_foreign` FOREIGN KEY (`kategoriBuku`) REFERENCES `categories` (`id_kategori`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `myloans`
--
ALTER TABLE `myloans`
  ADD CONSTRAINT `myloans_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `books_phorias` (`id_buku`) ON DELETE CASCADE,
  ADD CONSTRAINT `myloans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

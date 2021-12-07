-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2021 pada 12.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balitekno`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `admins_password`, `admins_username`, `created_at`, `updated_at`) VALUES
(1, 'dika', 'anhdikaparmana87@gmail.com', '$2y$10$mxyvUu5JyNRPeQrCDfuADOOnnwMsBINVTJenaRgTUr.2UKzwDlimq', 'ADM1310523116', '2021-11-18 05:23:16', '2021-11-18 05:23:16'),
(2, 'aku', 'anhdikaparmana@gmail.com', '$2y$10$1KVclCGYqVRqGwwXWz4gJu9it4A.2xW/UvC8k5ff/9met3bTPTX6K', 'ADM2126815832', '2021-12-06 19:09:29', '2021-12-06 19:09:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_discount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bonuses`
--

INSERT INTO `bonuses` (`id`, `name`, `price`, `price_discount`, `discount`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Pendidikan', 20000, 18000, 10, 'sistem informasi aconting ini tdi buat untuk mengoptomalkan pengrjaan pegawai', '2021-11-18 08:33:21', '2021-11-18 09:46:53'),
(3, 'Bisnis', 10000, 8000, 20, 'sistem informasi aconting ini di buat untuk mengoptomalkan pengrjaan pegawai', '2021-11-18 08:58:36', '2021-11-18 09:47:07'),
(4, 'Kantoran', 50000, 40000, 20, 'sistem informasi aconting ini di buat untuk mengoptomalkan pengrjaan pegawai', '2021-11-18 08:59:24', '2021-11-18 09:47:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pictures` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `carousels`
--

INSERT INTO `carousels` (`id`, `pictures`, `created_at`, `updated_at`) VALUES
(5, '1.jpg', '2021-10-31 02:14:57', '2021-11-14 05:18:49'),
(9, '2.jpg', '2021-11-14 05:19:05', '2021-11-14 05:19:05'),
(10, '3.jpg', '2021-11-14 05:19:17', '2021-11-14 05:19:17'),
(11, '4.jpg', '2021-11-14 05:19:28', '2021-11-14 05:20:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `profil`, `client_name`, `client_description`, `created_at`, `updated_at`) VALUES
(4, 'logoBit2.png', 'PT. Bali Internasional Teknologi', 'PT. Bali Internasional Teknologi  Bergerak di bidang Jasa Pmograman', '2021-11-14 23:41:35', '2021-11-14 23:43:29'),
(5, 'noprofil.jpg', 'CV. Sejahtra Abadi', 'CV. Sejahtra Abadi Bergerak di bidang exportir', '2021-11-14 23:43:50', '2021-11-14 23:43:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `customers_name`, `customers_email`, `customers_password`, `customers_username`, `photos_ktp`, `created_at`, `updated_at`) VALUES
(4, 'dika parmana', 'parmanaandika123@gmail.com', '$2y$10$QSitX4CXGn2dURCVlykoLuqVvMsBMhOtZdfuqGPhLMYTlhxVAmupG', 'CUS26016445', 'fotoktp.jpeg', '2021-11-17 19:04:58', '2021-12-06 20:07:30'),
(5, 'dek opi', 'opiwidia21@gmail.com', '$2y$10$hvXg2jGngiMX69j/n5r5Nedi5aFA55kmsn2AoPgWQ6Dblklu5lY7C', 'CUS1498870084', 'Screenshot (7).png', '2021-11-17 19:15:57', '2021-11-17 19:15:57'),
(6, 'i gede', 'parmanaandika123@gmail.com', '$2y$10$m9riYJbei/695I9W5lzPE.hMvPi5Z/OfuGtwnp7bz7nGBchz3/GIi', 'CUS975066624', 'Screenshot (2).png', '2021-11-18 05:05:23', '2021-11-18 06:20:12'),
(7, 'Ddikap', 'anhdikaparmana87@gmail.com', '$2y$10$xTOJaaGnwL65bAFC4S9A9ODr2ttHdEMKF5rZp4meJhw5yAG/uvmzm', 'CUS1751101064', '18101278 i gede anhdika parmana.png', '2021-11-18 06:18:48', '2021-11-18 06:18:48'),
(8, 'opiiii', 'opiwidia21@gmail.com', '$2y$10$UJWgTclipgjznaacJqjslejyoWk.DqeX1hD5h/6mc1ezbrOnwybfa', 'CUS1220007733', 'Screenshot (137).png', '2021-12-06 19:03:11', '2021-12-06 19:03:11'),
(9, 'alex kuyy', 'alex87@gmail.com', '$2y$10$.wIoEjVqJ876/J9GCgnfKOFF0vKcWdT/Wrs7gbUqx4c2TqpwMlL8.', 'CUS1051891772', 'Screenshot (137).png', '2021-12-06 19:13:45', '2021-12-06 19:16:40'),
(10, 'alexx', 'alexxy@gmail.com', '$2y$10$xXsG3u1TtEoW92XKyJ5tXuKCq8X0HlNdbGtE6NDwhVf8kczgeDf6e', 'CUS726088302', 'Screenshot (137).png', '2021-12-06 19:14:49', '2021-12-06 19:14:49'),
(11, 'dika parmana 3443', 'anhdikaparmana87@gmail.com', '$2y$10$Gi.nQqpUL30NDjdzO0ESBO6zIlB0lr6NV2ewchyvxAyLQmW0K7h5C', 'CUS1546771717', 'Screenshot (137).png', '2021-12-06 19:49:47', '2021-12-06 19:49:47'),
(12, 'dika parmanqssqa', 'anhdikaparmana87@gmail.com', '$2y$10$hSNR9dptKqxz/m6l9B9I6.KSrgZM2Y5FwyTB05P205ReLhCfFfttO', 'CUS747340783', 'Screenshot (137).png', '2021-12-06 19:53:03', '2021-12-06 19:53:03'),
(13, 'dika parmanadwdwd', 'anhdikaparmana87@gmail.com', '$2y$10$vTIR9LaFUrPNbA4EPoq4deeZ3TKyY7tPxBjl01n9RvkOuou/7Jc12', 'CUS1861824538', 'Screenshot (137).png', '2021-12-06 19:54:27', '2021-12-06 19:54:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dekskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homes`
--

INSERT INTO `homes` (`id`, `title`, `dekskripsi`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'PT. Bali Internasional Teknologi', 'Jl. Halmahera No.47A, Dauh Puri Klod, Kec. denpasar, Kota Denpasar, Bali, Phone (0361)-4748222', 'logoBit2.png', '2021-11-04 08:04:27', '2021-11-14 22:50:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messange` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `nama`, `email`, `subject`, `messange`, `created_at`, `updated_at`) VALUES
(2, 'parmana', 'anhdikaparmana87@gmail.com', 'hello', 'test', '2021-11-15 00:15:52', '2021-11-15 00:15:52'),
(3, 'anhdika', 'parmanaandika123@gmail.com', 'hello', 'apakah saya bisa memesan sistem disini?', '2021-12-01 04:49:47', '2021-12-01 04:49:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_09_18_140902_create_customers_table', 1),
(3, '2021_09_18_155432_create_admins_table', 1),
(4, '2021_09_18_161851_create_messages_table', 1),
(5, '2021_09_18_162819_create_payment_methods_table', 1),
(6, '2021_09_18_163726_create_orders_table', 1),
(7, '2021_09_18_171732_create_homes_table', 1),
(8, '2021_09_18_172225_create_products_table', 1),
(9, '2021_09_18_172336_create_clients_table', 1),
(10, '2021_09_18_172416_create_teams_table', 1),
(11, '2021_09_18_172613_create_tamplates_table', 1),
(12, '2021_09_18_172704_create_bonuses_table', 1),
(13, '2021_10_24_104455_create_carousels_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system_price` int(11) NOT NULL,
  `system_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `down_payments` int(11) DEFAULT NULL,
  `remaining_payments` int(11) DEFAULT NULL,
  `total_payments` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evidence_payments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direct_payments` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `payment_method_id`, `customers_name`, `system_name`, `system_price`, `system_category`, `down_payments`, `remaining_payments`, `total_payments`, `status`, `evidence_payments`, `direct_payments`, `created_at`, `updated_at`) VALUES
(21, 4, NULL, 'dika parmana', 'E-commerce koprani sre sedana usaha 3', 5000000, 'web', 1000000, 4000000, 5000000, 'Menunggu Pelunasan', 'Screenshot (137).png', 0, '2021-11-18 02:43:56', '2021-12-05 00:29:12'),
(22, 4, NULL, 'dika parmana', 'sistem absen karyawan', 5000000, 'dektop', 1000000, 4000000, 5000000, 'Menunggu Pelunasan', NULL, 0, '2021-11-18 05:41:16', '2021-12-06 19:18:27'),
(23, 4, NULL, 'dika parmana', 'sistem informasi aconting', 5000000, 'webb', NULL, 0, 5000000, 'Lunas', NULL, 5000000, '2021-11-18 06:38:41', '2021-11-18 06:38:41'),
(25, 4, NULL, 'dika parmana', 'E-commerce koprani sre sedana usaha desa', 10000000, 'webb', NULL, 0, 10000000, 'Lunas', NULL, 10000000, '2021-11-22 21:39:06', '2021-12-02 02:59:01'),
(26, 4, NULL, 'dika parmana', 'E-commerce koprani sre sedana usaha', 10000000, 'web', 2000000, 8000000, 10000000, 'Menunggu Pelunasan', NULL, 0, '2021-12-02 02:53:27', '2021-12-02 02:53:27'),
(27, 5, NULL, 'dek opi', 'E-commerce koprani sre sedana usaha', 2000000, 'dektop', NULL, 0, 2000000, 'Lunas', NULL, 2000000, '2021-12-06 19:06:06', '2021-12-06 19:06:06'),
(28, 4, NULL, 'dika parmana', 'sistem informasi aconting', 2000000, 'web', 1000000, 1000000, 2000000, 'Menunggu Pelunasan', NULL, 0, '2021-12-06 19:06:42', '2021-12-06 19:06:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metode_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urayan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `metode_nama`, `urayan`, `created_at`, `updated_at`) VALUES
(1, 'anhdika Parmana', 'Indomaret', 'LDNLD6787CVDHV', '2021-11-14 05:10:50', '2021-12-06 19:25:04'),
(2, 'gede anhdika Parmana', 'BRI', '3454-09-300012-21-9', '2021-11-19 04:32:43', '2021-12-01 19:04:28'),
(3, 'i gede anhdika Parmana', 'BNI', '8700987587-DCV', '2021-11-19 04:33:03', '2021-12-01 19:14:49'),
(4, 'i gede anhdika Parmana', 'Alfamart', 'LDNLD6799CVNBH', '2021-12-01 19:17:43', '2021-12-01 19:17:43'),
(5, 'dika parmana', 'BCA', '5454-09-309782-21-0', '2021-12-06 19:24:10', '2021-12-06 19:24:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `system_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system_price` int(11) NOT NULL,
  `pictures` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `system_name`, `system_category`, `system_price`, `pictures`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sistem informasi aconting', 'web', 9000000, '3.jpg', 'sistem yang sangat mudah di mengerti', '2021-10-31 02:09:48', '2021-11-14 22:56:27'),
(3, 'sistem informasi aconting 4', 'web', 5000000, '1.jpg', 'sistem informasi aconting ini di buat untuk mengoptomalkan pengrjaan pegawai', '2021-11-14 22:54:00', '2021-11-14 22:54:00'),
(4, 'sistem informasi aconting 7', 'web', 20000000, '4.jpg', 'sistem informasi yang mudah di gunakan untuk perkantoran', '2021-11-14 22:55:13', '2021-11-14 22:55:52'),
(5, 'E-commerce koprani sre sedana usaha', 'dektop', 10000000, '2.jpg', 'E-commerce yang membantu penjualan koprasi', '2021-11-14 23:09:31', '2021-11-14 23:09:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamplates`
--

CREATE TABLE `tamplates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_tamplate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_tamplate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tamplates`
--

INSERT INTO `tamplates` (`id`, `thumbnail`, `url`, `name_tamplate`, `description_tamplate`, `created_at`, `updated_at`) VALUES
(1, 'noprofil.jpg', NULL, 'eno', 'ts', '2021-11-03 06:08:46', '2021-11-14 02:08:22'),
(2, 'noprofil.jpg', NULL, 'eno2', 'eno adalah tamplate landing page yang free dan mudah di mengerti', '2021-11-13 22:59:33', '2021-11-14 02:08:36'),
(3, 'noprofil.jpg', NULL, 'eno', 'eno adalah tamplate landing page', '2021-11-13 23:00:12', '2021-11-14 02:08:53'),
(4, '2.jpg', NULL, 'eno', 'eno adalah tamplate landing page yang free dan mudah di mengerti', '2021-11-15 00:14:48', '2021-11-15 00:14:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `profil`, `name`, `position`, `description_team`, `created_at`, `updated_at`) VALUES
(3, 'apple-touch-icon.png', 'dika76f', 'Dsign', 'telah berpengalaman dsign selama 4 tahun', '2021-11-03 05:45:24', '2021-11-14 23:48:08'),
(5, 'noprofil.jpg', 'anhdika', 'Dsign', 'telah berpengalaman dsign selama 4 tahun', '2021-11-14 23:47:18', '2021-11-14 23:47:18'),
(6, 'gallery-3.jpg', 'dika76', 'Dsign', 'telah berpengalaman dsign selama 4 tahun', '2021-11-15 00:00:04', '2021-11-15 00:00:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_payment_method_id_foreign` (`payment_method_id`);

--
-- Indeks untuk tabel `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamplates`
--
ALTER TABLE `tamplates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tamplates`
--
ALTER TABLE `tamplates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

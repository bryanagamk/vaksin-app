-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 21 Bulan Mei 2022 pada 03.44
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin-app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kipis`
--

DROP TABLE IF EXISTS `kipis`;
CREATE TABLE IF NOT EXISTS `kipis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vaccine_member_id` int(11) NOT NULL,
  `kipi_date` date NOT NULL,
  `symptomps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_treatment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_doctor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kipis`
--

INSERT INTO `kipis` (`id`, `vaccine_member_id`, `kipi_date`, `symptomps`, `medical_treatment`, `call_doctor`, `created_at`, `updated_at`) VALUES
(2, 3, '2022-05-21', 'Demam', 'Minum Pamol', 'Belum', '2022-05-21 02:20:54', '2022-05-21 02:20:54'),
(3, 8, '2022-05-21', 'Demam', 'Minum Pamol', 'Belum', '2022-05-21 03:30:27', '2022-05-21 03:30:27'),
(4, 11, '2022-05-21', 'Demam', 'Minum Pamol', 'Belum', '2022-05-21 03:42:14', '2022-05-21 03:42:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_18_033942_laratrust_setup_tables', 1),
(6, '2022_05_18_061507_create_vaksinator_table', 1),
(7, '2022_05_20_075217_create_vaccine_types_table', 1),
(8, '2022_05_20_093921_create_vaccine_schedules_table', 1),
(9, '2022_05_20_165602_create_vaccine_members_table', 1),
(10, '2022_05_21_034856_create_kipis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HomeController@create', 'Create HomeController', 'Create HomeController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(2, 'HomeController@index', 'Index HomeController', 'Index HomeController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(3, 'HomeController@update', 'Update HomeController', 'Update HomeController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(4, 'HomeController@delete', 'Delete HomeController', 'Delete HomeController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(5, 'JadwalVaksinController@create', 'Create JadwalVaksinController', 'Create JadwalVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(6, 'JadwalVaksinController@index', 'Index JadwalVaksinController', 'Index JadwalVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(7, 'JadwalVaksinController@update', 'Update JadwalVaksinController', 'Update JadwalVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(8, 'JadwalVaksinController@delete', 'Delete JadwalVaksinController', 'Delete JadwalVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(9, 'VaksinatorController@create', 'Create VaksinatorController', 'Create VaksinatorController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(10, 'VaksinatorController@index', 'Index VaksinatorController', 'Index VaksinatorController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(11, 'VaksinatorController@delete', 'Delete VaksinatorController', 'Delete VaksinatorController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(12, 'JenisVaksinController@create', 'Create JenisVaksinController', 'Create JenisVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(13, 'JenisVaksinController@index', 'Index JenisVaksinController', 'Index JenisVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(14, 'JenisVaksinController@delete', 'Delete JenisVaksinController', 'Delete JenisVaksinController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(15, 'PegawaiController@create', 'Create PegawaiController', 'Create PegawaiController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(16, 'PegawaiController@index', 'Index PegawaiController', 'Index PegawaiController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(17, 'PegawaiController@update', 'Update PegawaiController', 'Update PegawaiController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(18, 'PegawaiController@delete', 'Delete PegawaiController', 'Delete PegawaiController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(19, '#peserta_vaksinasi@create', 'Create #peserta_vaksinasi', 'Create #peserta_vaksinasi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(20, '#peserta_vaksinasi@index', 'Index #peserta_vaksinasi', 'Index #peserta_vaksinasi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(21, '#peserta_vaksinasi@update', 'Update #peserta_vaksinasi', 'Update #peserta_vaksinasi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(22, '#peserta_vaksinasi@delete', 'Delete #peserta_vaksinasi', 'Delete #peserta_vaksinasi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(23, 'LaporanController@index', 'Index LaporanController', 'Index LaporanController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(24, 'LaporanController@update', 'Update LaporanController', 'Update LaporanController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(25, '#daftar_vaksinasi@create', 'Create #daftar_vaksinasi', 'Create #daftar_vaksinasi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(26, '#daftar_vaksinasi@index', 'Index #daftar_vaksinasi', 'Index #daftar_vaksinasi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(27, 'RiwayatController@index', 'Index RiwayatController', 'Index RiwayatController', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(28, '#kipi@create', 'Create #kipi', 'Create #kipi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(29, '#kipi@index', 'Index #kipi', 'Index #kipi', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(30, '#kipi@delete', 'Delete #kipi', 'Delete #kipi', '2022-05-20 21:05:09', '2022-05-20 21:05:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(2, 'user', 'User', 'User', '2022-05-20 21:05:09', '2022-05-20 21:05:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(2, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `nip`, `birth_date`, `gender`, `blood_type`, `handphone`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', '', '', '', '', '', 'admin@gmail.com', NULL, '$2y$10$K6qbfo6.5oryGuYbCZ1bVu6avIBDdMl0M7MUGL54IeZb3GX5lQpau', NULL, '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(2, 'test', '123456789123456', '123123123123123', '2022-05-19', 'Laki-laki', 'B', '087787081470', 'Aktif', 'test@gmail.com', NULL, '$2y$10$nYHHVKN8EuNgO1hQ0/NkIe2xjIddqQCuO4Vkv1OkvlIB90mo7HJrq', NULL, '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(3, 'test1', '123456789123456', '123123123123123', '2022-05-19', 'Laki-laki', 'B', '087787081470', 'Aktif', 'test1@gmail.com', NULL, '$2y$10$gJIvKqwVjhYv9oBxoqB8a.28iY0CbqyTGhFDHxvefCyy4hnJc4X1W', NULL, '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(4, 'test2', '123456789123456', '123123123123123', '2022-05-19', 'Laki-laki', 'B', '087787081470', 'Aktif', 'test2@gmail.com', NULL, '$2y$10$zyAgNdQk3IJ42pCjbalxKOOEAI.cfE2zY6lRw6QzGyZOExrJWKx6W', NULL, '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(5, 'test3', '123456789123456', '123123123123123', '2022-05-19', 'Laki-laki', 'B', '087787081470', 'Aktif', 'test3@gmail.com', NULL, '$2y$10$3zWAs0GEmIX8PkCRu/7FPuwgSb2vQtqMzgrm3Kw2yhmD33752Qrne', NULL, '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(6, 'test4', '123456789123456', '123123123123123', '2022-05-19', 'Laki-laki', 'B', '087787081470', 'Aktif', 'test4@gmail.com', NULL, '$2y$10$sYGyJ4gbkwzdBcnImCdNpOX0zzF66fs2gk6OFqLX5d0nLe4wqh8IW', NULL, '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(10, 'Taufiqur', '3522062502970003', '11111111', '2019-06-21', 'Laki-Laki', 'A', '087787081407', 'Aktif', 'bryanagamk@gmail.com', NULL, '$2y$10$G.ueyjbPAsqiwKxxN0O0juCqRIDlNyLtX5XywidX2f1rRU9y8nlny', NULL, '2022-05-21 03:24:36', '2022-05-21 03:24:36'),
(11, 'tatas', '111111111111', '222222222', '2022-05-21', 'Laki-Laki', 'A', '087787081407', 'Aktif', 'tatas@gmail.com', NULL, '$2y$10$atsp3tOD1JcX8e2rwmM0VeAf/LKlIYdHtJmg2zkfP5Pvs0z.cT2sa', NULL, '2022-05-21 03:39:25', '2022-05-21 03:39:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaccinators`
--

DROP TABLE IF EXISTS `vaccinators`;
CREATE TABLE IF NOT EXISTS `vaccinators` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vaccinators`
--

INSERT INTO `vaccinators` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'RSU Haji', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(2, 'RSU Airlangga', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(4, 'Puskesmas Kalijudan', '2022-05-21 03:11:19', '2022-05-21 03:11:19'),
(5, 'Puskesmas Rungkut', '2022-05-21 03:16:28', '2022-05-21 03:16:28'),
(6, 'Puskesmas Mulyorejo', '2022-05-21 03:25:18', '2022-05-21 03:25:18'),
(7, 'Puskesmas Kenjeran', '2022-05-21 03:40:01', '2022-05-21 03:40:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaccine_members`
--

DROP TABLE IF EXISTS `vaccine_members`;
CREATE TABLE IF NOT EXISTS `vaccine_members` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vaccine_schedule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL DEFAULT 0,
  `number_vaccine` int(11) NOT NULL DEFAULT 0,
  `vaccine_at` date DEFAULT NULL,
  `next_vaccine_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vaccine_members`
--

INSERT INTO `vaccine_members` (`id`, `vaccine_schedule_id`, `user_id`, `attendance`, `number_vaccine`, `vaccine_at`, `next_vaccine_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, '2022-05-21', '2022-08-21', '2022-05-20 21:07:02', '2022-05-20 21:07:15'),
(2, 1, 2, 2, 1, NULL, NULL, '2022-05-20 21:07:21', '2022-05-20 21:07:30'),
(3, 1, 2, 1, 2, '2022-05-21', '2022-08-21', '2022-05-20 21:07:33', '2022-05-20 21:07:37'),
(4, 1, 2, 0, 2, NULL, NULL, '2022-05-20 21:07:41', '2022-05-20 21:07:41'),
(6, 3, 2, 0, 0, NULL, NULL, '2022-05-21 03:27:55', '2022-05-21 03:27:55'),
(7, 3, 3, 0, 0, NULL, NULL, '2022-05-21 03:27:55', '2022-05-21 03:27:55'),
(8, 3, 10, 1, 1, '2022-05-21', '2022-08-21', '2022-05-21 03:29:09', '2022-05-21 03:29:43'),
(9, 3, 10, 2, 1, NULL, NULL, '2022-05-21 03:30:53', '2022-05-21 03:31:17'),
(10, 3, 10, 1, 2, '2022-05-21', '2022-08-21', '2022-05-21 03:31:44', '2022-05-21 03:31:54'),
(11, 4, 11, 1, 1, '2022-05-21', '2022-08-21', '2022-05-21 03:40:55', '2022-05-21 03:41:10'),
(12, 4, 11, 2, 1, NULL, NULL, '2022-05-21 03:41:21', '2022-05-21 03:41:28'),
(13, 4, 11, 1, 2, '2022-05-21', '2022-08-21', '2022-05-21 03:41:33', '2022-05-21 03:41:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaccine_schedules`
--

DROP TABLE IF EXISTS `vaccine_schedules`;
CREATE TABLE IF NOT EXISTS `vaccine_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vaccinator_id` int(11) NOT NULL,
  `vaccine_type_id` int(11) NOT NULL,
  `vaccine_regisdate_start` date NOT NULL,
  `vaccine_regisdate_end` date NOT NULL,
  `vaccine_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccine_session_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccine_session_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quota` int(11) NOT NULL,
  `remaining_quota` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vaccine_schedules`
--

INSERT INTO `vaccine_schedules` (`id`, `vaccinator_id`, `vaccine_type_id`, `vaccine_regisdate_start`, `vaccine_regisdate_end`, `vaccine_date`, `vaccine_session_start`, `vaccine_session_end`, `location`, `quota`, `remaining_quota`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-05-12', '2022-05-22', '2022-05-23', '06:00:00', '17:00:00', 'Surabaya', 3, 0, '2022-05-20 21:05:09', '2022-05-20 21:07:41'),
(3, 6, 6, '2022-05-12', '2022-05-21', '2022-05-22', '06:00:00', '20:00:00', 'Surabaya', 10, 8, '2022-05-21 03:26:59', '2022-05-21 03:31:44'),
(4, 7, 7, '2022-05-18', '2022-05-20', '2022-05-21', '06:00:00', '20:00:00', 'Surabaya', 10, 8, '2022-05-21 03:40:37', '2022-05-21 03:41:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaccine_types`
--

DROP TABLE IF EXISTS `vaccine_types`;
CREATE TABLE IF NOT EXISTS `vaccine_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vaccine_types`
--

INSERT INTO `vaccine_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sinovac', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(2, 'Pfizer', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(3, 'Moderna', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(4, 'AstraZeneca', '2022-05-20 21:05:09', '2022-05-20 21:05:09'),
(6, 'Nusantara', '2022-05-21 03:25:37', '2022-05-21 03:25:37'),
(7, 'Vaksin X', '2022-05-21 03:40:12', '2022-05-21 03:40:12');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

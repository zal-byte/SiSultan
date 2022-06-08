-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 11:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisultan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hhbk_bambu`
--

CREATE TABLE `hhbk_bambu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` double NOT NULL,
  `produksi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hhbk_madu`
--

CREATE TABLE `hhbk_madu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` double NOT NULL,
  `produksi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hutan_rakyat`
--

CREATE TABLE `hutan_rakyat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` double(8,2) NOT NULL,
  `produksi` int(11) NOT NULL,
  `sengon` double(8,2) NOT NULL,
  `jati` double(8,2) NOT NULL,
  `rimba_campuran` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iphhk`
--

CREATE TABLE `iphhk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_industri_primer` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `produksi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisasi_produksi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iuphhbk`
--

CREATE TABLE `iuphhbk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_hhbk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_sk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_produksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iuphk`
--

CREATE TABLE `iuphk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_sk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_area` int(11) NOT NULL,
  `volume_produksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iupjasling`
--

CREATE TABLE `iupjasling` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_survey_koordinat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_sk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izin_usaha_iphhk`
--

CREATE TABLE `izin_usaha_iphhk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_iphhk` bigint(20) UNSIGNED NOT NULL,
  `id_usaha` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izin_usaha_iuphhbk`
--

CREATE TABLE `izin_usaha_iuphhbk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_usaha` bigint(20) UNSIGNED NOT NULL,
  `id_iuphhbk` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izin_usaha_iuphk`
--

CREATE TABLE `izin_usaha_iuphk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_iuphk` bigint(20) UNSIGNED NOT NULL,
  `id_usaha` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izin_usaha_iupjasling`
--

CREATE TABLE `izin_usaha_iupjasling` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_iupjasling` bigint(20) UNSIGNED NOT NULL,
  `id_usaha` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(10) UNSIGNED NOT NULL,
  `kota_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_tentang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(71, '2014_10_12_000000_create_users_table', 1),
(72, '2014_10_12_100000_create_password_resets_table', 1),
(73, '2019_08_19_000000_create_failed_jobs_table', 1),
(74, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(75, '2022_05_25_235559_kota_migration', 1),
(76, '2022_06_06_032825_usaha_migration', 1),
(77, '2022_06_06_035400_iuphk', 1),
(78, '2022_06_06_040933_iphhk', 1),
(79, '2022_06_06_040934_iuphhbk', 1),
(80, '2022_06_06_040935_iupjasling', 1),
(81, '2022_06_06_043840_izin_usaha_iuphk', 1),
(82, '2022_06_06_045852_izin_usaha_iphhk', 1),
(83, '2022_06_06_102112_izin_usaha_iuphhbk', 1),
(84, '2022_06_06_102755_izin_usaha_iupjasling', 1),
(85, '2022_06_06_103144_hutan_rakyat', 1),
(86, '2022_06_06_103730_hbbk_bambu', 1),
(87, '2022_06_06_104029_hhbk_madu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hhbk_bambu`
--
ALTER TABLE `hhbk_bambu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hhbk_madu`
--
ALTER TABLE `hhbk_madu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hutan_rakyat`
--
ALTER TABLE `hutan_rakyat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iphhk`
--
ALTER TABLE `iphhk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuphhbk`
--
ALTER TABLE `iuphhbk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuphk`
--
ALTER TABLE `iuphk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iupjasling`
--
ALTER TABLE `iupjasling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izin_usaha_iphhk`
--
ALTER TABLE `izin_usaha_iphhk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izin_usaha_iphhk_id_iphhk_foreign` (`id_iphhk`),
  ADD KEY `izin_usaha_iphhk_id_usaha_foreign` (`id_usaha`);

--
-- Indexes for table `izin_usaha_iuphhbk`
--
ALTER TABLE `izin_usaha_iuphhbk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izin_usaha_iuphhbk_id_iuphhbk_foreign` (`id_iuphhbk`),
  ADD KEY `izin_usaha_iuphhbk_id_usaha_foreign` (`id_usaha`);

--
-- Indexes for table `izin_usaha_iuphk`
--
ALTER TABLE `izin_usaha_iuphk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izin_usaha_iuphk_id_iuphk_foreign` (`id_iuphk`),
  ADD KEY `izin_usaha_iuphk_id_usaha_foreign` (`id_usaha`);

--
-- Indexes for table `izin_usaha_iupjasling`
--
ALTER TABLE `izin_usaha_iupjasling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izin_usaha_iupjasling_id_iupjasling_foreign` (`id_iupjasling`),
  ADD KEY `izin_usaha_iupjasling_id_usaha_foreign` (`id_usaha`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hhbk_bambu`
--
ALTER TABLE `hhbk_bambu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hhbk_madu`
--
ALTER TABLE `hhbk_madu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hutan_rakyat`
--
ALTER TABLE `hutan_rakyat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iphhk`
--
ALTER TABLE `iphhk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iuphhbk`
--
ALTER TABLE `iuphhbk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iuphk`
--
ALTER TABLE `iuphk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iupjasling`
--
ALTER TABLE `iupjasling`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izin_usaha_iphhk`
--
ALTER TABLE `izin_usaha_iphhk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izin_usaha_iuphhbk`
--
ALTER TABLE `izin_usaha_iuphhbk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izin_usaha_iuphk`
--
ALTER TABLE `izin_usaha_iuphk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izin_usaha_iupjasling`
--
ALTER TABLE `izin_usaha_iupjasling`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `izin_usaha_iphhk`
--
ALTER TABLE `izin_usaha_iphhk`
  ADD CONSTRAINT `izin_usaha_iphhk_id_iphhk_foreign` FOREIGN KEY (`id_iphhk`) REFERENCES `iphhk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `izin_usaha_iphhk_id_usaha_foreign` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `izin_usaha_iuphhbk`
--
ALTER TABLE `izin_usaha_iuphhbk`
  ADD CONSTRAINT `izin_usaha_iuphhbk_id_iuphhbk_foreign` FOREIGN KEY (`id_iuphhbk`) REFERENCES `iuphhbk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `izin_usaha_iuphhbk_id_usaha_foreign` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `izin_usaha_iuphk`
--
ALTER TABLE `izin_usaha_iuphk`
  ADD CONSTRAINT `izin_usaha_iuphk_id_iuphk_foreign` FOREIGN KEY (`id_iuphk`) REFERENCES `iuphk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `izin_usaha_iuphk_id_usaha_foreign` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `izin_usaha_iupjasling`
--
ALTER TABLE `izin_usaha_iupjasling`
  ADD CONSTRAINT `izin_usaha_iupjasling_id_iupjasling_foreign` FOREIGN KEY (`id_iupjasling`) REFERENCES `iupjasling` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `izin_usaha_iupjasling_id_usaha_foreign` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

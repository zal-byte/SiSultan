-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 08:53 PM
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
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama`, `id_kota`, `id_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'balungbangjaya', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(2, 'bubulak', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(3, 'cilendek barat', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(4, 'cilendek timur', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(5, 'curug', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(6, 'curugmekar', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(7, 'gunungbatu', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(8, 'loji', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(9, 'margajaya', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(10, 'menteng', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(11, 'pasirjaya', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(12, 'pasirkuda', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(13, 'pasirmulya', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(14, 'semplak', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(15, 'sindangbarang', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(16, 'situgede', 1, 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(17, 'batutulis', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(18, 'bojongkerta', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(19, 'bondongan', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(20, 'cikaret', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(21, 'cipaku', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(22, 'empang', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(23, 'genteng', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(24, 'harjasari', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(25, 'kertamaya', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(26, 'lawanggintung', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(27, 'muarasari', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(28, 'mulyaharja', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(29, 'pakuan', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(30, 'pamoyanan', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(31, 'rancamaya', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(32, 'ranggamekar', 1, 2, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(33, 'babakan', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(34, 'babakanpasar', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(35, 'cibogor', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(36, 'ciwaringin', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(37, 'gudang', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(38, 'kebonkelapa', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(39, 'pabaton', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(40, 'paledang', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(41, 'panaragan', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(42, 'sempur', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(43, 'tegallega', 1, 3, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(44, 'cibadak', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(45, 'kayumanis', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(46, 'kebonpedes', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(47, 'kedungbadak', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(48, 'kedungjaya', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(49, 'kedungwaringin', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(50, 'kencana', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(51, 'mekarwangi', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(52, 'sukadamai', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(53, 'sukaresmi', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(54, 'tanahsareal', 1, 4, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(55, 'bantar jati', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(56, 'cibuluh', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(57, 'ciluar', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(58, 'cimahpar', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(59, 'ciparigi', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(60, 'kedunghalang', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(61, 'tanahbaru', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(62, 'tegalgundil', 1, 5, '2022-06-16 11:33:59', '2022-06-16 11:33:59');

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
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `id_kota`, `created_at`, `updated_at`) VALUES
(1, 'bogor barat', 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(2, 'bogor selatan', 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(3, 'bogor tengah', 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(4, 'bogor timur', 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(5, 'bogor utara', 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(6, 'tanah sareal', 1, '2022-06-16 11:33:59', '2022-06-16 11:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `gambar`, `luas`, `created_at`, `updated_at`) VALUES
(1, 'bogor', 'bogor.jpg', '2.710,62', '2022-06-16 11:33:58', '2022-06-16 11:33:58'),
(2, 'sukabumi', NULL, '4.145,70', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(3, 'cianjur', NULL, '3.840,16', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(4, 'bandung', 'bandung.jpg', '1.767,96', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(5, 'garut', NULL, '3.074,07', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(6, 'tasikmalaya', NULL, '2.551,19', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(7, 'ciamis', NULL, '1.414,71', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(8, 'kuningan', NULL, '1.110,56', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(9, 'cirebon', NULL, '984,52', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(10, 'majalengka', NULL, '1.204,24', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(11, 'sumedang', NULL, '1.518,33', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(12, 'indramayu', NULL, '2.040,11', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(13, 'subang', NULL, '1.893,95', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(14, 'purwakarta', NULL, '825,74', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(15, 'karawang', 'karawang.jpg', '1.652,20', '2022-06-16 11:33:59', '2022-06-16 11:33:59'),
(16, 'bekasi', 'bekasi.jpg', '1.224,88', '2022-06-16 11:33:59', '2022-06-16 11:33:59');

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
(445, '2014_10_12_100000_create_password_resets_table', 1),
(446, '2019_08_19_000000_create_failed_jobs_table', 1),
(447, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(448, '2022_06_06_000002_kota', 1),
(449, '2022_06_06_000003_kecamatan', 1),
(450, '2022_06_06_000004_desa', 1),
(451, '2022_06_06_032825_usaha_migration', 1),
(452, '2022_06_06_035400_iuphk', 1),
(453, '2022_06_06_040933_iphhk', 1),
(454, '2022_06_06_040934_iuphhbk', 1),
(455, '2022_06_06_040935_iupjasling', 1),
(456, '2022_06_06_043840_izin_usaha_iuphk', 1),
(457, '2022_06_06_045852_izin_usaha_iphhk', 1),
(458, '2022_06_06_102112_izin_usaha_iuphhbk', 1),
(459, '2022_06_06_102755_izin_usaha_iupjasling', 1),
(460, '2022_06_06_103144_hutan_rakyat', 1),
(461, '2022_06_06_103730_hbbk_bambu', 1),
(462, '2022_06_06_104029_hhbk_madu', 1),
(463, '2022_06_06_104030_create_users_table', 1);

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
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `id_desa` bigint(20) UNSIGNED NOT NULL
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reich Karl', 'reichkarl@yahoo.com', NULL, '$2y$10$2zoWp7Wq/CRSjdsUMCxd8.FjYieYNqGEMjutN/c5RDIxiBA9VhluG', NULL, '2022-06-16 11:33:59', '2022-06-16 11:33:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desa_id_kota_foreign` (`id_kota`),
  ADD KEY `desa_id_kecamatan_foreign` (`id_kecamatan`);

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
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_id_kota_foreign` (`id_kota`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `usaha_id_kecamatan_foreign` (`id_kecamatan`),
  ADD KEY `usaha_id_kota_foreign` (`id_kota`),
  ADD KEY `usaha_id_desa_foreign` (`id_desa`);

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
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=464;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `desa_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `usaha_id_desa_foreign` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usaha_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usaha_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

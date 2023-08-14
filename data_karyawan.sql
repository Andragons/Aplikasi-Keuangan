-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 04:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Pemasukan','Pengeluaran') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Tunjangan', 'Quia odit tenetur laboriosam a hic ut ut.', 'Pemasukan', '2023-08-14 05:57:55', '2023-08-14 05:57:55'),
(2, 'Tunjangan', 'Enim id dolorum id quia itaque animi.', 'Pemasukan', '2023-08-14 05:57:55', '2023-08-14 05:57:55'),
(3, 'Pakaian', 'Odio veniam commodi ex officia consectetur neque.', 'Pengeluaran', '2023-08-14 05:57:55', '2023-08-14 05:57:55'),
(4, 'Sewa Kost', 'Exercitationem aut harum eligendi repellat est.', 'Pengeluaran', '2023-08-14 05:57:55', '2023-08-14 05:57:55'),
(5, 'Tunjangan', 'Repudiandae ut qui eos qui molestiae nisi.', 'Pemasukan', '2023-08-14 05:57:56', '2023-08-14 05:57:56'),
(6, 'Makan', 'Sequi quia vel quas vitae.', 'Pengeluaran', '2023-08-14 05:57:56', '2023-08-14 05:57:56'),
(7, 'Makan', 'Quaerat nesciunt ut magni non harum vero.', 'Pengeluaran', '2023-08-14 05:57:56', '2023-08-14 05:57:56'),
(8, 'Bonus', 'Nulla ut quia ullam asperiores.', 'Pemasukan', '2023-08-14 05:57:56', '2023-08-14 05:57:56'),
(9, 'Makan', 'Voluptatem animi cupiditate quam enim sit aut quae.', 'Pengeluaran', '2023-08-14 05:57:56', '2023-08-14 05:57:56'),
(10, 'Bonus', 'Expedita a praesentium iste animi id.', 'Pemasukan', '2023-08-14 05:57:56', '2023-08-14 05:57:56'),
(11, 'Bayar Kost', 'Bayar Kost Bulan Agustus', 'Pemasukan', '2023-08-14 06:41:26', '2023-08-14 06:41:26');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_08_14_070409_create_categories_table', 1),
(12, '2023_08_14_070553_create_transactions_table', 1);

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_type` enum('Pemasukan','Pengeluaran') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_type`, `category_id`, `amount`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pengeluaran', 3, 894646011, 'Quam non quaerat aliquid rerum necessitatibus est adipisci1', '2023-08-02 14:39:44', '2023-08-14 07:10:16'),
(2, 'Pengeluaran', 2, 2722746, 'Dicta non et eum dolor sunt et blanditiis.', '2023-07-14 11:44:42', '2023-08-07 03:10:32'),
(3, 'Pemasukan', 9, 7980708, 'Laborum sint nulla vero et.', '2023-07-15 03:35:00', '2023-08-13 16:27:43'),
(4, 'Pengeluaran', 4, 774935, 'Sit possimus facilis illum blanditiis qui consectetur.', '2023-07-22 12:56:10', '2023-08-06 11:30:23'),
(5, 'Pengeluaran', 4, 479506, 'Omnis autem optio rerum.', '2023-08-09 07:10:30', '2023-07-23 23:31:35'),
(6, 'Pemasukan', 10, 9077713, 'Vel numquam qui consequuntur fugiat architecto quis tenetur.', '2023-07-22 02:37:28', '2023-08-03 19:46:39'),
(7, 'Pengeluaran', 3, 1350025, 'Qui ducimus quaerat dolores dicta.', '2023-08-13 10:37:30', '2023-07-31 20:32:05'),
(8, 'Pengeluaran', 5, 8834501, 'Et est et et occaecati quas est.', '2023-08-06 12:38:20', '2023-07-15 13:08:44'),
(9, 'Pengeluaran', 8, 7036035, 'Autem id aut id quia minima perferendis.', '2023-07-29 17:04:37', '2023-07-15 11:37:05'),
(10, 'Pemasukan', 5, 4728599, 'Delectus nostrum perspiciatis consectetur alias veritatis vitae rem.', '2023-07-31 16:33:01', '2023-07-15 00:34:15'),
(11, 'Pemasukan', 7, 6232399, 'Voluptas aut non corporis est praesentium qui.', '2023-07-28 12:52:47', '2023-08-03 02:09:33'),
(12, 'Pemasukan', 8, 2626863, 'Dolorum alias qui voluptas laborum.', '2023-08-05 15:34:29', '2023-07-29 14:54:07'),
(13, 'Pemasukan', 3, 4522143, 'Odit suscipit inventore quis ipsum totam.', '2023-08-06 21:29:56', '2023-07-22 02:29:31'),
(14, 'Pengeluaran', 3, 5926889, 'Voluptatem commodi sit quia harum ut qui explicabo et.', '2023-08-06 15:29:27', '2023-07-18 05:37:13');

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
(1, 'Syahrini Zulaika', 'apadmasari@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'c9K94Z1uH4', '2023-08-14 05:57:55', '2023-08-14 05:57:55'),
(2, 'Bella Wastuti S.E.I', 'situmorang.hendra@example.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AXDDtRmdlF', '2023-08-14 05:57:55', '2023-08-14 05:57:55'),
(3, 'Raharja Nugroho S.H.', 'indah95@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'F1dcGuTtyY', '2023-08-14 05:57:55', '2023-08-14 05:57:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

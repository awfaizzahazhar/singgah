-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 02:04 PM
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
-- Database: `singgah2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_18_161935_create_sessions_table', 1),
(7, '2021_10_26_022808_create_posts_table', 2),
(8, '2021_10_26_023532_create_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('balqisawfa@gmail.com', '$2y$10$2N25J9/GR9kh0/aelHhgbOxKzu2.v0iMAzjADAeen/wBLO4AzgTz2', '2021-10-18 23:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `past_purchases`
--

CREATE TABLE `past_purchases` (
  `orderid` int(11) NOT NULL,
  `food` varchar(191) NOT NULL,
  `caption` text NOT NULL,
  `location` text NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `method` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `past_purchases`
--

INSERT INTO `past_purchases` (`orderid`, `food`, `caption`, `location`, `price`, `quantity`, `method`, `user_id`) VALUES
(7, 'Macaroni Cheese', 'Macaroni with mozarella and cheddar cheese', 'Aeon Ayer Keroh, 4/1/2022 2:00 pm', 10, 1, 'Online Banking', 1),
(8, 'Homemade Pizza', 'pizza dengan keju mozarella dan pepperoni ayam', 'Mydin Ayer Keroh, 5/12/2021 - 11:00am - 1:00pm', 6, 1, 'Online Banking', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `food`, `caption`, `location`, `price`, `stock`, `cover`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'Cheese Cake', 'Cheese Cake homemade with blueberry and strawberry.', 'Bus Station, 5/1/2022 at 1pm', 5, 10, '1636001400_Best-Cheesecake-Recipe-2-1-of-1-4.jpg', 1, '2021-11-03 20:50:00', '2021-11-03 21:02:37'),
(10, 'Macaroni Cheese', 'Macaroni with mozarella and cheddar cheese', 'Aeon Ayer Keroh, 4/1/2022 2:00 pm', 10, 15, '1638585076_Baked-Mac-and-Cheese-pull-shot.jpg', 2, '2021-12-03 18:31:16', '2021-12-03 18:33:29'),
(31, 'Homemade Pizza', 'pizza dengan keju mozarella dan pepperoni ayam', 'Mydin Ayer Keroh, 5/12/2021 - 11:00am - 1:00pm', 6, 20, '1638625829_Eq_it-na_pizza-margherita_sep2005_sml.jpg', 1, '2021-12-04 05:50:29', '2021-12-04 05:50:29'),
(32, 'Nasi Lemak Kerang', 'Nasi lemak sambal manis kerang', 'UTEM SATRIA , ISNIN - JUMAAT, 11:00am - 1:00pm', 3, 5, '1639149792_nasi lomak.jpg', 3, '2021-12-10 07:23:12', '2021-12-10 07:23:12'),
(34, 'Spaghetti Meatball', 'spaghetti bolognese ada meatball..', 'Mydin Ayer Keroh, 23/12/2021 - 1:00pm - 2:00 pm', 12, 20, '1639481381_spaghet.jpg', 2, '2021-12-14 03:29:41', '2021-12-14 03:29:41'),
(35, 'Sandwich Gemuk', 'sandwich inti telur, tomato, salad dan keju. Sedap....', 'Mydin Ayer Keroh, 24/12/2021 - 1:00pm - 3:00pm', 4.5, 15, '1639481483_R2390-photo-final-2.jpg', 2, '2021-12-14 03:31:23', '2021-12-14 03:31:23'),
(36, 'Kek coklat moist', 'Kek coklat moist.... meleleh sedap', 'Depan Bank Islam Ayer Keroh, 20/1/2022 - 3:00pm - 5:00pm', 7, 25, '1639596381_kek-coklat-moist-resipi-foto-utama.jpg', 3, '2021-12-15 11:26:21', '2021-12-15 11:26:21'),
(37, 'LAKSA PENANG VIRAL!!!', 'Laksa Penang... pekat viral.. dapatkan sementara stok masih ada', 'UTEM SATRIA , ISNIN - JUMAAT, 11:00am - 1:00pm', 6, 15, '1639596524_a3fd30_cec848995d4748989da44d90404d679a_mv2.jpg', 3, '2021-12-15 11:28:44', '2021-12-15 11:28:44'),
(38, 'mee goreng', 'mee goreng ayam dan daging', 'utem , 11:00am, 23/12/2021', 6, 15, '1640064315_mee goreng.jpg', 1, '2021-12-20 21:25:15', '2021-12-20 21:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('d4uOs68ErCxCUiYwxUvCdCA1mX1ImmCa5Uu4YjBi', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMkp4dnJZZHNJaXZ1ajVhVEppVm1EbjJKcm5Ld2ptUGFCTFhwRTNCYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkU2pUMmt1MlRnaTdSWS5JRG1OVTN1LnJxTUhMNVpDZnk1TTF5Sm5kcFBWTHlWd2dvc215NFMiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFNqVDJrdTJUZ2k3UlkuSURtTlUzdS5ycU1ITDVaQ2Z5NU0xeUpuZHBQVkx5Vndnb3NteTRTIjt9', 1641300529),
('u0Y12hRPNH6ssAFdZZGKu5togAD1Z5relvxeCqpn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicnByVWhqZHhRZEtaQkhwd01aNVMwYnI5UWpGQVluS0J0ejhCa2lCSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1641233011);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'awfaizzah', 'balqisawfa@gmail.com', NULL, '$2y$10$SjT2ku2Tgi7RY.IDmNU3u.rqMHL5ZCfy5M1yJndpPVLyVwgosmy4S', NULL, NULL, 'Qg4QWsGKBmydTOAEoGXQHBQ9AKIrfbGEXj2AvnKhsEOJTQ0tFWxFBN0kLvXP', NULL, NULL, '2021-10-18 20:29:53', '2021-10-18 23:42:31'),
(2, 'shazliey', 'shazliey@gmail.com', NULL, '$2y$10$E8rL3n9undebRamzQe/1MuxLQk6IZNSzxtJQrFV1My437EXBbsZiG', NULL, NULL, NULL, NULL, NULL, '2021-11-03 20:48:58', '2021-11-03 20:48:58'),
(3, 'syifasadrina', 'syifa@gmail.com', NULL, '$2y$10$7EKVylupoLF1OG7nHyKWP.lkzJ5kf2qn1eeNnlJfk.xMw9/1Hsh0G', NULL, NULL, NULL, NULL, NULL, '2021-12-10 07:21:41', '2021-12-10 07:21:41');

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
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `past_purchases`
--
ALTER TABLE `past_purchases`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `Test` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key01` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `past_purchases`
--
ALTER TABLE `past_purchases`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `past_purchases`
--
ALTER TABLE `past_purchases`
  ADD CONSTRAINT `Test` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `key01` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

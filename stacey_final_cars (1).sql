-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2022 at 07:10 AM
-- Server version: 8.0.29
-- PHP Version: 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stacey_final_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `car_make_id` bigint UNSIGNED DEFAULT NULL,
  `car_make_model_id` bigint UNSIGNED DEFAULT NULL,
  `car_owner_id` bigint UNSIGNED DEFAULT NULL,
  `car_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_cc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_price` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_make_id`, `car_make_model_id`, `car_owner_id`, `car_year`, `engine_cc`, `reg_number`, `car_image`, `car_description`, `min_price`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 6, '2003', '9876', 'km765k', 'Screenshot 2022-09-17 at 12.38.52 PM-1663702383.png', 'km765k', '', '8EHImXKFVJjWOBJ1JE2WBXJXM6ZC7KSC7K3AEFC7V2ANASMRUGl9R4sWqKHFtNNVWOK6JGsA1DSkrKGNHJWNK7EN8H86jXWEDJUKS1', 'admin', '2022-09-20 19:33:03', '2022-09-26 06:57:38'),
(2, 2, 2, 6, '2020', '3044', 'kmf rnj4', 'Screenshot 2022-09-22 at 10.25.08 PM-1664110117.png', 'kmf rnj4', '200000', 'EaBD8eEKZHS6sSSNE34DAAJFN11H1WE7WFR2sKJYE733ENTqFkXEULKBFiEJMnEWuVBG2KTSONW4IHEa6HNRSMWt6NUOVBKDRJEkWC', 'pending', '2022-09-25 12:48:37', '2022-09-25 12:48:37'),
(3, 2, 2, 6, '2022', '8443', 'kmf495', 'Screenshot 2022-09-22 at 10.25.08 PM-1664170143.png', 'kmf495', '40000', '1iWWJ43AE23ICJIBL1XSKsEEFLKVJEJK9TKFWKKW3RoNkYXFrCIJR1SlKZqJ1ejWnOHSWJOS4RHRw7AMeW1t7HKs6FNRWNENwEF0EP', 'admin', '2022-09-26 05:29:03', '2022-09-26 05:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `car_makes`
--

CREATE TABLE `car_makes` (
  `id` bigint UNSIGNED NOT NULL,
  `car_make_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_makes`
--

INSERT INTO `car_makes` (`id`, `car_make_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Subaru', 'kmekdmkdemedkmekdmekded', NULL, NULL),
(2, 'Toyota', 'mkemdekmdekdekdmejnfjrnfjrkwmsws', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_make_modeles`
--

CREATE TABLE `car_make_modeles` (
  `id` bigint UNSIGNED NOT NULL,
  `car_make_id` bigint UNSIGNED DEFAULT NULL,
  `car_make_model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_make_modeles`
--

INSERT INTO `car_make_modeles` (`id`, `car_make_id`, `car_make_model_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Subaru 1', 'qowkekekejmamamsnsnsns', NULL, NULL),
(2, 2, 'Toyota Model 1', 'mmnnbbggass', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_photos`
--

CREATE TABLE `car_photos` (
  `id` bigint UNSIGNED NOT NULL,
  `car_owner_id` bigint UNSIGNED DEFAULT NULL,
  `car_id` bigint UNSIGNED DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_photos`
--

INSERT INTO `car_photos` (`id`, `car_owner_id`, `car_id`, `image_name`, `slug`, `file_size`, `created_at`, `updated_at`) VALUES
(2, 6, 1, 'Screenshot 2022-09-17 at 12.38.52 PM-1663704455.png', 'ESVHNSlN265TZEGWJ7KNMEjFpARKSHKUe1XELOsDJNkAn0H6OK4JCq8AJ9D2oSTV6FKRJB5WwrELmNPKERNtKKISW4sMNNSHkID17R', '0.51', '2022-09-20 20:07:35', '2022-09-20 20:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(6, '2022_09_08_020032_create_sessions_table', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2014_10_12_100000_create_password_resets_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 2),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(11, '2022_09_08_052457_laratrust_setup_tables', 2),
(12, '2022_09_20_212533_create_car_makes_table', 3),
(13, '2022_09_20_212556_create_car_make_modeles_table', 3),
(14, '2022_09_20_212740_create_cars_table', 3),
(15, '2022_09_20_225153_create_car_photos_table', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2022-09-08 02:28:37', '2022-09-08 02:28:37'),
(15, 'create-cars', 'create cars', 'creating cars', '2022-09-20 14:50:43', '2022-09-20 14:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(9, 3),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`, `team_id`) VALUES
(15, 6, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(2, 'administrator', 'Administrator', 'Administrator', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(3, 'user', 'User', 'User', '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(4, 'role_name', 'Role Name', 'Role Name', '2022-09-08 02:28:36', '2022-09-08 02:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 2, 'App\\Models\\User', NULL),
(3, 3, 'App\\Models\\User', NULL),
(4, 4, 'App\\Models\\User', NULL),
(3, 5, 'App\\Models\\User', NULL),
(3, 6, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qTcLYtuT5nETjs9oSbuzEhreRvO7vTNNOhs7VgCE', 6, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoianlUc2tZUGIxQmNQNVl0d0VtRXdMaU9DOWdOVXAxMnJTalV6UWJPSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNjY0MTcwMDY0O319', 1664171690),
('yNMQYBmogqU761vNmUChzhV8EHsCfv8YDLL0ZAin', 6, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicG9qSTNhcDljU21ONjI3eHNSRWdpWXZQOGlWWFJLanB1eEptU0xTZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvdXBsb2FkLWNhciI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjE0MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvY2FyLXByb2ZpbGUvOEVISW1YS0ZWSmpXT0JKMUpFMldCWEpYTTZaQzdLU0M3SzNBRUZDN1YyQU5BU01SVUdsOVI0c1dxS0hGdE5OVldPSzZKR3NBMURTa3JLR05ISldOSzdFTjhIODZqWFdFREpVS1MxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MTp7aTowO3M6NzoibWVzc2FnZSI7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE2NjQxNzQzODA7fX0=', 1664175488);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', '', '', NULL, '$2y$10$B8gFZ.NwE.i4OeIGV9nboe4k/1XkzcbnnmHcP4I9Q5Bc64G4/N60W', NULL, '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(2, 'Administrator', 'administrator@app.com', '', '', NULL, '$2y$10$9kULr5YnVsA3eYz1qbn68OQ72imbmZNe0dhafHYfiJlhBbUVUbn/G', NULL, '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(3, 'User', 'user@app.com', '', '', NULL, '$2y$10$qggBeUuOKLku8GVnp4dFBOnPiPfOst4uS9Ymvc3eHIPCpgWf1oFhS', NULL, '2022-09-08 02:28:36', '2022-09-08 02:28:36'),
(4, 'Role Name', 'role_name@app.com', '', '', NULL, '$2y$10$UmwOmKv.pDkdkXxSCcg7Mej8PjmKgLmTgcpekgjPeD9pElv7SZShC', NULL, '2022-09-08 02:28:37', '2022-09-08 02:28:37'),
(5, ' ', 'stacy@gmail.com', '0722993322', 'tested', NULL, '$2y$10$eC55uM9K3sJz.bWiiQSWIu38EmXDBmvH88JY7UtSCt4EVfA/GLyKe', NULL, '2022-09-08 03:32:12', '2022-09-08 03:32:12'),
(6, 'kim checked', 'intruder@app.com', '0788223322', 'intruder', NULL, '$2y$10$G8iJr0zlxCQX5gr.GqOGZeMgDRMVYjUU0H06nRKu/M3BKrIsgbVO.', NULL, '2022-09-20 09:09:55', '2022-09-20 09:09:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_car_make_id_foreign` (`car_make_id`),
  ADD KEY `cars_car_make_model_id_foreign` (`car_make_model_id`),
  ADD KEY `cars_car_owner_id_foreign` (`car_owner_id`);

--
-- Indexes for table `car_makes`
--
ALTER TABLE `car_makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_make_modeles`
--
ALTER TABLE `car_make_modeles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_make_modeles_car_make_id_foreign` (`car_make_id`);

--
-- Indexes for table `car_photos`
--
ALTER TABLE `car_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_photos_car_owner_id_foreign` (`car_owner_id`),
  ADD KEY `car_photos_car_id_foreign` (`car_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_makes`
--
ALTER TABLE `car_makes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_make_modeles`
--
ALTER TABLE `car_make_modeles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_photos`
--
ALTER TABLE `car_photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_car_make_id_foreign` FOREIGN KEY (`car_make_id`) REFERENCES `car_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_car_make_model_id_foreign` FOREIGN KEY (`car_make_model_id`) REFERENCES `car_make_modeles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_car_owner_id_foreign` FOREIGN KEY (`car_owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_make_modeles`
--
ALTER TABLE `car_make_modeles`
  ADD CONSTRAINT `car_make_modeles_car_make_id_foreign` FOREIGN KEY (`car_make_id`) REFERENCES `car_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_photos`
--
ALTER TABLE `car_photos`
  ADD CONSTRAINT `car_photos_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_photos_car_owner_id_foreign` FOREIGN KEY (`car_owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

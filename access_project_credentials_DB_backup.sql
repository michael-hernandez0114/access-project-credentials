-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 30, 2020 at 07:19 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `access_project_credentials`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loggings`
--

CREATE TABLE `loggings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loggings`
--

INSERT INTO `loggings` (`id`, `user_id`, `project`, `service`, `username`, `created_at`, `updated_at`) VALUES
(1, 3, 'myFirstProject', 'GMAIL', 'user3@email.com', '2020-07-30 05:08:38', '2020-07-30 05:08:38'),
(2, 1, 'myFirstProject', 'GMAIL', 'user3@email.com', '2020-07-30 05:09:12', '2020-07-30 05:09:12'),
(3, 1, 'TimeKeeping', 'Kronos', 'admin', '2020-07-30 05:09:37', '2020-07-30 05:09:37'),
(4, 1, 'myFirstProject', 'GMAIL', 'user3@email.com', '2020-07-30 05:09:38', '2020-07-30 05:09:38'),
(5, 2, 'myFirstProject', 'GMAIL', 'user3@email.com', '2020-07-30 05:10:05', '2020-07-30 05:10:05'),
(6, 2, 'TimeKeeping', 'Kronos', 'admin', '2020-07-30 05:10:06', '2020-07-30 05:10:06'),
(7, 2, 'Payroll', 'Money Processing', 'payroll_admin', '2020-07-30 05:10:42', '2020-07-30 05:10:42'),
(8, 2, 'TimeKeeping', 'Kronos', 'admin', '2020-07-30 05:10:43', '2020-07-30 05:10:43'),
(9, 2, 'myFirstProject', 'GMAIL', 'user3@email.com', '2020-07-30 05:10:44', '2020-07-30 05:10:44'),
(10, 3, 'Payroll', 'Money Processing', 'payroll_admin', '2020-07-30 05:13:11', '2020-07-30 05:13:11'),
(11, 3, 'TimeKeeping', 'Kronos', 'admin', '2020-07-30 05:13:12', '2020-07-30 05:13:12'),
(12, 3, 'myFirstProject', 'GMAIL', 'user3@email.com', '2020-07-30 05:13:13', '2020-07-30 05:13:13');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_26_105747_create_projects_table', 1),
(5, '2020_07_26_145811_create_loggings_table', 1);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `project`, `service`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 3, 'myFirstProject', 'GMAIL', 'user3@email.com', 'thispAssword!!', '2020-07-30 05:08:33', '2020-07-30 05:08:33'),
(2, 1, 'TimeKeeping', 'Kronos', 'admin', '390nidfn03', '2020-07-30 05:09:29', '2020-07-30 05:09:29'),
(3, 2, 'Payroll', 'Money Processing', 'payroll_admin', 'uneinv90rn03', '2020-07-30 05:10:37', '2020-07-30 05:10:37');

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
(1, 'user1', 'user1@email.com', NULL, '$2y$10$EQaDzZH6YtA0nMBwtQkknuPOnH5JSxT6NsY6TM.84UfwIfc/PW14y', NULL, '2020-07-30 05:07:17', '2020-07-30 05:07:17'),
(2, 'user2', 'user2@email.com', NULL, '$2y$10$vrxd8t9NwhrbiqBaEEcyGeFyVcjVj2hguEZ9dAAPgDDnt4Mf/BcJO', NULL, '2020-07-30 05:07:43', '2020-07-30 05:07:43'),
(3, 'user3', 'user3@email.com', NULL, '$2y$10$HAIZJ.ooUcBNOGojANs9HuJPuYcdXGwYVvvQsbVjlytpJ5nhfbFYi', NULL, '2020-07-30 05:08:08', '2020-07-30 05:08:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loggings`
--
ALTER TABLE `loggings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loggings_user_id_foreign` (`user_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `loggings`
--
ALTER TABLE `loggings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loggings`
--
ALTER TABLE `loggings`
  ADD CONSTRAINT `loggings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

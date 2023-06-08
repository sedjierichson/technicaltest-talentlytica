-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 08, 2023 at 03:11 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technicaltest_talentlytica`
--

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_06_07_125011_create_nilai_pesertas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pesertas`
--

CREATE TABLE `nilai_pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_x` int(11) NOT NULL,
  `nilai_y` int(11) NOT NULL,
  `nilai_z` int(11) NOT NULL,
  `nilai_w` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_pesertas`
--

INSERT INTO `nilai_pesertas` (`id`, `nama`, `email`, `nilai_x`, `nilai_y`, `nilai_z`, `nilai_w`, `created_at`, `updated_at`) VALUES
(3, 'Arlie Cormier', 'elmira.mcdermott@example.org', 16, 7, 12, 4, '2023-06-07 05:59:17', '2023-06-08 05:33:12'),
(5, 'Nesciunt voluptatem', 'lasojom@mailinator.com', 5, 2, 15, 13, '2023-06-07 20:04:48', '2023-06-08 05:26:06'),
(6, 'Velit ea est volupt', 'gikehexoh@mailinator.com', 15, 10, 5, 10, '2023-06-07 20:49:40', '2023-06-07 20:49:40'),
(7, 'Ipsa nihil in elit', 'rafirevin@mailinator.com', 4, 11, 2, 3, '2023-06-07 21:20:15', '2023-06-07 21:20:15'),
(8, 'Perspiciatis incidu', 'doqoz@mailinator.com', 24, 10, 2, 13, '2023-06-08 02:00:25', '2023-06-08 02:00:25'),
(9, 'Nihil quia in dolore', 'ceneselum@mailinator.com', 33, 22, 17, 4, '2023-06-08 02:00:30', '2023-06-08 02:00:30'),
(10, 'Quae voluptatem ex', 'ryjeloxi@mailinator.com', 22, 21, 12, 1, '2023-06-08 04:19:22', '2023-06-08 04:19:22'),
(11, 'Prof. Janick Murphy Sr.', 'stracke.helen@example.org', 10, 22, 5, 6, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(12, 'Lou Crooks Sr.', 'sophie82@example.net', 5, 1, 12, 1, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(13, 'Furman Hermann', 'satterfield.kailyn@example.com', 25, 17, 9, 9, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(14, 'Dr. Norberto Schultz', 'rath.hermina@example.org', 1, 5, 9, 2, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(15, 'Mr. Tod Mraz', 'weimann.abraham@example.org', 22, 10, 6, 6, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(16, 'Catharine Reichel', 'abshire.vince@example.net', 22, 9, 2, 1, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(17, 'Vivian Green', 'dangelo.roob@example.org', 14, 14, 2, 1, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(18, 'Jaren Wintheiser', 'neal.torp@example.com', 10, 21, 7, 11, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(19, 'Enrique Schimmel III', 'arianna.huel@example.net', 26, 18, 15, 7, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(20, 'Jocelyn Rowe', 'rae40@example.com', 8, 2, 8, 11, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(21, 'Cicero Feest', 'madie.weimann@example.org', 6, 18, 1, 5, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(22, 'Miss Drew Adams DVM', 'medhurst.burdette@example.com', 13, 13, 7, 13, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(23, 'Bertrand Koelpin', 'luella.bednar@example.net', 28, 22, 10, 4, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(24, 'Mr. Gonzalo Braun', 'kulas.josephine@example.org', 33, 12, 14, 6, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(25, 'Dr. Eliseo Bruen PhD', 'kira.gerlach@example.com', 28, 16, 17, 7, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(26, 'Mrs. Emilia Baumbach', 'gcollier@example.org', 9, 17, 1, 5, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(27, 'Dr. Dewayne McKenzie', 'ismael.feeney@example.net', 4, 20, 2, 3, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(28, 'Mr. Christian Cormier V', 'quigley.merritt@example.com', 2, 11, 2, 4, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(29, 'Mr. Rod Tromp', 'harvey.nyah@example.org', 11, 14, 3, 3, '2023-06-08 08:03:02', '2023-06-08 08:03:02'),
(30, 'Nathan King V', 'rohan.mallie@example.net', 33, 21, 13, 13, '2023-06-08 08:03:02', '2023-06-08 08:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aniyah Parisian', 'vswift@example.org', '$2y$10$WcwVg9jATf5N50xU1Zwl1eYhjuNTLLS649//PluR.UCMQDSk4xJyS', 0, NULL, '2023-06-07 05:14:10', '2023-06-07 05:14:10'),
(2, 'Vada Turcotte', 'pkrajcik@example.org', '$2y$10$0izkTJtz/VYQKQEMpnYKKebq0LZECStiGJC3DIyt7gRD0pdWo/ZO6', 0, NULL, '2023-06-07 05:14:10', '2023-06-07 05:14:10'),
(3, 'Mrs. Kallie Bogan Sr.', 'hayden68@example.net', '$2y$10$yqxsNDVb9v5A/RJfUoBawetcHjXmEHmj5jtnUxUEzaA3r7H/j.lDy', 0, NULL, '2023-06-07 05:14:10', '2023-06-07 05:14:10'),
(4, 'Admin 1', 'admin@gmail.com', '$2y$10$yqxsNDVb9v5A/RJfUoBawetcHjXmEHmj5jtnUxUEzaA3r7H/j.lDy', 1, NULL, '2023-06-07 05:14:10', '2023-06-07 05:14:10'),
(5, 'Demetrius Casper', 'charity.maggio@example.com', '$2y$10$SkDNPyJyOJlRg/Zei/zWqucKNHzVy40F3cO1thAFcMbvvl0gm3cvK', 0, NULL, '2023-06-07 05:59:01', '2023-06-07 05:59:01'),
(6, 'Adrian Hahn', 'strosin.evans@example.com', '$2y$10$rymorYutKxlkC8cmDldv/Oo/j0ygnipgwWM4TbC8nuR1ivi6UqEdy', 0, NULL, '2023-06-07 05:59:01', '2023-06-07 05:59:01'),
(7, 'Damien O\'Conner', 'brennan.howe@example.net', '$2y$10$G4jV3FK83zjnxsDvrLrCtOEmbyzwzlrImT3qJ2nc91bh7Txapa4di', 0, NULL, '2023-06-07 05:59:01', '2023-06-07 05:59:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_pesertas`
--
ALTER TABLE `nilai_pesertas`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nilai_pesertas`
--
ALTER TABLE `nilai_pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

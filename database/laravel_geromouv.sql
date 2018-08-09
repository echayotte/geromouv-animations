-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2018 at 09:29 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_geromouv`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gym douce ludique', NULL, NULL),
(2, 'Gym Pilates', NULL, NULL),
(3, 'Marche douce avec bâtons', NULL, NULL),
(4, 'Marche Nordique douce', NULL, NULL),
(5, 'Marche Nordique active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activity_member`
--

CREATE TABLE `activity_member` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_member`
--

INSERT INTO `activity_member` (`id`, `activity_id`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('Femme','Homme') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mutual_id` int(10) UNSIGNED NOT NULL,
  `pension_id` int(10) UNSIGNED NOT NULL,
  `ag2r` enum('oui','non') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `lastname`, `firstname`, `birthday`, `gender`, `address`, `zipcode`, `city`, `email`, `phone`, `cellphone`, `mutual_id`, `pension_id`, `ag2r`, `created_at`, `updated_at`) VALUES
(1, 'wieber', 'Marie-Suzanne', '1947-07-23', 'Femme', '45 rue Robert giraudineau', 94300, 'Vincennes', 'la_zon@yahoo.fr', NULL, '0143650541', 3, 7, NULL, '2018-08-07 22:00:00', '2018-08-07 22:00:00'),
(2, 'wieber', 'Marion', '1973-01-31', 'Femme', '8 rue saulpic', 94300, 'Vincennes', 'marion@gmail.com', NULL, '0682052485', 2, 13, NULL, '2018-08-07 22:00:00', '2018-08-07 22:00:00');

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
(3, '2018_07_30_120041_create_members_table', 1),
(4, '2018_07_31_113204_create_mutuals_table', 1),
(5, '2018_07_31_115439_create_pensions_table', 1),
(6, '2018_07_31_121700_create_foreignkeys_table', 1),
(7, '2018_07_31_115441_create_activities_table', 2),
(8, '2018_07_31_115500_create_activity_member_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mutuals`
--

CREATE TABLE `mutuals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mutuals`
--

INSERT INTO `mutuals` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AG2R', NULL, NULL),
(2, 'ALLIANZ', NULL, NULL),
(3, 'APRIA', NULL, NULL),
(4, 'APRIL', NULL, NULL),
(5, 'ARRCO', NULL, NULL),
(6, 'BPCE Mutuelle', NULL, NULL),
(7, 'CARSAT', NULL, NULL),
(8, 'CNAV', NULL, NULL),
(9, 'EOVI', NULL, NULL),
(10, 'FEMARA', NULL, NULL),
(11, 'GROUPAMA', NULL, NULL),
(12, 'Harmonie mutuelle', NULL, NULL),
(13, 'HUMANIS', NULL, NULL),
(14, 'Intégrance', NULL, NULL),
(15, 'IPSEL- ISANTE', NULL, NULL),
(16, 'MACIF/Almerys', NULL, NULL),
(17, 'MACSF', NULL, NULL),
(18, 'MALAKOFF', NULL, NULL),
(19, 'MGEN', NULL, NULL),
(20, 'MGEN/AG2R', NULL, NULL),
(21, 'MNH Mutuelle Hospitalière', NULL, NULL),
(22, 'Mutualité hospitalier', NULL, NULL),
(23, 'Pacifia', NULL, NULL),
(24, 'PRAGA/APRIA', NULL, NULL),
(25, 'Prévifrance', NULL, NULL),
(26, 'UMR', NULL, NULL),
(27, 'VIA SANTE', NULL, NULL),
(28, 'Via Santé', NULL, NULL),
(29, 'Via santé-AG2R', NULL, NULL),
(30, 'MNH', NULL, NULL);

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
-- Table structure for table `pensions`
--

CREATE TABLE `pensions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pensions`
--

INSERT INTO `pensions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AG2R', NULL, NULL),
(2, 'AG2R /ARRCO', NULL, NULL),
(3, 'AG2R MSA RSI', NULL, NULL),
(4, 'AGIRC ARRCO', NULL, NULL),
(5, 'ARRCO/MSA', NULL, NULL),
(6, 'Ayant droit (épouse)', NULL, NULL),
(7, 'Ayant droit ?', NULL, NULL),
(8, 'CARMF', NULL, NULL),
(9, 'CARPIMNO', NULL, NULL),
(10, 'CARSAT', NULL, NULL),
(11, 'CARSAT / AG2R', NULL, NULL),
(12, 'CNAV', NULL, NULL),
(13, 'CNRACL - Caisse retraite Hospitaliers Territoriaux', NULL, NULL),
(14, 'CRAM', NULL, NULL),
(15, 'MGEN', NULL, NULL),
(16, 'MGEN/AG2R', NULL, NULL),
(17, 'MSA', NULL, NULL),
(18, 'PRO BTP', NULL, NULL),
(19, 'RSI', NULL, NULL),
(20, 'USA GROUPAMA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_member`
--
ALTER TABLE `activity_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`activity_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`),
  ADD KEY `members_lastname_index` (`lastname`),
  ADD KEY `members_mutual_id_foreign` (`mutual_id`),
  ADD KEY `members_pension_id_foreign` (`pension_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutuals`
--
ALTER TABLE `mutuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pensions`
--
ALTER TABLE `pensions`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `activity_member`
--
ALTER TABLE `activity_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mutuals`
--
ALTER TABLE `mutuals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pensions`
--
ALTER TABLE `pensions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_member`
--
ALTER TABLE `activity_member`
  ADD CONSTRAINT `activity_member_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activity_member_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_mutual_id_foreign` FOREIGN KEY (`mutual_id`) REFERENCES `mutuals` (`id`),
  ADD CONSTRAINT `members_pension_id_foreign` FOREIGN KEY (`pension_id`) REFERENCES `pensions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

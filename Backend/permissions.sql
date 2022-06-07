-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2022 at 12:04 AM
-- Server version: 5.7.35
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glover_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage-fleet', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(2, 'view-fleets', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(3, 'manager-fleets', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(4, 'my-subscription', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(5, 'my-earning', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(6, 'manage-subscriptions', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(7, 'view-vendor-types', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(8, 'view-zones', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(9, 'view-banners', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(10, 'view-cities', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(11, 'view-states', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(12, 'view-countries', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(13, 'view-taxi', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(14, 'view-taxi-vehicle-types', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(15, 'view-taxi-vehicles', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(16, 'view-car-makes', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(17, 'view-car-models', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(18, 'view-taxi-pricing', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(19, 'view-taxi-settings', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(20, 'view-taxi-payment-methods', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(21, 'view-taxi-zones', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(22, 'manage-payout', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(23, 'view-reviews', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(24, 'view-operations', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(25, 'view-settings', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(26, 'view-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(27, 'view-payout', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(28, 'view-earning', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(29, 'view-subscription', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(30, 'manage-vendor', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(31, 'view-vendors', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(32, 'view-orders', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(33, 'view-categories', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(34, 'view-favourites', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(35, 'view-package-types', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(36, 'view-coupon-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(37, 'view-referral-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(38, 'view-commission-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(39, 'view-vendor-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(40, 'view-customers-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(41, 'view-subscriptions-report', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(42, 'view-users', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(43, 'view-delivery-addresses', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35'),
(44, 'view-coupons', 'web', '2022-03-25 23:56:35', '2022-03-25 23:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-12-28 11:57:58', '2020-12-28 11:57:58'),
(2, 'manager', 'web', '2020-12-28 11:57:58', '2020-12-28 11:57:58'),
(3, 'client', 'web', '2020-12-28 11:57:58', '2020-12-28 11:57:58'),
(4, 'driver', 'web', '2020-12-28 11:57:58', '2020-12-28 11:57:58'),
(5, 'city-admin', 'web', '2020-12-28 11:57:58', '2020-12-28 11:57:58'),
(6, 'fleet-manager', 'web', '2020-12-28 11:57:58', '2020-12-28 11:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(3, 1),
(6, 1),
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
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(3, 2),
(4, 2),
(5, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(2, 5),
(26, 5),
(27, 5),
(28, 5),
(29, 5),
(30, 5),
(31, 5),
(32, 5),
(33, 5),
(34, 5),
(35, 5),
(36, 5),
(37, 5),
(38, 5),
(39, 5),
(40, 5),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(1, 6),
(2, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

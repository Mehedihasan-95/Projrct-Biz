-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 04:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11
-- local

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biz-formaiton-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `info`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Aiyana Tromp V', 'ophelia.mitchell@example.com', '2827 Ollie Point\nAlaynafort, CA 15429-1060', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(2, 'Darlene Runte', 'fanny93@example.org', '36124 Kirlin Islands\nLincolnview, NC 40747-1881', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(3, 'Mrs. Imelda Aufderhar', 'madonna.rosenbaum@example.net', '8532 Chandler Mountain Apt. 577\nMargeville, TX 83154-4408', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(4, 'Suzanne Emmerich III', 'hauck.yasmeen@example.com', '552 Eloise Shore\nAntoninaport, OH 40771-3271', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(5, 'Shany Torphy', 'lschmidt@example.org', '31496 Schuppe Corners Apt. 249\nEast Raulport, KY 50502-5275', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(6, 'Liza Cartwright', 'nickolas58@example.com', '369 Schowalter Way\nJosefatown, OR 10302-0301', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(7, 'Gladyce Swaniawski', 'zmurazik@example.net', '924 Spinka Walks\nWest Roma, WV 34595', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(8, 'Dr. Rick Balistreri V', 'uschiller@example.net', '50069 Flatley Center Suite 869\nShaynehaven, KY 17417-5197', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(9, 'Ms. Adeline Greenfelder Sr.', 'mokuneva@example.net', '3268 Kuhic Court Apt. 555\nBrendenchester, PA 49695', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(10, 'Taylor Paucek', 'raphael.heller@example.org', '628 Wintheiser Bridge\nWest Alisafurt, SD 97117', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(11, 'Mr. Jonu Wiegand', 'obie17@example.com', '409 Arielle Road Suite 862\nNorth Viviane, MA 84404', '2020-10-23 05:49:45', '2020-10-23 05:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer_forms`
--

CREATE TABLE `customer_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trackingCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerId` bigint(20) UNSIGNED DEFAULT NULL,
  `formStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_forms`
--

INSERT INTO `customer_forms` (`id`, `trackingCode`, `city`, `serviceName`, `customerId`, `formStatus`, `data`, `created_at`, `updated_at`) VALUES
(1, '7', 'California', 'service df', 5, '4', 'Libero vel modi officia voluptatum ea.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(2, '6', 'Delaware', 'service df', 7, '0', 'Illo eum atque soluta sit voluptate.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(3, '3', 'New York', 'service df', 9, '4', 'Impedit temporibus incidunt exercitationem.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(4, '5', 'Nevada', 'service df', 9, '0', 'Alias excepturi qui et soluta aliquid.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(5, '5', 'Wyoming', 'service df', 9, '3', 'Iste mollitia porro nostrum quo.', '2020-10-23 05:36:57', '2020-10-23 05:36:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_23_022053_create_customers_table', 1),
(5, '2020_10_23_022205_create_customer_forms_table', 1),
(6, '2020_10_23_022216_create_packages_table', 1),
(7, '2020_10_23_022242_create_package_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `packageName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `state`, `serviceName`, `packageName`, `info`, `created_at`, `updated_at`) VALUES
(1, 'Michigan', 'service df', 'quas', 'Tenetur voluptates asperiores velit.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(2, 'New Mexico', 'service df', 'consequatur', 'Assumenda et omnis quo fuga.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(3, 'New Mexico', 'service df', 'sed', 'Quia impedit enim esse doloribus sequi hic illo.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(4, 'Arizona', 'service df', 'dicta', 'Est et placeat nobis. Dicta placeat id aut aut.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(5, 'Massachusetts', 'service df', 'vero', 'Non animi voluptatem fugit.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(6, 'West Virginia', 'service df', 'quisquam', 'Magnam eos rem quos est.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(7, 'Illinois', 'service df', 'itaque', 'Eum inventore sed laborum porro eligendi non.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(8, 'Rhode Island', 'service df', 'natus', 'Quae et sint nesciunt dolor ad ut.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(9, 'Iowa', 'service df', 'necessitatibus', 'Asperiores ea dolorem libero libero soluta.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(10, 'New York', 'service df', 'molestiae', 'Consequatur unde laudantium ea illum.', '2020-10-23 05:36:57', '2020-10-23 05:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packageID` bigint(20) UNSIGNED NOT NULL,
  `parentID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `packageID`, `parentID`, `info`, `created_at`, `updated_at`) VALUES
(1, 5, '4', 'Nihil consequatur molestiae reprehenderit eos.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(2, 8, '3', 'Eveniet qui voluptatibus quia quia.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(3, 8, '7', 'Harum voluptates officiis nostrum ut vero.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(4, 6, '7', 'Illum quibusdam labore voluptatem ut officia.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(5, 2, '9', 'Repellat neque qui at vel rerum eius facere.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(6, 5, '7', 'Neque corporis odit et.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(7, 1, '5', 'Earum nulla fugiat nostrum minima cupiditate.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(8, 8, '7', 'Quasi ut similique id ut unde nam dolorem.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(9, 1, '8', 'A esse quasi voluptatibus qui.', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(10, 10, '5', 'Qui quam velit ducimus accusantium sit.', '2020-10-23 05:36:57', '2020-10-23 05:36:57');

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
(1, 'Mrs. Alexandra Anderson', 'daugherty.gavin@example.net', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8KKKSJNt6q', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(2, 'Mrs. Ona Monahan I', 'okon.olin@example.com', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6ksoQvXXfF', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(3, 'Mrs. Melba Berge', 'simone.shields@example.com', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5d65bk2j4A', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(4, 'Manuel Emard', 'estel72@example.net', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RVVSimKSqm', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(5, 'Leland Mayer', 'fzulauf@example.net', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'n17TLg7liI', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(6, 'Prof. Brennan Hermann I', 'toy.zelma@example.org', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nmZfy2OdO2', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(7, 'Buford Bartoletti', 'marcia71@example.com', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5URw2Y1OFf', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(8, 'Selena Roob', 'zfeest@example.net', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pSn4R8b0Su', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(9, 'Mr. Gilberto Windler', 'kyleigh.yost@example.org', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jXMvdJayyJ', '2020-10-23 05:36:57', '2020-10-23 05:36:57'),
(10, 'Mr. Pierre Streich', 'jtillman@example.net', '2020-10-23 05:36:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AsCDI3M3c1', '2020-10-23 05:36:57', '2020-10-23 05:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_forms`
--
ALTER TABLE `customer_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_forms_customerid_foreign` (`customerId`);

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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_details_packageid_foreign` (`packageID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_forms`
--
ALTER TABLE `customer_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_forms`
--
ALTER TABLE `customer_forms`
  ADD CONSTRAINT `customer_forms_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_details`
--
ALTER TABLE `package_details`
  ADD CONSTRAINT `package_details_packageid_foreign` FOREIGN KEY (`packageID`) REFERENCES `packages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

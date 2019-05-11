-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 06:36 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ishika wedding', 'Model Ishika Khan\'s wedding photo shot on Radison Model Ishika Khan\'s wedding photo shot on Radison Model Ishika Khan\'s wedding photo shot on Radison Model Ishika Khan\'s wedding photo shot on Radison Model Ishika Khan\'s wedding photo shot on Radison', '2018-07-25 13:30:39', '2018-07-25 13:30:39'),
(2, 'Taskin Modeling', 'Where the COUNT function, seeded with *, will return a count of rows/records in table tableName. This data must then retrieved from the database and routed to the presentation layer of the application. This is where the application handles user requests made by users via web pages or other technologies, and responds in much the same way.\r\n\r\nThe diagram above refers to JavaServer Pages used in Java-based web applications. The page How can I make my first JSP page using MySQL database? provides a very detailed way of how you can do this in Java', '2018-07-26 14:30:37', '2018-07-26 14:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photographerId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `albumId` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `photographerId`, `categoryId`, `albumId`, `description`, `image`, `location`, `created_at`, `updated_at`) VALUES
(8, 'Taskin Weiding', 2, 1, 2, 'photophotophotophoto', 'public/Image/03-Bougainvillea-ekobonsai.jpg', 'Dhaka, Bangladesh', '2018-07-27 13:00:57', '2018-07-27 13:00:57'),
(9, 'Taskin Weiding', 2, 1, 2, 'photophotophotophoto', 'public/Image/12512561_549343718568948_8593096857168053810_n.jpg', 'Dhaka, Bangladesh', '2018-07-27 13:00:57', '2018-07-27 13:00:57'),
(10, 'dhaka', 2, 1, 1, 'image1', 'public/Image/0004_image_box_photoiris_web-1920x1280.jpg', 'dhaka', '2018-07-30 11:08:15', '2018-07-30 11:08:15'),
(11, 'Image1', 2, 2, 2, 'Image2', 'public/Image/25-Beata-Blaszczyk-Poland.jpg', 'dhaka', '2018-07-30 11:10:18', '2018-07-30 11:10:18'),
(12, 'Image2', 2, 2, 2, 'Images', 'public/Image/0004_image_box_photoiris_web-1920x1280.jpg', 'dhaka', '2018-07-30 11:11:58', '2018-07-30 11:11:58'),
(13, 'Image2', 2, 2, 2, 'Images', 'public/Image/14045534_1641415079505362_6306595795527150320_n.jpg', 'dhaka', '2018-07-30 11:11:58', '2018-07-30 11:11:58'),
(14, 'Image2', 2, 2, 2, 'Images', 'public/Image/17349580_1753690854944450_3555496078971184275_o.jpg', 'dhaka', '2018-07-30 11:11:58', '2018-07-30 11:11:58'),
(15, 'Image2', 2, 2, 2, 'Images', 'public/Image/18118677_1773071783006357_4003068009783669545_n.jpg', 'dhaka', '2018-07-30 11:11:58', '2018-07-30 11:11:58'),
(16, 'dhaka', 2, 2, 2, 'potrait', 'public/Image/23755453_1879702665676601_9218897427405263126_n.jpg', 'dhaka', '2018-07-30 11:13:38', '2018-07-30 11:13:38'),
(17, 'dhaka', 2, 2, 2, 'potrait', 'public/Image/18700255_1789734848006717_3005716405654223556_n.jpg', 'dhaka', '2018-07-30 11:13:38', '2018-07-30 11:13:38'),
(18, 'dhaka', 2, 2, 2, 'potrait', 'public/Image/20368991_1825782731068595_3172324379326616179_o.jpg', 'dhaka', '2018-07-30 11:13:38', '2018-07-30 11:13:38'),
(19, 'dhaka', 2, 2, 2, 'potrait', 'public/Image/20429987_1826857410961127_5086275915076288561_n.jpg', 'dhaka', '2018-07-30 11:13:38', '2018-07-30 11:13:38'),
(20, 'dhaka', 2, 1, 1, 'dhaka', 'public/Image/black-and-white-nature-1385365889AKl.jpg', 'dhaka', '2018-07-31 05:01:40', '2018-07-31 05:01:40');

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
(3, '2018_07_15_131633_entrust_setup_tables', 1),
(4, '2018_07_25_191226_create_albums_table', 2),
(5, '2018_07_25_212113_create_images_table', 3),
(6, '2018_07_25_213501_create_images_table', 4),
(7, '2018_07_27_194214_create_profiles_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-read', 'Display Role Listing', 'See only Listing Of Role', '2018-07-15 10:02:23', '2018-07-15 10:02:23'),
(2, 'role-create', 'Create Role', 'Create New Role', '2018-07-15 10:02:23', '2018-07-15 10:02:23'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2018-07-15 10:02:23', '2018-07-15 10:02:23'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2018-07-15 10:02:23', '2018-07-15 10:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `photographerId` int(11) NOT NULL,
  `facebookId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagramId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `photographerId`, `facebookId`, `instagramId`, `bio`, `image`, `location`, `created_at`, `updated_at`) VALUES
(1, 2, 'https://www.facebook.com/rajwan.raju', 'https://www.instagram.com/rajwanraju/', 'The default migration takes advantage of onDelete(\'cascade\') clauses within the pivot tables to remove relations when a parent record is deleted. If for some reason you cannot use cascading deletes in your database, the EntrustRole and EntrustPermission classes, and the HasRole trait include event listeners to manually delete records in relevant pivot tables. In the interest of not accidentally deleting data, the event listeners will not delete pivot data if the model uses soft deleting. However, due to limitations in Laravel\'s event listeners, there is no way to distinguish between a call to delete() versus a call to forceDelete(). For this reason, before you force delete a model, you must manually delete any of the relationship data (unless your pivot tables uses cascading deletes). For example:', 'public/Image/03-Bougainvillea-ekobonsai.jpg', 'Dhaka, Bangladesh', '2018-07-27 13:55:11', '2018-07-27 13:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', NULL, NULL),
(2, 'general-user', 'User', 'All general user Are Here', '2018-07-25 11:24:28', '2018-07-25 11:24:28'),
(3, 'photographer', 'photographer', 'All photographer Are Here', '2018-07-25 11:25:49', '2018-07-25 11:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 2),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rajwan', 'admin@gmail.com', '$2y$10$dm.E2I5hqJPuWYHA/GVry.rYMvkhrqKt/ReF7XXd.ShmD8vJO8a7i', 'hSCi0mIM2V6rI1oAWWo5VVCnI9GnH3ZmyHPKpWawxAGwLDr1ga7naUDgvts1', '2018-07-15 10:02:24', '2018-07-15 10:02:24'),
(2, 'robin', 'robin@gmail.com', '$2y$10$tR9sDdyoveSmmRi6AofO6OHDMvrnKwNXxsrpYOZVxAWq00uX4mZ8S', 'vY1GaxJlI2gwITc1dYzzUP0qw4uTwLswD2WWwFeWTUlC4pS5xIBoWnnVZRRv', '2018-07-25 12:19:45', '2018-07-25 12:19:45'),
(3, 'afreen', 'afreen@gmail.com', '$2y$10$30ZkC5c46dhF4Dv3HJHElOcJPmNOIXF3cNvTlIUYUzmLBjXYJ/aJq', NULL, '2018-07-29 12:17:58', '2018-07-29 12:17:58'),
(4, 'anika', 'anika@gmail.com', '$2y$10$RPf6dFM73RbAj8fKSpVCIO.w4/U6YIpz7QQFloZ1l2A72RXoWvMiy', NULL, '2018-07-29 12:18:36', '2018-07-29 12:18:36'),
(5, 'esha', 'esha@gmail.com', '$2y$10$vykfDMdT.ffIIl.qPmiFb.XYdwXPIcfeOaSkQDOxJ6GOpILpn4k3S', 'Do1TZynvQTMe7PpcbWwiyxrUEJZlVfA05ysrXFPxcHyo2Nr0E8QZA9qOCRHH', '2018-07-29 12:19:09', '2018-07-29 12:19:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

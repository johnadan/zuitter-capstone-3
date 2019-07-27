-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 06:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_user`
--

CREATE TABLE `comment_user` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_02_01_131248_create_comments_table', 1),
(16, '2019_02_02_200323_create_posts_table', 1),
(17, '2019_02_10_093312_create_post_user_table', 1),
(18, '2019_02_10_093425_create_comment_user_table', 1);

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
('mclemadan@gmail.com', '$2y$10$PvAABj/prK6VjAQ5D/2se.GoQd.0MiC0ff06fV74caQmP6BeXPgju', '2019-02-16 08:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'Happy coding! :D', 2, '2019-02-25 06:57:55', '2019-02-27 19:47:15'),
(22, 'Welcome to our growing network of web developers!', 2, '2019-02-26 07:58:07', '2019-02-27 19:47:03'),
(24, 'To my class B6NC, feel free to ask questions about topics you\'re concerned about. Thanks! :)', 2, '2019-02-27 17:37:36', '2019-02-27 19:39:16'),
(31, 'Hello! I\'m from B6NC :)', 7, '2019-02-27 18:52:33', '2019-02-27 19:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin_admin@admin.admin', '$2y$10$yB6gqsIrvPyCS9NA/8vkeeL3RBZrLFH0.sp/VvUqJO2KmTahgwhru', 1, 'uaCUdE5Alhus6xpr4GepvEX3D9eq1QlXyLRLO8fMTSzjz6nhgl8YVv2AzeZn', '2019-02-06 03:27:47', '2019-02-06 03:27:47'),
(2, 'Billy', 'Arante', 'billyarante', 'billy.arante@tuitt.com', '$2y$10$nryYDQsqDXVT8AGETGHOyeP7TY/m0o5X2s18F7YyJS5gOWv8xX7PS', 0, 'qwPAUR1FH9zvVBNCLRbv3Ag67AvJuoKOnZqTs6AiQ88x1L6oerTEizNeQ4d0', '2019-02-08 01:45:31', '2019-02-27 19:35:39'),
(3, 'Allan', 'Beraquit', 'allanberaquit', 'allan.beraquit@tuitt.com', '$2y$10$UNp4z0IT/2vru1wT2XdIzeuSTO6PY4D320dWGhQBvYxnrtQQLlbke', 0, 'OhPwI36vy2Hdz1XluJ4bn6YsUpwI0aV2FzBp5jMIk9xINkMfe4NlXuYXq6pz', '2019-02-10 03:48:09', '2019-02-27 19:35:06'),
(4, 'Charles', 'Quimpo', 'charlesquimpo', 'charles.quimpo@tuitt.com', '$2y$10$m1nXodj0ufnSFvUk6tDmaOyaRy8mLcsxLraoGrQ7OvOVkq6N3BR/W', 0, NULL, '2019-02-10 06:38:35', '2019-02-27 19:22:20'),
(5, 'Van Tristan', 'Calimlim', 'vantristancalimlim', 'vantristan.calimlim@tuitt.com', '$2y$10$vIXw6QCLczEJvWlUnW1jr.D694qTyGDi2YyupQjKlZjtJqzr21/Jm', 0, '8XwC97fafCQASmL53GB7t83HurQFmYvzyHD2LAd6AcKrmoTiZkl32DE0NPmG', '2019-02-24 07:08:27', '2019-02-27 19:34:36'),
(6, 'Christine', 'Llapitan', 'chrisllapitan', 'christine.llapitan@tuitt.com', '$2y$10$tshY6uQC0FN3NF8gP9Pz8uwu0lPOtPHkZugIJQF85pQ5Vdm.X.75C', 0, 'xIJLepQtzhUWexiwDr2XpEQLTmOBb7enSqaRhpRHBycArq5ktRUbvoHgLEiq', '2019-02-24 07:09:36', '2019-02-27 19:33:45'),
(7, 'John McLem', 'Adan', 'johnmclemadan', 'john@baytech.ph', '$2y$10$pRQGwualElkHKgffXvZHv.MnnZ/9cPdMxslzbEO3mtWGKgBVo8Lxa', 0, '5IqLmxmMjePhiKrTUintNeYBE5j1r2nbNmYQGbzNWuxcyyICCl27iLvl8Yem', '2019-02-27 04:31:31', '2019-02-27 04:31:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `comment_user`
--
ALTER TABLE `comment_user`
  ADD KEY `comment_user_user_id_foreign` (`user_id`),
  ADD KEY `comment_user_comment_id_foreign` (`comment_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD KEY `post_user_user_id_foreign` (`user_id`),
  ADD KEY `post_user_post_id_foreign` (`post_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `comment_user`
--
ALTER TABLE `comment_user`
  ADD CONSTRAINT `comment_user_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

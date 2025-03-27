-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2025 at 06:55 PM
-- Server version: 10.3.39-MariaDB-log
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp5114_team3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogarticles`
--

CREATE TABLE `blogarticles` (
  `blogId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `blogAuthorId` int(11) NOT NULL,
  `illustration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogarticles`
--

INSERT INTO `blogarticles` (`blogId`, `title`, `body`, `timestamp`, `blogAuthorId`, `illustration`) VALUES
(1, 'Hello! First blog post!', 'Hi there Lorem Ipsum, etc.', '2025-03-26 01:30:06', 2, NULL),
(2, 'Second blog post, hooray!', 'Lorep Ipsum more text goes here yes', '2025-03-26 01:30:32', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentId` int(11) NOT NULL,
  `commentAuthorID` int(11) NOT NULL,
  `commentBody` varchar(200) NOT NULL,
  `commentTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `articleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageId` int(11) NOT NULL,
  `imageType` enum('avatar','photos','illustration') NOT NULL,
  `image` varchar(100) NOT NULL COMMENT 'imageFilePath'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageId` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `receiverId` int(11) NOT NULL,
  `messTitle` varchar(100) NOT NULL,
  `messBody` varchar(500) NOT NULL,
  `messageTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `attachedFiles` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `propertyId` int(11) NOT NULL,
  `realtorId` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `region` enum('Montreal','Laval','Longueuil','Brossard','Boucherville') NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `type` enum('Residential','Farm/Country Property','Multiplex','Commercial/Industrial','Land') NOT NULL,
  `price` int(10) NOT NULL,
  `bedroom` enum('1','2','3') DEFAULT NULL,
  `bathroom` enum('1','2','3') DEFAULT NULL,
  `lotArea` int(10) NOT NULL,
  `photos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`propertyId`, `realtorId`, `address`, `region`, `postalCode`, `type`, `price`, `bedroom`, `bathroom`, `lotArea`, `photos`) VALUES
(1, 1, '123 Greene Street', 'Montreal', 'H2AH2A', 'Residential', 2000000, '3', '3', 1000, NULL),
(2, 4, '23 rang Ouellette', 'Boucherville', 'H1H1H1', 'Land', 150000, NULL, NULL, 75000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text NOT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RuxUpWJobMBJ86X6woCOJItClgGuW6UK1fW7J3F1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZEtERzV2Rk92akJZUW52VXBNTkNCbUhNS1ZSQmcxTjhNVjllV3h4aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742940146),
('QYpCS3J6D2I81inkCztFOW47U15lN58eLkPAWdHi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2RCWHN5MVhnd1VTcmRud0hEd2xrZ0RmaUN1MXJOVE9yMEw3dnlhNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742937133),
('iaGDaq2Ur8QAPlLmqBssq6LieXOhPYU69Xqxwpf7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVNMYVVqUlpFMm0xRUpINE1Ma1VCOUpqTVZrMVJlSXZ3anlPR3A2NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9yZWFsZXN0YXRlLnRlc3QvP2hlcmQ9cHJldmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742927797),
('dDDIlnaO8UR2E7aBbxh44aoHiWPtRXL1gLHDGStH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUdtUUszNW1zQzJieTBiMDBka3Awc3NpQnZZME5PdnFoclFxcTdpayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9yZW1heC50ZXN0Lz9oZXJkPXByZXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742927803),
('Uk2vLIZMnxqQlBDgtXl0EqC6chtKNR87N8WwfyTJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHRucDY1TjdncjhiUHlIckg0SnhLMWZCQmtCT1BvcVh3NGtYQkU4UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9yZW1heC50ZXN0Lz9oZXJkPXByZXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742933915),
('qgWxplkInfxwXQtXOqXmSCs7UwVrzPgdsg7WJ7bf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDVjMWtvY2lDNFpiZ1RQdldUbjhkQUhZRDBSWEVTU2hMU0FPZm5jUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHA6Ly9yZW1heC50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742935254),
('JrbBbaJFyNXQE7XBkE8MgPMXihenq97eHdQeeCxO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1FYa29GVTcxNFZhdUdMQk9yZjJUVE9vRFNBRFZ4V0lyajFXVUROSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9yZWFsZXN0YXRlLnRlc3QvP2hlcmQ9cHJldmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742937473),
('1c5ebicEAtADRTDWwOgNezaQqk2OupUhmrvrge9G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjczaFNGejNjbWlWRnIxcDJOcHlLR3FsdmhtQmx3aWU0VFN5M2ZURiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9yZW1heC50ZXN0Lz9oZXJkPXByZXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742937696),
('7vkTAGujyxKQooYc1yGugFJE3CuXaYXs4cczlXKZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicllRd2FCd09RZTAwbFVLd21yUXhTQUJKQk9iamt6aWczUE1jNTBJZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9yZWFsZXN0YXRlLnRlc3QvP2hlcmQ9cHJldmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742937697),
('Bb9l9YtK5mOeO4bgrmXFiQH6MKDGGEfjAwANJZsN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDduQVpabW1RTDdHRzhLWEpPam5hS3JIYnU4QmVSaDFaMTlmQW1aeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZ2VudC9wcm9wZXJ0aWVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742953654),
('47OSuY88TqENoqnNctXIonf7IgcYeHXeTjRQj6MT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQm5Cc09UU2c3NjFDeXZvdGhudlo5eGNTZEtoNzZFUnZzSEN4RmU5YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9yZW1heC50ZXN0Lz9oZXJkPXByZXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742953601),
('Y7CSVT5qSlnUYEKq3or7n3bUUKN9ZnsVzfnaBju7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEVwMjg0NnNsbVdCQlR0U1p3ZWtDMEM4cWN4bTg1ZmtldEU0eXpQTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9yZWFsZXN0YXRlLnRlc3QvP2hlcmQ9cHJldmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742953603),
('XiCMgm0k2Q4KcV6w7sTqM7LqSiLUo8kpGAvsiMLv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.18.0 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmtrQk9icmJlWkJzRDY2eE9ONHh1T25ST3FGUGdFNnlnWGxFbEg5SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9yZW1heC50ZXN0Lz9oZXJkPXByZXZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742953612);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `phoneNumber` int(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `city` enum('Montreal','Laval','Longueuil','Brossard','Boucherville') NOT NULL,
  `role` enum('Realtor','Buyer') NOT NULL,
  `avatar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phoneNumber`, `email`, `password`, `city`, `role`, `avatar`) VALUES
(1, 'Olive', 'Olive', 111111111, 'olive@gmail.com', 'Test1234!', 'Laval', 'Realtor', NULL),
(2, 'Nora', 'Norescu', 222222222, 'nora@gmail.com', 'Test1234!', 'Brossard', 'Realtor', NULL),
(4, 'MrRealtor', 'Testtest', 1234567890, 'test@gmail.com', '$2y$12$YQ/MtSCj9fyooP5LWY3Rh.WS3DSSVnkBXzEWl6blmX15mPSyb4TTu', 'Montreal', 'Realtor', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogarticles`
--
ALTER TABLE `blogarticles`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `blogarticles_FK_1` (`blogAuthorId`),
  ADD KEY `blogarticles_FK_2` (`illustration`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `comments_FK_1` (`commentAuthorID`),
  ADD KEY `comments_FK_2` (`articleId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`),
  ADD KEY `messages_FK_1` (`senderId`),
  ADD KEY `messages_FK_2` (`receiverId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`propertyId`),
  ADD KEY `properties_FK_1` (`realtorId`),
  ADD KEY `properties_FK_2` (`photos`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_FK_1` (`avatar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogarticles`
--
ALTER TABLE `blogarticles`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `propertyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogarticles`
--
ALTER TABLE `blogarticles`
  ADD CONSTRAINT `blogarticles_FK_1` FOREIGN KEY (`blogAuthorId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `blogarticles_FK_2` FOREIGN KEY (`illustration`) REFERENCES `images` (`imageId`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_FK_1` FOREIGN KEY (`commentAuthorID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_FK_2` FOREIGN KEY (`articleId`) REFERENCES `blogarticles` (`blogId`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_FK_1` FOREIGN KEY (`senderId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_FK_2` FOREIGN KEY (`receiverId`) REFERENCES `users` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_FK_1` FOREIGN KEY (`realtorId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `properties_FK_2` FOREIGN KEY (`photos`) REFERENCES `images` (`imageId`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK_1` FOREIGN KEY (`avatar`) REFERENCES `images` (`imageId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

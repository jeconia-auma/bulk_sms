-- phpMyAdmin SQL Dump
-- version 5.2.1deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2024 at 09:56 AM
-- Server version: 11.4.3-MariaDB-1
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulk`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_message`
--

CREATE TABLE `content_message` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `offer_code` varchar(255) NOT NULL,
  `sendtime` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offercode`
--

CREATE TABLE `offercode` (
  `id` int(11) NOT NULL,
  `offername` varchar(255) NOT NULL,
  `shortcode_id` int(11) NOT NULL,
  `offer_code` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shortcode`
--

CREATE TABLE `shortcode` (
  `id` int(11) NOT NULL,
  `shortcode` varchar(10) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_inbox`
--

CREATE TABLE `sms_inbox` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `offer_code` varchar(255) NOT NULL,
  `msisdn` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `operation` varchar(50) DEFAULT NULL,
  `request_timestamp` timestamp NULL DEFAULT current_timestamp(),
  `reference_id` int(11) NOT NULL,
  `command` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `link_id` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_outbox`
--

CREATE TABLE `sms_outbox` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `offer_code` varchar(255) NOT NULL,
  `msisdn` int(11) NOT NULL,
  `callback_url` varchar(255) DEFAULT NULL,
  `sendtime` time NOT NULL,
  `dlr_status` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `link_id` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_logs`
--

CREATE TABLE `subscription_logs` (
  `id` int(11) NOT NULL,
  `keyword` text DEFAULT NULL,
  `msisdn` int(11) NOT NULL,
  `offer_code` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_management`
--

CREATE TABLE `subscription_management` (
  `id` int(11) NOT NULL,
  `msisdn` int(11) NOT NULL,
  `offer_code` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullnames` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `rights` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullnames`, `email`, `password`, `otp`, `rights`) VALUES
(1, 'jeconia auma', 'jeconiaauma@gmail.com', 'aab9be5ea091bda8bfbddb8daadf9f52', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_shortcode`
--

CREATE TABLE `user_shortcode` (
  `id` int(11) NOT NULL,
  `offer_code` varchar(255) NOT NULL,
  `callback_url` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_message`
--
ALTER TABLE `content_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offercode`
--
ALTER TABLE `offercode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortcode`
--
ALTER TABLE `shortcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_inbox`
--
ALTER TABLE `sms_inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_outbox`
--
ALTER TABLE `sms_outbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_logs`
--
ALTER TABLE `subscription_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_management`
--
ALTER TABLE `subscription_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_shortcode`
--
ALTER TABLE `user_shortcode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_message`
--
ALTER TABLE `content_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offercode`
--
ALTER TABLE `offercode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shortcode`
--
ALTER TABLE `shortcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_inbox`
--
ALTER TABLE `sms_inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_outbox`
--
ALTER TABLE `sms_outbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_logs`
--
ALTER TABLE `subscription_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_management`
--
ALTER TABLE `subscription_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_shortcode`
--
ALTER TABLE `user_shortcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

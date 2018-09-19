-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2018 at 11:47 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` bigint(20) NOT NULL,
  `account_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_wallet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_f2a` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_email`, `account_password`, `account_wallet`, `account_f2a`) VALUES
(1, 'thietkewebvip@gmail.com', '45ab64f084d1d00411e3089f51d52368d1ca521d', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(10) NOT NULL,
  `app_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_info` text COLLATE utf8_unicode_ci NOT NULL,
  `app_view` int(10) NOT NULL,
  `app_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_status` int(1) NOT NULL,
  `app_apikey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_hashmac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_sort` int(10) NOT NULL,
  `app_requiced` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `app_name`, `app_url`, `app_author`, `app_info`, `app_view`, `app_image`, `app_status`, `app_apikey`, `app_hashmac`, `app_sort`, `app_requiced`) VALUES
(1, 'New Coins', '', 'Roller Platform', '', 0, 'https://previews.123rf.com/images/varijanta/varijanta1705/varijanta170500079/78772492-creative-concept-banner-vector-illustration-for-mobile-apps-services-solutions-mobile-website-develo.jpg', 0, '', '', 0, 1000),
(2, 'Auto Miner', '', 'Roller Platform', '', 0, 'https://previews.123rf.com/images/rdomino/rdomino1704/rdomino170400011/76968692-concept-de-design-vectoriel-ligne-plate-du-processus-de-d%C3%A9veloppement-d-applications-mobiles-concep.jpg', 0, '', '', 0, 10000),
(3, 'Share Masternode', '', 'Roller Platform', '', 0, 'http://parsysmedia.com/images/banner-responsive.jpg', 0, '', '', 0, 10000),
(4, 'Miner Document', '', 'Roller Platform', '', 0, 'https://d3didb0pan6arl.cloudfront.net/promo_video_images/promo_64.jpg', 0, '', '', 0, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `myapps`
--

CREATE TABLE `myapps` (
  `my_id` bigint(20) NOT NULL,
  `my_wallet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `my_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `my_icons` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `my_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `my_sort` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `config_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8_unicode_ci NOT NULL,
  `languge` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `account_wallet` (`account_wallet`),
  ADD UNIQUE KEY `account_email` (`account_email`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `myapps`
--
ALTER TABLE `myapps`
  ADD PRIMARY KEY (`my_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `myapps`
--
ALTER TABLE `myapps`
  MODIFY `my_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
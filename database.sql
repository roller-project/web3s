-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2018 at 07:34 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `application`
--

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
  `app_image` text COLLATE utf8_unicode_ci NOT NULL,
  `app_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT;
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
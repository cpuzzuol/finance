-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2014 at 10:21 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `fin_deductions`
--

CREATE TABLE IF NOT EXISTS `fin_deductions` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'fk fin_user.id',
  `deduction_id` int(10) NOT NULL COMMENT 'fk fin_deduction_category.id',
  `deduction_desc` varchar(255) NOT NULL,
  `deduction_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fin_deduction_category`
--

CREATE TABLE IF NOT EXISTS `fin_deduction_category` (
`id` int(11) NOT NULL,
  `deduction` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fin_expenses`
--

CREATE TABLE IF NOT EXISTS `fin_expenses` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expense_id` int(11) NOT NULL COMMENT 'fk fin_expense_category.id',
  `expense_desc` varchar(255) NOT NULL,
  `expense_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fin_expense_category`
--

CREATE TABLE IF NOT EXISTS `fin_expense_category` (
`id` int(11) NOT NULL,
  `expense` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fin_income`
--

CREATE TABLE IF NOT EXISTS `fin_income` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'fk fin_user.id',
  `income_id` int(11) NOT NULL COMMENT 'fk fin_income_category.id',
  `income_desc` varchar(255) NOT NULL,
  `income_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `fin_income`
--

INSERT INTO `fin_income` (`id`, `user_id`, `income_id`, `income_desc`, `income_date`, `amount`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Test YO!', '2014-06-30', '55.00', '2014-07-01 00:35:16', '2014-07-01 00:35:16'),
(2, 1, 1, 'Test YO!', '2014-06-30', '55.00', '2014-07-01 00:35:59', '2014-07-01 00:35:59'),
(3, 1, 1, 'Test YO!', '2014-06-30', '55.00', '2014-07-01 00:39:01', '2014-07-01 00:39:01'),
(4, 1, 1, 'Test YO!', '2014-06-30', '444.00', '2014-07-01 00:39:30', '2014-07-01 00:39:30'),
(5, 1, 2, 'Test YO!', '2014-06-30', '55.00', '2014-07-01 00:41:00', '2014-07-01 00:41:00'),
(6, 1, 1, 'Test YO!', '2014-06-30', '433335.00', '2014-07-01 00:42:39', '2014-07-01 00:42:39'),
(7, 1, 1, 'Test YO!', '2014-06-30', '0.00', '2014-07-01 00:45:50', '2014-07-01 00:45:50'),
(8, 1, 1, 'Test YO!', '2014-07-01', '0.00', '2014-07-01 18:27:40', '2014-07-01 18:27:40'),
(9, 1, 1, 'Test YO!', '2014-07-01', '0.00', '2014-07-01 18:27:53', '2014-07-01 18:27:53'),
(10, 1, 1, 'Test YO!', '2014-07-01', '0.00', '2014-07-01 18:28:12', '2014-07-01 18:28:12'),
(11, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:24:52', '2014-07-02 00:24:52'),
(12, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:25:49', '2014-07-02 00:25:49'),
(13, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:26:16', '2014-07-02 00:26:16'),
(14, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:26:28', '2014-07-02 00:26:28'),
(15, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:26:35', '2014-07-02 00:26:35'),
(16, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:27:47', '2014-07-02 00:27:47'),
(17, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:28:06', '2014-07-02 00:28:06'),
(18, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:28:33', '2014-07-02 00:28:33'),
(19, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:28:51', '2014-07-02 00:28:51'),
(20, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:29:55', '2014-07-02 00:29:55'),
(21, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:30:42', '2014-07-02 00:30:42'),
(22, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:32:56', '2014-07-02 00:32:56'),
(23, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:33:17', '2014-07-02 00:33:17'),
(24, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:34:46', '2014-07-02 00:34:46'),
(25, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:35:06', '2014-07-02 00:35:06'),
(26, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:35:31', '2014-07-02 00:35:31'),
(27, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:35:53', '2014-07-02 00:35:53'),
(28, 1, 2, 'Test YO!', '2014-07-01', '0.00', '2014-07-02 00:37:02', '2014-07-02 00:37:02'),
(29, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 05:07:02', '2014-07-02 05:07:02'),
(30, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 18:34:00', '2014-07-02 18:34:00'),
(31, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 18:35:52', '2014-07-02 18:35:52'),
(32, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 18:36:37', '2014-07-02 18:36:37'),
(33, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 18:38:16', '2014-07-02 18:38:16'),
(34, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 18:38:48', '2014-07-02 18:38:48'),
(35, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 18:40:23', '2014-07-02 18:40:23'),
(36, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 19:07:20', '2014-07-02 19:07:20'),
(37, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 19:57:33', '2014-07-02 19:57:33'),
(38, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 20:21:52', '2014-07-02 20:21:52'),
(39, 1, 1, 'Test YO!', '2014-07-02', '545.00', '2014-07-02 20:24:04', '2014-07-02 20:24:04'),
(40, 1, 1, 'Test YO!', '2014-07-02', '0.00', '2014-07-02 21:54:06', '2014-07-02 21:54:06'),
(41, 1, 1, 'Test YO!', '2014-07-03', '0.00', '2014-07-03 21:23:05', '2014-07-03 21:23:05'),
(42, 1, 1, 'Test YO!', '2014-07-03', '0.00', '2014-07-03 21:23:49', '2014-07-03 21:23:49'),
(43, 1, 1, 'Test YO!', '2014-07-03', '0.00', '2014-07-03 21:27:28', '2014-07-03 21:27:28'),
(44, 1, 1, 'Test YO!', '2014-07-03', '0.00', '2014-07-03 21:27:39', '2014-07-03 21:27:39'),
(50, 1, 1, '', '0000-00-00', '0.00', '2014-07-03 22:03:17', '2014-07-03 22:03:17'),
(51, 1, 1, 'Test YO!', '2014-07-03', '0.00', '2014-07-03 22:04:03', '2014-07-03 22:04:03'),
(52, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:04:41', '2014-07-03 22:04:41'),
(53, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:05:45', '2014-07-03 22:05:45'),
(54, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:06:13', '2014-07-03 22:06:13'),
(55, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:15:23', '2014-07-03 22:15:23'),
(56, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:15:33', '2014-07-03 22:15:33'),
(57, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:16:08', '2014-07-03 22:16:08'),
(58, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:16:46', '2014-07-03 22:16:46'),
(59, 1, 2, 'Test YO!', '2014-07-03', '20.00', '2014-07-03 22:17:07', '2014-07-03 22:17:07'),
(60, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:17:41', '2014-07-03 22:17:41'),
(61, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:18:06', '2014-07-03 22:18:06'),
(62, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:18:26', '2014-07-03 22:18:26'),
(63, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:19:03', '2014-07-03 22:19:03'),
(64, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:19:18', '2014-07-03 22:19:18'),
(65, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:19:35', '2014-07-03 22:19:35'),
(66, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:20:30', '2014-07-03 22:20:30'),
(67, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:20:58', '2014-07-03 22:20:58'),
(68, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:21:32', '2014-07-03 22:21:32'),
(69, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:21:46', '2014-07-03 22:21:46'),
(70, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:21:49', '2014-07-03 22:21:49'),
(71, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:22:03', '2014-07-03 22:22:03'),
(72, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:22:20', '2014-07-03 22:22:20'),
(73, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:22:34', '2014-07-03 22:22:34'),
(74, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:22:51', '2014-07-03 22:22:51'),
(75, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:25:56', '2014-07-03 22:25:56'),
(76, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:25:59', '2014-07-03 22:25:59'),
(77, 1, 1, 'Test YO!', '2014-07-03', '23.00', '2014-07-03 22:27:01', '2014-07-03 22:27:01'),
(78, 1, 1, 'Test YO!', '2014-07-09', '45.00', '2014-07-09 21:10:13', '2014-07-09 21:10:13'),
(79, 1, 1, 'Test YO!', '2014-07-09', '54.00', '2014-07-09 21:46:37', '2014-07-09 21:46:37'),
(80, 1, 1, 'Test YO!', '2014-07-16', '45.00', '2014-07-16 23:13:20', '2014-07-16 23:13:20'),
(81, 1, 1, 'Test YO!', '2014-07-16', '23.00', '2014-07-17 02:01:00', '2014-07-17 02:01:00'),
(82, 29, 1, 'Test YO!', '2014-07-16', '454.59', '2014-07-17 02:10:25', '2014-07-17 02:10:25'),
(83, 29, 1, 'Test YO!', '2014-07-23', '100.00', '2014-07-23 19:33:59', '2014-07-23 19:33:59'),
(84, 29, 2, 'Yeomenssdsf', '2014-07-23', '50.01', '2014-07-23 21:52:35', '2014-07-23 19:48:50'),
(85, 29, 1, '', '2014-07-23', '0.00', '2014-07-24 00:41:34', '2014-07-24 00:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `fin_income_category`
--

CREATE TABLE IF NOT EXISTS `fin_income_category` (
`id` int(11) NOT NULL,
  `income` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fin_income_category`
--

INSERT INTO `fin_income_category` (`id`, `income`, `updated_at`, `created_at`) VALUES
(1, 'Primary Employment', '2014-07-17 01:43:16', '0000-00-00 00:00:00'),
(2, 'Secondary Employment', '2014-07-17 01:30:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fin_savings`
--

CREATE TABLE IF NOT EXISTS `fin_savings` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'fk fin_users.id',
  `savings_id` int(11) NOT NULL COMMENT 'fk fin_savings_category.id',
  `savings_desc` varchar(255) NOT NULL,
  `savings_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fin_savings_category`
--

CREATE TABLE IF NOT EXISTS `fin_savings_category` (
`id` int(11) NOT NULL,
  `savings` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fin_users`
--

CREATE TABLE IF NOT EXISTS `fin_users` (
`id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `fin_users`
--

INSERT INTO `fin_users` (`id`, `username`, `email`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'root', 'root@root.com', 'epthnw2y', '2014-07-03 15:42:25', '2014-06-25 19:26:14', ''),
(29, 'cpuzzuol09', 'cpuzzuol@gmail.com', '$2y$10$lyHsDhz2UFY2vsgMlNs89OHZdEwsbLzaD2rGJzDJ/wB9wDk1NjFkm', '2014-07-23 23:38:39', '2014-07-03 20:30:16', 'eWYGxBxl2c4cDQqV6PVwzK39TBtoXmWu4wlFqMCNNivufww3blhgYs6XIY3h'),
(30, 'ciso', 'cpuzzuol@gmail.com', '$2y$10$gyPqruUCZaE5ydxfhlRmO.bRx8HrZvqQ3fixebyCARpU0IMh/wpw6', '2014-07-11 23:58:04', '2014-07-11 23:58:04', ''),
(31, 'ciso', 'cpuzzuol@gmail.com', '$2y$10$.LB.hRcvyQ45If6snro34e9R7iP3tyuP1cuUVJowZTKqoSqUpynkq', '2014-07-11 23:59:13', '2014-07-11 23:59:13', ''),
(32, 'he', 'cpuzzuol@gmail.com', '$2y$10$m1kHRJZpb1eJgQVen9VY0eywbmLa.TSNHvE3Jrxk97crUxM.D0Ere', '2014-07-11 23:59:25', '2014-07-11 23:59:25', ''),
(33, 'he', 'cpuzzuol@gmail.com', '$2y$10$Ddp6FtNlbBrPWLZbFC06gOHUhHnPVimhc.k4CJHLo88DxCutj4V1K', '2014-07-11 23:59:44', '2014-07-11 23:59:44', ''),
(34, 'gghg', 'cpuzzuol@gmail.com', '$2y$10$ybSeqGJ6OH1vaNfjnMJYnOJHzoH21u4QI/T6ylTKwaQfDnnAzRD7S', '2014-07-12 00:02:07', '2014-07-12 00:02:07', ''),
(35, 'billlll', 'bill@bill.com', '$2y$10$RQwaCPX5pcFJT7PMijjlpO5mJRkyhuqqR13XcQW3yZI15dcn1GBCG', '2014-07-16 19:47:00', '2014-07-16 19:47:00', ''),
(36, 'billlll', 'bill@bill.com', '$2y$10$stRLQ/4DzqVUR5vxGlRO3uH.xapLzp4CsCNz1GFsInAmiB8q30xpW', '2014-07-16 19:54:35', '2014-07-16 19:54:35', ''),
(37, 'billlll', 'cpuzzuol@gmail.com', '$2y$10$yAmDKzSeEOT5CCqEkExaVOSVEm82owVUOvOEuu.ZievH1F1XbZzRO', '2014-07-17 01:39:10', '2014-07-16 19:55:34', ''),
(38, '', 'bill@bill.co', '', '2014-07-17 00:47:27', '2014-07-17 00:47:27', ''),
(39, '', 'bill@bill.co', '', '2014-07-17 00:47:34', '2014-07-17 00:47:34', ''),
(40, '', 'bill@b', '', '2014-07-17 00:47:41', '2014-07-17 00:47:41', ''),
(41, '', 'bill@bill.co', '', '2014-07-17 00:48:09', '2014-07-17 00:48:09', ''),
(42, '', 'bill@bill.com', '', '2014-07-17 00:48:22', '2014-07-17 00:48:22', ''),
(43, '', '', '', '2014-07-17 00:48:29', '2014-07-17 00:48:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_25_183742_fuck_off', 1),
('2014_06_25_194638_add_token', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fin_deductions`
--
ALTER TABLE `fin_deductions`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `deduction_id` (`deduction_id`);

--
-- Indexes for table `fin_deduction_category`
--
ALTER TABLE `fin_deduction_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_expenses`
--
ALTER TABLE `fin_expenses`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `expense_id` (`expense_id`);

--
-- Indexes for table `fin_expense_category`
--
ALTER TABLE `fin_expense_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_income`
--
ALTER TABLE `fin_income`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `income_id` (`income_id`);

--
-- Indexes for table `fin_income_category`
--
ALTER TABLE `fin_income_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_savings`
--
ALTER TABLE `fin_savings`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `savings_id` (`savings_id`);

--
-- Indexes for table `fin_savings_category`
--
ALTER TABLE `fin_savings_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fin_users`
--
ALTER TABLE `fin_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fin_deductions`
--
ALTER TABLE `fin_deductions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_deduction_category`
--
ALTER TABLE `fin_deduction_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_expenses`
--
ALTER TABLE `fin_expenses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_expense_category`
--
ALTER TABLE `fin_expense_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_income`
--
ALTER TABLE `fin_income`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `fin_income_category`
--
ALTER TABLE `fin_income_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fin_savings`
--
ALTER TABLE `fin_savings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_savings_category`
--
ALTER TABLE `fin_savings_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fin_users`
--
ALTER TABLE `fin_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fin_deductions`
--
ALTER TABLE `fin_deductions`
ADD CONSTRAINT `fin_deductions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fin_users` (`id`),
ADD CONSTRAINT `fin_deductions_ibfk_2` FOREIGN KEY (`deduction_id`) REFERENCES `fin_deduction_category` (`id`);

--
-- Constraints for table `fin_expenses`
--
ALTER TABLE `fin_expenses`
ADD CONSTRAINT `fin_expenses_ibfk_1` FOREIGN KEY (`expense_id`) REFERENCES `fin_expense_category` (`id`),
ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `fin_users` (`id`);

--
-- Constraints for table `fin_income`
--
ALTER TABLE `fin_income`
ADD CONSTRAINT `fin_income_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fin_users` (`id`),
ADD CONSTRAINT `fin_income_ibfk_2` FOREIGN KEY (`income_id`) REFERENCES `fin_income_category` (`id`);

--
-- Constraints for table `fin_savings`
--
ALTER TABLE `fin_savings`
ADD CONSTRAINT `fin_savings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `fin_users` (`id`),
ADD CONSTRAINT `fin_savings_ibfk_2` FOREIGN KEY (`savings_id`) REFERENCES `fin_savings_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

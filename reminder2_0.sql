-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 03:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `cronjob`
--

CREATE TABLE `cronjob` (
  `id` int(11) NOT NULL,
  `keur1` varchar(128) NOT NULL,
  `tera1` varchar(128) NOT NULL,
  `pajak1` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cronjob`
--

INSERT INTO `cronjob` (`id`, `keur1`, `tera1`, `pajak1`) VALUES
(15, '60,50,40,30,25,20,15,14,10,7,6,5,4,3,2,1', '30,14,1', '60,20,14');

-- --------------------------------------------------------

--
-- Table structure for table `mobiltanki`
--

CREATE TABLE `mobiltanki` (
  `id` int(11) NOT NULL,
  `nopol` varchar(128) NOT NULL,
  `transportir` varchar(128) NOT NULL,
  `kap` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `keur` date NOT NULL,
  `tera` date NOT NULL,
  `pajak` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiltanki`
--

INSERT INTO `mobiltanki` (`id`, `nopol`, `transportir`, `kap`, `jenis`, `keur`, `tera`, `pajak`, `status`) VALUES
(4, 'AA1861EF', 'PT. Tanah Putih', '16', 'Multi Produk', '2022-09-30', '2023-03-25', '2023-03-23', 1),
(5, 'AA1877EF', 'PT. Tanah Putih', '24', 'Multi Produk', '2022-10-12', '2023-01-14', '2023-04-08', 1),
(6, 'AA1939DF', 'PT. Tanah Putih', '24', 'Multi Produk', '2022-09-14', '2023-03-22', '2022-08-11', 1),
(7, 'AB8039AS', 'PT. Sugito Nugratama', '32', 'Multi Produk', '2022-07-27', '2022-07-30', '2022-12-03', 1),
(8, 'AB8096NA', 'PT. Wijaya Sakti Abadi', '5', 'Pertashop', '2022-09-29', '2023-07-12', '2022-08-16', 1),
(9, 'AB8091NA', 'PT. Wijaya Sakti Abadi', '5', 'Pertashop', '2022-04-05', '2022-10-06', '2022-08-16', 1),
(10, 'AB8041AS', 'PT. Sugito Nugratama', '24', 'Multi Produk', '2022-08-23', '2023-04-19', '2022-08-14', 1),
(11, 'AB8050AS', 'PT. Sugito Nugratama', '16', 'Multi Produk', '2022-11-25', '2022-07-15', '2022-09-14', 1),
(12, 'AB8054AS', 'PT. Sugito Nugratama', '24', 'Multi Produk', '2021-06-08', '2023-02-17', '2021-10-24', 1),
(13, 'AB8062AS', 'PT. Sugito Nugratama', '16', 'Multi Produk', '2022-11-27', '2022-07-20', '2022-11-22', 1),
(14, 'AB8115AS', 'PT. Sugito Nugratama', '24', 'Multi Produk', '2022-06-08', '2023-03-09', '2022-06-19', 1),
(15, 'AB8116AS', 'PT. Sugito Nugratama', '24', 'Multi Produk', '2023-11-30', '2023-02-11', '2022-06-19', 1),
(16, 'AB8117AS', 'PT. Sugito Nugratama', '24', 'Multi Produk', '2022-11-27', '2023-02-24', '2022-07-02', 1),
(17, 'AB8119AS', 'PT. Sugito Nugratama', '24', 'Multi Produk', '2022-11-27', '2023-03-12', '2022-07-20', 1),
(18, 'AB8160AS', 'PT. Sugito Nugratama', '16', 'Multi Produk', '2022-09-17', '2023-03-10', '2023-03-06', 1),
(19, 'AD8236CC', 'PT. Sonto Putro', '32', 'Multi Produk', '2022-08-24', '2022-08-12', '2022-09-08', 1),
(20, 'AD8360AC', 'PT. Sonto Putro', '32', 'Multi Produk', '2022-10-13', '2023-04-08', '2023-03-11', 1),
(21, 'AD1465TD', 'PT. Panji Perkasa', '32', 'Multi Produk', '2022-09-24', '2023-03-10', '2022-11-04', 1),
(22, 'AD1466TD', 'PT. Panji Perkasa', '32', 'Multi Produk', '2022-11-12', '2022-08-12', '2022-10-27', 1),
(23, 'AD1543VC', 'PT. Sonto Putro', '16', 'Multi Produk', '2023-10-13', '2023-03-09', '2022-06-14', 1),
(24, 'AD1548VC', 'PT. Sonto Putro', '24', 'Multi Produk', '2022-10-13', '2023-03-25', '2022-06-27', 1),
(25, 'AD1353UD', 'PT. Panji Perkasa', '24', 'Multi Produk', '2022-09-28', '2024-02-16', '2023-04-12', 1),
(26, 'AD1366UD', 'PT. Panji Perkasa', '32', 'Multi Produk', '2022-09-28', '2023-02-25', '2023-04-26', 1),
(29, 'B9082SEH', 'PT. Patra Niaga', '24', 'Multi Produk', '2022-09-15', '2023-01-25', '2023-11-24', 1),
(30, 'B9052SFV', 'PT. Elnusa Petrofin', '16', 'Multi Produk', '2022-07-10', '2023-04-23', '2023-05-04', 1),
(31, 'B9050SFV', 'PT. Elnusa Petrofin', '16', 'Multi Produk', '2022-07-10', '2023-04-23', '2023-05-04', 1),
(32, 'B9024SFV', 'PT. Patra Niaga', '16', 'Multi Produk', '2022-11-11', '2022-08-24', '2023-03-19', 1),
(33, 'B9084SEH', 'PT. Patra Niaga', '24', 'Multi Produk', '2022-06-16', '2023-04-12', '2023-02-24', 1),
(34, 'B9087SEH', 'PT. Patra Niaga', '24', 'Multi Produk', '2022-09-15', '2023-05-07', '2023-02-24', 1),
(35, 'B9088SEH', 'PT. Patra Niaga', '24', 'Multi Produk', '2022-09-15', '2023-11-03', '2023-02-24', 1),
(36, 'B9089SEH', 'PT. Patra Niaga', '24', 'Multi Produk', '2022-09-15', '2023-01-21', '2023-02-24', 1),
(37, 'B9444TEI', 'PT. Adam Trans', '24', 'Multi Produk', '2022-11-10', '2023-04-15', '2022-06-22', 1),
(38, 'B9813TEI', 'PT. Adam Trans', '24', 'Multi Produk', '2022-10-12', '2022-07-15', '2023-05-30', 1),
(39, 'B9814TEI', 'PT. Adam Trans', '24', 'Multi Produk', '2022-11-12', '2022-07-17', '2023-05-30', 1),
(40, 'B9815TEI', 'PT. Adam Trans', '24', 'Multi Produk', '2022-10-12', '2022-07-16', '2023-05-30', 1),
(41, 'B9767SFU', 'PT. Elnusa Petrofin', '16', 'Multi Produk', '2022-06-13', '2022-09-21', '2022-09-29', 1),
(42, 'B9794SFU', 'PT. Elnusa Petrofin', '16', 'Multi Produk', '2022-07-22', '2023-01-26', '2022-12-14', 1),
(43, 'E9211YB', 'PT. Puspita Cipta', '24', 'Multi Produk', '2022-06-06', '2023-03-30', '2022-06-16', 1),
(44, 'E9259YB', 'PT. Puspita Cipta', '32', 'Multi Produk', '2022-08-26', '2022-03-09', '2022-08-07', 1),
(45, 'E9631YA', 'PT. Puspita Cipta', '24', 'Multi Produk', '2022-09-01', '2022-07-20', '2023-01-17', 1),
(46, 'E9633YA', 'PT. Puspita Cipta', '24', 'Multi Produk', '2022-08-26', '2022-07-13', '2023-01-17', 1),
(47, 'E9715YA', 'PT. Puspita Cipta', '32', 'Multi Produk', '2022-06-09', '2022-12-04', '2023-04-25', 1),
(48, 'E9716YA', 'PT. Puspita Cipta', '32', 'Multi Produk', '2022-06-22', '2023-03-02', '2023-04-25', 1),
(49, 'E9733YA', 'PT. Puspita Cipta', '24', 'Multi Produk', '2022-06-09', '2023-03-16', '2023-05-21', 1),
(50, 'E9439YB', 'PT. Puspita Cipta', '32', 'Multi Produk', '2022-06-09', '2022-07-16', '2022-06-19', 1),
(51, 'G8394AE', 'PT. Lautan Bening Tjitra Novia', '24', 'Multi Produk', '2022-08-14', '2023-02-09', '2023-01-28', 1),
(52, 'G1778DA', 'PT. Murni Adhi Dukuh Jaya', '24', 'Multi Produk', '2022-10-25', '2023-03-18', '2022-06-14', 1),
(53, 'G1779DA', 'PT. Murni Adhi Dukuh Jaya', '24', 'Multi Produk', '2022-10-25', '2023-02-17', '2022-06-15', 1),
(54, 'G1780DA', 'PT. Murni Adhi Dukuh Jaya', '16', 'Multi Produk', '2022-10-25', '2023-03-02', '2022-06-15', 1),
(55, 'G1781DA', 'PT. Murni Adhi Dukuh Jaya', '16', 'Multi Produk', '2022-10-25', '2023-02-25', '2022-06-15', 1),
(56, 'G1782DA', 'PT. Murni Adhi Dukuh Jaya', '16', 'Multi Produk', '2022-08-02', '2022-11-30', '2022-06-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_update` int(11) NOT NULL,
  `fungsi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `image`, `password`, `role_id`, `is_active`, `date_created`, `date_update`, `fungsi`) VALUES
(3, 'Gilang Pratama', 'pgilang11@gmail.com', '085643371946', 'default.png', '$2y$10$VK33XpvIXxc/zvjAfOtZfu5dzKfrwOdrvmqABFyi7qweNF8/e0rg.', 1, 1, 1645291439, 1653206582, 'QQ'),
(6, 'Novi Endarti', 'noviendarti@gmail.com', '08977449090', 'default.png', '', 1, 1, 1653206147, 0, 'MS');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(6, 1, 7),
(7, 1, 8),
(8, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(2, 'Mobil'),
(7, 'CronJob'),
(8, 'User'),
(9, 'Kalender');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'home', 'monitor', 1),
(2, 2, 'Mobil Tanki', 'mobil', 'truck', 1),
(6, 7, 'Cron Job', 'cronjob', 'clock', 1),
(7, 8, 'User', 'user/list', 'user', 1),
(8, 9, 'Kalender', 'kalender', 'calendar', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cronjob`
--
ALTER TABLE `cronjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiltanki`
--
ALTER TABLE `mobiltanki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cronjob`
--
ALTER TABLE `cronjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mobiltanki`
--
ALTER TABLE `mobiltanki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

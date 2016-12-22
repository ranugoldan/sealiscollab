-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2015 at 02:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sealis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
`id` int(10) unsigned NOT NULL,
  `cuaca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arahangin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecmin` double NOT NULL,
  `kecmax` double NOT NULL,
  `tinggimin` double NOT NULL,
  `tinggimax` double NOT NULL,
  `wilayah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `cuaca`, `arahangin`, `kecmin`, `kecmax`, `tinggimin`, `tinggimax`, `wilayah_id`, `created_at`, `updated_at`) VALUES
(5, 'Cerah', 'Utara', 1.2, 1.1331, 1.1, 1.1, 20, '2015-12-27 22:23:26', '2015-12-27 23:13:59');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE IF NOT EXISTS `prediksi` (
`id` int(10) unsigned NOT NULL,
  `cuaca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arahangin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecmin` double NOT NULL,
  `kecmax` double NOT NULL,
  `tinggimin` double NOT NULL,
  `tinggimax` double NOT NULL,
  `wilayah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prediksi`
--

INSERT INTO `prediksi` (`id`, `cuaca`, `arahangin`, `kecmin`, `kecmax`, `tinggimin`, `tinggimax`, `wilayah_id`, `created_at`, `updated_at`) VALUES
(4, 'Cerah', 'Utara', 1.2, 2, 2, 3.2, 20, '2015-12-27 22:23:26', '2015-12-28 06:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE IF NOT EXISTS `stasiun` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Belawan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Pontianak', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Teluk Bayur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Panjang Lampung', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Hang Nadim Batam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Tanjung Priok', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Tanjung Emas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Cilacap', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Tanjung Perak', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'El_Tari Kupang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Bitung', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Paotere-Makassar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Biak', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Kendari', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Ambon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Sorong', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Babullah - Ternate', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'BBMKG3 Denpasar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Balikpapan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Merauke', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ranu', 'Goldan', 'ranugoldan@gmail.com', '$2y$10$NZX1j.XuhtlSnvFFFd4h.uTGbx4w9KI/eIVKg3LMZwvBqJ0seyVtS', 'qQwZf1X88ay4NmjFHa3onrVYWyY0439jYQ7z2FZCeQJAhn2B8dVl6LqaC8s6', '0000-00-00 00:00:00', '2015-12-28 06:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `stasiun_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama`, `lat`, `lon`, `stasiun_id`, `created_at`, `updated_at`) VALUES
(20, 'asdsa', -5.546006358165717, 110.41259765625, 1, '2015-12-27 22:23:26', '2015-12-27 22:23:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`id`), ADD KEY `info_wilayah_id_index` (`wilayah_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
 ADD PRIMARY KEY (`id`), ADD KEY `prediksi_wilayah_id_index` (`wilayah_id`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
 ADD PRIMARY KEY (`id`), ADD KEY `wilayah_stasiun_id_index` (`stasiun_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stasiun`
--
ALTER TABLE `stasiun`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `info`
--
ALTER TABLE `info`
ADD CONSTRAINT `info_wilayah_id_foreign` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayah` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prediksi`
--
ALTER TABLE `prediksi`
ADD CONSTRAINT `prediksi_wilayah_id_foreign` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayah` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wilayah`
--
ALTER TABLE `wilayah`
ADD CONSTRAINT `wilayah_stasiun_id_foreign` FOREIGN KEY (`stasiun_id`) REFERENCES `stasiun` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

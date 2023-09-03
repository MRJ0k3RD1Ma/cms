-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 01:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xorazmvxtb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `code`, `icon`, `parent_id`, `sort`, `lang_id`, `page_id`, `status`, `active`) VALUES
(1, 'Asosiy', 'asosiy-lotin', '', 1, 1, 1, 0, 1, 1),
(2, 'Асосий', 'asosiy-kril', '', 2, 1, 2, 0, 1, 1),
(3, 'Главная', 'glavnaya', '', 3, 1, 3, 0, 1, 1),
(4, 'Home', 'home', '', 4, 1, 4, 0, 1, 1),
(5, 'Bo\'lim', 'bolim', '', 1, 0, 1, -1, 1, 1),
(6, 'Bo`lim rahbariyati', 'bolim-rahbatiyati', '', 5, 0, 1, -1, 1, 1),
(7, 'Bo`lim hodimlari', 'bolim-hodimlari', '', 5, 0, 1, -1, 1, 1),
(8, 'Ta`lim muassasalari', 'talim-muassasalari', '', 5, 0, 1, -1, 1, 1),
(9, 'Bo`lim manzili', 'bolim-manzili', '', 5, 0, 1, -1, 1, 1),
(10, 'Me\'yoriy hujjatlar', 'meyyoriy-xujjatlar', '', 1, 0, 1, -1, 1, 1),
(11, 'Ta\'limga oid qonunlar', 'Ta-limga-oid-qonunlar', '', 10, 0, 1, -1, 1, 1),
(12, 'O\'zR Prezidentining тa`lim to\'g\'risidagi Qarorlari', 'talim-prezident-qarorlari', '', 10, 0, 1, -1, 1, 1),
(13, 'O\'zR VM тa`lim to\'g\'risidagi Qarorlari', 'vm-talim-qarorlari', '', 10, 0, 1, -1, 1, 1),
(14, 'Boshqarmaning hay`at Qarorlari', 'boshqarmaning-hay-at-Qarorlari', '', 10, 0, 1, -1, 1, 1),
(15, 'Me`yoriy hujjatlar loyihalari', 'Me-yoriy-hujjatlar-loyihalari', '', 10, 0, 1, -1, 1, 1),
(16, 'Ta`lim', 'talim', '', 1, 0, 1, -1, 1, 1),
(17, 'Asosiy ko\'rsatkichlar', 'asosiy-ko-rsatkichlar', '', 16, 0, 1, -1, 1, 1),
(18, 'Pedogoglarga', 'Pedogoglarga', '', 16, 0, 1, -1, 1, 1),
(19, 'Ota onalarga', 'ota-onalarga', '', 16, 0, 1, -1, 1, 1),
(20, 'O\'quvchilarga', 'o-quvchilarga', '', 16, 0, 1, -1, 1, 1),
(21, 'Interektiv xizmatlar', 'Interektiv-xizmatlar', '', 1, 0, 1, -1, 1, 1),
(22, 'Mudirga murojaat', 'Mudirga-murojaat', '', 21, 0, 1, -1, 1, 1),
(23, 'Umumta`lim maktablari haqida ma`lumot', 'Umumta-lim-maktablari-haqida-ma-lumot', '', 21, 0, 1, -1, 1, 1),
(24, 'Matbuot markazi', 'Matbuot-markazi', '', 1, 0, 1, -1, 1, 1),
(25, 'Yangiliklar', 'yangiliklar', '', 24, 0, 1, -1, 1, 1),
(26, 'Tanlovlar', 'Tanlovlar', '', 24, 0, 1, -1, 1, 1),
(27, 'E\'lonlar', 'E-lonlar', '', 24, 0, 1, -1, 1, 1),
(28, 'Xizmatlar', 'Xizmatlar', '', 1, 0, 1, -1, 1, 1),
(29, 'Savol-javob', 'Savol-javob', '', 28, 0, 1, -1, 1, 1),
(30, 'Elektron lug\'at', 'elektron-lu-gat', '', 28, 0, 1, -1, 1, 1),
(31, 'Online qabulxona', 'Online-qabulxona', '', 21, 0, 1, -1, 1, 1),
(32, 'Online test', 'Online-test', '', 28, 0, 1, -1, 1, 1),
(33, 'Qabul grafigi', 'Qabul-grafigi', '', 28, 0, 1, -1, 1, 1),
(34, 'E-kutubxona', 'E-kutubxona', '', 1, 0, 1, -1, 1, 1),
(35, 'O\'zbek adabiyoti', 'O-zbek-adabiyoti', '', 34, 0, 1, -1, 1, 1),
(36, 'Jahon adabiyoti', 'Jahon-adabiyoti', '', 34, 0, 1, -1, 1, 1),
(37, 'Ota onalar uchun', 'Ota-onalar-uchun', '', 34, 0, 1, -1, 1, 1),
(38, 'Jahon mamlakatlari', 'Jahon-mamlakatlari', '', 34, 0, 1, -1, 1, 1),
(39, 'Uslubiy tafsiyanomalar', 'Uslubiy-tafsiyanomalar', '', 34, 0, 1, -1, 1, 1),
(40, 'Ertaklar', 'Ertaklar', '', 34, 0, 1, -1, 1, 1),
(41, 'Hikoyalar', 'Hikoyalar', '', 34, 0, 1, -1, 1, 1),
(42, 'Innovatsion ta\'lim', 'Innovatsion-ta-lim', '', 1, 0, 1, -1, 1, 1),
(43, 'Tayanch maktablar', 'Tayanch-maktablar', '', 1, 0, 1, -1, 1, 1),
(44, 'Ochiq ma`lumotlar', 'Ochiq-ma-lumotlar', '', 10, 0, 1, -1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `lang_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `preview` varchar(255) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`, `code`, `icon`, `type`, `status`, `active`) VALUES
(1, 'O\'zbek lotin', 'uz', 'uz.png', 1, 1, 1),
(2, 'Ўзбек крил', 'oz', 'oz.png', 1, 1, 1),
(3, 'Русский язык', 'ru', 'ru.png', 1, 1, 1),
(4, 'English language', 'en', 'en.png', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loginform_cache`
--

CREATE TABLE `loginform_cache` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `configuration` text NOT NULL,
  `times` int(11) NOT NULL DEFAULT '0',
  `blocked` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `cat_id` int(11) NOT NULL,
  `preview` text NOT NULL,
  `detail` longtext NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `show_counter` int(11) NOT NULL DEFAULT '0',
  `slider` int(11) NOT NULL DEFAULT '0',
  `vote` int(11) NOT NULL DEFAULT '0',
  `tags` varchar(500) NOT NULL DEFAULT '0',
  `author_id` int(11) NOT NULL,
  `modify_by` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `preivew` varchar(500) NOT NULL,
  `detail` longtext NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `show_counter` int(11) NOT NULL DEFAULT '0',
  `slider` int(11) NOT NULL DEFAULT '0',
  `vote` int(11) NOT NULL DEFAULT '0',
  `tags` varchar(500) NOT NULL,
  `author_id` int(11) NOT NULL,
  `modify_by` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Muharrir'),
(3, 'Mehmon');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `lang_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_id` int(11) NOT NULL,
  `modify_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `static_text`
--

CREATE TABLE `static_text` (
  `id` int(11) NOT NULL,
  `code` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `username` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `name`, `image`, `username`, `password`, `email`, `phone`, `country`, `region`, `district`, `address`, `created`, `updated`, `status`, `active`) VALUES
(2, 1, 'Allabergenov Dilmurod', 'default.png', 'admin', '$2y$13$cZCsIPqtS1pkEteA7sJxAuhzwo9JEQirDWLTzZNPNChiwMgGENxPu', 'mr.j0k3r.d1ma@gmail.com', '', '', '', '', '', '2018-12-24 10:37:43', '2019-02-17 11:31:45', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `result` varchar(300) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT '0',
  `news_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `active` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `question`, `answer`, `result`, `lang_id`, `author_id`, `page_id`, `news_id`, `status`, `active`, `created`, `updated`) VALUES
(1, 'Сайт дизайнига бахо беринг', 'Аъло;\r\nЯхши;\r\nЎртача;\r\nЁмон;', '{\"1\":58,\"2\":4,\"3\":4,\"4\":1}', 1, 2, 0, 0, 1, 1, '2019-01-26 00:07:45', '2019-02-11 14:02:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_text`
--
ALTER TABLE `static_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `static_text`
--
ALTER TABLE `static_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

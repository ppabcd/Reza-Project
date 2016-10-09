-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 02:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aa`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `thumbnail` text NOT NULL,
  `date` text NOT NULL,
  `author` text NOT NULL,
  `url` text NOT NULL,
  `author_url` text NOT NULL,
  `hit` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `content`, `thumbnail`, `date`, `author`, `url`, `author_url`, `hit`) VALUES
(18, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'asset/img/placeholder3.png', '09-10-2016 02:43:45', 'Reza Juliandri', 'lorem5', 'ppabcd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `size` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `path` varchar(225) NOT NULL,
  `image_id` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `size`, `type`, `path`, `image_id`) VALUES
(42, 'aksjhdjaksh', 'kh', 'jkhadkshdkjhkjsdh', 'kjhjkadshkdjhkjash', 'khdkjahskhdjks'),
(43, 'baca.png', '20834', 'image/png', 'asset/img/page/MKqGkbfTSA5kNaCbEbkqanzvsY9o4Fsbaca.png', 'MKqGkbfTSA5kNaCbEbkqanzvsY9o4Fs'),
(44, 'baca.png', '20834', 'image/png', 'asset/img/page/MKqGkbfTSA5kNaCbEbkqanzvsY9o4Fsbaca.png', 'MKqGkbfTSA5kNaCbEbkqanzvsY9o4Fs'),
(45, 'baca.png', '20834', 'image/png', 'asset/img/page/z9GkZgJ47v3zWsm9VeSF0rirH8SkXWiGbaca.png', 'z9GkZgJ47v3zWsm9VeSF0rirH8SkXWiG'),
(46, 'baca.png', '20834', 'image/png', 'asset/img/page/z9GkZgJ47v3zWsm9VeSF0rirH8SkXWiGbaca.png', 'z9GkZgJ47v3zWsm9VeSF0rirH8SkXWiG'),
(47, 'bannde.png', '559348', 'image/png', 'asset/img/page/UgBpt2GvSaSjxKoFslXV55MVpyATQBbannde.png', 'UgBpt2GvSaSjxKoFslXV55MVpyATQB'),
(48, 'bannde.png', '559348', 'image/png', 'asset/img/page/UgBpt2GvSaSjxKoFslXV55MVpyATQBbannde.png', 'UgBpt2GvSaSjxKoFslXV55MVpyATQB'),
(49, 'bannde.png', '559348', 'image/png', 'asset/img/page/ArraytxwhFJAGq1wxcwwGZOjudY7MUBFUuO9Ibannde.png', 'ArraytxwhFJAGq1wxcwwGZOjudY7MUBFUuO9I'),
(50, 'bannde.png', '559348', 'image/png', 'asset/img/page/ArraytxwhFJAGq1wxcwwGZOjudY7MUBFUuO9Ibannde.png', 'ArraytxwhFJAGq1wxcwwGZOjudY7MUBFUuO9I');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `date`) VALUES
(1, 'ppabcd', '23b5ed29a1e8409f70644e44faebae79ae687318efd719d9af29f8496b016a81', '0');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `head` text NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `date` text NOT NULL,
  `url` text NOT NULL,
  `author_url` text NOT NULL,
  `thumbnail` text NOT NULL,
  `author` text NOT NULL,
  `hit` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `head`, `title`, `body`, `date`, `url`, `author_url`, `thumbnail`, `author`, `hit`) VALUES
(1, 'About Me', 'About Me', '<b>Hello wordl</b>', '21/07/00', 'about', 'ppabcd', 'asset/img/placeholder3.png', 'Reza Juliandri', 227),
(20, 'khdkahkshkj', 'askjdaskhdk', 'akshdkhakj', '09-10-2016 07:53:04', 'aljshdj', 'ppabcd', 'asset/img/page/UgBpt2GvSaSjxKoFslXV55MVpyATQBbannde.png', 'Reza Juliandri', 0),
(21, 'khdkahkshkj', 'askjdaskhdk', 'akshdkhakj', '09-10-2016 07:56:31', 'aljshdj', 'ppabcd', 'asset/img/page/ArraytxwhFJAGq1wxcwwGZOjudY7MUBFUuO9Ibannde.png', 'Reza Juliandri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `id_login` bigint(20) NOT NULL,
  `username` text NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `id_login`, `username`, `nama`, `email`, `deskripsi`, `url`) VALUES
(1, 1, 'ppabcd', 'Reza Juliandri', 'rezajuliandri20@gmail.com', 'test', 'ppabcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

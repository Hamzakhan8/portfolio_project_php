-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 11, 2021 at 05:12 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phone` varchar(400) NOT NULL,
  `para1` varchar(1000) NOT NULL,
  `para2` varchar(1000) NOT NULL,
  `para3` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `paragraph1` varchar(300) NOT NULL,
  `img2` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `paragraph2` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_1`
--

DROP TABLE IF EXISTS `contact_1`;
CREATE TABLE IF NOT EXISTS `contact_1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `massage` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_2`
--

DROP TABLE IF EXISTS `contact_2`;
CREATE TABLE IF NOT EXISTS `contact_2` (
  `para1` varchar(1000) NOT NULL,
  `para2` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_2`
--

INSERT INTO `contact_2` (`para1`, `para2`, `location`, `phone`, `email`, `ID`) VALUES
('sadadasdasdasda', 'sdasdasdasdasdasdasasd', 'asdasdasdasdasdadwqfdwedfd2f', '2023321912u491249', 'wqeqweweqw@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(1500) NOT NULL,
  `bg_image` varchar(1500) NOT NULL,
  `h1` varchar(500) NOT NULL,
  `h2` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`ID`, `logo`, `bg_image`, `h1`, `h2`) VALUES
(97, 'uploaded_image/1628012285logo.png', 'uploaded_image/1628012285counters-bg.jpg', 'Hamza khan', 'web developer , full stack web development , front developer , back end web developer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `my`
--

DROP TABLE IF EXISTS `my`;
CREATE TABLE IF NOT EXISTS `my` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `para1` varchar(1500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `para1` varchar(1500) NOT NULL,
  `para2` varchar(1500) NOT NULL,
  `para3` varchar(1500) NOT NULL,
  `para4` varchar(1500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `para1`, `para2`, `para3`, `para4`) VALUES
(4, 'Revamped web application security applications, minimizing hacker attacks from 2.3% to 0.02% Designed and developed user-friendly website, including optimized check-out page that increased user clicks, and subsequently', 'Revamped web application security applications, minimizing hacker attacks from 2.3% to 0.02% Designed and developed user-friendly website, including optimized check-out page that increased user clicks, and subsequently', 'Revamped web application security applications, minimizing hacker attacks from 2.3% to 0.02% Designed and developed user-friendly website, including optimized check-out page that increased user clicks, and subsequently', 'Revamped web application security applications, minimizing hacker attacks from 2.3% to 0.02% Designed and developed user-friendly website, including optimized check-out page that increased user clicks, and subsequently');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `html` varchar(300) NOT NULL,
  `css` varchar(300) NOT NULL,
  `php` varchar(300) NOT NULL,
  `bootstrap` varchar(300) NOT NULL,
  `javascript` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_url`
--

DROP TABLE IF EXISTS `social_url`;
CREATE TABLE IF NOT EXISTS `social_url` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `insta_url` varchar(500) NOT NULL,
  `twitter_url` varchar(500) NOT NULL,
  `facebook_url` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `social_url`
--

INSERT INTO `social_url` (`ID`, `insta_url`, `twitter_url`, `facebook_url`) VALUES
(2, 'https://www.instagram.com/hamzakhan_98/', 'https://twitter.com/hkfungaming', 'https://www.facebook.com/profile.php?id=100028715048525');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

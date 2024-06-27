-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2023 at 01:27 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwsc1000`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pitches`
--

DROP TABLE IF EXISTS `pitches`;
CREATE TABLE IF NOT EXISTS `pitches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pitches`
--

INSERT INTO `pitches` (`id`, `name`) VALUES
(10, 'Bangladesh'),
(11, 'Belarus'),
(12, 'Belgium'),
(13, 'Bhutan'),
(14, 'Bolivia'),
(15, 'Bosnia & Herzegovina'),
(16, 'Botswana'),
(17, 'Brazil'),
(18, 'Bulgaria'),
(19, 'Cambodia'),
(20, 'Cameroon'),
(21, 'Canada'),
(22, 'Chile'),
(23, 'China'),
(24, 'Colombia'),
(25, 'Costa Rica'),
(26, 'Croatia'),
(27, 'Cuba'),
(28, 'Cyprus'),
(29, 'Czech Republic'),
(30, 'Denmark'),
(5, 'Double Tents'),
(31, 'Ecuador'),
(32, 'Egypt'),
(33, 'Estonia'),
(34, 'Ethiopia'),
(9, 'Family Caravan'),
(8, 'Family RV'),
(6, 'Family Tents'),
(35, 'Fiji'),
(36, 'Finland'),
(37, 'France'),
(38, 'Germany'),
(39, 'Ghana'),
(40, 'Greece'),
(41, 'Greenland'),
(42, 'Guinea'),
(43, 'Guyana'),
(44, 'Haiti'),
(45, 'Honduras'),
(46, 'Hong Kong'),
(47, 'Hungary'),
(48, 'Iceland'),
(49, 'India'),
(50, 'Indonesia'),
(51, 'Iran'),
(52, 'Iraq'),
(53, 'Ireland'),
(54, 'Israel'),
(55, 'Italy'),
(56, 'Japan'),
(57, 'Jersey'),
(58, 'Jordan'),
(59, 'Kazakhstan'),
(60, 'Kenya'),
(61, 'Kuwait'),
(62, 'Kyrgyzstan'),
(63, 'Lebanon'),
(64, 'Liberia'),
(65, 'Libya'),
(66, 'Lithuania'),
(67, 'Luxembourg'),
(7, 'Luxurious RV'),
(68, 'Macedonia'),
(69, 'Madagascar'),
(70, 'Malaysia'),
(71, 'Maldives'),
(72, 'Mali'),
(73, 'Mauritius'),
(74, 'Mexico'),
(75, 'Monaco'),
(76, 'Mongolia'),
(77, 'Morocco'),
(3, 'Motorhome'),
(78, 'Namibia'),
(79, 'Nepal'),
(80, 'Netherlands'),
(81, 'New Zealand'),
(82, 'Nigeria'),
(83, 'North Korea'),
(84, 'Norway'),
(85, 'Oman'),
(86, 'Pakistan'),
(87, 'Panama'),
(88, 'Papua New Guinea'),
(89, 'Paraguay'),
(90, 'Peru'),
(91, 'Philippines'),
(92, 'Poland'),
(93, 'Portugal'),
(94, 'Qatar'),
(95, 'Romania'),
(96, 'Russia'),
(97, 'Rwanda'),
(98, 'Saudi Arabia'),
(99, 'Serbia'),
(100, 'Singapore'),
(4, 'Single Tents'),
(101, 'Slovakia'),
(102, 'Slovenia'),
(103, 'South Africa'),
(104, 'South Korea'),
(105, 'Spain'),
(106, 'Sri Lanka'),
(107, 'Sudan'),
(108, 'Sweden'),
(109, 'Switzerland'),
(110, 'Syria'),
(111, 'Taiwan'),
(112, 'Tajikistan'),
(113, 'Tanzania'),
(1, 'Tents'),
(114, 'Thailand'),
(2, 'Touring Caravan'),
(115, 'Tunisia'),
(116, 'Turkey'),
(117, 'Turkmenistan'),
(118, 'Uganda'),
(119, 'Ukraine'),
(120, 'United Arab Emirates'),
(121, 'United Kingdom'),
(122, 'United States'),
(123, 'Uruguay'),
(124, 'Uzbekistan'),
(125, 'Venezuela'),
(126, 'Vietnam'),
(127, 'Yemen'),
(128, 'Zambia'),
(129, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `surname`, `email`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '', '', ''),
(2, 'jac07', '03d67791c858c5103ead33ef5b921290', 'Jac', 'Ayim', 'jac07@gmail.com'),
(3, 'jac06', '33abb5e8914e6e3b4fe4d55e8d73a6ea', 'Jack', 'Appiah', 'jac06@gmail.com'),
(4, 'jac09', '075ea312df20ddee2166854bd980d572', 'Jay', 'Aaahh', 'jac09@gmail.com'),
(5, 'jac08', '6f2a92d843298c994dd3b5274ae21970', 'Jacques', 'Appiagyei', 'jac08@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2023 at 10:16 AM
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
-- Database: `search`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

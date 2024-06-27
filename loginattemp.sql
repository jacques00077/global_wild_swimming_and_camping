-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2023 at 01:31 PM
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
-- Database: `loginattemp`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginlogs`
--

DROP TABLE IF EXISTS `loginlogs`;
CREATE TABLE IF NOT EXISTS `loginlogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `IpAddress` varbinary(16) NOT NULL,
  `TryTime` bigint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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

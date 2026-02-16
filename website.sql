-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2026 at 12:24 PM
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
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int NOT NULL,
  `bday` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `address`, `phone`, `bday`, `username`, `email`, `password`) VALUES
(1, 'ashley', 'ilaya', 9876543, '2025-12-11', 'asliiii', 'bahdah@gmail.com', '1234567890'),
(2, 'allyn', 'tigbauan', 973472324, '2025-12-16', 'allyn', 'allyn@gmail.com', '1234567890'),
(3, 'kathereen', 'calumpang', 928378737, '2025-12-19', 'kath', 'kath@gmail.com', '1234'),
(4, 'mary joy', 'san roque', 98273671, '2025-12-30', 'joyjoy', 'joy@gmail.com', '1234'),
(5, 'jason', 'switch', 983256643, '2025-12-14', 'dodoy', 'jason@gmail.com', '12345'),
(6, 'herlyn', 'rosevelt', 92345634, '2025-12-22', 'herlyn', 'herlyn@gmail.com', '12345'),
(7, 'noemi', 'antique', 96586353, '2025-12-20', 'keara', 'keara@gmail.com', '12345'),
(8, 'john rey', 'san miguel', 96356573, '2025-12-17', 'janriii', 'janrii@gmail.com', '12345'),
(9, 'trixie', 'ilaya', 963544545, '2025-12-26', 'xie', 'trixie@gmail.com', '12345'),
(10, 'sean', 'talisay', 96435677, '2025-12-21', 'sean', 'sean@gmail.com', '256357'),
(13, 'allyn ralf ', 'tigbauan', 2147483647, '2026-01-07', 'lynna', 'allynralf@gmail.com', 'allyn123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

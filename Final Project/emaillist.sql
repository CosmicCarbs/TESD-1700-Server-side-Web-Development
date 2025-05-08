-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2025 at 10:38 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emaillist`
--

-- --------------------------------------------------------

--
-- Table structure for table `emaillist`
--

CREATE TABLE `emaillist` (
  `email` VARCHAR(255) NOT NULL,
  `PkmnTundra` TINYINT(1) NOT NULL,
  `EternalWinter` TINYINT(1) NOT NULL,
  `UpgradeAcademy` TINYINT(1) NOT NULL,
  `RicoSeige` TINYINT(1) NOT NULL,
  `OfAngelsOfDemons` TINYINT(1) NOT NULL,
  `PkmnVR` TINYINT(1) NOT NULL,
  `60SecsIsland` TINYINT(1) NOT NULL,
  `NS:SeaTurtle` TINYINT(1) NOT NULL,
  `BestGame` TINYINT(1) NOT NULL,
  `Concepts` TINYINT(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 05:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scscoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `password`) VALUES
('jagdaleganesh9545@gmail.com', '3275');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sname` text NOT NULL,
  `email` text NOT NULL,
  `branch` text NOT NULL,
  `class` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sname`, `email`, `branch`, `class`, `code`) VALUES
('Jagdale Ganesh Shriram', 'jagdaleganesh9545846507@gmail.com', 'Computer', 'BE', '6500'),
('Borude Mira Krishna i', 'mira.borude@gamil.com', 'Computer', 'BE', '8761'),
('Surse Rekha Bhaskar', 'surserekha98@gmail.com', 'Computer', 'BE', '7254'),
('Sankalp Suhas Mahajan', 'mahajansankalp16@gmail.com', 'Computer', 'BE', '6761'),
('Tanveer sayyad', 'tanveersayyad3113@gmail.com', 'Computer', 'BE', '8074'),
('yogesh mehetre', 'ymehetre76@gmail.com', 'Computer', 'BE', '5866');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

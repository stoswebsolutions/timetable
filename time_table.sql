-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2023 at 08:30 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroom_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classroom_id`, `name`, `status`) VALUES
(2, 'CR1', 4),
(3, 'CR2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `f001`
--

CREATE TABLE `f001` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f001`
--

INSERT INTO `f001` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', 'S1<br>', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', 'S1<br>', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', 'S1<br>', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', 'S1<br>', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f002`
--

CREATE TABLE `f002` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f002`
--

INSERT INTO `f002` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', 'S3<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'L1'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'S3<br>', '-'),
('tuesday', '-<br>-', 'S3<br>', '-<br>-', '-<br>-', '-<br>-', 'L1'),
('wednesday', '-<br>-', '-<br>-', 'S3<br>', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f003`
--

CREATE TABLE `f003` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f003`
--

INSERT INTO `f003` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', 'S5<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', 'S5<br>', '-<br>-', '-<br>-', '-'),
('saturday', 'S5<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', 'S5<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f004`
--

CREATE TABLE `f004` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f004`
--

INSERT INTO `f004` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f005`
--

CREATE TABLE `f005` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f005`
--

INSERT INTO `f005` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'S2<br>', '-'),
('monday', '-<br>-', 'S2<br>', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', 'S2<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', 'S2<br>', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f6`
--

CREATE TABLE `f6` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f6`
--

INSERT INTO `f6` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', 'S4<br>', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', 'S4<br>', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', 'S4<br>', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', 'S4<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f7`
--

CREATE TABLE `f7` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f7`
--

INSERT INTO `f7` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', 'S6<br>', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', 'S6<br>', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', 'S6<br>', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', 'S6<br>', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f8`
--

CREATE TABLE `f8` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f8`
--

INSERT INTO `f8` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f9`
--

CREATE TABLE `f9` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f9`
--

INSERT INTO `f9` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', 'S7<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', 'S7<br>CR2', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', 'S7<br>CR2', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', 'S7<br>CR2', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f10`
--

CREATE TABLE `f10` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f10`
--

INSERT INTO `f10` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', 'S9<br>CR2', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', 'S9<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', 'S9<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', 'S9<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f11`
--

CREATE TABLE `f11` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f11`
--

INSERT INTO `f11` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', 'S11<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', 'S10<br>CR2', '-<br>-', 'S11<br>CR2', '-<br>-', '-<br>-', '-'),
('saturday', 'S10<br>CR2', '-<br>-', 'S11<br>CR2', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', 'S10<br>CR2', '-<br>-', 'S11<br>CR2', '-'),
('wednesday', '-<br>-', '-<br>-', 'S10<br>CR2', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f12`
--

CREATE TABLE `f12` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f12`
--

INSERT INTO `f12` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'L1'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'L1'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f13`
--

CREATE TABLE `f13` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f13`
--

INSERT INTO `f13` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', 'S8<br>CR2', '-<br>-', '-<br>-', '-<br>-', 'L1'),
('saturday', '-<br>-', 'S8<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', 'S8<br>CR2', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', 'S8<br>CR2', '-<br>-', 'L1'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f14`
--

CREATE TABLE `f14` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f14`
--

INSERT INTO `f14` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f15`
--

CREATE TABLE `f15` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f15`
--

INSERT INTO `f15` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'S12<br>CR2', '-'),
('thursday', '-<br>-', 'S12<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', 'S12<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', 'S12<br>CR2', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `f16`
--

CREATE TABLE `f16` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f16`
--

INSERT INTO `f16` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_number` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dummy` varchar(5) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `createAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_number`, `name`, `dummy`, `designation`, `contact`, `email`, `createAt`) VALUES
(6, 'F001', 'Faculty One', 'F1', 'Assistant Professor', '9876543211', 'facultyone@gmail.com', '2023-02-26 15:08:48'),
(7, 'F002', 'Faculty Two', 'F2', 'Assistant Professor', '9876543211', 'f2@gmail.com', '2023-02-24 05:39:17'),
(8, 'F003', 'Faculty Three', 'F3', 'Associate Professor', '9876543211', 'f3@gmail.com', '2023-02-24 05:39:53'),
(9, 'F004', 'Faculty Four', 'F4', 'Lab Faculty', '9876543211', 'f4@gmail.com', '2023-02-24 05:40:35'),
(10, 'F005', 'Faculty Five', 'F5', 'Professor', '9876543211', 'admin@gmail.com', '2023-02-24 05:42:43'),
(11, 'F6', 'F6', 'F6', 'Assistant Professor', '9876543211', 'admin@gmail.com', '2023-02-24 05:43:55'),
(12, 'F7', 'F7', 'F7', 'Associate Professor', '9876543211', 'admin@gmail.com', '2023-02-24 05:44:13'),
(13, 'F8', 'F8', 'F8', 'Lab Faculty', '9876543211', 'admin@gmail.com', '2023-02-24 05:44:37'),
(14, 'F9', 'F9', 'F9', 'Professor', '9876543211', 'admin@gmail.com', '2023-02-24 05:44:55'),
(15, 'F10', 'F10', 'F10', 'Assistant Professor', '9876543211', 'admin@gmail.com', '2023-02-24 05:45:11'),
(16, 'F11', 'F11', 'F11', 'Associate Professor', '9876543211', 'admin@gmail.com', '2023-02-24 05:45:36'),
(17, 'F12', 'F12', 'F12', 'Lab Faculty', '9876543211', 'admin@gmail.com', '2023-02-24 05:46:03'),
(18, 'F13', 'F13', 'F13', 'Professor', '9876543211', 'admin@gmail.com', '2023-02-24 06:16:14'),
(19, 'F14', 'F14', 'F14', 'Assistant Professor', '9876543211', 'admin@gmail.com', '2023-02-24 06:16:30'),
(20, 'F15', 'F15', 'F15', 'Associate Professor', '9876543211', 'admin@gmail.com', '2023-02-24 06:16:47'),
(21, 'F16', 'F16', 'F16', 'Lab Faculty', '9876543211', 'admin@gmail.com', '2023-02-24 06:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `createAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `createAt`) VALUES
(1, 'admin@gmail.com', '123456', '2023-02-22 16:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', 'S5<br>F3', 'S6<br>F7', 'S4<br>F6', 'S1<br>F1', 'S2<br>F5', '-<br>-, -, -'),
('monday', 'S3<br>F2', 'S2<br>F5', 'S5<br>F3', 'S1<br>F1', '-<br>-', 'L1<br>F2, F12, F13'),
('saturday', 'S5<br>F3', 'S6<br>F7', 'S4<br>F6', '-<br>-', '-<br>-', '-<br>-, -, -'),
('thursday', 'S5<br>F3', 'S6<br>F7', 'S4<br>F6', 'S1<br>F1', 'S3<br>F2', '-<br>-, -, -'),
('tuesday', 'S2<br>F5', 'S3<br>F2', 'S6<br>F7', '-<br>-', '-<br>-', 'L1<br>F2, F12, F13'),
('wednesday', 'S4<br>F6', 'S1<br>F1', 'S3<br>F2', 'S2<br>F5', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester4`
--

INSERT INTO `semester4` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', 'S11<br>F11', 'S7<br>F9', 'S9<br>F10', '-<br>-', '-<br>-', '-<br>-, -, -'),
('monday', 'S10<br>', 'S8<br>F13', 'S11<br>F11', 'S7<br>F9', '-<br>-', '-<br>-, -, -'),
('saturday', 'S10<br>', 'S8<br>F13', 'S11<br>F11', 'S7<br>F9', 'S12<br>F15', '-<br>-, -, -'),
('thursday', 'S9<br>F10', 'S12<br>F15', 'S8<br>F13', '-<br>-', '-<br>-', '-<br>-, -, -'),
('tuesday', 'S9<br>F10', 'S12<br>F15', 'S10<br>', 'S8<br>F13', 'S11<br>F11', '-<br>-, -, -'),
('wednesday', 'S9<br>F10', 'S12<br>F15', 'S10<br>', 'S7<br>F9', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester6`
--

INSERT INTO `semester6` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE `semester7` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester7`
--

INSERT INTO `semester7` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semister` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `isAlloted` int(11) NOT NULL DEFAULT '0',
  `allotTheory` varchar(10) DEFAULT NULL,
  `allotPractical` varchar(10) DEFAULT NULL,
  `allotClassrooms` varchar(10) DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `code`, `name`, `course`, `semister`, `department`, `isAlloted`, `allotTheory`, `allotPractical`, `allotClassrooms`, `createAt`) VALUES
(4, 'S1', 'Sub1', 'THEORY', '3', 'Computer Engg.', 1, 'F001', NULL, NULL, '2023-02-24 06:22:02'),
(5, 'S2', 'Sub2', 'THEORY', '3', 'Computer Engg.', 1, 'F005', NULL, NULL, '2023-02-24 06:22:45'),
(6, 'S3', 'Sub3', 'THEORY', '3', 'Computer Engg.', 1, 'F002', NULL, NULL, '2023-02-24 06:33:31'),
(7, 'S4', 'Sub4', 'THEORY', '3', 'Computer Engg.', 1, 'F6', NULL, NULL, '2023-02-24 06:34:08'),
(8, 'S5', 'Sub5', 'THEORY', '3', 'Computer Engg.', 1, 'F003', NULL, NULL, '2023-02-24 06:34:19'),
(9, 'S6', 'Sub6', 'THEORY', '3', 'Computer Engg.', 1, 'F7', NULL, NULL, '2023-02-24 06:34:32'),
(10, 'S7', 'Sub7', 'THEORY', '5', 'Computer Engg.', 1, 'F9', NULL, NULL, '2023-02-24 06:34:44'),
(11, 'S8', 'Sub8', 'THEORY', '5', 'Computer Engg.', 1, 'F13', NULL, NULL, '2023-02-24 06:34:55'),
(12, 'S9', 'Sub9', 'THEORY', '5', 'Computer Engg.', 1, 'F10', NULL, NULL, '2023-02-24 06:35:07'),
(13, 'S10', 'Sub10', 'THEORY', '5', 'Computer Engg.', 0, NULL, NULL, NULL, '2023-02-24 05:53:37'),
(14, 'S11', 'Sub11', 'THEORY', '5', 'Computer Engg.', 1, 'F11', NULL, NULL, '2023-02-24 06:35:28'),
(15, 'S12', 'Sub12', 'THEORY', '5', 'Computer Engg.', 1, 'F15', NULL, NULL, '2023-02-24 06:35:38'),
(16, 'L1', 'Lab1', 'LAB', '3', 'Computer Engg.', 1, 'F002', 'F12', 'F13', '2023-02-26 15:16:13'),
(17, 'L2', 'Lab2', 'LAB', '3', 'Computer Engg.', 1, 'F001', 'F6', 'F7', '2023-02-26 14:03:11'),
(18, 'L3', 'Lab3', 'LAB', '3', 'Computer Engg.', 0, NULL, NULL, NULL, '2023-02-24 05:53:37'),
(19, 'L4', 'Lab4', 'LAB', '5', 'Computer Engg.', 1, 'F9', 'F10', 'F11', '2023-02-24 06:41:35'),
(20, 'L5', 'Lab5', 'LAB', '5', 'Computer Engg.', 1, 'F13', 'F14', 'F15', '2023-02-24 06:41:56'),
(21, 'L6', 'Lab6', 'LAB', '5', 'Computer Engg.', 0, NULL, NULL, NULL, '2023-02-24 05:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `t100`
--

CREATE TABLE `t100` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t100`
--

INSERT INTO `t100` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classroom_id`);

--
-- Indexes for table `f001`
--
ALTER TABLE `f001`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f002`
--
ALTER TABLE `f002`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f003`
--
ALTER TABLE `f003`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f004`
--
ALTER TABLE `f004`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f005`
--
ALTER TABLE `f005`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f6`
--
ALTER TABLE `f6`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f7`
--
ALTER TABLE `f7`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f8`
--
ALTER TABLE `f8`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f9`
--
ALTER TABLE `f9`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f10`
--
ALTER TABLE `f10`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f11`
--
ALTER TABLE `f11`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f12`
--
ALTER TABLE `f12`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f13`
--
ALTER TABLE `f13`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f14`
--
ALTER TABLE `f14`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f15`
--
ALTER TABLE `f15`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f16`
--
ALTER TABLE `f16`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `t100`
--
ALTER TABLE `t100`
  ADD PRIMARY KEY (`day`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

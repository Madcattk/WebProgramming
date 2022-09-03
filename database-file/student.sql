-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 06:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Lastname` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Phone` varchar(10) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Faculty` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Major` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `GPA` double NOT NULL,
  `Province` varchar(20) COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `Firstname`, `Lastname`, `Phone`, `Faculty`, `Major`, `GPA`, `Province`) VALUES
(1, 'Poshnun', 'Oupjan', '0909867350', 'IT', 'ITDI', 4, 'Chonburi'),
(2, 'Pijittra', 'Inpaha', '0000000000', 'IT', 'ITDI', 4, 'Bangkok'),
(3, 'Ken', 'Paul', '0256984569', 'BA', 'BA', 3.23, 'Burirum'),
(4, 'Robert', 'Anthony', '0569897777', 'EGN', 'EGN', 3.98, 'Bangkok'),
(5, 'Camile', 'Paul', '0216669999', 'IT', 'NESC', 2, 'Bangkok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

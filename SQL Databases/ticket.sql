-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 07:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_train_no`
--

CREATE TABLE `store_train_no` (
  `tno` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_train_no`
--

INSERT INTO `store_train_no` (`tno`, `email`) VALUES
(52134, 'ram123@g'),
(52134, 'ram123@g'),
(52134, 'ram123@g'),
(52134, 'ram123@g'),
(52134, 'ram123@g'),
(43875, 'tr#');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_detail`
--

CREATE TABLE `ticket_detail` (
  `PNR` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Train_no` int(11) NOT NULL,
  `Train_nm` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_detail`
--

INSERT INTO `ticket_detail` (`PNR`, `Name`, `Train_no`, `Train_nm`, `email`) VALUES
(79, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(80, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(81, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(82, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(83, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(84, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(85, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(86, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(87, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(88, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(89, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(90, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(91, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(92, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(93, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(94, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(95, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(96, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(97, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(98, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(99, 'Ram ', 52134, 'DURONTO EXPRESS', 'ram123@g'),
(100, 'Anish Sarkar', 0, '', 'anish.sarkar2019@vitstudent.ac.in'),
(101, 'Anish Sarkar', 0, '', 'anish.sarkar2019@vitstudent.ac.in'),
(102, 'Anish Sarkar', 52134, 'DURONTO EXPRESS', 'anish.sarkar2019@vitstudent.ac.in'),
(105, 'Anish Sarkar', 43875, 'POORVA EXPRESS', 'tr#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  ADD PRIMARY KEY (`PNR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_detail`
--
ALTER TABLE `ticket_detail`
  MODIFY `PNR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

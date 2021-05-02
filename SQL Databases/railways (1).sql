-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 07:26 AM
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
-- Database: `railways`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_support`
--

CREATE TABLE `chat_support` (
  `MESSAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_support`
--

INSERT INTO `chat_support` (`MESSAGE`) VALUES
('jdajkasfas'),
('jdajkasfmdapmwfpma[wmdf[lma[ls,l,as'),
('ihouho');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `NAME` varchar(50) NOT NULL,
  `CONTACT_NUMBER` int(10) NOT NULL,
  `EMAIL-ID` varchar(50) DEFAULT NULL,
  `STATE` varchar(50) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`NAME`, `CONTACT_NUMBER`, `EMAIL-ID`, `STATE`, `SUBJECT`) VALUES
('Anish Sarkar', 0, 'anishsarkar001@gmail.com', 'West Bengal', 'hiuhnn');

-- --------------------------------------------------------

--
-- Table structure for table `lounge_booking`
--

CREATE TABLE `lounge_booking` (
  `PNR NUMBER` int(10) NOT NULL,
  `JOURNEY DATE` date NOT NULL,
  `STATION NAME` varchar(50) NOT NULL,
  `ACCOMODATION TYPE` varchar(50) NOT NULL,
  `OCCUPANCY` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lounge_booking`
--

INSERT INTO `lounge_booking` (`PNR NUMBER`, `JOURNEY DATE`, `STATION NAME`, `ACCOMODATION TYPE`, `OCCUPANCY`) VALUES
(2147483647, '2020-06-09', 'Vishakapatnam', 'Executive Lounge', 5);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_information`
--

CREATE TABLE `passenger_information` (
  `TITLE` varchar(50) NOT NULL,
  `FIRST NAME` varchar(50) NOT NULL,
  `LAST NAME` varchar(50) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `NATIONALITY` varchar(50) NOT NULL,
  `AGE` int(4) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger_information`
--

INSERT INTO `passenger_information` (`TITLE`, `FIRST NAME`, `LAST NAME`, `GENDER`, `NATIONALITY`, `AGE`, `email`) VALUES
('Mr.', 'Ram', '', 'Male', 'Indian', 25, 'ram123@g'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Ram', '', 'Male', 'Indian', 19, 'ram123@g'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'anish.sarkar2019@vitstudent.ac.in'),
('Mr.', 'Anish', 'Sarkar', 'Male', 'Indian', 19, 'tr#');

-- --------------------------------------------------------

--
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `TRAIN_NUMBER` int(10) NOT NULL,
  `TRAIN_NAME` varchar(50) NOT NULL,
  `SOURCE_STATION` varchar(50) NOT NULL,
  `DESTINATION_STATION` varchar(50) NOT NULL,
  `AVAILABLE_SEATS` int(4) NOT NULL,
  `WAITING_LIST` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`TRAIN_NUMBER`, `TRAIN_NAME`, `SOURCE_STATION`, `DESTINATION_STATION`, `AVAILABLE_SEATS`, `WAITING_LIST`) VALUES
(43875, 'POORVA EXPRESS', 'HOWRAH', 'PATNA', 538, 0),
(48226, 'KAMAKHYA EXPRESS', 'HOWRAH', 'GUWAHATI', 560, 0),
(52134, 'DURONTO EXPRESS', 'HOWRAH', 'DELHI', 585, 0),
(55336, 'EAST COAST EXPRESS', 'HOWRAH', 'HYDERABAD', 500, 0),
(57234, 'RAJDHANI EXPRESS', 'HOWRAH', 'DELHI', 597, 0),
(63409, 'CHENNAI MAIL', 'HOWRAH', 'CHENNAI', 670, 0),
(64553, 'RANA PRATAP EXPRESS', 'HOWRAH', 'JAIPUR', 770, 0),
(73556, 'DURONTO EXPRESS', 'HOWRAH', 'PATNA', 660, 0),
(74668, 'SARAIGHAT EXPRESS', 'HOWRAH', 'GUWAHATI', 670, 0),
(75643, 'BOMBAY MAIL', 'HOWRAH', 'MUMBAI', 550, 0),
(75980, 'COROMANDEL EXPRESS', 'HOWRAH', 'CHENNAI', 650, 0),
(83445, 'SECUNDERABAD EXPRESS', 'HOWRAH', 'HYDERABAD', 580, 0),
(90223, 'JODHPUR EXPRESS', 'HOWRAH', 'JAIPUR', 650, 0),
(92437, 'SAMARSATA EXPRESS', 'HOWRAH', 'MUMBAI', 598, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`CONTACT_NUMBER`);

--
-- Indexes for table `lounge_booking`
--
ALTER TABLE `lounge_booking`
  ADD PRIMARY KEY (`PNR NUMBER`);

--
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD PRIMARY KEY (`TRAIN_NUMBER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

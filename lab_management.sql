-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 10:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer_in`
--

CREATE TABLE `computer_in` (
  `computer_id` int(3) UNSIGNED NOT NULL,
  `student_fname` varchar(200) NOT NULL,
  `computername` varchar(30) NOT NULL,
  `serialnumber` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer_in`
--

INSERT INTO `computer_in` (`computer_id`, `student_fname`, `computername`, `serialnumber`, `class`, `date`, `times`) VALUES
(10, 'abafashijwenimana donatien', 'hp-elite', '0089876e7637', 'l5soda', '2024-02-10', '00:00:00'),
(12, 'iragene egide', 'positivo', '07889758474', 'l5sod b', '0000-00-00', '00:00:00'),
(13, 'gatore nshiti patrick', 'accer', '0089876e763773636', 'l5soda', '2024-02-18', '00:00:00'),
(14, 'mugisha ange ', 'lenovo thinkpad', '07373738360', 'l5soda', '2024-02-06', '00:00:00'),
(15, 'mugisha kevin', 'hp-elite', '0888367356', 'l5soda', '2024-02-25', '00:00:00'),
(16, 'mugisha dalton', 'dell', '08474747', 'l5soda', '2024-02-11', '10:10:37'),
(17, 'kanamugire jean marie vianney', 'hp-probook', '847474747fhh', 'l5soda', '2024-02-18', '00:00:00'),
(18, 'ndizeye olivier', 'hp-elite', '0089876e7637232', 'l5sodb', '2024-03-02', '10:20:51'),
(19, 'vumiliya solange', 'hp-probook', '0089876e7637232', 'l5soda', '2024-02-06', '10:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `computer_out`
--

CREATE TABLE `computer_out` (
  `computer_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `student_fname` varchar(200) NOT NULL,
  `computername` varchar(30) NOT NULL,
  `serialnumber` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `computer_present`
--

CREATE TABLE `computer_present` (
  `computer_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `student_fname` varchar(200) NOT NULL,
  `computername` varchar(30) NOT NULL,
  `serialnumber` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `times` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer_present`
--

INSERT INTO `computer_present` (`computer_id`, `student_fname`, `computername`, `serialnumber`, `class`, `date`, `times`) VALUES
(010, 'abafashijwenimana donatien', 'hp-elite', '0089876e7637', 'l5soda', '2024-02-10', '00:00:00'),
(012, 'iragene egide', 'positivo', '07889758474', 'l5sod b', '0000-00-00', '00:00:00'),
(013, 'gatore nshiti patrick', 'accer', '0089876e763773636', 'l5soda', '2024-02-18', '00:00:00'),
(014, 'mugisha ange ', 'lenovo thinkpad', '07373738360', 'l5soda', '2024-02-06', '00:00:00'),
(015, 'mugisha kevin', 'hp-elite', '0888367356', 'l5soda', '2024-02-25', '00:00:00'),
(016, 'mugisha dalton', 'dell', '08474747', 'l5soda', '2024-02-11', '10:10:37'),
(017, 'kanamugire jean marie vianney', 'hp-probook', '847474747fhh', 'l5soda', '2024-02-18', '00:00:00'),
(018, 'ndizeye olivier', 'hp-elite', '0089876e7637232', 'l5sodb', '2024-03-02', '10:20:51'),
(019, 'vumiliya solange', 'hp-probook', '0089876e7637232', 'l5soda', '2024-02-06', '10:47:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer_in`
--
ALTER TABLE `computer_in`
  ADD PRIMARY KEY (`computer_id`);

--
-- Indexes for table `computer_out`
--
ALTER TABLE `computer_out`
  ADD PRIMARY KEY (`computer_id`);

--
-- Indexes for table `computer_present`
--
ALTER TABLE `computer_present`
  ADD KEY `computer_id` (`computer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer_in`
--
ALTER TABLE `computer_in`
  MODIFY `computer_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `computer_out`
--
ALTER TABLE `computer_out`
  ADD CONSTRAINT `computer_out_ibfk_1` FOREIGN KEY (`computer_id`) REFERENCES `computer_in` (`computer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `computer_present`
--
ALTER TABLE `computer_present`
  ADD CONSTRAINT `computer_present_ibfk_1` FOREIGN KEY (`computer_id`) REFERENCES `computer_in` (`computer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

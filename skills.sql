-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 06:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `project` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `comment`, `project`) VALUES
(1, 'John Doe', 'I am truly impressed with how you have managed to meet every goal set before you.It is not an exaggeration to say that you did a tremendous job with this project.', 'education website'),
(2, 'Jane Doe', 'Consistency is one of your biggest strengths. I can always count on you to treat all of your tasks with importance while also recognizing the value of prioritizing. Keep up the good work!', 'economic website'),
(3, 'Filan Fisteku', 'You did a great job with your presentation today. It brought to light some important points that we were overlooking, and the data revealed our strengths and weaknesses. It has certainly aided in making everyone understand where our priorities should', 'sales website');

-- --------------------------------------------------------

--
-- Table structure for table `mesazhetederguara`
--

CREATE TABLE `mesazhetederguara` (
  `mid` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesazhetederguara`
--

INSERT INTO `mesazhetederguara` (`mid`, `name`, `lastname`, `email`, `message`) VALUES
(1, 'uran', 'lajqi', 'uran.lajci@student.uni-pr.edu', 'Enter your message \r\n            '),
(6, 'john', 'doe', 'john@exaple.com', 'good website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `mesazhetederguara`
--
ALTER TABLE `mesazhetederguara`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mesazhetederguara`
--
ALTER TABLE `mesazhetederguara`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 09:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyakarenzo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `fname`, `lname`, `email`, `username`, `password`) VALUES
(1, 'akimana', 'amina', 'ingabe@gmail.com', 'amina', '123'),
(2, 'iryivuze', 'darius', 'darius@gmail.com', 'iryivuze', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mothername` varchar(50) DEFAULT NULL,
  `fathername` varchar(50) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `cellule` varchar(100) DEFAULT NULL,
  `yearofstudy` varchar(20) DEFAULT NULL,
  `feespaid` varchar(20) DEFAULT NULL,
  `comment` varchar(2000) DEFAULT NULL,
  `transdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `fname`, `lname`, `dob`, `mothername`, `fathername`, `gender`, `district`, `sector`, `village`, `cellule`, `yearofstudy`, `feespaid`, `comment`, `transdate`) VALUES
(2, 'karamage', 'gerard', '2018-10-12', 'mukabishwi alphonsine', 'ngendahimana alphonse', 'male', 'nyabinoni', 'gahanga', 'gakoni', 'kibiyanja', 'S3A', '1200000', 'I have proved that the student is paid full fees', '2018-07-07'),
(4, 'ngabonziza', 'samuela', '1996-06-05', 'ndongeye alice', 'habakubaho jmv', 'female', 'nyamagabe', 'gasiza', 'amahoro', 'bwishyura', 'S3A', '50000', 'she is not yet paid', '2018-07-07'),
(5, 'ingabe', 'lior doran', '2009-11-18', 'mukundiricyo goreth', 'ngarambe jean claude', 'male', 'gasabo', 'kimironko', 'buhoro', 'kibabagabaga', 'S1B', '1200000', 'paid all settlement in full', '2018-07-07'),
(8, 'carlos', 'munyamibwa', '2018-07-05', 'habarugira', 'byungura', 'male', 'NYABIHU', 'GASHONGA', 'amahoro', 'bwishyura', 'S3A', '20000', 'not paid', '2018-07-05'),
(9, 'irakoze', 'yves', '2016-07-07', 'habarugira', 'M', 'male', 'KAMONYI', 'MURURU', 'bwishyura', 'amahoro', '', '20000', 'not all', '2018-05-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

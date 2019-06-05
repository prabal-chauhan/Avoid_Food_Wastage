-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2015 at 12:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_agent`
--

CREATE TABLE IF NOT EXISTS `add_agent` (
  `agid` int(12) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `agname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `agemail` varchar(20) NOT NULL,
  `agphone` varchar(15) NOT NULL,
  `agplace` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_agent`
--

INSERT INTO `add_agent` (`agid`, `uname`, `agname`, `password`, `agemail`, `agphone`, `agplace`) VALUES
(4, 'abi', 'abi', 'abi', 'abim@gmail.com', '9585757677', 't nagar'),
(5, 'devi', 'devi', 'devi', 'devi@gmail.com', '9867564534', 'ashokpillar'),
(6, 'riya', 'riya bharat', 'riya', 'riya@gmail.com', '7867454545', 'mambalam'),
(7, 'selvi', 'selvi', 'selvi', 'selvi@gmail.com', '9585757677', 'guindy'),
(8, 'lakshman', 'lakshman', 'lakshman', 'lakshman@gmail.com', '9767676756', 'ashokpillar'),
(9, 'kani', 'kani', 'kani', 'kani12@gmail.com', '7676765656', 't nagar'),
(10, 'gayathri', 'gayathri', 'gayathri', 'gayathri12@gmail.com', '7656432323', 'guindy');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aname` varchar(20) NOT NULL,
  `apass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aname`, `apass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_request`
--

CREATE TABLE IF NOT EXISTS `admin_request` (
  `uid` int(12) NOT NULL,
  `agid` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `food` varchar(20) NOT NULL,
  `message` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_request`
--

INSERT INTO `admin_request` (`uid`, `agid`, `name`, `email`, `phone`, `address`, `food`, `message`, `status`) VALUES
(3, 4, 'abimanyu', 'abim@gmail.com', '9867564534', 'fwgwg', '30', 'vxbx', 'comple'),
(5, 5, 'ramya', 'ramya@gmail.com', '9867564534', 'fgeheh', '20', 'cvgffhg', 'completed'),
(7, 5, 'steffi', 'steffi@gmail.com', '9867564534', 'sgsdgsg', '20', 'dsdg', 'completed'),
(8, 5, 'sankar', 'sankar.r@gmail.com', '9585757677', 'ashokpillar', '30', 'collect food', 'completed'),
(9, 6, 'deebhu', 'deebhu05@gmail.com', '9867564534', 'mambalam', '30', 'collect food', 'completed'),
(10, 8, 'nakul', 'nakul@gmail.com', '8978676767', 'ashokpillar', '50', 'collect food', 'completed'),
(12, 9, 'sathya', 'sathya@gmail.com', '8787656565', 't nagar', '50', 'collect food from donor', 'completed'),
(13, 10, 'kavithya', 'kavithya@gmail.com', '8776563434', 'guindy', '70', 'collect food from donor', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE IF NOT EXISTS `food_details` (
  `id` int(11) NOT NULL,
  `uid` int(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `av_food` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_details`
--

INSERT INTO `food_details` (`id`, `uid`, `name`, `email`, `phone`, `address`, `av_food`) VALUES
(5, 5, 'ramya', 'ramya@gmail.com', '9867564534', 'fgeheh', '20'),
(6, 3, 'abimanyu', 'abim@gmail.com', '9867564534', 'fwgwg', '30'),
(7, 6, 'rani', 'rani@gmail.com', '7867454545', 'sgsgshsh', '40'),
(8, 7, 'steffi', 'steffi@gmail.com', '9867564534', 'sgsdgsg', '20'),
(9, 8, 'sankar', 'sankar.r@gmail.com', '9585757677', 'ashokpillar', '30'),
(10, 9, 'deebhu', 'deebhu05@gmail.com', '9867564534', 'mambalam', '30'),
(11, 10, 'nakul', 'nakul@gmail.com', '8978676767', 'ashokpillar', '50'),
(12, 12, 'sathya', 'sathya@gmail.com', '8787656565', 't nagar', '50'),
(13, 13, 'kavithya', 'kavithya@gmail.com', '8776563434', 'guindy', '70');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE IF NOT EXISTS `registeration` (
  `uid` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`uid`, `name`, `password`, `email`, `dob`, `phone`) VALUES
(3, 'abimanyu', 'abi', 'abim@gmail.com', '19/04/1992', '9867564534'),
(5, 'ramya', 'ramya', 'ramya@gmail.com', '19/04/1992', '9867564534'),
(6, 'rani', 'rani', 'rani@gmail.com', '19/09/1990', '7867454545'),
(7, 'steffi', 'steffi', 'steffi@gmail.com', '19/04/1992', '9867564534'),
(8, 'sankar', 'sankar', 'sankar.r@gmail.com', '08/08/1982', '9585757677'),
(9, 'deebhu', 'deebhu', 'deebhu05@gmail.com', '12/09/1990', '9867564534'),
(10, 'nakul', 'nakul', 'nakul@gmail.com', '19/04/1992', '8978676767'),
(11, 'nandhini', 'nandhini', 'nandhini@gmail.com', '12/09/1990', '9676767454'),
(12, 'sathya', 'sathya', 'sathya@gmail.com', '13/09/1980', '8787656565'),
(13, 'kavithya', 'kavithya', 'kavithya@gmail.com', '12/09/1990', '8776563434');

-- --------------------------------------------------------

--
-- Table structure for table `send_donator`
--

CREATE TABLE IF NOT EXISTS `send_donator` (
  `id` int(12) NOT NULL,
  `uid` int(12) NOT NULL,
  `agid` int(12) NOT NULL,
  `agname` varchar(30) NOT NULL,
  `agemail` varchar(30) NOT NULL,
  `agphone` varchar(20) NOT NULL,
  `agplace` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_donator`
--

INSERT INTO `send_donator` (`id`, `uid`, `agid`, `agname`, `agemail`, `agphone`, `agplace`) VALUES
(13, 3, 4, 'abi', 'abim@gmail.com', '9585757677', 't nagar'),
(14, 8, 4, 'abi', 'abim@gmail.com', '9585757677', 't nagar'),
(15, 9, 6, 'riya bharat', 'riya@gmail.com', '7867454545', 'mambalam'),
(16, 10, 8, 'lakshman', 'lakshman@gmail.com', '9767676756', 'ashokpillar'),
(17, 12, 9, 'kani', 'kani12@gmail.com', '7676765656', 't nagar'),
(18, 13, 10, 'gayathri', 'gayathri12@gmail.com', '7656432323', 'guindy');

-- --------------------------------------------------------

--
-- Table structure for table `send_message`
--

CREATE TABLE IF NOT EXISTS `send_message` (
  `id` int(12) NOT NULL,
  `uid` int(12) NOT NULL,
  `agid` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `food` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_message`
--

INSERT INTO `send_message` (`id`, `uid`, `agid`, `name`, `email`, `phone`, `address`, `food`, `status`) VALUES
(3, 7, 5, 'steffi', 'steffi@gmail.com', '9867564534', 'sgsdgsg', '20', 'comple'),
(4, 8, 5, 'sankar', 'sankar.r@gmail.com', '9585757677', 'ashokpillar', '30', 'completed'),
(5, 9, 6, 'deebhu', 'deebhu05@gmail.com', '9867564534', 'mambalam', '30', 'completed'),
(6, 10, 8, 'nakul', 'nakul@gmail.com', '8978676767', 'ashokpillar', '50', 'completed'),
(7, 12, 9, 'sathya', 'sathya@gmail.com', '8787656565', 't nagar', '50', 'completed'),
(8, 13, 10, 'kavithya', 'kavithya@gmail.com', '8776563434', 'guindy', '70', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE IF NOT EXISTS `user_comments` (
  `id` int(12) NOT NULL,
  `uid` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `uid`, `name`, `email`, `comments`) VALUES
(1, 5, 'ramya', 'ramya@gmail.com', 'dhdnhdghn'),
(2, 10, 'nakul', 'nakul@gmail.com', 'very useful'),
(3, 12, 'sathya', 'sathya@gmail.com', 'very useful'),
(4, 13, 'kavithya', 'kavithya@gmail.com', 'very helpful');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_agent`
--
ALTER TABLE `add_agent`
  ADD PRIMARY KEY (`agid`) COMMENT 'identification';

--
-- Indexes for table `admin_request`
--
ALTER TABLE `admin_request`
  ADD PRIMARY KEY (`uid`) COMMENT 'identification';

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`id`) COMMENT 'identification';

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`uid`) COMMENT 'identification';

--
-- Indexes for table `send_donator`
--
ALTER TABLE `send_donator`
  ADD PRIMARY KEY (`id`) COMMENT 'identification';

--
-- Indexes for table `send_message`
--
ALTER TABLE `send_message`
  ADD PRIMARY KEY (`id`) COMMENT 'identification';

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`) COMMENT 'identification';

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_agent`
--
ALTER TABLE `add_agent`
  MODIFY `agid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin_request`
--
ALTER TABLE `admin_request`
  MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `send_donator`
--
ALTER TABLE `send_donator`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `send_message`
--
ALTER TABLE `send_message`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

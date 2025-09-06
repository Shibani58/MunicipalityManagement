-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 12:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muncipality`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration_login`
--

CREATE TABLE `administration_login` (
  `username` varchar(15) NOT NULL DEFAULT 'NOT NULL',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration_login`
--

INSERT INTO `administration_login` (`username`, `password`) VALUES
('sandy', '123');

-- --------------------------------------------------------

--
-- Table structure for table `birthid`
--

CREATE TABLE `birthid` (
  `birthid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthid`
--

INSERT INTO `birthid` (`birthid`) VALUES
('1245'),
('1456'),
('1478'),
('6767');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `dob` date NOT NULL,
  `birthid` varchar(15) NOT NULL,
  `citizenid` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `wardnumber` int(10) NOT NULL,
  `housenumber` varchar(10) NOT NULL,
  `maritialstatus` varchar(10) NOT NULL,
  `muncipalityname` varchar(15) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`dob`, `birthid`, `citizenid`, `gender`, `phonenumber`, `wardnumber`, `housenumber`, `maritialstatus`, `muncipalityname`, `firstname`, `middlename`, `lastname`) VALUES
('1999-02-26', '1456', '10-23-45-6541', 'male', '7639232976', 2, 'A-35', 'Unmarried', 'Rajbiraj', 'sandy', '', 'yadav'),
('2016-11-19', '1478', '15-43-12-1475', 'male', '1237852388', 5, 'A-23', 'Unmarried', 'Rajbiraj', 'yogesh', '', 'mahato'),
('1999-10-23', '6767', '12-34-56-789', 'male', '9805996163', 2, 'A-305', 'Unmarried', 'Rajbiraj', 'kumar', '', 'mahat');

-- --------------------------------------------------------

--
-- Table structure for table `citizenid`
--

CREATE TABLE `citizenid` (
  `citizenid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizenid`
--

INSERT INTO `citizenid` (`citizenid`) VALUES
('10-23-45-6541'),
('12-34-56-789'),
('15-43-12-1475');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `complain` varchar(655) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `complain`, `status`) VALUES
(1, 'In the wardnumber -2 ,there is problem of drinking water since 1 week\r\nplease, solve the problem as soon as possible.', 'seen'),
(3, 'Its my second complain ', 'seen'),
(4, 'I have issue with the sanitation system in my ward number-8', 'seen'),
(5, 'Ward number-4 has the problem of cleanliness, please solve this.', 'seen'),
(6, 'Water problem', 'seen'),
(7, 'hi problem of pollution', 'seen'),
(8, 'hi u need to solve themle of dust', 'seen'),
(9, 'we have complain of draingae .', 'seen'),
(10, 'raja tati', 'seen'),
(11, 'hii', 'seen'),
(12, 'hello', 'seen'),
(13, 'there is water drainage system problem in the ward number-2', 'seen'),
(14, '', 'seen'),
(15, 'there is huge demand of covid vaccine....', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `munci_details`
--

CREATE TABLE `munci_details` (
  `munname` text NOT NULL,
  `zone` text NOT NULL,
  `district` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `munci_details`
--

INSERT INTO `munci_details` (`munname`, `zone`, `district`) VALUES
('Rajbiraj', 'sagarmatha', 'saptari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration_login`
--
ALTER TABLE `administration_login`
  ADD UNIQUE KEY `1` (`username`);

--
-- Indexes for table `birthid`
--
ALTER TABLE `birthid`
  ADD PRIMARY KEY (`birthid`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`birthid`),
  ADD KEY `citizenid` (`citizenid`);

--
-- Indexes for table `citizenid`
--
ALTER TABLE `citizenid`
  ADD PRIMARY KEY (`citizenid`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `munci_details`
--
ALTER TABLE `munci_details`
  ADD PRIMARY KEY (`munname`(15));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citizen`
--
ALTER TABLE `citizen`
  ADD CONSTRAINT `citizen_ibfk_1` FOREIGN KEY (`citizenid`) REFERENCES `citizenid` (`citizenid`),
  ADD CONSTRAINT `citizen_ibfk_2` FOREIGN KEY (`birthid`) REFERENCES `birthid` (`birthid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 08:17 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_test_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_employee`
--

CREATE TABLE IF NOT EXISTS `t_employee` (
`User_id` bigint(20) unsigned NOT NULL,
  `Registration_ID` varchar(255) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Mobile` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Resume` varchar(255) DEFAULT NULL,
  `Username` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_employee`
--

INSERT INTO `t_employee` (`User_id`, `Registration_ID`, `Name`, `Mobile`, `Email`, `Photo`, `Resume`, `Username`, `Password`) VALUES
(1, 'CSENEP00250', 'raju', '8861223320', 'vijaynkhot@gmail.com', 'images/Snapshot_20151110 (41).jpg', 'resumes/vijay_resume_latest_1.docx', 'user_raju', '91d4635fe612bfc8a822a2a1780c07b7'),
(2, 'ITIND00252', 'ramesh', '8861223320', 'vijaynkhot39@gmail.com', NULL, NULL, 'user_ramesh', '4c4faaec3785c40ec3c96c2b45edf4c2'),
(3, 'CSIND22345', 'arun', '8861223320', 'vijaynkhot@gmail.com', 'images/Snapshot_2015906 (2).jpg', 'resumes/vijay resume 1.docx', 'user_arun', 'c0e48adc07e3485370f8892ba538f3d6'),
(4, 'ITIND23456', 'vijay', '8861223320', 'vijaynkhot@gmail.com', 'images/bengal-cat-spots-fur-thor-15.jpg', NULL, 'user_vijay', '76872ff76ec9b13220c94abb1bea8449');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email_admin` varchar(256) NOT NULL,
  `user_pword` varchar(256) NOT NULL,
  `user_priority` int(4) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email_admin`, `user_pword`, `user_priority`, `modified_on`, `created_on`) VALUES
(1, 'admin', 'khotvijayn@gmail.com', 'e99a18c428cb38d5f260853678922e03', 1, '2015-05-17 00:00:00', '2015-05-17 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_employee`
--
ALTER TABLE `t_employee`
 ADD PRIMARY KEY (`User_id`), ADD UNIQUE KEY `emp_id` (`User_id`), ADD UNIQUE KEY `emp_code` (`Registration_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_employee`
--
ALTER TABLE `t_employee`
MODIFY `User_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

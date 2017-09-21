-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 04:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cseku_17_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseNumber` varchar(256) NOT NULL,
  `courseTitle` varchar(256) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `termYearId` int(11) NOT NULL,
  `sessionId` int(11) NOT NULL,
  `result` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `sessionNumber` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `sessionNumber`) VALUES
(1, '2013-14'),
(2, '2014-15'),
(3, '2012-13'),
(4, '2014-15'),
(5, '2015-16'),
(6, '2016-17'),
(7, '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `middle_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `student_id` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `year_term_id` int(11) NOT NULL,
  `sessionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `syllabus_Name_Id` int(11) NOT NULL,
  `course_Id` int(11) NOT NULL,
  `term_Year_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_type`
--

CREATE TABLE `syllabus_type` (
  `id` int(11) NOT NULL,
  `syllabus_Name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role` enum('Teacher','Student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `user_role`) VALUES
(11, 'admin', '202cb962ac59075b964b07152d234b70', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `year_term`
--

CREATE TABLE `year_term` (
  `id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_term`
--

INSERT INTO `year_term` (`id`, `year`, `term`) VALUES
(1, '1st', 'I'),
(2, '1st', 'II'),
(3, '2nd', 'I'),
(4, '2nd', 'II'),
(5, '3rd', 'I'),
(6, '3rd', 'II'),
(7, '4th', 'I'),
(8, '4th', 'II'),
(9, '4th', 'special I'),
(10, '4th', 'special II');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`userId`),
  ADD KEY `course_Id` (`courseId`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `term_Year_id` (`year_term_id`),
  ADD KEY `session_ID` (`sessionId`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabus_Name_Id` (`syllabus_Name_Id`),
  ADD KEY `course_Id` (`course_Id`),
  ADD KEY `term_Year_Id` (`term_Year_Id`);

--
-- Indexes for table `syllabus_type`
--
ALTER TABLE `syllabus_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_term`
--
ALTER TABLE `year_term`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_registration`
--
ALTER TABLE `course_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `syllabus_type`
--
ALTER TABLE `syllabus_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `year_term`
--
ALTER TABLE `year_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD CONSTRAINT `course_registration_ibfk_3` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_registration_ibfk_4` FOREIGN KEY (`userId`) REFERENCES `student` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`sessionId`) REFERENCES `session` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_6` FOREIGN KEY (`year_term_id`) REFERENCES `year_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `syllabus_ibfk_4` FOREIGN KEY (`syllabus_Name_Id`) REFERENCES `syllabus_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syllabus_ibfk_5` FOREIGN KEY (`term_Year_Id`) REFERENCES `year_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

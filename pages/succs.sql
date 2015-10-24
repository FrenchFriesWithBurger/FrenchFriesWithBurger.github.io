-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2015 at 09:03 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `succs`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `activity_id` varchar(20) NOT NULL,
  `proposer` int(20) NOT NULL,
  `event_name` text NOT NULL,
  `society_in_charged` int(20) NOT NULL,
  `event_summary` int(20) NOT NULL,
  `venue` int(20) NOT NULL,
  `date` int(20) NOT NULL,
  `time` int(20) NOT NULL,
  `double3_apply` int(20) NOT NULL,
  `participants` int(20) NOT NULL,
  `conslutant_apply` int(20) NOT NULL,
  `studentunion_apply` int(20) NOT NULL,
  `generaloffice_apply` int(20) NOT NULL,
  `studentoffice_apply` int(20) NOT NULL,
  `status` int(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity_venue_rent`
--

CREATE TABLE IF NOT EXISTS `activity_venue_rent` (
  `activity_id` int(11) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(15) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `semester_a` int(1) NOT NULL,
  `semester_b` int(1) NOT NULL,
  `semester_c` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `semester_a`, `semester_b`, `semester_c`) VALUES
('CSIS2124 ', 'Multimedia Development', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_borrowed`
--

CREATE TABLE IF NOT EXISTS `equipment_borrowed` (
  `item_id` varchar(20) NOT NULL,
  `item_to_borrowed` int(20) NOT NULL,
  `borrowed_date_start` int(20) NOT NULL,
  `borrowed_date_end` int(20) NOT NULL,
  `borrowed_time_start` int(20) NOT NULL,
  `borrowed_time_end` int(20) NOT NULL,
  `applicant` text NOT NULL,
  `application_date` int(20) NOT NULL,
  `event_name` text NOT NULL,
  `purpose` text NOT NULL,
  `venue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_store`
--

CREATE TABLE IF NOT EXISTS `equipment_store` (
  `item_id` int(20) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_store` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_store`
--

INSERT INTO `equipment_store` (`item_id`, `item_name`, `item_store`) VALUES
(1, 'PA System', 5),
(2, 'MIC', 14),
(3, 'LCD Projector', 16),
(4, 'MIC Stand', 5),
(5, 'Projector Screen', 5),
(6, 'Computer Audio Cable', 20),
(7, 'Megaphone', 20),
(8, 'Trolley', 8);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `course_id` varchar(20) NOT NULL,
  `exam_date` int(20) NOT NULL,
  `exam_time` int(20) NOT NULL,
  `exam_place` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `lecturer_id` varchar(20) NOT NULL,
  `lecturer_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_course`
--

CREATE TABLE IF NOT EXISTS `lecturer_course` (
  `year` int(11) NOT NULL,
  `smester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` varchar(20) NOT NULL,
  `post_comment` text NOT NULL,
  `post_person` text NOT NULL,
  `post_img` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` varchar(20) NOT NULL,
  `staff_name` text NOT NULL,
  `position` int(20) NOT NULL,
  `officy` int(20) NOT NULL,
  `department` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` varchar(20) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_batch` varchar(20) NOT NULL,
  `student_department` varchar(20) NOT NULL,
  `program` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_exam`
--

CREATE TABLE IF NOT EXISTS `student_exam` (
  `student_place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_society`
--

CREATE TABLE IF NOT EXISTS `student_society` (
  `society_id` varchar(20) NOT NULL,
  `society_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_std_society`
--

CREATE TABLE IF NOT EXISTS `student_std_society` (
  `student_id` int(11) NOT NULL,
  `society_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(20) NOT NULL,
  `venue_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`) VALUES
(1, 'Main Auditorium'),
(2, 'LG Stage'),
(3, 'Auditorium A'),
(4, 'Auditorium B'),
(5, 'Open Space'),
(6, '2C Classroom'),
(7, '2D Classroom'),
(8, '2E Classroom'),
(9, '2F Classroom'),
(10, '2G Classroom'),
(11, '2H Classroom'),
(12, '2E Classroom'),
(13, '2F Classroom');

-- --------------------------------------------------------

--
-- Table structure for table `venue_rent`
--

CREATE TABLE IF NOT EXISTS `venue_rent` (
  `venue_rent_id` varchar(20) NOT NULL,
  `rent_date_start` int(20) NOT NULL,
  `rent_date_end` int(20) NOT NULL,
  `rent_time_start` int(20) NOT NULL,
  `rent_time_end` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `event_name` int(20) NOT NULL,
  `department` int(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `equipment_borrowed`
--
ALTER TABLE `equipment_borrowed`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `equipment_store`
--
ALTER TABLE `equipment_store`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_society`
--
ALTER TABLE `student_society`
  ADD PRIMARY KEY (`society_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `venue_rent`
--
ALTER TABLE `venue_rent`
  ADD PRIMARY KEY (`venue_rent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment_store`
--
ALTER TABLE `equipment_store`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

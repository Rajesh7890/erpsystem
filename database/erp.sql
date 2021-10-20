-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 01:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `name`, `password`, `email`, `mobile`, `address`) VALUES
('admin7890', 'Admin', '78907890', 'r.k.sahoo7890@gamail.com', '8342003789', '358, Rental Colony, IRC Village, Bhubaneswar');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `regd_no` varchar(20) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL,
  `sub5` varchar(15) NOT NULL,
  `sub6` varchar(15) NOT NULL,
  `lab1` int(11) NOT NULL,
  `lab2` varchar(15) NOT NULL,
  `lab3` varchar(15) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `regd_no`, `sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `lab1`, `lab2`, `lab3`, `branch`) VALUES
(1, '1401219113', '8th', 22, 23, 20, 26, '24', '', 13, '', '', 'CSE'),
(2, '1401219069', '8th', 25, 26, 25, 22, '22', '', 16, '', '', 'CSE'),
(3, '1401219045', '8th', 0, 0, 0, 0, '', '', 0, '', '', 'CIVIL'),
(5, '1401219268', '8th', 20, 23, 26, 24, '22', '', 19, '', '', 'CSE'),
(6, '1401219090', '8th', 24, 27, 28, 21, '25', '', 22, '', '', 'CSE'),
(7, '1401219059', '8th', 27, 22, 20, 19, '16', '', 23, '', '', 'CSE'),
(8, '1401219063', '8th', 20, 23, 18, 23, '24', '', 16, '', '', 'CSE'),
(9, '1401219065', '8th', 22, 20, 17, 23, '22', '', 20, '', '', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `avail_pieces` int(11) NOT NULL,
  `total_pieces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author_name`, `publisher`, `edition`, `branch`, `avail_pieces`, `total_pieces`) VALUES
('1200001', 'Introduction to Cloud Computing', 'BS Nanda', 'MS GREW', '1st', 'CSE', 5, 6),
('120002', 'Environment Engineering', 'SS Raut', 'SNS', '3rd', 'CSE', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `book_barrowed`
--

CREATE TABLE `book_barrowed` (
  `id` int(11) NOT NULL,
  `regd_no` varchar(50) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `date_issue` date NOT NULL,
  `date_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_barrowed`
--

INSERT INTO `book_barrowed` (`id`, `regd_no`, `book_id`, `date_issue`, `date_return`) VALUES
(1, '1401219113', '1200001', '2018-02-01', '2018-03-16'),
(2, '1401219113', '120002', '2018-03-16', '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `regd_no` int(11) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `sub1` varchar(5) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL,
  `sub5` varchar(5) NOT NULL,
  `sub6` varchar(5) NOT NULL,
  `lab1` int(11) NOT NULL,
  `lab2` varchar(5) NOT NULL,
  `lab3` varchar(5) NOT NULL,
  `internal` varchar(10) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `regd_no`, `sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `lab1`, `lab2`, `lab3`, `internal`, `branch`) VALUES
(1, 1401219113, '8th', '25', 26, 24, 21, '02', '', 21, '', '', '1st', 'CSE'),
(2, 1401219113, '8th', '26', 26, 24, 21, '02', '', 22, '', '', '2nd', 'CSE'),
(3, 1401219069, '8th', '25', 26, 33, 15, '22', '', 18, '', '', '1st', 'CSE'),
(4, 1401219069, '8th', '14', 25, 14, 17, '22', '', 18, '', '', '2nd', 'CSE'),
(5, 1401219045, '8th', '', 0, 0, 0, '', '', 0, '', '', '1st', 'CIVIL'),
(6, 1401219045, '8th', '', 0, 0, 0, '', '', 0, '', '', '2nd', 'CIVIL'),
(7, 1401219268, '8th', '23', 20, 24, 19, '29', '', 22, '', '', '1st', 'CSE'),
(8, 1401219268, '8th', '26', 24, 22, 19, '18', '', 23, '', '', '2nd', 'CSE'),
(9, 1401219090, '8th', '16', 19, 18, 16, '22', '', 16, '', '', '1st', 'CSE'),
(10, 1401219090, '8th', '26', 22, 27, 22, '23', '', 19, '', '', '2nd', 'CSE'),
(11, 1401219059, '8th', '26', 29, 22, 27, '20', '', 26, '', '', '1st', 'CSE'),
(12, 1401219059, '8th', '23', 26, 22, 27, '19', '', 21, '', '', '2nd', 'CSE'),
(13, 1401219063, '8th', '21', 22, 21, 16, '19', '', 28, '', '', '1st', 'CSE'),
(14, 1401219063, '8th', '23', 22, 21, 16, '19', '', 17, '', '', '2nd', 'CSE'),
(15, 1401219065, '8th', '19', 26, 24, 22, '19', '', 16, '', '', '1st', 'CSE'),
(16, 1401219065, '8th', '15', 16, 19, 22, '25', '', 27, '', '', '2nd', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `regd_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `published` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `regd_no`, `email`, `comment`, `published`) VALUES
(2, '1401219113', 'r.k.sahoo7890@gmail.com', 'Nice Work on website', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `edition` varchar(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `post_by`, `date`, `message`) VALUES
(1, 'Admin', '2018-03-14 21:56:55', 'This website is ready to use'),
(2, 'Admin', '2018-03-14 21:57:55', 'Due to the problem in server few things will not work in the website'),
(4, 'Examination Department', '2018-03-14 22:06:55', 'Even semester registration is going to be held on 14th March 2018. Kindly register'),
(5, 'Admin', '2018-03-14 22:07:10', 'Due to system maintenance server will be down today'),
(10, 'CSE Department', '2018-03-17 17:46:58', 'Major Project for final year students is going to be held in 19th march');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `regd_no` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `resolved` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`regd_no`, `purpose`, `resolved`) VALUES
('1401219113', 'Password Recover', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sem` varchar(20) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL,
  `sub5` varchar(255) NOT NULL,
  `sub6` varchar(255) NOT NULL,
  `lab1` varchar(255) NOT NULL,
  `lab2` varchar(255) NOT NULL,
  `lab3` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `lab1`, `lab2`, `lab3`, `branch`) VALUES
('8th', 'Environment Engineering', 'Industrial Instrumentation', 'Data and Web Mining', 'Wireless Sensor Network', 'Medical Instrument Technique', '', 'Major Project', '', '', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `break` varchar(20) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `p5` varchar(255) NOT NULL,
  `p6` varchar(255) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `day`, `p1`, `p2`, `p3`, `break`, `p4`, `p5`, `p6`, `sem`, `branch`) VALUES
(1, 'MONDAY', 'EE(IM)', 'CS-DWM(CKM), IT-UC(SLA)', 'II(SRS)', 'B', 'WSN(SLA)', 'PROJECT(BRP)', 'PROJECT(BRP)', '8th', 'CSE'),
(2, 'TUESDAY', '_', '_', '_', 'R', '_', '_', '_', '8th', 'CSE'),
(3, 'WEDNESDAY', 'MIT(NK)', 'CS-DWM(CKM), IT-UC(SLA)', 'EE(IM)', 'E', 'WSN(SLA)', 'PROJECT(BRP)', 'PROJECT(BRP)1', '8th', 'CSE'),
(4, 'THURSDAY', 'WSN(SLA)', 'II(SRS)', 'CS-DWM(CKM), IT-UC(SLA)', 'A', 'MIT(NK)', 'LIBRARY', 'LIBRARY', '8th', 'CSE'),
(5, 'FRIDAY', 'II(SRS)', 'WSN(SLA)', 'MIT(NK)', 'K', '_', '_', '_', '8th', 'CSE'),
(6, 'SATURDAY', 'MIT(NK)', 'II(SRS)', 'CS-DWM(CKM), IT-UC(SLA)', 'BREAK', '_', '_', '_', '8th', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `regd_no` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regd_no`, `username`, `firstname`, `lastname`, `password`, `dob`, `branch`, `sem`, `email`, `phone`, `address`, `role`) VALUES
(1, '1401219113', 'Rajesh7890', 'Rajesh Kumar', 'Sahoo', 'Night@7890', '1997-08-07', 'CSE', '8th', 'r.k.sahoo7890@gmail.com', '8342003789', '358, Rental Colony, IRC Village, Bhubaneswar 751015', 'student'),
(2, '1401219069', 'Devil88765', 'Debi Prasad', 'Dwibedi', '909090', '1995-07-05', 'CSE', '8th', 'devil@gmail.com', '7896321478', 'Rangeswar Nagar, Patia, Bhubaneswar', 'student'),
(3, 'CS1401219113', 'Rajesh77', 'Rajesh Kumar', 'Sahoo', '78907890', '1997-08-07', 'CSE', '', 'rajesh@gmail.com', '7008180418', '358, Rental Colony, IRC Village, Bhubaneswar-751015', 'teacher'),
(13, 'CS1401219069', 'Debi Prasad', 'Debi Prasad', 'Dwibedi', 'CS1401219069', '1995-07-08', 'CSE', '', 'devil@gmail.com', '1234567890', 'Rangeswar Nagar, Bhubaneswar', 'teacher'),
(14, '1401219045', 'Mohit Sankar', 'Mohit Sankar', 'Behera', '1401219045', '1997-05-06', 'CIVIL', '8th', 'mohit@gmail.com', '1234567890', 'Rangeswar Nagar Bhubaneswar', 'student'),
(15, 'CS1401219045', 'Mohit Sankar', 'Mohit Sankar', 'Behera', 'CS1401219045', '1980-07-05', 'CIVIL', '', 'mohit@gmail.com', '1234567890', 'Bhubaneswar', 'teacher'),
(16, '1401219268', 'Saurav', 'Saurav', 'Mallick', '1401219268', '1996-06-05', 'CSE', '8th', 'smallick48@gmail.com', '7205877742', 'Hostel No. 5,  College of Engineering, Bhubaneswar', 'student'),
(17, '1401219090', 'Rakesh Roshan', 'Rakesh Roshan', 'Das', '1401219090', '1996-07-07', 'CSE', '8th', 'rakesh1201@gmail.com', '1234567890', 'Patia, Bhubaneswar', 'student'),
(18, '1401219059', 'Ankush', 'Ankush', 'Das', '1401219059', '1997-08-14', 'CSE', '8th', 'ankush59@gmail.com', '7077795412', 'Damana, Bhubaneswar', 'student'),
(19, '1401219063', 'Baldev', 'Baldev', 'Choudhury', '1401219063', '1997-05-08', 'CSE', '8th', 'sunil1201@gmail.com', '7008888888', 'Patia', 'student'),
(20, '1401219065', 'Bhanupratap', 'Bhanupratap', 'Mohanty', '1401219065', '1997-05-06', 'CSE', '8th', 'bhanu03b@gmail.com', '7205466666', 'Housing Board', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_barrowed`
--
ALTER TABLE `book_barrowed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`regd_no`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sem`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_barrowed`
--
ALTER TABLE `book_barrowed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

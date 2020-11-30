-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 06:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `batch` varchar(11) NOT NULL,
  `course` text NOT NULL,
  `upload_time` date NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `filename`, `type`, `size`, `username`, `description`, `batch`, `course`, `upload_time`, `deadline`) VALUES
(37, '894-chapter-18.pdf', 'application/pdf', 703, 'Chinmay Bepery', 'Assignment 1', '13th', 'C programming', '2018-01-14', '2018-01-16'),
(38, '571-problem-112.pdf', 'application/pdf', 10, 'Chinmay Bepery', 'Assignment 2', '13th', 'C programming', '2018-01-10', '2018-01-14'),
(39, '668-problem-112.pdf', 'application/pdf', 10, 'Chinmay Bepery', 'Assignment 3', '13th', 'C programming', '2018-01-15', '2018-01-15'),
(40, '622-problem-112.pdf', 'application/pdf', 10, 'Chinmay Bepery', 'Assignment 4', '12th', 'C programming', '2018-01-15', '2018-01-25'),
(41, '707-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Chinmay Bepery', 'Assignment 5', '13th', 'Object Oriented Programming', '2018-01-15', '2018-01-18'),
(42, '584-problem-112.pdf', 'application/pdf', 10, 'Chinmay Bepery', 'Assignment 1', '13th', 'Data Structure & Algorithms', '2018-01-15', '2018-01-18'),
(43, '707-chapter-18.pdf', 'application/pdf', 703, 'Chinmay Bepery', 'Assignment 2', '13th', 'C programming', '2018-01-15', '2018-01-24'),
(44, '326-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Chinmay Bepery', 'Assignment 1', '13th', 'C programming', '2018-01-15', '2018-01-18'),
(45, '1000-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Chinmay Bepery', 'Assignment 1', '13th', 'Object Oriented Programming', '2018-01-15', '2018-01-25'),
(46, '60-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Chinmay Bepery', 'Assignment 2', '13th', 'Discrete Mathematics', '2018-01-15', '2018-01-24'),
(47, '598-problem-112.pdf', 'application/pdf', 10, 'Chinmay Bepery', 'Assignment 1', '1st', 'C programming', '2018-01-15', '2018-01-30'),
(48, '152-system-analysis.pdf', 'application/pdf', 1545, 'Chinmay Bepery', 'Assignment 10', '13th', 'C programming', '2018-01-15', '2018-01-17'),
(49, '538-problem-112.pdf', 'application/pdf', 10, 'Chinmay Bepery', 'Assignment 11', '13th', 'Object Oriented Programming', '2018-01-15', '2018-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `batch_list`
--

CREATE TABLE `batch_list` (
  `id` int(11) NOT NULL,
  `batch` varchar(12) NOT NULL,
  `course_list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_list`
--

INSERT INTO `batch_list` (`id`, `batch`, `course_list`) VALUES
(1, '1st', 'C programming'),
(2, '2nd', 'Object Oriented Programming'),
(3, '3rd', 'Data Structure & Algorithms'),
(4, '4th', 'Web programming'),
(5, '5th', 'Engineering Drawing'),
(6, '6th', 'Database System'),
(7, '7th', 'Discrete Mathematics'),
(8, '8th', 'Data Communication & Engineering'),
(9, '9th', 'Computer Networks'),
(10, '10th', 'Machine Learning'),
(11, '11th', 'Artificial Intelligence'),
(12, '12th', 'Algorithm Engineering'),
(13, '13th', 'VLSI Design'),
(14, '14th', 'Network Routing & Switching'),
(15, '15th', 'Wireless & Cellular Communications'),
(16, '16th', 'Operating System');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Msg_ID` int(11) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Msg_ID`, `Sender`, `Message`) VALUES
(10, 'Chinmay Bepery', 'HI');

-- --------------------------------------------------------

--
-- Table structure for table `chat_pub`
--

CREATE TABLE `chat_pub` (
  `Msg_ID` int(11) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_pub`
--

INSERT INTO `chat_pub` (`Msg_ID`, `Sender`, `Message`) VALUES
(13, 'Chinmay Bepery', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `chat_st`
--

CREATE TABLE `chat_st` (
  `Msg_ID` int(11) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_st`
--

INSERT INTO `chat_st` (`Msg_ID`, `Sender`, `Message`) VALUES
(3, 'Zahid Hassan', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `batch` varchar(11) NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `filename`, `type`, `size`, `username`, `description`, `assignment_id`, `student_id`, `batch`, `course`) VALUES
(25, '377-problem-112.pdf', 'application/pdf', 10, 'Zahid Hassan', 'Assignment 1 submission', 37, 1502023, '13th', 'C programming'),
(26, '130-system Analysis.pdf', 'application/pdf', 1545, 'Zahid Hassan', 'Assignment 1 submission', 42, 1502023, '13th', 'Data Structure & Algorithms'),
(27, '219-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Zahid Hassan', 'asdf', 41, 1502023, '13th', 'Object Oriented Programming'),
(28, '288-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Zahid Hassan', 'now c pro', 43, 1502023, '13th', 'C programming'),
(29, '18-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Zahid Hassan', 'Assignment 1 submission', 44, 1502023, '13th', 'C programming'),
(30, '254-chapter-17.ppt', 'application/vnd.ms-powerpoint', 1161, 'Zahid Hassan', 'Assignment 1 submission', 45, 1502023, '13th', 'Object Oriented Programming'),
(31, '951-chapter 18.pdf', 'application/pdf', 703, 'Zahid Hassan', 'Assignment 10 submission', 48, 1502023, '13th', 'C programming'),
(32, '287-Problem 112.pdf', 'application/pdf', 10, 'Zahid Hassan', 'Assignment 2', 46, 1502023, '13th', 'Discrete Mathematics'),
(33, '66-curve.png', 'image/png', 921, 'Zahid Hassan', 'Assignment 1 submission', 49, 1502023, '13th', 'Object Oriented Programming');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cform`
--

CREATE TABLE `tb_cform` (
  `ID` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `subj` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_cform`
--

INSERT INTO `tb_cform` (`ID`, `u_name`, `u_email`, `subj`, `message`) VALUES
(30, 'sd', 'asd@a', 'sd', 'serf');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sq` text NOT NULL,
  `Department` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `InterestedIn` varchar(255) NOT NULL,
  `ExpertIn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`username`, `email`, `password`, `sq`, `Department`, `ContactNo`, `InterestedIn`, `ExpertIn`) VALUES
('Chinmay Bepery', 'chinmay.cse@gmail.com', '72264e113943a77136e9a82eecd01274', 'red', 'cce', '12345', 'asdfg', ''),
('Moinul Islam Sayed', 'sayed.pstu11@gmail.com', '0caff3fc76663c63a655541397d9cf7f', 'red', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batch` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sq` text NOT NULL,
  `RegNo` varchar(7) NOT NULL,
  `ContactNo` varchar(11) NOT NULL,
  `InterestedIn` text NOT NULL,
  `ExpertIn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `batch`, `id`, `password`, `sq`, `RegNo`, `ContactNo`, `InterestedIn`, `ExpertIn`) VALUES
('Farhan', 'farhan@gmail.com', '1st', 1402056, 'd1bbb2af69fd350b6d6bd88655757b47', 'red', '', '', '', ''),
('Imran', 'imran@gmail.com', '1st', 1402011, 'e18fdc9fa7cc2b5f4e497d21a48ea3b7', 'red', '', '', '', ''),
('Subrata Saha', 'saha.cse.pstu@gmail.com', '13th', 1502033, '78a8f834561c67fa660760d41a61dc62', 'red', '', '', '', ''),
('Zahid Hassan', 'rdzahid@gmail.com', '13th', 1502023, 'c651148415ab2a260e6c506075c12ae3', 'red', '8888888', '54655657', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `batch_list`
--
ALTER TABLE `batch_list`
  ADD PRIMARY KEY (`id`,`batch`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `chat_pub`
--
ALTER TABLE `chat_pub`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `chat_st`
--
ALTER TABLE `chat_st`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `assignment_id` (`assignment_id`);

--
-- Indexes for table `tb_cform`
--
ALTER TABLE `tb_cform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `batch_list`
--
ALTER TABLE `batch_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `chat_pub`
--
ALTER TABLE `chat_pub`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `chat_st`
--
ALTER TABLE `chat_st`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tb_cform`
--
ALTER TABLE `tb_cform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `teachers` (`username`);

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `submission_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`id`),
  ADD CONSTRAINT `submission_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

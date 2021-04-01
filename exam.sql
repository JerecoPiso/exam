-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 02:20 AM
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
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisers`
--

CREATE TABLE `advisers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `section` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisers`
--

INSERT INTO `advisers` (`id`, `name`, `section`, `subject`) VALUES
(133, 'Jereco', 'Grade 11 Programming-A', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `done_exam`
--

CREATE TABLE `done_exam` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `score` int(10) NOT NULL,
  `grasec` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `done_exam`
--

INSERT INTO `done_exam` (`id`, `name`, `subject`, `score`, `grasec`) VALUES
(21, 'Jereco James Piso', 'Programming', 7, 'Grade 11 - Programming-B');

-- --------------------------------------------------------

--
-- Table structure for table `examinee`
--

CREATE TABLE `examinee` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `grade_section` varchar(200) NOT NULL,
  `adviser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinee`
--

INSERT INTO `examinee` (`id`, `username`, `password`, `grade_section`, `adviser`) VALUES
(39, 'Jereco James Piso', 'prograpper20', 'Grade 11 - Programming-B', 'Jereco');

-- --------------------------------------------------------

--
-- Table structure for table `grade_section`
--

CREATE TABLE `grade_section` (
  `id` int(11) NOT NULL,
  `grade_sec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_section`
--

INSERT INTO `grade_section` (`id`, `grade_sec`) VALUES
(99, 'Grade 11 - Programming-B'),
(100, 'Grade 11 Programming-A'),
(101, 'Grade 12 Gas-B'),
(102, 'micp');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans1` varchar(500) NOT NULL,
  `ans2` varchar(500) NOT NULL,
  `ans3` varchar(500) NOT NULL,
  `ans4` varchar(500) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `grasec` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`, `subject`, `grasec`) VALUES
(100, 'PHP syntax  to display HELLO WORLD?c', 'echod', 'echo d', 'echo Hello World;', 'Hello Worlddf', '2', '', ''),
(101, 'All variables start with?', '$', '&7', '#', '@', '1', '', ''),
(102, 'When using the POST method, variables are displayed in the URL?', 'False', 'True', 'Maybe', 'None of the above', '2', 'Programming', ''),
(104, 'What is a correct way to add a single line comment in PHP?', '<!-- -->', '//', '/* */', '<comment></comment>', '2', 'Programming', ''),
(105, 'Which one of these variables has an illegal name?', '$my-var', '$my_var', '$myvar', 'None of the above', '1', 'Programming', ''),
(106, 'How do you create a cookie in PHP?', 'createcookie', 'setcookie()', 'cookie()', 'makecookie()', '2', 'Programming', ''),
(107, 'In PHP, the only way to output text is with echo?', 'False', 'True', 'Debatablef', 'Non of the above', '1', '', ''),
(108, 'Which operator is used to check if two values are equal and of same data type?', '=', '===', '=to', '==', '4', 'Programming', ''),
(109, 'dsfdfdf', 'dfdfd', 'fdfdf', 'fdfdf', 'dfdf', '2', 'Programming', ''),
(110, 'sdsdsd', 'sdsd', 'sdsd', 'sd', '545', '2', 'Programming', ''),
(112, 'dfdf', 'fddf', 'dfdf', 'fddfd', 'dfdf', '3', 'Programming', ''),
(118, 'sdfsdf', 'sdfs', 'dfsdf', 'sdfs', 'dfsdf', '4', 'Programming', ''),
(119, '656', '565', '656', '5656', '656', '2', 'Programming', ''),
(120, 'rtyrt', 'yrty', 'rtyrtyrtyr', 'yrty', 'rty', '4', 'Programming', ''),
(121, 'sdfgdf', 'fdyrtyrtyrt', 'yr', 'tyrty', 'yr', '2', 'Programming', ''),
(122, 'rterwewewewewe', 'terte', 'rterterte', 'rtert', 'ert', '2', 'Programming', ''),
(123, 'tret', 'ete', 'rtert', 'rterte', '654', '2', 'Programming', 'dgdfg'),
(124, 'rete', 'e456456', '4564', '56456', '64565', '1', 'Programming', 'dgdfg'),
(125, 'ghgf', '97987', '978978978979879', '789789', '78978', '1', 'Science', 'dfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `grasec` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `grasec`) VALUES
(76, 'Programming', 'Grade 11 - Programming-B'),
(77, 'English', 'Grade 11 - Programming-B'),
(78, 'Science', 'Grade 12 Gas-B'),
(79, 'Math', 'Grade 12 Gas-B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hint` text NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hint`, `photo`) VALUES
(9, 'Jereco James Piso', 'prograpper20', 'rapper', 'dp.png'),
(10, 'Lebron James', 'lebron', 'BBALL', 'dp.png'),
(11, 'sdsadfsdfsdfg', '111111', '11111', 'dp.png'),
(12, 'xcvdgdfgdfg', '111111', 'wwewe', 'dp.png'),
(13, 'sdsdsdsds', '111111', '111', 'dp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisers`
--
ALTER TABLE `advisers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `done_exam`
--
ALTER TABLE `done_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinee`
--
ALTER TABLE `examinee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_section`
--
ALTER TABLE `grade_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisers`
--
ALTER TABLE `advisers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `done_exam`
--
ALTER TABLE `done_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `examinee`
--
ALTER TABLE `examinee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `grade_section`
--
ALTER TABLE `grade_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

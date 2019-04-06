-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2019 at 09:40 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_admin`
--

CREATE TABLE `p_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `locimg` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p_admin`
--

INSERT INTO `p_admin` (`id`, `name`, `uname`, `pass`, `img`, `locimg`, `level`) VALUES
(1345, '莫轩逸', 'admin', 'admin123', 'avatar1345.jpg', '../assets/img/admin/avatar1345.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `p_student`
--

CREATE TABLE `p_student` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `locimg` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p_student`
--

INSERT INTO `p_student` (`id`, `name`, `uname`, `pass`, `img`, `locimg`, `level`) VALUES
(2010, '琳娜', 'lina', 'lina123', 'avatar2010.jpg', '../assets/img/student/avatar2010.jpg', 'student'),
(2011, '琳琳', 'lin', 'linlin123', 'avatar2011.jpg', '../assets/img/student/avatar2011.jpg', 'student'),
(2012, '林', 'linn', 'lin123', 'avatar2012.jpg', '../assets/img/student/avatar2012.jpg', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `p_teacher`
--

CREATE TABLE `p_teacher` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `locimg` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `ke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p_teacher`
--

INSERT INTO `p_teacher` (`id`, `name`, `uname`, `pass`, `img`, `locimg`, `level`, `ke`) VALUES
(1145, '马丁', 'mading', 'mading123', 'avatar1145.jpg', '../assets/img/teacher/avatar1145.jpg', 'teacher', 'yuwen'),
(1146, '马林', 'malin', 'malin123', 'avatar1146.jpg', '../assets/img/teacher/avatar1146.jpg', 'teacher', 'shuxue'),
(1147, '慢慢', 'manman', 'manman123', 'avatar1147.jpg', '../assets/img/teacher/avatar1147.jpg', 'teacher', 'english'),
(1148, '敏敏', 'minmin', 'minmin123', 'avatar1148.jpg', '../assets/img/teacher/avatar1148.jpg', 'teacher', 'zh');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `yuwen` int(11) NOT NULL,
  `shuxue` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `zh` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `name`, `yuwen`, `shuxue`, `english`, `zh`, `grade`) VALUES
(2010, '琳娜', 94, 98, 97, 99, 'A'),
(2011, '琳琳', 96, 92, 95, 90, 'D'),
(2012, '林', 90, 91, 96, 94, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `old` int(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `old`, `sex`, `class`) VALUES
(2010, '琳娜', 22, '女', 'B(1)'),
(2011, '琳琳', 22, '女', 'B(1)'),
(2012, '林', 21, '女', 'B(1)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_admin`
--
ALTER TABLE `p_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_student`
--
ALTER TABLE `p_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_teacher`
--
ALTER TABLE `p_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

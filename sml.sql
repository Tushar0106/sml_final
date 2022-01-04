-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 05:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sml`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `clg_code` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `department` varchar(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mobile`, `password`, `cpassword`, `gender`, `clg_code`, `year`, `department`, `semester`, `address`, `avatar`, `created`, `modified`) VALUES
(10, 'dev pardhi test', 'ravibihawat@gmail.com', '1111111111', '698d51a19d8a121ce581499d7b701668', '698d51a19d8a121ce581499d7b701668', 'male', '111', 2019, 'cs', '02', 'aaaaaa', '1 (7).JPG', '2018-02-24 23:11:17', '2018-02-24 23:11:17'),
(11, 'dev pardhi', 'dev@test.com', '11111111', 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba', 'male', '111', 2018, 'cs', '01', 'aaa', '1 (24).JPG', '2018-02-24 23:21:11', '2018-02-24 23:21:11'),
(12, 'dev pardhi', 'dev@test.com', '11111111', 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba', 'male', '111', 2018, 'cs', '01', 'aaa', '1 (24).JPG', '2018-02-24 23:21:11', '2018-02-24 23:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `email`, `password`, `cpassword`, `role`, `created`, `modified`) VALUES
(1, 'devp', 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba', '', '2018-02-21 23:40:35', '2018-02-21 23:40:35'),
(2, 'devp2', 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba', '', '2018-02-21 23:42:53', '2018-02-21 23:42:53'),
(3, 'devp1', 'b59c67bf196a4758191e42f76670ceba', 'b59c67bf196a4758191e42f76670ceba', 'on', '2018-02-22 00:12:30', '2018-02-22 00:12:30'),
(4, 'ravi', '698d51a19d8a121ce581499d7b701668', '698d51a19d8a121ce581499d7b701668', 'on', '2018-02-22 22:37:00', '2018-02-22 22:37:00'),
(5, 'nit', '698d51a19d8a121ce581499d7b701668', '698d51a19d8a121ce581499d7b701668', 'on', '2018-02-22 23:03:45', '2018-02-22 23:03:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

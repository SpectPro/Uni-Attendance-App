-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 08:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `id` int(11) NOT NULL,
  `class_id` int(20) NOT NULL,
  `st_id` int(20) NOT NULL,
  `time_inn` time NOT NULL,
  `time_out` time NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`id`, `class_id`, `st_id`, `time_inn`, `time_out`, `status`) VALUES
(1, 1, 1, '08:00:00', '09:30:00', 'Present'),
(2, 1, 2, '08:00:00', '09:30:00', 'Present'),
(3, 2, 3, '10:00:00', '11:30:00', 'Present'),
(4, 2, 4, '10:00:00', '11:30:00', 'Present'),
(5, 3, 5, '13:00:00', '14:30:00', 'Present'),
(6, 3, 6, '13:00:00', '14:30:00', 'Present'),
(7, 4, 7, '15:00:00', '16:30:00', 'Present'),
(8, 4, 8, '15:00:00', '16:30:00', 'Present'),
(9, 5, 9, '17:00:00', '18:30:00', 'Present'),
(10, 5, 10, '17:00:00', '18:30:00', 'Present'),
(11, 6, 11, '08:30:00', '10:00:00', 'Present'),
(12, 6, 12, '08:30:00', '10:00:00', 'Present'),
(13, 7, 13, '10:30:00', '12:00:00', 'Present'),
(14, 7, 14, '10:30:00', '12:00:00', 'Present'),
(15, 8, 15, '13:30:00', '15:00:00', 'Present'),
(16, 8, 16, '13:30:00', '15:00:00', 'Present'),
(17, 9, 17, '15:30:00', '17:00:00', 'Present'),
(18, 9, 18, '15:30:00', '17:00:00', 'Present'),
(19, 10, 19, '17:30:00', '19:00:00', 'Present'),
(20, 10, 20, '17:30:00', '19:00:00', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `department`, `subject`, `year`, `start_time`, `end_time`) VALUES
(1, 'Computer', 'Machine Learning', 2023, '08:00:00', '17:00:00'),
(2, 'Computer', 'Database Management', 2023, '09:00:00', '16:00:00'),
(3, 'Mathematics', 'Calculus', 2023, '10:00:00', '15:00:00'),
(4, 'Physics', 'Quantum Mechanics', 2023, '11:00:00', '14:00:00'),
(5, 'Chemistry', 'Organic Chemistry', 2023, '12:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `class_assign`
--

CREATE TABLE `class_assign` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_assign`
--

INSERT INTO `class_assign` (`id`, `user_id`, `class_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 5, 4),
(6, 5, 5),
(7, 5, 4),
(8, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `degree_program` varchar(50) NOT NULL,
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `department`, `degree_program`, `phone_num`) VALUES
(1, 'John', 'Machine Learning', 'Bachelor of Science', '123456789'),
(2, 'Emily', 'Calculus', 'Bachelor of Arts', '987654321'),
(3, 'Sarah', 'Database Management', 'Bachelor of Arts', '111111111'),
(4, 'David', 'Quantum Mechanics', 'Bachelor of Science', '999999999'),
(5, 'Amy', 'Organic Chemistry', 'Bachelor of Science', '888888888'),
(6, 'Michelle', 'Machine Learning', 'Bachelor of Science', '777777777'),
(7, 'Daniel', 'Calculus', 'Bachelor of Arts', '666666666'),
(8, 'Sophia', 'Database Management', 'Bachelor of Arts', '444444444'),
(9, 'Jacob', 'Quantum Mechanics', 'Bachelor of Science', '222222222'),
(10, 'Alex', 'Organic Chemistry', 'Bachelor of Science', '555555555'),
(11, 'Sophie', 'Machine Learning', 'Bachelor of Science', '777777777'),
(12, 'Ryan', 'Calculus', 'Bachelor of Science', '888888888'),
(13, 'Olivia', 'Database Management', 'Bachelor of Arts', '999999999'),
(14, 'Ethan', 'Organic Chemistry', 'Bachelor of Science', '123456789'),
(15, 'Liam', 'Quantum Mechanics', 'Bachelor of Science', '987654321'),
(16, 'Ava', 'Machine Learning', 'Bachelor of Science', '111111111'),
(17, 'Emma', 'Calculus', 'Bachelor of Arts', '222222222'),
(18, 'Noah', 'Database Management', 'Bachelor of Arts', '333333333'),
(19, 'Isabella', 'Organic Chemistry', 'Bachelor of Science', '444444444'),
(20, 'Mia', 'Quantum Mechanics', 'Bachelor of Science', '555555555');

-- --------------------------------------------------------

--
-- Table structure for table `student_assign`
--

CREATE TABLE `student_assign` (
  `id` int(11) NOT NULL,
  `st_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_assign`
--

INSERT INTO `student_assign` (`id`, `st_id`, `class_id`) VALUES
(0, 1, 1),
(0, 2, 1),
(0, 3, 2),
(0, 4, 2),
(0, 5, 3),
(0, 6, 3),
(0, 7, 4),
(0, 8, 4),
(0, 9, 5),
(0, 10, 5),
(0, 11, 1),
(0, 12, 2),
(0, 13, 3),
(0, 14, 4),
(0, 15, 5),
(0, 16, 1),
(0, 17, 1),
(0, 18, 2),
(0, 19, 2),
(0, 20, 3),
(0, 1, 3),
(0, 2, 4),
(0, 3, 4),
(0, 4, 5),
(0, 5, 5),
(0, 6, 1),
(0, 7, 2),
(0, 8, 3),
(0, 9, 4),
(0, 10, 5),
(0, 11, 1),
(0, 12, 2),
(0, 13, 3),
(0, 14, 4),
(0, 15, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `type` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `type`, `password`) VALUES
(1, 'Yashi', 'Admin', 'Spectpro321.'),
(4, 'rash', 'Lecture', 'Spectpro321.'),
(5, 'lak', 'Lecture', 'Spectpro321.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_assign`
--
ALTER TABLE `class_assign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_assign`
--
ALTER TABLE `student_assign`
  ADD KEY `st_id` (`st_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_assign`
--
ALTER TABLE `class_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_assign`
--
ALTER TABLE `class_assign`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `student_assign`
--
ALTER TABLE `student_assign`
  ADD CONSTRAINT `class_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `st_id` FOREIGN KEY (`st_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

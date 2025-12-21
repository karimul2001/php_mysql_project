-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2025 at 05:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `working_hours` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `employee_id`, `date`, `check_in`, `check_out`, `working_hours`) VALUES
(1, 1, '2025-12-10', '01:14:00', '22:20:00', 21),
(2, 9, '2025-12-10', '21:23:00', '14:23:00', 17),
(3, 10, '2025-12-14', '21:46:00', '15:46:00', 18);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'Web Developer'),
(2, 'App Developer'),
(3, 'Softwaere Developer'),
(4, 'Grafix Designer'),
(5, 'Grafix Designer');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `dob` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `dob`, `department_id`, `position`, `join_date`, `salary`, `address`) VALUES
(1, 'karimul', 'islam', 'karimul.bd501@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '01521459198', 'male', '2007-12-10', 1, 'Manager', '2024-12-10', 30000, 'Mohakhali'),
(2, 'Neloy', 'Ahamed', 'neloy@gmail.com', '', '01421345678', 'male', '2008-06-08', 2, 'Manager', '2024-07-08', 23500, 'Jhenaidah'),
(3, 'Atikur', 'Rahaman', 'atikur@gmail.com', '', '01788334455', 'male', '2005-05-09', 2, 'Assistant Manager', '2024-07-08', 20500, 'Jhenaidah Sadar'),
(4, 'maruf', 'khan', 'maruf@gmail.com', '', '01421345678', 'male', '2010-02-10', 2, 'Manager', '0000-00-00', 23500, 'Jhenaidah Sadar'),
(9, 'Abdul', 'Mursalin', 'mursalin@gmail.com', '', '01931433905', 'male', '2002-06-10', 3, 'web developerasd', '2025-12-09', 23500, 'Jhenaidah Sadar'),
(10, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '01332445566', 'male', '2025-12-10', 3, 'web developerasd', '2025-12-10', 23500, 'Kotchadpur'),
(11, 'Rakib', 'Rayhan', 'rakib@gmail.com', '', '01332445566', 'male', '2025-12-04', 4, 'Assistant Manager', '2025-12-18', 30500, 'Jhenaidah');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_depts_view`
-- (See below for the actual view)
--
CREATE TABLE `employee_depts_view` (
`employee_id` int(11)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`email` varchar(50)
,`phone` varchar(11)
,`gender` enum('male','female')
,`dob` date
,`position` varchar(100)
,`join_date` date
,`department_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `approved_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `employee_id`, `leave_type`, `start_date`, `end_date`, `reason`, `status`, `approved_by`) VALUES
(1, 1, 'yearly holyday', '2025-12-10', '2025-12-14', 'I am sick', 'Approved', 'Manager'),
(2, 2, 'Annual Leave', '2025-12-10', '2025-12-12', 'Brother Weddnig', 'Pending', ''),
(3, 5, 'Maternity Leave', '2025-12-11', '2025-12-15', 'maternity', 'Pending', ''),
(4, 3, 'Casual Leave', '2025-12-11', '2025-12-14', 'i will go home', 'Pending', ''),
(5, 5, 'Sick Leave', '2025-12-10', '2025-12-12', 'fdagfd', 'Pending', ''),
(6, 6, 'Sick Leave', '2025-12-10', '2025-12-12', 'ghdhs', 'Pending', ''),
(7, 7, 'Maternity Leave', '2025-12-10', '2025-12-11', 'asdf', 'Pending', ''),
(8, 7, 'Maternity Leave', '2025-12-10', '2025-12-11', 'asdf', 'Pending', ''),
(9, 11, 'Sick Leave', '2025-12-21', '2025-12-23', 'adsfas', 'Approved', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `leaves_view`
-- (See below for the actual view)
--
CREATE TABLE `leaves_view` (
`leave_id` int(11)
,`leave_type` varchar(50)
,`start_date` date
,`end_date` date
,`reason` varchar(100)
,`status` varchar(20)
,`approved_by` varchar(30)
,`first_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `basic_salary` decimal(10,0) NOT NULL,
  `deducation` decimal(10,0) NOT NULL,
  `net_salary` decimal(10,0) NOT NULL,
  `generated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `employee_id`, `month`, `year`, `basic_salary`, `deducation`, `net_salary`, `generated_at`) VALUES
(1, 1, 'December', 2025, 25000, 500, 24500, '0000-00-00 00:00:00'),
(2, 1, 'December', 2025, 25000, 500, 24500, '0000-00-00 00:00:00'),
(3, 2, 'December', 2025, 35000, 1000, 34000, '0000-00-00 00:00:00'),
(4, 11, 'December', 2025, 22500, 0, 22500, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `performance_reviews`
--

CREATE TABLE `performance_reviews` (
  `review_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance_reviews`
--

INSERT INTO `performance_reviews` (`review_id`, `employee_id`, `reviewer_id`, `review_date`, `rating`, `comments`) VALUES
(1, 1, 1, '2025-12-17', 3, 'Your performance is not very good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `photos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `employee_id`, `username`, `email`, `password`, `role`, `status`, `photos`) VALUES
(1, 1, 'karimul', 'karimul.bd501@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'abc', 'abc', ''),
(3, 10, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'abc', 'abc', ''),
(4, 1, 'karimul', 'karimul.bd501@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active', '1765992961_pexels-tirachard-kumtanom-112571-347141.jpg');

-- --------------------------------------------------------

--
-- Structure for view `employee_depts_view`
--
DROP TABLE IF EXISTS `employee_depts_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_depts_view`  AS SELECT `employees`.`employee_id` AS `employee_id`, `employees`.`first_name` AS `first_name`, `employees`.`last_name` AS `last_name`, `employees`.`email` AS `email`, `employees`.`phone` AS `phone`, `employees`.`gender` AS `gender`, `employees`.`dob` AS `dob`, `employees`.`position` AS `position`, `employees`.`join_date` AS `join_date`, `departments`.`department_name` AS `department_name` FROM (`employees` join `departments`) WHERE `departments`.`department_id` = `employees`.`department_id` ;

-- --------------------------------------------------------

--
-- Structure for view `leaves_view`
--
DROP TABLE IF EXISTS `leaves_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `leaves_view`  AS SELECT `leaves`.`leave_id` AS `leave_id`, `leaves`.`leave_type` AS `leave_type`, `leaves`.`start_date` AS `start_date`, `leaves`.`end_date` AS `end_date`, `leaves`.`reason` AS `reason`, `leaves`.`status` AS `status`, `leaves`.`approved_by` AS `approved_by`, `employees`.`first_name` AS `first_name` FROM (`leaves` join `employees`) WHERE `employees`.`employee_id` = `leaves`.`employee_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `performance_reviews`
--
ALTER TABLE `performance_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `performance_reviews`
--
ALTER TABLE `performance_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 09:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arogya`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `Doc_ID` varchar(50) NOT NULL,
  `Doc_Name` varchar(100) NOT NULL,
  `Doc_Add` varchar(100) NOT NULL,
  `Doc_phneno` varchar(30) NOT NULL,
  `Docemail` varchar(50) NOT NULL,
  `Docspecialist` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `Doc_ID`, `Doc_Name`, `Doc_Add`, `Doc_phneno`, `Docemail`, `Docspecialist`) VALUES
(1, 'Doc-01', 'Dr. Tanya', 'Wallawatha', '0751458456', 'Tanya06@gmail.com', 'Dental'),
(0, 'Doc-02', 'Dr. Amaan', 'Battaramulla', '0751334999', 'raj12@gmail.com', 'physician');

-- --------------------------------------------------------

--
-- Table structure for table `operating_room`
--

CREATE TABLE `operating_room` (
  `id` int(11) NOT NULL,
  `Operation_No` varchar(30) NOT NULL,
  `Operation_Name` varchar(50) DEFAULT NULL,
  `Staff_ID` varchar(20) DEFAULT NULL,
  `Patient_ID` varchar(50) DEFAULT NULL,
  `Doc_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operating_room`
--

INSERT INTO `operating_room` (`id`, `Operation_No`, `Operation_Name`, `Staff_ID`, `Patient_ID`, `Doc_ID`) VALUES
(0, 'Operation 03', 'Gentral Operation', 'emp 02', 'P-125', 'Doc-4');

-- --------------------------------------------------------

--
-- Table structure for table `operating_room_schedules`
--

CREATE TABLE `operating_room_schedules` (
  `id` int(11) NOT NULL,
  `Operation_ID` varchar(30) NOT NULL,
  `pat_ID` varchar(20) NOT NULL,
  `Doc_ID` varchar(50) NOT NULL,
  `Op_time` varchar(20) NOT NULL,
  `Op_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operating_room_schedules`
--

INSERT INTO `operating_room_schedules` (`id`, `Operation_ID`, `pat_ID`, `Doc_ID`, `Op_time`, `Op_date`) VALUES
(1, 'Operation 01', 'P-125', 'Doc-04', '10:30 PM', '2021-12-30'),
(0, 'Operation 02', 'P-128', 'Doc-01', '9: 00 AM', '2022-02-24'),
(0, 'Operation 03', 'P-129', 'Doc-03', '10: 45 AM', '2022-02-14'),
(0, 'Operation 04', 'P-126', 'Doc-06', '3: 40 PM', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `Pat_ID` varchar(10) NOT NULL,
  `Pat_Name` varchar(100) NOT NULL,
  `Pat_DOB` date NOT NULL,
  `Pat_Addrss` varchar(100) NOT NULL,
  `Pat_Teleno` varchar(30) NOT NULL,
  `Doc_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `Pat_ID`, `Pat_Name`, `Pat_DOB`, `Pat_Addrss`, `Pat_Teleno`, `Doc_Name`) VALUES
(2, 'P-123', 'Rajan', '2015-06-16', 'Mattakuliya', '0712338555', 'Dr. Raj'),
(3, 'P-124', 'Hamaz', '2009-10-20', 'Dehiwala', '0771448555', 'Dr. Mariyam'),
(5, 'P-125', 'Mohamed amaan', '2000-02-26', 'Wellampitiya', '0771668444', 'Dr. Mariyam'),
(4, 'P-126', 'Hevin', '2000-09-10', 'Wattala', '0765448777', 'Dr. Tanya'),
(6, 'P-128', 'amir ahmed', '2007-12-04', 'Grandpass ', '0771558444', 'Dr. amaan'),
(0, 'P-129', 'Hafza', '2001-06-16', 'Wallawatha', '0752335444', 'Dr. Amaan'),
(0, 'P-130', 'Aaqil Nizar', '2000-10-24', 'Kollupitiya', '0767114668', 'Dr. Alexia');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_ID` varchar(30) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `patient_ID` varchar(30) NOT NULL,
  `payment_totalbill` varchar(30) NOT NULL,
  `payment_paidbill` varchar(30) NOT NULL,
  `outstanding_bill` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_ID`, `payment_type`, `patient_ID`, `payment_totalbill`, `payment_paidbill`, `outstanding_bill`) VALUES
(1, 'pay121', 'Cash', '122', '60,000', '45,000', '15,000'),
(0, 'pay122', 'Cash', 'P-124', '150,000/=', '100,000/=', '50,000/='),
(0, 'pay123', 'Credit Card', 'P-128', '100,000/=', '85,000/=', '15,000/=');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_ID` varchar(50) NOT NULL,
  `r_period` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `pat_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_ID`, `r_period`, `room_type`, `pat_ID`) VALUES
(1, 'R-01', '2 weeks', 'Pregnant delivery room', '126'),
(2, 'R-02', '2 day', 'Accident Room', '128'),
(0, 'R-03', '25 Days', 'ICU Room', 'P-128');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `Staff_ID` varchar(10) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `S_DOB` date NOT NULL,
  `Staff_Addrss` varchar(100) NOT NULL,
  `Staff_gender` varchar(100) NOT NULL,
  `Staff_Telno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `Staff_ID`, `Staff_Name`, `S_DOB`, `Staff_Addrss`, `Staff_gender`, `Staff_Telno`) VALUES
(1, 'emp 01', 'Johnson', '2016-06-08', 'Wellampitiya', 'Male', '0771348656'),
(3, 'emp 02', 'Mariyam', '2004-10-20', 'Wallawatha', 'female', '0741668444'),
(16, 'emp 03', 'Abdullah Azmi ', '2001-07-11', 'Dehiwala', 'Male', '0772458674'),
(0, 'emp 04', 'A. Althaf ', '1990-12-29', 'Wellampitiya', 'Male', '07761986619');

-- --------------------------------------------------------

--
-- Table structure for table `staff_schedules`
--

CREATE TABLE `staff_schedules` (
  `id` int(10) NOT NULL,
  `staffschedule_no` varchar(50) NOT NULL,
  `staff_ID` varchar(50) DEFAULT NULL,
  `room_ID` varchar(50) DEFAULT NULL,
  `Schedule` varchar(100) DEFAULT NULL,
  `Sch_time` varchar(20) DEFAULT NULL,
  `Sch_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_schedules`
--

INSERT INTO `staff_schedules` (`id`, `staffschedule_no`, `staff_ID`, `room_ID`, `Schedule`, `Sch_time`, `Sch_date`) VALUES
(2, 'sch 02', 'emp 02', 'R-03', 'morning', '08:50 AM', '2003-10-23'),
(3, 'sch 03', 'emp 01', 'R-02', 'Night', '10:25 PM', '2022-01-02'),
(4, 'sch 04', 'emp 04', 'R-04', 'Afternoon', '1:00 PM', '2022-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', 'arogya123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `user_name`, `password`, `name`) VALUES
(4, 'amaann', 'ac6f3d4d696ba928a03f70cbbef83356', 'Mohamed Amaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Doc_ID`);

--
-- Indexes for table `operating_room`
--
ALTER TABLE `operating_room`
  ADD PRIMARY KEY (`Operation_No`);

--
-- Indexes for table `operating_room_schedules`
--
ALTER TABLE `operating_room_schedules`
  ADD PRIMARY KEY (`Operation_ID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Pat_ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_ID`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `staff_schedules`
--
ALTER TABLE `staff_schedules`
  ADD PRIMARY KEY (`staffschedule_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

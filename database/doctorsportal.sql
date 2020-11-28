-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 08:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorsprofile`
--

CREATE TABLE `doctorsprofile` (
  `id` int(11) NOT NULL,
  `drname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `practice` text NOT NULL,
  `address` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorsprofile`
--

INSERT INTO `doctorsprofile` (`id`, `drname`, `email`, `phone`, `qualification`, `practice`, `address`, `password`, `CreatedAt`) VALUES
(1, 'Amaka Nwadiani-Umolu', 'dramaka@smile360ng.com', '08165207845', 'Dentist', 'Smile 360 Dental Practice', '40A Cameron Road Ikoyi, Lagos Nigeria', 'dramaka', '2020-11-25 06:13:04'),
(2, 'Amy Shumbusho', 'dramy@smile360ng.com', '+234 818 136 0000', 'Orthodontist', 'Smile 360 Dental Clinic', '40A Cameron Road Ikoyi, Lagos Nigeria', 'dramy', '2020-11-25 06:16:54'),
(3, 'Apara Sanmi', 'drapara@smile360ng.com', '08162445607', 'Dentist', 'Smile 360 Dental Clinic', '40A Cameron Road Ikoyi, Lagos Nigeria', 'drapara', '2020-11-25 07:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(0, '151.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `p_fname` varchar(20) NOT NULL,
  `p_lname` varchar(20) NOT NULL,
  `p_mname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `ship_address` text NOT NULL,
  `dob` date NOT NULL,
  `clinical_conditions` text NOT NULL,
  `other` text NOT NULL,
  `notes` text NOT NULL,
  `treatment_option` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL,
  `startdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `p_fname`, `p_lname`, `p_mname`, `gender`, `ship_address`, `dob`, `clinical_conditions`, `other`, `notes`, `treatment_option`, `status`, `image`, `startdate`) VALUES
(1, 'Angela', 'Nnamani', 'Stev', 'Female', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '1991-09-30', 'Crowding', 'Nil', 'She got lots of crowding issues', 'Lite Package', 'Approved', '', '2020-11-25 09:03:00'),
(2, 'Godfrey', 'Jonas', 'Enangha', 'Male', 'Dr. Amy Shumbusho (Smile 360 Dental Clinic)', '1991-12-13', 'Crowding', 'Nothing More', 'Needs a Consultation', 'Comprehensive', 'Awaiting', '', '2020-11-25 06:23:09'),
(3, 'Ohmar', 'Rejoice', 'Orjiene', 'Female', 'Dr. Apara Sanmi (Smile 360 Dental Clinic)', '2020-11-01', 'Crowding', 'Ohmar needs an urgent check up', 'She needs to be checked', 'Comprehensive', 'Completed', '', '2020-11-25 09:04:05'),
(4, 'Test ', 'Jonas', 'Moses', 'Male', 'Dr. Apara Sanmi (Smile 360 Dental Clinic)', '2020-11-23', 'Crowding', 'test', 'test', 'Comprehensive', 'Awaiting', '', '2020-11-28 04:01:32'),
(5, 'hjtyh', 'Jay', 'Nkechi', 'Male', 'Dr. Amy Shumbusho (Smile 360 Dental Clinic)', '2020-11-29', 'Crowding', 'gh', 'gfghgh', 'Comprehensive', 'Awaiting', '', '2020-11-28 04:16:37'),
(6, 'hjtyh', 'Jay', 'Nkechi', 'Male', 'Dr. Amy Shumbusho (Smile 360 Dental Clinic)', '2020-11-29', 'Crowding', 'gh', 'gfghgh', 'Comprehensive', 'Awaiting', '', '2020-11-28 04:28:36'),
(7, 'Test ', 'Jonas', 'Moses', 'Male', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-02', 'Crowding', 'Nothing More', 'ggfgf', 'Comprehensive', 'Awaiting', '', '2020-11-28 04:30:23'),
(8, 'Test ', 'Jonas', 'Enangha', 'Male', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-10', 'Crowding', 'Nothing More', 'ggfgfgf', 'Comprehensive', 'Awaiting', '', '2020-11-28 05:35:31'),
(9, 'Test ', 'Stephen', 'Nkechi', 'Female', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-23', 'Crowding', 'Nothing More', 'hjjjhhj', 'Lite Package', 'Awaiting', '', '2020-11-28 05:39:40'),
(10, 'Test ', 'Stephen', 'Nkechi', 'Female', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-23', 'Crowding', 'Nothing More', 'hjjjhhj', 'Lite Package', 'Awaiting', '', '2020-11-28 05:39:48'),
(11, 'Godfrey', 'Jay', 'Moses', 'Male', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-10', 'Crowding', 'Ohmar needs an urgent check up', 'ghhjjhhj', 'Lite Package', 'Awaiting', '', '2020-11-28 05:41:09'),
(12, 'eree', 'reerre', 'errere', 'Male', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-05', 'Crowding', 'Nothing More', '3rer', 'Comprehensive', 'Awaiting', '', '2020-11-28 05:44:48'),
(13, 'eree', 'reerre', 'errere', 'Male', 'Dr. Amaka Nwadiani-Umolu (Smile 360 Dental Practice)', '2020-11-05', 'Crowding', 'Nothing More', '3rer', 'Comprehensive', 'Awaiting', '', '2020-11-28 05:45:48'),
(14, 'Test ', 'Jonas', 'Moses', 'Female', 'Dr. Amy Shumbusho (Smile 360 Dental Clinic)', '2020-11-17', 'Crowding', 'Nil', 'BNGJDTY', 'Comprehensive', 'Awaiting', '', '2020-11-28 07:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Pending Rrequest'),
(2, 'In-Treatment'),
(3, 'Action Required'),
(4, 'Archived');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `role`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsprofile`
--
ALTER TABLE `doctorsprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorsprofile`
--
ALTER TABLE `doctorsprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

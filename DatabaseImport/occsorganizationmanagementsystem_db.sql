-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 02:25 PM
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
-- Database: `occsorganizationmanagementsystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `member_id` int(11) NOT NULL,
  `member_fname` varchar(255) NOT NULL,
  `member_mname` varchar(255) NOT NULL,
  `member_lname` varchar(255) NOT NULL,
  `member_position` varchar(255) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_pfp` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`member_id`, `member_fname`, `member_mname`, `member_lname`, `member_position`, `member_email`, `member_pfp`, `active`) VALUES
(1, 'Vacant', '', '', 'Program Chair(IT Dept)', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(2, 'Vacant', '', '', 'Secretary(IT Dept)', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(3, 'Vacant', '', '', 'Faculty Professor 1', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(4, 'Vacant', '', '', 'Faculty Professor 2', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(5, 'Vacant', '', '', 'Faculty Professor 3', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(6, 'Vacant', '', '', 'Faculty Professor 4', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(7, 'Vacant', '', '', 'Faculty Professor 5', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(8, 'Vacant', '', '', 'Tech Support 1', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(9, 'Vacant', '', '', 'Tech Support 2', '', 'Member_pfp/DefaultPFP.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_officers`
--

CREATE TABLE `tbl_officers` (
  `member_id` int(11) NOT NULL,
  `officer_fname` varchar(255) NOT NULL,
  `officer_mname` varchar(255) NOT NULL,
  `officer_lname` varchar(255) NOT NULL,
  `officer_position` varchar(255) NOT NULL,
  `officer_email` varchar(100) NOT NULL,
  `officer_pfp` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_officers`
--

INSERT INTO `tbl_officers` (`member_id`, `officer_fname`, `officer_mname`, `officer_lname`, `officer_position`, `officer_email`, `officer_pfp`, `active`) VALUES
(1, 'Vacant', '', '', 'President', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(2, 'Vacant', '', '', 'Vice President(Internal)', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(3, 'Vacant', '', '', 'Vice President(External)', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(4, 'Vacant', '', '', 'Secretary', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(5, 'Vacant', '', '', 'Auditor', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(6, 'Vacant', '', '', 'Treasurer', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(7, 'Vacant', '', '', 'P.R.O.', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(8, 'Vacant', '', '', 'Graphic Designer', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(9, 'Vacant', '', '', 'Project Manager 1', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(10, 'Vacant', '', '', 'Project Manager 2', '', 'Member_pfp/DefaultPFP.jpeg', 0),
(11, 'Vacant', '', '', 'Project Manager 3', '', 'Member_pfp/DefaultPFP.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_officers`
--
ALTER TABLE `tbl_officers`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

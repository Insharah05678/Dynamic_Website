-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 02:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `Assesst_ID` varchar(10) NOT NULL,
  `Eval_ID` varchar(10) NOT NULL,
  `Project_ID` varchar(10) NOT NULL,
  `FYP_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `Batch_ID` varchar(10) NOT NULL,
  `DP_ID` varchar(10) NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `degree_program`
--

CREATE TABLE `degree_program` (
  `DP_ID` varchar(10) NOT NULL,
  `DP_Name` char(35) NOT NULL,
  `Level` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaluators`
--

CREATE TABLE `evaluators` (
  `Eval_ID` varchar(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Designation` char(20) NOT NULL,
  `Organization` char(70) NOT NULL,
  `Ext_Eval_ID` varchar(10) NOT NULL,
  `S_ID` varchar(10) NOT NULL,
  `Com_Mem_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `external_evaluator`
--

CREATE TABLE `external_evaluator` (
  `Ext_Eval_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fyp_committee`
--

CREATE TABLE `fyp_committee` (
  `Com_Mem_ID` varchar(10) NOT NULL,
  `Name` char(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Designation` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fyp_elements`
--

CREATE TABLE `fyp_elements` (
  `FYP_ID` varchar(10) NOT NULL,
  `Name` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Project_ID` varchar(10) NOT NULL,
  `Proj_Name` char(40) NOT NULL,
  `Description` char(95) NOT NULL,
  `Deadline` datetime NOT NULL,
  `Group_Mem_ID` varchar(10) NOT NULL,
  `Group_Mem_Name` char(25) NOT NULL,
  `Superv_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `sess_ID` varchar(10) NOT NULL,
  `Year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `name`, `email`, `password`, `role`) VALUES
('juw077', 'Sara', 'sara@gmail.com', 'abcd1234', 'Student'),
('juw078', 'Linta', 'Linta@gmail.com', 'abcde123', 'Student'),
('juw084', 'sohema', 'sohema@gmail.com', 'abc', 'Student'),
('t23', 'Tehreem Qamar', 'tehreemqamar@gmail.com', 'abc', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Stud_ID` varchar(10) NOT NULL,
  `Name` char(25) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Enroll_no` int(15) NOT NULL,
  `Batch_ID` varchar(10) NOT NULL,
  `Project_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervision`
--

CREATE TABLE `supervision` (
  `Superv_ID` varchar(10) NOT NULL,
  `S_ID` varchar(10) NOT NULL,
  `Project_ID` varchar(10) NOT NULL,
  `Sess_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervisiors`
--

CREATE TABLE `supervisiors` (
  `S_ID` varchar(10) NOT NULL,
  `Name` char(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Designation` char(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Superv_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD UNIQUE KEY `Eval_ID` (`Eval_ID`),
  ADD KEY `Assesst_ID` (`Assesst_ID`),
  ADD KEY `assessments_ibfk_2` (`FYP_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`Batch_ID`),
  ADD UNIQUE KEY `B_ID_2` (`Batch_ID`),
  ADD KEY `B_ID` (`Batch_ID`);

--
-- Indexes for table `degree_program`
--
ALTER TABLE `degree_program`
  ADD PRIMARY KEY (`DP_ID`),
  ADD KEY `DP_ID` (`DP_ID`);

--
-- Indexes for table `evaluators`
--
ALTER TABLE `evaluators`
  ADD PRIMARY KEY (`Eval_ID`),
  ADD UNIQUE KEY `Ext_Eval_ID` (`Ext_Eval_ID`),
  ADD UNIQUE KEY `Eval_ID_2` (`Eval_ID`),
  ADD UNIQUE KEY `S_ID` (`S_ID`),
  ADD UNIQUE KEY `Com_Mem_ID` (`Com_Mem_ID`),
  ADD KEY `Eval_ID` (`Eval_ID`);

--
-- Indexes for table `external_evaluator`
--
ALTER TABLE `external_evaluator`
  ADD PRIMARY KEY (`Ext_Eval_ID`),
  ADD UNIQUE KEY `Ext_Eval_ID` (`Ext_Eval_ID`),
  ADD KEY `Ext_Eval_ID_2` (`Ext_Eval_ID`);

--
-- Indexes for table `fyp_committee`
--
ALTER TABLE `fyp_committee`
  ADD PRIMARY KEY (`Com_Mem_ID`),
  ADD UNIQUE KEY `Com_Mem_ID_2` (`Com_Mem_ID`),
  ADD KEY `Com_Mem_ID` (`Com_Mem_ID`);

--
-- Indexes for table `fyp_elements`
--
ALTER TABLE `fyp_elements`
  ADD PRIMARY KEY (`FYP_ID`),
  ADD KEY `FYP_ID` (`FYP_ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Project_ID`),
  ADD UNIQUE KEY `Superv_ID` (`Superv_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sess_ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Stud_ID`),
  ADD UNIQUE KEY `B_ID` (`Batch_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `supervision`
--
ALTER TABLE `supervision`
  ADD PRIMARY KEY (`Superv_ID`),
  ADD KEY `Superv_ID` (`Superv_ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `supervisiors`
--
ALTER TABLE `supervisiors`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `S_ID_2` (`S_ID`),
  ADD UNIQUE KEY `Superv_ID` (`Superv_ID`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_2` FOREIGN KEY (`FYP_ID`) REFERENCES `fyp_elements` (`FYP_ID`),
  ADD CONSTRAINT `assessments_ibfk_3` FOREIGN KEY (`Project_ID`) REFERENCES `projects` (`Project_ID`),
  ADD CONSTRAINT `assessments_ibfk_4` FOREIGN KEY (`Eval_ID`) REFERENCES `evaluators` (`Eval_ID`);

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`Batch_ID`) REFERENCES `students` (`Batch_ID`);

--
-- Constraints for table `degree_program`
--
ALTER TABLE `degree_program`
  ADD CONSTRAINT `degree_program_ibfk_1` FOREIGN KEY (`DP_ID`) REFERENCES `batch` (`Batch_ID`),
  ADD CONSTRAINT `degree_program_ibfk_2` FOREIGN KEY (`DP_ID`) REFERENCES `sessions` (`sess_ID`);

--
-- Constraints for table `evaluators`
--
ALTER TABLE `evaluators`
  ADD CONSTRAINT `evaluators_ibfk_1` FOREIGN KEY (`Ext_Eval_ID`) REFERENCES `external_evaluator` (`Ext_Eval_ID`),
  ADD CONSTRAINT `evaluators_ibfk_2` FOREIGN KEY (`Com_Mem_ID`) REFERENCES `fyp_committee` (`Com_Mem_ID`),
  ADD CONSTRAINT `evaluators_ibfk_3` FOREIGN KEY (`Eval_ID`) REFERENCES `assessments` (`Eval_ID`),
  ADD CONSTRAINT `evaluators_ibfk_4` FOREIGN KEY (`S_ID`) REFERENCES `supervisiors` (`S_ID`);

--
-- Constraints for table `external_evaluator`
--
ALTER TABLE `external_evaluator`
  ADD CONSTRAINT `external_evaluator_ibfk_1` FOREIGN KEY (`Ext_Eval_ID`) REFERENCES `evaluators` (`Ext_Eval_ID`);

--
-- Constraints for table `fyp_committee`
--
ALTER TABLE `fyp_committee`
  ADD CONSTRAINT `fyp_committee_ibfk_1` FOREIGN KEY (`Com_Mem_ID`) REFERENCES `evaluators` (`Com_Mem_ID`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`Superv_ID`) REFERENCES `supervision` (`Superv_ID`),
  ADD CONSTRAINT `projects_ibfk_3` FOREIGN KEY (`Project_ID`) REFERENCES `assessments` (`Project_ID`),
  ADD CONSTRAINT `projects_ibfk_4` FOREIGN KEY (`Project_ID`) REFERENCES `students` (`Project_ID`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`sess_ID`) REFERENCES `degree_program` (`DP_ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Batch_ID`) REFERENCES `batch` (`Batch_ID`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`Project_ID`) REFERENCES `projects` (`Project_ID`);

--
-- Constraints for table `supervision`
--
ALTER TABLE `supervision`
  ADD CONSTRAINT `supervision_ibfk_1` FOREIGN KEY (`Superv_ID`) REFERENCES `supervisiors` (`Superv_ID`),
  ADD CONSTRAINT `supervision_ibfk_2` FOREIGN KEY (`Project_ID`) REFERENCES `projects` (`Project_ID`);

--
-- Constraints for table `supervisiors`
--
ALTER TABLE `supervisiors`
  ADD CONSTRAINT `supervisiors_ibfk_1` FOREIGN KEY (`Superv_ID`) REFERENCES `supervision` (`Superv_ID`),
  ADD CONSTRAINT `supervisiors_ibfk_2` FOREIGN KEY (`S_ID`) REFERENCES `evaluators` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

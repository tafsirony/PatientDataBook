-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 11:56 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Doctor_Patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE IF NOT EXISTS `appoinment` (
  `D_Id` int(11) DEFAULT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `Last_A_Date` varchar(20) DEFAULT NULL,
  `Next_A_Date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `D_Id` int(11) NOT NULL,
  `D_Name` varchar(10) NOT NULL,
  `D_Password` varchar(20) NOT NULL,
  `D_Degree` varchar(20) NOT NULL,
  `D_Speciality` varchar(20) NOT NULL,
  `D_VistingHour` varchar(20) NOT NULL,
  `D_Mail_Id` varchar(20) DEFAULT NULL,
  `D_appoinmentNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_Id`, `D_Name`, `D_Password`, `D_Degree`, `D_Speciality`, `D_VistingHour`, `D_Mail_Id`, `D_appoinmentNo`) VALUES
(0, '0', '0', '0', '0', '0', '0@0.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `labrotorian`
--

CREATE TABLE IF NOT EXISTS `labrotorian` (
  `L_Id` int(11) NOT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `L_Email_Id` varchar(20) NOT NULL,
  `L_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labrotorian`
--

INSERT INTO `labrotorian` (`L_Id`, `L_Name`, `L_Email_Id`, `L_Password`) VALUES
(3, '3', '3@3.com', '3');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `Pr_Id` int(11) DEFAULT NULL,
  `M_Name` varchar(20) NOT NULL,
  `M_Quantity` varchar(20) NOT NULL,
  `M_Time` varchar(20) DEFAULT NULL,
  `M_Timeline` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Pr_Id`, `M_Name`, `M_Quantity`, `M_Time`, `M_Timeline`) VALUES
(4, '7', '7', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `P_Id` int(11) NOT NULL,
  `P_Name` varchar(20) NOT NULL,
  `P_Password` varchar(20) NOT NULL,
  `D_Id` int(11) NOT NULL,
  `P_Age` varchar(20) NOT NULL,
  `P_Gender` varchar(20) NOT NULL,
  `P_Weight` varchar(20) NOT NULL,
  `P_PhnNo` varchar(20) NOT NULL,
  `P_History` varchar(20) NOT NULL,
  `P_Mail_Id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_Id`, `P_Name`, `P_Password`, `D_Id`, `P_Age`, `P_Gender`, `P_Weight`, `P_PhnNo`, `P_History`, `P_Mail_Id`) VALUES
(1, '1', '1', 0, '1', '1', '1', '1', '1', '1@1.com');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `Pr_Id` int(11) NOT NULL,
  `D_Id` int(11) DEFAULT NULL,
  `T_Id` int(11) DEFAULT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `Pr_Data` varchar(20) DEFAULT NULL,
  `Pr_Advise` varchar(20) DEFAULT NULL,
  `Pr_Date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Pr_Id`, `D_Id`, `T_Id`, `P_Id`, `Pr_Data`, `Pr_Advise`, `Pr_Date`) VALUES
(4, 0, 2, 1, '4', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `T_Id` int(11) NOT NULL,
  `T_Name` varchar(20) DEFAULT NULL,
  `T_DiagnosisCentre` varchar(20) DEFAULT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `D_Id` int(11) DEFAULT NULL,
  `L_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`T_Id`, `T_Name`, `T_DiagnosisCentre`, `P_Id`, `D_Id`, `L_Id`) VALUES
(2, '2', '2', 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `test_pdf`
--

CREATE TABLE IF NOT EXISTS `test_pdf` (
  `Test_Type` varchar(20) DEFAULT NULL,
  `Test_name` varchar(20) DEFAULT NULL,
  `TP_LInk` varchar(20) DEFAULT NULL,
  `T_Id` int(11) DEFAULT NULL,
  `Tp_Date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_writen`
--

CREATE TABLE IF NOT EXISTS `test_writen` (
  `Test_type` varchar(20) DEFAULT NULL,
  `TW_Normal` varchar(20) DEFAULT NULL,
  `TW_Abnormal` varchar(20) DEFAULT NULL,
  `TW_Flag` varchar(20) DEFAULT NULL,
  `TW_Reference_Range` varchar(20) DEFAULT NULL,
  `T_Id` int(11) DEFAULT NULL,
  `Tw_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_writen`
--

INSERT INTO `test_writen` (`Test_type`, `TW_Normal`, `TW_Abnormal`, `TW_Flag`, `TW_Reference_Range`, `T_Id`, `Tw_Date`) VALUES
('6', '6', '6', '6', '6', 2, '2017-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD KEY `P_Id` (`P_Id`), ADD KEY `D_Id` (`D_Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_Id`);

--
-- Indexes for table `labrotorian`
--
ALTER TABLE `labrotorian`
  ADD PRIMARY KEY (`L_Id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD KEY `Pr_Id` (`Pr_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_Id`), ADD KEY `D_Id` (`D_Id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Pr_Id`), ADD KEY `P_Id` (`P_Id`), ADD KEY `D_Id` (`D_Id`), ADD KEY `T_Id` (`T_Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`T_Id`), ADD KEY `L_Id` (`L_Id`), ADD KEY `P_Id` (`P_Id`), ADD KEY `D_Id` (`D_Id`);

--
-- Indexes for table `test_pdf`
--
ALTER TABLE `test_pdf`
  ADD KEY `T_Id` (`T_Id`);

--
-- Indexes for table `test_writen`
--
ALTER TABLE `test_writen`
  ADD KEY `T_Id` (`T_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`P_Id`) REFERENCES `patient` (`P_Id`),
ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_Id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`Pr_Id`) REFERENCES `prescription` (`Pr_Id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_Id`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`P_Id`) REFERENCES `patient` (`P_Id`),
ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_Id`),
ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`T_Id`) REFERENCES `test` (`T_Id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`L_Id`) REFERENCES `labrotorian` (`L_Id`),
ADD CONSTRAINT `test_ibfk_2` FOREIGN KEY (`P_Id`) REFERENCES `patient` (`P_Id`),
ADD CONSTRAINT `test_ibfk_3` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_Id`);

--
-- Constraints for table `test_pdf`
--
ALTER TABLE `test_pdf`
ADD CONSTRAINT `test_pdf_ibfk_1` FOREIGN KEY (`T_Id`) REFERENCES `test` (`T_Id`);

--
-- Constraints for table `test_writen`
--
ALTER TABLE `test_writen`
ADD CONSTRAINT `test_writen_ibfk_1` FOREIGN KEY (`T_Id`) REFERENCES `test` (`T_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

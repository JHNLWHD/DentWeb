-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 12:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dentist`
--

CREATE TABLE `dentist` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `First_Name` text NOT NULL,
  `Middle_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Profile_Desc` text NOT NULL,
  `Gender` text NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dentist`
--

INSERT INTO `dentist` (`ID`, `Username`, `Password`, `First_Name`, `Middle_Name`, `Last_Name`, `Profile_Desc`, `Gender`, `Email`) VALUES
(1, 'DocRhaidz', 'ba67539cdda6a406bdad737436571a5f', 'Rhaidzsal', 'Arabani', 'Ali', 'Practicing profession from University of Maryland', 'Male', 'reedyy@yahoo.com'),
(2, 'DocWahid', '63d837cbffb040415e4acc320c0b5b8a', 'Al-Jhoenil', 'Dacumus', 'Wahid', 'Best Dentist around the world.', 'Male', 'aljhoenilw@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `ID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Generic_name` text NOT NULL,
  `Brand_name` text NOT NULL,
  `Unit_dosage` text NOT NULL,
  `Cost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `Description`, `Generic_name`, `Brand_name`, `Unit_dosage`, `Cost`) VALUES
(1, 'Analgesic', 'Ibuprofen', 'Advil,Nuprin,Motrin', '500mg', '15'),
(2, 'Analgesics', 'Acetaminophen', 'Tylenol', '500mg', '20'),
(3, 'Analgesics', 'Aspirin ', 'Bayer', '500mg', '30'),
(15, 'Pasta', 'Dexyuo', 'Clorix', '300mg', '250'),
(16, 'Antipyretic', 'Saridon', 'Saridon', '99mg', '250');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Middle_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `First_name`, `Middle_name`, `Last_name`, `Gender`, `Email`, `Address`, `Created_date`) VALUES
(1, 'Aiesha Jhoei', 'Dacumus', 'Wahid', 'Female', 'aieshajhoeiw@yahoo.com', 'Sta. Maria, Zamboanga City', '2016-10-16 09:22:58'),
(2, 'Juan', '', 'Dela Cruz', 'Male', 'juan@yahoo.com', 'Philippines', '2016-10-16 09:24:30'),
(3, 'Rodrigo', 'Roa', 'Duterte', 'Male', 'rody@gov.ph', 'Philippines', '2016-10-16 09:27:04'),
(4, 'Al-Amir', 'Dacumus', 'Wahid', 'Male', 'amir@gmail.com', 'Sta. Maria, Zamboanga City', '2016-10-16 09:30:24'),
(5, 'Al', 'Dacumus', 'Wahid', 'Male', 'chuchu@yahoo.com', 'Sta. Maria, Zamboanga City', '2016-10-16 09:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID`, `Description`, `Cost`) VALUES
(1, 'Extraction', '300'),
(2, 'Cleaning', '150'),
(3, 'Whitening', '1000'),
(4, 'Filling', '300'),
(5, 'Tooth Imlplant', '700'),
(6, 'X-ray', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dentist`
--
ALTER TABLE `dentist`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dentist`
--
ALTER TABLE `dentist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

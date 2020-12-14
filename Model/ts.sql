-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 02:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` text NOT NULL,
  `password` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('wafirew@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bookedlist`
--

CREATE TABLE `bookedlist` (
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  `Booking_ID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookedlist`
--

INSERT INTO `bookedlist` (`Name`, `Number`, `Booking_ID`) VALUES
('Rakib', '01918779365', '01'),
('Nakib', '01715199657', '03'),
('Sayem', '01817569785', ' 01'),
('Akash', '01817564587', ' 01'),
('Rakib', '01715199657', ' 01');


-- --------------------------------------------------------

--
-- Table structure for table `bookinglist`
--

CREATE TABLE `bookinglist` (
  `Booking_ID` text NOT NULL,
  `roomnumber` text NOT NULL,
  `stayout` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinglist`
--

INSERT INTO `bookinglist` (`Booking_ID`, `roomnumber`, `stayout`, `Price`) VALUES
('01', '101', '12:30PM', 1500),
('02', '122', '1PM', 1500),
('03', '321', '2PM', 700),
('04', '112', '1:10PM', 700),
('05', '111', '7:20PM', 400),
('06', '220', '12:21PM', 900);

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  `Email` text NOT NULL,
  `nid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`Name`, `Number`, `Email`, `nid`) VALUES
('Ramjan', '01819785469', 'ramjan@gmail.com', '1232112232'),
('Karim', '01819785464', 'Karim@gmail.com', '3123232132'),
('Ahmed', '01918785469', 'Ahmed@gmail.com', '23432664334'),
('Ahmed rakib', '01819785464', 'rakib@gmail.com', '7456244532');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `Total_earning` int(11) NOT NULL,
  `No_Of_Room_Booked` int(11) NOT NULL,
  `Total_cost` int(11) NOT NULL,
  `Profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`Total_earning`, `No_Of_Room_Booked`, `Total_cost`, `Profit`) VALUES
(5000, 10, 3000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_Number` text NOT NULL,
  `Admin_Name` text NOT NULL,
  `Admin_Number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `Room_Number` (`Registration_Number`, `Admin_Name`, `Admin_Number`) VALUES
('101', 'Sakib', '01918779365'),
('122', 'Akif', '01918779365');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

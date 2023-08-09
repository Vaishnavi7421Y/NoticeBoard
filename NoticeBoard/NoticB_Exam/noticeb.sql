-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 09:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noticeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `ES_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `password`, `ES_id`) VALUES
(101, 'Pencil Camlin', 'penil09@gmail.com', 'pencilcam12', 'PG12002'),
(102, 'Prof. Paradox', 'paradox1997@gmail.com', 'cbe80dcbbd0685b903f565b48', '18002PX'),
(103, 'Prof P.A Chaudhari ', 'pachaudhari97@gmail.com', '18c38b26d60484eeb99363456', '18002PA'),
(104, 'Mrs. Verdona Tenny', 'verdona12@gmail.com', '2fb1041292172bdd1ebe6454b', '12002VT'),
(105, 'Mrs. Kritika Dev', 'kritikadev123@gmail.com', 'kritika@90', '12003KD'),
(106, 'Prof. Paradox Smith', 'paradoxsmith99@gmail.com', 'Prof@12', '12003PL');

-- --------------------------------------------------------

--
-- Table structure for table `art_villa`
--

CREATE TABLE `art_villa` (
  `AVID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `UPFile` varchar(120) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `Roll_No` varchar(10) NOT NULL,
  `Standard` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `email`, `password`, `Roll_No`, `Standard`) VALUES
(1, 'Ben Ten', 'Benn10@gmail.com', 'Bennten@10', '101B', 'FYMCA'),
(2, 'Gwen Tennyson', 'GwennT10@gmail.com', 'GwennT#10', '102G', 'FYMCA'),
(3, 'Korth DBMS', 'BennTenny10@gmail.com', 'Benn@12', '102B', 'FYMCA'),
(4, 'Awantika Yerpude', 'awantikayerpude123@gmail.com', '800d6cc3afb3', '108A', 'TYMCA'),
(6, 'Poonam Patil', 'poonampatil987@gmail.com', 'poonam@12', '18002PP', 'TYMCA'),
(7, 'Aditi Dahivelkar', 'aditidahivelkar97@gmail.com', 'Aditi@12', '1200AD', 'TYMCA'),
(8, 'Aditi Dahivelkar', 'aditidahivelkar977@gmail.com', 'Aditi@12', '1200AD1', 'TYMCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ES_id` (`ES_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `art_villa`
--
ALTER TABLE `art_villa`
  ADD PRIMARY KEY (`AVID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Roll_No` (`Roll_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `art_villa`
--
ALTER TABLE `art_villa`
  MODIFY `AVID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `art_villa`
--
ALTER TABLE `art_villa`
  ADD CONSTRAINT `art_villa_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

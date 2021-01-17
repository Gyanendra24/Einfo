-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 12:45 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `einfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `tea_regno` varchar(10) DEFAULT NULL,
  `stu_regno` varchar(10) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `class` char(2) DEFAULT NULL,
  `sec` char(1) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `disc` varchar(255) DEFAULT NULL,
  `mm` int(11) DEFAULT NULL,
  `ob` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`tea_regno`, `stu_regno`, `subject`, `class`, `sec`, `purpose`, `disc`, `mm`, `ob`) VALUES
('TEA1101111', 'STU1101111', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 15),
('TEA1101111', 'STU1101116', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101111', 'STU1101118', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('TEA1101111', 'STU1101119', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 16),
('TEA1101111', 'STU1101120', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 10, 0),
('TEA1101111', 'STU1101121', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 10, 0),
('TEA1101111', 'STU1101122', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('TEA1101111', 'STU1101123', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 10, 0),
('TEA1101111', 'STU1101138', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 18),
('TEA1101111', 'STU1101111', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101116', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101118', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101119', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101120', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101121', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101122', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101123', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101138', 'Java', '12', 'A', 'Test 2', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101111', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101116', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101118', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101119', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101120', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101121', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101122', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101123', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101111', 'STU1101138', 'DBMS', '12', 'A', 'Test 1', 'Unit Test - 1', 0, 0),
('TEA1101113', 'STU1101112', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101113', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('TEA1101113', 'STU1101114', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('TEA1101113', 'STU1101124', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('TEA1101113', 'STU1101130', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101142', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('TEA1101113', 'STU1101143', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101144', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101113', 'STU1101145', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101113', 'STU1101146', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 10),
('TEA1101113', 'STU1101147', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('TEA1101113', 'STU1101148', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('TEA1101113', 'STU1101165', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('TEA1101113', 'STU1101166', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('TEA1101113', 'STU1101167', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('TEA1101113', 'STU1101168', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('TEA1101113', 'STU1101169', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('TEA1101113', 'STU1101170', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('TEA1101113', 'STU1101171', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('TEA1101113', 'STU1101172', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101173', 'English', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101113', 'STU1101112', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 10),
('TEA1101113', 'STU1101113', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 11),
('TEA1101113', 'STU1101114', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 12),
('TEA1101113', 'STU1101124', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 13),
('TEA1101113', 'STU1101130', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 9),
('TEA1101113', 'STU1101142', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 8),
('TEA1101113', 'STU1101143', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 7),
('TEA1101113', 'STU1101144', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 5),
('TEA1101113', 'STU1101145', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 9),
('TEA1101113', 'STU1101146', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 11),
('TEA1101113', 'STU1101147', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 10),
('TEA1101113', 'STU1101148', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 12),
('TEA1101113', 'STU1101165', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 13),
('TEA1101113', 'STU1101166', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 15),
('TEA1101113', 'STU1101167', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 14),
('TEA1101113', 'STU1101168', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 5),
('TEA1101113', 'STU1101169', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 3),
('TEA1101113', 'STU1101170', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 2),
('TEA1101113', 'STU1101171', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 1),
('TEA1101113', 'STU1101172', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 8),
('TEA1101113', 'STU1101173', 'English', '1', 'A', 'Practice Test', 'Practice Class Test', 15, 7),
('TEA1101113', 'STU1101117', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101151', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101113', 'STU1101152', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101113', 'STU1101153', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101154', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('TEA1101113', 'STU1101174', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101175', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('TEA1101113', 'STU1101176', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 0),
('TEA1101113', 'STU1101177', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('TEA1101113', 'STU1101178', 'English', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('TEA1101113', 'STU1101112', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 35),
('TEA1101113', 'STU1101113', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 25),
('TEA1101113', 'STU1101114', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 46),
('TEA1101113', 'STU1101124', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 40),
('TEA1101113', 'STU1101130', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 26),
('TEA1101113', 'STU1101142', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 33),
('TEA1101113', 'STU1101143', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 19),
('TEA1101113', 'STU1101144', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 20),
('TEA1101113', 'STU1101145', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 15),
('TEA1101113', 'STU1101146', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 12),
('TEA1101113', 'STU1101147', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 45),
('TEA1101113', 'STU1101148', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 42),
('TEA1101113', 'STU1101165', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 43),
('TEA1101113', 'STU1101166', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 31),
('TEA1101113', 'STU1101167', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 32),
('TEA1101113', 'STU1101168', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 30),
('TEA1101113', 'STU1101169', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 37),
('TEA1101113', 'STU1101170', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 38),
('TEA1101113', 'STU1101171', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 39),
('TEA1101113', 'STU1101172', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 25),
('TEA1101113', 'STU1101173', 'English', '1', 'A', 'Practice Test', 'Practice Test for Half yearly exam ', 50, 21),
('Tea1101114', 'STU1101112', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101114', 'STU1101113', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101114', 'STU1101114', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101114', 'STU1101124', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101114', 'STU1101130', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101114', 'STU1101142', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101114', 'STU1101143', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 1),
('Tea1101114', 'STU1101144', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 2),
('Tea1101114', 'STU1101145', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101114', 'STU1101146', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101114', 'STU1101147', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101114', 'STU1101148', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101114', 'STU1101165', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 10),
('Tea1101114', 'STU1101166', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101114', 'STU1101167', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101114', 'STU1101168', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101114', 'STU1101169', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101114', 'STU1101170', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101114', 'STU1101171', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101114', 'STU1101172', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101114', 'STU1101173', 'Hindi', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101114', 'STU1101117', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 10),
('Tea1101114', 'STU1101151', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101114', 'STU1101152', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101114', 'STU1101153', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101114', 'STU1101154', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101114', 'STU1101174', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101114', 'STU1101175', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101114', 'STU1101176', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101114', 'STU1101177', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101114', 'STU1101178', 'Hindi', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101114', 'STU1101112', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 15),
('Tea1101114', 'STU1101113', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 16),
('Tea1101114', 'STU1101114', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 17),
('Tea1101114', 'STU1101124', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 10),
('Tea1101114', 'STU1101130', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 13),
('Tea1101114', 'STU1101142', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 9),
('Tea1101114', 'STU1101143', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 8),
('Tea1101114', 'STU1101144', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 7),
('Tea1101114', 'STU1101145', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 5),
('Tea1101114', 'STU1101146', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 9),
('Tea1101114', 'STU1101147', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 8),
('Tea1101114', 'STU1101148', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 11),
('Tea1101114', 'STU1101165', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 12),
('Tea1101114', 'STU1101166', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 14),
('Tea1101114', 'STU1101167', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 18),
('Tea1101114', 'STU1101168', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 19),
('Tea1101114', 'STU1101169', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 15),
('Tea1101114', 'STU1101170', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 14),
('Tea1101114', 'STU1101171', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 11),
('Tea1101114', 'STU1101172', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 12),
('Tea1101114', 'STU1101173', 'Hindi', '1', 'A', 'Practice Test', 'Practice Class Test', 20, 15),
('Tea1101115', 'STU1101111', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 15),
('Tea1101115', 'STU1101119', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 11),
('Tea1101115', 'STU1101138', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 8),
('Tea1101115', 'STU1101141', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 9),
('Tea1101115', 'STU1101184', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 14),
('Tea1101115', 'STU1101185', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 16),
('Tea1101115', 'STU1101186', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 17),
('Tea1101115', 'STU1101187', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 18),
('Tea1101115', 'STU1101188', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 19),
('Tea1101115', 'STU1101189', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 5),
('Tea1101115', 'STU1101198', 'Maths', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 6),
('Tea1101115', 'STU1101111', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 23),
('Tea1101115', 'STU1101119', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 28),
('Tea1101115', 'STU1101138', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 30),
('Tea1101115', 'STU1101141', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 35),
('Tea1101115', 'STU1101184', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 33),
('Tea1101115', 'STU1101185', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 36),
('Tea1101115', 'STU1101186', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 40),
('Tea1101115', 'STU1101187', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 41),
('Tea1101115', 'STU1101188', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 39),
('Tea1101115', 'STU1101189', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 38),
('Tea1101115', 'STU1101198', 'Maths', '12', 'A', 'Practice Test', 'Practice Class Test', 50, 37),
('Tea1101115', 'STU1101125', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 15),
('Tea1101115', 'STU1101132', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 16),
('Tea1101115', 'STU1101190', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 17),
('Tea1101115', 'STU1101191', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 18),
('Tea1101115', 'STU1101192', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 5),
('Tea1101115', 'STU1101193', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 6),
('Tea1101115', 'STU1101194', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 8),
('Tea1101115', 'STU1101195', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 9),
('Tea1101115', 'STU1101196', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 11),
('Tea1101115', 'STU1101197', 'Maths', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 12),
('Tea1101115', 'STU1101115', 'Maths', '3', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101115', 'STU1101156', 'Maths', '3', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101115', 'STU1101157', 'Maths', '3', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101115', 'STU1101158', 'Maths', '3', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101115', 'STU1101159', 'Maths', '3', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101116', 'STU1101111', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 15),
('Tea1101116', 'STU1101119', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 16),
('Tea1101116', 'STU1101138', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 18),
('Tea1101116', 'STU1101141', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 12),
('Tea1101116', 'STU1101184', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 11),
('Tea1101116', 'STU1101185', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 10),
('Tea1101116', 'STU1101186', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 13),
('Tea1101116', 'STU1101187', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 9),
('Tea1101116', 'STU1101188', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 8),
('Tea1101116', 'STU1101189', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 7),
('Tea1101116', 'STU1101198', 'Java', '12', 'A', 'Test 1', 'Unit Test - 1', 20, 16),
('Tea1101116', 'STU1101111', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 15),
('Tea1101116', 'STU1101119', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 23),
('Tea1101116', 'STU1101138', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 22),
('Tea1101116', 'STU1101141', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 20),
('Tea1101116', 'STU1101184', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 19),
('Tea1101116', 'STU1101185', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 18),
('Tea1101116', 'STU1101186', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 23),
('Tea1101116', 'STU1101187', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 24),
('Tea1101116', 'STU1101188', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 25),
('Tea1101116', 'STU1101189', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 19),
('Tea1101116', 'STU1101198', 'Java', '12', 'A', 'Practice Test', 'Practice Class Test', 30, 15),
('Tea1101119', 'STU1101112', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101119', 'STU1101113', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101119', 'STU1101114', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101119', 'STU1101124', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101119', 'STU1101130', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101119', 'STU1101142', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101119', 'STU1101143', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101119', 'STU1101144', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101119', 'STU1101145', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101119', 'STU1101146', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101119', 'STU1101147', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101119', 'STU1101148', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101119', 'STU1101165', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101119', 'STU1101166', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101119', 'STU1101167', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101119', 'STU1101168', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101119', 'STU1101169', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101119', 'STU1101170', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101119', 'STU1101171', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101119', 'STU1101172', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 10),
('Tea1101119', 'STU1101173', 'Maths', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101119', 'STU1101112', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 11),
('Tea1101119', 'STU1101113', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 12),
('Tea1101119', 'STU1101114', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 13),
('Tea1101119', 'STU1101124', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 10),
('Tea1101119', 'STU1101130', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 9),
('Tea1101119', 'STU1101142', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 8),
('Tea1101119', 'STU1101143', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 7),
('Tea1101119', 'STU1101144', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 12),
('Tea1101119', 'STU1101145', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 11),
('Tea1101119', 'STU1101146', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 7),
('Tea1101119', 'STU1101147', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 9),
('Tea1101119', 'STU1101148', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 8),
('Tea1101119', 'STU1101165', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 12),
('Tea1101119', 'STU1101166', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 14),
('Tea1101119', 'STU1101167', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 15),
('Tea1101119', 'STU1101168', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 15),
('Tea1101119', 'STU1101169', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 6),
('Tea1101119', 'STU1101170', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 2),
('Tea1101119', 'STU1101171', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 3),
('Tea1101119', 'STU1101172', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 8),
('Tea1101119', 'STU1101173', 'Maths', '1', 'A', 'Practice Test', 'Test', 15, 4),
('Tea1101120', 'STU1101112', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101120', 'STU1101113', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101120', 'STU1101114', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101120', 'STU1101124', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101120', 'STU1101130', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101120', 'STU1101142', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101120', 'STU1101143', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101120', 'STU1101144', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101120', 'STU1101145', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101120', 'STU1101146', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 2),
('Tea1101120', 'STU1101147', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 3),
('Tea1101120', 'STU1101148', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101120', 'STU1101165', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101120', 'STU1101166', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 10),
('Tea1101120', 'STU1101167', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101120', 'STU1101168', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101120', 'STU1101169', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101120', 'STU1101170', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101120', 'STU1101171', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101120', 'STU1101172', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101120', 'STU1101173', 'G.K', '1', 'A', 'Test 1', 'Unit Test - 1', 10, 2),
('Tea1101120', 'STU1101112', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 14),
('Tea1101120', 'STU1101113', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 15),
('Tea1101120', 'STU1101114', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 16),
('Tea1101120', 'STU1101124', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 17),
('Tea1101120', 'STU1101130', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 18),
('Tea1101120', 'STU1101142', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 20),
('Tea1101120', 'STU1101143', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 19),
('Tea1101120', 'STU1101144', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 12),
('Tea1101120', 'STU1101145', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 15),
('Tea1101120', 'STU1101146', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 16),
('Tea1101120', 'STU1101147', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 14),
('Tea1101120', 'STU1101148', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 11),
('Tea1101120', 'STU1101165', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 10),
('Tea1101120', 'STU1101166', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 11),
('Tea1101120', 'STU1101167', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 8),
('Tea1101120', 'STU1101168', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 7),
('Tea1101120', 'STU1101169', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 9),
('Tea1101120', 'STU1101170', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 4),
('Tea1101120', 'STU1101171', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 6),
('Tea1101120', 'STU1101172', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 15),
('Tea1101120', 'STU1101173', 'G.K', '1', 'A', 'Practice Test', 'Test', 20, 14),
('Tea1101120', 'STU1101117', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 8),
('Tea1101120', 'STU1101151', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 9),
('Tea1101120', 'STU1101152', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 5),
('Tea1101120', 'STU1101153', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 4),
('Tea1101120', 'STU1101154', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 6),
('Tea1101120', 'STU1101174', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 1),
('Tea1101120', 'STU1101175', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 3),
('Tea1101120', 'STU1101176', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 7),
('Tea1101120', 'STU1101177', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 2),
('Tea1101120', 'STU1101178', 'G.K', '2', 'A', 'Test 1', 'Unit Test - 1', 10, 3),
('Tea1102111', 'STU1102111', 'DBMS', '12', 'B', 'Test 1', 'Unit Test - 1', 20, 15);

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`name`, `email`, `msg`) VALUES
('Deepesh gupta', 'deepesh@gmail.com', 'I need you to design a shopping website for us. Email me your requirements to the above-mentioned email.'),
('Shikhar gupta', 'shikhar@gmail.com', 'Need help in developing a microsoft office extension. If you can help please mail me to the above mentioned EMAIL. ');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `regno` varchar(10) NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `board` char(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`regno`, `school_name`, `board`, `address`, `owner`, `contact`, `password`) VALUES
('M170521101', 'Children Public Sr. Sec. School', 'CBSE', 'Chitransh Nagar, Fatehpur, UP', 'Sunil Shrivastava', 2147483647, 'm170521101'),
('M170521102', 'Maharishi Vidhya Mandir', 'ICSE', 'Daviganj, Fetehpur, UP', 'Rajesh Kumar', 2147483647, 'm170521102'),
('S170521101', 'Children Public Sr. Sec. School', 'CBSE', 'Chitransh Nagar, Fatehpur, UP', 'Sunil Shrivastava', 2147483647, 'deepesh'),
('S170521102', 'Maharishi Vidhya Mandir', 'CBSE', 'Radha Nagar, Fatehpur', 'Ramanujam Pandey', 2147483647, 's170521102');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_regno` varchar(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `sec` char(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gname` varchar(255) DEFAULT NULL,
  `gcontact` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `regno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_regno`, `name`, `class`, `sec`, `address`, `dob`, `gname`, `gcontact`, `password`, `regno`) VALUES
('STU1101111', 'Deepesh Gupta', 12, 'A', 'Radha Nagar Chauraha', '1995-12-13', 'Buddhsen Gupta', 2147483647, 'dee123', 'S170521101'),
('STU1101112', 'Shivam', 1, 'A', 'Daviganj, Fetehpur, UP', '1998-02-13', 'Rajesh Kumar', 2147483647, 'STU1101112', 'S170521101'),
('STU1101113', 'Shikhar', 1, 'A', 'Daviganj, Fetehpur, UP', '1998-02-13', 'Rajesh Kumar', 2147483647, 'STU1101113', 'S170521101'),
('STU1101114', 'Ankit', 1, 'A', 'Daviganj, Fetehpur, UP', '1998-02-13', 'Rajesh Kumar', 2147483647, 'STU1101114', 'S170521101'),
('STU1101115', 'Rohit', 3, 'A', 'Abc', '1998-03-12', 'Abc', 2147483647, 'STU1101115', 'S170521101'),
('STU1101116', 'Rohit', 7, 'A', 'Devi Ganj, Fatehpur', '1998-03-12', 'Abc', 2147483647, 'STU1101116', 'S170521101'),
('STU1101117', 'Rohit', 2, 'A', 'Abc', '1998-03-12', 'Abc', 2147483647, 'STU1101117', 'S170521101'),
('STU1101118', 'Rohit', 8, 'A', 'Radha Nagar Chauraha', '1998-03-12', 'Abc', 2147483647, 'STU1101118', 'S170521101'),
('STU1101119', 'Rohit', 12, 'A', 'Devi Ganj, Fatehpur', '1998-03-12', 'Abc', 2147483647, 'STU1101119', 'S170521101'),
('STU1101120', 'Rohit', 4, 'A', 'Devi Ganj, Fatehpur', '1998-03-12', 'Abc', 2147483647, 'STU1101120', 'S170521101'),
('STU1101121', 'Rohit', 11, 'A', 'Abc', '1998-03-12', 'Abc', 2147483647, 'STU1101121', 'S170521101'),
('STU1101122', 'Rohit', 10, 'A', 'Devi Ganj, Fatehpur', '1998-03-12', 'Abc', 2147483647, 'STU1101122', 'S170521101'),
('STU1101123', 'Rohit', 9, 'A', 'Ranidevi Ganj', '1998-03-12', 'Abc', 2147483647, 'STU1101123', 'S170521101'),
('STU1101124', 'Rohit', 1, 'A', 'Abc', '1998-03-12', 'Abc', 2147483647, 'STU1101124', 'S170521101'),
('STU1101125', 'Rajendra Singh', 12, 'B', 'Ram Nagar, Fatehpur', '1998-03-12', 'Ramprashad Singh', 2147483647, 'STU1101125', 'S170521101'),
('STU1101126', 'Rajan Singh', 8, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101126', 'S170521101'),
('STU1101127', 'Rajan Singh', 5, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101127', 'S170521101'),
('STU1101128', 'Rajan Singh', 4, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101128', 'S170521101'),
('STU1101129', 'Rajan Singh', 2, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101129', 'S170521101'),
('STU1101130', 'Rajan Singh', 1, 'A', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101130', 'S170521101'),
('STU1101131', 'Rajan Singh', 9, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101131', 'S170521101'),
('STU1101132', 'Rajan Singh', 12, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101132', 'S170521101'),
('STU1101133', 'Rajan Singh', 7, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101133', 'S170521101'),
('STU1101134', 'Rajan Singh', 10, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101134', 'S170521101'),
('STU1101135', 'Rajan Singh', 11, 'B', 'Fatehpur', '1997-03-12', 'Seema', 2147483647, 'STU1101135', 'S170521101'),
('STU1101136', 'Ravij Singh', 2, 'B', 'Xyz', '2010-02-12', 'Abc', 2147483647, 'STU1101136', 'S170521101'),
('STU1101137', 'Ravij Singh', 3, 'B', 'Xyz', '2010-02-12', 'Abc', 2147483647, 'STU1101137', 'S170521101'),
('STU1101138', 'Rahul Singh', 12, 'A', 'Abc', '1996-12-12', 'Abc', 2147483647, 'STU1101138', 'S170521101'),
('STU1101139', 'Raghav Singh', 7, 'B', 'Devkhera Rajakhera', '1998-04-24', 'Sunil Singh', 2147483647, 'STU1101139', 'S170521101'),
('STU1101140', 'Bhasker', 2, 'B', 'Calicut', '1990-12-02', 'Ankit Singh', 123456789, 'STU1101140', 'S170521101'),
('STU1101141', 'Deepak Verma', 12, 'A', 'MBA Hostel, NIT Calicut, KOZHIKODE, KERALA 673601, India', '1990-02-13', 'Ramprashad Singh', 123456776, 'stu1101141', 'S170521101'),
('STU1101142', 'Ajay', 1, 'A', 'Chattisgarh', '1996-09-09', 'Sitaram', 123457890, 'stu1101142', 'S170521101'),
('STU1101143', 'Angelina', 1, 'A', 'Ranchi', '1996-09-09', 'Mr. Laura', 987654321, 'stu1101143', 'S170521101'),
('STU1101144', 'Basu', 1, 'A', 'Bihar', '1970-01-01', 'Satyanaray', 2147483647, 'stu1101144', 'S170521101'),
('STU1101145', 'Bhaskar', 1, 'A', 'Rajshtan', '1997-01-09', 'Ramprasad', 1234567890, 'stu1101145', 'S170521101'),
('STU1101146', 'Bharat Kumar', 1, 'A', 'Rajasthan', '1988-01-09', 'Gariban', 1234567890, 'stu1101146', 'S170521101'),
('STU1101147', 'Ajay', 1, 'A', 'Ranchi', '1997-09-09', 'Satyanaray', 1234567890, 'stu1101147', 'S170521101'),
('STU1101148', 'Angelina', 1, 'A', 'Ranchi', '1996-09-09', 'Mr. Prakash', 1234567890, 'stu1101148', 'S170521101'),
('STU1101149', 'Angelina', 2, 'B', 'Ranchi', '1997-09-09', 'Satyanaray', 1234567890, 'stu1101149', 'S170521101'),
('STU1101150', 'Basu', 3, 'B', 'Bihar', '1991-06-09', 'Gyanendra', 1234567890, 'stu1101150', 'S170521101'),
('STU1101151', 'Ankit', 2, 'A', 'Agra', '1997-08-09', 'Ramesh', 1234567890, 'stu1101151', 'S170521101'),
('STU1101152', 'Shivam', 2, 'A', 'Delhi', '1996-08-09', 'Ramu Chacha', 1234567890, 'stu1101152', 'S170521101'),
('STU1101153', 'Shikhar', 2, 'A', 'Andhra Pradesh', '1999-09-09', 'Mangaru', 1234567890, 'stu1101153', 'S170521101'),
('STU1101154', 'Rupesh', 2, 'A', 'Andhra Pradesh', '1999-09-09', 'Shankar', 1234567890, 'stu1101154', 'S170521101'),
('STU1101155', 'Mithun', 2, 'B', 'Jharkhand', '1947-08-09', 'Azad', 1234567890, 'stu1101155', 'S170521101'),
('STU1101156', 'Rohit', 3, 'A', 'Rajakhera', '1998-04-24', 'Manoj', 1234567899, 'stu1101156', 'S170521101'),
('STU1101157', 'Manoj', 3, 'A', 'Chennai', '1997-05-26', 'Ramu Chacha', 2147483647, 'stu1101157', 'S170521101'),
('STU1101158', 'Manish', 3, 'A', 'Bihar', '1996-08-27', 'Munnalal', 2147483647, 'stu1101158', 'S170521101'),
('STU1101159', 'Kanhaiya', 3, 'A', 'Bihar', '1995-07-25', 'Mansingh', 2147483647, 'stu1101159', 'S170521101'),
('STU1101160', 'Deepak', 3, 'B', 'Bihar', '1998-05-13', 'Maniram', 2147483647, 'stu1101160', 'S170521101'),
('STU1101161', 'Angelina', 3, 'B', 'Ranchi', '1995-09-25', 'Ramprashad Singh', 2147483647, 'stu1101161', 'S170521101'),
('STU1101162', 'Deepak', 3, 'B', 'Daviganj, Fetehpur, UP', '1998-04-15', 'Ramu Chacha', 2147483647, 'stu1101162', 'S170521101'),
('STU1101163', 'Basuki', 3, 'B', 'Chitransh Nagar, Fatehpur, UP', '1998-09-22', 'Rajesh Kumar', 2147483647, 'stu1101163', 'S170521101'),
('STU1101164', 'Raghvendra Singh', 3, 'B', 'Bihar', '1997-12-19', 'Om Prakash', 2147483647, 'stu1101164', 'S170521101'),
('STU1101165', 'Deepesh Gupta', 1, 'A', 'Radha Nagar Chauraha', '2015-03-13', 'Ramu Chacha', 123456789, 'stu1101165', 'S170521101'),
('STU1101166', 'Bhaskar', 1, 'A', 'Jharkhand', '2014-02-02', 'Seema  Gupta', 789456123, 'stu1101166', 'S170521101'),
('STU1101167', 'Ravij Singh', 1, 'A', 'Rama Devi, Kanpur', '2015-05-02', 'Rajesh Kumar', 2147483647, 'stu1101167', 'S170521101'),
('STU1101168', 'Deepak Chaudhary', 1, 'A', 'Fatehpur', '2016-05-03', 'Rajesh Chaudhary', 2147483647, 'stu1101168', 'S170521101'),
('STU1101169', 'Robin', 1, 'A', 'Delhi', '2014-05-03', 'Parmanand Singh', 2147483647, 'stu1101169', 'S170521101'),
('STU1101170', 'Harshit Gupta', 1, 'A', 'Delhi', '2015-05-02', 'Sunita Gupta', 2147483647, 'stu1101170', 'S170521101'),
('STU1101171', 'Ankit Gupta', 1, 'A', 'Gorakhpur', '2010-08-12', 'Sunita ', 2147483647, 'stu1101171', 'S170521101'),
('STU1101172', 'Deepesh Gupta', 1, 'A', 'Radha Nagar Chauraha', '1996-12-13', 'Buddhsen Gupta', 2147483647, 'stu1101172', 'S170521101'),
('STU1101173', 'Neeraj Sharma', 1, 'A', 'Ram Nagar, Fatehpur', '2014-06-13', 'Rajan Sharma', 2147483647, 'stu1101173', 'S170521101'),
('STU1101174', 'Shikha Sharoop', 2, 'A', 'Devi Ganj, Fatehpur', '2016-06-05', 'Reeta Sharoop', 2147483647, 'stu1101174', 'S170521101'),
('STU1101175', 'Harikant Gupta', 2, 'A', 'Fatehpur', '2016-06-16', 'Pushpa Gupta', 2147483647, 'stu1101175', 'S170521101'),
('STU1101176', 'Deepshikha', 2, 'A', 'Kanpur', '2016-01-01', 'Sitaram', 2147483647, 'stu1101176', 'S170521101'),
('STU1101177', 'Shivam Gupt', 2, 'A', 'Delhi', '2015-06-05', 'Buddhsen Gupta', 2147483647, 'stu1101177', 'S170521101'),
('STU1101178', 'Anurag Singh', 2, 'A', 'Juniha Chauraha', '2015-08-05', 'Vikash Singh', 2147483647, 'stu1101178', 'S170521101'),
('STU1101179', 'Ankita Verma', 2, 'B', 'Gorakhpur', '2015-02-04', 'Sunil Verma', 2147483647, 'stu1101179', 'S170521101'),
('STU1101180', 'Prachi Singh', 2, 'B', 'Allahabad', '2016-06-05', 'Reena Singh', 2147483647, 'stu1101180', 'S170521101'),
('STU1101181', 'Deepesh Gupta', 2, 'B', 'Radha Nagar Chauraha', '2014-02-13', 'Ramchandra', 2147483647, 'stu1101181', 'S170521101'),
('STU1101182', 'Angelina', 2, 'B', 'Rachi', '2014-01-31', 'Seema', 2147483647, 'stu1101182', 'S170521101'),
('STU1101183', 'Madhurima', 2, 'B', 'Kanpur', '2014-06-05', 'Rakesh Sharma', 1234567890, 'stu1101183', 'S170521101'),
('STU1101184', 'Rajendra Singh', 12, 'A', 'Fatehpur', '1998-05-12', 'Sarita Singh', 2147483647, 'stu1101184', 'S170521101'),
('STU1101185', 'Prashant Agrawal', 12, 'A', 'Chawk, Fatehpur', '1999-06-15', 'Rajendra Agrawal', 1234567890, 'stu1101185', 'S170521101'),
('STU1101186', 'Ravi Singh', 12, 'A', 'Ram Colony, Fatehpur', '1999-08-05', 'Sarita Singh', 2147483647, 'stu1101186', 'S170521101'),
('STU1101187', 'Vijay Mishra', 12, 'A', 'Rivakheda, Varanasi', '1997-08-12', 'Ramprasad', 2147483647, 'stu1101187', 'S170521101'),
('STU1101188', 'Amarish Mishra', 12, 'A', 'Allahabad', '1997-04-15', 'Ramchandra', 2147483647, 'stu1101188', 'S170521101'),
('STU1101189', 'Reeta Agrawal', 12, 'A', 'Fatehpur', '1995-04-04', 'Rakesh Agrawal', 2147483647, 'stu1101189', 'S170521101'),
('STU1101190', 'Shikha Singh', 12, 'B', 'Kanpur', '1996-05-04', 'Reena Singh', 2147483647, 'stu1101190', 'S170521101'),
('STU1101191', 'Anunay Srivastava', 12, 'B', 'Rama Devi, Kanpur', '1995-09-08', 'Ramdash Srivastava', 2147483647, 'stu1101191', 'S170521101'),
('STU1101192', 'Abhishek Singh', 12, 'B', 'Ram Colony, Fatehpur', '1997-09-07', 'Seema Singh', 2147483647, 'stu1101192', 'S170521101'),
('STU1101193', 'Rishab Garg', 12, 'B', 'Kanpur', '1996-09-07', 'Rajendra Garg', 2147483647, 'stu1101193', 'S170521101'),
('STU1101194', 'Shuyash Singh', 12, 'B', 'Bakarganj, Fatehpur', '1998-06-05', 'Suresh Singh', 2147483647, 'stu1101194', 'S170521101'),
('STU1101195', 'Shivank Gupta', 12, 'B', 'Radha Nagar Chauraha', '1998-05-23', 'Rajesh Kumar', 2147483647, 'stu1101195', 'S170521101'),
('STU1101196', 'Deepu Kumar', 12, 'B', 'Fatehpur', '1995-03-21', 'Manju Gupta', 2147483647, 'stu1101196', 'S170521101'),
('STU1101197', 'Sweety Agrahari', 12, 'B', 'Allahabad', '1990-02-14', 'Manju Gupta', 2147483647, 'stu1101197', 'S170521101'),
('STU1101198', 'Deepak', 12, 'A', 'MBA Hostel, NIT Calicut, KOZHIKODE, KERALA 673601, India', '1990-05-04', 'Satyanaray', 2147483647, 'stu1101198', 'S170521101'),
('STU1102111', 'Sumit Singh', 12, 'B', 'MBA Hostel, NIT Calicut, KOZHIKODE, KERALA 673601, India', '1995-03-13', 'Ramprashad Singh', 2147483647, 'stu1102111', 'S170521102');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tea_regno` varchar(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tea_regno`, `name`, `contact`, `dob`, `address`, `password`, `regno`) VALUES
('TEA1101111', 'Manish Verma', 1234567890, '1989-03-02', 'Devi Ganj, Fatehpur', 'TEA1101111', 'S170521101'),
('TEA1101112', 'Rajaan Singh', 2147483647, '1990-12-18', 'Ram Nagar, Fatehpur, Up', 'TEA1101112', 'S170521101'),
('TEA1101113', 'Rajaan Singh', 2147483647, '1990-12-18', 'Ram Nagar, Fatehpur, Up', 'TEA1101113', 'S170521101'),
('TEA1101114', 'Rahit Verma', 1234567890, '1990-05-12', 'Abc', 'TEA1101114', 'S170521101');

-- --------------------------------------------------------

--
-- Table structure for table `teacher1`
--

CREATE TABLE `teacher1` (
  `tea_regno` varchar(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `regno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher1`
--

INSERT INTO `teacher1` (`tea_regno`, `name`, `contact`, `dob`, `address`, `doj`, `dot`, `password`, `regno`) VALUES
('TEA1101111', 'Manish Verma', 2147483647, '1990-02-13', 'Devi Ganj, Fatehpur', '2001-05-02', '0000-00-00', 'deepesh', 'S170521101'),
('TEA1101112', 'Rajeev Singh', 2147483647, '1985-12-14', 'Ram Nagar, Fatehpur, Up', '2010-06-22', '1970-01-01', 'tea1101112', 'S170521101'),
('TEA1101113', 'Raeshma Roy', 2147483647, '1984-03-12', 'Kanpur', '2010-10-20', '1970-01-01', 'tea1101113', 'S170521101'),
('TEA1101114', 'Sunita Singh', 2147483647, '1970-01-01', 'Fatehpur', '2001-05-02', '1970-01-01', 'tea1101114', 'S170521101'),
('TEA1101115', 'Rajeev Mishra', 2147483647, '1970-01-01', 'Kanpur', '2006-05-22', '1970-01-01', 'tea1101115', 'S170521101'),
('TEA1101116', 'Manish Srivastava', 2147483647, '1970-01-01', 'Fatehpur', '2010-01-02', '1970-01-01', 'tea1101116', 'S170521101'),
('TEA1101117', 'Shashi Gupta', 2147483647, '1991-08-08', 'Fatehpur', '2005-02-15', '1970-01-01', 'tea1101117', 'S170521101'),
('TEA1101118', 'Anuj srivastava', 789456123, '1990-04-04', 'jaipur', '2008-02-05', '1970-01-01', 'tea1101118', 'S170521101'),
('TEA1101119', 'Sanjeev Kumar', 2147483647, '1970-01-01', 'Kanpur', '2009-10-18', '0000-00-00', 'tea1101119', 'S170521101'),
('TEA1101120', 'Sangeeta Mishra', 2147483647, '1980-05-15', 'Fatehpur', '2011-05-25', '0000-00-00', 'tea1101120', 'S170521101'),
('TEA1102111', 'Ankit Singh', 2147483647, '1980-05-16', 'IH-GIRLS HOSTEL, MNNIT ALLAHABAD, MNNIT ALLAHABAD', '2010-10-20', '1970-01-01', 'tea1102111', 'S170521102');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `tea_regno` varchar(10) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `sec` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`tea_regno`, `subject`, `class`, `sec`) VALUES
('TEA1101111', 'Java', '12', 'A'),
('TEA1101111', 'BlueJ', '10', 'B'),
('TEA1101111', 'DBMS', '11', 'A'),
('TEA1101111', 'G.K', '9', 'D'),
('TEA1101113', 'English', '3', 'A'),
('TEA1101113', 'English', '3', 'B'),
('TEA1101113', 'English', '1', 'A'),
('TEA1101113', 'English', '2', 'A'),
('TEA1101113', 'English', '2', 'B'),
('TEA1101114', 'Hindi', '1', 'A'),
('TEA1101114', 'Hindi', '2', 'A'),
('TEA1101114', 'Hindi', '2', 'B'),
('TEA1101114', 'Hindi', '3', 'A'),
('TEA1101114', 'Hindi', '3', 'B'),
('TEA1101115', 'Maths', '12', 'A'),
('TEA1101115', 'Maths', '12', 'B'),
('TEA1101115', 'Maths', '3', 'A'),
('TEA1101115', 'Maths', '3', 'B'),
('TEA1101116', 'Java', '12', 'A'),
('TEA1101116', 'Java', '12', 'B'),
('TEA1101116', 'Java', '11', 'A'),
('TEA1101116', 'Java', '11', 'B'),
('TEA1101117', 'E.V.S', '3', 'A'),
('TEA1101117', 'E.V.S', '3', 'B'),
('TEA1101117', 'E.V.S', '4', 'A'),
('TEA1101117', 'E.V.S', '4', 'B'),
('TEA1101118', 'Economics', '10', 'A'),
('TEA1101118', 'Economics', '11', 'A'),
('TEA1101118', 'Economics', '11', 'B'),
('TEA1101118', 'Economics', '12', 'A'),
('TEA1101118', 'Economics', '12', 'B'),
('TEA1101119', 'Maths', '1', 'A'),
('TEA1101119', 'Maths', '2', 'A'),
('TEA1101119', 'Maths', '2', 'B'),
('TEA1101120', 'G.K', '1', 'A'),
('TEA1101120', 'G.K', '2', 'A'),
('TEA1101120', 'G.K', '2', 'B'),
('TEA1101112', 'G.K', '10', 'A'),
('TEA1102111', 'DBMS', '12', 'B'),
('TEA1102111', 'Chemistry', '12', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD KEY `tea_regno` (`tea_regno`),
  ADD KEY `stu_regno` (`stu_regno`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_regno`),
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tea_regno`),
  ADD UNIQUE KEY `tea_regno` (`tea_regno`),
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `teacher1`
--
ALTER TABLE `teacher1`
  ADD PRIMARY KEY (`tea_regno`),
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD KEY `tea_regno` (`tea_regno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`tea_regno`) REFERENCES `teacher1` (`tea_regno`),
  ADD CONSTRAINT `academic_ibfk_2` FOREIGN KEY (`stu_regno`) REFERENCES `student` (`stu_regno`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `school` (`regno`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `school` (`regno`);

--
-- Constraints for table `teacher1`
--
ALTER TABLE `teacher1`
  ADD CONSTRAINT `teacher1_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `school` (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

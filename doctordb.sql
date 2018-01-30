-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 12:28 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctordb`
--
CREATE DATABASE IF NOT EXISTS `doctordb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `doctordb`;

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE IF NOT EXISTS `patientinfo` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Test_to_be_done` varchar(100) NOT NULL,
  `Specimen` varchar(100) NOT NULL,
  `Period` varchar(100) NOT NULL,
  `Lab` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`id`, `Test_to_be_done`, `Specimen`, `Period`, `Lab`) VALUES
(7, 'APOE Genotyping, Alzheimer Disease', 'blood', '24-Hour', 'lab A');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE IF NOT EXISTS `patientregistration` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `Mname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `Insurance` varchar(100) NOT NULL,
  `diagnosis` varchar(1000) NOT NULL,
  `visitType` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`fname`, `lname`, `Mname`, `email`, `MobileNo`, `Insurance`, `diagnosis`, `visitType`, `Date`) VALUES
('cherono', 'mercy', 'kitur', 'chero@gmail.com', 726607815, 'HMO', '		Symptoms\r\n               #fever,nausea,diarrhoea		', 'inpatient', '0000-00-00'),
('joseph', 'bett', 'kiplangat', 'kip@gmail.com', 710309870, 'EPOs', '		headache\r\n			', 'inpatient', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `password`, `full_name`) VALUES
(2, 'nono@gmail.com', 'Nono12', 'chero mercy'),
(10, 'chero@gmail.com ', '123', 'MERCY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

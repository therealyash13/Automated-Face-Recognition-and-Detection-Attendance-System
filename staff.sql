-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2020 at 07:54 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `staffid` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `bgroup` varchar(250) NOT NULL,
  `desg` varchar(250) NOT NULL,
  `depart` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`staffid`, `name`, `gender`, `bgroup`, `desg`, `depart`, `subject`, `email`, `pnumber`, `address`, `status`) VALUES
('112365', 'sundar', 'male', 'ab', 'Staff', 'Computer ', 'sample', 'sundarv06@gmail.com', '7904461600', '24/d, fathima street, puthur, trichy-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffatten`
--

CREATE TABLE `staffatten` (
  `id` int(11) NOT NULL auto_increment,
  `sid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `itime` time NOT NULL,
  `otime` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staffatten`
--

INSERT INTO `staffatten` (`id`, `sid`, `name`, `date`, `itime`, `otime`) VALUES
(5, '112365', 'sundar', '2020-06-16', '13:46:32', '11:29:41'),
(6, '112365', 'sundar', '2020-06-17', '11:04:08', '11:29:41');

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 03:16 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aigsonlinedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `first_attendance`
--

CREATE TABLE IF NOT EXISTS `first_attendance` (
  `username` varchar(32) NOT NULL,
  `additional_total` int(10) NOT NULL,
  `additional_attended` int(10) NOT NULL,
  `additional_percentage` int(10) NOT NULL,
  `english_total` int(10) NOT NULL,
  `english_attended` int(10) NOT NULL,
  `english_percentage` int(10) NOT NULL,
  `c_total` int(10) NOT NULL,
  `c_attended` int(10) NOT NULL,
  `c_percentage` int(10) NOT NULL,
  `de_total` int(10) NOT NULL,
  `de_attended` int(10) NOT NULL,
  `de_percentage` int(10) NOT NULL,
  `dm_total` int(10) NOT NULL,
  `dm_attended` int(10) NOT NULL,
  `dm_percentage` int(10) NOT NULL,
  `cf_total` int(10) NOT NULL,
  `cf_attended` int(10) NOT NULL,
  `cf_percentage` int(10) NOT NULL,
  `total_percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_attendance`
--

INSERT INTO `first_attendance` (`username`, `additional_total`, `additional_attended`, `additional_percentage`, `english_total`, `english_attended`, `english_percentage`, `c_total`, `c_attended`, `c_percentage`, `de_total`, `de_attended`, `de_percentage`, `dm_total`, `dm_attended`, `dm_percentage`, `cf_total`, `cf_attended`, `cf_percentage`, `total_percentage`) VALUES
('13PUSB6009', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6),
('12PUSB6008', 11, 22, 33, 44, 55, 66, 77, 88, 99, 12, 23, 45, 67, 78, 89, 98, 87, 65, 100),
('13PUSB6009', 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77, 99, 88, 100),
('13PUSB6009', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 99),
('5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('5445', 54, 44, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('54654', 545, 545, 45, 44, 445, 55, 88, 89, 54, 45, 25, 45, 45, 56, 45, 45, 45, 45, 0),
('222', 223, 245, 45, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('11', 11, 1, 11, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 11, 1, 1, 1, 1, 0),
('3', 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 3, 3),
('', 222, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 333, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('13PUSB6008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('reshad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('13PUSB6009', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6),
('12PUSB6008', 11, 22, 33, 44, 55, 66, 77, 88, 99, 12, 23, 45, 67, 78, 89, 98, 87, 65, 100),
('13PUSB6009', 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77, 99, 88, 100),
('13PUSB6009', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 99),
('5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('5445', 54, 44, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('54654', 545, 545, 45, 44, 445, 55, 88, 89, 54, 45, 25, 45, 45, 56, 45, 45, 45, 45, 0),
('222', 223, 245, 45, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('11', 11, 1, 11, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 11, 1, 1, 1, 1, 0),
('3', 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 3, 3),
('', 222, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('', 333, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('13PUSB6008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('reshad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `first_result`
--

CREATE TABLE IF NOT EXISTS `first_result` (
  `username` varchar(32) NOT NULL,
  `semester` int(11) NOT NULL,
  `internals` int(11) NOT NULL,
  `additional_max` int(10) NOT NULL,
  `additional_min` int(10) NOT NULL,
  `additional_obtained` int(10) NOT NULL,
  `english_max` int(10) NOT NULL,
  `english_min` int(10) NOT NULL,
  `english_obtained` int(10) NOT NULL,
  `c_max` int(10) NOT NULL,
  `c_min` int(10) NOT NULL,
  `c_obtained` int(10) NOT NULL,
  `de_max` int(10) NOT NULL,
  `de_min` int(10) NOT NULL,
  `de_obtained` int(10) NOT NULL,
  `dm_max` int(10) NOT NULL,
  `dm_min` int(10) NOT NULL,
  `dm_obtained` int(10) NOT NULL,
  `cf_max` int(10) NOT NULL,
  `cf_min` int(10) NOT NULL,
  `cf_obtained` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_result`
--

INSERT INTO `first_result` (`username`, `semester`, `internals`, `additional_max`, `additional_min`, `additional_obtained`, `english_max`, `english_min`, `english_obtained`, `c_max`, `c_min`, `c_obtained`, `de_max`, `de_min`, `de_obtained`, `dm_max`, `dm_min`, `dm_obtained`, `cf_max`, `cf_min`, `cf_obtained`) VALUES
('12PUSB6008', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('12PUSB6008', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `five_attendance`
--

CREATE TABLE IF NOT EXISTS `five_attendance` (
  `username` varchar(32) NOT NULL,
  `java_total` int(32) NOT NULL,
  `java_attended` int(32) NOT NULL,
  `java_percentage` int(32) NOT NULL,
  `sspd_total` int(32) NOT NULL,
  `sspd_attended` int(32) NOT NULL,
  `sspd_percentage` int(32) NOT NULL,
  `se_total` int(32) NOT NULL,
  `se_attended` int(32) NOT NULL,
  `se_percentage` int(32) NOT NULL,
  `ca_total` int(32) NOT NULL,
  `ca_attended` int(32) NOT NULL,
  `ca_percentage` int(32) NOT NULL,
  `bi_total` int(32) NOT NULL,
  `bi_attended` int(32) NOT NULL,
  `bi_percentage` int(32) NOT NULL,
  `total_percentage` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `five_attendance`
--

INSERT INTO `five_attendance` (`username`, `java_total`, `java_attended`, `java_percentage`, `sspd_total`, `sspd_attended`, `sspd_percentage`, `se_total`, `se_attended`, `se_percentage`, `ca_total`, `ca_attended`, `ca_percentage`, `bi_total`, `bi_attended`, `bi_percentage`, `total_percentage`) VALUES
('', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 11),
('12PUSB6008', 55, 55, 55, 66, 66, 66, 66, 66, 6, 6, 66, 56, 6, 55, 41, 65),
('5', 55, 55, 55, 55, 5, 55, 55, 5, 5, 5, 55, 5, 5, 5, 5, 5),
('7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 77),
('8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 88),
('9', 9, 9, 9, 9, 99, 9, 9, 9, 0, 9, 99, 9, 9, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `five_result`
--

CREATE TABLE IF NOT EXISTS `five_result` (
  `username` varchar(32) NOT NULL,
  `semester` int(11) NOT NULL,
  `internals` int(11) NOT NULL,
  `java_max` int(32) NOT NULL,
  `java_min` int(32) NOT NULL,
  `java_obtained` int(32) NOT NULL,
  `sspd_max` int(32) NOT NULL,
  `sspd_min` int(32) NOT NULL,
  `sspd_obtained` int(32) NOT NULL,
  `se_max` int(32) NOT NULL,
  `se_min` int(32) NOT NULL,
  `se_obtained` int(32) NOT NULL,
  `ca_max` int(32) NOT NULL,
  `ca_min` int(32) NOT NULL,
  `ca_obtained` int(32) NOT NULL,
  `bi_max` int(32) NOT NULL,
  `bi_min` int(32) NOT NULL,
  `bi_obtained` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `five_result`
--

INSERT INTO `five_result` (`username`, `semester`, `internals`, `java_max`, `java_min`, `java_obtained`, `sspd_max`, `sspd_min`, `sspd_obtained`, `se_max`, `se_min`, `se_obtained`, `ca_max`, `ca_min`, `ca_obtained`, `bi_max`, `bi_min`, `bi_obtained`) VALUES
('13PUSB6008', 5, 1, 5, 5, 5, 5, 5, 55, 5, 5, 5, 55, 5, 5, 5, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `fourth_attendance`
--

CREATE TABLE IF NOT EXISTS `fourth_attendance` (
  `username` varchar(32) NOT NULL,
  `additional_total` int(11) NOT NULL,
  `additional_attended` int(11) NOT NULL,
  `additional_percentage` int(11) NOT NULL,
  `english_total` int(11) NOT NULL,
  `english_attended` int(11) NOT NULL,
  `english_percentage` int(11) NOT NULL,
  `vp_total` int(11) NOT NULL,
  `vp_attended` int(11) NOT NULL,
  `vp_percentage` int(11) NOT NULL,
  `unix_total` int(11) NOT NULL,
  `unix_attended` int(11) NOT NULL,
  `unix_percentage` int(11) NOT NULL,
  `or_total` int(11) NOT NULL,
  `or_attended` int(11) NOT NULL,
  `or_percentage` int(11) NOT NULL,
  `total_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fourth_attendance`
--

INSERT INTO `fourth_attendance` (`username`, `additional_total`, `additional_attended`, `additional_percentage`, `english_total`, `english_attended`, `english_percentage`, `vp_total`, `vp_attended`, `vp_percentage`, `unix_total`, `unix_attended`, `unix_percentage`, `or_total`, `or_attended`, `or_percentage`, `total_percentage`) VALUES
('12PUSB6008', 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77),
('8', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 888);

-- --------------------------------------------------------

--
-- Table structure for table `fourth_result`
--

CREATE TABLE IF NOT EXISTS `fourth_result` (
  `username` varchar(32) NOT NULL,
  `semester` int(11) NOT NULL,
  `internals` int(11) NOT NULL,
  `additional_max` int(11) NOT NULL,
  `additional_min` int(11) NOT NULL,
  `additional_obtained` int(11) NOT NULL,
  `english_max` int(11) NOT NULL,
  `english_min` int(11) NOT NULL,
  `english_obtained` int(11) NOT NULL,
  `vp_max` int(11) NOT NULL,
  `vp_min` int(11) NOT NULL,
  `vp_obtained` int(11) NOT NULL,
  `unix_max` int(11) NOT NULL,
  `unix_min` int(11) NOT NULL,
  `unix_obtained` int(11) NOT NULL,
  `or_max` int(11) NOT NULL,
  `or_min` int(11) NOT NULL,
  `or_obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fourth_result`
--

INSERT INTO `fourth_result` (`username`, `semester`, `internals`, `additional_max`, `additional_min`, `additional_obtained`, `english_max`, `english_min`, `english_obtained`, `vp_max`, `vp_min`, `vp_obtained`, `unix_max`, `unix_min`, `unix_obtained`, `or_max`, `or_min`, `or_obtained`) VALUES
('12', 4, 2, 9, 9, 9, 9, 9, 9, 99, 9, 9, 9, 9, 9, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `second_attendance`
--

CREATE TABLE IF NOT EXISTS `second_attendance` (
  `username` varchar(32) NOT NULL,
  `additional_total` int(10) NOT NULL,
  `additional_attended` int(10) NOT NULL,
  `additional_percentage` int(10) NOT NULL,
  `english_total` int(10) NOT NULL,
  `english_attended` int(10) NOT NULL,
  `english_percentage` int(10) NOT NULL,
  `ds_total` int(10) NOT NULL,
  `ds_attended` int(10) NOT NULL,
  `ds_percentage` int(10) NOT NULL,
  `dbms_total` int(10) NOT NULL,
  `dbms_attended` int(10) NOT NULL,
  `dbms_percentage` int(10) NOT NULL,
  `nsm_total` int(10) NOT NULL,
  `nsm_attended` int(10) NOT NULL,
  `nsm_percentage` int(10) NOT NULL,
  `total_percentage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_attendance`
--

INSERT INTO `second_attendance` (`username`, `additional_total`, `additional_attended`, `additional_percentage`, `english_total`, `english_attended`, `english_percentage`, `ds_total`, `ds_attended`, `ds_percentage`, `dbms_total`, `dbms_attended`, `dbms_percentage`, `nsm_total`, `nsm_attended`, `nsm_percentage`, `total_percentage`) VALUES
('12PUSB6008', 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77),
('2', 2, 2, 2, 2, 2, 2, 22, 2, 2, 2, 2, 2, 22, 2, 22, 222);

-- --------------------------------------------------------

--
-- Table structure for table `second_result`
--

CREATE TABLE IF NOT EXISTS `second_result` (
  `username` varchar(32) NOT NULL,
  `semester` int(11) NOT NULL,
  `internals` int(11) NOT NULL,
  `additional_max` int(10) NOT NULL,
  `additional_min` int(10) NOT NULL,
  `additional_obtained` int(10) NOT NULL,
  `english_max` int(10) NOT NULL,
  `english_min` int(10) NOT NULL,
  `english_obtained` int(10) NOT NULL,
  `ds_max` int(10) NOT NULL,
  `ds_min` int(10) NOT NULL,
  `ds_obtained` int(10) NOT NULL,
  `dbms_max` int(10) NOT NULL,
  `dbms_min` int(10) NOT NULL,
  `dbms_obtained` int(10) NOT NULL,
  `nsm_max` int(10) NOT NULL,
  `nsm_min` int(10) NOT NULL,
  `nsm_obtained` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_result`
--

INSERT INTO `second_result` (`username`, `semester`, `internals`, `additional_max`, `additional_min`, `additional_obtained`, `english_max`, `english_min`, `english_obtained`, `ds_max`, `ds_min`, `ds_obtained`, `dbms_max`, `dbms_min`, `dbms_obtained`, `nsm_max`, `nsm_min`, `nsm_obtained`) VALUES
('13PUSB6009', 2, 2, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('13PUSB6008', 2, 3, 9, 0, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `six_attendance`
--

CREATE TABLE IF NOT EXISTS `six_attendance` (
  `username` varchar(32) NOT NULL,
  `ada_total` int(32) NOT NULL,
  `ada_attended` int(32) NOT NULL,
  `ada_percentage` int(32) NOT NULL,
  `wp_total` int(32) NOT NULL,
  `wp_attended` int(32) NOT NULL,
  `wp_percentage` int(32) NOT NULL,
  `sp_total` int(32) NOT NULL,
  `sp_attended` int(32) NOT NULL,
  `sp_percentage` int(32) NOT NULL,
  `cg_total` int(32) NOT NULL,
  `cg_attended` int(32) NOT NULL,
  `cg_percentage` int(32) NOT NULL,
  `total_percentage` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `six_attendance`
--

INSERT INTO `six_attendance` (`username`, `ada_total`, `ada_attended`, `ada_percentage`, `wp_total`, `wp_attended`, `wp_percentage`, `sp_total`, `sp_attended`, `sp_percentage`, `cg_total`, `cg_attended`, `cg_percentage`, `total_percentage`) VALUES
('13PUSB6009', 52, 42, 80, 50, 40, 85, 45, 36, 75, 50, 40, 80, 75),
('6', 6, 6, 6, 66, 6, 6, 66, 6, 0, 66, 6, 6, 6),
('7', 7, 0, 77, 7, 77, 7, 77, 7, 7, 77, 7, 77, 7);

-- --------------------------------------------------------

--
-- Table structure for table `six_result`
--

CREATE TABLE IF NOT EXISTS `six_result` (
  `username` varchar(32) NOT NULL,
  `semester` int(11) NOT NULL,
  `internals` int(11) NOT NULL,
  `ada_max` int(32) NOT NULL,
  `ada_min` int(32) NOT NULL,
  `ada_obtained` int(32) NOT NULL,
  `wp_max` int(32) NOT NULL,
  `wp_min` int(32) NOT NULL,
  `wp_obtained` int(32) NOT NULL,
  `sp_max` int(32) NOT NULL,
  `sp_min` int(32) NOT NULL,
  `sp_obtained` int(32) NOT NULL,
  `cg_max` int(32) NOT NULL,
  `cg_min` int(32) NOT NULL,
  `cg_obtained` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `six_result`
--

INSERT INTO `six_result` (`username`, `semester`, `internals`, `ada_max`, `ada_min`, `ada_obtained`, `wp_max`, `wp_min`, `wp_obtained`, `sp_max`, `sp_min`, `sp_obtained`, `cg_max`, `cg_min`, `cg_obtained`) VALUES
('13PUSB6008', 6, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `third_attendance`
--

CREATE TABLE IF NOT EXISTS `third_attendance` (
  `username` varchar(32) NOT NULL,
  `additional_total` int(10) NOT NULL,
  `additional_attended` int(10) NOT NULL,
  `additional_percentage` int(10) NOT NULL,
  `english_total` int(11) NOT NULL,
  `english_attended` int(11) NOT NULL,
  `english_percentage` int(11) NOT NULL,
  `cplusplus_total` int(11) NOT NULL,
  `cplusplus_attended` int(11) NOT NULL,
  `cplusplus_percentage` int(11) NOT NULL,
  `fam_total` int(11) NOT NULL,
  `fam_attended` int(11) NOT NULL,
  `fam_percentage` int(11) NOT NULL,
  `op_total` int(11) NOT NULL,
  `op_attended` int(11) NOT NULL,
  `op_percentage` int(11) NOT NULL,
  `total_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_attendance`
--

INSERT INTO `third_attendance` (`username`, `additional_total`, `additional_attended`, `additional_percentage`, `english_total`, `english_attended`, `english_percentage`, `cplusplus_total`, `cplusplus_attended`, `cplusplus_percentage`, `fam_total`, `fam_attended`, `fam_percentage`, `op_total`, `op_attended`, `op_percentage`, `total_percentage`) VALUES
('13PUSB6009', 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77),
('3', 3, 3, 3, 3, 33, 3, 3, 33, 3, 33, 3, 3, 3, 33, 3, 33);

-- --------------------------------------------------------

--
-- Table structure for table `third_result`
--

CREATE TABLE IF NOT EXISTS `third_result` (
  `username` varchar(32) NOT NULL,
  `semester` int(11) NOT NULL,
  `internals` int(11) NOT NULL,
  `additional_max` int(10) NOT NULL,
  `additional_min` int(10) NOT NULL,
  `additional_obtained` int(10) NOT NULL,
  `english_max` int(11) NOT NULL,
  `english_min` int(11) NOT NULL,
  `english_obtained` int(11) NOT NULL,
  `cplusplus_max` int(11) NOT NULL,
  `cplusplus_min` int(11) NOT NULL,
  `cplusplus_obtained` int(11) NOT NULL,
  `fam_max` int(11) NOT NULL,
  `fam_min` int(11) NOT NULL,
  `fam_obtained` int(11) NOT NULL,
  `op_max` int(11) NOT NULL,
  `op_min` int(11) NOT NULL,
  `op_obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_result`
--

INSERT INTO `third_result` (`username`, `semester`, `internals`, `additional_max`, `additional_min`, `additional_obtained`, `english_max`, `english_min`, `english_obtained`, `cplusplus_max`, `cplusplus_min`, `cplusplus_obtained`, `fam_max`, `fam_min`, `fam_obtained`, `op_max`, `op_min`, `op_obtained`) VALUES
('13PUSB6008', 3, 2, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `course` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `contact` int(20) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `course`, `semester`, `email`, `contact`, `email_code`, `active`, `type`) VALUES
(1, 'zazaicr7\r\n', 'zazaicr7', 'Reshad', 'Zazai', 'BCA', 5, 'a@g.com', 236598745, '', 1, 0),
(2, '', '094638268ea83f2509f7153305d2136c', 'Ahmad', 'Kumar', 'BCA', 8, 'ar@you.com', 22, '2c04d882d0b31fc9a8232051215669e9', 1, 0),
(3, '', '36eebaec36489649219023ab7fb5ab5a', 'bibek', 'kumar', '', 0, 'kumar.bee014@gmail.com', 0, '631cae323f105397d3fd021cc1a7d5dc', 1, 0),
(4, '', 'e99a18c428cb38d5f260853678922e03', 'jhon', 'khan', '', 0, 'jhon@gmail.com', 0, '6f10157a15f28ddc882cf4c90fc7a2fd', 1, 0),
(5, 'bibek017', 'c96b53bc4ab14a8323736feeb82d8c54', 'bibek', 'bibek', '', 0, 'kumar.bee014@gmail.com', 0, '74798c3c8efaee030b063859d0763731', 1, 0),
(6, '', 'sameer', 'sameer', 'sameer', '', 0, 'sameer@gmail.com', 0, 'e48162d2a115b62fbf708e5ebb573ca4', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `five_attendance`
--
ALTER TABLE `five_attendance`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `second_attendance`
--
ALTER TABLE `second_attendance`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `six_attendance`
--
ALTER TABLE `six_attendance`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `third_attendance`
--
ALTER TABLE `third_attendance`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

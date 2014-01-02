-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2014 at 10:54 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lithium`
--

-- --------------------------------------------------------

--
-- Table structure for table `props`
--

CREATE TABLE IF NOT EXISTS `props` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_datetimeGMT` varchar(255) NOT NULL,
  `gamenumber` varchar(255) NOT NULL,
  `sporttype` varchar(255) NOT NULL,
  `league` varchar(255) NOT NULL,
  `isLive` varchar(255) NOT NULL,
  `team1` varchar(255) NOT NULL,
  `team1_visiting_home_draw` varchar(255) NOT NULL,
  `team2` varchar(255) NOT NULL,
  `team2_visiting_home_draw` varchar(255) NOT NULL,
  `moneyline_visiting` varchar(255) NOT NULL,
  `moneyline_home` varchar(255) NOT NULL,
  `spread_visiting` varchar(255) NOT NULL,
  `spread_adjust_visiting` varchar(255) NOT NULL,
  `spread_home` varchar(255) NOT NULL,
  `spread_adjust_home` varchar(255) NOT NULL,
  `total_points` varchar(255) NOT NULL,
  `over_adjust` varchar(255) NOT NULL,
  `under_adjust` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 04:41 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todonote`
--

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idea` text NOT NULL,
  `label_id` int(11) NOT NULL,
  `starting` int(11) NOT NULL,
  `stardate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_label` (`label_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `idea`, `label_id`, `starting`, `stardate`, `enddate`) VALUES
(2, 'asd', 1, 0, NULL, NULL),
(3, '', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE IF NOT EXISTS `label` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id`, `name`, `level`) VALUES
(1, 'PENTING', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `passwrod` varchar(255) NOT NULL,
  `name` varchar(70) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `widt`
--

CREATE TABLE IF NOT EXISTS `widt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wid` text NOT NULL,
  `proses` int(2) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `widt`
--

INSERT INTO `widt` (`id`, `wid`, `proses`, `date`) VALUES
(1, 'Buat what i do today ', 0, '2016-06-24 00:26:26'),
(2, 'daftar pack students github untuk mengharapkan mendapat tas gratis dan dapat kejutan bisa makai full unlimited repositories private dari github selama 2 tahun', 0, '2016-06-24 18:40:46'),
(3, 'dapat sarang paper yang link nya ada di keep google', 0, '2016-06-26 00:20:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `idea`
--
ALTER TABLE `idea`
  ADD CONSTRAINT `fk_label` FOREIGN KEY (`label_id`) REFERENCES `label` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

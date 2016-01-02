-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 02:24 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_atomic_project_suraiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birthdays`
--

CREATE TABLE IF NOT EXISTS `tbl_birthdays` (
  `serial_no` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_birthdays`
--

INSERT INTO `tbl_birthdays` (`serial_no`, `id`, `user_name`, `birth_date`) VALUES
(1, 1, 'Linkon Miyan', '1993-08-17'),
(0, 13, 'Linkon Miyan', '0000-00-00'),
(0, 19, 'Linkon Miyan', '0000-00-00'),
(0, 20, 'Linkon Miyan', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE IF NOT EXISTS `tbl_books` (
  `serial_no` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`serial_no`, `id`, `book_title`, `author`) VALUES
(1, 1, 'The Clean Code', 'Robert C. Martin'),
(0, 11, 'How to learn Java', 'Asa'),
(0, 12, 'How learn HTML', 'Aysha'),
(0, 23, 'Learning the C++', 'Bappi Ashrafi'),
(0, 25, 'How learn HTML', 'Asa'),
(0, 26, 'How learn HTML', 'Asa'),
(0, 27, 'How to learn Wordpress', 'Asa'),
(0, 28, 'How to learn Wordpress', 'Asa'),
(0, 29, 'How to learn Wordpress', 'Asa'),
(0, 30, 'How to learn Wordpress', 'Asa'),
(0, 31, 'How learn HTML', 'ddd'),
(0, 32, 'How to learn Java', 'Bappi Ashrafi'),
(0, 33, 'How learn HTML', 'Bappi Ashrafi'),
(0, 34, 'How learn HTML', 'Bappi Ashrafi'),
(0, 35, 'Learning point of HTML', 'Rasel Ahmed'),
(0, 36, 'How to learn Wordpress', 'Suraiya Aysha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_subscriptions`
--

CREATE TABLE IF NOT EXISTS `tbl_email_subscriptions` (
  `serial_no` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_subscription` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_subscriptions`
--

INSERT INTO `tbl_email_subscriptions` (`serial_no`, `id`, `first_name`, `last_name`, `email_subscription`) VALUES
(1, 1, 'Suraiya', 'Aysha', 'pakhi@gmail.com'),
(0, 2, 'Linkon', 'Miyan', 'miyan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_summary_organizations`
--

CREATE TABLE IF NOT EXISTS `tbl_summary_organizations` (
  `serial_no` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `summary_organizations` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_summary_organizations`
--

INSERT INTO `tbl_summary_organizations` (`serial_no`, `id`, `company_name`, `summary_organizations`) VALUES
(1, 1, 'RRF', 'Lorem ipsum dolor sit amet, et pulvinar orci turpis ipsum, commodo felis veniam, non placerat vehicula magna sit diam ipsum. Semper sit, maecenas ut dui, turpis nec augue, parturient luctus, libero volutpat vitae odio amet. Morbi vel luctus tortor, lectus erat ipsum wisi cupiditate. Lacus nunc dictum eu eu scelerisque ac. In mollis nesciunt. Metus fermentum, pellentesque ligula vivamus rutrum wisi lectus, pede vivamus ut, placerat nam, id vehicula quam et in in.'),
(0, 16, 'BASIS', 'In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, and page layout without being distracted by the content.                             \r\n                                    '),
(0, 17, 'BASIS', '                                               kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk                            ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_birthdays`
--
ALTER TABLE `tbl_birthdays`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_subscriptions`
--
ALTER TABLE `tbl_email_subscriptions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_summary_organizations`
--
ALTER TABLE `tbl_summary_organizations`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_birthdays`
--
ALTER TABLE `tbl_birthdays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_email_subscriptions`
--
ALTER TABLE `tbl_email_subscriptions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_summary_organizations`
--
ALTER TABLE `tbl_summary_organizations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

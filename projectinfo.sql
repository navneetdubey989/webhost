-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 07:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Useremail` varchar(255) NOT NULL,
  `Useraddress` varchar(255) NOT NULL,
  `Usercontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `Username`, `Useremail`, `Useraddress`, `Usercontact`) VALUES
(1, 'zcxvc', 'adad@d.i', 'ccxvxvz', '8208233525'),
(2, 'nav', 'adad@d.i', 'ccxvxvz', '8208233525'),
(3, 'zcxvc', 'adad@d.i', 'b/205', '8208233524'),
(4, 'zcxvc', 'priti@gmail.com', 'b/206', '85456455');

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Useremail` varchar(255) NOT NULL,
  `Useraddress` varchar(255) NOT NULL,
  `Usercontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`id`, `Username`, `Useremail`, `Useraddress`, `Usercontact`) VALUES
(0, 'nav', 'navneetdubey989@gmail.com', 'b/205', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `message`) VALUES
(1, 'navneet', 'navneetdubey989@gmail.com', 'help'),
(2, 'priti', 'priti@gmail.com', '\r\n       i am priti      '),
(3, 'navneet', 'navneetdubey989@gmail.com', '\r\n           aas  ');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `password`) VALUES
(1, 'nav', 'nav@hmail.com', 'navnav'),
(2, 'nav', 'dydbkja.@cbcha.u', 'cbhachba'),
(10, 'priti', 'priti@gmail.com', '45662'),
(11, 'nav', 'navneetdubey989@gmail.com', 'nav'),
(12, 'nav', 'adad@d.i', 'nav'),
(13, 'nav', 'adad@d.i', '123'),
(14, 'priti', 'navneetdubey989@gmail.com', 'priti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buynow`
--
ALTER TABLE `buynow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

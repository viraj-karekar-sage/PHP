-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 12:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `username` varchar(120) DEFAULT NULL,
  `useremail` varchar(200) DEFAULT NULL,
  `userpassword` varchar(250) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `mobile_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `firstname`, `username`, `useremail`, `userpassword`, `address`, `role`, `lastname`, `mobile_no`) VALUES
(1, 'z', 'karekar_vi', 'karekar_viraj@yahoo.com', '176d608cc603fd63b4539070a725e1dd', 'y666', 'onsite', 'z', 2147483647),
(2, 'x', 'kareka', 'karekar.viraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'eee', 'offshore', 'x', 2147483647),
(3, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(4, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(5, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(6, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(7, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(11, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(12, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(13, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'onsite', '', 0),
(14, 'xxx', 'viraj.kare', 'x@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'sss', 'offshore', 'xxx', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

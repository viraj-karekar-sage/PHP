-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 11:56 AM
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
-- Database: `ers`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `role`, `username`, `password`, `address`, `created_on`) VALUES
(1, 'Sandeep', 'Rajput', 'sandeepr119@gmail.com', '7020073270', 'Onsite', 'admin', 'admin', '\r\nNear Baliram Patil School', '2022-11-08 10:38:07'),
(2, 'ss', 'sss', 'karekar.viraj@gmail.com', '9876542999', 'Onsite', 'viraj', 'vira123', '', '2022-11-08 13:40:23');

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
(1, 'viraj', 'res', 'test@gmail.com', '$2y$12$V0Tzmdd21loQCe7lb/vErevCPcikoGX1mog8hnWap31XUzR81imme', ' dd', 'onsite', 'karekar', 123456789),
(2, 'viraj', '123456', 'karekar.viraj@gmail.com', '$2y$12$J8vil54sikhZrgeUZf3x/uVWK.1VKDVl0pDb9QAGnkdrzXU8nTF1i', ' eee', 'ofsite', 'karekar', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 06:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appuang`
--

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `frontname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `backname` varchar(30) NOT NULL,
  `birthplace` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`frontname`, `middlename`, `backname`, `birthplace`, `birthdate`, `nik`, `citizenship`, `email`, `phone`, `address`, `postalcode`, `profile`, `username`, `password`, `confirmpass`) VALUES
('Andi', 'Budi', 'Putra', 'a', '2022-04-03', 'asdf', 'Indonesia', 'Andi@gmail.com', '08521234567', 'Jl. Piring', '1234', 'profilepic/GabeFish Fashion Small Medium Large Dog Striped Warm Knitted Sweater For Cold Weather Spring Winter Clothes Jumper Navy 3X-Large ___ Read more reviews of the product by visiting the link on the image_ (This is an.jfif', 'Andi', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

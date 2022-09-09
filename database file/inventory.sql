-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 08:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_brand`
--

CREATE TABLE `add_brand` (
  `id` int(13) NOT NULL,
  `brand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_brand`
--

INSERT INTO `add_brand` (`id`, `brand`) VALUES
(1, 'Nokia'),
(2, 'dell'),
(5, 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `add_catagory`
--

CREATE TABLE `add_catagory` (
  `id` int(13) NOT NULL,
  `catagory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_catagory`
--

INSERT INTO `add_catagory` (`id`, `catagory`) VALUES
(13, 'phone'),
(14, 'laptop'),
(15, 'chair');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(13) NOT NULL,
  `department` varchar(30) NOT NULL,
  `catagory` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `price` int(13) NOT NULL,
  `quantity` int(13) NOT NULL,
  `total` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `department`, `catagory`, `brand`, `price`, `quantity`, `total`) VALUES
(1, 'MCA', 'phone', 'dell', 500, 23, 11500),
(2, 'MBA', 'phone', 'dell', 50055, 2, 100110),
(3, 'MCA', 'phone', 'dell', 1000, 5, 5000),
(4, 'MTECH', 'phone', 'Nokia', 0, 0, 0),
(5, 'BTECH', 'phone', 'Nokia', 0, 0, 0),
(6, 'BSC', 'chair', 'Nokia', 0, 0, 0),
(7, 'Bpharma', 'laptop', 'dell', 800, 5, 4000),
(8, 'MCA', 'laptop', 'dell', 500, 2, 1000),
(14, 'MCA', 'phone', 'Nokia', 5000, 5, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `gender`, `department`, `address`, `zip`) VALUES
(1, 'Mudasir Ahmad Kumar', '9682124710', 'kumarmudasir92@gmail.com', 'Mudasir@1231', 'Male', 'MCA', 'Pulwama, Jammu and Kashmir', 192123);

-- --------------------------------------------------------

--
-- Table structure for table `allotment_list`
--

CREATE TABLE `allotment_list` (
  `id` int(13) NOT NULL,
  `name` varchar(40) NOT NULL,
  `department` varchar(25) NOT NULL,
  `catagory` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allotment_list`
--

INSERT INTO `allotment_list` (`id`, `name`, `department`, `catagory`, `brand`) VALUES
(1, 'Mudasir', 'MCA', 'laptop', 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `phone`, `email`, `password`, `gender`, `department`, `address`, `zip`) VALUES
(1, 'mudasir Ahmad kumar', '9682124710', 'kumarmudasir92@gmail.com', 'Mudasir@1231', 'Male', 'MCA', 'Satura Aripal Tral PUlwama Kashmir', 192123),
(2, 'mudasir Ahmad kuamr', '9682124710', 'kumar92@gmailcom', 'Mudasir@1231', 'Male', 'MTECH', 'Satura', 192123),
(3, 'Basharat Ahmad Kumar', '6005669780', 'basharatahmad836@gmail.com', 'asddddfghjkl@1231', 'Male', 'MBA', 'SATURA ARIPAL ', 192123);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(13) NOT NULL,
  `department` varchar(25) NOT NULL,
  `hod_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `catagory` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `quantity` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `department`, `hod_name`, `email`, `phone`, `catagory`, `brand`, `quantity`) VALUES
(1, 'MCA', 'mudasir Ahmad kumar', 'kumarmudasir92@gmail.com', '9682124710', 'phone', 'Nokia', 1),
(4, 'MTECH', 'mudasir Ahmad kuamr', 'kumar92@gmailcom', '9682124710', 'laptop', 'dell', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_brand`
--
ALTER TABLE `add_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_catagory`
--
ALTER TABLE `add_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allotment_list`
--
ALTER TABLE `allotment_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_brand`
--
ALTER TABLE `add_brand`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_catagory`
--
ALTER TABLE `add_catagory`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allotment_list`
--
ALTER TABLE `allotment_list`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

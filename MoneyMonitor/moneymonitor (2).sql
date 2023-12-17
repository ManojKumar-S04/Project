-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 08:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneymonitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no` int(5) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `empid`, `name`, `email`, `mobileno`, `gender`, `password`, `image`) VALUES
(1, 'EMP_21BCS0001', 'Manoj Kumar S', 'manojkumar@gmail.com', '9876543210', 'Male', '54321', '655c6320ae792.jpg'),
(2, 'EMP_21BCS0114', 'Bharath Eswar P', 'bharatheswar.p11.official@gmail.com', '9080706050', 'Male', '12345', '655c624a61772.jpg'),
(3, 'EMP_21BCS0115', 'Ayush Kumar', 'akd@gmail.com', '8070605090', 'Male', '12345', '655c62ad5d2f8.jpeg'),
(4, 'EMP_21BCS0093', 'Vignesh R', 'vicky@gmail.com', '7080906050', 'Male', '12345', '655c62e4e9b1a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `arjunexpense`
--

CREATE TABLE `arjunexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `arjunincome`
--

CREATE TABLE `arjunincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aryaexpense`
--

CREATE TABLE `aryaexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aryaincome`
--

CREATE TABLE `aryaincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ayushexpense`
--

CREATE TABLE `ayushexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ayushincome`
--

CREATE TABLE `ayushincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoryexpense`
--

CREATE TABLE `categoryexpense` (
  `pid` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoryexpense`
--

INSERT INTO `categoryexpense` (`pid`, `category`, `color`) VALUES
(1, 'Food', 'Red'),
(2, 'Cloth', 'Blue'),
(3, 'Travel', 'Green'),
(4, 'Studies', 'Orange');

-- --------------------------------------------------------

--
-- Table structure for table `categoryincome`
--

CREATE TABLE `categoryincome` (
  `pid` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoryincome`
--

INSERT INTO `categoryincome` (`pid`, `category`, `color`) VALUES
(1, 'Salary', 'Red'),
(2, 'Incentive', 'Blue'),
(3, 'Funds', 'Orange');

-- --------------------------------------------------------

--
-- Table structure for table `eswarexpense`
--

CREATE TABLE `eswarexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eswarexpense`
--

INSERT INTO `eswarexpense` (`id`, `tdate`, `category`, `amount`, `note`) VALUES
(1, '2023-11-15', 'Food', 215, 'chicken roll'),
(5, '2023-11-02', 'Travel', 500, 'Petrol expense');

-- --------------------------------------------------------

--
-- Table structure for table `eswarincome`
--

CREATE TABLE `eswarincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eswarincome`
--

INSERT INTO `eswarincome` (`id`, `tdate`, `category`, `amount`, `note`) VALUES
(1, '2023-11-01', 'Salary', 15000, ''),
(7, '2023-11-03', 'Funds', 5000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `mobileno`, `gender`, `role`, `image`) VALUES
('Arjun', '12345', 'arjun11@gmail.com', '8072929613', 'Male', 'Student', '655c70ad9cbfe.jpg'),
('Arya', '12345', 'arya@gmail.com', '8090706050', 'Female', 'Others', 'LogoMMWhite.png'),
('eswar', '54321', 'eswar@gmail.com', '0987765433', 'Male', 'Student', '6558ea5bc4304.jpeg'),
('Manoj', '12345', 'manojkumarsj04@gmail.com', '6379594511', 'Male', 'Student', '6560d26240eff.jpg'),
('Ramya', 'xzy123', 'ramya@gmail.com', '1020304050', 'Female', 'Employee', 'LogoMMWhite.png'),
('Rithu', '12345', 'rithu@gmail.com', '9080706050', 'Female', 'Others', 'LogoMMWhite.png'),
('Thara Racheal', '12345', 'thara@gmail.com', '9080706050', 'Female', 'Student', 'LogoMMWhite.png'),
('Vijay', '12345', 'abc@gmail.com', '9080706050', 'Male', 'Student', 'LogoMMWhite.png');

-- --------------------------------------------------------

--
-- Table structure for table `manojexpense`
--

CREATE TABLE `manojexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manojexpense`
--

INSERT INTO `manojexpense` (`id`, `tdate`, `category`, `amount`, `note`) VALUES
(5, '2023-11-18', 'Food', 200, 'Biriyani'),
(7, '2023-11-10', 'Cloth', 1200, 'Diwali Dress');

-- --------------------------------------------------------

--
-- Table structure for table `manojincome`
--

CREATE TABLE `manojincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manojincome`
--

INSERT INTO `manojincome` (`id`, `tdate`, `category`, `amount`, `note`) VALUES
(2, '2023-11-11', 'Funds', 1000, ''),
(3, '2023-11-05', 'Salary', 10000, 'Salary');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `issue` varchar(20) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `username`, `email`, `issue`, `message`) VALUES
(1, 'eswar', 'jayamaniopmk@gmail.com', 'Technical', 'This is my issue'),
(3, 'Rithu', 'rithu@gmail.com', 'Non Technical', 'please help'),
(4, 'Arya', 'arya@gmail.com', 'Technical', 'Stats problem');

-- --------------------------------------------------------

--
-- Table structure for table `rithuexpense`
--

CREATE TABLE `rithuexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rithuincome`
--

CREATE TABLE `rithuincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sowmyaexpense`
--

CREATE TABLE `sowmyaexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sowmyaincome`
--

CREATE TABLE `sowmyaincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vijayexpense`
--

CREATE TABLE `vijayexpense` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vijayincome`
--

CREATE TABLE `vijayincome` (
  `id` int(5) NOT NULL,
  `tdate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`,`empid`);

--
-- Indexes for table `arjunexpense`
--
ALTER TABLE `arjunexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arjunincome`
--
ALTER TABLE `arjunincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aryaexpense`
--
ALTER TABLE `aryaexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aryaincome`
--
ALTER TABLE `aryaincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayushexpense`
--
ALTER TABLE `ayushexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayushincome`
--
ALTER TABLE `ayushincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryexpense`
--
ALTER TABLE `categoryexpense`
  ADD PRIMARY KEY (`pid`,`category`);

--
-- Indexes for table `categoryincome`
--
ALTER TABLE `categoryincome`
  ADD PRIMARY KEY (`pid`,`category`);

--
-- Indexes for table `eswarexpense`
--
ALTER TABLE `eswarexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eswarincome`
--
ALTER TABLE `eswarincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `manojexpense`
--
ALTER TABLE `manojexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manojincome`
--
ALTER TABLE `manojincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rithuexpense`
--
ALTER TABLE `rithuexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rithuincome`
--
ALTER TABLE `rithuincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sowmyaexpense`
--
ALTER TABLE `sowmyaexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sowmyaincome`
--
ALTER TABLE `sowmyaincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vijayexpense`
--
ALTER TABLE `vijayexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vijayincome`
--
ALTER TABLE `vijayincome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `arjunexpense`
--
ALTER TABLE `arjunexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `arjunincome`
--
ALTER TABLE `arjunincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aryaexpense`
--
ALTER TABLE `aryaexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aryaincome`
--
ALTER TABLE `aryaincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ayushexpense`
--
ALTER TABLE `ayushexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ayushincome`
--
ALTER TABLE `ayushincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoryexpense`
--
ALTER TABLE `categoryexpense`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categoryincome`
--
ALTER TABLE `categoryincome`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eswarexpense`
--
ALTER TABLE `eswarexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eswarincome`
--
ALTER TABLE `eswarincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manojexpense`
--
ALTER TABLE `manojexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manojincome`
--
ALTER TABLE `manojincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rithuexpense`
--
ALTER TABLE `rithuexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rithuincome`
--
ALTER TABLE `rithuincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sowmyaexpense`
--
ALTER TABLE `sowmyaexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sowmyaincome`
--
ALTER TABLE `sowmyaincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vijayexpense`
--
ALTER TABLE `vijayexpense`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vijayincome`
--
ALTER TABLE `vijayincome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

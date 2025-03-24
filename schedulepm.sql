-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 12:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedulepm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', 'Admin@gmail.com', '$2y$10$hJ6eplexE2dRy0eIdUjEPez66qyUrnXngyJZhUslvPBE9jxKhflTG', '2');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_fume`
--

CREATE TABLE `schedule_fume` (
  `no` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `register_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `status` enum('advance','on time','delay') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `remark` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_jig`
--

CREATE TABLE `schedule_jig` (
  `no` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `register_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `status` enum('advance','on time','delay') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `remark` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_machine`
--

CREATE TABLE `schedule_machine` (
  `no` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `register_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `status` enum('advance','on time','delay') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `remark` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_machine`
--

INSERT INTO `schedule_machine` (`no`, `equipment`, `register_no`, `model`, `cust`, `status`, `pic`, `remark`, `date`) VALUES
(1, 'Generator A', 'GEN12345', 'Model-X', 'Customer1', 'on time', 'John Doe', 'Serviced on time, no issues found', '2025-03-24'),
(2, 'Air Compressor B', 'COMP6789', 'Model-Y', 'Customer2', 'advance', 'Jane Smith', 'Maintenance completed ahead of schedule', '2025-03-25'),
(3, 'Pump C', 'PUMP1122', 'Model-Z', 'Customer3', 'delay', 'Mike Johnson', 'Delayed due to parts availability', '2025-03-26'),
(4, 'Hydraulic Press D', 'HYD2345', 'Model-W', 'Customer4', 'on time', 'Laura White', 'Routine maintenance completed on time', '2025-03-27'),
(5, 'CNC Machine E', 'CNC3456', 'Model-T', 'Customer5', 'advance', 'David Brown', 'Scheduled maintenance completed ahead of time', '2025-03-28'),
(6, 'Milling Machine F', 'MILL4567', 'Model-R', 'Customer6', 'delay', 'Sarah Lee', 'Maintenance delayed due to technician availability', '2025-03-29'),
(7, 'Forklift G', 'FORK5678', 'Model-S', 'Customer7', 'on time', 'Alex Green', 'All maintenance checks passed', '2025-03-30'),
(8, 'Welding Machine H', 'WELD6789', 'Model-U', 'Customer8', 'advance', 'Jessica Blue', 'Maintenance performed earlier than expected', '2025-03-31'),
(9, 'Drill Press I', 'DRILL7890', 'Model-V', 'Customer9', 'on time', 'Charles Grey', 'No major issues, maintenance completed on schedule', '2025-04-01'),
(10, 'Lathe Machine J', 'LATHE8901', 'Model-P', 'Customer10', 'delay', 'Emily Black', 'Maintenance delayed due to material shortage', '2025-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_pallet`
--

CREATE TABLE `schedule_pallet` (
  `no` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `register_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `status` enum('advance','on time','delay') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `remark` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_selectiveline`
--

CREATE TABLE `schedule_selectiveline` (
  `no` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `register_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `status` enum('advance','on time','delay') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `remark` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_trolley`
--

CREATE TABLE `schedule_trolley` (
  `no` int(11) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `register_no` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cust` varchar(255) NOT NULL,
  `status` enum('advance','on time','delay') NOT NULL,
  `pic` varchar(255) NOT NULL,
  `remark` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_fume`
--
ALTER TABLE `schedule_fume`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date_idx` (`date`);

--
-- Indexes for table `schedule_jig`
--
ALTER TABLE `schedule_jig`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date_idx` (`date`);

--
-- Indexes for table `schedule_machine`
--
ALTER TABLE `schedule_machine`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date_idx` (`date`);

--
-- Indexes for table `schedule_pallet`
--
ALTER TABLE `schedule_pallet`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date_idx` (`date`);

--
-- Indexes for table `schedule_selectiveline`
--
ALTER TABLE `schedule_selectiveline`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date_idx` (`date`);

--
-- Indexes for table `schedule_trolley`
--
ALTER TABLE `schedule_trolley`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date_idx` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule_fume`
--
ALTER TABLE `schedule_fume`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_jig`
--
ALTER TABLE `schedule_jig`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_machine`
--
ALTER TABLE `schedule_machine`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule_pallet`
--
ALTER TABLE `schedule_pallet`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_selectiveline`
--
ALTER TABLE `schedule_selectiveline`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_trolley`
--
ALTER TABLE `schedule_trolley`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

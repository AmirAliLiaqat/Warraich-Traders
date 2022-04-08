-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 03:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warraich-traders`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `ID` bigint(255) NOT NULL,
  `file` bigint(255) NOT NULL,
  `picture` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `booking_date` date NOT NULL,
  `isfront` tinyint(1) NOT NULL,
  `house_plan` bigint(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `house_location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Active',
  `account_stage` varchar(255) NOT NULL DEFAULT 'booking',
  `account_status` varchar(255) NOT NULL DEFAULT 'open',
  `completed` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`ID`, `file`, `picture`, `name`, `relation`, `father`, `CNIC`, `cheque_no`, `contact`, `address`, `booking_date`, `isfront`, `house_plan`, `house_no`, `house_location`, `description`, `created_by`, `updated_by`, `is_active`, `account_stage`, `account_status`, `completed`) VALUES
(1, 1001, 'pic1.jpg', 'Gaming Fort', 'son_of', 'Extra', '35201-2992026-3', '', '0308-4778114', 'Qanchi Amer Sidhu', '2022-02-10', 0, 7, '25', 'b', '', 'Amir', 'Amir', 'active', 'booking', 'open', 'no'),
(2, 1002, 'pic2.jpg', 'Amir Ali', 'son_of', 'Liaqat Ali', '35201-2992026-3', '', '0309-0886518', 'Qanchi Amer Sidhu', '2022-02-10', 1, 11, '28', 'a', '', 'Amir', 'Amir', 'active', 'possesion', 'open', 'registery'),
(3, 1003, 'pic3.jpg', 'Ahmad Ali', 'son_of', 'Nadeem Raja', '4010-2523159-6', '', '0321-1434855', 'Qanchi Amer Sidhu', '2022-02-23', 1, 8, '35', 'c', '', 'Ayyaz', 'Gaming Fort', 'in_active', 'possesion', 'open', 'no'),
(4, 1004, 'pic4.jpg', 'Haider Ali', 'son_of', 'Shouket Ali', '35201-6548321-3', '', '0320-8463432', 'Qanchi Amer Sidhu', '2022-01-10', 0, 6, '15', 'd', '', 'Gaming Fort', '', 'active', 'booking', 'close', 'no'),
(5, 1005, 'pic5.jpg', 'Ali Raza', 'son_of', 'Liaqat Ali', '35201-1242526-3', '', '0322-9982750', 'Qanchi Amer Sidhu', '2022-02-26', 0, 2, '0', 'b', '', 'Amir', '', 'active', 'booking', 'open', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `ca_expenses`
--

CREATE TABLE `ca_expenses` (
  `ID` bigint(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `paid_date` date NOT NULL,
  `description` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ca_expenses`
--

INSERT INTO `ca_expenses` (`ID`, `amount`, `paid_date`, `description`, `created_by`, `updated_by`) VALUES
(1, '150000', '2022-02-08', 'Site Expenses', 'Amir', ''),
(2, '2000', '2022-02-01', 'Site Expenses', 'Gaming Fort', ''),
(3, '9500', '2022-02-22', 'Site Expenses', 'Ayyaz', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `name`, `email`, `message`) VALUES
(1, 'Amir Ali', 'amirliaqat148@gmail.com', 'Hello I want to buy a new house of 1 marla');

-- --------------------------------------------------------

--
-- Table structure for table `employee_category`
--

CREATE TABLE `employee_category` (
  `ID` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_category`
--

INSERT INTO `employee_category` (`ID`, `name`) VALUES
(1, 'CH IMTIAZ ALI'),
(2, 'CH WAQAR AHMAD'),
(3, 'MALIK IQBAL'),
(4, 'MALIK QAISAR'),
(5, 'SYED JAMIL HUSSAIN SHAH'),
(6, 'MALIK TANVEER'),
(7, 'SADDAM HUSSAIN'),
(8, 'MUHAMMAD ARIF'),
(9, 'HAFIZ MUHAMMAD BASHIR');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `ID` bigint(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `expense_by` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `labour_name` varchar(255) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `labour_type` varchar(255) NOT NULL,
  `material_type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `ispartial` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ID`, `amount`, `expense_by`, `date`, `type`, `project_name`, `labour_name`, `worker_name`, `labour_type`, `material_type`, `quantity`, `description`, `payment_method`, `ispartial`, `created_by`, `updated_by`, `time`) VALUES
(1, '150000', '1', '2022-03-23', '2', 'a', '1', '1', '1', '1', '500', 'Site Expenses', 'cash', 'off', 'Amir', 'Amir', '0000-00-00'),
(2, '125000', '2', '2022-03-23', '1', 'c', '2', '3', '2', '6', '1000', 'Sanitary', 'bank', 'off', 'Gaming Fort', 'Amir', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `expense_by`
--

CREATE TABLE `expense_by` (
  `ID` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_by`
--

INSERT INTO `expense_by` (`ID`, `name`) VALUES
(1, 'CEO Exp'),
(2, 'CA Exp'),
(3, 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `expense_type`
--

CREATE TABLE `expense_type` (
  `ID` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_type`
--

INSERT INTO `expense_type` (`ID`, `name`) VALUES
(1, 'MATERIAL'),
(2, 'LABOR'),
(3, 'SALARIES'),
(4, 'OFFICE'),
(5, 'LAND'),
(6, 'GOVT TAX');

-- --------------------------------------------------------

--
-- Table structure for table `house_plan`
--

CREATE TABLE `house_plan` (
  `ID` bigint(255) NOT NULL,
  `total_price` bigint(255) NOT NULL,
  `down_payment` bigint(255) NOT NULL,
  `monthly` int(255) NOT NULL,
  `no_of_installments` int(255) NOT NULL,
  `possesion` bigint(255) NOT NULL,
  `registery` bigint(255) NOT NULL,
  `yearly` bigint(255) NOT NULL,
  `front_back_price` bigint(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `house_size` varchar(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_plan`
--

INSERT INTO `house_plan` (`ID`, `total_price`, `down_payment`, `monthly`, `no_of_installments`, `possesion`, `registery`, `yearly`, `front_back_price`, `block`, `house_size`, `plan_name`) VALUES
(1, 1100000, 150000, 9000, 72, 100000, 150000, 12000, 10000, 'a', '1', 'A-1Marla'),
(2, 1100000, 150000, 9000, 72, 100000, 150000, 12000, 100000, 'b', '1', 'B-1Marla'),
(3, 1100000, 150000, 9000, 72, 100000, 150000, 12000, 100000, 'c', '1', 'C-1Marla'),
(4, 1100000, 150000, 9000, 72, 100000, 150000, 12000, 100000, 'd', '1', 'D-1Marla'),
(5, 1100000, 150000, 9000, 72, 100000, 150000, 12000, 100000, 'e', '1', 'E-1Marla'),
(6, 1650000, 175000, 13500, 72, 150000, 175000, 18000, 175000, 'a', '1.5', 'A-1.5M'),
(7, 1650000, 175000, 13500, 72, 150000, 175000, 18000, 175000, 'b', '1.5', 'B-1.5M'),
(8, 1650000, 175000, 13500, 72, 150000, 175000, 18000, 175000, 'c', '1.5', 'C-1.5M'),
(9, 1650000, 175000, 13500, 72, 150000, 175000, 18000, 175000, 'd', '1.5', 'D-1.5M'),
(10, 1650000, 175000, 13500, 72, 150000, 175000, 18000, 175000, 'e', '1.5', 'E-1.5M'),
(11, 2200000, 200000, 18000, 72, 100000, 200000, 20000, 200000, 'a', '2', 'A-2M'),
(12, 2200000, 200000, 18000, 72, 100000, 200000, 20000, 200000, 'b', '2', 'B-2M'),
(13, 2200000, 200000, 18000, 72, 100000, 200000, 20000, 200000, 'c', '2', 'C-2M'),
(14, 2200000, 200000, 18000, 72, 100000, 200000, 20000, 200000, 'd', '2', 'D-2M'),
(15, 2200000, 200000, 18000, 72, 100000, 200000, 20000, 200000, 'e', '2', 'E-2M');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `ID` bigint(255) NOT NULL,
  `borrower_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `paid_date` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `is_converted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`ID`, `borrower_id`, `amount`, `paid_date`, `payment_type`, `payment_method`, `description`, `created_by`, `is_converted`) VALUES
(1, '1', '150000', '2022-02-26', 'downpayment', 'cash', 'Down Payment', 'Amir', ''),
(2, '2', '175000', '2022-02-26', 'downpayment', 'bank', 'Down Payment', 'Ayyaz', ''),
(3, '3', '150000', '2022-02-26', 'downpayment', 'cash', 'Down Payment', 'Gaming Fort', ''),
(4, '4', '150000', '2022-02-26', 'downpayment', 'cash', 'Down Payment', 'Amir', ''),
(5, '5', '150000', '2022-02-28', 'downpayment', 'cash', 'Down Payment', 'Amir', ''),
(6, '1', '9000', '2022-03-01', 'installment', 'bank', 'Installment', 'Gaming Fort', ''),
(7, '2', '18000', '2022-03-01', 'installment', 'bank', 'Installment', 'Amir', ''),
(8, '3', '9000', '2022-03-01', 'installment', 'cash', 'Installment', 'Amir', ''),
(9, '2', '100000', '2022-03-16', 'possesion', 'bank', 'Possesion', 'Gaming Fort ', 'on'),
(10, '1', '9000', '2022-03-17', 'others', 'cash', 'Installment', 'Amir', ''),
(11, '1', '150000', '2022-03-17', 'registery', 'cash', 'Registery', 'Amir', ''),
(13, '2', '150000', '2022-03-17', 'registery', 'bank', 'Registery', 'Amir', '');

-- --------------------------------------------------------

--
-- Table structure for table `labour_category`
--

CREATE TABLE `labour_category` (
  `ID` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labour_category`
--

INSERT INTO `labour_category` (`ID`, `name`) VALUES
(1, 'ELECTRICIAN LABOR'),
(2, 'SANITRAY LABOR'),
(3, 'BORING LABOR'),
(4, 'REPAIRS & MAINTENANCE'),
(5, 'MISTRI MAZDOOR LABOR'),
(6, 'SHUTTERING LABOR');

-- --------------------------------------------------------

--
-- Table structure for table `material_category`
--

CREATE TABLE `material_category` (
  `ID` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_category`
--

INSERT INTO `material_category` (`ID`, `name`) VALUES
(1, 'EARTH FILLING MITI'),
(2, 'CEMENT'),
(3, 'CRUSH'),
(4, 'SAND'),
(5, 'STEEL BARS SARIA'),
(6, 'SANITARY MATERIAL'),
(7, 'HARDWARE MATERIAL'),
(8, 'ELECTRIC MATERIAL'),
(9, 'PAINT MATERIA'),
(10, 'CEILING MATERIAL'),
(11, 'IRON WORK MATERIAL'),
(12, 'FIBER MATERIAL'),
(13, 'WOOD MATERIAL'),
(14, 'LAND ZAMEEN'),
(15, 'BRICKS'),
(16, 'ALUMINIUM MATERIAL'),
(17, 'FLOOR TILE'),
(18, 'SHUTTERING MATERIAL'),
(19, 'FUEL'),
(20, 'WAPDA'),
(21, 'OTHERS'),
(22, 'STATIONERY & PRINTING'),
(23, 'FURNITURE & FIXTURES'),
(24, 'MACHINERY & VEHICLES'),
(25, 'TILE');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` bigint(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `paid_date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `supplier_invoice` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `purchased_by` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `title`, `amount`, `paid_date`, `category`, `brand`, `supplier`, `supplier_invoice`, `quantity`, `size`, `quality`, `purchased_by`, `description`, `payment_method`, `total_amount`, `created_by`) VALUES
(1, 'Saria', '300', '2022-02-14', '5', 'Mughal', 'Bota', '1', '200', '1/2\"', 'a', 'ca', 'Saria', 'cash', '60,000', 'Amir'),
(2, 'Cement', '700', '2022-02-18', '2', 'Nishat', 'Haji', '2', '500', '', 'b', 'ceo', 'Cement', 'cash', '350,000', 'Gaming Fort');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` bigint(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `phone`, `password`, `last_activity`) VALUES
(1, 'Amir', 'Liaqat', 'amirliaqat2020@gmail.com', '0309-0886518', '58ea4c5ff9b158f602b89182f51f3277', 'March-23-2022 | 02:29:42'),
(2, 'Gaming Fort ', 'Extra', 'gamingfortextra@gmail.com', '0308-4778114', '7d29150544480fe2e9ed01b836ada4e1', 'March-16-2022 | 10:29:41'),
(3, 'Ayyaz', 'Abid', 'ayyazabid2022@gmail.com', '0309-4503445', '7d3796dbb4140a56f2ed0962f26638dc', 'March-16-2022 | 11:53:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ca_expenses`
--
ALTER TABLE `ca_expenses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee_category`
--
ALTER TABLE `employee_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expense_by`
--
ALTER TABLE `expense_by`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expense_type`
--
ALTER TABLE `expense_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `house_plan`
--
ALTER TABLE `house_plan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `labour_category`
--
ALTER TABLE `labour_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `material_category`
--
ALTER TABLE `material_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ca_expenses`
--
ALTER TABLE `ca_expenses`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_category`
--
ALTER TABLE `employee_category`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense_by`
--
ALTER TABLE `expense_by`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense_type`
--
ALTER TABLE `expense_type`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `house_plan`
--
ALTER TABLE `house_plan`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `labour_category`
--
ALTER TABLE `labour_category`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `material_category`
--
ALTER TABLE `material_category`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

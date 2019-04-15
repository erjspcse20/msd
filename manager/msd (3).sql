-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2019 at 03:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `uuid` varchar(50) NOT NULL,
  `ainc` int(11) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `address_line1` varchar(200) DEFAULT NULL,
  `address_line2` varchar(200) DEFAULT NULL,
  `city_id` varchar(100) DEFAULT NULL,
  `country_id` varchar(100) DEFAULT NULL,
  `state_id` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `pan_image` varchar(100) DEFAULT NULL,
  `aadhar_image` varchar(100) DEFAULT NULL,
  `document_attached` varchar(100) DEFAULT NULL,
  `document_name` varchar(100) DEFAULT NULL,
  `comming_from` varchar(100) DEFAULT NULL,
  `going_to` varchar(100) DEFAULT NULL,
  `check_in_time` varchar(50) DEFAULT NULL,
  `check_out_time` varchar(50) DEFAULT NULL,
  `no_of_guest` int(11) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `advance` double DEFAULT NULL,
  `paid_amount_last` double DEFAULT NULL,
  `total_paid` double DEFAULT NULL,
  `refrance` varchar(100) DEFAULT NULL,
  `room_no` varchar(50) DEFAULT NULL,
  `doc1` varchar(100) DEFAULT NULL,
  `doc2` varchar(100) DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `purpose` varchar(250) DEFAULT NULL,
  `bill_no` varchar(100) DEFAULT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `last_no` int(11) NOT NULL,
  `bill_date` datetime NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `no_of_days_stay` int(11) NOT NULL,
  `room_rent` double NOT NULL,
  `room_tax` int(11) NOT NULL,
  `room_tax_type` bit(1) NOT NULL COMMENT '1=cgst& igst,2=Igst',
  `room_amount_with_tax` int(11) NOT NULL,
  `food_bill` int(11) NOT NULL,
  `food_tax` double NOT NULL,
  `food_tax_type` bit(1) NOT NULL COMMENT '1=cgst& igst,2=Igst',
  `food_amount_with_tax` double NOT NULL,
  `food_discription` text NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `pdf_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`uuid`, `ainc`, `f_name`, `l_name`, `full_name`, `mobile`, `email`, `age`, `nationality`, `address_line1`, `address_line2`, `city_id`, `country_id`, `state_id`, `pincode`, `pan_no`, `aadhar_no`, `pan_image`, `aadhar_image`, `document_attached`, `document_name`, `comming_from`, `going_to`, `check_in_time`, `check_out_time`, `no_of_guest`, `created_by`, `created_at`, `updated_by`, `updated_at`, `check_in_date`, `check_out_date`, `is_active`, `is_deleted`, `advance`, `paid_amount_last`, `total_paid`, `refrance`, `room_no`, `doc1`, `doc2`, `gst_no`, `purpose`, `bill_no`, `invoice_no`, `last_no`, `bill_date`, `adult`, `children`, `no_of_days_stay`, `room_rent`, `room_tax`, `room_tax_type`, `room_amount_with_tax`, `food_bill`, `food_tax`, `food_tax_type`, `food_amount_with_tax`, `food_discription`, `payment_mode`, `pdf_name`) VALUES
('6690daf2-321e-11e9-b301-9a001723c7b0', 1, NULL, NULL, 'jai shankar pandey', '9479275716', '', 23, 'India', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfdfs', '', '2:2 am', '10: am', 2, '8605c690-2d55-11e9-8642-14c2130d0834', '2019-02-17 00:39:36', '8605c690-2d55-11e9-8642-14c2130d0834', '2019-02-19 20:09:37', '2019-02-19', '2019-02-18', 1, 0, 100, NULL, 2566.98, 'Grand_Hotal', '', '15503441761.png', '155034417611.png', 'weew', '', 'MSD20192000', NULL, 2000, '0000-00-00 00:00:00', 1, 1, 2, 1234, 5, b'1', 1308, 1234, 2, b'1', 1258.68, '', 'CASH', 'bill/itemreport2019_02_18_12_16_16_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `uuid` varchar(50) NOT NULL,
  `aInc` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `ps_un` varchar(50) NOT NULL,
  `narration` varchar(50) NOT NULL DEFAULT 'msdbooking.com'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`uuid`, `aInc`, `f_name`, `l_name`, `full_name`, `user_name`, `password`, `mobile`, `email`, `created_by`, `created_at`, `updated_by`, `updated_at`, `ps_un`, `narration`) VALUES
('8605c690-2d55-11e9-8642-14c2130d0834', 1, 'Administrator', '', 'Administrator', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '9479275716', 'jaishankarpandey329@gmail.com', '', '0000-00-00 00:00:00', 8605, '2019-02-18 14:52:50', 'password', 'http://localhost/msdbooking/manager/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `ainc` (`ainc`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `AutoInc` (`aInc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `ainc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `aInc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

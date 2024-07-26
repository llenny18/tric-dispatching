-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 03:07 AM
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
-- Database: `tric_dis`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `desinations_view`
-- (See below for the actual view)
--
CREATE TABLE `desinations_view` (
`dis_id` int(11)
,`origin` varchar(255)
,`destination` varchar(255)
,`fare` decimal(10,2)
,`status` enum('pending','completed','cancelled','accepted','rejected')
,`d_time` time
,`d_date` date
,`payment_method` varchar(250)
,`payment_status` varchar(250)
,`rider_id` int(11)
,`rider_name` varchar(250)
,`r_contact` varchar(250)
,`r_email` varchar(250)
,`vehicle_number` varchar(20)
,`license_number` varchar(20)
,`r_address` varchar(250)
,`passenger_id` int(11)
,`passenger_name` varchar(250)
,`home_address` varchar(255)
,`work_address` varchar(255)
,`p_contact` varchar(250)
,`p_email` varchar(250)
,`gender` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `dispatches`
--

CREATE TABLE `dispatches` (
  `dispatch_id` int(11) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `rider_id` int(11) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `fare` decimal(10,2) NOT NULL,
  `status` enum('pending','completed','cancelled','accepted','rejected') DEFAULT 'pending',
  `d_time` time NOT NULL,
  `d_date` date NOT NULL,
  `payment_method` varchar(250) NOT NULL,
  `payment_status` varchar(250) NOT NULL,
  `payment_proof` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatches`
--

INSERT INTO `dispatches` (`dispatch_id`, `passenger_id`, `rider_id`, `origin`, `destination`, `fare`, `status`, `d_time`, `d_date`, `payment_method`, `payment_status`, `payment_proof`) VALUES
(1, 1, 1, '1', '2', 2.28, 'cancelled', '18:32:00', '2024-06-13', 'Cash', 'paid', 'd5b04cc3dcd8c17702549ebc5f1acf1a.jpg'),
(2, 1, 1, '1', '2', 91.30, 'pending', '19:48:00', '2024-07-11', 'Gcash', 'unpaid', ''),
(3, 1, 1, '1', '2', 91.30, 'completed', '20:05:00', '2024-07-17', 'Maya', 'paid', ''),
(4, 1, 1, '8', '19', 30.26, 'completed', '19:23:00', '2024-07-18', 'Paypal', 'paid', ''),
(5, 1, 1, '15', '40', 114.52, 'pending', '08:41:00', '2024-07-02', 'Paypal', 'unpaid', '');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_locations`
--

CREATE TABLE `dispatch_locations` (
  `dispatch_location_id` int(11) NOT NULL,
  `location_name` varchar(250) NOT NULL,
  `google_maps` varchar(700) NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `longtitude` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatch_locations`
--

INSERT INTO `dispatch_locations` (`dispatch_location_id`, `location_name`, `google_maps`, `latitude`, `longtitude`) VALUES
(1, 'Sm Lipa', 'https://maps.app.goo.gl/GXKYhVdBeEh3xkwu7', '13.954347830774177', '121.1636904173871'),
(2, 'Robinsons Lipa', 'https://maps.app.goo.gl/CCnC5oqMSu5MAPhQ6', '13.94257845612364', '121.15115272471392'),
(3, 'Ospital ng Lipa', 'https://maps.app.goo.gl/Xk7gy9RCdzeuVrxi8', '13.9571', '121.1622'),
(4, 'Mary Mediatrix Medical Center', 'https://maps.app.goo.gl/ToPvhSzyZ87VQncE6', '13.9435', '121.1515'),
(5, 'San Antonio Medical Center of Lipa, Incorporated', 'https://maps.app.goo.gl/112bE6J1B67YmMLPA', '13.9397', '121.1616'),
(6, 'N. L Villa Memorial Medical Center', 'https://maps.app.goo.gl/jia9GvxapewenmgaA', '13.9395', '121.1620'),
(7, 'Lipa City District Hospital', 'https://maps.app.goo.gl/thSn4X1SDMe6eFEv8', '13.9423', '121.1627'),
(8, 'Lipa Medix Medical Hospital', 'https://maps.app.goo.gl/E7mkM2m5PhpPYs8i8', '13.9404', '121.1633'),
(9, 'Divine Love Medical Center', 'https://maps.app.goo.gl/Tc7RoPrF1vVd42wT7', '13.9384', '121.1642'),
(10, 'Lipa Doctors Hospital', 'https://maps.app.goo.gl/GoxTQveK8inpoFcD9', '13.9414', '121.1585'),
(11, 'Lipa City Hall', 'https://maps.app.goo.gl/iApYFSDWsjwBAzxS7', '13.941876', '121.1631'),
(12, 'Global East Asia Medical Center Lipa', 'https://maps.app.goo.gl/cAbAbDFrLC8kDUP7A', '13.9379', '121.193945'),
(13, 'South Supermarket', 'https://maps.app.goo.gl/o8cbrM2tnTdK8dg57', '13.9415', '121.1631'),
(14, 'Lipa City Police Department', 'https://maps.app.goo.gl/ttjdJwW4Ta17FFNP9', '13.941876', '121.1631'),
(15, 'Agora Police Community Precinct', 'https://maps.app.goo.gl/8Udng4LwXsDf6Sf48', '13.9398', '121.1631'),
(16, 'Lipa City Police Station', 'https://maps.app.goo.gl/BEQMSrrosymT1PN29', '13.941876', '121.1631'),
(17, 'Serbisyo Beterinaryo Animal Hospital Emergency Vet Lipa City', 'https://maps.app.goo.gl/hnx97MXSEaSSLpoc9', '13.9400', '121.1631'),
(18, 'Lajarca Poultry Supply and Veterinary Clinic', 'https://maps.app.goo.gl/4UfDrqSMUQHkTw6a9', '13.9395', '121.1631'),
(19, 'Abys Petcare and Pet Grooming Center', 'https://maps.app.goo.gl/LNs9cHV5yAPWtnv2A', '13.9372', '121.1631'),
(20, 'Happy Hayop Animal Clinic', 'https://maps.app.goo.gl/SnePjTxqckX6c2Dt6', '13.9365', '121.1631'),
(21, 'Vet Daddy Animal Clinic', 'https://maps.app.goo.gl/fq2Wt99uYwZJ9cCK8', '13.9380', '121.1631'),
(22, 'SASH Veterinary Clinic', 'https://maps.app.goo.gl/QAo9uQqRbUEM1emR8', '13.9370', '121.1631'),
(23, 'Jurisvet Pet Emergency Hospital', 'https://maps.app.goo.gl/UCHKM9G2CQMoQUc48', '13.9390', '121.1631'),
(24, 'Lipa Vet Care', 'https://maps.app.goo.gl/ctEmmSf3GpmTi2gn7', '13.9385', '121.1631'),
(25, 'Batangas Dog and Cat Bite Treatment Center', 'https://maps.app.goo.gl/RM3AGyoYrLxxvA7DA', '13.9392', '121.1631'),
(26, 'Batangas II Electric Cooperative, Incorporated - Main Office', 'https://maps.app.goo.gl/xaPrxq1sbUFpM8in6', '13.9388', '121.1631'),
(27, 'Metro Lipa Water District', 'https://maps.app.goo.gl/qzjLdyLHRBFPxnt67', '13.9386', '121.1631'),
(28, 'Dr. Eugel Solleza Dental Clinic', 'https://maps.app.goo.gl/MG3vQ2afGWXSTrhe7', '13.9375', '121.1631'),
(29, 'SG Dental Clinic Lipa', 'https://maps.app.goo.gl/R97gb4dZx6N8ch3s8', '13.9381', '121.1631'),
(30, 'Pangilinan Dental Clinic Lipa', 'https://maps.app.goo.gl/yfEWEiwoJ25orEBv6', '13.9383', '121.1631'),
(31, 'KCGS Dental Clinic', 'https://maps.app.goo.gl/APXkzNnG6DG7cokm8', '13.9379', '121.1631'),
(32, 'Tenorios Dental Clinic', 'https://maps.app.goo.gl/gGBTRf2ExuFGsreC8', '13.9384', '121.1631'),
(33, 'Mojares Dental - Lipa Branch', 'https://maps.app.goo.gl/3yYxPeJN3Qu5PVkc9', '13.9387', '121.1631'),
(34, 'Salvacion Dental Clinic', 'https://maps.app.goo.gl/KmVKsxtbvER8VyRS8', '13.9389', '121.1631'),
(35, 'A&A Dental Clinic', 'https://maps.app.goo.gl/Yk99YStuXd2X9JQ16', '13.9382', '121.1631'),
(36, 'Dimaanos Dental Clinic', 'https://maps.app.goo.gl/TUXraESKj4E4tBes7', '13.9391', '121.1631'),
(37, 'Villalobos Dental Center', 'https://maps.app.goo.gl/DAqv4NcW3vn97js36', '13.9374', '121.1631'),
(38, 'Shakeys Near Robinsons', 'https://maps.app.goo.gl/dXEguhUy1TZMdseEA', '13.943640985955758', '121.15304973413372'),
(39, 'San Carlos Lipa', 'https://maps.app.goo.gl/WMMukdYJAerSxqAm7', '13.947194971384105', ' 121.15195624760737'),
(40, 'Tibig Lipa', 'https://maps.app.goo.gl/RvUHToPPA3Awd18KA', '13.955638084223365', '121.14714378122514'),
(41, 'Tangway Elementary School', 'https://maps.app.goo.gl/qemmihQWABXeF4Yi8', '13.976692285791305', '121.13908294182471');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `work_address` varchar(255) DEFAULT NULL,
  `pusername` varchar(250) NOT NULL,
  `ppassword` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `name`, `home_address`, `work_address`, `pusername`, `ppassword`, `contact`, `email`, `gender`) VALUES
(1, 'Passenger2', 'Manila', 'Makati', 'user1', 'pass1', '097865754', 'emai@email.com', 'Male'),
(2, 'ewrwer', 'werw', 'rwrwer', 'ewrwe', 'ewrw', 'wrwerwe', 'sdfsdf@email.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `rider_id` int(11) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `license_number` varchar(20) NOT NULL,
  `license_issued_date` date DEFAULT NULL,
  `license_expiry_date` date DEFAULT NULL,
  `rusername` varchar(250) NOT NULL,
  `rpassword` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `status` enum('available','not available') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`rider_id`, `vehicle_number`, `license_number`, `license_issued_date`, `license_expiry_date`, `rusername`, `rpassword`, `name`, `address`, `email`, `contact`, `status`) VALUES
(1, 'gdfgfd', 'gfgfdgdf', '2024-06-03', '2024-06-29', 'rider1', 'riderpass', 'Rider marawoy', 'rider1', 'email@rider.com', '0943242342', 'available'),
(2, 'sdfsdf', 'sdfsdf', '2024-05-31', '2024-05-29', 'sdfsd', 'sfsfdfs', 'Rider Name2', 'fsdf', 'sdgfsgdfhnhgfh@email.com', 'sdfsdf', 'available');

-- --------------------------------------------------------

--
-- Structure for view `desinations_view`
--
DROP TABLE IF EXISTS `desinations_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `desinations_view`  AS SELECT `dispatches`.`dispatch_id` AS `dis_id`, `dispatches`.`origin` AS `origin`, `dispatches`.`destination` AS `destination`, `dispatches`.`fare` AS `fare`, `dispatches`.`status` AS `status`, `dispatches`.`d_time` AS `d_time`, `dispatches`.`d_date` AS `d_date`, `dispatches`.`payment_method` AS `payment_method`, `dispatches`.`payment_status` AS `payment_status`, `riders`.`rider_id` AS `rider_id`, `riders`.`name` AS `rider_name`, `riders`.`contact` AS `r_contact`, `riders`.`email` AS `r_email`, `riders`.`vehicle_number` AS `vehicle_number`, `riders`.`license_number` AS `license_number`, `riders`.`address` AS `r_address`, `passengers`.`passenger_id` AS `passenger_id`, `passengers`.`name` AS `passenger_name`, `passengers`.`home_address` AS `home_address`, `passengers`.`work_address` AS `work_address`, `passengers`.`contact` AS `p_contact`, `passengers`.`email` AS `p_email`, `passengers`.`gender` AS `gender` FROM ((`dispatches` join `riders` on(`dispatches`.`rider_id` = `riders`.`rider_id`)) join `passengers` on(`passengers`.`passenger_id` = `dispatches`.`passenger_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispatches`
--
ALTER TABLE `dispatches`
  ADD PRIMARY KEY (`dispatch_id`);

--
-- Indexes for table `dispatch_locations`
--
ALTER TABLE `dispatch_locations`
  ADD PRIMARY KEY (`dispatch_location_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`rider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispatches`
--
ALTER TABLE `dispatches`
  MODIFY `dispatch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dispatch_locations`
--
ALTER TABLE `dispatch_locations`
  MODIFY `dispatch_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `rider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 10:33 PM
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
-- Database: `medico`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `clinical_history`
--

CREATE TABLE `clinical_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `files` mediumtext DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `cdate_of_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_history`
--

INSERT INTO `clinical_history` (`id`, `medical_profile_id`, `files`, `editor`, `cdate_of_edit`) VALUES
(11, 13, '6.jpeg', '15', '2023-06-18'),
(14, 18, '9.jpg', '18', '2023-06-19'),
(15, 19, '7.jpg', '20', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `dfirst_name` varchar(255) NOT NULL,
  `dlast_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profession_practice` mediumtext DEFAULT NULL,
  `years_of_exp` int(11) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `doctor_syndicate` mediumtext DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `image` mediumtext DEFAULT NULL,
  `accepted` varchar(255) NOT NULL,
  `blocked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `dfirst_name`, `dlast_name`, `date_of_birth`, `profession_practice`, `years_of_exp`, `daddress`, `phone`, `doctor_syndicate`, `email`, `specialization`, `password`, `image`, `accepted`, `blocked`) VALUES
(13, 'Mayar', 'Hisham', '2023-06-28', '5.jpeg', 20, '01012144796', 1012144796, '6.jpeg', 'marketyoura@gmail.com', 'eyes', 123, '2.jfif', 'yes', 'no'),
(14, 'doctor', 'one', '2023-06-27', '9.jpg', 20, '6th of october', 1012144796, '1901374.png', 'docotor1@gmail.com', 'eyes', 123, '10.png', 'yes', 'no'),
(15, 'Sara', 'Ehab', '2023-06-22', '9.jpg', 20, '6th of october city', 2147483647, '7.jpg', 'hazem@gmail.com', 'doctor', 123, '10.png', 'no', 'no'),
(16, 'Sara', 'Ehab', '2023-06-22', '9.jpg', 20, '6th of october city', 2147483647, '7.jpg', 'marketyoura@gmail.com', 'doctor', 123, '6.jpeg', 'no', 'no'),
(17, 'Mohamed ', 'Ahmed', '2023-06-09', '1.jpeg', 13, '6th of october city', 2147483647, '2.jfif', 'ahmedm@gmail.com', 'eyes', 123, '7.jpg', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_diagnosis`
--

CREATE TABLE `doctor_diagnosis` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `dr_fname` varchar(255) DEFAULT NULL,
  `doctor_speciality` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `visit_type` varchar(255) DEFAULT NULL,
  `observation` varchar(255) DEFAULT NULL,
  `symptoms` varchar(255) DEFAULT NULL,
  `diagnosis` varchar(255) DEFAULT NULL,
  `prescription` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_diagnosis`
--

INSERT INTO `doctor_diagnosis` (`id`, `medical_profile_id`, `doctor_id`, `dr_fname`, `doctor_speciality`, `date`, `time`, `weight`, `visit_type`, `observation`, `symptoms`, `diagnosis`, `prescription`) VALUES
(11, 18, 13, 'MayarHisham', 'eyes', '0000-00-00', '08:24:00', 100, 'new', 'new', 'new', 'new', 'ogmnten'),
(12, 18, 13, 'MayarHisham', 'eyes', '2023-06-19', '08:25:00', 60, 'normal', 'least', 'normal', 'least', 'ogmnten'),
(13, 18, 13, 'MayarHisham', 'eyes', '2023-06-19', '11:28:00', 80, 'OKK', 'OKK', 'OKK', 'final', 'OKK'),
(14, 18, 13, 'MayarHisham', 'eyes', '2023-06-19', '11:50:00', 0, 'ol', 'ol', 'ol', 'ol', 'ol');

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `relative1` varchar(255) DEFAULT NULL,
  `disease1` varchar(255) DEFAULT NULL,
  `relative2` varchar(255) DEFAULT NULL,
  `disease2` varchar(255) DEFAULT NULL,
  `add_info` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `fdate_of_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family_history`
--

INSERT INTO `family_history` (`id`, `medical_profile_id`, `relative1`, `disease1`, `relative2`, `disease2`, `add_info`, `editor`, `fdate_of_edit`) VALUES
(10, 18, 'aunt1', 'no', 'mother', 'no', 'thnx', '18', '2023-06-19'),
(11, 19, 'no one', '', '', '', '', '20', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `finished_orders`
--

CREATE TABLE `finished_orders` (
  `id` int(11) NOT NULL,
  `id_of_pending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `patient_address` varchar(255) NOT NULL,
  `date_of_order` date NOT NULL,
  `time_of_order` time NOT NULL,
  `image` mediumtext NOT NULL,
  `activity` varchar(255) NOT NULL,
  `order_cd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `patient_id`, `d_id`, `patient_address`, `date_of_order`, `time_of_order`, `image`, `activity`, `order_cd`) VALUES
(53, 18, NULL, 'maadi', '2023-06-19', '12:51:00', '7.jpg', 'no', 'Yes'),
(54, NULL, 13, 'maadi', '2023-06-19', '12:52:00', '1.jpeg', 'yes', 'Yes'),
(55, NULL, 13, 'shubra', '2023-06-19', '01:23:00', '7.jpg', 'yes', 'Yes'),
(56, 20, NULL, 'Giza', '2023-06-19', '05:51:00', '7.jpg', 'no', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `medical_profile`
--

CREATE TABLE `medical_profile` (
  `m_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_profile`
--

INSERT INTO `medical_profile` (`m_id`, `patient_id`) VALUES
(13, 15),
(15, 15),
(18, 18),
(19, 20),
(20, 22),
(21, 23);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_of_order` int(11) NOT NULL,
  `pharmacy_id` int(11) NOT NULL,
  `opatient_id` int(11) DEFAULT NULL,
  `ord_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `prescription` mediumtext NOT NULL,
  `message` varchar(255) NOT NULL,
  `dtime` time NOT NULL,
  `dday` date NOT NULL,
  `dphone` int(11) NOT NULL,
  `date_of_accept` date NOT NULL,
  `time_of_accept` time NOT NULL,
  `activity` varchar(255) NOT NULL,
  `order_cdo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_of_order`, `pharmacy_id`, `opatient_id`, `ord_id`, `order_date`, `order_time`, `patient_address`, `prescription`, `message`, `dtime`, `dday`, `dphone`, `date_of_accept`, `time_of_accept`, `activity`, `order_cdo`) VALUES
(57, 2, 18, 53, '2023-06-19', '12:51:00', 'maadi', '7.jpg', 'hilo', '14:21:00', '2023-06-01', 1012154795, '2023-06-19', '01:20:00', 'yes', 0),
(58, 2, 20, 56, '2023-06-19', '05:51:00', 'Giza', '7.jpg', 'this order is fulfilled completely', '18:52:00', '2023-06-13', 1022512574, '2023-06-19', '05:52:00', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `past_history`
--

CREATE TABLE `past_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `past_illness` varchar(255) DEFAULT NULL,
  `past_medicine` varchar(255) DEFAULT NULL,
  `past_allergies` varchar(255) DEFAULT NULL,
  `past_habits` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `pdate_of_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `past_history`
--

INSERT INTO `past_history` (`id`, `medical_profile_id`, `past_illness`, `past_medicine`, `past_allergies`, `past_habits`, `editor`, `pdate_of_edit`) VALUES
(10, 18, 'nothing', 'nothingg', 'nothinggg', 'nothingggg', '18', '2023-06-19'),
(11, 19, 'nothing', 'nothingg', 'nothinggg', 'nothingggg', '20', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `pdate_of_birth` date NOT NULL,
  `phone` int(11) NOT NULL,
  `emergency_contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `has_emh` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `blocked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `first_name`, `last_name`, `gender`, `occupation`, `marital_status`, `email`, `allergies`, `blood_type`, `pdate_of_birth`, `phone`, `emergency_contact`, `address`, `password`, `image`, `has_emh`, `paid`, `blocked`) VALUES
(15, 'mayar', 'Hisham', 'Female', '01012144796', 'Single', 'mayaroweys2000@gmail.com', 'gluten', 'B+', '2023-06-29', 1012144796, 1349463697, '3rd settlement, new cairo', 123, '5.jpeg', 'yess\r\n', 'yes', 'no'),
(18, 'Hazem', 'Elgendy', 'Male', 'patient', 'Single', 'hazem@gmail.com', 'nothing', 'A+', '2023-06-28', 1012144796, 1349463697, '3rd settlement, new cairo', 123, '9.jpg', 'yes', 'yes', 'no'),
(20, 'laila', 'ahmed', 'Female', 'doctor', 'Married', 'laila@gmail.com', 'nothing', 'A-', '2023-06-20', 1012144796, 1349463697, '3rd settlement, new cairo', 123, '6.jpeg', 'yes', 'yes', 'no'),
(22, 'mayoura', 'oweys', 'Female', 'student', 'Single', 'mayoura@gmail.com', 'nothing', 'B-', '2023-06-22', 1012141536, 1458796325, '3rd settlement, new cairo', 123, '7.jpg', 'yess', 'yes', 'no'),
(23, 'Mayaar', 'Oweys', 'Female', '01012144796', 'Single', 'mayaroweys@gmail.com', 'nothing', 'A-', '2023-05-29', 1012144796, 1017133062, '3rd district', 123, '7.jpg', 'no', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `personal_hostory`
--

CREATE TABLE `personal_hostory` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `caffaien` varchar(255) DEFAULT NULL,
  `smoking` varchar(255) DEFAULT NULL,
  `current_medicine` varchar(255) DEFAULT NULL,
  `suffers` varchar(255) DEFAULT NULL,
  `alcohol` varchar(255) DEFAULT NULL,
  `cigarettes_quantity` int(11) DEFAULT NULL,
  `cigarettes_packes_quantity` int(11) DEFAULT NULL,
  `allergies` varchar(255) DEFAULT NULL,
  `prseditor` varchar(255) DEFAULT NULL,
  `prsdate_of_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_hostory`
--

INSERT INTO `personal_hostory` (`id`, `medical_profile_id`, `height`, `weight`, `caffaien`, `smoking`, `current_medicine`, `suffers`, `alcohol`, `cigarettes_quantity`, `cigarettes_packes_quantity`, `allergies`, `prseditor`, `prsdate_of_edit`) VALUES
(17, 18, 150, 70, 'No', 'No', 'panadol', 'Nothing', 'no', 1, 1, 'no', 'HazemElgendy', '2023-06-19'),
(18, 19, 160, 60, 'Yes', 'No', 'nothing', 'no diseases', 'no', 0, 0, 'nothing', 'lailaahmed', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phphone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `blocked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `name`, `address`, `phphone`, `email`, `password`, `image`, `blocked`) VALUES
(2, 'El-Ezaby', '23 - 3rd district - 6th of october city - Giza', 258, 'elezaby@gmail.com', 123, 'ezab.png', 'no'),
(6, 'Seif Pharmacies', 'new cairo', 11256, 'seif@gmail.com', 123, 'seif.jpeg', 'no'),
(7, 'Misr Pharmacies', 'new cairo', 1012144796, 'misr@gmail.com', 123, '9.jpg', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `surgical_history`
--

CREATE TABLE `surgical_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `date_of_procedure` varchar(255) DEFAULT NULL,
  `surgery_type` varchar(255) DEFAULT NULL,
  `surgeon` varchar(255) DEFAULT NULL,
  `medication_prescribed` varchar(255) DEFAULT NULL,
  `rehabilitation` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `type2` varchar(255) DEFAULT NULL,
  `surgeon2` varchar(255) DEFAULT NULL,
  `medicine2` varchar(255) DEFAULT NULL,
  `rbt2` varchar(255) DEFAULT NULL,
  `date3` varchar(255) DEFAULT NULL,
  `type3` varchar(255) DEFAULT NULL,
  `surgeon3` varchar(255) DEFAULT NULL,
  `medicine3` varchar(255) DEFAULT NULL,
  `rbt3` varchar(255) DEFAULT NULL,
  `date4` varchar(255) DEFAULT NULL,
  `type4` varchar(255) DEFAULT NULL,
  `surgeon4` varchar(255) DEFAULT NULL,
  `medicine4` varchar(255) DEFAULT NULL,
  `rbt4` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `sdate_of_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surgical_history`
--

INSERT INTO `surgical_history` (`id`, `medical_profile_id`, `date_of_procedure`, `surgery_type`, `surgeon`, `medication_prescribed`, `rehabilitation`, `date2`, `type2`, `surgeon2`, `medicine2`, `rbt2`, `date3`, `type3`, `surgeon3`, `medicine3`, `rbt3`, `date4`, `type4`, `surgeon4`, `medicine4`, `rbt4`, `editor`, `sdate_of_edit`) VALUES
(11, 18, '2023-06-28', 'no surgeries', 'dr', 'medicine', 'rbt', '2023-06-20', 'b', 'qeff', 'evw', 'wf', '2023-06-29', 'evsdvd', 'sdvdv', 'dvwr', 'wevgrymtu', '2023-06-27', 'kmlhuo[b', 'tnrtyj', '7jty', 'tyjj', '18', '2023-06-19'),
(12, 19, '', 'no surgeries', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20', '2023-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clinical_history`
--
ALTER TABLE `clinical_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_profile_id` (`medical_profile_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_profile_id` (`medical_profile_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `family_history`
--
ALTER TABLE `family_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_profile_id` (`medical_profile_id`);

--
-- Indexes for table `finished_orders`
--
ALTER TABLE `finished_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_of_pending` (`id_of_pending`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `medical_profile`
--
ALTER TABLE `medical_profile`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_of_order`),
  ADD KEY `pharmacy_id` (`pharmacy_id`),
  ADD KEY `ord_id` (`ord_id`),
  ADD KEY `patient_id` (`opatient_id`);

--
-- Indexes for table `past_history`
--
ALTER TABLE `past_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_profile_id` (`medical_profile_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_profile_id` (`medical_profile_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgical_history`
--
ALTER TABLE `surgical_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_profile_id` (`medical_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinical_history`
--
ALTER TABLE `clinical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `finished_orders`
--
ALTER TABLE `finished_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `medical_profile`
--
ALTER TABLE `medical_profile`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_of_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `past_history`
--
ALTER TABLE `past_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surgical_history`
--
ALTER TABLE `surgical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clinical_history`
--
ALTER TABLE `clinical_history`
  ADD CONSTRAINT `clinical_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`m_id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  ADD CONSTRAINT `doctor_diagnosis_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_diagnosis_ibfk_2` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`m_id`);

--
-- Constraints for table `family_history`
--
ALTER TABLE `family_history`
  ADD CONSTRAINT `family_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`m_id`) ON DELETE CASCADE;

--
-- Constraints for table `finished_orders`
--
ALTER TABLE `finished_orders`
  ADD CONSTRAINT `finished_orders_ibfk_1` FOREIGN KEY (`id_of_pending`) REFERENCES `orders` (`id_of_order`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`pid`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `medical_profile`
--
ALTER TABLE `medical_profile`
  ADD CONSTRAINT `medical_profile_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacy` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ord_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_7` FOREIGN KEY (`opatient_id`) REFERENCES `patient` (`pid`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `past_history`
--
ALTER TABLE `past_history`
  ADD CONSTRAINT `past_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`m_id`) ON DELETE CASCADE;

--
-- Constraints for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  ADD CONSTRAINT `personal_hostory_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`m_id`) ON DELETE CASCADE;

--
-- Constraints for table `surgical_history`
--
ALTER TABLE `surgical_history`
  ADD CONSTRAINT `surgical_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`m_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

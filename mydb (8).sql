-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 10:56 AM
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
  `medical_profile_id` int(11) NOT NULL,
  `files` mediumtext NOT NULL,
  `editor` varchar(255) NOT NULL,
  `cdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinical_history`
--

INSERT INTO `clinical_history` (`id`, `medical_profile_id`, `files`, `editor`, `cdate_of_edit`) VALUES
(2, 2, 'empty', 'DR.mohamed', '2023-04-24'),
(4, 5, 'DSS assignmentt.docx', '8', '2023-05-13'),
(6, 10, '', '10', '2023-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `dfirst_name` varchar(255) NOT NULL,
  `dlast_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profession_practice` mediumtext NOT NULL,
  `years_of_exp` int(11) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `doctor_syndicate` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `accepted` varchar(255) NOT NULL,
  `blocked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `dfirst_name`, `dlast_name`, `date_of_birth`, `profession_practice`, `years_of_exp`, `daddress`, `phone`, `doctor_syndicate`, `email`, `specialization`, `password`, `image`, `accepted`, `blocked`) VALUES
(2, 'mayar', 'oweys', '0000-00-00', 'ok', 0, '6th of october city', 0, 'ok', 'doctor@gmail.com', 'ok', 123, '', 'yes', 'yes'),
(3, 'mayoura', 'oweys', '0000-00-00', 'lion bridge.pdf', 22, '6th of october city', 1012144796, '', 'mayar@gmail.com', 'health', 123, '', 'yes', ''),
(5, 'sara', 'ehab', '2023-05-07', 'ok', 11, 'Giza', 112457893, 'ok', 'sara@gmail.com', 'good', 123, '', '', ''),
(6, 'sara', 'ehab', '2023-05-07', 'ok', 11, 'Giza', 112457893, 'ok', 'sara@gmail.com', 'good', 123, '', 'no', ''),
(7, 'mostafa', 'hashim', '2023-06-09', '', 23, 'new cairo', 101254786, '', 'dr@gmail.com', 'good', 123, '', '', ''),
(8, 'mostafa', 'hashim', '2023-06-09', '', 23, 'new cairo', 101254786, '', 'dr@gmail.com', 'good', 123, '', '', ''),
(11, 'Eman', 'Ahmed', '2023-01-09', 'sche.docx', 20, '6th of october', 1012145236, 'student form.docx', 'eman@gmail.com', 'eyes', 258, 'crochet2.jpg', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_diagnosis`
--

CREATE TABLE `doctor_diagnosis` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `dr_fname` varchar(255) DEFAULT NULL,
  `dr_lname` varchar(255) DEFAULT NULL,
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

INSERT INTO `doctor_diagnosis` (`id`, `medical_profile_id`, `doctor_id`, `dr_fname`, `dr_lname`, `doctor_speciality`, `date`, `time`, `weight`, `visit_type`, `observation`, `symptoms`, `diagnosis`, `prescription`) VALUES
(2, 2, 2, '', '', '', '2023-04-24', '14:21:30', 45, 'New', 'Diabetes', 'Many things', 'Diabetes', 'many medicines'),
(9, 2, 2, '', '', 'ok', '0000-00-00', '01:01:00', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) NOT NULL,
  `relative1` varchar(255) NOT NULL,
  `disease1` varchar(255) NOT NULL,
  `relative2` varchar(255) NOT NULL,
  `disease2` varchar(255) NOT NULL,
  `add_info` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `fdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family_history`
--

INSERT INTO `family_history` (`id`, `medical_profile_id`, `relative1`, `disease1`, `relative2`, `disease2`, `add_info`, `editor`, `fdate_of_edit`) VALUES
(2, 2, 'Grandpa', 'Diabetes ', 'Grandma', 'Diabetes', 'Thanks', 'DR.Osama', '2023-04-24'),
(3, 5, 'no', 'no', 'no', 'no', 'thnx', '8', '2023-05-12'),
(6, 10, 'no one', 'no', 'no one', 'no', 'no', '10', '2023-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `finished_orders`
--

CREATE TABLE `finished_orders` (
  `id` int(11) NOT NULL,
  `id_of_pending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finished_orders`
--

INSERT INTO `finished_orders` (`id`, `id_of_pending`) VALUES
(33, 43);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
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

INSERT INTO `images` (`id`, `patient_id`, `patient_address`, `date_of_order`, `time_of_order`, `image`, `activity`, `order_cd`) VALUES
(28, 8, 'shubra', '2023-05-24', '08:18:00', 'crochet1.jpg', 'no', ''),
(29, 11, 'maadi', '2023-05-24', '01:10:00', 'crochet2.jpg', 'no', ''),
(35, 11, '6th of october ', '2023-05-29', '02:12:00', 'seif.jpeg', 'yes', ''),
(36, 8, 'new cairo', '2023-06-13', '11:16:00', '', 'yes', ''),
(37, 8, 'Giza', '2023-06-13', '11:20:00', 'seif.jpeg', 'yes', ''),
(38, 8, '', '2023-06-13', '11:21:00', '', 'yes', ''),
(39, 8, '', '2023-06-13', '11:22:00', '', 'yes', ''),
(40, 10, '6th of october city', '2023-06-13', '11:33:00', 'ezaby.jpeg', 'no', 'Yes'),
(41, 8, 'Giza', '2023-06-13', '11:36:00', 'pexels-eberhard-grossgasteiger-443446.jpg', 'yes', ''),
(42, 8, '6th of october ', '2023-06-13', '11:40:00', 'seif.jpeg', 'yes', 'No'),
(43, 8, 'shubra', '2023-06-13', '11:40:00', 'seif.jpeg', 'yes', '');

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
(2, 4),
(4, 7),
(5, 8),
(6, 8),
(10, 10),
(11, 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_of_order` int(11) NOT NULL,
  `pharmacy_id` int(11) NOT NULL,
  `opatient_id` int(11) NOT NULL,
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
(42, 2, 8, 28, '2023-05-24', '08:18:00', 'shubra', 'crochet1.jpg', 'thanks', '12:16:00', '2023-05-25', 1012154795, '2023-05-24', '11:13:00', 'yes', 0),
(43, 2, 11, 29, '2023-05-24', '01:10:00', 'maadi', 'crochet2.jpg', 'this order is fulfilled completely', '14:15:00', '2023-05-25', 1022512574, '2023-05-24', '01:11:00', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `past_history`
--

CREATE TABLE `past_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) NOT NULL,
  `past_illness` varchar(255) NOT NULL,
  `past_medicine` varchar(255) NOT NULL,
  `past_allergies` varchar(255) NOT NULL,
  `past_habits` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `pdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `past_history`
--

INSERT INTO `past_history` (`id`, `medical_profile_id`, `past_illness`, `past_medicine`, `past_allergies`, `past_habits`, `editor`, `pdate_of_edit`) VALUES
(2, 2, 'Nothing big', 'Ogmanten', 'Gluten', 'Smoking - Alcohol', 'DR.Osama', '2023-04-24'),
(3, 5, 'nothing', 'nothingg', 'nothinggg', 'nothingggg', '8', '2023-05-12'),
(5, 10, '', '', '', '', '10', '2023-05-24');

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
(4, 'mayar', '', '', '', '', '', '', 'b', '0000-00-00', 0, 0, '', 0, '', '', '', 'no'),
(7, 'soha', 'moahmed', 'female', 'student', 'married', 'soha@gmail.com', 'gluten', 'A+', '2023-05-31', 101214516, 136254784, 'Rehab', 123, '', '', '', ''),
(8, 'sara', 'murad', 'Female', 'student', 'Single', 'sarasara@gmail.com', 'no allergies', 'AB+', '2010-10-13', 1012145689, 1326547895, 'menoufeiyah', 123, '', '', '', ''),
(10, 'Mayar', 'Hisham Mohamed', 'Female', 'Teacher', 'Single', 'mayaroweys2000@gmail.com', 'Carbs - Milk', 'A+', '2001-01-01', 1012144796, 1017133062, '6th of october city', 271220, '', 'yes', 'yes', ''),
(11, 'Sarah', 'Ehab', 'Female', 'Business Woman', 'Single', 'sarahehab@gmail.com', 'no allergies', 'AB+', '2023-04-30', 1201456398, 1458796325, '3rd district', 123, '', 'no', 'yes', ''),
(13, 'new', 'one', 'Male', 'dintest', 'Married', 'marketyoura@gmail.com', 'nothing', 'A+', '2023-05-30', 1012144796, 1458796325, '3rd settlement, new cairo', 123, 'hs.jpg', 'no', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `personal_hostory`
--

CREATE TABLE `personal_hostory` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `caffaien` varchar(255) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `current_medicine` varchar(255) NOT NULL,
  `suffers` varchar(255) NOT NULL,
  `alcohol` varchar(255) NOT NULL,
  `cigarettes_quantity` int(11) NOT NULL,
  `cigarettes_packes_quantity` int(11) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `prseditor` varchar(255) NOT NULL,
  `prsdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_hostory`
--

INSERT INTO `personal_hostory` (`id`, `medical_profile_id`, `height`, `weight`, `caffaien`, `smoking`, `current_medicine`, `suffers`, `alcohol`, `cigarettes_quantity`, `cigarettes_packes_quantity`, `allergies`, `prseditor`, `prsdate_of_edit`) VALUES
(2, 2, 120, 255, '', '', '', '', '', 0, 0, '', '', '0000-00-00'),
(5, 4, 160, 60, 'Yes', 'No', 'nothing', 'nothing', 'no', 0, 0, 'gluten', 'sohamoahmed', '2023-05-10'),
(6, 5, 120, 45, 'No', 'No', 'nothing', 'nothing', 'no', 0, 0, 'strawberry', 'saramurad', '2023-05-12'),
(9, 10, 160, 60, 'Yes', 'No', 'nothing', 'nothing', 'no', 0, 0, 'Carbs - Milk', 'MayarHisham Mohamed', '2023-05-24'),
(10, 11, 160, 60, 'No', 'No', 'nothing', 'nothing', 'yes', 0, 0, '1', 'newone', '2023-05-24');

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
(2, 'El-Ezaby', '23 - 3rd district - 6th of october city - Giza', 147, 'elezaby@gmail.com', 123, '', 'no'),
(6, 'Seif Pharmacies', 'new cairo', 11256, 'seif@gmail.com', 123, 'seif.jpeg', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `surgical_history`
--

CREATE TABLE `surgical_history` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) NOT NULL,
  `date_of_procedure` varchar(255) NOT NULL,
  `surgery_type` varchar(255) NOT NULL,
  `surgeon` varchar(255) NOT NULL,
  `medication_prescribed` varchar(255) NOT NULL,
  `rehabilitation` varchar(255) NOT NULL,
  `date2` varchar(255) NOT NULL,
  `type2` varchar(255) NOT NULL,
  `surgeon2` varchar(255) NOT NULL,
  `medicine2` varchar(255) NOT NULL,
  `rbt2` varchar(255) NOT NULL,
  `date3` varchar(255) NOT NULL,
  `type3` varchar(255) NOT NULL,
  `surgeon3` varchar(255) NOT NULL,
  `medicine3` varchar(255) NOT NULL,
  `rbt3` varchar(255) NOT NULL,
  `date4` varchar(255) NOT NULL,
  `type4` varchar(255) NOT NULL,
  `surgeon4` varchar(255) NOT NULL,
  `medicine4` varchar(255) NOT NULL,
  `rbt4` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `sdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surgical_history`
--

INSERT INTO `surgical_history` (`id`, `medical_profile_id`, `date_of_procedure`, `surgery_type`, `surgeon`, `medication_prescribed`, `rehabilitation`, `date2`, `type2`, `surgeon2`, `medicine2`, `rbt2`, `date3`, `type3`, `surgeon3`, `medicine3`, `rbt3`, `date4`, `type4`, `surgeon4`, `medicine4`, `rbt4`, `editor`, `sdate_of_edit`) VALUES
(2, 2, '22/4/2022', 'Normal Surgery', 'Dr. Mohamed Rabea', 'Antibiotics', 'Nothing New', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DR. osama', '2023-04-24'),
(5, 5, '2023-05-25', 'type', 'dr', 'medicine', 'rbt', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8', '2023-05-13'),
(7, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10', '2023-05-24');

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
  ADD KEY `patient_id` (`patient_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finished_orders`
--
ALTER TABLE `finished_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `medical_profile`
--
ALTER TABLE `medical_profile`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_of_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `past_history`
--
ALTER TABLE `past_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surgical_history`
--
ALTER TABLE `surgical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`pid`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`opatient_id`) REFERENCES `patient` (`pid`) ON DELETE CASCADE;

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

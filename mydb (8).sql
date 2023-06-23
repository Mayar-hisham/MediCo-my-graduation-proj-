-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 12:06 PM
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
(16, 24, 'cnc.jpeg', '25', '2023-06-22'),
(17, 25, 'cnc.jpeg', '26', '2023-06-22');

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
(18, 'Haytham ', 'El- Sayed', '1980-10-14', 'هيثم.jpg', 20, '123 - Bashayer - 6th of October City', 1013256481, '1.jpg', 'dr.haytham@gmail.com', 'Internist physician - باطنة', 123, 'IMG-20230621-WA0088.jpg', 'yes', 'no'),
(19, 'Hany ', 'Saleh', '1986-07-09', 'هاني.jpg', 35, '124 - Beverly - Hills - Sheikh Zayed City', 102539876, '2.jpg', 'dr.hany@gmail.com', 'Ophthalmologist - عيون', 123, 'IMG-20230621-WA0089.jpg', 'yes', 'no'),
(20, 'Ahmed', 'Fathy', '1990-10-23', 'احمد مجدي.jpg', 30, '2nd district - Building 234 - 6th of October city', 120465389, '3.jpg', 'dr.ahmed@gmail.com', 'Dermatologist - أمراض جلدية', 123, 'IMG-20230621-WA0087.jpg', 'yes', 'no'),
(21, 'Assem', 'Salem', '1990-07-11', 'عاصم.jpg', 15, '10t district - B123 - 6th of October City', 1012365478, '4.jpg', 'dr.assem@gmail.com', 'Neurologist - مخ وأعصاب', 123, 'IMG-20230621-WA0090.jpg', 'yes', 'no'),
(22, 'Ahmed', 'Hussein', '1982-07-07', 'احمد حسين.jpg', 20, '5th district - B345 - 6th of October City', 1236547896, '5.jpg', 'dr.ahussein@gmail.com', 'Pediatrician - أطفال', 123, 'IMG-20230621-WA0074.jpg', 'yes', 'no'),
(23, 'Kamal', 'Samir', '1970-02-03', 'كمال.jpg', 33, '3rd district - B564 - Sheikh Zayed City', 1013654789, '6.jpg', 'dr.kamal@gmail.com', 'Surgeon - جراح', 123, 'IMG-20230621-WA0075.jpg', 'yes', 'no'),
(24, 'mayar', 'hisham', '2023-06-15', 'foad.jpg', 20, 'oct', 1014563214, 'care.jpg', 'mayar@gmail.com', 'Ophthalmologist - عيون', 123, 'abdeen.jpg', 'yes', 'no');

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
(15, 24, 18, 'Haytham El- Sayed', 'Internist physician - باطنة', '2023-06-22', '11:14:00', 100, 'Follow-Up', 'Hard to Breath', 'Hard to Breath', 'Breathing issues', 'Breathing Machine'),
(16, 24, 19, 'Hany Saleh', 'Ophthalmologist - عيون', '2023-06-22', '11:30:00', 80, 'New', 'Nothing to worry about', 'No Symptoms', 'Both Eyes Are Ok', 'No Medicine Needed'),
(17, 24, 20, 'AhmedFathy', 'Dermatologist - أمراض جلدية', '2023-06-22', '11:33:00', 110, 'New', 'Nothing Observed', 'None', 'Skin is fine', 'None');

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
(12, 24, 'Father', 'Diabetes', 'Uncle', 'Diabetes', 'I have resistance to Insulin', '25', '2023-06-22'),
(13, 25, 'No Diseased from family', '', '', '', '', '26', '2023-06-22');

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
(36, 60);

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
(57, 29, NULL, '6th of october city - 6th district - Building No.1242 - Apt no. 12', '2023-06-22', '10:28:00', 'pesc.png', 'yes', 'No'),
(58, 28, NULL, '6th of october city - 4th district - Building No.14 - Apt no. 1', '2023-06-22', '10:31:00', 'psc2.jpg', 'no', 'Yes'),
(59, 25, NULL, 'sheikh zayed city - 3rd district - Building No.14 - Apt no. 1', '2023-06-22', '10:32:00', 'prescription3.jpg.crdownload', 'no', 'Yes'),
(60, 26, NULL, 'sheikh zayed city - beverly hills - Building No.14 - Apt no. 1', '2023-06-22', '10:33:00', 'pcs4.jpg', 'yes', 'No');

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
(24, 25),
(25, 26);

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
(59, 12, 28, 58, '2023-06-22', '10:31:00', '6th of october city - 4th district - Building No.14 - Apt no. 1', 'psc2.jpg', 'Your Order is On Way', '11:58:00', '2023-06-28', 1022512574, '2023-06-22', '10:56:00', 'yes', 0),
(60, 9, 25, 59, '2023-06-22', '10:32:00', 'sheikh zayed city - 3rd district - Building No.14 - Apt no. 1', 'prescription3.jpg.crdownload', 'Thanks For Ordering From Us', '11:00:00', '2023-06-24', 1022512574, '2023-06-22', '10:57:00', 'no', 0);

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
(12, 24, 'Nothing but Diabetes', 'No Past Medicine', 'Gluten till now', 'Cigarettes till now', '25', '2023-06-22'),
(13, 25, 'No past illness', 'No past medicine', 'Sugar till now', 'Cigarettes till now', '26', '2023-06-22');

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
(25, 'Ahmed', 'Mohsen', 'Male', 'Data Analyst', 'Married', 'ahmedmohsen@gmail.com', 'Carbs - Milk', 'A+', '1970-07-15', 1014156329, 1014562397, '1254 - 4th district - 6th of October city', 123, '11.jpg', 'yes', 'yes', 'no'),
(26, 'Saleh', 'Fakher', 'Male', 'Dentist', 'Single', 'salehfakher@gmail.com', 'strawberry', 'A-', '1972-06-05', 1015236987, 102547896, '2341 - 5th district - 6th of October city', 123, '12.jpg', 'yes', 'yes', 'no'),
(28, 'Rashed', 'Ahmed', 'Male', 'Engineer', 'Married', 'rashedahmed@gmail.com', 'No Allergies', 'AB-', '1971-07-07', 1045213060, 1236549832, '7658 - 3rd district - Sheikh Zayed city', 123, '14.jpg', 'no', 'yes', 'no'),
(29, 'Mostafa ', 'Dagher', 'Male', 'Freelancer', 'Married', 'mostafadagher@gmail.com', 'Meats', 'B+', '1969-10-13', 1012301014, 1012136541, 'Villa no.1254 - Beverly Hills - Sheikh Zayed City', 123, '15.jpg', 'no', 'no', 'no');

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
(20, 24, 185, 90, 'Yes', 'Yes', 'No Medicine Currently', 'Diabetes', 'no', 10, 2, 'Gluten', 'AhmedMohsen', '2023-06-22'),
(22, 25, 180, 100, 'Yes', 'Yes', 'Breathing Helpers', 'No Chronic Diseases', 'yes', 20, 3, 'Sugar', 'SalehFakher', '2023-06-22');

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
(8, 'Fouad Pharmacies', '23 - 2nd district - 6th of October city', 19011, 'fouad@gmail.com', 123, 'foad.jpg', 'no'),
(9, 'Misr Pharmacies', '50 - 4th district - 6th of October city', 16025, 'misr@gmail.com', 123, 'misr.jpg', 'no'),
(11, 'Care Pharmacies', '5 - 10th district - 6th of October city', 22658, 'care@gmail.com', 123, 'care.jpg', 'no'),
(12, 'El-Ezaby Pharmacies', '7 - 6th district - 6th of October city', 23987, 'elezaby@gmail.com', 123, 'ezaby.jpg', 'no'),
(13, 'Wasfah Pharmacies', '100 - 5th district - 6th of October city', 85496, 'wasfah@gmail.com', 123, 'wasfa.jpg', 'no');

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
(13, 24, '', 'No Past Suregries', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '25', '2023-06-22'),
(14, 25, '', 'No Surgeries', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '26', '2023-06-22');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `finished_orders`
--
ALTER TABLE `finished_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `medical_profile`
--
ALTER TABLE `medical_profile`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_of_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `past_history`
--
ALTER TABLE `past_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `surgical_history`
--
ALTER TABLE `surgical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

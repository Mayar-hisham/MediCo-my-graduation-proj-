-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 11:00 PM
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
(1, 1, 'no', 'doctor', '2023-04-23'),
(2, 2, 'empty', 'DR.mohamed', '2023-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `dfirst_name` varchar(255) NOT NULL,
  `dlast_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `profession_practice` mediumtext NOT NULL,
  `years_of_exp` int(11) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `doctor_syndicate` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `dfirst_name`, `dlast_name`, `age`, `profession_practice`, `years_of_exp`, `daddress`, `phone`, `doctor_syndicate`, `email`, `specialization`, `password`) VALUES
(2, 'mayar', 'oweys', 22, 'ok', 0, '6th of october city', 0, 'ok', 'doctor@gmail.com', 'ok', 123);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_diagnosis`
--

CREATE TABLE `doctor_diagnosis` (
  `id` int(11) NOT NULL,
  `medical_profile_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `dr_fname` varchar(255) NOT NULL,
  `dr_lname` varchar(255) NOT NULL,
  `doctor_speciality` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `weight` int(11) NOT NULL,
  `visit_type` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `prescription` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_diagnosis`
--

INSERT INTO `doctor_diagnosis` (`id`, `medical_profile_id`, `doctor_id`, `dr_fname`, `dr_lname`, `doctor_speciality`, `date`, `time`, `weight`, `visit_type`, `observation`, `symptoms`, `diagnosis`, `prescription`) VALUES
(1, 1, 2, '', '', '', '2023-04-23', '16:51:57', 55, 'follow up', 'nothing new', 'nothing', 'nothing', 'nothing'),
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
(1, 1, 'nothing', '', '', '', 'nothing', 'doctor', '2023-04-23'),
(2, 2, 'Grandpa', 'Diabetes ', 'Grandma', 'Diabetes', 'Thanks', 'DR.Osama', '2023-04-24');

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
  `patient_id` int(11) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `date_of_order` date NOT NULL,
  `time_of_order` time NOT NULL,
  `image` mediumtext NOT NULL,
  `activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `patient_id`, `patient_address`, `date_of_order`, `time_of_order`, `image`, `activity`) VALUES
(5, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '1.jpeg', ''),
(7, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '1.jpeg', ''),
(8, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '1.jpeg', ''),
(9, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '1.jpeg', ''),
(10, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '', ''),
(11, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '', ''),
(12, 2, '0.000068181430548690', '0000-00-00', '00:00:06', '1.jpeg', ''),
(13, 2, '17.439655172413793103', '0000-00-00', '00:00:06', '1.jpeg', ''),
(14, 2, '6th of october ', '0000-00-00', '05:07:00', '2.jpeg', ''),
(15, 2, '6th of october city', '0000-00-00', '05:08:00', '1.jpeg', ''),
(16, 2, 'Giza', '0000-00-00', '05:11:00', '2.jpeg', ''),
(17, 2, 'Giza', '0000-00-00', '05:11:00', '2.jpeg', ''),
(18, 2, 'Giza', '2023-04-29', '05:14:00', '1.jpeg', ''),
(19, 2, 'Giza', '2023-05-01', '10:20:00', '22.png', 'yes'),
(20, 2, 'new cairo', '2023-05-01', '10:27:00', 'app2.png', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `medical_profile`
--

CREATE TABLE `medical_profile` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_profile`
--

INSERT INTO `medical_profile` (`id`, `patient_id`) VALUES
(1, 3),
(2, 4);

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
  `activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_of_order`, `pharmacy_id`, `opatient_id`, `ord_id`, `order_date`, `order_time`, `patient_address`, `prescription`, `message`, `dtime`, `dday`, `dphone`, `date_of_accept`, `time_of_accept`, `activity`) VALUES
(18, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'khui', '01:12:00', '2023-05-02', 1012154795, '0000-00-00', '12:06:00', ''),
(19, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'thanks', '01:15:00', '2023-05-03', 1022512574, '0000-00-00', '12:09:00', ''),
(20, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'this order is fulfilled completely', '01:17:00', '2023-05-03', 1259847632, '0000-00-00', '12:11:00', ''),
(21, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'thanks', '01:26:00', '2023-05-04', 1012154795, '0000-00-00', '12:21:00', ''),
(22, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'hi', '01:28:00', '2023-05-03', 1022512574, '0000-00-00', '12:22:00', ''),
(23, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'hilo', '01:27:00', '2023-05-06', 10225, '0000-00-00', '12:26:00', ''),
(24, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'yarab', '01:39:00', '2023-05-03', 1012144796, '0000-00-00', '12:34:00', ''),
(26, 2, 2, 14, '0000-00-00', '05:07:00', '6th of october ', '2.jpeg', 'hilo', '01:27:00', '2023-05-06', 10225, '0000-00-00', '12:36:00', ''),
(35, 2, 2, 12, '0000-00-00', '00:00:06', '0.000068181430548690', '1.jpeg', 'hiiiiiiiiii', '02:51:00', '2023-06-01', 1259847632, '2023-05-01', '01:46:00', ''),
(36, 2, 2, 17, '0000-00-00', '05:11:00', 'Giza', '2.jpeg', '.nuiguiblj', '02:53:00', '2023-06-07', 1022512574, '2023-05-01', '01:47:00', '');

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
  `past_phobia` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `pdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `past_history`
--

INSERT INTO `past_history` (`id`, `medical_profile_id`, `past_illness`, `past_medicine`, `past_allergies`, `past_habits`, `past_phobia`, `editor`, `pdate_of_edit`) VALUES
(1, 1, 'nothing', 'nothing', 'nothing', 'nothing', 'nothing', 'doctor', '2023-04-23'),
(2, 2, 'Nothing big', 'Ogmanten', 'Gluten', 'Smoking - Alcohol', 'Cats', 'DR.Osama', '2023-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `emergency_contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `first_name`, `last_name`, `gender`, `occupation`, `marital_status`, `email`, `allergies`, `blood_type`, `age`, `phone`, `emergency_contact`, `address`, `password`) VALUES
(2, 'mayar', 'oweys', 'female', '', 'single', 'patient@gmail.com', 'nothing', 'O', 21, 1012144796, 0, '6th of october city', 123),
(3, 'mayar', 'hisham', 'female', '', 'single', 'mayaroweys2000@gmail.com', 'no', 'a', 22, 1012144796, 0, 'october', 258),
(4, 'mayar', '', '', '', '', '', '', 'b', 34, 0, 0, '', 0);

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
(1, 1, 160, 55, 'no', 'no', 'nothing', 'nothing', 'no', 0, 0, 'gluten - some carbs', 'doctor', '2023-04-23'),
(2, 2, 120, 255, '', '', '', '', '', 0, 0, '', '', '0000-00-00');

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
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `name`, `address`, `phphone`, `email`, `password`) VALUES
(2, 'El-Ezaby', '23 - 3rd district - 6th of october city - Giza', 18752, 'elezaby@gmail.com', 123);

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
  `editor` varchar(255) NOT NULL,
  `sdate_of_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surgical_history`
--

INSERT INTO `surgical_history` (`id`, `medical_profile_id`, `date_of_procedure`, `surgery_type`, `surgeon`, `medication_prescribed`, `rehabilitation`, `editor`, `sdate_of_edit`) VALUES
(1, 1, '22-2-2022', 'nothing', 'dr.Osama', 'nothing', 'nothing', 'doctor', '2023-04-23'),
(2, 2, '22/4/2022', 'Normal Surgery', 'Dr. Mohamed Rabea', 'Antibiotics', 'Nothing New', 'DR. osama', '2023-04-24');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `clinical_history`
--
ALTER TABLE `clinical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `finished_orders`
--
ALTER TABLE `finished_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `medical_profile`
--
ALTER TABLE `medical_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_of_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `past_history`
--
ALTER TABLE `past_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surgical_history`
--
ALTER TABLE `surgical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clinical_history`
--
ALTER TABLE `clinical_history`
  ADD CONSTRAINT `clinical_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_diagnosis`
--
ALTER TABLE `doctor_diagnosis`
  ADD CONSTRAINT `doctor_diagnosis_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_diagnosis_ibfk_2` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`id`);

--
-- Constraints for table `family_history`
--
ALTER TABLE `family_history`
  ADD CONSTRAINT `family_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `finished_orders`
--
ALTER TABLE `finished_orders`
  ADD CONSTRAINT `finished_orders_ibfk_1` FOREIGN KEY (`id_of_pending`) REFERENCES `orders` (`id_of_order`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `medical_profile`
--
ALTER TABLE `medical_profile`
  ADD CONSTRAINT `medical_profile_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacy` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`ord_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`opatient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `past_history`
--
ALTER TABLE `past_history`
  ADD CONSTRAINT `past_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personal_hostory`
--
ALTER TABLE `personal_hostory`
  ADD CONSTRAINT `personal_hostory_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surgical_history`
--
ALTER TABLE `surgical_history`
  ADD CONSTRAINT `surgical_history_ibfk_1` FOREIGN KEY (`medical_profile_id`) REFERENCES `medical_profile` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

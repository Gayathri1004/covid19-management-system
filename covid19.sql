-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 06:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_update`
--

CREATE TABLE `admin_update` (
  `u_id` int(11) NOT NULL,
  `nos` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_update`
--

INSERT INTO `admin_update` (`u_id`, `nos`, `date`) VALUES
(1, 184372, '2021-04-14'),
(4, 50000, '2021-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `article_type` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img1` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `article_type`, `title`, `description`, `img1`, `status`) VALUES
(1, 'Blog', 'My covid story -Sanchana', 'I had covid for 1 week and I got really bad body ache. Thank goodness covid didnt get into my lungs. After I was tested positive I was very responsible and careful of not letting my family get covid and also anyone in my neighbourhood. I took tablets like vitamin c supplments and paracetamol. I constantly checked my pulse rate and o2 saturation level and updated my doctor via the covid-19 Managment system. It was very helpful during those times.', 'doc-pat.png', 'active'),
(2, 'Blog', 'What you should do and what you should\'nt', 'I experienced a near death scenario where I got covid infected in my lungs. I was kept in the ICU for 10 days. I realised that the disposal of masks and gloves is most crucial part and has to be taken care of. Wearing it alone won\'t protect you, it\'s how you dispose it. Washing your hands after your disposal is a must. The reason why I am stressing on this fact is that I don\'t want all of those who are reading to be careless and suffer like me.', 'mask_edited.jpg', 'active'),
(3, 'Blog', 'The unexpected turn in my life -Daniel', 'I spent a total of 46 days in the hospital, including more than four weeks in the intensive care unit, after which I was too weak to stand on his own.\r\nA multidisciplinary team’s therapy plan and my own hard work and commitment helped him return home and continue his recovery with my wife.', 'serious.png', 'active'),
(4, 'Blog', 'The day when my son got covid -Maya', 'My son returned from the office like a normal day and showed no symptoms. The next day I lost my sense of smell and taste. Then we went to take a test. Both of us tested positive but he didn\'t show any symptoms I got so shocked. I never knew there are passive asymptomatic patients also. No one should be careless because covid attacks on different people in different ways.', 'son.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `doc_details`
--

CREATE TABLE `doc_details` (
  `book_id` int(11) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `specialisation` varchar(25) NOT NULL,
  `hospital` varchar(25) NOT NULL,
  `pat_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_mobile` int(10) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_details`
--

INSERT INTO `doc_details` (`book_id`, `doc_id`, `d_name`, `d_email`, `specialisation`, `hospital`, `pat_id`, `p_name`, `p_mobile`, `p_email`, `p_address`, `date`, `time`) VALUES
(2, 3, 'Suresh', 'sur@gmail.com', 'Pediatrician', 'Ramakrishna', 1, ' Gayathri B', 2147483647, 'gayabala2000@gmail.com', ' Peelamedu', '2021-04-23', '16:00:00'),
(5, 4, 'Ramesh', 'ram@gmail.com', 'General Physician', 'Ramakrishna', 1, ' Gayathri B', 2147483647, 'gayabala2000@gmail.com', ' Peelamedu', '2021-04-24', '12:00:00'),
(6, 1, 'Shalini', 'shals@gmail.com', 'Pulmonologist', 'kmch', 15, 'Ganga', 557623452, 'gangs@gmail.com', 'Ganapathy', '2021-04-05', '15:00:00'),
(7, 1, 'Shalini', 'shals@gmail.com', 'Pulmonologist', 'kmch', 16, 'Sri', 7637835, 'sri@gmail.com', 'Ondipudur', '2021-03-24', '11:00:00'),
(8, 3, 'Suresh', 'sur@gmail.com', 'Pediatrician', 'Ramakrishna', 1, ' Gayathri B', 2147483647, 'gayabala2000@gmail.com', ' Peelamedu', '2021-04-16', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doc_reg`
--

CREATE TABLE `doc_reg` (
  `doc_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Specialisation` text NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `time_slot1` time NOT NULL,
  `time_slot2` time NOT NULL,
  `time_slot3` time NOT NULL,
  `time_slot4` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_reg`
--

INSERT INTO `doc_reg` (`doc_id`, `name`, `username`, `password`, `Specialisation`, `hospital`, `place`, `time_slot1`, `time_slot2`, `time_slot3`, `time_slot4`) VALUES
(1, 'Shalini', 'shals@gmail.com', '1234', 'Pulmonologist', 'kmch', 'Coimbatore', '10:00:00', '11:00:00', '15:00:00', '18:00:00'),
(3, 'Suresh', 'sur@gmail.com', '1234', 'Pediatrician', 'Ramakrishna', 'Coimbatore', '11:00:00', '12:00:00', '16:00:00', '19:00:00'),
(4, 'Ramesh', 'ram@gmail.com', '1234', 'General Physician', 'Ramakrishna', 'Coimbatore', '09:00:00', '11:00:00', '12:00:00', '14:00:00'),
(5, 'Janani', 'jan@gmail.com', '1234', 'Pulmonologist', 'GKNMH', 'Coimbatore', '08:00:00', '10:00:00', '11:00:00', '12:00:00'),
(6, 'Shilpa', 'shilps@gmail.com', '1234', 'General Physician', 'Global', 'Coimbatore', '09:00:00', '12:00:00', '14:00:00', '16:00:00'),
(7, 'shanthi', 'san@gmail.com', '1234', 'General Physician', 'Global', 'Coimbatore', '10:00:00', '11:00:00', '13:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `health_status_in`
--

CREATE TABLE `health_status_in` (
  `h_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `medi` varchar(100) NOT NULL,
  `comor` varchar(100) NOT NULL,
  `doubts` varchar(500) NOT NULL,
  `doc_comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_status_in`
--

INSERT INTO `health_status_in` (`h_id`, `pat_id`, `date`, `medi`, `comor`, `doubts`, `doc_comments`) VALUES
(1, 15, '2021-04-06', ' Paracetamol -2 Daily dose', 'Asthma', 'I want to know if i can eat my normal diet', 'hey'),
(2, 16, '2021-04-03', 'Vitamin D :1 daily dose, paracetamol -2 Daily dose', 'I have diabetes', 'I want to know if I show practise breathing exercise using respirometer doc.', 'yes you can use respirometer'),
(3, 15, '2021-03-18', 'Multivitamin tablets, zinc, vitD plus paracetamol', 'None', 'I\'m having severe body pain since morning', NULL),
(4, 18, '2021-04-08', 'Zinc 10ml, multivitamin, blood thinner', 'Diabetes and heart patient', 'I want to know if I can eat stop eating paracetamol', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `health_status_out`
--

CREATE TABLE `health_status_out` (
  `h_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `body_temp` varchar(10) NOT NULL,
  `o2` varchar(10) NOT NULL,
  `pulse_rate` varchar(10) NOT NULL,
  `body_pain` varchar(50) NOT NULL,
  `cough_cold` varchar(50) NOT NULL,
  `smell_taste` varchar(50) NOT NULL,
  `breath` varchar(50) NOT NULL,
  `comorbities` varchar(100) NOT NULL,
  `doubts` varchar(500) NOT NULL,
  `doc_comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_status_out`
--

INSERT INTO `health_status_out` (`h_id`, `pat_id`, `date`, `body_temp`, `o2`, `pulse_rate`, `body_pain`, `cough_cold`, `smell_taste`, `breath`, `comorbities`, `doubts`, `doc_comments`) VALUES
(1, 1, '2021-04-04', '99', '98', '88', 'slight pain in joints', 'yes', 'smell yes, taste no', 'yes', 'type2 diabetes', 'Should inhale steam?', NULL),
(9, 1, '2021-04-03', '98', '97', '88', 'nil', 'nil', 'yes', 'yes', 'type2 diabetes', 'Is it right to take vit D with milk?', 'Hey sure ask me anything'),
(10, 14, '2021-04-16', '98', '97', '88', 'very severe', 'Dry cough and congested nose', 'smell yes, taste no', 'yes', 'type1 diabetes', 'I want to know if I show practise breathing exercise using respirometer doc.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_reg`
--

CREATE TABLE `patient_reg` (
  `pat_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `age` int(2) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `p_type` text DEFAULT NULL,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_reg`
--

INSERT INTO `patient_reg` (`pat_id`, `name`, `gender`, `age`, `mobile_no`, `address`, `city`, `username`, `password`, `p_type`, `date_in`, `date_out`) VALUES
(1, 'Gayathri B', 'Female', 20, 2147483647, 'Peelamedu', 'Coimbatore', 'gayabala2000@gmail.com', 'gags', 'Out', '2021-03-29', '2021-04-05'),
(14, 'Lilly', 'Female', 40, 2593144, 'Ganapathy', 'Coimbatore', 'lilly@gmail.com', 'lils123', 'Out', NULL, NULL),
(15, 'Ganga', 'Female', 40, 557623452, 'Ganapathy', 'Coimbatore', 'gangs@gmail.com', 'gangs', 'In', '2021-04-02', '2021-04-23'),
(16, 'Sri', 'Male', 29, 7637835, 'Ondipudur', 'Coimbatore', 'sri@gmail.com', 'sri', 'In', '2021-03-01', '2021-04-15'),
(18, 'Nikki', '', 28, 99817222, 'Hopes', 'Coimbatore', 'nikki@gmail.com', '1234', 'In', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_update`
--
ALTER TABLE `admin_update`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `doc_details`
--
ALTER TABLE `doc_details`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `fk4` (`doc_id`),
  ADD KEY `fk5` (`pat_id`);

--
-- Indexes for table `doc_reg`
--
ALTER TABLE `doc_reg`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `health_status_in`
--
ALTER TABLE `health_status_in`
  ADD UNIQUE KEY `h_id` (`h_id`),
  ADD KEY `fk3` (`pat_id`);

--
-- Indexes for table `health_status_out`
--
ALTER TABLE `health_status_out`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `fk2` (`pat_id`);

--
-- Indexes for table `patient_reg`
--
ALTER TABLE `patient_reg`
  ADD PRIMARY KEY (`pat_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_update`
--
ALTER TABLE `admin_update`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doc_details`
--
ALTER TABLE `doc_details`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doc_reg`
--
ALTER TABLE `doc_reg`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `health_status_in`
--
ALTER TABLE `health_status_in`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `health_status_out`
--
ALTER TABLE `health_status_out`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_reg`
--
ALTER TABLE `patient_reg`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_details`
--
ALTER TABLE `doc_details`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`doc_id`) REFERENCES `doc_reg` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk5` FOREIGN KEY (`pat_id`) REFERENCES `patient_reg` (`pat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `health_status_in`
--
ALTER TABLE `health_status_in`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`pat_id`) REFERENCES `patient_reg` (`pat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `health_status_out`
--
ALTER TABLE `health_status_out`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`pat_id`) REFERENCES `patient_reg` (`pat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

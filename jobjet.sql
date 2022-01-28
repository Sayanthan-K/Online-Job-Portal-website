-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 10:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobjet`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `employee_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`employee_id`, `job_id`) VALUES
(1, 7),
(1, 8),
(1, 11),
(2, 9),
(3, 9),
(4, 7),
(4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(20) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `profile_image` varchar(30) DEFAULT NULL,
  `mobile_number` int(10) NOT NULL,
  `resume` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `father_name`, `gender`, `mail`, `password`, `address`, `date_of_birth`, `profile_image`, `mobile_number`, `resume`) VALUES
(1, 'kumar', 'karan', 'male', 'kumar@gmail.com', 'as', 'kolkatta', '1998-10-06', 'user1.png', 778864732, ''),
(2, 'kabil', 'kajamuhan', 'male', 'kabil07@gmail.com', 'kabila#07', 'karaveddy', '1999-07-17', 'user1.png', 884437364, ''),
(3, 'kamal', 'pathirajan', 'male', 'kamalhashan@gmail.com', 'gowthamy@12', 'pointpedro', '1999-08-07', 'user1.png', 776453627, ''),
(4, 'nithiya', 'sundaram', 'femake', 'nithiyasunda@gmail.com', 'nithiyasayan', 'colombo', '2000-09-09', 'user1.png', 212284637, ''),
(5, 'lavaniya', 'logesh', 'female', 'lavaniya@gmail.com', 'hilava@45', 'jaffna', '1999-08-31', 'user1.png', 786452336, '');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `ceo_name` varchar(20) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `profile_image` varchar(30) DEFAULT NULL,
  `mobile_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`company_id`, `company_name`, `ceo_name`, `location`, `email`, `password`, `profile_image`, `mobile_number`) VALUES
(1, 'wso2', 'thilina', 'kolpitya', 'wso2@gmail.com', 'as', 'user1.png', 778862172),
(2, 'AIA', 'nayga', 'malabe', 'AIAinfo@yahoo.com', 'AIA@123s', 'user1.png', 775521627),
(3, 'infosys', 'kalam', 'galle', 'infosys@gmail.com', 'infosys#123', 'user1.png', 786634252),
(4, 'softlogic', 'saran', 'kandy', 'softlogic@gmail.com', 'softlogic$A!', 'user1.png', 994488326),
(5, 'docmobile', 'kazun', 'trinco', 'docMobile@gmail.com', 'kazun@us', 'user1.png', 774437283),
(6, 'nolimit', 'abaya', 'wellawatha', 'nolimit.image@gmail.com', 'nolimit@01', 'user1.png', 212262333);

-- --------------------------------------------------------

--
-- Table structure for table `favorite_job`
--

CREATE TABLE `favorite_job` (
  `employee_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite_job`
--

INSERT INTO `favorite_job` (`employee_id`, `job_id`) VALUES
(1, 7),
(1, 8),
(1, 10),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `employee_id`, `employer_id`, `message`) VALUES
(1, 1, NULL, 'usefull website'),
(2, 2, NULL, 'abc company profile is fake'),
(3, NULL, 3, 'usefull site'),
(4, 3, NULL, 'there is a bug in registration'),
(5, NULL, 4, 'great idea'),
(6, NULL, 5, 'need more features');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `interview_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_venue` varchar(50) DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`interview_id`, `employee_id`, `employer_id`, `interview_date`, `interview_venue`, `job_id`, `notes`) VALUES
(7, 5, 4, '2020-10-20', 'colombo branch', 7, 'bring your cv'),
(8, 1, 1, '2020-09-20', 'kandy branch', 8, 'be on time'),
(9, 2, 1, '2020-10-24', 'jaffna branch', 9, 'come with resume'),
(10, 2, 2, '2020-07-28', 'main hall', 10, 'be on time'),
(11, 3, 2, '2020-06-09', 'haluthura', 11, 'bring your nic '),
(12, 4, 3, '2020-07-21', 'galle', 12, 'nothing'),
(15, 4, 1, '2020-10-17', 'alvai', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(30) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `job_type` varchar(20) DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `location`, `job_type`, `posted_date`, `due_date`, `experience`, `qualification`, `gender`, `salary`, `company_id`) VALUES
(7, 'computer analysis', 'kolptiya', 'part time', '2020-10-25', '2021-01-02', 1, 'degree in it', 'Female', 4900, 1),
(8, 'manager', 'uva', 'permanent', '2020-05-06', '2020-09-08', 0, 'management studies', 'both', 40000, 2),
(9, 'programmer', 'jaffna', 'permanent', '2020-05-05', '2020-08-08', 2, 'degree', 'both', 50000, 3),
(10, 'sales person', 'colombo', 'part time', '2020-07-07', '2020-09-09', 0, 'no', 'both', 20000, 4),
(11, 'watch man', 'galle', 'permanent', '2020-09-21', '2020-02-28', 0, 'know english', 'male', 25000, 5),
(12, 'cleaner', 'kandy', 'trainee', '2020-03-03', '2020-05-04', 0, 'know sinhalam', 'male', 20000, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD PRIMARY KEY (`employee_id`,`job_id`),
  ADD KEY `applied_key` (`job_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `favorite_job`
--
ALTER TABLE `favorite_job`
  ADD PRIMARY KEY (`employee_id`,`job_id`),
  ADD KEY `favorite_key` (`job_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `feedback_key1` (`employee_id`),
  ADD KEY `feedback_key2` (`employer_id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`interview_id`),
  ADD KEY `interview_key1` (`employee_id`),
  ADD KEY `interview_key2` (`employer_id`),
  ADD KEY `fk_employeeqqqqqsssaa` (`job_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_key2` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `interview_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD CONSTRAINT `applied_key` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applied_key1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `applied_key2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`),
  ADD CONSTRAINT `fk_employ` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_employeeqqqqq` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE;

--
-- Constraints for table `favorite_job`
--
ALTER TABLE `favorite_job`
  ADD CONSTRAINT `favorite_key` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_key1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `favorite_key2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`),
  ADD CONSTRAINT `fk_emplo` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_employeeqqqqqsss` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_key1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `feedback_key2` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`company_id`);

--
-- Constraints for table `interview`
--
ALTER TABLE `interview`
  ADD CONSTRAINT `fk_empl` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_employeeqqqqqsssaa` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `interview_key1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `interview_key2` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`company_id`),
  ADD CONSTRAINT `interview_key3` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_key2` FOREIGN KEY (`company_id`) REFERENCES `employer` (`company_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 07:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic practical training`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_page`
--

CREATE TABLE `admin_page` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_page`
--

INSERT INTO `admin_page` (`id`, `username`, `password`) VALUES
(1, '0558915', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `The_Course` varchar(512) NOT NULL,
  `Training_method` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Training_type` varchar(256) NOT NULL,
  `Certificates` varchar(256) NOT NULL,
  `programming_languages` varchar(256) DEFAULT NULL,
  `imagename` varchar(25) NOT NULL,
  `Exfile` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `The_Course`, `Training_method`, `Location`, `Training_type`, `Certificates`, `programming_languages`, `imagename`, `Exfile`) VALUES
(1, 'Clever Mind POB', 'Web Developer,\r\nMobile Application(android,IOS),\r\nQA and PM', 'Online', 'JO, 11181, Al-Sha\'b St, Amman', 'course', '1-Theoretical course certificate\r\n2-Training Experience Certificate\r\n3-Certificate of Thanks and Appreciation', 'html,css,Js,jquery,php,mysql,swift', 'icon1', 'png'),
(2, 'Tuned Applications', 'Java,android,python,Oracle,cyber security,asp net mvc,Flutter,QA', 'offline(in company)', 'Al Shakhshir Complex, Al Shaheed St 21, Amman', 'course', '1-certification degree on pyhton\r\n2-certification degree on java\r\n3-certification degree on android\r\n4-certification degree on oracle\r\n5-certification degree on cyber securtiy\r\n6-certification degree on asp .net mvc\r\n7-certification degree on flutter', 'Java,android,python,Oracle,cyber security,asp .net mvc,Flutter,QA', 'icon2', 'jpg'),
(3, 'OKTech', 'NETWORK basics course,\nCCNA Network Design and Management Course,\nMCSA Server Systems and Management Course,\nMICROSOFT EXCHANGING SERVER 2012 Course,\nComputer maintenance, software + hardware course,\nCCNA Network Design and Management Course,\nCCNA+ SECURITY . Network Security and Protection Course,\nKALI LINUX Penetration Testing Systems Course,\nCEH Ethical Penetration Testing Course', 'offline(in company)', 'Jordan University Street - Patrol Signal - Jamal Awad Al-Awamleh Complex - Fifth Floor', 'course', 'Issuing accredited certificates from Al-Balqa Applied University and the Ministry of Education and Higher Education,\r\nThe student obtains a certificate of attendance from the company equivalent to one year of experience in the labor market,\r\nAssisting the ', 'CCNA,SECURITY,KALI LINUX,CEH,CCNP', 'icon3', 'png'),
(4, 'Ayyash', 'Cyber security', 'offline', 'Gaza/Palestine', 'Company', ' Cyber security certificate', 'Cyber security', 'image2', 'jpg'),
(5, 'Mohammad ', 'Web Developer, Mobile Application', 'offline', 'amman/jordan', 'course', 'Web Developer certificate, Mobile Application certificate', 'Java,python', 'image0', 'jpg'),
(6, 'Ali', 'Web Developer, Mobile Application, Oracle', 'online', 'amman/jordan', 'course', 'Web Developer certificate, Mobile Application certificate, Oracle certificate', 'Java', 'image0', 'jpg'),
(7, 'Ahmmad', 'Web Developer, Mobile Application, Oracle, Java', 'offline', 'Amman', 'course', 'Web Developer certificate, Mobile Application certificate, Oracle certificate, Java certificate', 'Java,c++', 'image0', 'jpg'),
(8, 'Company1', 'java, python', 'offline', 'Amman', 'Company', 'java certificate, python certificate', 'Java,c++', 'image0', 'jpg'),
(9, 'Company2', 'flitter, siwft', 'offline', 'Amman', 'course', 'flitter certificate, swift certificate', 'Java,c++', 'image1', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `companies_databases`
--

CREATE TABLE `companies_databases` (
  `id` int(10) NOT NULL,
  `student_name` varchar(256) NOT NULL,
  `student_id` char(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `specialization` varchar(256) NOT NULL,
  `training_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies_databases`
--

INSERT INTO `companies_databases` (`id`, `student_name`, `student_id`, `email`, `specialization`, `training_type`) VALUES
(1, 'محمد عبد الحكيم توفيق عبدالله', '3180605071', '3180605071@std.wise.edu.jo', 'هندسة برمجيات', 'full stack web');

-- --------------------------------------------------------

--
-- Table structure for table `companies_offers`
--

CREATE TABLE `companies_offers` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `The_Course` varchar(512) NOT NULL,
  `Training_method` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Training_type` varchar(256) NOT NULL,
  `Certificates` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `imagename` varchar(25) NOT NULL,
  `Exfile` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies_offers`
--

INSERT INTO `companies_offers` (`id`, `name`, `The_Course`, `Training_method`, `Location`, `Training_type`, `Certificates`, `email`, `imagename`, `Exfile`) VALUES
(13, 'Company3', 'c++, c', 'offline', 'Amman', 'course', 'c++ certificate, c certificate', 'company3@gmail.com', 'image7', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` varchar(10) NOT NULL,
  `Fall_name` varchar(256) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Specialization` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Academic_advisor` varchar(256) NOT NULL,
  `The_number_of_hours_spent` int(5) NOT NULL,
  `Degree` varchar(256) NOT NULL,
  `imagename` varchar(256) NOT NULL,
  `Acte` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Fall_name`, `Password`, `Specialization`, `Email`, `Academic_advisor`, `The_number_of_hours_spent`, `Degree`, `imagename`, `Acte`) VALUES
('3180601046', 'علي اسحاق عبدالرحمن القواسمه', 'UFUH912345', 'علم حاسوب', '3180601046@std.wise.edu.jo', 'صلاح الغيالين', 81, 'بكالوريوس', 'Ali', 'jpg'),
('3180605071', 'محمد عبدالحكيم توفيق عبدالله', 'UFUK921234', 'هندسة برمجيات', '3180605071@std.wise.edu.jo', 'عيسى علي العتوم', 120, 'بكالوريوس', 'Mohammad', 'jpg'),
('3180605099', 'محمد حسن محمود عبدالله', 'UFUG912345', 'أمن شبكات', '3180605099@std.wise.edu.jo', 'اديب السعايدة', 115, 'بكالوريوس', 'thierd_student', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `student_accepted`
--

CREATE TABLE `student_accepted` (
  `id` int(10) NOT NULL,
  `student_name` varchar(256) NOT NULL,
  `student_id` char(10) NOT NULL,
  `Specialization` varchar(256) NOT NULL,
  `Company_name` varchar(256) NOT NULL,
  `pdf_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_accepted`
--

INSERT INTO `student_accepted` (`id`, `student_name`, `student_id`, `Specialization`, `Company_name`, `pdf_name`) VALUES
(1, 'محمد عبدالحكيم توفيق عبدالله', '3180605071', 'هندسة برمجيات ', 'Clever Mind POB', 'محمد عبدالحكيم توفيق عبدالله');

-- --------------------------------------------------------

--
-- Table structure for table `student_in_practical_training`
--

CREATE TABLE `student_in_practical_training` (
  `id` int(11) NOT NULL,
  `fall_name` varchar(256) NOT NULL,
  `id_student` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_in_practical_training`
--

INSERT INTO `student_in_practical_training` (`id`, `fall_name`, `id_student`) VALUES
(1, 'محمد عبدالحكيم توفيق عبدالله', '3180605071');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_page`
--
ALTER TABLE `admin_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `companies_databases`
--
ALTER TABLE `companies_databases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `companies_offers`
--
ALTER TABLE `companies_offers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`),
  ADD UNIQUE KEY `Fall_name` (`Fall_name`);

--
-- Indexes for table `student_accepted`
--
ALTER TABLE `student_accepted`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `student_in_practical_training`
--
ALTER TABLE `student_in_practical_training`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_student` (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_page`
--
ALTER TABLE `admin_page`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `companies_databases`
--
ALTER TABLE `companies_databases`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `companies_offers`
--
ALTER TABLE `companies_offers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_accepted`
--
ALTER TABLE `student_accepted`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `student_in_practical_training`
--
ALTER TABLE `student_in_practical_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

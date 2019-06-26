-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 07:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `password`) VALUES
(1, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptId` int(11) NOT NULL,
  `deptName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptId`, `deptName`) VALUES
(2, 'Cardiologist'),
(3, 'Medicine'),
(4, 'Orthopedics'),
(5, 'Neurology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `deptId` int(3) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `workday` varchar(30) NOT NULL,
  `visiting_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `deptId`, `speciality`, `degree`, `organization`, `workday`, `visiting_time`) VALUES
(1, 'Dr. Raihan', 5, 'Medicine Specialist, Gastroent', 'MBBS', 'Ex Professor & Head of Dept. of Medicine Dhaka Med', 'Friday-Sunday', '13:30:00'),
(2, 'Professor (Dr.) Kaniz Moula', 5, 'Medicine', 'M B B S, F C P S (Medicine), F', 'United Hospital Limited, Gulshan, Ex-Head Departme', 'Friday-Sunday', '16:00:00'),
(3, 'Dr. M. A. Kabir', 5, 'Medicine Specialist & Diabetol', 'M B B S (D.M.C), FCPS (Medicin', 'Sir Salimullah Medical College & Mitford Hospital,', 'Friday-Sunday', '20:30:00'),
(4, 'Dr. Md. Saifur Rahman', 3, 'Pulmonologist & Bronchoscopist', 'M B B S, D T C D, M D (Chest) ', 'National Institute of Chest Disease and Hospital (', 'Saturday, Sunday, Monday, Tues', '08:00:00'),
(5, 'Dr. Nur Nobi', 3, 'Medicine', 'MBBS', 'United Hospital Limited, Gulshan, Ex-Head Departme', 'Friday-Sunday', '19:30:00'),
(6, 'Dr. Hamza', 4, 'Medicine', 'MBBS', 'United Hospital Limited, Gulshan, Ex-Head Departme', 'Friday-Sunday', '18:00:00'),
(7, 'Dr. Siddik', 2, 'Medicine', 'MBBS', 'Ex Professor & Head of Dept. of Medicine Dhaka Med', 'Saturday, Sunday, Monday, Tues', '11:00:00'),
(8, 'Dr. Badsha', 4, 'Medicine', 'MBBS', 'Ex Professor & Head of Dept. of Medicine Dhaka Med', 'Saturday, Sunday, Monday, Tues', '12:00:00'),
(9, 'Dr. Rafik', 2, 'Medicine', 'M B B S, F C P S (Medicine), F', 'Ex Professor & Head of Dept. of Medicine Dhaka Med', 'Friday-Sunday', '12:00:00'),
(11, 'Dr. Muhammad', 2, 'Medicine', 'M B B S, F C P S (Medicine), F', 'Sir Salimullah Medical College & Mitford Hospital,', 'Saturday, Sunday, Monday, Tues', '12:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `id` int(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(5) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `date`, `title`, `description`) VALUES
(1, '2019-03-06', '08 JUN 15 PLATINUM True Digital Radiography & Fluo', 'By the grace of almighty Padma Diagnostic Centre Limited is proud to announce that on May 2015 a new True Digital Radiography & Fluoroscopy X-Ray has been introduced. A french Company called Apelem DM'),
(2, '2019-04-23', '08 JUN 15 Introducing New Toshiba, Alexion Multisl', 'new 16 Slice CT Scan Machine Called Alexion from Toshiba, Japan. Alexion has been developed as the new entry-level multislice CT system for customers who need to perform a wide variety of routine clin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patId` int(11) NOT NULL,
  `patName` varchar(30) NOT NULL,
  `phNum` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `department` int(5) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `appDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patId`, `patName`, `phNum`, `gender`, `email`, `address`, `age`, `department`, `doctor`, `appDate`) VALUES
(1, 'Nur Nobi', 9987665, 'Male', 'jfja@gmail.com', 'dhaka', 21, 2, '11', '2019-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Sid` int(2) NOT NULL,
  `Stitle` varchar(100) NOT NULL,
  `Sdescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Sid`, `Stitle`, `Sdescription`) VALUES
(1, 'Cardiac Imaging Services', 'ECG is used for recording the small electric waves being generated during heart activity, a simple way of diagnosing heart conditions. In Padma Diagnostic Centre Limited we use Nihon Khoden Cardiofax '),
(2, 'Gastroenterology Service', 'Video Endoscopy Using video endoscopy doctor can view your esophagus, stomach and part of your duodenum on a monitor. In PDCL we use Olympus Fiber Optic Endoscope for better view.'),
(3, 'Video Endoscopy Using video endoscopy doctor can view your esophagus, stomach and part of your duode', 'Laboratory services is most essential for proper diagnosis and managment of your health. These are an important way for your physician to determine what is happening on inside your body. The work done'),
(4, 'Pulmonology Service', 'Spirometry Spirometry (meaning of the measuring of breath) is the most common of the PFTS, measuring lung function, specification the measurement of the amount (volume) and/or speed (flow) of air that'),
(5, 'Radiology and Imaging', 'Digital X-Ray At PDCL we are the pioneers in introducing digital x-ray in Bangladesh. The system allows for accurate high resolution x-ray imaging. While reducing patient exposure to radiation elimina'),
(6, 'Urology Services', 'Uroflowmetry Uroflowmetry is a simple, diagnostic screening procedure used to calculate the flow rate of urine over time. The test is noninvasive (the skin is not pierced), and may be used to assess b'),
(7, 'Clinical Neuro Physiology', 'EEG An electroencephalogram (EEG) is a test used to evaluate the electrical activity in the brain. Brain cells communicate with each other through electrical impulses, and an EEG can be used to help d');

-- --------------------------------------------------------

--
-- Table structure for table `slcreate`
--

CREATE TABLE `slcreate` (
  `id` int(11) NOT NULL,
  `doctor_id` int(3) NOT NULL,
  `sdate` date NOT NULL,
  `sl` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slcreate`
--

INSERT INTO `slcreate` (`id`, `doctor_id`, `sdate`, `sl`) VALUES
(1, 11, '2019-05-04', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `slcreate`
--
ALTER TABLE `slcreate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `Sid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slcreate`
--
ALTER TABLE `slcreate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

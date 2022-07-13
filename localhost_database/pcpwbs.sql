-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 13, 2022 at 06:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcpwbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Jason', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2'),
(2, 'Admin', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2'),
(3, 'Ahzan', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2');

-- --------------------------------------------------------

--
-- Table structure for table `classa_bm`
--

CREATE TABLE `classa_bm` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `BM1` int(11) NOT NULL,
  `BM1 Date` date NOT NULL,
  `BM1 Date 2` date NOT NULL,
  `BM1 Date 3` date NOT NULL,
  `BM2` int(11) NOT NULL,
  `BM2 Date` date NOT NULL,
  `BM2 Date 2` date NOT NULL,
  `BM2 Date 3` date NOT NULL,
  `BM3` int(11) NOT NULL,
  `BM3 Date` date NOT NULL,
  `BM3 Date 2` date NOT NULL,
  `BM3 Date 3` date NOT NULL,
  `BM4` int(11) NOT NULL,
  `BM4 Date` date NOT NULL,
  `BM4 Date 2` date NOT NULL,
  `BM4 Date 3` date NOT NULL,
  `BM5` int(11) NOT NULL,
  `BM5 Date` date NOT NULL,
  `BM5 Date 2` date NOT NULL,
  `BM5 Date 3` date NOT NULL,
  `BM6` int(11) NOT NULL,
  `BM6 Date` date NOT NULL,
  `BM6 Date 2` date NOT NULL,
  `BM6 Date 3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classa_pi`
--

CREATE TABLE `classa_pi` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `PI1` int(11) NOT NULL,
  `PI1_Date` date NOT NULL,
  `PI1_Date2` date NOT NULL,
  `PI1_Date3` date NOT NULL,
  `PI2` int(11) NOT NULL,
  `PI2_Date` date NOT NULL,
  `PI2_Date2` date NOT NULL,
  `PI2_Date3` date NOT NULL,
  `PI3` int(11) NOT NULL,
  `PI3_Date` date NOT NULL,
  `PI3_Date2` date NOT NULL,
  `PI3_Date3` date NOT NULL,
  `PI4` int(11) NOT NULL,
  `PI4_Date` date NOT NULL,
  `PI4_Date2` date NOT NULL,
  `PI4_Date3` date NOT NULL,
  `PI5` int(11) NOT NULL,
  `PI5_Date` date NOT NULL,
  `PI5_Date2` date NOT NULL,
  `PI5_Date3` date NOT NULL,
  `PI6` int(11) NOT NULL,
  `PI6_Date` date NOT NULL,
  `PI6_Date2` date NOT NULL,
  `PI6_Date3` date NOT NULL,
  `class_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classa_pi`
--

INSERT INTO `classa_pi` (`StudentId`, `StudentName`, `PI1`, `PI1_Date`, `PI1_Date2`, `PI1_Date3`, `PI2`, `PI2_Date`, `PI2_Date2`, `PI2_Date3`, `PI3`, `PI3_Date`, `PI3_Date2`, `PI3_Date3`, `PI4`, `PI4_Date`, `PI4_Date2`, `PI4_Date3`, `PI5`, `PI5_Date`, `PI5_Date2`, `PI5_Date3`, `PI6`, `PI6_Date`, `PI6_Date2`, `PI6_Date3`, `class_code`) VALUES
(88110001, 'Mohammad Adi bin Daniel', 1, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 1, '2020-01-05', '2020-02-05', '2020-03-05', 1),
(88110001, 'Mohammad Adi bin Daniel', 2, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 0, '0000-00-00', '0000-00-00', '0000-00-00', 2),
(88110001, 'Mohammad Adi bin Daniel', 3, '2020-01-05', '2020-02-05', '2020-03-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 3, '2020-10-05', '2020-11-05', '2020-12-05', 3, '2020-01-05', '2020-02-05', '2020-03-05', 3),
(88110001, 'Mohammad Adi bin Daniel', 1, '2020-01-05', '2020-02-05', '2020-03-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-07-05', '2020-08-05', '2020-09-05', 1, '2020-10-05', '2020-11-05', '2020-12-05', 1, '2020-01-05', '2020-02-05', '2020-03-05', 4),
(88110001, 'Mohammad Adi bin Daniel', 1, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 3, '2020-01-05', '2020-02-05', '2020-03-05', 5),
(88110001, 'Mohammad Adi bin Daniel', 3, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 1, '2020-01-05', '2020-02-05', '2020-03-05', 6),
(88110001, 'Mohammad Adi bin Daniel', 1, '2020-01-05', '2020-02-05', '2020-03-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-07-05', '2020-08-05', '2020-09-05', 1, '2020-10-05', '2020-11-05', '2020-12-05', 1, '2020-01-05', '2020-02-05', '2020-03-05', 7),
(88110001, 'Mohammad Adi bin Daniel', 2, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', '0000-00-00', 8),
(88110001, 'Mohammad Adi bin Daniel', 3, '2020-01-05', '2020-02-05', '2020-03-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 3, '2020-10-05', '2020-11-05', '2020-12-05', 3, '2020-01-05', '2020-02-05', '2020-03-05', 9),
(88110002, 'Mohammad Asri bin Wan Zainuddin', 2, '2020-01-05', '2020-02-05', '2020-03-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-07-05', '2020-08-05', '2020-09-05', 3, '2020-10-05', '2020-11-05', '2020-12-05', 2, '2020-01-05', '2020-02-05', '2020-03-05', 1),
(88110002, 'Mohammad Asri bin Wan Zainuddin', 3, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 0, '0000-00-00', '0000-00-00', '0000-00-00', 2),
(88110003, 'Muhammad Husaini bin Afiq', 3, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 3, '2020-10-05', '2020-11-05', '2020-12-05', 1, '2020-01-05', '2020-02-05', '2020-03-05', 3),
(88110002, 'Mohammad Asri bin Wan Zainuddin', 2, '2020-01-05', '2020-02-05', '2020-03-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 3, '2020-01-05', '2020-02-05', '2020-03-05', 3),
(88110002, 'Mohammad Asri bin Wan Zainuddin', 3, '2020-01-05', '2020-02-05', '2020-03-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-04-05', '2020-05-05', '2020-06-05', 3, '2020-07-05', '2020-08-05', '2020-09-05', 3, '2020-10-05', '2020-11-05', '2020-12-05', 3, '2020-01-05', '2020-02-05', '2020-03-05', 4),
(88110002, 'Mohammad Asri bin Wan Zainuddin', 1, '2020-01-05', '2020-02-05', '2020-03-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-04-05', '2020-05-05', '2020-06-05', 1, '2020-07-05', '2020-08-05', '2020-09-05', 1, '2020-10-05', '2020-11-05', '2020-12-05', 1, '2020-01-05', '2020-02-05', '2020-03-05', 5),
(88110002, 'Mohammad Asri bin Wan Zainuddin', 2, '2020-01-05', '2020-02-05', '2020-03-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-04-05', '2020-05-05', '2020-06-05', 2, '2020-07-05', '2020-08-05', '2020-09-05', 2, '2020-10-05', '2020-11-05', '2020-12-05', 2, '2020-01-05', '2020-02-05', '2020-03-05', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `CreationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `UserName`, `PhoneNumber`, `Email`, `Feedback`, `CreationDate`) VALUES
(1, 'Nur Hjh Zulaika binti M. Iman', '012-8673963', 'lyaakob@varman.com', 'Cikgu, terima kasih. Anak saya cakap arahan yang bagus dan mudah berkomunikasi dengan guru.', '2022-01-30'),
(2, 'Nur Adzlyana Ramdan binti Che Nizar', '012-6184569', 'zuraidi.kawchia@yahoo.com', 'Encik Ali dan Encik Jason adalah guru yang bersemangat yang berusaha keras untuk menjalankan sesi tambahan untuk anak perempuan saya untuk mengukuhkan asasnya.', '2022-02-24'),
(3, 'Noor Qurratu binti Syed Kasim Mutalib', '019-7905544', 'halimatul67@chiew.com', 'Anak perempuan saya mengulas bahawa mereka dapat menjelaskan salah fahamnya kepadanya dengan jelas, dan juga memotivasikan konsep dengan berkesan. Tahap keyakinan anak perempuan saya jelas meningkat selepas menghadiri pusat tuisyen ini.', '2022-03-25'),
(4, 'Laila Darmawi binti Asmuri', '014-8246054', 'janet.sidhu@amsyar.com', 'Encik Ali ialah seorang guru yang suka membantu dan berdedikasi yang sentiasa bersedia untuk tidak menjawab soalan kami sehingga kami memahami konsepnya.', '2022-01-03'),
(5, 'Hjh Umi binti Irfan Isroman', '019-0712547', 'kunanlan.veerasenan@chan.org', 'Encik Ali telah banyak berkorban dan bekerja tanpa mengenal penat lelah terhadap setiap pelajar di pusat tuisyen, Dia sentiasa membimbing dan berkongsi pengalaman dengan kami', '2022-02-21'),
(6, 'Nur Ayuni Daryusman binti Sharum', '013-4069134', 'haniff.edmund@gmail.com', 'Encik Anthony telah menjadi seorang guru yang sangat baik yang memenuhi keperluan setiap pelajar dalam kelasnya. Dia sentiasa menggalakkan kita untuk bertanya banyak soalan dan dengan rela hati menjawab setiap satu tidak kira berapa kali masa yang diperlu', '2022-04-19'),
(7, 'Nur Anissa binti Sharikam ', '0128675493', 'Anissa9905@gmail.com', 'Preschool ini memerlukan lebih banyak ruang untuk murid belajar dan bermain.', '2022-05-24'),
(8, 'Jason', '0161190576', 'shengjiechai@gmail.com', 'I like this kindergarten, but hope the management can add more teachers because there are not enough teachers in the kindergarten.', '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ParentId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `RollId` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `RollID` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Classes` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `ParentPhone` varchar(255) NOT NULL,
  `AdmissionDate` date NOT NULL,
  `BirthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentId`, `StudentName`, `RollID`, `Gender`, `Classes`, `Status`, `ParentPhone`, `AdmissionDate`, `BirthDate`) VALUES
(1, 'Mohammad Adi bin Daniel', '88110001', 'Male', 'Tasneem 6A', 1, '016-4108322', '2020-03-05', '2016-04-16'),
(2, 'Mohammad Asri bin Wan Zainuddin', '88110002', 'Male', 'Tasneem 6A', 1, '016-8863752', '2020-03-05', '2016-01-03'),
(3, 'Muhammad Husaini bin Afiq', '88110003', 'Male', 'Tasneem 6A', 1, '011-1555524', '2020-03-05', '2016-12-16'),
(4, 'Muhammet Syed Shaharudin bin Syed Lukman Zamhari', '88110004', 'Male', 'Tasneem 6A', 1, '011-5395850', '2020-03-05', '2016-11-05'),
(5, 'Muhamed Syed Fikrie Noorhakim', '88110005', 'Male', 'Tasneem 6A', 1, '012-3312806', '2020-03-05', '2016-03-05'),
(6, 'Nur Asnie Halin binti Suzaman', '88110006', 'Female', 'Tasneem 6A', 1, '011-6927137', '2020-03-05', '2016-03-05'),
(7, 'Nuur Hajjah Norsyazwani Zairulaizam binti Ngadun', '88110007', 'Female', 'Tasneem 6A', 1, '016-3498503', '2020-03-05', '2016-03-05'),
(8, 'Hajjah Syuhada Maarof binti Madfaizal Anam', '88110008', 'Female', 'Tasneem 6A', 1, '019-3275721', '2020-03-05', '2016-03-05'),
(9, 'Mohamed Haji Aizuddin Awira bin Firdaus Rosnan', '88110009', 'Male', 'Tasneem 6A', 1, '016-8281113', '2020-03-05', '2016-03-05'),
(10, 'Ariessa Rizwan binti Fuzi', '88110010', 'Female', 'Tasneem 6A', 1, '019-9308503', '2020-03-05', '2016-03-05'),
(11, 'Wardatul binti Nadzeri Daud', '88110011', 'Female', 'Tasneem 6A', 1, '015-3624099', '2020-03-05', '2016-03-05'),
(12, 'Muhammed Hadzir bin Dzulkarnaen', '88110012', 'Male', 'Tasneem 6A', 1, '011-1745921', '2020-03-05', '2016-03-05'),
(13, 'Muhamad Sharul Zulfikri bin Wan Syuraih', '88110013', 'Male', 'Tasneem 6A', 1, '016-7379286', '2020-03-05', '2016-03-05'),
(14, 'Nur Hajjah Atikah Hafizam binti Nik Ashraf Maserun', '88110014', 'Female', 'Tasneem 6A', 1, '019-2463703', '2020-03-05', '2016-03-05'),
(15, 'Nur Nuraina Rostan binti Nik Zaiyon Rizwan', '88110015', 'Female', 'Tasneem 6A', 1, '012-1733221', '2020-03-05', '2016-03-05'),
(16, 'Chai Jie Sheng', '88110016', 'Female', 'Tasneem 6A', 1, '012-4518529', '2020-03-09', '2016-03-05'),
(18, 'abc', '88110099', 'Male', 'Tasneem 6A', 1, '012-4526789', '2020-03-05', '2016-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `RollId` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `code` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `phone`, `email`, `RollId`, `Gender`, `code`) VALUES
(1, 'Zulaika', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Nur Hjh Zulaika', 'binti M. Iman', '012-8673963', 'chai_jie_sheng@soc.uum.edu.my', '88110001', 'Female', 151005),
(2, 'Adzlyana ', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Nur Adzlyana Ramdan', 'Che Nizar', '012-6184569', 'zuraidi.kawchia@yahoo.com', '88110002', 'Female', 0),
(3, 'Qurratu ', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Noor Qurratu', 'Syed Kasim Mutalib', '019-7905544', 'halimatul67@chiew.com', '88110003', 'Female', 0),
(4, 'Darmawi ', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Laila Darmawi', 'Asmuri', '014-8246054', 'janet.sidhu@amsyar.com', '88110004', 'Female', 0),
(5, 'Hjh_Umi', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Hjh Umi', 'Irfan Isroman', '019-0712547', 'kunanlan.veerasenan@chan.or', '88110005', 'Female', 0),
(6, 'Daryusman ', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Nur Ayuni Daryusman', 'Sharum', '013-4069134', 'haniff.edmund@gmail.com', '88110006', 'Female', 0),
(7, 'nashrin', '$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3ATRLI4b8uAJ2', 'Nashrah Sobirin', 'Shamsuddin', '010-8975109', 'kvello@hotmail.com', '88110007', 'Female', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

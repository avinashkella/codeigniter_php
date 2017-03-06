-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 11:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `future`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `book1` varchar(100) NOT NULL,
  `book2` varchar(100) NOT NULL,
  `uni1` varchar(100) NOT NULL,
  `uni2` varchar(100) NOT NULL,
  `uni1_name` varchar(100) NOT NULL,
  `uni2_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `book1`, `book2`, `uni1`, `uni2`, `uni1_name`, `uni2_name`) VALUES
(1, 'AGRICULTURE', 'http://localhost:8080/ci/books/1.jpg', 'http://localhost:8080/ci/books/2.jpg', 'http://localhost:8080/ci/uni/agriculture.jpg', 'http://localhost:8080/ci/uni/Pir Mehr Ali Shah Arid Agriculture University, Rawalpindi.jpg', 'University of Agriculture, Faisalabad', 'Pir Mehr Ali Shah Arid Agriculture University, Rawalpindi');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `img`, `link`, `location`) VALUES
(1, 'University of the Punjab', 'http://localhost:8080/ci/universitylist/university_of_punjab.jpg', 'http://www.4icu.org/reviews/3564.htm', 'Lahore'),
(2, 'Lahore University of Management Sciences', 'http://localhost:8080/ci/universitylist/LUMS.jpg', 'http://www.4icu.org/reviews/3522.htm', 'Lahore'),
(3, 'National University of Sciences and Technology', 'http://localhost:8080/ci/universitylist/NUST.jpg', 'http://www.4icu.org/reviews/3529.htm', 'Islamabad'),
(4, 'Aga Khan University', 'http://localhost:8080/ci/universitylist/AgaKhan.jpeg', 'http://www.4icu.org/reviews/3488.htm', 'Karachi'),
(5, 'COMSATS Institute of Information Technology', 'http://localhost:8080/ci/universitylist/comsat.jpg', 'http://www.4icu.org/reviews/3498.htm', 'Islamabad'),
(6, 'National University of Computer and Emerging Sciences', 'http://localhost:8080/ci/universitylist/FAST.jpg', 'http://www.4icu.org/reviews/3502.htm', 'Islamabad'),
(7, 'Quaid-i-Azam University', 'http://localhost:8080/ci/universitylist/QAU.JPG', 'http://www.4icu.org/reviews/3538.htm', 'Islamabad'),
(8, 'University of Management and Technology', 'http://localhost:8080/ci/universitylist/UMT.jpg', 'http://www.4icu.org/reviews/3558.htm', 'Lahore'),
(9, 'University of Engineering and Technology', 'http://localhost:8080/ci/universitylist/UET.jpg', 'http://www.4icu.org/reviews/3552.htm', 'Lahore'),
(10, 'International Islamic University', 'http://localhost:8080/ci/universitylist/ISU.jpg', 'http://www.4icu.org/reviews/3517.htm', 'Islamabad'),
(11, 'Bahria University', 'http://localhost:8080/ci/universitylist/bahria-university.jpg', 'http://www.4icu.org/reviews/3495.htm', 'Islamabad'),
(12, 'Institute of Business Administration', 'http://localhost:8080/ci/universitylist/IBA.jpg', 'http://www.4icu.org/reviews/3515.htm', 'Karachi'),
(13, 'Ghulam Ishaq Khan Institute of Engineering Sciences and Technology', 'http://localhost:8080/ci/universitylist/GIK.jpg', 'http://www.4icu.org/reviews/3505.htm', 'Topi'),
(14, 'Shaheed Zulfiqar Ali Bhutto Institute of Science and Technology', 'http://localhost:8080/ci/universitylist/SZABIST.png', 'http://www.4icu.org/reviews/3542.htm', 'Karachi'),
(15, 'Bahauddin Zakariya University', 'http://localhost:8080/ci/universitylist/Bhauddin-ZU.png', 'http://www.4icu.org/reviews/3494.htm', 'Multan'),
(16, 'NED University of Engineering and Technology', 'http://localhost:8080/ci/universitylist/NED-University.jpg', 'http://www.4icu.org/reviews/3526.htm', 'Karachi'),
(17, 'The Islamia University of Bahawalpur', 'http://localhost:8080/ci/universitylist/Islamia-University-Bahawalpur.png', 'http://www.4icu.org/reviews/7254.htm', 'Bahawalpur'),
(18, 'Mehran University of Engineering and Technology', 'http://localhost:8080/ci/universitylist/Auditorium-small.JPG', 'http://www.4icu.org/reviews/3524.htm', 'Jamshoro'),
(19, 'University of Central Punjab', 'http://localhost:8080/ci/universitylist/University-of-Central-Punjab.jpg', 'http://www.4icu.org/reviews/10813.htm', 'Lahore'),
(20, 'University of Agriculture', 'http://localhost:8080/ci/universitylist/university_of_agriculture.jpg', 'http://www.4icu.org/reviews/3548.htm', 'Faisalabad'),
(21, 'Government College University', 'http://localhost:8080/ci/universitylist/gc.jpg', 'http://www.4icu.org/reviews/3508.htm', 'Faisalabad'),
(22, 'University of Peshawar', 'http://localhost:8080/ci/universitylist/university_of_peshawar.jpg', 'http://www.4icu.org/reviews/3560.htm', 'Peshawar'),
(23, 'University of Sindh', 'http://localhost:8080/ci/universitylist/university_of_sindh.jpg', 'http://www.4icu.org/reviews/3561.htm', 'Jamshoro'),
(24, 'University of Karachi', 'http://localhost:8080/ci/universitylist/University-of-Karachi.jpg', 'http://www.4icu.org/reviews/3556.htm', 'Karachi'),
(25, 'Riphah International University', 'http://localhost:8080/ci/universitylist/rip.jpg', 'http://www.4icu.org/reviews/9380.htm', 'Islamabad'),
(26, 'Pakistan Institute of Development Economics', 'http://localhost:8080/ci/universitylist/pide.jpg', 'http://www.4icu.org/reviews/9609.htm', 'Islamabad'),
(27, 'University of Health Sciences', 'http://localhost:8080/ci/universitylist/University-of-Health-Sciences.jpg', 'http://www.4icu.org/reviews/7558.htm', 'Lahore'),
(28, 'University of Gujrat', 'http://localhost:8080/ci/universitylist/University-of-Gujrat.jpg', 'http://www.4icu.org/reviews/7564.htm', 'Gujrat'),
(29, 'Government College University', 'http://localhost:8080/ci/universitylist/GC_lahore.jpg', 'http://www.4icu.org/reviews/3509.htm', 'Lahore'),
(30, 'Isra University', 'http://localhost:8080/ci/universitylist/Isra.jpg', 'http://www.4icu.org/reviews/3518.htm', 'Hyderabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

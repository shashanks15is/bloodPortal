-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 05:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(3) NOT NULL,
  `blood_bank` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `blood_bank`, `address`, `phone`) VALUES
(1, 'Bangalore Baptist Hospital', 'Hebbal, Bangalore, Karnataka	', '23330322 / 23330323'),
(2, 'Bangalore Hospital	', '202, Rashtriya Vidyalaya road, Basavanagudi,Bangalore - 560 004	', '26562753 / 26565494'),
(3, 'Aster CMI Hospital', 'New Airport Road, NH.7, Sahakara Nagar, Bengaluru', '080 4342 0100'),
(4, 'Colombia Asia Hospital', 'Airport road,Hebbal,bangalore', '088-987456'),
(5, 'M S Ramaiah Hospital', 'New bel road,MS Ramaiah Nagar,Mathikerre,Bangalore', '088-254256,088-236214'),
(6, 'Bhagwan Mahaveer Jain Hospital', 'Vasanth Nagar, Bengaluru, Karnataka	', '22207640 / 22207649'),
(7, 'Jeeva Voluntary Blood Bank & Diagnotic Centre', '7, 2nd Main, Chamarajapet, Bangalore, 560018', '26500736'),
(8, 'Rashtrothana Blood Bank', '1/2, Keshav Shilpa Kempa Gowda Nagar Charmarajpet, Bengaluru, Karnataka 560019', '26612730'),
(9, 'Vanivilas Hospital	', 'New Tharagupet, Chamarajpet, Bengaluru, Karnataka	', '26705206'),
(10, 'M S General Hospital', 'Malleshwaram main road,K G road, Bangalore', '9856325417'),
(11, 'Raja Rajeswari College and Hospital Bllod Bank', 'No.202, Kambipura, Mysore Road', '2843 7888/ 2929 2929'),
(12, 'Ramakrishna Hospital', 'No.1120/F-58 B, 1st Main, Jhansi Laxmi Bai Road, Vidyaranyapuram, Mysore - 570008, Near Cent Meries', '9620232405'),
(13, 'Kamakshi Hospital', 'No.10, Kuvempunagar, Mysore - 570023', '9845642981'),
(14, 'Belli Blood Bank', '3rd Cross, Gandhi Nagar, Tumkur - 572101, Behind Jain Medicals and Opposite Government Hospital ', '9743499991'),
(15, 'Sanjeevini Blood Bank', 'Prasanna Chaitra, 3rd Main, Vidyanagar, Tumkur - 572102, Near Water Tank Behind Manjunatha Choultry', '9880607709'),
(16, 'Rotary Blood Bank', 'Germany Hospital Premises, Kelagiri Main Road, Kelgeri, Dharwad - 580007', '8362746123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

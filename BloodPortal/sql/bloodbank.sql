-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 05:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pwd`) VALUES
(1, 'shashank', '123456'),
(2, 'varun', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(3) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `age`, `blood`, `gender`, `phone`, `email`, `state`, `district`, `location`, `address`) VALUES
(1, 'Shashaank S', '21', 'B+', 'male', '9731870504', 'shashaank.birava@gmail.com', 'Karnataka', 'Bangalore', 'Yelahanka', 'Ananthapura'),
(2, 'Varun Raju', '19', 'B+', 'male', '7204404966', 'varunraj@gamil.com', 'Karnataka', 'Bangalore', 'Kodegehalli', 'Hebbal'),
(3, 'Harish sk', '20', 'A+ ', 'male', '9731308386', 'harishsk023@gmail.com', 'Karnataka', 'Bangalore', 'Yelhanka', 'Nes'),
(4, 'Somen panda', '21', 'A-', 'male', '8123456789', 'somenpanda@gmail.com', 'Karnataka', 'Bangalore', 'Yelhanka', 'Crpf'),
(5, 'Anurag', '21', 'AB+', 'male', '973841413442', 'anurag@gmail.com', 'Karnataka', 'Bangalore', 'Yelhanka', 'Rajajinagar'),
(6, 'Gaotham', '20', 'AB-', 'male', '9876543212', 'gaotham@gmail.com', 'Karnataka', 'Mysore', 'Yelhanka', 'Dcross'),
(7, 'Sachin', '22', 'A-', 'male', '7896542589', 'sachin@gmail.com', 'Karnataka', 'Mysore', 'Yelhanka', 'Mathikere'),
(8, 'Samyuktha', '27', 'O+', 'female', '8745963254', 'sam@gmail.com', 'Karnataka', 'Mysore', 'Yelhanka', 'Rajanukuntte'),
(9, 'Meghana', '35', 'O-', 'female', '9856325412', 'meghna@gmail.com', 'Karnataka', 'Mysore', 'Yelhanka', 'Devanahalli'),
(10, 'Swathi', '23', 'A+ ', 'female', '7896523654', 'swathi@gmail.com', 'Karnataka', 'Mysore', 'Yelhanka', 'Nes'),
(11, 'Suraksha', '21', 'B+', 'female', '7896398589', 'suraksha@gmail.com', 'Karnataka', 'Tumkur', 'Yelhanka', 'Dairycircle'),
(12, 'Sandesh', '19', 'B-', 'male', '8523641796', 'sandesh@gmail.com', 'Karnataka', 'Tumkur', 'Yelhanka', 'Rajanukuntte'),
(13, 'Sanjay', '24', 'O+', 'male', '7896523641', 'sanjay@gmail.com', 'Karnataka', 'Tumkur', 'Yelhanka', 'Rajanukuntte'),
(14, 'Vasu', '48', 'O-', 'male', '9448856704', 'vasu@gmail.com', 'Karnataka', 'Tumkur', 'Yelhanka', 'Hebbal'),
(15, 'Vignesh', '19', 'B-', 'male', '8523654125', 'vaihnj,j@gmail.com', 'Karnataka', 'Tumkur', 'Yelhanka', 'Nes'),
(16, 'Aruna', '38', 'AB+', 'female', '9481810355', 'aruna@gmail.com', 'Karnataka', 'Belgum', 'Yelhanka', 'Hebbal'),
(17, 'Kumudha', '37', 'O-', 'female', '9856321478', 'kumudha@gmail.com', 'Karnataka', 'Belgum', 'Yelhanka', 'Nes'),
(18, 'Rakshith', '55', 'AB+', 'male', '7896548965', 'rakshu@gmail.com', 'Karnataka', 'Belgum', 'Yelhanka', 'Dcross'),
(19, 'Alka', '19', 'B+', 'female', '7856324892', 'alka@gmail.com', 'Karnataka', 'Belgum', 'Yelhanka', 'Crpf'),
(20, 'Karthik', '25', 'A+', 'male', '8523697418', 'karthik@gmail.com', 'Karnataka', 'Belgum', 'Yelhanka', 'Crpf');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE `enquiry_form` (
  `id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Shashaank', 'shashaank.birava@gmail.com', '9731870504', 'The Portal is very helpful & informative.\r\nThanks Admin :)');

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
(10, 'M S General Hospital', 'Malleshwaram main road,K G road, Bangalore', '9856325417');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`id`, `name`, `venue`, `date`, `email`, `phone`, `message`) VALUES
(1, 'Sai Vidya Institute of Technology', 'SVIT', '2017-11-10', 'enquiry@saividya.ac.in', '91-80-28468191, ', 'We would like to Organize blood camp in our college Premises');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

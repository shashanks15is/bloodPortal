-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 04:46 PM
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
(1, 'Varun Raj', '21', 'B+', 'Male', '7204404966', 'varunrajv.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Hebbal', '#2, 5th Main, Balaji Layout, near Tata Nagar, Kodigehalli Main Road, Bengaluru-560094'),
(2, 'Shashank S', '22', 'B+', 'Male', '9731870504', 'shashanks.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', 'No 12, Escorts Layout, Ramagondanahalli, Ananthapur, Yelahanka, Bangalore'),
(3, 'Anuvrunda V', '21', 'A-', 'Female', '9632015114', 'anuvrundav.14is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Hebbal', '#7, Sapthagiri,Teachers colony, Boophasandra main road, NS halli, sanjayanagar post,Bangalore 560094'),
(4, 'Chaitanya R', '23', 'O+', 'Female', '7259618479', 'chainyasmile@gmail.com', 'Karnataka', 'Bengaluru', 'Hennur Road', 'No.119 kk.halli st thomas town bangalore 84'),
(5, 'Navya', '23', 'O+', 'Female', '8310426660', 'navyatr.14is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Chickpet', '#2656 chickpet doddbalapur'),
(6, 'Anurag D', '22', 'O+', 'Male', '8970972464', 'anuragd.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Peenya', '#299, 11th Main , M E I Layout, Bengaluru'),
(7, 'Goutham TS', '21', 'A-', 'Male', '9986194839', 'gouthamts.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Chickpet', '#2811,bestherapete,doddaballapur-561203'),
(8, 'Harish SK', '23', 'O+', 'Male', '9731308386', 'harishsk.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', 'Yelahanka'),
(9, 'Harshitha R', '23', 'A+', 'Female', '7204205011', 'harshithar.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yeshwanthpura', '#356,4th main,12th cross,2nd stage,west of cord, Mahalakshmipuram, Rajajinagar, Bangalore-86'),
(10, 'Jashwanth R', '23', 'A+', 'Male', '9916039667', 'jashwanthr.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Chickpet', 'Dodaballapura'),
(11, 'Keerthana', '20', 'O+', 'Female', '9743230548', 'keerthanas.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yeshwanthpura', '#24/10 12th cross Magadi road Bengaluru-23'),
(12, 'Lokesh', '22', 'A+', 'Male', '9538297323', 'lokeshloki503@gmail.com', 'Karnataka', 'Bengaluru', 'Chickpet', '#1704/7, devarajnagar ..Doddaballapur'),
(13, 'Mahesh BS', '20', 'B-', 'Male', '8660370309', 'maheshbs102@gmail.com', 'Karnataka', 'Bengaluru', 'Majestic', '#319/7,near BHEL Mysore road ,deepanjalinagar'),
(14, 'Meghana YM', '21', 'B+', 'Female', '8904422946', 'meghana.raj06@gmail.com', 'Karnataka', 'Bengaluru', 'Devanahalli', 'Devanahalli, banglore'),
(15, 'Neha Bhat', '21', 'O+', 'Female', '8197277452', 'bhatneha44@gmail.com', 'Karnataka', 'Bengaluru', 'Yeshwanthpura', '#102,9th cross,6th B main, nagpura, Mahalakshmi puram,behind Modi hospital'),
(16, 'Nithya G', '21', 'AB+', 'Female', '9611010681', 'nithyag.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Hebbal', '32/3a 4th block ,6th cross ,doddaballapur bangalore-97'),
(17, 'Prerna RC', '21', 'AB+', 'Female', '9886616488', 'rcprerna03@gmail.com', 'Karnataka', 'Bengaluru', 'Yeshwanthpura', '#2810,12th main, 2nd stage, d block, Rajajinagar, Bangalore-560010'),
(18, 'Rajath Jagathap', '21', 'B+', 'Male', '8553351789', 'rajathjk.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Peenya', '#305/5,2nd cross,venkatachala nilaya , t.dasarahalli, bangalore-57'),
(19, 'Ranjani YS', '22', 'O+', 'Female', '9742496913', 'ranjaniys.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'RT nagar', 'Sultanpalya,R T Nagar post'),
(20, 'Ritu Parajuli', '21', 'O+', 'Female', '85536355440', 'ritup.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Peenya', '#3h kiadb qtrs,4th cross peenya indl area bangalore 560058'),
(21, 'Roopashree G', '22', 'A-', 'Female', '9880837219', 'roopashreeg.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Mathikere', '#12 10th main , brindavan Nagar opposite to JP park mathikere Bangalore'),
(22, 'Sachin Kumar', '22', 'O+', 'Male', '7795040501', 'saci5040@gmail.com', 'Karnataka', 'Bengaluru', 'Mathikere', '183/A,2nd Floor,3rd Cross,7th Main, Mathikere Extenion'),
(23, 'Samyuktha Umesh Naik', '21', 'O+', 'Female', '99023356350', 'samyukthaun.15is@saividya.ac.in', 'Karnataka', 'Kumta', 'Vannalli', 'At:Vannalli. post&Tq:Kumta 581343 UttaraKannada'),
(24, 'Sandesh ', '22', 'A+', 'Male', '9902704757', 'sandeshbv.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', 'Sagar karnataka'),
(25, 'Sanjay KG', '22', 'O+', 'Male', '9591490067', 'sanjaykg.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', 'Churchigundi at post Terubeedi, Shivmoga District'),
(26, 'Sathya Pavithra', '22', 'O+', 'Female', '9035405493', 'sathyapavithragp1997@gmail.com', 'Karnataka', 'Bengaluru', 'Hebbal', '#62, Tripti,Bhovi colony, Nagashettyhalli, Sanjaynagar post,RMV 2nd stage, Bangalore-560094'),
(27, 'Shashank HB', '22', 'O+', 'Male', '9483956282', 'shashankhb.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Chickpet', '#353 car street near bangalore gate doddaballapur'),
(28, 'Shashank VP', '23', 'A+', 'Male', '8105497264', 'shashankvp.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yeshwanthpura', '#294,1st A main,1st N block,Rajajinagar'),
(29, 'Shreenidhi C', '21', 'O+', 'Female', '9066060378', 'shreenidhi.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', '#223 opp to gangamma temple marenahalli bagalur post'),
(30, 'Somen Panda', '22', 'B-', 'Male', '8123591147', 'somenpanda.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Mathikere', 'SMQ P-36/2, 7th Camp, Air Force Station, Bangalore'),
(31, 'Suraksha A', '22', 'AB-', 'Female', '9742716290', 'surakshaa.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', '#144-A1, 407-SFS, 4th phase, yelahanka new town, Bangalore-64'),
(32, 'Swathi', '21', 'O+', 'Female', '73380112240', 'swathi.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', 'No 301 shiridi sai sannidhi 4th floor Chikkabomasandra yelahanka new town bangalore-560065'),
(33, 'Vibha', '21', 'O+', 'Female', '8951520269', 'vibhaaaithal128@gmail.com', 'Karnataka', 'Bengaluru', 'Chickpet', '#2,5th main , Balaji layout, Tata Nagar, Bangalore'),
(34, 'Vinushree GP', '22', 'AB+', 'Female', '9980251237', 'vinushreegp.15is@saividya.ac.in', 'Karnataka', 'Kumta', 'Vannalli', 'Rural'),
(35, 'Varshini YH', '23', 'O+', 'Female', '9986248361', 'varshiniyh.15is@saividya.ac.in', 'Karnataka', 'Bengaluru', 'Yelahanka', 'Gandarajapura(vi),doddaballapur(tq),bangalore rural district,561205'),
(36, 'Sunil', '23', 'A-', 'Male', '74066583130', 'sunil@gmail.com', 'Karnataka', 'Bengaluru', 'Rajanukunte', 'Boys Hostel'),
(37, 'Usha DV', '21', 'A+', 'Female', '9036200506', 'ushadvdv@gmail.com', 'Karnataka', 'Bengaluru', 'Chickpet', '#152/A behind rajeshwari tent dbpur-561203'),
(38, 'Vidya Sagar', '24', 'B+', 'Male', '9480985810', 'vidyasagar1996@gmail.com', 'Karnataka', 'Mysore', 'Hebbal', '#3, 5th main, Hebbal'),
(39, 'Girish CS', '22', 'B+', 'Male', '9738715197', 'girishcs1997@gmail.com', 'Karnataka', 'Tumkur', 'Peenya', 'Peenya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

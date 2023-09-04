-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2023 at 04:13 AM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suzyjzkj_boka`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprescription`
--

CREATE TABLE `userprescription` (
  `id` int(200) NOT NULL,
  `drugtitle` varchar(1000) NOT NULL,
  `presdetails` varchar(1000) NOT NULL,
  `duration` varchar(1000) NOT NULL,
  `morningpres` varchar(1000) NOT NULL,
  `afternoonpres` varchar(1000) NOT NULL,
  `eveningpres` varchar(1000) NOT NULL,
  `userid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(200) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `emailaddress` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `dateofbirth` varchar(1000) NOT NULL,
  `weight` varchar(1000) NOT NULL,
  `allergies` varchar(1000) NOT NULL,
  `familymedhistory` varchar(1000) NOT NULL,
  `userpastmedhistory` varchar(1000) NOT NULL,
  `bloodgroup` varchar(1000) NOT NULL,
  `genotype` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `address`, `emailaddress`, `password`, `dateofbirth`, `weight`, `allergies`, `familymedhistory`, `userpastmedhistory`, `bloodgroup`, `genotype`) VALUES
(1, 'anas Fred', 'No 2 Aroloye Omosule Street', 'anasfred@gmail.com', 'Afm16772.', '', '', '', '', '', '', ''),
(2, 'anas Fred', 'mararaba, Karu, Nassarawa state', 'bokeruser@gmail.com', 'Afm16772.', '2023-09-08', '60', 'peanut,buger', 'none', 'none', 'o+', 'AA'),
(3, 'anas Fred', 'No 2 Aroloye Omosule Street', 'anasfre221d@gmail.com', 'Afm16772.', '', '', '', '', '', '', ''),
(4, 'anas Fred', 'No 2 Aroloye Omosule Street', 'anasssdfred@gmail.com', 'Afm16772.', '', '', '', '', '', '', ''),
(5, 'anas Fred', 'No 2 Aroloye Omosule Street', 'anasfredmallnjack@gmail.com', 'Afm16772.', '2023-09-09', 'undefined', 'hbh', 'hb', 'bn', 'y', 'hb'),
(6, 'Asset', '8027 Cross Pike Dr Germantown,', 'ssaasa@gmail.com', 'Afm16772.', '', '', '', '', '', '', ''),
(7, 'Asset', '8027 Cross Pike Dr Germantown,', 'ssaasxa@gmail.com', 'Afm16772.', '2023-08-31', 'undefined', 'nm', 'jnnj', 'j', 'h', 'jn'),
(8, 'anas', 'aa', 'aaa@aa.com', 'Afm16772.', '2023-09-08', 'undefined', 'jj', 'jj', 'jj', 'jj', 'ii'),
(9, 'anas', 'aa@aas.coa', 'aazaa@aa.com', 'aa@aas.coa', '2023-09-15', 'undefined', 'wdw', 'wddw', 'dwdw', 'jj', 'wsws'),
(10, 'Abdulmalik Ango', 'Ahmadu Bello Way, Opp. Treasury Bauchi, Bauchi State', 'abdulmalikango@gmail.com', 'A238lm254k-boka', '1997-11-13', 'undefined', 'None', 'None', 'None', 'B ', 'AA'),
(11, 'King', 'Kagadama, Bauchi', 'king@gmail.com', 'test1234', '2004-05-03', 'undefined', 'none', 'none', 'none', 'o ', 'AS'),
(12, 'Bright', 'Kagadama, Bauchi', 'bright@gmail.com', 'test1234', '2023-09-01', 'undefined', 'none', 'none', 'none', 'o ', 'AS'),
(13, 'Abbas Muhammad', 'Federal Low Cost, Bauchi, Bauchi State', 'mdabbas990@gmail.com', 'asdf0987', '', '', '', '', '', '', ''),
(14, 'Anas', 'Bauchi', 'anasfred3@gmail.com', 'Afm16772.', '2023-09-07', 'undefined', 'Abahs', 'Jjd', 'Susu', 'S ', 'Aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprescription`
--
ALTER TABLE `userprescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userprescription`
--
ALTER TABLE `userprescription`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

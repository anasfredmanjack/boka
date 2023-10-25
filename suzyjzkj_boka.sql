-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2023 at 03:34 PM
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
-- Table structure for table `prescriptiondetails`
--

CREATE TABLE `prescriptiondetails` (
  `id` int(200) NOT NULL,
  `prescriptionid` varchar(500) NOT NULL,
  `drugtitle` varchar(1000) NOT NULL,
  `totaltablets` varchar(1000) NOT NULL,
  `morntake` varchar(1000) NOT NULL,
  `aftrnoontake` varchar(1000) NOT NULL,
  `eveningtake` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prescriptiondetails`
--

INSERT INTO `prescriptiondetails` (`id`, `prescriptionid`, `drugtitle`, `totaltablets`, `morntake`, `aftrnoontake`, `eveningtake`) VALUES
(1, '1', 'Artemether Lumefrantrine', '8', '2', '2', 2),
(2, '1', 'Amoxicllin', '12', '2', '2', 2),
(3, '2', 'maleria prescription', 'maleria prescription', 'maleria prescription', 'maleria prescription', 0),
(4, '0', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 0),
(5, '3', 'aaa', 'aaa', 'aaa', 'aaa', 0),
(6, '4', 'ss', 'ss', 'ss', 'ss', 0),
(7, '5', 'ssasas', 'ssasas', 'ssasas', 'ssasas', 0),
(8, '6', 'scc', 'scc', 'scc', 'scc', 0),
(9, '7', 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', 0),
(10, '8', 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', 0),
(11, '9', 'ddeefe', 'ddeefe', 'ddeefe', 'ddeefe', 0),
(12, '10', 'Details', 'Details', 'Details', 'Details', 0),
(13, '10', 'Details', 'Details', 'Details', 'Details', 0),
(14, '11', 'Details', 'Details', 'Details', 'Details', 0),
(15, '11', 'Details', 'Details', 'Details', 'Details', 0),
(16, '12', 'Maleria Prescription', '11', '1', '1', 1),
(17, '12', 'Maleria Prescription', '22', '1', '1', 1),
(18, '13', 'Maleria Prescription', '11', '1', '1', 1),
(19, '14', '', '', '0', '0', 0),
(20, '15', 'Details', '11', '1', '2', 4),
(21, '16', 'ss', '12', '1', '2', 2),
(22, '17', 'Maleria Prescription', '122', '1', '1', 1),
(23, '18', 'Maleria Prescription', '122', '1', '1', 1),
(24, '19', 'Maleria Prescription', '222', '1', '1', 2),
(25, '20', 'morningDosage', '222', '3', '3', 3),
(26, '20', 'morningDosage', '222', '2', '3', 3),
(27, '21', 'Prescription', '33', '2', '2', 1),
(28, '22', 'tablets', '33', '2', '2', 3),
(29, '23', 'Prescription', '1', '2', '33', 2),
(30, '24', 'summary', '22', '2', '2', 2),
(31, '25', 'summary', '22', '2', '2', 2),
(32, '26', 'summary', '22', '2', '2', 2),
(33, '27', ' Maleria Prescription', '90', '4', '3', 6),
(34, '28', ' Maleria Prescription', '90', '4', '3', 6),
(35, '29', 'Maleria Prescription', '10', '2', '2', 2),
(36, '30', 'dd', '20', '1', '1', 1),
(37, '31', 'drug', '23', '2', '2', 2),
(38, '32', 'drug', '23', '2', '2', 2),
(39, '33', 'Maleria Prescription', '22', '2', '2', 2),
(40, '34', 'Maleria Prescription', '22', '2', '2', 2),
(41, '35', 'Maleria Prescription', '23', '2', '2', 2),
(42, '36', 'Maleria Prescription', '79', '2', '2', 2),
(43, '37', 'Maleria Prescription', '22', '2', '2', 2),
(44, '38', 'Maleria Prescription', '22', '1', '2', 2),
(45, '39', 'Maleria Prescription', '23', '2', '2', 2),
(46, '40', 'Maleria Prescription', '23', '2', '2', 2),
(47, '41', 'Maleria Prescription', '23', '2', '2', 2),
(48, '42', ' Maleria Prescription', '23', '2', '2', 2),
(49, '43', 'Maleria', '90', '3', '3', 3),
(50, '44', 'prescriptionenddate', '88', '2', '2', 1),
(51, '45', 'Maleria Prescription', '22', '2', '2', 2),
(52, '46', 'Maleria Prescription', '22', '2', '2', 2),
(53, '47', 'Maleria Prescription', '22', '2', '2', 2),
(54, '48', 'Maleria Prescription', '22', '2', '2', 2),
(55, '49', 'Maleria Prescription', '22', '2', '2', 2),
(56, '50', 'Maleria Prescription', '28', '2', '2', 2),
(57, '51', 'Maleria Prescription', '20', '2', '2', 2),
(58, '52', 'Maleria Prescription', '20', '2', '2', 2),
(59, '53', ' Maleria Prescription', '22', '2', '2', 2),
(60, '54', ' Maleria Prescription', '90', '2', '2', 2),
(61, '55', 'Prescription Details', '20', '2', '2', 2),
(62, '56', 'Prescription Details', '20', '2', '2', 2),
(63, '57', 'Prescription Title E.g Maleria Prescription', '78', '2', '2', 2),
(64, '58', 'Prescription', '23', '2', '2', 2),
(65, '59', '', '0', '0', '0', 0),
(66, '60', 'Maleria Prescription', '33', '2', '2', 2),
(67, '61', '', '0', '0', '0', 0),
(68, '62', '', '0', '0', '0', 0),
(69, '63', '', '0', '0', '0', 0),
(70, '64', '', '0', '0', '0', 0),
(71, '65', 'Maleria Prescription', '22', '2', '2', 2),
(72, '66', 'Maleria Prescription', '22', '22', '22', 22),
(73, '67', 'Maleria Prescription', '22', '2', '2', 2),
(74, '68', 'Maleria Prescription', '33', '2', '2', 2),
(75, '69', '', '0', '0', '0', 0),
(76, '70', '', '0', '0', '0', 0),
(77, '71', '', '0', '0', '0', 0),
(78, '72', '', '0', '0', '0', 0),
(79, '73', '', '0', '0', '0', 0),
(80, '74', '', '0', '0', '0', 0),
(81, '75', '', '0', '0', '0', 0),
(82, '75', '', '', '0', '0', 0),
(83, '76', '', '0', '0', '0', 0),
(84, '77', '', '0', '0', '0', 0),
(85, '78', '', '0', '0', '0', 0),
(86, '79', '', '0', '0', '0', 0),
(87, '80', '', '0', '0', '0', 0),
(88, '81', '', '0', '0', '0', 0),
(89, '82', '', '0', '0', '0', 0),
(90, '83', '', '0', '0', '0', 0),
(91, '84', '', '0', '0', '0', 0),
(92, '85', '', '0', '0', '0', 0),
(93, '86', '', '0', '0', '0', 0),
(94, '87', '', '0', '0', '0', 0),
(95, '88', '', '0', '0', '0', 0),
(96, '89', '', '0', '0', '0', 0),
(97, '90', '', '0', '0', '0', 0),
(98, '91', '', '0', '0', '0', 0),
(99, '92', '', '0', '0', '0', 0),
(100, '93', '', '0', '0', '0', 0),
(101, '94', '', '0', '0', '0', 0),
(102, '95', '', '0', '0', '0', 0),
(103, '96', '', '0', '0', '0', 0),
(104, '96', '', '', '0', '0', 0),
(105, '97', '', '0', '0', '0', 0),
(106, '97', '', '', '0', '0', 0),
(107, '98', '', '0', '0', '0', 0),
(108, '99', '', '0', '0', '0', 0),
(109, '100', '', '0', '0', '0', 0),
(110, '101', '', '0', '0', '0', 0),
(111, '102', '', '0', '0', '0', 0),
(112, '103', 'Details', '90', '8', '7', 1),
(113, '104', '', '0', '0', '0', 0),
(114, '105', 'Maleria Prescription', '0', '0', '0', 0),
(115, '106', 'g Dr Robinson', '0', '0', '0', 0),
(116, '107', '', '0', '0', '0', 0),
(117, '108', '', '0', '0', '0', 0),
(118, '109', 'arthemeter lumefrantrine', '16', '4', '0', 4),
(119, '0', 'Artemether lumefrantrine Number of Tablets:20 Morning Doses per drug:4 Afternoon Doses per drug:0 Evening Doses per drug:4\n\nAs Boka', '20 Morning Doses per drug:4 Afternoon Doses per drug:0 Evening Doses per drug:4\n\nAs Boka', '4 Afternoon Doses per drug:0 Evening Doses per drug:4\n\nAs Boka', '0 Evening Doses per drug:4\n\nAs Boka', 4),
(120, '0', ' dietary guidelines', ' dietary guidelines', ' dietary guidelines', ' dietary guidelines', 0),
(121, '0', ' physical activity', ' physical activity', ' physical activity', ' physical activity', 0),
(122, '0', ' follow-up appointments', ' follow-up appointments', ' follow-up appointments', ' follow-up appointments', 0),
(123, '0', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', 0),
(124, '0', 'Artemether lumefrantrine Number of Tablets:20 Morning Doses per drug:4 Afternoon Doses per drug:0 Evening Doses per drug:4\n\nAs Boka', '20 Morning Doses per drug:4 Afternoon Doses per drug:0 Evening Doses per drug:4\n\nAs Boka', '4 Afternoon Doses per drug:0 Evening Doses per drug:4\n\nAs Boka', '0 Evening Doses per drug:4\n\nAs Boka', 4),
(125, '0', ' dietary guidelines', ' dietary guidelines', ' dietary guidelines', ' dietary guidelines', 0),
(126, '0', ' physical activity', ' physical activity', ' physical activity', ' physical activity', 0),
(127, '0', ' follow-up appointments', ' follow-up appointments', ' follow-up appointments', ' follow-up appointments', 0),
(128, '0', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', ' and stress management. Ensure that the response is in a friendly and professional tone.\n', 0),
(129, '110', '', '', '', '', 0),
(130, '111', 'Artemether Lumefrantrine', '20', '4', '0', 4),
(131, '112', 'Artemether lumefrantfrine', '20', '4', '0', 4),
(132, '113', 'ulcer drug', '20', '2', '2', 2),
(133, '114', 'ulcer drug', '20', '2', '2', 2),
(134, '115', 'ulcer drug', '20', '2', '2', 2),
(135, '116', 'Details', '20', '2', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userprescription`
--

CREATE TABLE `userprescription` (
  `id` int(200) NOT NULL,
  `prescriptiontitle` varchar(1000) NOT NULL,
  `doctorname` varchar(1000) NOT NULL,
  `doctorcontact` varchar(1000) NOT NULL,
  `doctorremark` varchar(1000) NOT NULL,
  `userid` varchar(1000) NOT NULL,
  `datecreated` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userprescription`
--

INSERT INTO `userprescription` (`id`, `prescriptiontitle`, `doctorname`, `doctorcontact`, `doctorremark`, `userid`, `datecreated`) VALUES
(1, 'Maleria Prescription', '', '', '', '14', '2023-10-20.03:22:51pm'),
(2, 'maleria prescription', '', '', '', '14', '2023-10-21.09:29:05pm'),
(3, 'aaa', 'aaa', 'aaa', '                                               aaa                                                             \n                                                                                                        ', '14', '2023-10-22.12:19:23pm'),
(4, 'ss', 'ss', 'ss', 'ss', '14', '2023-10-22.12:23:47pm'),
(5, 'ssasas', 'ssasas', 'ssasas', 'ssasas', '14', '2023-10-22.12:31:49pm'),
(6, 'scc', 'scc', 'scc', 'scc', '14', '2023-10-22.12:33:40pm'),
(7, 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', '14', '2023-10-22.12:35:24pm'),
(8, 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', 'ssdsdsd', '14', '2023-10-22.12:35:48pm'),
(9, 'ddeefe', 'ddeefe', 'ddeefe', 'ddeefe', '14', '2023-10-22.12:37:43pm'),
(10, 'Details', 'Details', 'Details', 'Details', '14', '2023-10-22.12:57:34pm'),
(11, 'Details', 'Details', 'Details', 'Details', '14', '2023-10-22.01:00:25pm'),
(12, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.02:33:13pm'),
(13, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.02:35:16pm'),
(14, '', '', '', '', '14', '2023-10-22.02:38:11pm'),
(15, 'Details', 'Details', 'Details', 'Details', '14', '2023-10-22.02:41:28pm'),
(16, 'ss', 'ss', 'ss', 'ss', '14', '2023-10-22.02:42:54pm'),
(17, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.02:54:39pm'),
(18, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.02:55:34pm'),
(19, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.02:56:54pm'),
(20, 'morningDosage', 'morningDosage', 'morningDosage', 'morningDosage', '14', '2023-10-22.02:58:53pm'),
(21, 'Prescription', 'Prescription', 'Prescription', 'Prescription', '14', '2023-10-22.03:08:31pm'),
(22, 'tablets', 'tablets', 'tablets', 'tablets', '14', '2023-10-22.03:11:34pm'),
(23, 'Prescription', 'Prescription', 'Prescription', 'Prescription', '14', '2023-10-22.03:19:38pm'),
(24, 'summary', 'summary', 'summary', 'summary', '14', '2023-10-22.03:48:09pm'),
(25, 'summary', 'summary', 'summary', 'summary', '14', '2023-10-22.03:48:24pm'),
(26, 'summary', 'summary', 'summary', 'summary', '14', '2023-10-22.03:50:34pm'),
(27, ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', '14', '2023-10-22.03:54:27pm'),
(28, ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', '14', '2023-10-22.03:57:00pm'),
(29, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.05:26:52pm'),
(30, 'Prescription', 'Prescription', 'Prescription', 'Prescription', '14', '2023-10-22.05:51:18pm'),
(31, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.05:53:53pm'),
(32, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.05:54:34pm'),
(33, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.05:55:56pm'),
(34, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.05:56:18pm'),
(35, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.05:58:17pm'),
(36, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.06:05:06pm'),
(37, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-22.06:34:30pm'),
(38, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:27:26am'),
(39, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:31:49am'),
(40, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:34:02am'),
(41, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:34:33am'),
(42, ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', '14', '2023-10-23.03:36:17am'),
(43, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:40:31am'),
(44, ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', 'prescriptionenddate', '14', '2023-10-23.03:43:33am'),
(45, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:46:46am'),
(46, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:47:16am'),
(47, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:48:08am'),
(48, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:52:33am'),
(49, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:53:00am'),
(50, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:55:19am'),
(51, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.03:56:40am'),
(52, '6', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.04:07:27am'),
(53, 'Prescription Title E.g Maleria Prescription', 'Prescription Title E.g Maleria Prescription', 'Prescription Title E.g Maleria Prescription', ' Maleria Prescription', '14', '2023-10-23.04:19:57am'),
(54, ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', ' Maleria Prescription', '14', '2023-10-23.04:21:32am'),
(55, 'Prescription Details', 'Prescription Details', 'Prescription Details', 'Prescription Details', '14', '2023-10-23.04:25:22am'),
(56, 'Prescription Details', 'Prescription Details', 'Prescription Details', 'Prescription Details', '14', '2023-10-23.04:26:39am'),
(57, 'Prescription Title E.g Maleria Prescription', 'Prescription Title E.g Maleria Prescription', 'Prescription Title E.g Maleria Prescription', 'Prescription Title E.g Maleria Prescription', '14', '2023-10-23.04:28:19am'),
(58, 'Prescription', 'Prescription', 'Prescription', 'Prescription', '14', '2023-10-23.04:31:37am'),
(59, '', '', '', '', '14', '2023-10-23.04:35:10am'),
(60, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.04:37:32am'),
(61, '', '', '', '', '14', '2023-10-23.04:38:31am'),
(62, '', '', '', '', '14', '2023-10-23.04:39:21am'),
(63, '', '', '', '', '14', '2023-10-23.04:40:23am'),
(64, '', '', '', '', '14', '2023-10-23.04:42:59am'),
(65, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.10:42:38am'),
(66, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.10:43:45am'),
(67, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.10:48:38am'),
(68, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.12:00:23pm'),
(69, '', '', '', '', '14', '2023-10-23.12:01:36pm'),
(70, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', '14', '2023-10-23.12:13:09pm'),
(71, '', '', '', '', '14', '2023-10-23.12:16:54pm'),
(72, '', '', '', '', '14', '2023-10-23.12:17:35pm'),
(73, '', '', '', '', '14', '2023-10-23.12:20:18pm'),
(74, '', '', '', '', '14', '2023-10-23.12:22:37pm'),
(75, '', '', '', '', '14', '2023-10-23.12:23:07pm'),
(76, '', '', '', '', '14', '2023-10-23.12:24:36pm'),
(77, '', '', '', '', '14', '2023-10-23.12:26:26pm'),
(78, '', '', '', '', '14', '2023-10-23.12:27:35pm'),
(79, '', '', '', '', '14', '2023-10-23.12:33:06pm'),
(80, '', '', '', '', '14', '2023-10-23.01:02:13pm'),
(81, '', '', '', '', '14', '2023-10-23.01:07:13pm'),
(82, '', '', '', '', '14', '2023-10-23.01:08:45pm'),
(83, '', '', '', '', '14', '2023-10-23.01:14:27pm'),
(84, '', '', '', '', '14', '2023-10-23.01:24:02pm'),
(85, '', '', '', '', '14', '2023-10-23.01:25:04pm'),
(86, '', '', '', '', '14', '2023-10-23.01:26:43pm'),
(87, '', '', '', '', '14', '2023-10-23.01:33:24pm'),
(88, '', '', '', '', '14', '2023-10-23.01:38:34pm'),
(89, '', '', '', '', '14', '2023-10-23.01:47:53pm'),
(90, '', '', '', '', '14', '2023-10-23.01:49:53pm'),
(91, '', '', '', '', '14', '2023-10-23.01:51:49pm'),
(92, '', '', '', '', '14', '2023-10-23.01:53:35pm'),
(93, '', '', '', '', '14', '2023-10-23.02:17:08pm'),
(94, '', '', '', '', '14', '2023-10-23.02:31:45pm'),
(95, '', '', '', '', '14', '2023-10-23.02:38:13pm'),
(96, '', '', '', '', '14', '2023-10-24.01:19:35pm'),
(97, '', '', '', '', '14', '2023-10-25.12:22:03pm'),
(98, '', '', '', '', '14', '2023-10-25.12:25:04pm'),
(99, '', '', '', '', '14', '2023-10-25.12:40:29pm'),
(100, '', '', '', '', '14', '2023-10-25.12:40:56pm'),
(101, '', '', '', '', '14', '2023-10-25.12:41:18pm'),
(102, '', '', '', '', '14', '2023-10-25.12:44:34pm'),
(103, 'Details', 'Details', '00099', 'gvbvb', '14', '2023-10-25.12:48:34pm'),
(104, '', '', '', '', '14', '2023-10-25.12:54:13pm'),
(105, 'Maleria Prescription', 'Maleria Prescription', 'Maleria Prescription', ' Maleria Prescription', '14', '2023-10-25.12:59:39pm'),
(106, 'g Dr Robinson', 'g Dr Robinson', 'g Dr Robinson', 'g Dr Robinson', '14', '2023-10-25.01:01:23pm'),
(107, '', '', '', '', '14', '2023-10-25.01:04:24pm'),
(108, '', '', '', '', '14', '2023-10-25.01:04:51pm'),
(109, 'Maleria Prescription', 'Dr Robinson', '090232', 'stay hydrated', '14', '2023-10-25.04:48:58pm'),
(110, '', '', '', '', '', '2023-10-25.05:34:54pm'),
(111, 'Maleria Prescription', 'Dr Robinson', '02933', 'stay hydrated', '14', '2023-10-25.05:35:31pm'),
(112, 'Maleria Prescription', 'Dr Robinson', '3332', 'stay hydrated', '14', '2023-10-25.05:35:49pm'),
(113, 'Ulcer', 'Ben', '32323', 'stay hydrated', '14', '2023-10-25.06:01:44pm'),
(114, 'Ulcer', 'Ben', '32323', 'stay hydrated', '14', '2023-10-25.06:03:27pm'),
(115, 'Ulcer', 'Ben', '32323', 'stay hydrated', '14', '2023-10-25.06:03:47pm'),
(116, 'Details', 'Details', 'Details', 'Details', '14', '2023-10-25.06:11:28pm');

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
(5, 'anas Fred', 'No 2 Aroloye Omosule Street', 'anasfredmallnjack@gmail.com', 'Afm16772.', '2023-09-09', '', 'hbh', 'hb', 'bn', 'y', 'hb'),
(6, 'Asset', '8027 Cross Pike Dr Germantown,', 'ssaasa@gmail.com', 'Afm16772.', '', '', '', '', '', '', ''),
(7, 'Asset', '8027 Cross Pike Dr Germantown,', 'ssaasxa@gmail.com', 'Afm16772.', '2023-08-31', '', 'nm', 'jnnj', 'j', 'h', 'jn'),
(8, 'anas', 'aa', 'aaa@aa.com', 'Afm16772.', '2023-09-08', '', 'jj', 'jj', 'jj', 'jj', 'ii'),
(9, 'anas', 'aa@aas.coa', 'aazaa@aa.com', 'aa@aas.coa', '2023-09-15', '', 'wdw', 'wddw', 'dwdw', 'jj', 'wsws'),
(10, 'Abdulmalik Ango', 'Ahmadu Bello Way, Opp. Treasury Bauchi, Bauchi State', 'abdulmalikango@gmail.com', 'A238lm254k-boka', '1997-11-13', '', 'None', 'None', 'None', 'B ', 'AA'),
(11, 'King', 'Kagadama, Bauchi', 'king@gmail.com', 'test1234', '2004-05-03', '', 'none', 'none', 'none', 'o ', 'AS'),
(12, 'Bright', 'Kagadama, Bauchi', 'bright@gmail.com', 'test1234', '2023-09-01', '', 'none', 'none', 'none', 'o ', 'AS'),
(13, 'Abbas Muhammad', 'Federal Low Cost, Bauchi, Bauchi State', 'mdabbas990@gmail.com', 'asdf0987', '', '', '', '', '', '', ''),
(14, 'Anas', 'bauchi state', 'anasfred3@gmail.com', 'Afm16772.', '2023-09-03', '90', 'oily food', 'none', 'none', 'O', 'AA'),
(15, 'Jonathan Kaka ', 'Karu site ', 'Jonathangodwinkaka@gmail.com', 'Jojokaka1', '1998-05-07', '', 'None ', 'Nil ', 'Nil ', '0 ', 'AA'),
(16, 'anas Fred', 'No 2 Aroloye Omosule Street', 'bokaboka@gmail.com', 'bokaboka@gmail.com', '', '', '', '', '', '', ''),
(17, 'Bright Kingsley', 'Kagadama, Bauchi', 'briggskvngzz@gmail.com', 'b24411oo', '2004-03-05', '', 'none', 'none', 'none', 'O', 'AA'),
(18, 'Divine Owoyemi', 'Abubakar Tafawa Balewa University Rd, Bauchi, Nigeria', 'dydowo@gmail.com', 'Bokaboka', '1997-12-04', '', 'none', 'none', 'Bronhittis', 'ab ', 'aa'),
(19, 'Abdulmalik Ango', 'aango.ug@atbu.edu.ng', 'aango.ug@atbu.edu.ng', 'gahneM-hohmaj-deqhy7', '1997-11-13', '', 'Nil', 'Nil', 'Nil', 'B ', 'AA'),
(20, 'manjack', 'Bauchi', 'manjack@gmail.com', 'manjack', '2023-10-19', '30', 'none', 'none', 'none', 'o ', 'AA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescriptiondetails`
--
ALTER TABLE `prescriptiondetails`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `prescriptiondetails`
--
ALTER TABLE `prescriptiondetails`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `userprescription`
--
ALTER TABLE `userprescription`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

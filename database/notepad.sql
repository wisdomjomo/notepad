-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 12:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notepad`
--

-- --------------------------------------------------------

--
-- Table structure for table `notedata`
--

CREATE TABLE `notedata` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notedata`
--

INSERT INTO `notedata` (`id`, `title`, `content`, `date`) VALUES
(1, 'Format', 'Headquarters, 59 Shorts Gardens Covent Garden, London, WC2H 9AA. United Kingdom. \r\nPhone +44 7438 402563\r\n18/04/2023\r\n\r\nAttention: \r\nGood day to you from The Struktura Engineering Limited Office and we wish to inform you that we have received your message and have decided to reply you and also inform you on the conditions that has to be done before the vacation can be approved Mr. Azim Ehsan, with serial number No. 118201610. As you know he is the Admin Officer working under the S.E.L and for that reason there are procedures that must be followed. \r\n\r\nThere has to be a payment for his life / Health insurance, without this payment this vacation can never be possible. This payment must be made incase anything go wrong in your country.\r\n\r\n{A} 1,500.00 USD ( 2,000 Brunei Dollar ) for 30 working days vacation.\r\n\r\n{B} 3,500.00 USD ( 4,700 Brunei Dollar) for 60 working days vacation.\r\n\r\n{C} 5,400.00 USD( 7,200 Brunei Dollar ) for 90 working days vacation.\r\n\r\nKindly choose from the above options as instructed by Struktura Engineering Limited Parliamentary Assembly (SELPA) so that we can finalize the vacation . upon your reply we shall provide you with the payment details for his life / health insurance before his vacation can be granted.\r\n\r\nYours sincerely\r\n\r\nOFFICER IN CHARGE OF VACATION\r\nStruktura Engineering Limited OFFICE\r\n\r\nTransmitted by the Information Contained and this E-MAIL is Proprietary to Struktura Engineering Limited  ORGANIZATION and/or it is only Intended for Use by the Individual or entity Addressed to Which it is, and May Contain That information is privileged, confidential or Exempt from a Disclosure under applicable law. If this is a Forwarded message, the content of this E-MAIL May not have Been sent with the Authority of Struktura Engineering Limited  ORGANIZATION Shall not be LIABLE for any mails sent without Due Authorization or through unauthorized Access. If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited \r\n\r\nStruktura Engineering Limited.', '2023-05-12 00:27:11'),
(2, 'Learn git', 'Introduction to git by wisdom jomo', '2023-05-12 00:27:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notedata`
--
ALTER TABLE `notedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notedata`
--
ALTER TABLE `notedata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

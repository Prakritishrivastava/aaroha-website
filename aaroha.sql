-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 12:10 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaroha`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Id` int(11) NOT NULL,
  `Event_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Id`, `Event_Name`, `Image`, `Description`) VALUES
(1, 'AASHA-A RAY OF HOPE', 'event/pic6.JPG', 'Aasha is conducted in two parts. The first part of the event was conducted at Shaurya Smarak, where the children were taken on an educational tour about the history of our nation. They met Major General Shyam Shrivastava and Brigadier Vinayak. The second part of the event took place at the Aashima Mall in Bhopal Miss Bhakti Sharma was our Chief Guest. Latter educational kits were distributed amongst the children, and certificates of appreciation in order to motivate the children .'),
(2, 'SCIENCE EXHIBITION', 'event/pic1.JPG', 'In this era of technical advancement, everyone is moving at a faster pace. The kids at Aaroha are no behind. At annual technical fest of Manit Bhopal, our kids put out a science exihibition. Rain water harvesting system, solar cooker, vacumm cleaner etc were some of the many projects made by our students. Appreciation to our volunteers who worked extra time and helped the kids make these wonderful projects.'),
(3, 'PANACHE', 'event/pic7.jpg', 'Yet another dazzling performance was delivered by our kids at Maffick, annual cultural fest of Manit Bhopal. The theme for the ramp walk was Panchatantra, inspired by five basic elements of nature. Our kids represented the elements- Wind as Air Force, Water as Navy and Earth as Army as a tribute to our defence forces. This was a little attempt to show our gratitude to the soldiers who work really hard to ensure our safety. The kids too, aspire to become soldiers and glorious warriors of the nation.'),
(4, 'A SE AH', 'event/pic2.JPG', 'Aaroha is proud to have organized another successful event at Shree Bhavan Bharti School. The event was aimed at making our children feel special. We are extremely proud of the volunteers at our organization who worked extremely hard to complete this motive. We would also like to thank our chief guest Bhakti Sharma Mam, Tanmay Jain Sir, Kanchan Singh Rajput Mam, Sandeep Thapak Sir, Vandana Joshi Mam and Sudeep Sir for their presence and giving their time to our children. The kids learnt a lot from these people, which will facilitate their growth as eminent personalities tomorrow.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Animation_Class` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Image`, `Animation_Class`) VALUES
(1, 'gallery/pic1.JPG', 'flipInX'),
(2, 'gallery/pic2.JPG', 'rotateIn'),
(3, 'gallery/pic3.jpg', 'bounceIn'),
(4, 'gallery/pic4.JPG', 'zoomIn'),
(5, 'gallery/pic5.JPG', 'zoomIn'),
(6, 'gallery/pic6.JPG', 'bounceIn'),
(7, 'gallery/pic7.jpg', 'rotateIn'),
(8, 'gallery/pic8.jpg', 'flipInX'),
(9, 'gallery/pic9.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(10, 'gallery/pic10.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(11, 'gallery/pic11.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(12, 'gallery/pic12.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(13, 'gallery/pic13.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(14, 'gallery/pic14.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(15, 'gallery/pic15.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal'),
(16, 'gallery/pic16.JPG', 'if: scroll,on: window, do: fadeIn animated, before: scrollReveal');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `City` varchar(20) NOT NULL,
  `JoinUs` varchar(20) NOT NULL,
  `UpdateYN` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`UserName`, `Email`, `Phone`, `Gender`, `City`, `JoinUs`, `UpdateYN`) VALUES
('Aditi', 'aaa@g.co', 987777777, 'Female', 'jjjjjj', 'Volunteer', 'Yes'),
('Aditi', 'aaa@g.co', 987777777, 'Female', 'jjjjjj', 'Volunteer', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `management_team`
--

CREATE TABLE `management_team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `management_team`
--

INSERT INTO `management_team` (`id`, `name`, `designation`, `image`, `facebook_link`) VALUES
(1, 'Shreenivas', 'Founder and President', 'team/shreesir.jpg', 'https://www.facebook.com/shreenivas.jha'),
(2, 'Shruti Saksena', 'Treasurer and Design head', 'team/shruti.jpg', 'https://www.facebook.com/shruti.saksena.009'),
(3, 'Aashish Sharma', 'Human Resources', 'team/ashish.jpg', 'https://www.facebook.com/ashishsharma.ash.7'),
(4, 'Lucky Kandra', 'Chapter Head NIT-B', 'team/lucky.jpeg', 'https://www.facebook.com/luckey.kandra'),
(5, 'Shrutika Waghmare', 'Asst. Chapter Head NIT-B', 'team/shrutika.jpg', 'https://www.facebook.com/shruti.waghmare2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `management_team`
--
ALTER TABLE `management_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `management_team`
--
ALTER TABLE `management_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

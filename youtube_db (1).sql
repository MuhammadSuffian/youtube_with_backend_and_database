-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 08:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `full_Name` varchar(32) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(20) NOT NULL,
  `back_pin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videoID` int(11) NOT NULL,
  `videoFile` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `channelname` varchar(100) DEFAULT NULL,
  `channellogo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoID`, `videoFile`, `title`, `description`, `tags`, `thumbnail`, `category`, `channelname`, `channellogo`) VALUES
(1, 'Videos/test_video.mp4', 'Best Fat Recommendations for 2022', 'Dr Khalid Jamil is an Assistant Professor at Sheikh Zayed Hospital and Kidney Transplant Center, Lahore. In 2003, he was diagnosed with Type 2 Diabetes and High Blood Pressure and was prescribed oral medications, exercise & diet control. In 2016, he was put on insulin due to increase in urea creatinine and retinopathy. The deteriorating health led Dr. Khalid on a quest to find answers. He started intensively studying Type 2 Diabetes, its’ prevention and cure. He consulted doctors but none were able to give answers to his questions. Then finally, he stumbled upon a YouTube video of Dr. Jason Fung, that video proved to be a life changing moment in Dr. Khalid’s life. Dr. Jason Fung is a Canadian nephrologist who claimed 100% cure and reversal of Diabetes via intermittent fasting and some lifestyle changes.\r\n\r\nA doctor himself, Dr. Khalid extensively studied Jason Fung’s theories. Now, since 2018, he is on a ketogenic diet and doing intermittent fasting with walk and exercise. He is off the medicines now and his creatinine levels are also back to normal.\r\n\r\nDr. Khalid is no longer practicing Urology and has instead made it his mission to educate people on social media about what he has learned & practiced so that they are also able to cure 80-90% of all diseases caused by Insulin Resistance.\r\n\r\nDr. Khalid is starting weekly lectures on Facebook & Youtube on curing Kidney Problems,\r\nDiabetes and Blood Pressure through Ketogenic Diet and intermittent fasting.', 'Ketogenic diet, Intermittent fasting, Healthy fats, Omega-3 fatty acids, Mediterranean diet, Low-carb diet, Plant-based fat', 'Thumbnails/Thumbnail4.jpg', 'Education', 'Healthy Keto with Dr. Khalid Jamil', 'Additional files/channel6.jpeg'),
(2, 'Videos/test_video.mp4', 'Future Medicine Fasting , why people are afraid of it | Lecture 422', 'The deteriorating health led Dr. Khalid on a quest to find answers. He started intensively studying Type 2 Diabetes, its’ prevention and cure. He consulted doctors but none were able to give answers to his questions. Then finally, he stumbled upon a YouTube video of Dr. Jason Fung, that video proved to be a life changing moment in Dr. Khalid’s life. Dr. Jason Fung is a Canadian nephrologist who claimed 100% cure and reversal of Diabetes via intermittent fasting and some lifestyle changes.\r\n\r\nA doctor himself, Dr. Khalid extensively studied Jason Fung’s theories. Now, since 2018, he is on a ketogenic diet and doing intermittent fasting with walk and exercise. He is off the medicines now and his creatinine levels are also back to normal.\r\n\r\nDr. Khalid is no longer practicing Urology and has instead made it his mission to educate people on social media about what he has learned & practiced so that they are also able to cure 80-90% of all diseases caused by Insulin Resistance.\r\n\r\nDr. Khalid is starting weekly lectures on Facebook & Youtube on curing Kidney Problems, Diabetes and Blood Pressure through Ketogenic Diet and intermittent fasting.', 'diet plan, diabties-2, dr.khalid, fasting sugar, keto plan, diet plan', 'Thumbnails/Thumbnail6.jpg', 'Education', 'Healthy Keto with Dr. Khalid Jamil', 'Additional files/channel4.jpeg'),
(3, 'Videos/test_video.mp4', 'My First file for DB', 'ma nai btao ga', 'koi ni', 'Thumbnails/Thumbnail2.jpg', 'gaming', 'Suffian tech', 'Additional files/channel1.jpeg'),
(4, 'Videos/test_video.mp4', 'This is a test file for DB', 'ma nai btao ga..kyu btao', 'koi ni', 'Thumbnails/Thumbnail5.jpg', 'gaming', 'Suffian tech', 'Additional files/channel2.jpeg'),
(5, 'Videos/test_video.mp4', 'Microsoft is offering free certification courses ', '\r\nNo Fee,No subscription,No     Registration Required, Just start learning \r\n', 'joker', 'Thumbnails/Thumbnail1.jpg', 'test', 'champu', 'Additional files/channel7.jpeg'),
(6, 'Videos/test_video.mp4', 'Web ki class ', 'again ma nai btao ga', 'gias', 'Thumbnails/Thumbnail3.jpg', 'def', 'sa', 'Additional files/channel5.jpeg'),
(7, 'Videos/test_video.mp4', 'asfas', 'asfsafasf', 'safa', 'Thumbnails/Thumbnail7.jpg', 'afa', 'adf', 'Additional files/channel3.jpeg'),
(8, 'Videos/test_video.mp4', 'Best Way to live life', 'Best Way to live lifeBest Way to live lifeBest Way to live lifeBest Way to live lifeBest Way to live lifeBest Way to live lifeBest Way to live lifeBest Way to live lifeBest Way to live life', 'Best Way to live lifeBest Way to live lifeBest Way to live life', 'Thumbnails/Thumbnail9.jpg', 'nature', 'tommymick', 'Additional files/channel1.jpeg'),
(9, 'Videos/test_video.mp4', 'Best Way to live happy and energatic life', 'Best Way to live lifeBest Way to live lifeBest Way to live life', 'Best Way to live lifeBest Way to live lifeBest Way to live life', 'Thumbnails/Thumbnail8.jpg', 'test', 'TommyMachmin', 'Additional files/channel2.jpeg'),
(10, 'Videos/test_video.mp4', 'Best ways to Die', 'Best Way to live lifeBest ways to DieBest ways to DieBest ways to Die', 'Best ways to DieBest ways to Die', 'Thumbnails/Thumbnail11.jpg', 'test', 'SmokeyNigata', 'Additional files/channel5.jpeg'),
(11, 'Videos/test_video.mp4', 'Php is kinda nice', 'Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4', 'Videos/test_video.mp4Videos/test_video.mp4', 'Thumbnails/Thumbnail10.jpg', 'ad', 'Dell', 'Additional files/channel5.jpeg'),
(12, 'Videos/test_video.mp4', 'Blue Microphone Testing', 'Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4Videos/test_video.mp4', 'Videos/test_video.mp4Videos/test_video.mp4', 'Thumbnails/Thumbnail12.jpg', 'daf', 'Hann-G', 'Additional files/channel6.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

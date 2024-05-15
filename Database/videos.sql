-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 08:28 PM
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
  `channelname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoID`, `videoFile`, `title`, `description`, `tags`, `thumbnail`, `category`, `channelname`) VALUES
(1, 'test_video.mp4', 'Best Fat Recommendations for 2022', 'Dr Khalid Jamil is an Assistant Professor at Sheikh Zayed Hospital and Kidney Transplant Center, Lahore. In 2003, he was diagnosed with Type 2 Diabetes and High Blood Pressure and was prescribed oral medications, exercise & diet control. In 2016, he was put on insulin due to increase in urea creatinine and retinopathy. The deteriorating health led Dr. Khalid on a quest to find answers. He started intensively studying Type 2 Diabetes, its’ prevention and cure. He consulted doctors but none were able to give answers to his questions. Then finally, he stumbled upon a YouTube video of Dr. Jason Fung, that video proved to be a life changing moment in Dr. Khalid’s life. Dr. Jason Fung is a Canadian nephrologist who claimed 100% cure and reversal of Diabetes via intermittent fasting and some lifestyle changes.\r\n\r\nA doctor himself, Dr. Khalid extensively studied Jason Fung’s theories. Now, since 2018, he is on a ketogenic diet and doing intermittent fasting with walk and exercise. He is off the medicines now and his creatinine levels are also back to normal.\r\n\r\nDr. Khalid is no longer practicing Urology and has instead made it his mission to educate people on social media about what he has learned & practiced so that they are also able to cure 80-90% of all diseases caused by Insulin Resistance.\r\n\r\nDr. Khalid is starting weekly lectures on Facebook & Youtube on curing Kidney Problems,\r\nDiabetes and Blood Pressure through Ketogenic Diet and intermittent fasting.', 'Ketogenic diet, Intermittent fasting, Healthy fats, Omega-3 fatty acids, Mediterranean diet, Low-carb diet, Plant-based fat', 'Thumbnail1.jpg', 'Education', 'Healthy Keto with Dr. Khalid Jamil'),
(2, 'test_video.mp4', 'Future Medicine Fasting , why people are afraid of it | Lecture 422', 'The deteriorating health led Dr. Khalid on a quest to find answers. He started intensively studying Type 2 Diabetes, its’ prevention and cure. He consulted doctors but none were able to give answers to his questions. Then finally, he stumbled upon a YouTube video of Dr. Jason Fung, that video proved to be a life changing moment in Dr. Khalid’s life. Dr. Jason Fung is a Canadian nephrologist who claimed 100% cure and reversal of Diabetes via intermittent fasting and some lifestyle changes.\r\n\r\nA doctor himself, Dr. Khalid extensively studied Jason Fung’s theories. Now, since 2018, he is on a ketogenic diet and doing intermittent fasting with walk and exercise. He is off the medicines now and his creatinine levels are also back to normal.\r\n\r\nDr. Khalid is no longer practicing Urology and has instead made it his mission to educate people on social media about what he has learned & practiced so that they are also able to cure 80-90% of all diseases caused by Insulin Resistance.\r\n\r\nDr. Khalid is starting weekly lectures on Facebook & Youtube on curing Kidney Problems, Diabetes and Blood Pressure through Ketogenic Diet and intermittent fasting.', 'diet plan, diabties-2, dr.khalid, fasting sugar, keto plan, diet plan', 'Thumbnail2.jpg', 'Education', 'Healthy Keto with Dr. Khalid Jamil'),
(3, 'test_video.mp4', 'My First file for DB', 'ma nai btao ga', 'koi ni', 'Thumbnail3.jpg', 'gaming', 'Suffian tech');

--
-- Indexes for dumped tables
--

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
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

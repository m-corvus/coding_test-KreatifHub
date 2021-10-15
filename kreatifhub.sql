-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 03:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreatifhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Fotografi'),
(2, 'Videografi'),
(3, 'Programming'),
(4, 'Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `profile_photos`
--

CREATE TABLE `profile_photos` (
  `id` bigint(20) NOT NULL,
  `profile_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_photos`
--

INSERT INTO `profile_photos` (`id`, `profile_photo`) VALUES
(11, '2020-07-13_103654.png'),
(12, 'wall.jpg'),
(13, '220px-Han_Solo_depicted_in_promotional_image_for_Star_Wars_(1977).jpg'),
(14, '4-4a6e285676f4b3a0be8d8604bb9a80b1.jpg'),
(15, 'antifungal.jpg'),
(16, 'AKADEmik.jpg'),
(17, 'kr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `talents`
--

CREATE TABLE `talents` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `id_photo_profile` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `aboutme` text DEFAULT NULL,
  `id_kategori` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talents`
--

INSERT INTO `talents` (`id`, `email`, `phone_number`, `age`, `id_photo_profile`, `name`, `gender`, `skills`, `location`, `aboutme`, `id_kategori`) VALUES
(2, 'akmal@gmail.com', '082111768038', 21, NULL, 'Mohammad Akmal Rifqi', 'male', 'drone', 'bekasi', 'asdasds', 1),
(5, 'rifqi@gmail.comd', '082111768038', 0, '11', 'Dummy 1', 'male', 'editing', 'asd', 'asdasdasd', 2),
(7, 'moh@gmail.com', '082111768038', 21, '12', 'dummy2', 'male', 'writing', 'asd', 'asd', 3),
(8, 'hansolo@gmail.com', '1212312', 21, '13', 'hansolo', 'male', 'typing', 'asfasf', 'asfasf', 3),
(9, 'bejo@nu.com', '12125125', 125, '14', 'bedul', 'female', 'reapiring', 'asd', 'asd', 4),
(10, 'dummy3@outlook.com', '1112', 21, '0', 'dummy3', 'female', 'sketch', 'bekasi', 'asdasdasd', 2),
(12, 'dow@gmail.com', '1212', 12, '15', 'doe', 'female', 'running', 'bekasi', '<b xss=removed>Click Me</b>', 1),
(13, 'bujang@mail.com', '12124', 33, '16', 'bujang', 'female', 'flying', 'bekasi', 'hmm', 2),
(14, 'john@doe.com', '131235', 21, '17', 'john', 'male', 'ngaji', 'bekasi', 'ngaji', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_photos`
--
ALTER TABLE `profile_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talents`
--
ALTER TABLE `talents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile_photos`
--
ALTER TABLE `profile_photos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `talents`
--
ALTER TABLE `talents`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

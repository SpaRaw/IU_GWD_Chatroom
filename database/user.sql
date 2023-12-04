-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: sql
-- Generation Time: Dec 04, 2023 at 12:46 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
                         `ID` int NOT NULL,
                         `post_id` int NOT NULL,
                         `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `post_id`, `content`) VALUES
    (1, 1, 'Hallo ich bin ein Post');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `ID` int NOT NULL,
                        `user_name` varchar(255) NOT NULL,
                        `passwort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user_name`, `passwort`) VALUES
                                                       (1, 'admin', 'admin'),
                                                       (2, 'Traveler', '[value-2]'),
                                                       (3, 'provator', '5c163ce3450271de3aa5cd73fcc0e88ab9f7ad43f299b6d9a8dd37afb69de67d'),
                                                       (4, 'provator', '5c163ce3450271de3aa5cd73fcc0e88ab9f7ad43f299b6d9a8dd37afb69de67d'),
                                                       (5, 'alapen', '5c163ce3450271de3aa5cd73fcc0e88ab9f7ad43f299b6d9a8dd37afb69de67d'),
                                                       (6, 'cosmo', '5c163ce3450271de3aa5cd73fcc0e88ab9f7ad43f299b6d9a8dd37afb69de67d'),
                                                       (7, 'sdfasdf', '5c163ce3450271de3aa5cd73fcc0e88ab9f7ad43f299b6d9a8dd37afb69de67d'),
                                                       (8, 'kakadada1', 'cc35f5c1beef105166f4490f09de4040d0f645771c0d882b1d383f56577e7ece'),
                                                       (9, 'Sarmaticus', '4eb4a5c6c22d00b522bd06bce54f1b37bda55a687f2485cae0b26f5cc8bb1d25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
    ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
    MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

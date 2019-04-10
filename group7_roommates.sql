-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 09:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group7_roommates`
--

-- --------------------------------------------------------

--
-- Table structure for table `signuproommate`
--

CREATE TABLE `signuproommate` (
  `firstName` text COLLATE utf16_bin NOT NULL,
  `lastName` text COLLATE utf16_bin NOT NULL,
  `phone` varchar(20) COLLATE utf16_bin NOT NULL,
  `email` varchar(40) COLLATE utf16_bin NOT NULL,
  `city` text COLLATE utf16_bin NOT NULL,
  `password` text COLLATE utf16_bin NOT NULL,
  `question1` text COLLATE utf16_bin NOT NULL,
  `question2` text COLLATE utf16_bin NOT NULL,
  `question3` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `signuproommate`
--

INSERT INTO `signuproommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`, `question1`, `question2`, `question3`) VALUES
('Elena', 'Race', '999-999-9999', 'elena@elena.com', 'oakville', 'mypassword', 'owl', 'Messy', 'Non-Smoker'),
('Valerie', ' Fielding', '123-456-7890', 'email10@gmail.com', 'Toronto', '12345678', 'bird', 'Neat freak', 'Non-Smoker'),
('Griselda ', 'Aly', '123-456-7890', 'email11@gmail.com', 'Toronto', '12345678', 'bird', 'Neat freak', 'Non-Smoker'),
('Riva ', 'Huggins', '123-456-7890', 'email12@gmail.com', 'Toronto', '12345678', 'bird', 'Messy', 'Smoker'),
('Nancy ', 'Whyet', '132-453-6890', 'email13@yahoo.com', 'Toronto', '12345678', 'bird', 'Messy', 'Smoker'),
('Channing ', 'Church', '132-453-6890', 'email14@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Sally ', 'Austen', '132-453-6890', 'email15@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Eddard', 'Stark', '132-453-6890', 'email16@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Catelyn', 'Stark', '132-453-6890', 'email17@yahoo.com', 'Toronto', '12345678', 'owl', 'Neat freak', 'Smoker'),
('Sansa', 'Stark', '987-654-3201', 'email18@yahoo.com', 'Toronto', '12345678', 'owl', 'Neat freak', 'Smoker'),
('Arya', 'Stark', '987-654-3121', 'email19@yahoo.com', 'Toronto', '12345678', 'owl', 'Neat freak', 'Smoker'),
('Hugh ', 'Lowell', '123-456-7890', 'email1@gmail.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Daenerys', 'Targaryen', '987-654-3921', 'email20@yahoo.com', 'Toronto', '12345678', 'owl', 'Neat freak', 'Smoker'),
('Jon', 'Snow', '987-654-0321', 'email21@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Tyrion ', 'Lannister', '987-654-6321', 'email22@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Samwell', 'Tarly', '987-654-7321', 'email23@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Jaime', 'Lannister', '987-654-8321', 'email24@yahoo.com', 'Toronto', '12345678', 'owl', 'Messy', 'Smoker'),
('Cersei', 'Lannister', '987-654-9321', 'email25@yahoo.com', 'Toronto', '12345678', 'owl', 'Neat freak', 'Smoker'),
('Barristan', 'Selmy', '987-654-3209', 'email26@outlook.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Kevan', 'Lannister', '987-456-9876', 'email27@outlook.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Arianne', 'Martell', '987-345-0987', 'email28@outlook.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Corey ', 'Simon', '123-456-7890', 'email2@gmail.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Hale ', 'Dutt', '123-456-7890', 'email3@gmail.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('George ', 'Dewar', '123-456-7890', 'email4@gmail.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Penelope ', 'Fowler', '123-456-7890', 'email5@gmail.com', 'Toronto', '12345678', 'bird', 'Messy', 'Non-Smoker'),
('Teresa ', 'Walkley', '123-456-7890', 'email6@gmail.com', 'Toronto', '12345678', 'bird', 'Neat freak', 'Non-Smoker'),
('Jason ', 'Henry', '123-456-7890', 'email7@gmail.com', 'Toronto', '12345678', 'bird', 'Neat freak', 'Non-Smoker'),
('Steward ', 'Ruth', '123-456-7890', 'email8@gmail.com', 'Toronto', '12345678', 'bird', 'Neat freak', 'Non-Smoker'),
('Honey ', 'Wild', '123-456-7890', 'email9@gmail.com', 'Toronto', '12345678', 'bird', 'Neat freak', 'Non-Smoker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signuproommate`
--
ALTER TABLE `signuproommate`
  ADD PRIMARY KEY (`email`),
  ADD KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

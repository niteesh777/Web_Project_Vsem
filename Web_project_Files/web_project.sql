-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 04:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `entlist`
--

CREATE TABLE `entlist` (
  `username` varchar(50) NOT NULL,
  `moviename` varchar(200) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entlist`
--

INSERT INTO `entlist` (`username`, `moviename`, `poster`) VALUES
('Hitesh', 'Avengers: Age of Ultron', 'https://m.media-amazon.com/images/M/MV5BMTM4OGJmNWMtOTM4Ni00NTE3LTg3MDItZmQxYjc4N2JhNmUxXkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_SX300.jpg'),
('Hitesh', 'Avengers: Endgame', 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg'),
('Hitesh', 'Avengers: Infinity War', 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SX300.jpg'),
('nikhil', 'Guardians of the Galaxy', 'https://m.media-amazon.com/images/M/MV5BMTAwMjU5OTgxNjZeQTJeQWpwZ15BbWU4MDUxNDYxODEx._V1_SX300.jpg'),
('nikhil', 'Money Heist', 'https://m.media-amazon.com/images/M/MV5BZDcxOGI0MDYtNTc5NS00NDUzLWFkOTItNDIxZjI0OTllNTljXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg'),
('Hitesh', 'The Avengers', 'https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg'),
('hrithik', 'The Avengers', 'https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg'),
('hrithik', 'Avengers: Infinity War', 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SX300.jpg'),
('hrithik', 'Avengers: Endgame', 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg'),
('hrithik', 'Avengers: Age of Ultron', 'https://m.media-amazon.com/images/M/MV5BMTM4OGJmNWMtOTM4Ni00NTE3LTg3MDItZmQxYjc4N2JhNmUxXkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_SX300.jpg'),
('hrithik', 'The Avengers', 'https://m.media-amazon.com/images/M/MV5BYWE1NTdjOWQtYTQ2Ny00Nzc5LWExYzMtNmRlOThmOTE2N2I4XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_SX300.jpg'),
('niteesh777', 'Guardians of the Galaxy', 'https://m.media-amazon.com/images/M/MV5BMTAwMjU5OTgxNjZeQTJeQWpwZ15BbWU4MDUxNDYxODEx._V1_SX300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE `private` (
  `username` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `private`
--

INSERT INTO `private` (`username`, `message`, `date`) VALUES
('testuser', 'abcde', '2020-11-20'),
('niteesh777', 'Final review', '2020-12-21'),
('Hitesh', 'Hello iam Hitesh.', '2020-11-26'),
('hrithik', 'hrx private', '2020-07-22'),
('niteesh777', 'New data', '2020-07-22'),
('nikhil', 'Nikhil private!!', '2020-07-22'),
('niteesh777', 'private message', '2020-07-22'),
('testuser', 'private test!!', '2020-07-22'),
('niteesh777', 'Testing Private!!!', '2020-07-22'),
('nikhil', 'testing private....', '2020-11-24'),
('niteesh777', 'Today is a good day !!!', '2020-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `username` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`username`, `message`, `date`) VALUES
('testuser', 'aaaaa', '2020-07-22'),
('niteesh777', 'Good day cadet!!', '2020-07-22'),
('Hitesh', 'Happy diwali', '2020-11-14'),
('hrithik', 'Hello iam Hrx!!', '2020-07-22'),
('nikhil', 'testing......', '2020-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `mobile`, `password`, `cpassword`) VALUES
('Hitesh', 'hitesh@gmail.com', '5678986534', 'hitesh', 'hitesh'),
('hrithik', 'hrx@gmail.com', '6678900891', 'hrx123', 'hrx123'),
('nikhil', 'nikhilsai@gmail.com', '8876545877', 'nikhil123', 'nikhil123'),
('niteesh777', 'niteeshreddy@yahoo.com', '6303520640', 'niteesh@777', 'niteesh@777'),
('testuser', 'test@gmail.com', '1234567890', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `username` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`username`, `comment`) VALUES
('hrithik', 'Useful!!'),
('nikhil', 'Good work!'),
('niteesh777', 'NIce'),
('testuser', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `username` varchar(50) NOT NULL,
  `task` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`username`, `task`, `date`) VALUES
('niteesh777', 'abc', '2020-12-20'),
('niteesh777', 'abcd', '2020-12-21'),
('niteesh777', 'acd', '2020-12-20'),
('niteesh777', 'ccc', '2020-12-23'),
('niteesh777', 'cccc', '2020-12-21'),
('niteesh777', 'Final review', '2020-12-21'),
('hrithik', 'hrx new task', '2020-11-25'),
('Hitesh', 'New user', '2020-11-18'),
('Hitesh', 'New userb', '2020-11-17'),
('niteesh777', 'nnn', '2020-12-20'),
('nikhil', 'project review today', '2020-11-24'),
('testuser', 'Review Mini project', '2020-12-21'),
('nikhil', 'Review tommorow', '2020-11-18'),
('nikhil', 'Today', '2020-11-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entlist`
--
ALTER TABLE `entlist`
  ADD KEY `username` (`username`);

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`message`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`message`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`,`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`task`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entlist`
--
ALTER TABLE `entlist`
  ADD CONSTRAINT `entlist_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `private`
--
ALTER TABLE `private`
  ADD CONSTRAINT `private_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`);

--
-- Constraints for table `public`
--
ALTER TABLE `public`
  ADD CONSTRAINT `public_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`);

--
-- Constraints for table `todolist`
--
ALTER TABLE `todolist`
  ADD CONSTRAINT `todolist_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

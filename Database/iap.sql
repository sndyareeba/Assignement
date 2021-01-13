-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 11:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iap`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Email`, `fname`, `lname`) VALUES
('', '', '', '', ''),
('client1', '$2y$10$PqePG8WZv6AxPnkT9E/h6OGSUgIxzZZJ7k.WSp3CFx8Jb3AdZlmoa', 'client1@gmail.com', 'client', 'One'),
('client2', '$2y$10$3.3w/Y0wnhkk3AoA9RYFHeV8b0VxGsn2HCOfPIMPNVaBaUoKZckY.', 'client2@gmail.com', 'Client_2', 'two'),
('Doyle ', '$2y$10$od927mBsVXt.IQMwBZ7yj.6Rzc.SGuifUkmDkudV8AC/s6YHaof7O', 'sam20brian@gmail.com', 'Ndyareeba ', 'Brian Samuel '),
('Henry123', '$2y$10$GJALUptPmYA8WiC/VV/d/uJdeGbfZW9hflR9o5VC6npDKIqgc8vgO', 'henry@gmail.com', 'Henry', 'Derro'),
('Wombat', '$2y$10$Wz4ghAq.896JAFxRlKrCzexao2FCV79PUUPfmq1lnJAGsarnGuQk6', 'womb@gmail.com', 'Jin', 'Mori');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

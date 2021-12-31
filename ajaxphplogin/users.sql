-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 10:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Vandana Nayak', 'vandunayak4000@gmail.com', '$2y$10$e1nEXdL7ba6F7.OGjZMIdOYRkWg9V8Lwe8pJrx94rKxskUd.fj0S.'),
(2, 'vv', 'vv@gmail.com', '$2y$10$zMpz1kELRNJDkKPYi7WTQupTD5OT8PiDIyufacTpWhtqDU9qGy2pS'),
(3, 'hh', 'hh@gmail.com', '$2y$10$y14rl8v3ljcG6stHIABX5uZslTB71jTC.PVHduUxOcuJWqqZ0/tkG'),
(4, 'bb', 'b@gmail.com', '$2y$10$LU38qT.mHOmMaBFNQ/4urOA1LyjzH.uxGjp1V9dFIrvyRtwE6mMqC'),
(5, 'ww', 'w2GMAIL.COM', '$2y$10$wseyLgWu78tXArZnPEJi9.aOaAjd3NGzP6udfgotLMObP5U993ZBi'),
(6, 'hh', 'h@gmail.com', '$2y$10$JhVMeylOF4y/aO05tbcBZeoZKcMEsL/1s9acZ.6e1fuCykBlLwWnC'),
(7, 'mohit', 'mohit', '$2y$10$k7OMdJVp4nlntEjtHHwEneA9mU4Amtjd5E6B4YiAywwcQdMmJpGhm'),
(8, 'nirali', 'nirali@gmail.com', '$2y$10$Zp7hWlflM5R0gERsNtdbIevrPSdMqoizf8IZw0TOrmxqN8UN3c4tK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

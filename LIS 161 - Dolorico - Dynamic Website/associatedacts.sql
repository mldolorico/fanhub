-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 03:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis161_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `associatedacts`
--

CREATE TABLE `associatedacts` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associatedacts`
--

INSERT INTO `associatedacts` (`id`, `artist`, `genre`, `email`, `website`, `status`) VALUES
(1, 'Barrett Baber', 'Country/Soul', 'booking@barrettbaber.com', 'https://www.barrettbaber.com/', 'Associated Act'),
(2, 'Boyce Avenue', 'Acoustic/Pop', 'whitney@freeassociation.co', 'boyceavenue.com', 'Associated Act'),
(3, 'Hunter Plake', 'Alternative/EDM', 'N/A', 'https://www.facebook.com/thisisplake/', 'Associated Act'),
(4, 'Luke Wade', 'Folk/Soul', 'lukewademgmt@gmail.com', 'http://www.lukewademusic.com', 'Associated Act'),
(5, 'Michael Sanchez', 'Jazz/Soul', 'https://michaelsanchezmusic.com/contact/', 'https://michaelsanchezmusic.com', 'Associated Act'),
(6, 'Ryan Quinn', 'Pop/Rock', 'quinn7850@gmail.com', 'http://ryanquinnmusic.com', 'Associated Act'),
(7, 'Matt New', 'Pop', 'mattnewmusic@gmail.com', 'www.mattnewmusic.com', 'Pending application');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associatedacts`
--
ALTER TABLE `associatedacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associatedacts`
--
ALTER TABLE `associatedacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

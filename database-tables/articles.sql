-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 12:47 PM
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
-- Database: `netmatters_reflection_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `top_right_colour` varchar(64) NOT NULL,
  `top_right_text` varchar(64) NOT NULL,
  `img_src` varchar(64) NOT NULL,
  `title_colour` varchar(64) NOT NULL,
  `title_text` varchar(64) NOT NULL,
  `time_read` varchar(64) NOT NULL,
  `article_summary` varchar(128) NOT NULL,
  `button_colour` varchar(64) NOT NULL,
  `author_img` varchar(64) NOT NULL,
  `author` varchar(64) NOT NULL,
  `date_posted` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `top_right_colour`, `top_right_text`, `img_src`, `title_colour`, `title_text`, `time_read`, `article_summary`, `button_colour`, `author_img`, `author`, `date_posted`) VALUES
(1, 'top-right-blue', 'CASE STUDIES', 'img/news-1.png', 'text-blue', 'Staying Secure and Connected With Netmatters -... ', '6', 'Urban Mission Schools and Community (UMSC) is an independent school aiming to re-engage youth...', 'btn-news-blue', 'img/nm-logo-dark-small.png', 'Netmatters', '11th May 2023'),
(2, 'top-right-purple', 'CASE STUDIES', 'img/news-2.png', 'text-purple', 'Glaven Valley - Web Case Study', '5', 'The Client - Since 2001, Glaven Valley has been a leading platform for the listing and booking of self-...', 'btn-news-purple', 'img/nm-logo-dark-small.png', 'Netmatters', '11th May 2023'),
(3, 'top-right-purple', 'NEWS', 'img/news-3.png', 'text-purple', 'Bethany Shakespeare - Netmatters 5 Year Legend...', '3', 'Today we are congratulating Bethany Shakespeare on achieving the Netmatters Long Service Award and b...', 'btn-news-purple', 'img/nm-logo-dark-small.png', 'Netmatters', '8th May 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

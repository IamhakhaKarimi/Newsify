-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 08:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT 'title',
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT '',
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `image`, `created_at`) VALUES
(24, 1, 'Twitter gives in to user requests for edit button', 'Twitter is finally giving its users the new feature they have most requested - an edit button.\r\n\r\n\"If you see an edited Tweet, it\'s because we\'re testing the edit button. This is happening and you\'ll be OK,\" the company tweeted.\r\n\r\nIt is currently testing the feature and will roll it out in the coming weeks to subscribers of Twitter Blue, which costs $4.99 (£4.33) per month.\r\n\r\nTweets will be available to edit a few times in the 30 minutes after posting.\r\n\r\nTwitter Blue is currently available in the US, Canada, Australia, and New Zealand - but initial tests will be limited to just one country.', 'twitter.jpg', '2022-09-02'),
(26, 1, 'Leopard in escape', 'India state deploys 300 people to catch elusive leopard', 'leopard.png', '2022-09-02'),
(28, 1, 'Afghanistan', 'Elections are on the way in Afghanistan', 'afghanistan map.jpg', '2022-09-02'),
(54, 1, 'Innovation in Robots', 'News EV3 Robots are now programmable using using Android phones', 'legoev3-thumb@2x.jpg', '2022-09-02'),
(55, 1, 'How to Get Free Internet', 'High-speed internet is a basic necessity, and both public and private organizations are working to expand access. This has made it possible for many people in the US to get broadband internet free of charge through the Affordable Connectivity Program and other public and private programs.\r\n\r\nPeople in the US have uneven access to the internet, a problem that was made much more apparent during the COVID-19 pandemic. What do you do if you don’t have access to good speeds where you live? What if you can’t afford any of the providers that are available in your area? And what if no major ISPs offer service where you live?', 'free.png', '2022-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`) VALUES
(1, 'admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

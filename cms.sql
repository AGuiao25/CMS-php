-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2020 at 11:03 AM
-- Server version: 8.0.18
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Bootstrap'),
(2, 'Javascript'),
(4, 'Java'),
(6, 'Test23'),
(10, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment_content` text COLLATE utf8mb4_general_ci NOT NULL,
  `comment_status` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(2, 1, 'Angel Guiao', 'ag@yahoo.com', 'fdhgfhfghgf', 'UNAPPROVED', '2020-07-29'),
(3, 1, 'Hanna Montanah', 'hmonts@gmail.com', 'Im learning programming', 'UNAPPROVED', '2020-07-29'),
(5, 1, 'Hello', 'hellowowlrd@y.com', 'hellow world', 'APPROVED', '2020-07-29'),
(6, 1, 'Angel', 'Angel@yahoo.com', 'This is just really so good... PROGRAMMING!!!!!!!!!!', 'UNAPPROVED', '2020-07-29'),
(7, 1, 'Test', 'Tes@yahoo.com', 'Test', 'unapproved', '2020-07-29'),
(8, 1, 'SD', 'guestadmin@yahoo.com', 'SDSD', 'unapproved', '2020-07-29'),
(9, 2, 'Hanna Montanah', 'guestadmin@yahoo.com', 'ad', 'APPROVED', '2020-07-29'),
(10, 13, 'sdfgdfg', 'a@y.c', 'sdfgdfgfdg', 'APPROVED', '2020-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_general_ci NOT NULL,
  `post_tags` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'Angel Guiao Journey', 'Angel Guiao', '2020-07-23', '', 'Godspeed', 'angel, javascript, php', 4, 'draft'),
(2, 2, 'Javascript Course Post', 'Belinda', '2020-07-04', '', 'Wow you are awesomesauce!', 'javascript2, course, class, belinda', 3, 'draft'),
(4, 1, 'dfggggggTest', 'test', '2020-08-01', '', '{ conts }   ', 'test   ', 4, 'published'),
(6, 1, 'Test', '', '2020-08-01', '', '{  } ', ' ', 4, 'published'),
(11, 1, 'Best PHP Course Ever', 'Angel Guiao', '2020-07-29', '', '{  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et leo duis ut diam quam nulla porttitor massa. Ut aliquam purus sit amet luctus venenatis. Dictum sit amet justo donec enim. In dictum non consectetur a erat nam. Adipiscing commodo elit at imperdiet dui accumsan sit amet nulla. A erat nam at lectus urna duis convallis convallis. Duis at consectetur lorem donec massa sapien faucibus. Sed risus ultricies tristique nulla. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Euismod in pellentesque massa placerat duis ultricies lacus sed. Amet tellus cras adipiscing enim. Sed lectus vestibulum mattis ullamcorper velit. Amet consectetur adipiscing elit pellentesque habitant morbi. Purus non enim praesent elementum facilisis leo vel fringilla est. Accumsan lacus vel facilisis volutpat est. Odio euismod lacinia at quis risus sed vulputate odio ut. Sed viverra ipsum nunc aliquet bibendum. Ac tortor dignissim convallis aenean et tortor at risus. Non pulvinar neque laoreet suspendisse interdum consectetur libero.\r\n\r\nDonec enim diam vulputate ut pharetra sit amet aliquam id. Est ultricies integer quis auctor elit sed vulputate mi. Enim tortor at auctor urna nunc id. Nisl nunc mi ipsum faucibus vitae aliquet. Libero volutpat sed cras ornare arcu dui vivamus. Euismod elementum nisi quis eleifend quam adipiscing. Ut placerat orci nulla pellentesque dignissim enim sit amet venenatis. Ut ornare lectus sit amet est placerat in. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Duis at consectetur lorem donec massa sapien faucibus et molestie. Nibh mauris cursus mattis molestie a iaculis at erat pellentesque. A pellentesque sit amet porttitor eget dolor morbi non arcu. Commodo elit at imperdiet dui accumsan sit amet nulla. Sit amet consectetur adipiscing elit duis tristique.\r\n\r\nNetus et malesuada fames ac turpis egestas maecenas pharetra convallis. Diam sit amet nisl suscipit adipiscing. Ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel. Libero justo laoreet sit amet cursus sit amet dictum sit. Porttitor eget dolor morbi non arcu risus quis varius. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Metus dictum at tempor commodo ullamcorper. A pellentesque sit amet porttitor eget dolor. Facilisis magna etiam tempor orci eu. Laoreet suspendisse interdum consectetur libero id. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Eleifend donec pretium vulputate sapien. Nunc id cursus metus aliquam eleifend mi in.\r\n\r\nSapien faucibus et molestie ac feugiat sed lectus vestibulum mattis. Pharetra et ultrices neque ornare aenean euismod elementum. Fringilla ut morbi tincidunt augue. Eget sit amet tellus cras adipiscing enim. Duis at tellus at urna condimentum mattis pellentesque. Elit sed vulputate mi sit. Sed velit dignissim sodales ut eu sem integer vitae justo. Placerat orci nulla pellentesque dignissim. Et malesuada fames ac turpis egestas sed tempus. Consectetur a erat nam at lectus urna. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Mauris vitae ultricies leo integer malesuada nunc. Sollicitudin ac orci phasellus egestas.\r\n\r\nNisl condimentum id venenatis a condimentum. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Sit amet risus nullam eget felis eget nunc lobortis. Diam maecenas ultricies mi eget mauris pharetra et. Dui faucibus in ornare quam viverra orci sagittis eu. Et egestas quis ipsum suspendisse ultrices gravida dictum. Lectus arcu bibendum at varius. Quis auctor elit sed vulputate mi sit. Consectetur purus ut faucibus pulvinar elementum integer enim. Eros in cursus turpis massa tincidunt dui. Nam at lectus urna duis convallis convallis tellus id. Quam quisque id diam vel. Nulla pharetra diam sit amet nisl. Faucibus interdum posuere lorem ipsum dolor. Proin libero nunc consequat interdum varius sit amet mattis vulputate.}  ', 'php  ', 4, 'published'),
(12, 1, 'sdfdsfs', '', '2020-08-01', '', '{  }', '', 0, 'published'),
(13, 1, 'sdfgdgfdgfdg', '', '2020-08-01', '', '{  }', '', 1, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `user_role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `randSalt` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'ashron', '123', 'Ashron', 'Ketchums', 'ashron@yahoo.com', '', 'subscriber', ''),
(3, 'a', 'aaa', 'aaa', 'aa', 'a@y.c', NULL, 'subscriber', ''),
(5, '{ sssss}', 'hello', 'His', 'Yess', 'a@y.c', NULL, 'admin', ''),
(7, 'cv', 'cv', 'cv', '{ cv}', 'a@y.c', NULL, 'subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

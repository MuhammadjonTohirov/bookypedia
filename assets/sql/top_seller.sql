-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 10:07 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Structure for view `top_seller`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_seller` AS select `sold`.`id` AS `id`,`sold`.`book_id` AS `book_id`,`sold`.`quantity` AS `quantity`,`book_with_genre_auth`.`b_id` AS `b_id`,`book_with_genre_auth`.`auth_img` AS `auth_img`,`book_with_genre_auth`.`isbn` AS `isbn`,`book_with_genre_auth`.`title` AS `title`,`book_with_genre_auth`.`first_name` AS `first_name`,`book_with_genre_auth`.`last_name` AS `last_name`,`book_with_genre_auth`.`price` AS `price`,`book_with_genre_auth`.`image` AS `image`,`book_with_genre_auth`.`description` AS `description`,`book_with_genre_auth`.`genre` AS `genre` from (`sold` join `book_with_genre_auth` on((`sold`.`book_id` = `book_with_genre_auth`.`b_id`))) order by `sold`.`quantity` desc limit 6;

--
-- VIEW  `top_seller`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

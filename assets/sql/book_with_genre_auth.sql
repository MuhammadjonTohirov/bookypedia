-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 09:58 PM
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
-- Structure for view `book_with_genre_auth`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `book_with_genre_auth` AS select `book_with_genre`.`rank` AS `rank`,`book_with_genre`.`b_id` AS `b_id`,`author`.`image` AS `auth_img`,`book_with_genre`.`isbn` AS `isbn`,`book_with_genre`.`title` AS `title`,`author`.`FirstName` AS `first_name`,`author`.`LastName` AS `last_name`,`book_with_genre`.`price` AS `price`,`book_with_genre`.`image` AS `image`,`book_with_genre`.`description` AS `description`,`book_with_genre`.`genre` AS `genre` from (`book_with_genre` join `author` on((`book_with_genre`.`author_id` = `author`.`id`)));

--
-- VIEW  `book_with_genre_auth`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 10:32 PM
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
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `image` varchar(75) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `FirstName`, `LastName`, `image`, `Description`) VALUES
(1, 'Muhammadjon', 'Tohirov', 'assets/images/author/img.jpg', 'great writer'),
(2, 'Eddy', 'Murphy', 'assets/images/author/img.jpg', 'a good wirter'),
(3, 'Bret', 'Pit', 'assets/images/author/img.jpg', 'a good wirter'),
(4, 'Aghata', 'Christi', 'assets/images/author/img.jpg', 'a good wirter');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL,
  `isbn` varchar(25) NOT NULL DEFAULT '000000',
  `title` varchar(50) NOT NULL DEFAULT 'title',
  `author_id` int(11) NOT NULL DEFAULT '1',
  `price` float NOT NULL DEFAULT '5',
  `image` varchar(75) NOT NULL DEFAULT '../../template/image/img.jpg',
  `genre` int(11) NOT NULL DEFAULT '1',
  `publication_date` date DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `rate` int(11) DEFAULT '0',
  `description` text NOT NULL,
  `posted_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `author_id`, `price`, `image`, `genre`, `publication_date`, `quantity`, `rate`, `description`, `posted_date`) VALUES
(36, 'isbn:2017', 'Harry Potter', 1, 5, 'assets/images/books/def.jpg', 1, NULL, 0, 0, 'Potter Harry', '2017-05-08 18:20:46'),
(37, 'isbn:201712346', 'Herkul Poirot', 1, 5, 'assets/images/books/def.jpg', 2, NULL, 0, 5, 'written by Agatha Cristi', '2017-05-08 18:20:46'),
(41, '12124531', 'Google', 1, 5, 'assets/images/books/def.jpg', 1, NULL, 0, 3, 'descr', '2017-05-08 18:20:46'),
(42, 'asdq3123', 'aeqwe123', 1, 5, 'assets/images/books/def.jpg', 1, NULL, 0, 0, 'qwe123we', '2017-05-08 18:20:46'),
(43, '12322342234', 'Book of the Weil', 1, 15, 'assets/images/books/def.jpg', 1, '2012-01-01', 20, 5, 'vsfvsdfv', '2017-05-08 20:10:28'),
(44, '10121201', 'Hercule Poirot 2', 3, 40, 'assets/images/books/def.jpg', 2, '2017-05-01', 8, 5, 'is a good book', '2017-05-08 22:11:11'),
(45, '10122121', 'Daftar Hoshiyasidagi bitiklar', 2, 24, 'assets/images/books/def.jpg', 1, '2013-08-01', 10, 2, 'is a good book', '2017-05-08 22:11:27');

-- --------------------------------------------------------

--
-- Stand-in structure for view `book_with_genre`
--
CREATE TABLE IF NOT EXISTS `book_with_genre` (
`b_id` int(11)
,`isbn` varchar(25)
,`title` varchar(50)
,`author_id` int(11)
,`price` float
,`rank` int(11)
,`image` varchar(75)
,`description` text
,`genre` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `book_with_genre_auth`
--
CREATE TABLE IF NOT EXISTS `book_with_genre_auth` (
`rank` int(11)
,`b_id` int(11)
,`auth_img` varchar(75)
,`isbn` varchar(25)
,`title` varchar(50)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`price` float
,`image` varchar(75)
,`description` text
,`genre` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE IF NOT EXISTS `costumer` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id`, `FirstName`, `LastName`, `Password`) VALUES
(1, 'Botir', 'Nasridinov', '0000'),
(2, 'Bunyod', 'Ibrohimov', '0000'),
(3, 'Qudratillo', 'Ismatov', '0000'),
(4, 'Shaxboz', 'Tohirov', '0000'),
(5, 'Farxod', 'Abduqodirov', '0000'),
(6, 'Pavel', 'Shlyaev', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `title`, `description`) VALUES
(1, 'detective', 'detective books'),
(2, 'story', 'a story about something or somebody');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE IF NOT EXISTS `sold` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`id`, `book_id`, `quantity`) VALUES
(1, 36, 12),
(2, 37, 10),
(3, 41, 6),
(4, 42, 7),
(5, 43, 10),
(6, 44, 12),
(7, 45, 11);

-- --------------------------------------------------------

--
-- Stand-in structure for view `top_ranked`
--
CREATE TABLE IF NOT EXISTS `top_ranked` (
`rank` int(11)
,`b_id` int(11)
,`auth_img` varchar(75)
,`isbn` varchar(25)
,`title` varchar(50)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`price` float
,`image` varchar(75)
,`description` text
,`genre` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `top_seller`
--
CREATE TABLE IF NOT EXISTS `top_seller` (
`id` int(11)
,`book_id` int(11)
,`quantity` int(11)
,`b_id` int(11)
,`auth_img` varchar(75)
,`isbn` varchar(25)
,`title` varchar(50)
,`first_name` varchar(50)
,`last_name` varchar(50)
,`price` float
,`image` varchar(75)
,`description` text
,`genre` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `book_with_genre`
--
DROP TABLE IF EXISTS `book_with_genre`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `book_with_genre` AS select `book`.`id` AS `b_id`,`book`.`isbn` AS `isbn`,`book`.`title` AS `title`,`book`.`author_id` AS `author_id`,`book`.`price` AS `price`,`book`.`rate` AS `rank`,`book`.`image` AS `image`,`book`.`description` AS `description`,`genre`.`title` AS `genre` from (`book` join `genre` on((`book`.`genre` = `genre`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `book_with_genre_auth`
--
DROP TABLE IF EXISTS `book_with_genre_auth`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `book_with_genre_auth` AS select `book_with_genre`.`rank` AS `rank`,`book_with_genre`.`b_id` AS `b_id`,`author`.`image` AS `auth_img`,`book_with_genre`.`isbn` AS `isbn`,`book_with_genre`.`title` AS `title`,`author`.`FirstName` AS `first_name`,`author`.`LastName` AS `last_name`,`book_with_genre`.`price` AS `price`,`book_with_genre`.`image` AS `image`,`book_with_genre`.`description` AS `description`,`book_with_genre`.`genre` AS `genre` from (`book_with_genre` join `author` on((`book_with_genre`.`author_id` = `author`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `top_ranked`
--
DROP TABLE IF EXISTS `top_ranked`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_ranked` AS select `book_with_genre_auth`.`rank` AS `rank`,`book_with_genre_auth`.`b_id` AS `b_id`,`book_with_genre_auth`.`auth_img` AS `auth_img`,`book_with_genre_auth`.`isbn` AS `isbn`,`book_with_genre_auth`.`title` AS `title`,`book_with_genre_auth`.`first_name` AS `first_name`,`book_with_genre_auth`.`last_name` AS `last_name`,`book_with_genre_auth`.`price` AS `price`,`book_with_genre_auth`.`image` AS `image`,`book_with_genre_auth`.`description` AS `description`,`book_with_genre_auth`.`genre` AS `genre` from `book_with_genre_auth` where (`book_with_genre_auth`.`rank` >= 3) order by `book_with_genre_auth`.`rank` desc limit 6;

-- --------------------------------------------------------

--
-- Structure for view `top_seller`
--
DROP TABLE IF EXISTS `top_seller`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_seller` AS select `sold`.`id` AS `id`,`sold`.`book_id` AS `book_id`,`sold`.`quantity` AS `quantity`,`book_with_genre_auth`.`b_id` AS `b_id`,`book_with_genre_auth`.`auth_img` AS `auth_img`,`book_with_genre_auth`.`isbn` AS `isbn`,`book_with_genre_auth`.`title` AS `title`,`book_with_genre_auth`.`first_name` AS `first_name`,`book_with_genre_auth`.`last_name` AS `last_name`,`book_with_genre_auth`.`price` AS `price`,`book_with_genre_auth`.`image` AS `image`,`book_with_genre_auth`.`description` AS `description`,`book_with_genre_auth`.`genre` AS `genre` from (`sold` join `book_with_genre_auth` on((`sold`.`book_id` = `book_with_genre_auth`.`b_id`))) order by `sold`.`quantity` desc limit 6;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

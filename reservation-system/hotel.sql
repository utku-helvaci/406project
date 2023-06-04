-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 04:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `fullname` tinytext DEFAULT '(NULL)',
  `emailaddress` tinytext DEFAULT '(NULL)',
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`, `fullname`, `emailaddress`, `datetime`) VALUES
(5, 'admin', '1234', '', '', '0000-00-00'),
(6, 'test', '123', '', '', '2023-05-08'),
(7, 'ttt', '123', '(NULL)', 'ttt@gmail.com', '0000-00-00'),
(8, 'ty', '123', '(NULL)', 'ty@gmail.com', '0000-00-00'),
(9, 'signuptest', '123', '(NULL)', 'signuptest@gmail.com', '0000-00-00'),
(10, 'yyyy', '123', '(NULL)', 'yyy@gmail.com', '0000-00-00'),
(11, '11111111', '123123', '(NULL)', '11111111@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'fdsfdsafdsafd', 'hgfdhgfdhgfdhgfd', 'ouoiuoiuoiuhgfd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Mr.', 'Teset', 'test', 'Royal Room', 'Triple', 1, '2023-05-08', '2023-05-09', 2448.00, 2668.32, 146.88, 'Breakfast', 73.44, 1),
(4, 'Miss.', 'Chris', 'Christiana', 'Classic Suite', 'Quad', 1, '2023-05-08', '2023-05-09', 1809.00, 2098.44, 217.08, 'Half Board', 72.36, 1),
(3, 'Miss.', 'Christian', 'Henry', 'Club Royal', 'Quad', 1, '2023-05-08', '2023-05-09', 1929.00, 2237.64, 231.48, 'Half Board', 77.16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_list`
--

CREATE TABLE `payment_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `fName` text DEFAULT NULL,
  `lName` text DEFAULT NULL,
  `card_id` text DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `cvv` text DEFAULT NULL,
  `price` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_list`
--

INSERT INTO `payment_list` (`id`, `fName`, `lName`, `card_id`, `expire_date`, `cvv`, `price`) VALUES
(1, 'Henry', 'Pol', '1231231231234', '2023-05-31', '234', '200'),
(2, 'Henry', 'Pol', '23432432432432', '2023-05-31', '432', '230'),
(3, 'eeee', 'www', '232321321', '2023-05-31', '321', '34');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `bedding` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `img_url1` text DEFAULT NULL,
  `img_url2` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `type_s` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `free_number` decimal(10,0) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`, `img_url`, `img_url1`, `img_url2`, `comment`, `type_s`, `price`, `free_number`) VALUES
(1, 'Guest House', 'Single', 'Full', NULL, 'images/g7.jpg', NULL, NULL, NULL, 'guest', NULL, '0'),
(2, 'Guest House', 'Double', 'Free', NULL, 'images/g8.jpg', NULL, NULL, 'guest1', 'guest', NULL, '2'),
(3, 'Guest House', 'Triple', 'Free', NULL, 'images/g9.jpg', NULL, NULL, 'guest2', 'guest', NULL, '2'),
(4, 'Guest House', 'Quad', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'guest', NULL, '2'),
(5, 'Hotels', 'Single', 'Free', NULL, 'images/image1.jpg', NULL, NULL, NULL, 'hotel', NULL, '2'),
(6, 'Hotels', 'Double', 'Free', NULL, 'images/image2.jpg', NULL, NULL, NULL, 'hotel', NULL, '2'),
(7, 'Hotels', 'Triple', 'Free', NULL, 'images/image2.jpg', NULL, NULL, NULL, 'hotel', NULL, '2'),
(8, 'Hotels', 'Quad', 'Free', NULL, 'images/image2.jpg', NULL, NULL, NULL, 'hotel', NULL, '2'),
(9, 'Apartments', 'Single', 'Free', NULL, 'images/g9.jpg', NULL, NULL, NULL, 'apart', NULL, '2'),
(10, 'Apartments', 'Double', 'Free', NULL, 'images/g9.jpg', NULL, NULL, NULL, 'apart', NULL, '2'),
(11, 'Apartments', 'Triple', 'Free', NULL, 'images/g9.jpg', NULL, NULL, NULL, 'apart', NULL, '2'),
(12, 'Apartments', 'Quad', 'Free', NULL, 'images/g9.jpg', NULL, NULL, NULL, 'apart', NULL, '2'),
(13, 'Dorms', 'Single', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'dorms', NULL, '2'),
(14, 'Dorms', 'Double', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'dorms', NULL, '2'),
(15, 'Dorms', 'Triple', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'dorms', NULL, '2'),
(16, 'Dorms', 'Quad', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'dorms', NULL, '2'),
(17, 'Available Roommates', 'Single', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'roommate', NULL, '2'),
(18, 'Available Roommates', 'Double', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'roommate', NULL, '2'),
(19, 'Available Roommates', 'Triple', 'Free', NULL, 'images/g10.jpg', NULL, NULL, 'this is test!', 'roommate', NULL, '2'),
(20, 'Available Roommates', 'Quad', 'Free', NULL, 'images/g10.jpg', NULL, NULL, 'this is test', 'roommate', NULL, '2'),
(21, 'Shared houses', 'Single', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'shared', NULL, '2'),
(22, 'Shared houses', 'Double', 'Free', NULL, 'images/g10.jpg', NULL, NULL, 'You can incorporate this function, so that the user can choose where they want to reserve,\r\nGuest house (like airbnb), Hotels, apartments, dorms, roommates and family house or\r\nhotel or a shared house with a roommate.\r\nThe hotels section can have many different hotels in the area (prices in Turkish lira or\r\nUSD) the same for dorms and others. I will share the different pictures for each and their\r\nlocation.\r\nThe design can be as the one for the website you have provided, it was good.\r\nThe categories can be shown on the homepage or can be in the menu on the homepage.\r\nWhen any category is clicked (for example if the user clicks on apartments) it should take\r\nthem to a page where there is a list of different apartments (if you like you can add a\r\nbonus where the user can filter by the number of rooms or price)', 'shared', NULL, '2'),
(23, 'Shared houses', 'Triple', 'Free', NULL, 'images/g10.jpg', NULL, NULL, NULL, 'shared', NULL, '2'),
(29, 'Shared houses', 'Quad', 'Free', NULL, 'images/202305181684373938.jpg', NULL, NULL, 'fdsafdsafdsafdsafdsafdsfdsafdsafdsafdsafdsa\r\nThis is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.This is test comment.', 'shared', NULL, '2'),
(30, 'Guest House', 'Single', 'Free', NULL, 'images/202305181684373938.jpg', NULL, NULL, 'fdsfdsfds', 'guest', NULL, '2'),
(31, 'Guest House', 'Single', 'Free', NULL, 'images/202305181684373938.jpg', NULL, NULL, 'fdsafdsa', 'guest', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(1, 'Dr.', 'Henry', 'Pol', 'henry@gmail.com', 'Turkish', 'Turkey', '123123123123', 'Guest House', 'Single', '1', 'Breakfast', '2023-05-15', '2023-05-16', 'Not Conform', NULL),
(2, 'Dr.', 'henry', 'pol', 'henry1@gmail.com', 'Turkish', 'Turkey', '12321321321321', 'Guest House', 'Single', '1', 'Room only', '2023-05-16', '2023-05-17', 'Not Conform', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_list`
--
ALTER TABLE `payment_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_list`
--
ALTER TABLE `payment_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

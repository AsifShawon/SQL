-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 12:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travello`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `a_id` int(11) DEFAULT NULL,
  `o_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`a_id`, `o_id`) VALUES
(1, 200),
(1, 300),
(1, 100),
(1, 500),
(1, 400),
(2, 500),
(3, 200),
(3, 300),
(3, 500),
(4, 100),
(4, 500),
(4, 400),
(4, 300);

-- --------------------------------------------------------

--
-- Table structure for table `destination_area`
--

CREATE TABLE `destination_area` (
  `dest_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination_area`
--

INSERT INTO `destination_area` (`dest_id`, `name`) VALUES
(1, 'Chittagong'),
(2, 'Dhaka'),
(3, 'Khulna'),
(4, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hname` varchar(50) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `star_rating` int(11) DEFAULT NULL,
  `minbudget` int(11) DEFAULT NULL,
  `maxbudget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hname`, `area_id`, `star_rating`, `minbudget`, `maxbudget`) VALUES
('Amari Dhaka', 2, 4, 8000, 16000),
('City Inn Ltd', 3, 2, 3500, 7000),
('Hotel Castle Salam', 3, 3, 4500, 9000),
('Hotel Grand Sultan Tea Resort & Golf', 4, 5, 15000, 25000),
('Hotel Holy Gate', 4, 3, 4500, 9000),
('Hotel InterContinental Dhaka', 2, 5, 15000, 30000),
('Hotel Metro International', 4, 3, 4000, 8000),
('Hotel Royal International', 3, 4, 6000, 12000),
('Hotel Sea Princes', 1, 3, 5000, 10000),
('Hotel Well Park Residence', 1, 3, 4000, 8000),
('Lakeshore Banani', 2, 3, 5000, 12000),
('Pan Pacific Sonargaon Cox\'s Bazar', 1, 5, 15000, 100000),
('Pan Pacific Sonargaon Dhaka', 2, 5, 10000, 20000),
('Panshi Inn', 4, 2, 2500, 4000),
('Rose View Hotel', 4, 4, 7000, 14000),
('Royal Tulip Sea Pearl Beach Resort & Spa', 1, 5, 10000, 90000),
('The Peninsula Chittagong Hotel', 1, 4, 6500, 12000),
('The Westin Dhaka', 2, 5, 10000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `Option_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `Option_type`) VALUES
(100, 'Hilly Regions'),
(200, 'Beachside'),
(300, 'Forests'),
(400, 'Waterfalls'),
(500, 'Historical sites');

-- --------------------------------------------------------

--
-- Table structure for table `popular_sights`
--

CREATE TABLE `popular_sights` (
  `sight_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `o_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_sights`
--

INSERT INTO `popular_sights` (`sight_id`, `name`, `a_id`, `o_id`) VALUES
(11, 'Ahsan Manzil', 2, 500),
(12, ' Lalbagh Fort,', 2, 500),
(13, 'Hussaini Dalan', 2, 500),
(14, 'Tara Mosque', 2, 500),
(15, 'Patenga sea beach', 1, 200),
(16, 'Cox\'s Bazar Beach', 1, 200),
(17, 'Inani Beach', 1, 200),
(18, 'St. Martin\'s Island', 1, 200),
(19, 'Hazarikhil Wildlife Sanctuary', 1, 300),
(20, 'Sitakundo Eco Park', 1, 300),
(21, 'Sajek Valley', 1, 100),
(22, 'Boga Lake', 1, 100),
(23, 'Alutila Guha', 1, 100),
(24, 'Chimbuk Hill', 1, 100),
(25, 'Chittagong War Cemetery', 1, 500),
(26, 'Ethnological Museum', 1, 500),
(27, 'Himchori', 1, 400),
(28, 'Shuvolong Waterfalls', 1, 400),
(29, 'Nafa-khum', 1, 400),
(30, 'Amiakhum', 1, 400),
(31, 'Kotka Beach', 3, 200),
(32, 'Sundarbans', 3, 300),
(33, 'Sixty Dome Mosque', 3, 500),
(34, 'Divisional Museum', 3, 500),
(35, 'Tamabil ', 4, 100),
(36, 'Kala Pahar', 4, 100),
(37, 'Lauwachora Forest,', 4, 300),
(38, 'Ratargul Swamp Forest', 4, 300),
(39, 'Hazrat Shahjalal Mazar Sharif', 4, 500),
(40, 'Hassan Raja Museum', 4, 500),
(41, 'Madhabkunda Waterfall', 4, 400),
(42, 'Ham Ham Waterfall', 4, 400);

-- --------------------------------------------------------

--
-- Table structure for table `rent_a_car`
--

CREATE TABLE `rent_a_car` (
  `rental_company` varchar(50) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `rental_type` varchar(20) DEFAULT NULL,
  `1daybudget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent_a_car`
--

INSERT INTO `rent_a_car` (`rental_company`, `area_id`, `rental_type`, `1daybudget`) VALUES
('BABYLON TRAVELS & RENT', 1, 'Car', 3000),
('BABYLON TRAVELS & RENT', 1, 'Micro', 5000),
('BABYLON TRAVELS & RENT', 1, 'Chader Gari', 8000),
('BUDGET RENT-A-CAR', 2, 'Car', 3500),
('BUDGET RENT-A-CAR', 2, 'Micro', 5500),
('BCMG LTD', 3, 'Car', 2500),
('BHAI BHAI RENT-A-CAR', 4, 'Micro', 6000),
('BCMG LTD', 3, 'Micro', 4500),
('BHAI BHAI RENT-A-CAR', 4, 'Car', 4000),
('BHAI BHAI RENT-A-CAR', 4, 'Chader Gari', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `name` varchar(50) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`name`, `area_id`, `budget`) VALUES
('BBQ Bangladesh', 2, 700),
('Chilli', 3, 700),
('Dine Fine Restaurant', 4, 500),
('Grameen Grill', 4, 400),
('Hotel Valley Garden Restaurant', 4, 800),
('Jhorna Restaurant', 3, 500),
('Lake Shore Resort', 3, 1000),
('Mainland China', 2, 1000),
('Mezetto', 1, 800),
('Nando\'s', 2, 800),
('Ozaki Restaurant', 4, 1000),
('Panshi Restaurant', 4, 500),
('Pepperoni', 1, 500),
('Prego Restaurant', 2, 800),
('Rangamati Restaurant', 1, 500),
('Red Chillies Restaurant', 3, 700),
('Rituraj Restaurant', 4, 500),
('Star Kabab', 2, 400),
('The Peninsula Chittagong:', 1, 1000),
('Zia\'s Restaurant', 1, 700);

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `city` text DEFAULT NULL,
  `options` text DEFAULT NULL,
  `sight` text NOT NULL,
  `restaurant` text DEFAULT NULL,
  `restaurantBudget` int(11) NOT NULL,
  `hotels` text DEFAULT NULL,
  `hotelBudget` int(11) NOT NULL,
  `car` text NOT NULL,
  `carBudget` int(11) NOT NULL,
  `member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`id`, `username`, `city`, `options`, `sight`, `restaurant`, `restaurantBudget`, `hotels`, `hotelBudget`, `car`, `carBudget`, `member`) VALUES
(16, 'Golpadhar', 'Dhaka', 'Historical sites', 'Lalbagh Fort,', 'Mainland China', 0, 'Hotel InterContinental Dhaka', 15000, 'Micro', 5500, 1),
(17, 'Golpadhar', 'Dhaka', 'Historical sites', 'Lalbagh Fort,', 'Mainland China', 0, 'Hotel InterContinental Dhaka', 15000, 'Car', 3500, 1),
(18, 'Golpadhar', 'Dhaka', 'Historical sites', 'Ahsan Manzil', 'BBQ Bangladesh', 700, 'Amari Dhaka', 8000, 'Car', 3500, 1),
(19, 'Golpadhar', 'Chittagong', 'Beachside', 'Patenga sea beach', 'Mezetto', 800, 'Hotel Sea Princes', 5000, 'Car', 3000, 1),
(20, 'Golpadhar', 'Chittagong', 'Forests', 'Sitakundo Eco Park', 'Mezetto', 800, 'Royal Tulip Sea Pearl Beach Resort & Spa', 10000, 'Chader Gari', 8000, 1),
(22, 'Golpadhar', 'Khulna', 'Forests', 'Sundarbans', 'Jhorna Restaurant', 500, 'Hotel Castle Salam', 4500, 'Micro', 4500, 1),
(23, 'asif_2', 'Khulna', 'Beachside', 'Kotka Beach', 'Lake Shore Resort', 1000, 'Hotel Castle Salam', 4500, 'Micro', 4500, 3),
(25, 'Nishan', 'Dhaka', 'Historical sites', 'Hussaini Dalan', 'Prego Restaurant', 800, 'Hotel InterContinental Dhaka', 15000, 'Micro', 5500, 2),
(26, 'Nishan', 'Khulna', 'Beachside', 'Kotka Beach', 'Chilli', 700, 'Hotel Royal International', 6000, 'Micro', 4500, 3),
(27, 'asif_2', 'Khulna', 'Forests', 'Sundarbans', 'Red Chillies Restaurant', 700, 'Hotel Castle Salam', 4500, 'Car', 2500, 1),
(28, 'asif', 'Sylhet', 'Historical sites', 'Hassan Raja Museum', 'Hotel Valley Garden Restaurant', 800, 'Hotel Holy Gate', 4500, 'Car', 4000, 1),
(29, 'Akash ', 'Chittagong', 'Hilly Regions', 'Chimbuk Hill', 'Rangamati Restaurant', 500, 'Hotel Sea Princes', 5000, 'Car', 3000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Pooh', 'pooh@gmail.com', 'winniethepooh'),
(2, 'tiger', 'tiger1@gmail.com', 'tigerfren1'),
(3, 'Golpadhar', 'golpadhar2@gmail.com', 'Golpa123Dhar123!?'),
(4, 'Golpadhar2', 'golpadhar2@gmail.com', '12345'),
(5, 'Golpadhar3', 'Golpadhar3@gmail.com', 'Golpa123Dhar123!?'),
(6, 'asif_2', 'asif@gmail.com', 'asif2'),
(7, 'Nishan', 'nishanok@nishan.com', 'nishanvalomeye'),
(8, 'asif', 'asif2@gmail.com', 'asif23'),
(9, 'Akash ', 'khanakash7060@gmail.com', 'Oldsclvns7060');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD KEY `a_id` (`a_id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `destination_area`
--
ALTER TABLE `destination_area`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hname`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_sights`
--
ALTER TABLE `popular_sights`
  ADD PRIMARY KEY (`sight_id`),
  ADD KEY `popular_sights_ibfk_1` (`a_id`),
  ADD KEY `popular_sights_ibfk_2` (`o_id`);

--
-- Indexes for table `rent_a_car`
--
ALTER TABLE `rent_a_car`
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`name`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `selected`
--
ALTER TABLE `selected`
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
-- AUTO_INCREMENT for table `selected`
--
ALTER TABLE `selected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availability`
--
ALTER TABLE `availability`
  ADD CONSTRAINT `availability_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `destination_area` (`dest_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `availability_ibfk_2` FOREIGN KEY (`o_id`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `destination_area` (`dest_id`);

--
-- Constraints for table `popular_sights`
--
ALTER TABLE `popular_sights`
  ADD CONSTRAINT `popular_sights_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `destination_area` (`dest_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `popular_sights_ibfk_2` FOREIGN KEY (`o_id`) REFERENCES `options` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `rent_a_car`
--
ALTER TABLE `rent_a_car`
  ADD CONSTRAINT `rent_a_car_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `destination_area` (`dest_id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `destination_area` (`dest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

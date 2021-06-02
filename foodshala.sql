-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 11:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sno` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `productImage` tinytext NOT NULL,
  `productID` int(11) NOT NULL,
  `price` tinytext NOT NULL,
  `userID` tinytext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sno`, `productName`, `productImage`, `productID`, `price`, `userID`, `createdAt`) VALUES
(8, 'Prawns', 'images/products/60b6a6c2d59003.53283553.jpg', 8, '900', 'c2833be4', '2021-06-02 20:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sno` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `subject` tinytext NOT NULL,
  `details` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sno`, `name`, `email`, `subject`, `details`, `createdAt`) VALUES
(1, 'Kushal Ghosh', 'kushalghosh9899@gmail.com', 'Its Subject', 'This is mesage', '2021-06-02 20:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `sno` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`sno`, `email`, `createdAt`) VALUES
(1, 'kushalghosh9899@gmail.com', '2021-06-02 20:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `sno` int(11) NOT NULL,
  `productImage` tinytext NOT NULL,
  `userID` tinytext NOT NULL,
  `productName` tinytext NOT NULL,
  `price` int(11) NOT NULL,
  `productID` tinytext NOT NULL,
  `orderID` tinytext NOT NULL,
  `orderStatus` tinytext NOT NULL,
  `createdAt` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`sno`, `productImage`, `userID`, `productName`, `price`, `productID`, `orderID`, `orderStatus`, `createdAt`) VALUES
(1, 'images/products/60b6a45be5e0f6.70955822.jpg', 'c2833be4', 'Noodles', 150, '1', '3fd0a941403d32c9', 'Pending', '2021-06-02'),
(2, 'images/products/60b6a512bf7870.08606688.jpg', 'c2833be4', 'Dal Makhni', 250, '3', '3fd0a941403d32c9', 'Cancelled', '2021-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sno` int(11) NOT NULL,
  `fname` tinytext NOT NULL,
  `lname` tinytext NOT NULL,
  `hno` tinytext NOT NULL,
  `apartment` tinytext NOT NULL,
  `town` tinytext NOT NULL,
  `state` tinytext NOT NULL,
  `phone` tinyint(4) NOT NULL,
  `email` tinytext NOT NULL,
  `orderNote` text NOT NULL,
  `userID` tinytext NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `orderID` tinytext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sno`, `fname`, `lname`, `hno`, `apartment`, `town`, `state`, `phone`, `email`, `orderNote`, `userID`, `totalPrice`, `orderID`, `createdAt`) VALUES
(3, 'Kushal ', 'Ghosh', 'D 52 A', 'Hare Krishna Niwas', 'Delhi', 'Delhi', 127, 'kushalghosh9899@gmail.com', 'Nothing', 'c2833be4', 400, '3fd0a941403d32c9', '2021-06-02 19:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `productImage` tinytext NOT NULL,
  `image2` tinytext NOT NULL,
  `image3` tinytext NOT NULL,
  `image4` tinytext NOT NULL,
  `image5` tinytext NOT NULL,
  `restaurantName` tinytext NOT NULL,
  `foodType` tinytext NOT NULL,
  `price` int(11) NOT NULL,
  `description` tinytext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products`, `productName`, `productImage`, `image2`, `image3`, `image4`, `image5`, `restaurantName`, `foodType`, `price`, `description`, `createdAt`) VALUES
(1, 'Noodles', 'images/products/60b6a45be5e0f6.70955822.jpg', 'images/products/60b6a45be5f283.41107749.jpg', 'images/products/60b6a45be5ff57.41821652.jpg', 'images/products/60b6a45be61ad5.35908804.jpg', 'images/products/60b6a45be62be0.98551154.jpg', 'Kushal Restaurant', 'Veg', 150, 'Noodles with veggies', '2021-06-01 21:19:23'),
(2, 'Veg Burger', 'images/products/60b6a49ecca8c5.74827251.jpg', 'images/products/60b6a49eccbcd0.04354833.jpg', 'images/products/60b6a49eccce79.93259754.jpg', 'images/products/60b6a49eccdbc8.39534560.jpg', 'images/products/60b6a49ecced87.51174304.jpg', 'Kushal Restaurant', 'Veg', 150, 'Extra Cheesy Burger with lots of veggies', '2021-06-01 21:20:30'),
(3, 'Dal Makhni', 'images/products/60b6a512bf7870.08606688.jpg', 'images/products/60b6a512bf9363.17600603.jpg', 'images/products/60b6a512bfa1a1.20311315.jpg', 'images/products/60b6a512bfb240.89877057.jpg', 'images/products/60b6a512bfc0e9.49692465.jpg', 'Kushal Restaurant', 'Veg', 250, 'Veg Spicy Food', '2021-06-01 21:22:26'),
(4, 'Pizza', 'images/products/60b6a5640d0a53.37150695.jpg', 'images/products/60b6a5640d1c85.01763453.jpg', 'images/products/60b6a5640d38d0.63541765.jpg', 'images/products/60b6a5640d4dc6.77912796.jpg', 'images/products/60b6a5640d5e87.84274071.jpg', 'Kushal Restaurant', 'Veg', 150, 'Extra Cheesy Pizza with lots of veggies', '2021-06-01 21:23:48'),
(5, 'Momos', 'images/products/60b6a5b65c8ac5.41803553.jpg', 'images/products/60b6a5b65c9ac5.66527957.jpg', 'images/products/60b6a5b65cad51.44523905.jpg', 'images/products/60b6a5b65cbdf3.10605548.jpg', 'images/products/60b6a5b65cf4b4.93037937.jpg', 'Kushal Restaurant', 'Veg', 250, 'Veg Momos with Red Chilli Sauce', '2021-06-01 21:25:10'),
(6, 'Chicken', 'images/products/60b6a61a096e03.00659113.jpg', 'images/products/60b6a61a098499.75635646.jpg', 'images/products/60b6a61a09aaa0.47870282.jpg', 'images/products/60b6a61a09bae5.27473403.jpg', 'images/products/60b6a61a09c887.56507690.jpg', 'Kushal Restaurant', 'Non Veg', 550, 'Grilled and Roasted Chicken', '2021-06-01 21:26:50'),
(7, 'Fish', 'images/products/60b6a672ae8561.18852056.jpg', 'images/products/60b6a672ae99e1.53382618.jpg', 'images/products/60b6a672aea8d8.33599151.jpg', 'images/products/60b6a672aeb6a8.20532779.jpg', 'images/products/60b6a672aec360.31625902.jpg', 'Kushal Restaurant', 'Non Veg', 400, 'Grilled and Roasted Fish with Gravy', '2021-06-01 21:28:18'),
(8, 'Prawns', 'images/products/60b6a6c2d59003.53283553.jpg', 'images/products/60b6a6c2d5a006.71185803.jpg', 'images/products/60b6a6c2d5ad16.36940363.jpg', 'images/products/60b6a6c2d5b972.84118943.jpg', 'images/products/60b6a6c2d5cf97.39036358.jpg', 'Kushal Restaurant', 'Non Veg', 900, 'Grilled and Roasted Prawns', '2021-06-01 21:29:38'),
(9, 'Chicken Burger', 'images/products/60b6a7056b4c12.36385679.jpg', 'images/products/60b6a7056b5d26.09675890.jpg', 'images/products/60b6a7056b6a10.77178374.jpg', 'images/products/60b6a7056b7689.68223058.jpg', 'images/products/60b6a7056b8283.21034478.jpg', 'Kushal Restaurant', 'Non Veg', 200, 'Grilled Chicken with Burger', '2021-06-01 21:30:45'),
(10, 'Mutton', 'images/products/60b6a755f32524.30316843.jpg', 'images/products/60b6a755f334d7.86766411.jpg', 'images/products/60b6a755f342d1.19760363.jpg', 'images/products/60b6a755f34f33.61387082.jpg', 'images/products/60b6a755f36a65.47070157.jpg', 'Kushal Restaurant', 'Non Veg', 780, 'Grilled and Roasted Mutton with Gravy', '2021-06-01 21:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users` int(11) NOT NULL,
  `userid` tinytext NOT NULL,
  `fullname` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `preference` tinytext NOT NULL,
  `accountType` tinytext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hashedPassword` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users`, `userid`, `fullname`, `email`, `preference`, `accountType`, `createdAt`, `hashedPassword`) VALUES
(1, 'c2833be4', 'Kushal Ghosh', 'kushalghosh9899@gmail.com', 'veg', 'user', '2021-06-01 15:54:08', '$2y$10$6GO/DxIaD359ETLUGW2mHe2DdxcFmgV87LTdLnIVVwGyBKi7omvwG'),
(2, '1ec78def', 'Kushal Restaurant', 'restaurant@gmail.com', 'veg', 'restaurant', '2021-06-01 16:36:55', '$2y$10$3tvE2GD45De0ViQEy6bJTeczdalk3OYXmSMnya.5DHVzyfNEyEDFC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaif_cuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `userId`, `productId`, `qty`, `productName`, `productPrice`, `productImage`) VALUES
(1, 4, 1, 2, 'Sweet Potato Fries Bowl', '600000', './images/food-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `menufood`
--

CREATE TABLE `menufood` (
  `menuId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menufood`
--

INSERT INTO `menufood` (`menuId`, `name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Our Specials'),
(5, 'Top Dishes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `menuId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `des` varchar(255) NOT NULL,
  `soldcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `name`, `price`, `image`, `menuId`, `qty`, `des`, `soldcount`) VALUES
(1, 'Sweet Potato Fries Bowl', '600000', 'food-3.png', 1, 100, 'These Sweet Potato Fries bowl are a glorious, messy plate of goodness. Crispy sweet potato fries loaded with lots of fresh summer vegetables and a lime ranch. By adding a seasoning blend with chipotle powder, garlic, and onion, these spicy sweet potato fr', 2),
(2, 'BLINIS CAVIAR', '300000', 'tuna.jpg', 2, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 1),
(3, 'TIRAMISU', '375000', 'tira1.jpg', 1, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 5),
(4, 'APPLE TART', '187000', 'pic2.jpg', 1, 50, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 4),
(5, 'CLUB SANDWICH', '650000', 'club1.jpg', 1, 40, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 6),
(6, 'Beef Ribs', '100000', 'be1.jpg', 3, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 34),
(7, 'Ferment', '750000', 'no1.jpg', 3, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 2),
(8, 'Sans espines', '200000', 'ga1.jpg', 3, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 2),
(9, 'Ripe Black Pepper', '150000', 'tai1.jpg', 3, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 1),
(10, 'Beccafico Salad', '600000', 'sa1.jpg', 3, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 1),
(11, 'Automn Vege', '200000', 'lu2.jpg', 2, 50, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 1),
(12, 'Palermo Soup', '725000', 'pu1.jpg', 2, 50, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 1),
(13, 'Sweet Potato Fries Bowl', '600000', 'food-3.png', 4, 100, 'These Sweet Potato Fries bowl are a glorious, messy plate of goodness. Crispy sweet potato fries loaded with lots of fresh summer vegetables and a lime ranch. By adding a seasoning blend with chipotle powder, garlic, and onion, these spicy sweet potato\r\n ', 2),
(14, 'Vegan Salad bowl', '425000', 'food-1.png', 4, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.\r\n', 2),
(15, 'Ripe Black Pepper', '150000', 'tai1.jpg', 5, 50, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 4),
(16, 'CHOCO CAKE', '375000', 'pic1.jpg', 5, 50, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 4),
(17, 'Ferment', '750000', 'no1.jpg', 5, 40, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleID`, `name`) VALUES
(1, 'Admin'),
(2, 'QLBanhang'),
(3, 'Nhanvien'),
(4, 'Khachhang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `password`, `name`, `RoleID`, `address`, `status`) VALUES
(1, 'lexuanduc@gmail.com', '123456', 'Duc', 1, 'HCM', 1),
(2, 'nguyenvanA@gmail.com', '123456', 'NguyenvanA', 2, 'HCM', 1),
(3, 'nguyenvanB@gmail.com', '0123456', 'NguyenvanB', 4, 'asdasda', 1),
(4, 'vidu1@gmail.com', 'vidu1', 'vidu', 3, 'dasdasdasda', 1),
(6, 'hvthanhtruc121203@gmail.com', '123456789', 'Hoàng Vũ Thanh Trúc', 4, '1212abc', 1),
(7, 'lemai12@gmail.com', '123456789', 'mai', 4, 'lemai12@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `cartuser_fk` (`userId`),
  ADD KEY `cartproduct_fk` (`productId`);

--
-- Indexes for table `menufood`
--
ALTER TABLE `menufood`
  ADD PRIMARY KEY (`menuId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `menufood_fk` (`menuId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `role_fk` (`RoleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menufood`
--
ALTER TABLE `menufood`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cartproduct_fk` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`),
  ADD CONSTRAINT `cartuser_fk` FOREIGN KEY (`userId`) REFERENCES `users` (`userID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `menu_fk` FOREIGN KEY (`menuId`) REFERENCES `menufood` (`menuId`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `d_abc` FOREIGN KEY (`RoleID`) REFERENCES `role` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

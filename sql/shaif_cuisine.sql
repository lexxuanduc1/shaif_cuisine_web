-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2023 lúc 08:50 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shaif_cuisine`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `BillId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cartId`, `userId`, `productId`, `qty`, `productName`, `productPrice`, `productImage`) VALUES
(1, 4, 1, 2, 'Sweet Potato Fries Bowl', '600', './images/food-3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menufood`
--

CREATE TABLE `menufood` (
  `menuId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menufood`
--

INSERT INTO `menufood` (`menuId`, `name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Our Specials'),
(5, 'Top Dishes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productId`, `name`, `price`, `image`, `menuId`, `qty`, `des`, `soldcount`) VALUES
(1, 'Sweet Potato Fries Bowl', '600', './images/food-3.png', 1, 100, 'These Sweet Potato Fries bowl are a glorious, messy plate of goodness. Crispy sweet potato fries loaded with lots of fresh summer vegetables and a lime ranch. By adding a seasoning blend with chipotle powder, garlic, and onion, these spicy sweet potato fr', 2),
(2, 'BLINIS CAVIAR', '300', './images/tuna.jpg', 2, 100, 'chua co', 1),
(3, 'TIRAMISU', '375', './images/tira1.jpg', 1, 100, 'chua co', 5),
(4, 'APPLE TART', '187', './images/pic2.jpg', 1, 50, 'chua co', 4),
(5, 'CLUB SANDWICH', '650', './images/club1.jpg', 1, 40, 'chua co', 6),
(6, 'Beef Ribs', '1', './images/be1.jpg', 3, 100, 'chua co', 34),
(7, 'Ferment', '750', './images/no1.jpg', 3, 100, 'chua co', 2),
(8, 'Sans espines', '2', './images/ga1.jpg', 3, 100, 'chua co', 2),
(9, 'Ripe Black Pepper', '1', './images/tai1.jpg', 3, 100, 'chua co', 1),
(10, 'Beccafico Salad', '600', './images/sa1.jpg', 3, 100, 'chua co', 1),
(11, 'Automn Vege', '200', './images/lu2.jpg', 2, 50, 'chua co', 1),
(12, 'Palermo Soup', '725', './images/pu1.jpg', 2, 50, 'chua co', 1),
(13, 'Sweet Potato Fries Bowl', '600', './images/food-3.png', 4, 100, 'These Sweet Potato Fries bowl are a glorious, messy plate of goodness. Crispy sweet potato fries loaded with lots of fresh summer vegetables and a lime ranch. By adding a seasoning blend with chipotle powder, garlic, and onion, these spicy sweet potato\r\n ', 2),
(14, 'Vegan Salad bowl', '425', './images/food-1.png', 4, 100, ' Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion of flavors and textures.\r\n', 2),
(15, 'Ripe Black Pepper', '1', './images/tai1.jpg', 5, 50, 'chua co', 4),
(16, 'CHOCO CAKE', '375', './images/pic1.jpg', 5, 50, 'chua co', 4),
(17, 'Ferment', '750', './images/no1.jpg', 5, 40, 'chua co', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `RoleID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`RoleID`, `name`) VALUES
(1, 'Admin'),
(2, 'QLBanhang'),
(3, 'Nhanvien'),
(4, 'Khachhang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userID`, `email`, `password`, `name`, `RoleID`, `address`, `status`) VALUES
(1, 'lexuanduc@gmail.com', '123456', 'Duc', 1, 'HCM', 1),
(2, 'nguyenvanA@gmail.com', '123456', 'NguyenvanA', 2, 'HCM', 1),
(3, 'nguyenvanB@gmail.com', '0123456', 'NguyenvanB', 4, 'asdasda', 1),
(4, 'vidu1@gmail.com', 'vidu1', 'vidu', 3, 'dasdasdasda', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BillId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `billProduct_fk` (`productId`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `cartuser_fk` (`userId`),
  ADD KEY `cartproduct_fk` (`productId`);

--
-- Chỉ mục cho bảng `menufood`
--
ALTER TABLE `menufood`
  ADD PRIMARY KEY (`menuId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `menufood_fk` (`menuId`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `role_fk` (`RoleID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `BillId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menufood`
--
ALTER TABLE `menufood`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `billProduct_fk` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`),
  ADD CONSTRAINT `billUser_fk` FOREIGN KEY (`userId`) REFERENCES `users` (`userID`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cartproduct_fk` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`),
  ADD CONSTRAINT `cartuser_fk` FOREIGN KEY (`userId`) REFERENCES `users` (`userID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `menu_fk` FOREIGN KEY (`menuId`) REFERENCES `menufood` (`menuId`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `d_abc` FOREIGN KEY (`RoleID`) REFERENCES `role` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

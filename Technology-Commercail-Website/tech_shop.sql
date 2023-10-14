-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 10:10 AM
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
-- Database: `tech_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogsdata`
--

CREATE TABLE `blogsdata` (
  `id` int(11) NOT NULL,
  `blogimg` varchar(255) NOT NULL,
  `blogtitle` varchar(255) NOT NULL,
  `blogdesc` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `blogtext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogsdata`
--

INSERT INTO `blogsdata` (`id`, `blogimg`, `blogtitle`, `blogdesc`, `username`, `blogtext`) VALUES
(2, 'How-Can-Business-Blogs-Help-in-Making-Money.webp', 'Laptop Technology', 'How important are laptops now a days and what did it gives us in our daily life', 'admin', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem praesentium asperiores soluta sapiente voluptas tempore impedit quod placeat eius nam vero modi obcaecati itaque, minima quia hic natus dolorem maiores suscipit blanditiis ea accusantium vol'),
(3, 'SOMIC-SSA-Blog-Header.jpg', 'Mobiles', 'Did mobiles really effects our daily life in a good way', 'admin', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repellat, magni culpa labore ipsam consequatur! Distinctio, non tempora? Velit totam iusto voluptas aliquid consequuntur sunt aspernatur quaerat. Quam delectus aut dolor obcaecati pariatur dol'),
(4, 'apple-airpods.jpg', 'Headphones', 'We must agree that headphones is really an amazing piece of tech', 'admin', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est aspernatur aliquid reprehenderit maiores ipsam officia odio ut tempore! Temporibus tenetur enim ratione quasi quod at, modi blanditiis nulla sint voluptas officia eveniet commodi est nemo nisi ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `image`, `name`, `price`, `quantity`) VALUES
(21, 'download.jpg', 'EVSA', 2000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category`, `quantity`) VALUES
(12, 'Iphone', 'Apple phones are the best in the market, it do not need much to talk about', 800, 'iphone-13-6.jpg', 'Mobile', 1),
(13, 'Macbook', 'Macbook are the best laptops for graphics and with very high performance', 1300, 'mac.jpg', 'Laptop', 1),
(14, 'Headphones', 'This product is quite great for the stability and quailty in audio transition it gives us', 340, 'headphonered.jpg', 'HeadPhones', 1),
(15, 'Beats', 'This new style for headphones is quite cool for sporting exercise with it cool design', 430, 'headphonesblue.jpg', 'HeadPhones', 1),
(16, 'gaming-Headset', 'This headset is great for gaming even in streaming lives tournaments', 600, '61CqYq+xwNL._AC_SS450_.jpg', 'HeadPhones', 1),
(17, 'Iphone-X', 'Iphone X is one of the most amazing iphones anyone could buy try it now', 480, '71hh7cpWadL._SX466_.jpg', 'Mobile', 1),
(18, 'Dev-Headset', 'A modren headset used for big gaming tournaments you should buy it now', 700, '71o6JhyFEqL._AC_SS450_.jpg', 'HeadPhones', 1),
(19, 'Iphone-XR', 'XR is a great replacment for iphone x which is a upgrade for X', 800, '1536782796_635_iphone_xr.jpg', 'Mobile', 1),
(20, 'Laptop-pur', 'A great laptop for  graphics and interior designs', 1500, 'AxhZJNX2.jpg', 'Laptop', 1),
(21, 'EVSA', 'A powerful computer of big projects like AI, ML....', 2000, 'download.jpg', 'Laptop', 1),
(22, 'blue-headshoot', 'blue is a speed up for any gamin headset has been ever made', 1100, 'game-blue-1-600x600.jpg', 'HeadPhones', 1),
(23, 'S22+', 'This samsung phone is a powerfull phone with great cpu for memmory mangment ', 1000, 'original.jpeg', 'Mobile', 1),
(24, 'HP', 'This HP laptop with AMD cpu is super great for collage and startup companies', 600, 'hp-pavilion-15-laptop-amd-ryzen-5-4500u-8-gb-512-gb-ssd-156-hd-touchscreen-win10-backlit-keyboard.jpg', 'Laptop', 1),
(25, 'M32', 'M32 is great phone for teenagers small, new and very good price for young people', 360, '71F4jU7MRUS._SX466_.jpg', 'Mobile', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `password`, `confirmpassword`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogsdata`
--
ALTER TABLE `blogsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogsdata`
--
ALTER TABLE `blogsdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'Tin đào tạo'),
(2, 'Tin tuyển sinh'),
(3, 'Tin hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `intro` text NOT NULL,
  `detail` text NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `image`, `intro`, `detail`, `cate_id`) VALUES
(1, 'Sinh viên FPoly tìm hiểu mô hình hoạt động Rạp chiếu phim CGV', 'tin1.jpg', 'Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', 'Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua. Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua. Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua. Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', 1),
(2, 'Sinh viên FPoly tìm hiểu mô hình hoạt động Rạp chiếu phim CGV', 'tin2.jpg', 'Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', 'Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua. Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua. Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua. Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', 2),
(3, 'Sinh viên FPoly tìm hiểu mô hình hoạt động Rạp chiếu phim CGV', 'tin2.jpg', '3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', '3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', 3),
(4, 'Sinh viên FPoly tìm hiểu mô hình hoạt động Rạp chiếu phim CGV', 'tin1.jpg', '3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', '3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.3 Sinh viên Cao đẳng thực hành FPT Polytechnic Tây Nguyên đã có chuyến tham quan và tìm hiểu mô hình hoạt động của rạp chiếu phim CGV sáng ngày 15/10 vừa qua.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 06:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Sm Alamin', 'Alamin', 'alaminpiash94@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Tamanna Islam', 'Tamanna', 'tamanna@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Mohammad Kawser', 'AlaminKawser', 'kawsesr@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Ariful Islam', 'Ariful', 'ariful12122@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Borkot Ali khan', 'Borkot', 'borkot12@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(6, 'Hemel Ahmed', 'Hemel', 'hemel@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(7, 'NewUser', 'new', 'new@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Shakil Hasan', ' Shakil', 'shakil@gmail.com', '89bb9a7088b6357e55ee627cb636fd6f'),
(9, 'Hamida Ferdos', 'hamida', 'hamida1212@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Test Value', 'test', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

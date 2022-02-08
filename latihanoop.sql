-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 05:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihanoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `wn` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `askl` varchar(100) NOT NULL,
  `na` varchar(100) NOT NULL,
  `ni` varchar(100) NOT NULL,
  `pkot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`id`, `nama`, `ttl`, `tl`, `wn`, `almt`, `email`, `nohp`, `askl`, `na`, `ni`, `pkot`) VALUES
(1, 'Jajang', 'Bogor', '2022-02-10', 'Indonesia', 'Bogor', 'jajang@gmail.com', '081231234912', 'Smp Pesat', 'Komar', 'Nunung', '4.000.000'),
(3, 'Dadang', 'Banten', '2022-02-09', 'Indonesia', 'Jakarta', 'dadang@gmail.com', '081231413214', 'Smp Pesat', 'Yayat', 'Siti', '5.000.000'),
(4, 'Dadang', 'Bogor', '2022-02-16', 'Indonesia', 'Jakarta', 'dadang@gmail.com', '081231413214', 'Smp Pesat', 'Yayat', 'Siti', '5.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs`
--
ALTER TABLE `cs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs`
--
ALTER TABLE `cs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

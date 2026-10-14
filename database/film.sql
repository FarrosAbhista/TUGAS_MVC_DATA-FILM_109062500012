-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2026 at 12:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film_abhista`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `genre_film` varchar(100) NOT NULL,
  `tahun_rilis` int NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `rating_film` float NOT NULL,
  `durasi_menit` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `genre_film`, `tahun_rilis`, `sutradara`, `rating_film`, `durasi_menit`) VALUES
(1, 'Tokyo Story', 'Drama', 1953, 'Yasujiro Ozu', 8.1, 136),
(2, 'Rashomon', 'Crime', 1950, 'Akira Kurosawa', 8.2, 88),
(3, 'Drive My Car', 'Drama', 2021, 'Ryusuke Hamaguchi', 7.9, 179),
(4, 'Shoplifters', 'Drama', 2018, 'Hirokazu Kore-eda', 7.9, 121),
(5, 'Perfect Blue', 'Animation', 1997, 'Satoshi Kon', 8, 81),
(6, 'Spirited Away', 'Animation', 2001, 'Hayao Miyazaki', 8.6, 125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

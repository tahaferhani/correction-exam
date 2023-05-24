-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2023 at 05:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Habitants`
--

CREATE TABLE `Habitants` (
  `id` int(11) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Habitants`
--

INSERT INTO `Habitants` (`id`, `cin`, `nom`, `prenom`, `ville_id`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'J658363', 'Bella', 'Said', 1, 'J658363.webp', '2023-05-24 14:07:41', '2023-05-24 14:57:34'),
(4, 'K56386', 'Karim', 'Karim 2', 2, 'K56386.png', '2023-05-24 14:10:48', '2023-05-24 14:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `Villes`
--

CREATE TABLE `Villes` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `nombreHabitats` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Villes`
--

INSERT INTO `Villes` (`id`, `nom`, `nombreHabitats`, `created_at`, `updated_at`) VALUES
(1, 'Agadir', 1, '2023-05-24 14:41:32', '2023-05-24 14:57:34'),
(2, 'Marrakech', 1, '2023-05-24 14:54:48', '2023-05-24 14:49:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Habitants`
--
ALTER TABLE `Habitants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Villes`
--
ALTER TABLE `Villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Habitants`
--
ALTER TABLE `Habitants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Villes`
--
ALTER TABLE `Villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

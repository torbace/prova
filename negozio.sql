-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 14, 2020 at 11:35 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negozio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nome_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nome_cat`) VALUES
(1, 'fantascienza'),
(2, 'gialli\r\n'),
(3, 'commedia'),
(4, 'biografia');

-- --------------------------------------------------------

--
-- Table structure for table `prodotti`
--

CREATE TABLE `prodotti` (
  `id_prodotto` int(11) NOT NULL,
  `nome_prodotto` varchar(255) NOT NULL,
  `descr_prodotto` varchar(255) NOT NULL,
  `prezzo` float NOT NULL,
  `cat_prodotto` int(11) NOT NULL,
  `immagine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodotti`
--

INSERT INTO `prodotti` (`id_prodotto`, `nome_prodotto`, `descr_prodotto`, `prezzo`, `cat_prodotto`, `immagine`) VALUES
(1, 'Star track', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas deleniti laudantium quos. Non ex nihil minus nisi qui officiis magnam alias error totam! Esse architecto saepe magnam autem doloribus facere!', 19.99, 1, 'immagini/img1.jpg'),
(2, 'Shutter Island', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas deleniti laudantium quos. Non ex nihil minus nisi qui officiis magnam alias error totam! Esse architecto saepe magnam autem doloribus facere!', 14.25, 1, 'immagini/img2.jpg'),
(3, 'Notting Hill', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas deleniti laudantium quos. Non ex nihil minus nisi qui officiis magnam alias error totam! Esse architecto saepe magnam autem doloribus facere!', 25.32, 1, 'immagini/img3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id_prodotto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id_prodotto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

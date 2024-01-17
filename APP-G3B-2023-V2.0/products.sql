-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 jan. 2024 à 01:18
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `products`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image_path` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size_s` tinyint(1) NOT NULL,
  `size_m` tinyint(1) NOT NULL,
  `size_l` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `image_path`, `title`, `price`, `size_s`, `size_m`, `size_l`) VALUES
(1, 'Images/casque_bleu.png', 'Test1', '12.00', 0, 1, 0),
(2, 'Images/casque_rose.png', 'Adaz', '14.00', 0, 0, 1),
(3, 'Images/casque_vert.png', 'etutdry', '15.00', 0, 0, 1),
(4, 'Images/casque_rose.png', 'gfcilukjyg', '15.00', 0, 0, 1),
(5, 'Images/casque_rose.png', 'aze', '52.00', 0, 1, 0),
(6, 'Images/casque_bleu.png', 'azd', '15.00', 0, 0, 1),
(7, 'Images/casque_bleu.png', 'adez', '5.00', 1, 0, 0),
(8, 'Images/casque_vert.png', 'ydcxk', '15.00', 0, 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

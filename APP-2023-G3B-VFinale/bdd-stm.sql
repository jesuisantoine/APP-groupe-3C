-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 jan. 2024 à 03:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd-stm`
--

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

CREATE TABLE `cgu` (
  `id_cgu` int(11) NOT NULL,
  `titre_texte` varchar(1000) NOT NULL,
  `texte` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id_events` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(300) NOT NULL,
  `heure` time NOT NULL,
  `description` varchar(200) NOT NULL,
  `image_gradin` longblob NOT NULL,
  `bruit_gradin` varchar(1000) NOT NULL,
  `id_stade` int(11) NOT NULL,
  `image_stade` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id_events`, `nom`, `date`, `lieu`, `heure`, `description`, `image_gradin`, `bruit_gradin`, `id_stade`, `image_stade`) VALUES
(1, 'FORMULA 1 MSC CRUISES JAPANESE GRAND PRIX 2024', '2024-01-17', 'Suzuka Circuit - TOKYO - JAPON\r\n', '12:00:00', 'Les billets en A2 vous mènent à la fin de la première ligne droite. A quelques mètres seulement de la ligne de départ et d’arrivée, vous vous trouverez dans l’une des meilleures places du circuit ! Pr', 0x4272616e64204c6f676f2e504e47, '12', 0, 0x53544d4c6f676f45637269747572652e706e67),
(2, 'FORMULA 1 CHINESE GRAND PRIX 2024', '2024-04-19', 'CHINA - BEIJING', '13:00:00', 'Formula 4 - 3 - 2 - 1', 0x53544d4c6f676f45637269747572652e706e67, '50', 0, 0x53544d4c6f676f45637269747572652e706e67),
(3, 'CS', '2024-01-16', 'loin', '06:00:00', 'course', 0x53544d4c6f676f45637269747572652e706e67, '1000000000', 0, 0x636173717565312e706e67),
(4, 'La guerre ', '2024-01-09', 'vers labas', '06:00:00', 'mmmmh ca alair style tsais', 0x4631204261636b67726f756e6420506963747572652e706e67, '1000', 0, 0x636173717565332e706e67),
(5, 'FORMULA 1 MIAMI GRAND PRIX 2024', '2024-01-31', 'MIAMI - USA', '16:00:00', 'Augmentez votre expérience de la F1 avec la tribune Turn 18, la tribune la plus importante du circuit avec une excellente vue sur les actions spectaculaires de la course ! Votre place dans l\'une des m', 0x4631204261636b67726f756e6420506963747572652e706e67, '45 ', 0, 0x636173717565312e706e67),
(6, 'FORMULA 1 AUSTRALIAN GRAND PRIX 2024', '2024-02-02', 'MELBOURNE - AUSTRALIA', '15:00:00', 'FORMULA 1', 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067, '15', 0, 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067),
(7, 'FORMULA 1 SAUDI ARABIAN GRAND PRIX 2024', '2024-01-16', 'SAUDI ARABIA - RYADH', '14:00:00', 'La course avec les voitures vrouuuuuuuuuuuuuuuum', 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067, '6000000', 0, 0x536f6e696320547261636b204d6173746572732e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reponse` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `reponse`) VALUES
(1, 'Qu\'est-ce que te propose SonicTrack Master (STM) en tant qu\'entreprise?', 'STM est une entreprise spécialisée dans la gestion du son pour les circuits automobiles. Nous concevons le produit Sonic Tracker, destiné aux propriétaires de circuits, pour mesurer et gérer le niveau sonore dans les gradins.'),
(2, 'Quel est notre produit ?', 'Le produit phare de SonicTrack Master est le Sonic Tracker. Il est conçu pour les propriétaires de circuits automobile afin de mesurer les niveaux sonores dans les gradins et d\'optimiser l\'expérience des spectateurs.'),
(3, 'Quel service est offert aux spectateurs sur le site internet de SonicTrack Master?', 'Nous offrons un site internet permettant aux spectateurs de réserver leur place en fonction des niveaux de décibels et de la qualité des enceintes dans les gradins.'),
(4, 'Quels types d\'événements sont couverts par SonicTrack Master?', 'SonicTrack Master couvre une large gamme d\'événements de sports motorisés, tels que la Formule 1, la Formule 2, les Nascars, et les courses de motos.'),
(5, 'Comment choisir ma place dans les gradins lors d\'un événement sur le circuit automobile? ', 'Lorsque vous réservez votre place sur notre site, nous vous fournissons des informations détaillées sur les niveaux sonores attendus à différents emplacements dans les gradins. Vous pouvez ainsi choisir une place qui correspond à votre préférence en termes de niveau sonore, vous assurant une expérience confortable et sécuritaire.'),
(6, 'Quelles sont les personnes derrière Sonic Track Masters ?', 'Vous pouvez tout connaître sur nous dans la rubrique \"à propos de nous\" dans la barre de navigation en haut de l\'écran.');

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
(1, 'Images/casque_bleu.png', 'Test1', 12.00, 0, 1, 0),
(2, 'Images/casque_rose.png', 'Adaz', 14.00, 0, 0, 1),
(3, 'Images/casque_vert.png', 'etutdry', 15.00, 0, 0, 1),
(4, 'Images/casque_rose.png', 'gfcilukjyg', 15.00, 0, 0, 1),
(5, 'Images/casque_rose.png', 'aze', 52.00, 0, 1, 0),
(6, 'Images/casque_bleu.png', 'azd', 15.00, 0, 0, 1),
(7, 'Images/casque_bleu.png', 'adez', 5.00, 1, 0, 0),
(8, 'Images/casque_vert.png', 'ydcxk', 15.00, 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `civi` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(256) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `motDePasse` varchar(200) NOT NULL,
  `confirmation` varchar(200) NOT NULL,
  `datenaissance` date NOT NULL,
  `type` int(200) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `civi`, `nom`, `prenom`, `email`, `motDePasse`, `confirmation`, `datenaissance`, `type`) VALUES
(1, 'Autre', 'admin', 'admin', 'admin@gmail.com', '$2y$10$SEJy3licF8zzJ905n7k4CuMNlOsxDk25dbGQRsllend1k5Nl4rvWm', 'admin', '2004-12-12', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `id_stade` (`id_stade`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

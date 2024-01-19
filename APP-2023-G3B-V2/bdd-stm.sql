-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 jan. 2024 à 01:02
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
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `niveau_sonore` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_zone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(2, 'popop', '2024-01-30', 'ici', '13:00:00', 'placelka', 0x53544d4c6f676f45637269747572652e706e67, '13', 0, 0x53544d4c6f676f45637269747572652e706e67),
(3, 'CS', '2024-01-16', 'loin', '06:00:00', 'course', 0x53544d4c6f676f45637269747572652e706e67, '1000000000', 0, 0x636173717565312e706e67),
(4, 'La guerre ', '2024-01-09', 'vers labas', '06:00:00', 'mmmmh ca alair style tsais', 0x4631204261636b67726f756e6420506963747572652e706e67, '1000', 0, 0x636173717565332e706e67),
(5, 'FORMULA 1 MIAMI GRAND PRIX 2024', '2024-01-31', 'MIAMI - USA', '16:00:00', 'Augmentez votre expérience de la F1 avec la tribune Turn 18, la tribune la plus importante du circuit avec une excellente vue sur les actions spectaculaires de la course ! Votre place dans l\'une des m', 0x4631204261636b67726f756e6420506963747572652e706e67, '45 ', 0, 0x636173717565312e706e67),
(6, 'FORMULA 1 AUSTRALIAN GRAND PRIX 2024', '2024-02-02', 'MELBOURNE - AUSTRALIA', '15:00:00', 'FORMULA 1', 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067, '15', 0, 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067),
(7, 'FORMULA 1 SAUDI ARABIAN GRAND PRIX 2024', '2024-01-16', 'SAUDI ARABIA - RYADH', '14:00:00', 'La course avec les voitures vrouuuuuuuuuuuuuuuum', 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067, '6000000', 0, 0x536f6e696320547261636b204d6173746572732e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `events_utilisateur`
--

CREATE TABLE `events_utilisateur` (
  `id_EventsUtilisateur` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `places`
--

CREATE TABLE `places` (
  `id_place` int(11) NOT NULL,
  `numero_place` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `place_utilisateur`
--

CREATE TABLE `place_utilisateur` (
  `id_PlaceUtilisateur` int(11) NOT NULL,
  `id_place` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Structure de la table `question forum`
--

CREATE TABLE `question forum` (
  `id_question` int(11) NOT NULL,
  `Titre` varchar(200) NOT NULL,
  `Contenu` varchar(500) NOT NULL,
  `nom_posteur` varchar(200) NOT NULL,
  `id-utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `response forum`
--

CREATE TABLE `response forum` (
  `id_reponse` int(11) NOT NULL,
  `Contenu` varchar(500) NOT NULL,
  `nom_repondeur` varchar(200) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stade`
--

CREATE TABLE `stade` (
  `id_stade` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `mot_de_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `id_zone` int(11) NOT NULL,
  `id_stade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id_capteur`),
  ADD KEY `id_zone` (`id_zone`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `id_stade` (`id_stade`);

--
-- Index pour la table `events_utilisateur`
--
ALTER TABLE `events_utilisateur`
  ADD PRIMARY KEY (`id_EventsUtilisateur`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id_place`),
  ADD KEY `id_zone` (`id_zone`);

--
-- Index pour la table `place_utilisateur`
--
ALTER TABLE `place_utilisateur`
  ADD PRIMARY KEY (`id_PlaceUtilisateur`),
  ADD KEY `id_place` (`id_place`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question forum`
--
ALTER TABLE `question forum`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id-utilisateur` (`id-utilisateur`);

--
-- Index pour la table `response forum`
--
ALTER TABLE `response forum`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `stade`
--
ALTER TABLE `stade`
  ADD PRIMARY KEY (`id_stade`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id_zone`),
  ADD KEY `id_stade` (`id_stade`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `events_utilisateur`
--
ALTER TABLE `events_utilisateur`
  MODIFY `id_EventsUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `places`
--
ALTER TABLE `places`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `place_utilisateur`
--
ALTER TABLE `place_utilisateur`
  MODIFY `id_PlaceUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `question forum`
--
ALTER TABLE `question forum`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `response forum`
--
ALTER TABLE `response forum`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stade`
--
ALTER TABLE `stade`
  MODIFY `id_stade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `id_zone` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `events_utilisateur`
--
ALTER TABLE `events_utilisateur`
  ADD CONSTRAINT `events_utilisateur_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_events`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_utilisateur_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_ibfk_1` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `place_utilisateur`
--
ALTER TABLE `place_utilisateur`
  ADD CONSTRAINT `place_utilisateur_ibfk_1` FOREIGN KEY (`id_place`) REFERENCES `places` (`id_place`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `place_utilisateur_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `question forum`
--
ALTER TABLE `question forum`
  ADD CONSTRAINT `question forum_ibfk_1` FOREIGN KEY (`id-utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `response forum`
--
ALTER TABLE `response forum`
  ADD CONSTRAINT `response forum_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `question forum` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_ibfk_1` FOREIGN KEY (`id_stade`) REFERENCES `stade` (`id_stade`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

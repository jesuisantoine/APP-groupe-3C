-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 18, 2023 at 06:25 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BDD_STM`
--

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `niveau_sonore` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_zone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `id_events` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(300) NOT NULL,
  `heure` time NOT NULL,
  `description` varchar(200) NOT NULL,
  `image_gradin` LONGBLOB NOT NULL,
  `bruit_gradin` varchar(1000) NOT NULL,
  `id_stade` int(11) NOT NULL,
  `image_stade` LONGLOB NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `events` (`id_events`, `nom`, `date`, `lieu`, `heure`, `description`, `image_gradin`, `bruit_gradin`, `id_stade`, `image_stade`) VALUES
(1, 'FORMULA 1 MSC CRUISES JAPANESE GRAND PRIX 2024', '2024-01-17', 'Suzuka Circuit - TOKYO - JAPON\r\n', '12:00:00', 'Les billets en A2 vous mènent à la fin de la première ligne droite. A quelques mètres seulement de la ligne de départ et d’arrivée, vous vous trouverez dans l’une des meilleures places du circuit ! Pr', 0x4272616e64204c6f676f2e504e47, '12', NULL, 'STMLogoEcriture.png'),
(2, 'popop', '2024-01-30', 'ici', '13:00:00', 'placelka', 0x53544d4c6f676f45637269747572652e706e67, '13', NULL, 'STMLogoEcriture.png'),
(3, 'CS', '2024-01-16', 'loin', '06:00:00', 'course', 0x53544d4c6f676f45637269747572652e706e67, '1000000000', NULL, 'casque1.png'),
(4, 'La guerre ', '2024-01-09', 'vers labas', '06:00:00', 'mmmmh ca alair style tsais', 0x4631204261636b67726f756e6420506963747572652e706e67, '1000', NULL, 'casque3.png'),
(5, 'FORMULA 1 MIAMI GRAND PRIX 2024', '2024-01-31', 'MIAMI - USA', '16:00:00', 'Augmentez votre expérience de la F1 avec la tribune Turn 18, la tribune la plus importante du circuit avec une excellente vue sur les actions spectaculaires de la course ! Votre place dans l\'une des m', 0x4631204261636b67726f756e6420506963747572652e706e67, '45 ', NULL, 'casque1.png'),
(6, 'FORMULA 1 AUSTRALIAN GRAND PRIX 2024', '2024-02-02', 'MELBOURNE - AUSTRALIA', '15:00:00', 'FORMULA 1', 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067, '15', NULL, 'WIN_20220308_17_49_35_Pro.jpg'),
(7, 'FORMULA 1 SAUDI ARABIAN GRAND PRIX 2024', '2024-01-16', 'SAUDI ARABIA - RYADH', '14:00:00', 'La course avec les voitures vrouuuuuuuuuuuuuuuum', 0x57494e5f32303232303330385f31375f34395f33355f50726f2e6a7067, '6000000', NULL, 'Sonic Track Masters.png');

-- --------------------------------------------------------

--
-- Table structure for table `Events_Utilisateur`
--

CREATE TABLE `Events_Utilisateur` (
  `id_EventsUtilisateur` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id_place` int(11) NOT NULL,
  `numero_place` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Place_Utilisateur`
--

CREATE TABLE `Place_Utilisateur` (
  `id_PlaceUtilisateur` int(11) NOT NULL,
  `id_place` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Question Forum`
--

CREATE TABLE `Question Forum` (
  `id_question` int(11) NOT NULL,
  `Titre` varchar(200) NOT NULL,
  `Contenu` varchar(500) NOT NULL,
  `nom_posteur` varchar(200) NOT NULL,
  `id-utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Response Forum`
--

CREATE TABLE `Response Forum` (
  `id_reponse` int(11) NOT NULL,
  `Contenu` varchar(500) NOT NULL,
  `nom_repondeur` varchar(200) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stade`
--

CREATE TABLE `stade` (
  `id_stade` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `mot_de_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id_zone` int(11) NOT NULL,
  `id_stade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id_capteur`),
  ADD KEY `id_zone` (`id_zone`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `id_stade` (`id_stade`);

--
-- Indexes for table `Events_Utilisateur`
--
ALTER TABLE `Events_Utilisateur`
  ADD PRIMARY KEY (`id_EventsUtilisateur`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id_place`),
  ADD KEY `id_zone` (`id_zone`);

--
-- Indexes for table `Place_Utilisateur`
--
ALTER TABLE `Place_Utilisateur`
  ADD PRIMARY KEY (`id_PlaceUtilisateur`),
  ADD KEY `id_place` (`id_place`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `Question Forum`
--
ALTER TABLE `Question Forum`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id-utilisateur` (`id-utilisateur`);

--
-- Indexes for table `Response Forum`
--
ALTER TABLE `Response Forum`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `id_question` (`id_question`);

--
-- Indexes for table `stade`
--
ALTER TABLE `stade`
  ADD PRIMARY KEY (`id_stade`);

--
-- Indexes for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id_zone`),
  ADD KEY `id_stade` (`id_stade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `id_events` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Events_Utilisateur`
--
ALTER TABLE `Events_Utilisateur`
  MODIFY `id_EventsUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Place_Utilisateur`
--
ALTER TABLE `Place_Utilisateur`
  MODIFY `id_PlaceUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Question Forum`
--
ALTER TABLE `Question Forum`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Response Forum`
--
ALTER TABLE `Response Forum`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stade`
--
ALTER TABLE `stade`
  MODIFY `id_stade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id_zone` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Events`
--
ALTER TABLE `Events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_stade`) REFERENCES `stade` (`id_stade`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Events_Utilisateur`
--
ALTER TABLE `Events_Utilisateur`
  ADD CONSTRAINT `events_utilisateur_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `Events` (`id_events`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_utilisateur_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_ibfk_1` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Place_Utilisateur`
--
ALTER TABLE `Place_Utilisateur`
  ADD CONSTRAINT `place_utilisateur_ibfk_1` FOREIGN KEY (`id_place`) REFERENCES `places` (`id_place`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `place_utilisateur_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Question Forum`
--
ALTER TABLE `Question Forum`
  ADD CONSTRAINT `question forum_ibfk_1` FOREIGN KEY (`id-utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Response Forum`
--
ALTER TABLE `Response Forum`
  ADD CONSTRAINT `response forum_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `Question Forum` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_ibfk_1` FOREIGN KEY (`id_stade`) REFERENCES `stade` (`id_stade`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

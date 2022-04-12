-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 12 Avril 2022 à 18:34
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeu`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `lit` int(3) NOT NULL,
  `descript` longtext NOT NULL,
  `special` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`id`, `nom`, `lit`, `descript`, `special`) VALUES
(1, 'Chambre triple', 3, '-C\'est une chambre d\'hôtel parfaite pour les familles à 3, la pièce principal contient le lit familiale avec vu sur la forêt qui borde la montagne. L\'enfant a quant a lui une pièce séparer pour être dans son environnement.\r\n<br/>-Il y a de plus une baignoire, des toilettes et une télé.', 1),
(5, 'Chambre Amour', 1, 'Un grand lit double, une salle de bain munie d’une baignoire et 2 lavabos.\r\n\r\nUne pièce conviviale avec fauteuil et canapé, ainsi qu’une télévision.\r\n\r\nEt une salle à manger.\r\n', 0),
(6, 'Chambre Familial', 3, 'Une suite de 2 chambres séparées, une pièce conviviale pour manger ou se reposer. \r\n\r\nUne salle de bain qui comprend une douche, un lavabo et des toilettes. \r\n\r\nLa suite idéale pour 2 à 4 personnes.\r\n', 0),
(7, 'Chambre de Voyage', 3, 'Une suite de 3 pièces et une salle de bain. \r\n\r\nUne chambre avec un lit double et une chambre avec un lit simple, parfait pour une famille de 3.\r\n\r\nUn salon convivial équipé d’une cheminée en temps hivernal.\r\n', 1),
(8, 'Chambre Chaleureuse', 2, 'Une grande chambre avec lit double.\r\n\r\nUne salle de bain munie d’une douche et lavabo. \r\n\r\nUn salon très spacieux avec une cheminée pour le temps hivernal. \r\n', 0),
(9, 'Chambre pour 4', 3, 'Suite familiale avec un grand lit double et une seconde chambre avec 2 lits simples.\r\n\r\nUne salle de bain équipée d’une douche, d’une baignoire et de 2 lavabos.\r\n\r\nUn grand salon spacieux avec une cheminée pour l’hiver.\r\n', 1),
(10, 'Chambre tranquilité', 2, '\r\nSuite extra familiale pour 3 personnes avec un grand lit double et une seconde chambre avec 1 lit.\r\n\r\nUne salle de bain équipée d’une douche, d’une baignoire et de 2 lavabos.\r\n\r\nUn grand salon spacieux avec une cheminée pour l’hiver.\r\n', 0),
(11, 'Chambre pour 4', 3, 'Suite pour 4 personnes, avec un grand lit double et une seconde chambre avec 2 lits simples.\r\n\r\nUne salle de bain équipée d’une douche et de 2 lavabos.\r\n\r\nUn grand salon spacieux avec une cheminée pour l’hiver.\r\n', 1),
(12, 'Chambre Douce', 2, 'Une suite de 3 pièces et une salle de bain munie d’une grande baignoire. \r\n\r\nUne chambre avec un lit double et une chambre avec un lit simple, parfait pour une famille de 3.\r\n\r\nUn salon convivial équipé d’une cheminée en temps hivernal.\r\n', 0),
(13, 'Chambre nocturne', 2, 'Une suite de 3 pièces et une salle de bain munie d’une grande baignoire. \r\n\r\nUne chambre avec un lit double et une chambre avec un lit simple, parfait pour une famille de 3.\r\n\r\nUn salon convivial équipé d’une cheminée en temps hivernal.\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_chambre` int(11) DEFAULT NULL,
  `dated` date DEFAULT NULL,
  `datef` date DEFAULT NULL,
  `pensionC` varchar(2) DEFAULT NULL,
  `valider` tinyint(1) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_utilisateur`, `id_chambre`, `dated`, `datef`, `pensionC`, `valider`, `note`) VALUES
(3, 6, 1, '2022-04-12', '2022-04-26', 'on', 2, NULL),
(4, 17, 1, '2022-04-12', '2022-04-26', 'on', 10, 'Je la refuse'),
(5, 19, 1, '2022-04-19', '2022-04-26', 'on', 2, NULL),
(11, 20, 1, '2022-04-12', '2022-04-25', 'of', 10, 'j\'en veux pas'),
(12, 21, 1, '2022-04-12', '2022-04-26', 'on', 10, 'clochard');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `adm` tinyint(1) DEFAULT NULL,
  `Mail` varchar(75) DEFAULT NULL,
  `1erco` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `adm`, `Mail`, `1erco`) VALUES
(1, 'julien', '30d69d863dde81562ce277fbc0a3cf18', 1, NULL, '2022-04-11 22:09:57'),
(6, 'root', '63a9f0ea7bb98050796b649e85481845', 1, '\'julienmagro5@gmail.com\'', '2022-04-11 22:09:57'),
(10, 'test', '098f6bcd4621d373cade4e832627b4f6', NULL, 'test', '2022-04-11 22:09:57'),
(17, 'beh', '57aa4ecf9f7a86bd70bf8b743cd79558', NULL, '\'julienmagro5@gmail.com\'', '2022-04-11 22:09:57'),
(18, 'brandon', 'fc275ac3498d6ab0f0b4389f8e94422c', NULL, '\'julienmagro5@gmail.com\'', '2022-04-11 22:09:57'),
(19, 'mal', '749dfe7c0cd3b291ec96d0bb8924cb46', NULL, '\'julienmagro5@gmail.com\'', '2022-04-12 12:12:10'),
(20, 'tout', '8fee031b61092657fa6474c0ef478763', NULL, '\'julienmagro5@gmail.com\'', '2022-04-12 12:21:21'),
(21, 'titi', '5d933eef19aee7da192608de61b6c23d', NULL, '\'julienmagro5@gmail.com\'', '2022-04-12 14:03:58');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

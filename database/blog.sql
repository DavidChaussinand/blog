-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juin 2023 à 10:33
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `textArticle` varchar(150) NOT NULL,
  `dateStart` datetime NOT NULL,
  `dateEnd` datetime NOT NULL,
  `degreeImportance` int(11) NOT NULL DEFAULT 0,
  `authors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Id`, `title`, `textArticle`, `dateStart`, `dateEnd`, `degreeImportance`, `authors_id`) VALUES
(2, 'sport', 'Jean est champion de Biathlon depuis dimanche', '2023-06-29 08:49:21', '2023-08-29 08:49:21', 2, 1),
(3, 'sport pétanque', 'pétanque ce week end à valence', '2023-06-29 08:49:21', '2023-07-29 08:49:21', 0, 5),
(4, 'avatar 5', 'le film phénomène est de retour', '2023-07-29 08:57:12', '2023-12-29 08:57:12', 5, 4),
(5, 'Biathlon sport', 'interview du champion de biathlon le champion ', '2023-06-29 08:57:12', '2023-08-29 08:57:12', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `articles_tag`
--

CREATE TABLE `articles_tag` (
  `articles_Id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles_tag`
--

INSERT INTO `articles_tag` (`articles_Id`, `tags_id`) VALUES
(1, 1),
(2, 3),
(3, 1),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id`, `name`, `nickname`, `lastname`) VALUES
(1, 'Dupont', 'dudu', 'Jean'),
(2, 'Durand', 'Mateo', 'Mathieu'),
(3, 'Doe', 'jojo', 'John'),
(4, 'Martin', 'yanni', 'Yannick'),
(5, 'Monnier', 'momo', 'jean');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(150) NOT NULL,
  `dateAddComment` datetime NOT NULL DEFAULT current_timestamp(),
  `articles_Id` int(11) NOT NULL,
  `authors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `dateAddComment`, `articles_Id`, `authors_id`) VALUES
(3, 'bravo', '2023-06-29 08:54:01', 3, 1),
(4, 'bravo paul', '2023-06-29 08:54:01', 2, 3),
(5, 'sans avis', '2023-06-29 08:56:13', 3, 2),
(6, 'sans avis', '2023-06-29 08:56:13', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `nameTag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `nameTag`) VALUES
(1, 'loisir'),
(2, 'sport'),
(3, 'jeux video'),
(4, 'cinéma');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_articles_authors_idx` (`authors_id`);

--
-- Index pour la table `articles_tag`
--
ALTER TABLE `articles_tag`
  ADD PRIMARY KEY (`articles_Id`,`tags_id`),
  ADD KEY `fk_articles_has_Tags_Tags1_idx` (`tags_id`),
  ADD KEY `fk_articles_has_Tags_articles1_idx` (`articles_Id`);

--
-- Index pour la table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nickname_UNIQUE` (`nickname`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_articles1_idx` (`articles_Id`),
  ADD KEY `fk_comments_authors1_idx` (`authors_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_authors` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `articles_tag`
--
ALTER TABLE `articles_tag`
  ADD CONSTRAINT `fk_articles_has_Tags_Tags1` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_has_Tags_articles1` FOREIGN KEY (`articles_Id`) REFERENCES `articles` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_articles1` FOREIGN KEY (`articles_Id`) REFERENCES `articles` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comments_authors1` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

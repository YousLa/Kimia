-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 sep. 2023 à 10:41
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kimiaproject`
--
DROP DATABASE IF EXISTS `kimiaproject`;
CREATE DATABASE IF NOT EXISTS `kimiaproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kimiaproject`;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conte`
--

DROP TABLE IF EXISTS `conte`;
CREATE TABLE `conte` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `synopsis` varchar(5000) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(256) NOT NULL,
  `audio` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `conte`
--

INSERT INTO `conte` (`id`, `title`, `synopsis`, `url`, `image`, `audio`) VALUES
(1, 'Kimia : The Beginning', 'Guidée par une étoile lointaine, Kimia explore \r\nles recoins cachés de son esprit et se plonge \r\ndans des aventures imaginaires fascinantes. \r\nTout en observant les émotions et les rêves \r\ndes gens qui l\'entourent, elle cherche à \r\ncomprendre son propre cheminement \r\npersonnel et à trouver sa place dans le tissu \r\ncomplexe de la réalité.', 'Kimia_The_Beginning.mp4', 'Kimia_The_Beginning.png', 'Kimia_The_Beginning.mp3');

-- --------------------------------------------------------

--
-- Structure de la table `conte_category`
--

DROP TABLE IF EXISTS `conte_category`;
CREATE TABLE `conte_category` (
  `conte_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,

  `user_id` int,
  
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `last_name` varchar(100),
  `first_name` varchar(100),
  `birthdate` date,
  `phone_number` varchar(100),
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `birthdate`, `email`, `phone_number`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'El Jilali', 'Yousra', '1996-05-05','0483483503', 'eljilaliyousra@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'admin', '2023-09-01 09:28:12', '2023-09-15 10:39:22'),
(2, 'Bayot', 'Miny', '1996-05-05', '0475000000', 'Minybayot@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'admin', '2023-09-01 09:28:12', '2023-09-15 10:39:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conte`
--
ALTER TABLE `conte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conte_category`
--
ALTER TABLE `conte_category`
  ADD PRIMARY KEY (`conte_id`,`category_id`),
  ADD KEY `FK_conte_category_category` (`category_id`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_pseudo` (`pseudo`),
  ADD KEY `FK_profil_user` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `conte`
--
ALTER TABLE `conte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conte_category`
--
ALTER TABLE `conte_category`
  ADD CONSTRAINT `FK_conte_category_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_conte_category_conte` FOREIGN KEY (`conte_id`) REFERENCES `conte` (`id`);

--
-- Contraintes pour la table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `FK_profil_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

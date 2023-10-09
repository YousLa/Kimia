-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 oct. 2023 à 12:26
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
CREATE DATABASE IF NOT EXISTS `kimiaproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kimiaproject`;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Populaire', '2023-09-20 14:36:39', '2023-10-06 16:11:22'),
(2, 'Tendances du moment', '2023-10-06 14:12:01', '2023-10-06 16:13:29'),
(3, 'Légendes', '2023-10-06 14:12:01', '2023-10-06 16:13:33'),
(4, 'Mythes', '2023-10-06 14:12:01', '2023-10-06 16:13:37'),
(5, 'Famille & enfants', '2023-10-06 14:12:01', '2023-10-06 16:13:38');

-- --------------------------------------------------------

--
-- Structure de la table `conte`
--

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
(1, 'Kimia : The Beginning', 'Guidée par une étoile lointaine, Kimia explore \r\nles recoins cachés de son esprit et se plonge \r\ndans des aventures imaginaires fascinantes. \r\nTout en observant les émotions et les rêves \r\ndes gens qui l\'entourent, elle cherche à \r\ncomprendre son propre cheminement \r\npersonnel et à trouver sa place dans le tissu \r\ncomplexe de la réalité.', 'Kimia_The_Beginning.mp4', 'Kimia_The_Beginning.png', 'Kimia_The_Beginning.mp3'),
(2, 'A la recherche du lotus doré', 'Synopsis du contes A la recherche du lotus doré', 'A_la_recherche_du_lotus_doré.mp4', 'A_la_recherche_du_lotus_doré.png', 'A_la_recherche_du_lotus_doré.mp3'),
(3, 'A.L.I', 'Synopsis du contes  A.L.I', 'A.L.I.mp4', 'A.L.I.png', 'A.L.I.mp3'),
(4, 'Aqua princess', 'Synpopsis du conte Aqua princess', 'Aqua_princess.mp4', 'Aqua_princess.png', 'Aqua_princess.mp3'),
(5, 'Kira et le papillon', 'Synopsis du contes Kira et le papillon ', 'Kira_et_le_papillon.mp4', 'Kira_et_le_papillon.png', 'Kira_et_le_papillon.mp3'),
(6, 'La brume enchantée', 'Synopsis du conte de La brume enchantée.', 'La_brume_enchantée.mp4', 'La_brume_enchantée.png', 'La_brume_enchantée.mp3'),
(7, 'La lionne sacrée', 'Synopsis du conte de La lionne sacrée', 'La_lionne_sacrée.mp4', 'La_lionne_sacrée.png', 'La_lionne_sacrée.mp3'),
(8, 'La maison du coeur', 'Synopsis de La maison du coeur', 'La_maison_du_coeur.mp4', 'La_maison_du_coeur.png', 'La_maison_du_coeur.mp3'),
(9, 'La princesse corail', 'Synopsis de La princesse corail', 'La_princesse_corail.mp4', 'La_princesse_corail.png', 'La_princesse_corail.mp3'),
(10, 'La vague des dieux', 'Synopsis de La vague des dieux', 'La_vague_des_dieux.mp4', 'La_vague_des_dieux.png', 'La_vague_des_dieux.mp3'),
(11, 'Les déesses modernes', 'Synopsis du conte Les déesses modernes', 'Les_déesses_modernes.mp4', 'Les_déesses_modernes.png', 'Les_déesses_modernes.mp3'),
(12, 'Les lotus blues', 'Synopsis du contes Les lotus blues', 'Les_lotus_blues.mp4', 'Les_lotus_blues.png', 'Les_lotus_blues.mp3'),
(13, 'Les voyageurs du futur', 'Le synopsis du conte Les voyageurs du futur', 'Les_voyageurs_du_futur.mp4', 'Les_voyageurs_du_futur.png', 'Les_voyageurs_du_futur.mp3'),
(14, 'L\'histoire de l\'arbre racine', 'Synopsis de L\'histoire de l\'arbre racine', 'L\'histoire_de_l\'arbre_racine.mp4', 'L\'histoire_de_l\'arbre_racine.png', 'L\'histoire_de_l\'arbre_racine.mp3'),
(15, 'Maya et le tambour magique', 'Synopsis du conte Maya et le tambour magique', 'Maya_et_le_tambour_magique.mp4', 'Maya_et_le_tambour_magique.png', 'Maya_et_le_tambour_magique.mp3'),
(16, 'Nos aieux et nous', 'Synopsis du conte Nos aieux et nous', 'Nos_aieux_et_nous.mp4', 'Nos_aieux_et_nous.png', 'Nos_aieux_et_nous.mp3'),
(17, 'Où se lève le soleil ?', 'Synopsis du conte Où se lève le soleil ?', 'Où_se_lève_le_soleil.mp4', 'Ou_se_lève_le_soleil.png', 'Où_se_lève_le_soleil.mp3'),
(18, 'Tendre grise', 'Synopsis du conte Tendre grise', 'Tendre_grise.mp4', 'Tendre_grise.png', 'Tendre_grise.mp3'),
(19, 'Zitu et le dragon de feu', 'Synopsis du conte Zitu et le dragon de feu', 'Zitu_et_le_dragon_de_feu.mp4', 'Zitu_et_le_dragon_de_feu.png', 'Zitu_et_le_dragon_de_feu.mp3');

-- --------------------------------------------------------

--
-- Structure de la table `conte_category`
--

CREATE TABLE `conte_category` (
  `conte_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `conte_category`
--

INSERT INTO `conte_category` (`conte_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-09-20 14:43:26', '2023-09-20 16:43:26'),
(2, 1, '2023-10-06 14:15:30', '2023-10-06 16:15:30'),
(3, 1, '2023-10-06 14:15:30', '2023-10-06 16:15:30'),
(4, 1, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(5, 5, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(6, 5, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(7, 3, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(8, 5, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(9, 5, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(10, 4, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(11, 3, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(12, 2, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(13, 4, '2023-10-06 14:17:38', '2023-10-06 16:18:09'),
(14, 3, '2023-10-06 14:17:38', '2023-10-06 16:17:38'),
(15, 3, '2023-10-06 14:18:53', '2023-10-06 16:18:53'),
(16, 2, '2023-10-06 14:18:53', '2023-10-06 16:18:53'),
(17, 2, '2023-10-06 14:19:22', '2023-10-06 16:19:22'),
(18, 2, '2023-10-06 14:19:22', '2023-10-06 16:19:22'),
(19, 1, '2023-10-06 14:21:22', '2023-10-06 16:21:22');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `pseudo`, `avatar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'alalzqfefdgdsfg', 'assets/img/avatar/futuristique/futuristique-4.jpg', 5, '2023-09-15 14:32:41', '2023-09-27 12:05:17'),
(3, 'Mochi', 'assets/img/avatar/zootopique/zootopique-1.jpg', NULL, '2023-09-18 08:29:12', '2023-09-18 10:29:12'),
(4, 'Test', 'assets/img/avatar/cartoonesque/cartoonesque-2.jpg', 9, '2023-09-18 08:53:29', '2023-09-18 10:53:29'),
(5, 'sdf', 'assets/img/avatar/futuristique/futuristique-2.jpg', 11, '2023-09-21 07:15:33', '2023-10-06 09:12:25'),
(6, 'sssss', 'assets/img/avatar/futuristique/futuristique-2.jpg', 15, '2023-10-02 10:06:41', '2023-10-02 12:07:41'),
(7, 'yo', 'assets/img/avatar/realistique/realistique-2.jpg', 19, '2023-10-09 10:08:22', '2023-10-09 12:08:22');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `birthdate`, `phone_number`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'El Jilali', 'Yousra', '1996-05-05', 'eljilaliyousra@gmail.com', '0483483503', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'admin', '2023-09-01 09:28:12', '2023-09-15 10:39:22'),
(2, 'Bayot', 'Miny', '1996-05-05', 'Minybayot@gmail.com', '0475000000', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'admin', '2023-09-01 09:28:12', '2023-09-15 10:39:56'),
(3, NULL, NULL, NULL, NULL, 'yousyous05@hotmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-15 09:54:16', '2023-09-15 11:54:16'),
(4, NULL, NULL, NULL, NULL, 'quentin.geerts@bstorm.be', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-15 14:06:48', '2023-09-15 16:06:48'),
(5, NULL, NULL, NULL, NULL, 'test@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-15 14:13:18', '2023-09-15 16:13:18'),
(6, NULL, NULL, NULL, NULL, 'lola@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-18 07:36:11', '2023-09-18 09:36:11'),
(7, NULL, NULL, NULL, NULL, 'mochi@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-18 08:29:05', '2023-09-18 10:29:05'),
(9, NULL, NULL, NULL, NULL, 'test1@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-18 08:53:17', '2023-09-18 10:53:17'),
(10, NULL, NULL, NULL, NULL, 'quentingeerts@bstorm.be', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-20 13:59:48', '2023-09-20 15:59:48'),
(11, NULL, NULL, NULL, NULL, 'test3@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-09-21 07:15:24', '2023-09-21 09:15:24'),
(12, NULL, NULL, NULL, NULL, 'test123@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-02 09:37:26', '2023-10-02 11:37:26'),
(13, NULL, NULL, NULL, NULL, 'Test1234@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-02 09:47:38', '2023-10-02 11:47:38'),
(14, NULL, NULL, NULL, NULL, 'test12345@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-02 09:56:54', '2023-10-02 11:56:54'),
(15, NULL, NULL, NULL, NULL, 'avatar@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-02 10:01:05', '2023-10-02 12:01:05'),
(16, NULL, NULL, NULL, NULL, 'sonia@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-06 08:42:05', '2023-10-06 10:42:05'),
(19, NULL, NULL, NULL, NULL, 'Yo@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-09 10:08:17', '2023-10-09 12:08:17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `conte`
--
ALTER TABLE `conte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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

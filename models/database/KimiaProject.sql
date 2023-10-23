-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 oct. 2023 à 10:50
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
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sujet` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `sujet`, `message`) VALUES
(1, 'testcontact@gmail.com', 'test', 'test'),
(2, 'testcontact@gmail.com', 'Test', 'Test');

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
  `image_landscape` varchar(100) NOT NULL,
  `image_square` varchar(256) NOT NULL,
  `audio` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `conte`
--

INSERT INTO `conte` (`id`, `title`, `synopsis`, `url`, `image_landscape`, `image_square`, `audio`) VALUES
(1, 'Kimia : The Beginning', 'Guidée par une étoile lointaine, Kimia explore \r\nles recoins cachés de son esprit et se plonge \r\ndans des aventures imaginaires fascinantes. \r\nTout en observant les émotions et les rêves \r\ndes gens qui l\'entourent, elle cherche à \r\ncomprendre son propre cheminement \r\npersonnel et à trouver sa place dans le tissu \r\ncomplexe de la réalité.', 'kimia_the_beginning.mp4', 'kimia_the_beginning.jpg', 'kimia_the_beginning.png', 'kimia_the_beginning.mp3'),
(20, '1BELTT', 'Synopsis de 1BELTT ', '', '1beltt.png', '1beltt.png', ''),
(21, 'A la recherche des cabanes perchées', 'Synopsis de A la recherche des cabanes perchées.', '', 'a_la_recherche_des_cabanes_perchees.jpg', 'a_la_recherche_des_cabanes_perchees.png', ''),
(22, 'Au nom de ma mère', 'Synopsis de Au nom de ma mère', '', 'au_nom_de_ma_mere.png', 'au_nom_de_ma_mere.png', ''),
(23, 'Doucess', 'Synopsis de Doucess', '', 'doucess.png', 'doucess.png', ''),
(24, 'FUTU.ROO', 'Synopsis de FUTU.ROO', '', 'futu.roo.png', 'futu.roo.png', ''),
(25, 'Galaktika', 'Synopsis de Galaktika', '', 'galaktika.png', 'galaktika.png', ''),
(26, 'Kiriyo', 'Synopsis de Kiriyo', '', 'kiriyo.png', 'kiriyo.png', ''),
(27, 'L\'ile perdue', 'Synopsis de L\'ile perdue', '', 'l_ile_perdue.png', 'l_ile_perdue.png', ''),
(28, 'La ruche', 'Synopsis de la ruche', '', 'la_ruche.png', 'la_ruche.png', ''),
(29, 'La vie secrètes des bêtes', 'Synopsis de La vie secrètes des bêtes', '', 'la_vie_secretes_des_betes.jpg', 'la_vie_secretes_des_betes.png', ''),
(30, 'La voix de la fôret', 'Synopsis de La voix de la fôret', '', 'la_voix_de_la_foret.png', 'la_voix_de_la_foret.png', ''),
(31, 'Le dernier maitre cobra', 'Synopsis Le dernier maitre cobra', '', 'le_dernier_maitre_cobra.png', 'le_dernier_maitre_cobra.png', ''),
(32, 'Le lotus de cristal', 'Synopsis Le lotus de cristal', '', 'le_lotus_de_cristal.png', 'le_lotus_de_cristal.png', ''),
(33, 'Les chroniques de Lyssandra', 'Synopsis Les chroniques de Lyssandra', '', 'les_chroniques_de_lyssandra.jpg', 'les_chroniques_de_lyssandra.png', ''),
(34, 'Les dragons de feu', 'Synopsis Les dragons de feu', '', 'les_dragons_de_feu.png', 'les_dragons_de_feu.png', ''),
(35, 'Les eaux de la quiétude', 'Synopsis Les eaux de la quiétude', '', 'les_eaux_de_la_quietude.jpg', 'les_eaux_de_la_quietude.png', ''),
(36, 'Les milles pas de danses', 'Synopsis Les milles pas de danses', '', 'les_milles_pas_de_danses.png', 'les_milles_pas_de_danses.png', ''),
(37, 'Les plus beaux jours', 'Synopsis Les plus beaux jours', '', 'les_plus_beaux_jours.png', 'les_plus_beaux_jours.png', ''),
(38, 'Les portes de la Lhyre', 'Synopsis Les portes de la Lhyre', '', 'les_portes_de_la_lhyre.png', 'les_portes_de_la_lhyre.png', ''),
(39, 'Les quatres-vents', 'Synopsis Les quatres-vents', '', 'les_quatres-vents.png', 'les_quatres-vents.png', ''),
(40, 'Lunatis', 'Synopsis Lunatis', '', 'lunatis.png', 'lunatis.png', ''),
(41, 'Ma prochaine vie', 'Synopsis Ma prochaine vie', '', 'ma_prochaine_vie.png', 'ma_prochaine_vie.png', ''),
(42, 'Mayi ya moto', 'Synopsis Mayi ya moto', '', 'mayi_ya_moto.png', 'mayi_ya_moto.png', ''),
(43, 'Memories : Dans la jungle urbaine', 'Synopsis Memories : Dans la jungle urbaine', '', 'memories.png', 'memories.png', ''),
(44, 'Midnight mysteries', 'Synopsis Midnight mysteries', '', 'midnight_mysteries.jpg', 'midnight_mysteries.png', ''),
(45, 'Miroir', 'Synopsis Miroir', '', 'miroir.png', 'miroir.png', ''),
(46, 'MOMENTUM', 'Synopsis MOMENTUM', '', 'momentum.png', 'momentum.png', ''),
(47, 'Mr Tickle', 'Synopsis Mr Tickle', '', 'mr_tickle.jpg', 'mr_tickle.png', ''),
(48, 'Ombres et lumières', 'Synopsis Ombres et lumières', '', 'ombres_et_lumieres.png', 'ombres_et_lumieres.png', ''),
(49, 'REDMAN', 'Synopsis REDMAN', '', 'redman.png', 'redman.png', ''),
(50, 'Told u, I\'m cooking ', 'Synopsis Told u, I\'m cooking ', '', 'told_u_i_m_cooking.jpg', 'told_u_i_m_cooking.png', ''),
(51, '1BELTT', 'Synopsis de 1BELTT ', '', '1beltt.png', '1beltt.png', ''),
(52, 'A la recherche des cabanes perchées', 'Synopsis de A la recherche des cabanes perchées.', '', 'a_la_recherche_des_cabanes_perchees.jpg', 'a_la_recherche_des_cabanes_perchees.png', ''),
(53, 'Au nom de ma mère', 'Synopsis de Au nom de ma mère', '', 'au_nom_de_ma_mere.png', 'au_nom_de_ma_mere.png', ''),
(54, 'Doucess', 'Synopsis de Doucess', '', 'doucess.png', 'doucess.png', ''),
(55, 'FUTU.ROO', 'Synopsis de FUTU.ROO', '', 'futu.roo.png', 'futu.roo.png', ''),
(56, 'Galaktika', 'Synopsis de Galaktika', '', 'galaktika.png', 'galaktika.png', ''),
(57, 'Kiriyo', 'Synopsis de Kiriyo', '', 'kiriyo.png', 'kiriyo.png', ''),
(58, 'L\'ile perdue', 'Synopsis de L\'ile perdue', '', 'l_ile_perdue.png', 'l_ile_perdue.png', ''),
(59, 'La ruche', 'Synopsis de la ruche', '', 'la_ruche.png', 'la_ruche.png', ''),
(60, 'La vie secrètes des bêtes', 'Synopsis de La vie secrètes des bêtes', '', 'la_vie_secretes_des_betes.jpg', 'la_vie_secretes_des_betes.png', ''),
(61, 'La voix de la fôret', 'Synopsis de La voix de la fôret', '', 'la_voix_de_la_foret.png', 'la_voix_de_la_foret.png', ''),
(62, 'Le dernier maitre cobra', 'Synopsis Le dernier maitre cobra', '', 'le_dernier_maitre_cobra.png', 'le_dernier_maitre_cobra.png', ''),
(63, 'Le lotus de cristal', 'Synopsis Le lotus de cristal', '', 'le_lotus_de_cristal.png', 'le_lotus_de_cristal.png', ''),
(64, 'Les chroniques de Lyssandra', 'Synopsis Les chroniques de Lyssandra', '', 'les_chroniques_de_lyssandra.jpg', 'les_chroniques_de_lyssandra.png', ''),
(65, 'Les dragons de feu', 'Synopsis Les dragons de feu', '', 'les_dragons_de_feu.png', 'les_dragons_de_feu.png', ''),
(66, 'Les eaux de la quiétude', 'Synopsis Les eaux de la quiétude', '', 'les_eaux_de_la_quietude.jpg', 'les_eaux_de_la_quietude.png', ''),
(67, 'Les milles pas de danses', 'Synopsis Les milles pas de danses', '', 'les_milles_pas_de_danses.png', 'les_milles_pas_de_danses.png', ''),
(68, 'Les plus beaux jours', 'Synopsis Les plus beaux jours', '', 'les_plus_beaux_jours.png', 'les_plus_beaux_jours.png', ''),
(69, 'Les portes de la Lhyre', 'Synopsis Les portes de la Lhyre', '', 'les_portes_de_la_lhyre.png', 'les_portes_de_la_lhyre.png', ''),
(70, 'Les quatres-vents', 'Synopsis Les quatres-vents', '', 'les_quatres-vents.png', 'les_quatres-vents.png', ''),
(71, 'Lunatis', 'Synopsis Lunatis', '', 'lunatis.png', 'lunatis.png', ''),
(72, 'Ma prochaine vie', 'Synopsis Ma prochaine vie', '', 'ma_prochaine_vie.png', 'ma_prochaine_vie.png', ''),
(73, 'Mayi ya moto', 'Synopsis Mayi ya moto', '', 'mayi_ya_moto.png', 'mayi_ya_moto.png', ''),
(74, 'Memories : Dans la jungle urbaine', 'Synopsis Memories : Dans la jungle urbaine', '', 'memories.png', 'memories.png', ''),
(75, 'Midnight mysteries', 'Synopsis Midnight mysteries', '', 'midnight_mysteries.png', 'midnight_mysteries.png', ''),
(76, 'Miroir', 'Synopsis Miroir', '', 'miroir.png', 'miroir.png', ''),
(77, 'MOMENTUM', 'Synopsis MOMENTUM', '', 'momentum.png', 'momentum.png', ''),
(78, 'Mr Tickle', 'Synopsis Mr Tickle', '', 'mr_tickle.jpg', 'mr_tickle.png', ''),
(79, 'Ombres et lumières', 'Synopsis Ombres et lumières', '', 'ombres_et_lumieres.png', 'ombres_et_lumieres.png', ''),
(80, 'REDMAN', 'Synopsis REDMAN', '', 'redman.png', 'redman.png', ''),
(81, 'Told u, I\'m cooking ', 'Synopsis Told u, I\'m cooking ', '', 'told_u_i_m_cooking.jpg', 'told_u_i_m_cooking.png', ''),
(82, 'Les amazones de Ryu', 'Synopsis Les amazones de Ryu', '', 'les_amazones_de_ryu.jpg', 'les_amazones_de_ryu.png', ''),
(83, 'Les amazones de Ryu', 'Synopsis Les amazones de Ryu', '', 'les_amazones_de_ryu.jpg', 'les_amazones_de_ryu.png', ''),
(84, 'La descendante', 'Synopsis La descendante', '', 'la_descendante.jpg', 'la_descendante.png', ''),
(85, 'Les filles du soleil', 'Synopsis Les filles du soleil', '', 'les_filles_du_soleil.jpg', 'les_filles_du_soleil.png', ''),
(86, 'La descendante', 'Synopsis La descendante', '', 'la_descendante.jpg', 'la_descendante.png', ''),
(87, 'Les filles du soleil', 'Synopsis Les filles du soleil', '', 'les_filles_du_soleil.jpg', 'les_filles_du_soleil.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `conte_category`
--

DROP TABLE IF EXISTS `conte_category`;
CREATE TABLE `conte_category` (
  `conte_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `importance` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `conte_category`
--

INSERT INTO `conte_category` (`conte_id`, `category_id`, `importance`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(20, 5, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(21, 5, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(22, 3, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(23, 4, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(24, 3, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(25, 1, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(26, 5, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(27, 5, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(28, 2, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(29, 5, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(30, 4, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(31, 2, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(32, 1, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(33, 4, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(35, 3, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(36, 2, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(37, 1, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(38, 3, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(39, 2, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(44, 5, 0, '2023-10-23 08:46:27', '2023-10-23 10:46:27'),
(65, 3, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(71, 1, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(72, 2, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(73, 4, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(74, 1, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(75, 5, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(76, 2, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(77, 1, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(78, 5, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(79, 3, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(80, 5, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(81, 5, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(83, 2, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(84, 1, 0, '2023-10-23 08:31:06', '2023-10-23 10:31:06'),
(85, 1, 1, '2023-10-23 08:31:06', '2023-10-23 10:31:06');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
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
(5, 'Yous', 'assets/img/avatar/horrifique/horrifique-2.jpg', 11, '2023-09-21 07:15:33', '2023-10-17 10:26:38'),
(6, 'sssss', 'assets/img/avatar/futuristique/futuristique-2.jpg', 15, '2023-10-02 10:06:41', '2023-10-02 12:07:41'),
(7, 'yo', 'assets/img/avatar/realistique/realistique-2.jpg', 19, '2023-10-09 10:08:22', '2023-10-09 12:08:22'),
(8, 'gfff', 'assets/img/avatar/realistique/realistique-3.jpg', 20, '2023-10-10 13:57:02', '2023-10-10 15:57:02'),
(9, 'Sanae', 'assets/img/avatar/horrifique/horrifique-2.jpg', 21, '2023-10-11 12:52:05', '2023-10-11 14:52:05'),
(10, 'Createprofile', 'assets/img/avatar/horrifique/horrifique-3.jpg', 25, '2023-10-16 07:45:08', '2023-10-16 09:45:08'),
(11, 'Create Profile', 'assets/img/avatar/horrifique/horrifique-2.jpg', 27, '2023-10-16 07:55:39', '2023-10-16 09:55:39'),
(12, 'Create Profile Done', 'assets/img/avatar/zootopique/zootopique-1.jpg', 28, '2023-10-16 09:44:30', '2023-10-16 11:44:30');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
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
(19, NULL, NULL, NULL, NULL, 'Yo@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-09 10:08:17', '2023-10-09 12:08:17'),
(20, NULL, NULL, NULL, NULL, 'lol@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-10 13:56:32', '2023-10-10 15:56:32'),
(21, NULL, NULL, NULL, NULL, 'sanae@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-11 12:51:17', '2023-10-11 14:51:17'),
(22, NULL, NULL, NULL, NULL, 'createprofil@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-13 12:00:50', '2023-10-13 14:00:50'),
(23, NULL, NULL, NULL, NULL, 'Teest@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-13 15:07:46', '2023-10-13 17:07:46'),
(25, NULL, NULL, NULL, NULL, 'createprofile@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-16 07:08:01', '2023-10-16 09:08:01'),
(26, NULL, NULL, NULL, NULL, 'createprofile2@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-16 07:45:28', '2023-10-16 09:45:28'),
(27, NULL, NULL, NULL, NULL, 'Createprofile3@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-16 07:45:54', '2023-10-16 09:45:54'),
(28, NULL, NULL, NULL, NULL, 'createprofile5@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-16 09:33:41', '2023-10-16 11:33:41'),
(29, NULL, NULL, NULL, NULL, 'getprofile@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-17 07:16:49', '2023-10-17 09:16:49'),
(30, NULL, NULL, NULL, NULL, 'scroll@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-18 09:18:21', '2023-10-18 11:18:21'),
(31, NULL, NULL, NULL, NULL, 'scrooool@gmail.com', 'eb0a16b036588a7c8a2fa2dffb8680a31f0c876107b98d494edf7fc67b31e570', 'user', '2023-10-18 09:25:39', '2023-10-18 11:25:39');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `conte`
--
ALTER TABLE `conte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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

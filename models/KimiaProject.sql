--
-- Base de données : Kimia Project
--

--
-- Création de la base de données
--

DROP DATABASE IF EXISTS Kimiaproject;

CREATE DATABASE IF NOT EXISTS Kimiaproject;

USE Kimiaproject;

--
-- Création des tables
--

--
-- Structure de la table user
--

CREATE TABLE IF NOT EXISTS user (
  id INT AUTO_INCREMENT
  , last_name VARCHAR(100) NOT NULL
  , first_name varchar(100) NOT NULL
  , birthdate DATE
  , email varchar(100) NOT NULL
  , password varchar(256) NOT NULL
  , role ENUM('admin', 'user') DEFAULT 'user'

  , created_at timestamp DEFAULT CURRENT_TIMESTAMP
  , updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

  , CONSTRAINT PK_user PRIMARY KEY (id)
  , CONSTRAINT UK_email UNIQUE (email)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table profil
--

CREATE TABLE profil (
  id INT AUTO_INCREMENT
  , pseudo varchar(100) NOT NULL
  , description varchar(1000) DEFAULT NULL
  , avatar varchar(100) DEFAULT NULL

  , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

  , CONSTRAINT PK_profil PRIMARY KEY (id)
  , CONSTRAINT UK_pseudo UNIQUE (pseudo)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table stream
--

CREATE TABLE conte (
  id INT AUTO_INCREMENT,
  title varchar(1000) NOT NULL,
  synopsis varchar(5000) NOT NULL,
  url varchar(100) NOT NULL,
  image varchar(256) NOT NULL,
  audio varchar(256) NOT NULL

, CONSTRAINT PK_conte PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table category
--

CREATE TABLE IF NOT EXISTS category (
    id INT AUTO_INCREMENT
    , label VARCHAR(100) NOT NULL

    , conte_id INT

    , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    , CONSTRAINT PK_category PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Structure de la table conte category
--

CREATE TABLE IF NOT EXISTS conte_category (
    conte_id INT
    , category_id INT
    
    , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
    , CONSTRAINT PK_conte_category PRIMARY KEY (conte_id, category_id)
    , CONSTRAINT FK_conte_category_conte FOREIGN KEY (conte_id) REFERENCES conte (id)
    , CONSTRAINT FK_conte_category_category FOREIGN KEY (category_id) REFERENCES category (id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Remplissage des tables
--
INSERT INTO user
VALUES (NULL, 'El Jilali', 'Yousra', '1996-05-05', 'eljilaliyousra@gmail.com', sha2('Test123=', 256), 'admin', DEFAULT, DEFAULT);

INSERT INTO `conte` (`id`, `title`, `synopsis`, `url`, `image`, `audio`) VALUES
(1, 'Kimia : The Beginning', 'Guidée par une étoile lointaine, Kimia explore \r\nles recoins cachés de son esprit et se plonge \r\ndans des aventures imaginaires fascinantes. \r\nTout en observant les émotions et les rêves \r\ndes gens qui l\'entourent, elle cherche à \r\ncomprendre son propre cheminement \r\npersonnel et à trouver sa place dans le tissu \r\ncomplexe de la réalité.', 'Kimia_The_Beginning.mp4', 'Kimia_The_Beginning.png', 'Kimia_The_Beginning.mp3');



DROP DATABASE IF EXISTS projet1;

CREATE DATABASE IF NOT EXISTS projet1;

USE projet1;

-- ! La table customer reprend tous les comptes et toutes les informations sont OBLIGATOIRE
-- ! Email et le Login doivent être UNIQUE
-- TODO Optionelle si le compte à été supprimé

CREATE TABLE IF NOT EXISTS customer (

    customer_id INT AUTO_INCREMENT
    , pseudo VARCHAR(100) NOT NULL
    , email VARCHAR(150) NOT NULL
    , password VARCHAR(256) NOT NULL
    , birthdate DATE NOT NULL
    
    -- Date à laquelle le compte à été créé
    , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -- Date à laquelle la dernière modification a été effectué
    , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    , CONSTRAINT PK_person PRIMARY KEY (customer_id)
    , CONSTRAINT UK_email UNIQUE (email)
    , CONSTRAINT UK_login UNIQUE (pseudo)
) 

-- ! La table Profil reprend les informations facultatives des customer 
-- ! C'est une Foreign Key de la table customer seulement si des informations ont été inserée
-- TODO Voir si les informations sont gardé à la suppression des informations
-- ** Les Avatar sont stocké dans un dossier et lié par une ligne de la table profil (le nom du fichier sera fait en ce sens login + avatar) 

CREATE TABLE IF NOT EXISTS profil (

    profil_id INT AUTO_INCREMENT
    , lastname VARCHAR(100) 
    , firstname VARCHAR(100)
    -- TODO Vérifier la limite d'un VARCHAR de description
    , description VARCHAR(300)
    -- Avatar est en VARCHAR car il stockera l'url du chemin vers le fichier stocké dans un dossier
    -- TODO voir si la limite est correct
    , avatar VARCHAR(100)

    , CONSTRAINT PK_profil PRIMARY KEY (profil_id)
    -- TODO FOREIGN KEY vers la table customer seulement si les informaitons ont été donné
)

-- ! La table Admin reprend les créatrices du site en l'occurence Miny et Yousra
-- TODO Un Insert Into est surement à faire

CREATE TABLE IF NOT EXISTS admin (

    admin_id INT AUTO_INCREMENT
    , lastname VARCHAR(100) NOT NULL
    , firstname VARCHAR(100) NOT NULL
    , email VARCHAR(100) NOT NULL
    , pseudo VARCHAR(100) NOT NULL
    , password VARCHAR(256) NOT NULL
    , avatar VARCHAR(100)

    , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    , CONSTRAINT PK_admin PRIMARY KEY (admin_id)
    , CONSTRAINT UK_email UNIQUE (email)
    , CONSTRAINT UK_login UNIQUE (pseudo)
)

CREATE TABLE IF NOT EXISTS stream (

    stream_id INT AUTO_INCREMENT
    , title VARCHAR(300) NOT NULL
    , synopsis VARCHAR(2000) NOT NULL
    , stream_url VARCHAR(100) NOT NULL

    , CONSTRAINT PK_admin PRIMARY KEY (stream_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





-- ! Insertion des Admins

INSERT INTO admin
VALUES (NULL, 'El Jilali', 'Yousra', 'eljilaliyousra@gmail.com', 'Yous', 'avatar.png', DEFAULT, DEFAULT);







-- A mettre uniquement s'il faut lier les tables

ALTER TABLE customer ADD
    , CONSTRAINT FK_profil_id FOREIGN KEY (profil_id) REFERENCES customer (customer_id);

ALTER TABLE admin ADD 
    , CONSTRAINT FK_profil_id FOREIGN KEY (profil_id) REFERENCES admin (admin_id);
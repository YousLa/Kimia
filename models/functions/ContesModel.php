<?php

// ^ Cette page regroupe les fonctions utiles à la session utilisateur lors de la création, la connexion et de la modification des informations d'un compte utilisateur.


// On fait appelle aux pages :

// ~ ResponseModel.php qui va nous servir pour paramètrer les réponses de la base de données selon les situations avec la fonction response().
// ~ Database.php qui va nous servir à faire appel à la fonction getConnection().
require_once 'models/functions/ResponseModel.php';
require_once 'models/database/database.php';

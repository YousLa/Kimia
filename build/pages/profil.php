<?php session_start();
include_once "./template/connectDB.php";

?>




<h1>PROFIL</h1>

<p>Pseudo : <?= $_SESSION['pseudo']; ?></p>
<p>Adresse Email : <?= $_SESSION['email']; ?></p>
<p>Date de Naissance : <?= $_SESSION['birthdate']; ?></p>
<p>Compte crée le : <?= $_SESSION['created_at']; ?></p>
<p>Dernière modification : <?= $_SESSION['updated_at']; ?></p>
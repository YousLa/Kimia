<?php session_start();

if (isset($_SESSION['pseudo'])) {
    echo "Vous êtes bien connecté";
}
?>
<h1>HOME</h1>

<p>topics</p>
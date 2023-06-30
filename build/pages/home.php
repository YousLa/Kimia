<!-- VISIBLE WHEN LOGGED OUT -->
<?php session_start();
include_once "./template/connectDB.php";

// if (isset($_SESSION['pseudo'])) {
//     header("index.php?page=contes");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimia</title>
    <link rel="stylesheet" href="./assets/styles/homepage.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>

    <header>
        <nav>

            <!-- Logo temporaire -->
            <img src="./assets/images/logo.png" alt="Logo ">

            <a class="button" id="connexion" href="index.php?page=login">CONNEXION</a>

        </nav>
    </header>

    <main>

        <h1>Creativity is intelligence having fun</h1>
        <p>Bienvenue dans l'univers magique de Kimia, où chaque écoute est un voyage inoubliable.</p>

        <!-- Mettre un label invisible pour le responsive -->
        <!-- <label for=email">Adresse Email</label> -->
        <div id="email">
            <input type="email" placeholder="Email Address">
            <a class="button" class="signUp" href="index.php?page=signup">SIGN UP</a>
        </div>

    </main>

</body>

</html>
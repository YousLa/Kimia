<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/resetCSS.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <title>Template système MVC</title>

    <!-- Router pages css -->

    <?php if (isset($_GET['page'])) {

        switch ($_GET['page']) {
            case 'home':
                echo '<link rel="stylesheet" href="assets/css/home.css">';
                break;

            case 'signup':
                echo '<link rel="stylesheet" href="assets/css/signup.css">';
                break;

            case 'profil':
                echo '<link rel="stylesheet" href="assets/css/profil.css">';
                break;

            case 'login':
                echo '<link rel="stylesheet" href="assets/css/login.css">';
                break;

            case 'fiche':
                echo '<link rel="stylesheet" href="assets/css/fiche.css">';
                break;

            case 'contes':
                echo '<link rel="stylesheet" href="assets/css/contes.css">';
                break;
        }
    } else {
        echo '<link rel="stylesheet" href="assets/css/home.css">';
    }
    ?>
</head>

<body>
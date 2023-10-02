<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS for all page -->
    <link rel="stylesheet" href="assets/css/resetCSS.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php

    foreach ($css as $value) {
        echo '<link rel="stylesheet" href="' . $value . '">';
    }

    foreach ($js as $value) {
        echo '<script src="' . $value . '" defer></script>';
    }

    ?>

    <title>Kimia</title>


</head>

<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS for all page -->
    <link rel="stylesheet" href="assets/css/resetCSS.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
    if (isset($_GET['page'])) {

        foreach ($css as $value) {
            var_dump(88, $value);
            echo '<link rel="stylesheet" href="' . $value . '">';
        }

        foreach ($js as $value) {
            echo '<script src="' . $value . '" defer></script>';
        }
    } else {
        header('Location: ?page=fourofour');
    }
    ?>

    <title>Kimia</title>


</head>

<body>
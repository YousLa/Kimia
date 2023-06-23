<?php
include_once "./template/connectDB.php";

$page = "";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

// HEADER

include "./template/header.php";

// NAVBAR

include "./template/navbar.php";

// PAGES

echo '<main>';
include "./template/path.php";
echo '</main>';

// FOOTER

include "./template/footer.php";

<?php

$error = false;
$error_message = "";


require_once 'models/database/database.php';
require_once 'models/functions/ContesModel.php';
$database = getConnection();

$responseCategory = getCategory();

if ($responseCategory->success) {
    $categories = $responseCategory->data;
} else {
    $error = true;
    $error_message = $response->error;
}

require_once 'views/contes/contesView.php';

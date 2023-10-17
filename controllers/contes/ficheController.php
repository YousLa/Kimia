<!-- ######## Preview des contes -->

<?php


$error_message = "";

$id = "";
$title = "";
$synopsis = "";
$url = "";
$image = "";
$image_square = "";
$audio = "";

// TODO créer un url au lieu d'utiliser les noms des comtpes dans le get
if (isset($_GET['conte'])) {

    $response = getConteById();

    # Extraction des données d'un conte dans une variable
    if ($response->success) {
        $conte = $response->data;
        list(
            $id, $title, $synopsis, $url, $image_landscape, $image_square, $audio
        ) = $conte;
    }
} else {
    $error = true;
    $error_message = $response->error;
}


require_once 'views/contes/ficheView.php';

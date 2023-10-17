<!-- Paramètres de lecture - envoie par paquets -->
<?php

// Récupération de l'url du conte ne fonction du titre que l'on reçoit dans l'url
$response = getConteUrl();

if ($response->success) {

    $conte = $response->data;

    list(
        $url
    ) = $conte;
} else {

    $error = true;
    $error_message = $response->error;
}


$filename = $url;
$direname = "assets/contes/mp4/";

$stream = new VideoStream($direname . $filename);
$stream->start();
exit;
?>
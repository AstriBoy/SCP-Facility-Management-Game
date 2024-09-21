<?php
$profile_image_path = "uploads/nomefileimmagine.jpg"; // Imposta il percorso corretto dell'immagine profilo

// Verifica se il file dell'immagine profilo esiste
if (file_exists($profile_image_path)) {
    // Ottieni il tipo di contenuto dell'immagine (ad esempio, "image/jpeg")
    $content_type = mime_content_type($profile_image_path);

    // Imposta le intestazioni HTTP per indicare il tipo di contenuto
    header("Content-Type: $content_type");

    // Leggi il contenuto dell'immagine e invialo in output
    readfile($profile_image_path);
} else {
    // Immagine non trovata, puoi restituire un'immagine di default o un messaggio di errore
    header("Content-Type: image/jpeg"); // Imposta il tipo di contenuto a immagine JPEG
    readfile("default_profile_image.jpg"); // Immagine di default
}
?>
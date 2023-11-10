<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        // Esempio: Convalida le informazioni dell'utente (personalizza questa logica)
        if (verifica_credenziali($username, $password, $email)) {
            // Le credenziali sono valide, concedi l'accesso
            header('Location: first_page.html');
            exit;
        } else {
            echo "Credenziali non valide. Accesso negato.";
        }
    } else {
        echo "Dati mancanti nel modulo.";
    }
} else {
    echo "Richiesta non valida.";
}

function verifica_credenziali($username, $password, $email) {
    // Implementa la logica di verifica delle credenziali
    // Sostituisci questa logica con quella adatta al tuo sistema di autenticazione
    // Ad esempio, verifica il nome utente, la password e l'email nel tuo database.

    // Ecco un esempio semplice:
    if ($username === "utente" && $password === "password" && $email === "utente@example.com") {
        return true;
    }

    return false;
}
?>

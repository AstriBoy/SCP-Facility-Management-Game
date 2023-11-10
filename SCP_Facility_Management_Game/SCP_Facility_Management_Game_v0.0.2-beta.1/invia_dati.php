<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica che siano stati inviati i campi richiesti
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmPassword"]) && isset($_POST["email"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $email = $_POST["email"];

        // Valida ulteriormente i dati qui, ad esempio controlla che la password rispetti i criteri desiderati

        // Ora puoi memorizzare i dati nel tuo database o fare altre operazioni necessarie.

        // Esempio: Se la validazione è riuscita, reindirizza l'utente alla propria pagina di profilo
        if (validazione_personalizzata($username, $password, $email)) {
            header('Location: ' . $username . 'First_page.html');
            exit;
        } else {
            echo "Errore di validazione.";
        }

    } else {
        echo "Dati mancanti nel modulo.";
    }
} else {
    echo "Richiesta non valida.";
}

function validazione_personalizzata($username, $password, $email) {
    // Implementa qui la tua logica di validazione personalizzata.
    // Questa funzione dovrebbe restituire true se la validazione è riuscita, altrimenti false.
    // Includi la tua logica per verificare il nome utente, la password e l'email.
    // Ad esempio, verifica se le informazioni corrispondono a un utente valido nel tuo sistema.

    // Ecco un esempio semplice:
    if ($username === "utente" && $password === "password" && $email === "utente@example.com") {
        return true;
    }

    return false;
}
?>
<?php

// define variables and set to empty values
$OK= "* campo obbligatorio";
$txtOK = "";
$nome = $cognome  = $email = $telefono = $messaggio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $OK = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
    } else {
        $nome = test_input($_POST["nome"]);
    }

    if (empty($_POST["cognome"])) {
        $OK = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
    } else {
        $cognome= test_input($_POST["cognome"]);
    }

    $telefono = $_POST["telefono"];

    if (empty($_POST["email"])) {
        $OK = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
    } else {
        $email = test_input($_POST["email"]);
        // controllo su email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["messaggio"])) {
        $OK = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
    } else {
        $messaggio = test_input($_POST["messaggio"]);
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

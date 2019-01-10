<?php

error_reporting(0);

$val_nome = $val_cognome = $val_email = $val_messaggio = "";
$nome = $cognome  = $email = $telefono = $messaggio = "";
$boolnome = $boolcognome = $boolemail = $boolmessagio = $all_values_ok = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty( trim($_POST["nome"]) )) {
        $val_nome = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $nome = test_input($_POST["nome"]);
        $boolnome = true;
    }

    if (empty( trim($_POST["cognome"]) )) {
        $val_cognome = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $cognome = test_input($_POST["cognome"]);
        $boolcognome = true;
    }

    if (empty( trim($_POST["email"]) )) {
        $val_email = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $val_email = "FORMATO E-MAIL NON VALIDO  ";
        }
        $boolemail = true;
    }

    if (empty( trim($_POST["messaggio"]) )) {
        $all_values_ok = false;
        $val_messaggio = "CAMPO OBBLIGATORIO VUOTO  ";
    } else {
        $messaggio = test_input($_POST["messaggio"]);
        $boolmessaggio = true;
    }

    if($boolnome && $boolcognome && $boolemail && $boolmessaggio)
        $all_values_ok = true;

    $telefono = $_POST["telefono"];

    $username = $_POST["username"];
    $Checkin = $_POST["Checkin"];
    $Checkout = $_POST["Checkout"];
    $BeB = $_POST["BeB"];
    $Persone = $_POST["Persone"];
 }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php

error_reporting(0);

// define variables and set to empty values
$val_name = $val_surname = $val_email = $val_mex = $val_user = $val_pass = "";
$username = $nome = $cognome  = $email = $telefono = $messaggio = $Checkin = $Checkout = $BeB = $nPers = $user = $pass = "";
$boolname = $boolsurname = $boolemail = $boolmessage = $booluser = $boolpass = $all_values_ok = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty( trim($_POST["nome"]) )) {
        $val_name = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $nome = test_input($_POST["nome"]);
        $boolname = true;
    }

    if (empty( trim($_POST["cognome"]) )) {
        $val_surname = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $cognome= test_input($_POST["cognome"]);
        $boolsurname = true;
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
        $val_mex = "CAMPO OBBLIGATORIO VUOTO  ";
    } else {
        $messaggio = test_input($_POST["messaggio"]);
        $boolmessage = true;
    }

    if (empty( trim($_POST["user"]) )) {
        $val_user = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $user = test_input($_POST["user"]);
        $booluser = true;
    }

    if (empty( trim($_POST["pass"]) )) {
        $val_pass = "CAMPO OBBLIGATORIO VUOTO  ";
        $all_values_ok = false;
    } else {
        $pass = test_input($_POST["pass"]);
        $boolpass = true;
    }

    if($boolemail && $boolmessage && $boolname && $boolsurname && $booluser && $boolpass)
        $all_values_ok = true;

    $telefono = $_POST["telefono"];
    $Checkin = $_POST["Checkin"];
    $Checkout = $_POST["Checkout"];
    $BeB = $_POST["BeB"];
    $nPers = $_POST["Persone"];
    $username = $_POST["username"];
 }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

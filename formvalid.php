<?php

error_reporting(0);

// define variables and set to empty values
$val_name = $val_surname = $val_email = $val_mex = "";
$username = $nome = $cognome  = $email = $telefono = $messaggio = $Checkin = $Checkout = $BeB = $nPers = "";
$all_values_ok = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $val_name = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
        $all_values_ok = false;
    } else {
        $nome = test_input($_POST["nome"]);
    }

    if (empty($_POST["cognome"])) {
        $val_surname = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
        $all_values_ok = false;
    } else {
        $cognome= test_input($_POST["cognome"]);
    }

    $telefono = $_POST["telefono"];

    if (empty($_POST["email"])) {
        $val_email = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
        $all_values_ok = false;
    } else {
        $email = test_input($_POST["email"]);
        // controllo su email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["messaggio"])) {
        $all_values_ok = false;
        $val_mex = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
    } else {
        $messaggio = test_input($_POST["messaggio"]);
    }
    

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

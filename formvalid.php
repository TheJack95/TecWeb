<?php

error_reporting(0);

$val_nome = $val_cognome = $val_email = $val_messaggio = "";
$nome = $cognome  = $email = $telefono = $messaggio = "";
$boolnome = $boolcognome = $boolemail = $boolmessagio = $all_values_ok = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty( trim($_POST["nome"]) )) {
        $val_nome = "CAMPO OBBLIGATORIO VUOTO\n";
        $all_values_ok = false;
    }
    else {
		$nome = $_POST["nome"];
        $boolnome = true;
	}

    if (empty( trim($_POST["cognome"]) )) {
        $val_cognome = "CAMPO OBBLIGATORIO VUOTO\n";
        $all_values_ok = false;
    }
    else {
		$cognome = $_POST["cognome"];
        $boolcognome = true;
	}

    if (empty( trim($_POST["email"]) )) {
        $val_email = "CAMPO OBBLIGATORIO VUOTO\n";
        $all_values_ok = false;
    }
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $val_email = "FORMATO E-MAIL NON VALIDO\n";
		}
		else {
			$email = $_POST["email"];
			$boolemail = true;
		}
    }

    if (empty( trim($_POST["messaggio"]) )) {
        $all_values_ok = false;
        $val_messaggio = "CAMPO OBBLIGATORIO VUOTO\n";
    }
    else {
		$messaggio = $_POST["messaggio"];
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

?>

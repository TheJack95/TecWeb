<?php

error_reporting(0);

$val_user = $val_pass = "";
$user = $pass = "";
$booluser = $boolpass = $login_ok = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty( trim($_POST["user"]) )) {
        $val_user = "CAMPO OBBLIGATORIO VUOTO\n";
        $login_ok = false;
    } else {
        $user = test_input($_POST["user"]);
        $booluser = true;
    }

    if (empty( trim($_POST["pass"]) )) {
        $val_pass = "CAMPO OBBLIGATORIO VUOTO\n";
        $login_ok = false;
    } else {
        $pass = test_input($_POST["pass"]);
        $boolpass = true;
    }

    if($booluser && $boolpass)
        $login_ok = true;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*if($login_ok === true) {
    $host = "localhost";
    $user = "gfiorese";
    $pass = "eeNgeeghaiBooqu1";
    $dbname = "gfiorese";

    $connessione = mysqli_connect($host, $user, $pass, $dbname);

    $connessione->close();
}*/

?>

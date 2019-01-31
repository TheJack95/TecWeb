<?php

error_reporting(0);

$val_user = $val_pass = "";
$user = $pass = "";
$booluser = $boolpass = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty( trim($_POST["user"]) )) {
        $val_user = "CAMPO OBBLIGATORIO VUOTO\n";
    }
    else {
        $user = $_POST["user"];
        $booluser = true;
    }

    if (empty( trim($_POST["pass"]) )) {
        $val_pass = "CAMPO OBBLIGATORIO VUOTO\n";
    }
    else {
        $pass = $_POST["pass"];
        $boolpass = true;
    }

    if($booluser && $boolpass) {
		/*
		//credenziali unipd
		$host = "localhost";
		$username = "gfiorese";
		$password = "eeNgeeghaiBooqu1";
		$dbname = "gfiorese";
		*/

		//credenziali altervista
		$host = "localhost";
		$username = "tecwebgeg";
		$password = "4QCvxkNWCZS8";
		$dbname = "my_tecwebgeg";

		$connessione = mysqli_connect($host, $username, $password, $dbname);
		$checkuser = "SELECT * FROM Utente WHERE Login = '".$user."' && Password = '".$pass."'";

		$result = mysqli_query($connessione, $checkuser);

		if(mysqli_num_rows($result)==0)
			echo "<div class='error_message'>USERNAME E PASSWORD NON VALIDI</div>";
		else {
				header("location: /areaPrivata.php?name=$user");
		}

		$connessione->close();
	}
}
?>

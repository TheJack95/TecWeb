<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {

        if($all_values_ok) {

            /*credenziali unipd
            $host = "localhost";
            $user = "gfiorese";
            $password = "eeNgeeghaiBooqu1";
            $dbname = "gfiorese";*/

            //credenziali altervista
            $host = "localhost";
            $user = "tecwebgeg";
            $password = "4QCvxkNWCZS8";
            $dbname = "my_tecwebgeg";

            $connessione = mysqli_connect($host, $user, $password, $dbname);

            $sql = "INSERT INTO Prenotazione (Id, Username, Nome, Cognome, Telefono, Email, Messaggio, Checkin, Checkout, BeB, Persone) 
                                      VALUES (null,'$username','$nome','$cognome','$telefono','$email','$messaggio','$Checkin','$Checkout','$BeB','$Persone')";

            if ($connessione->query($sql) === TRUE) {
                echo "Messaggio inviato con successo";
            }
            else {
                echo "ERRORE: messaggio non inviato. Riprovare";
            }

            $connessione->close();
        }
    }
}

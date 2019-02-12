<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        if($all_values_ok) {

//credenziali database unipd
            $host = "localhost";
            $username = "gfiorese";
            $password = "eeNgeeghaiBooqu1";
            $dbname = "gfiorese";

            $connessione = mysqli_connect($host, $username, $password, $dbname);

            $sql = "INSERT INTO Contatto (Id, Nome, Cognome, Telefono, Email, Messaggio) 
                    VALUES (null,'$nome','$cognome','$telefono','$email', '$messaggio')";

            if ($connessione->query($sql) === TRUE) {
                echo "Messaggio inviato con successo\n";
            }
            else {
                echo "ERRORE: messaggio non inviato. Riprovare\n";
            }
            $connessione->close();
        }
    }
}
?>

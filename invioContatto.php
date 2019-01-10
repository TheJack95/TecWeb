<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {

        if($all_values_ok) {

            $host = "localhost";
            $user = "gfiorese";
            $password = "eeNgeeghaiBooqu1";
            $dbname = "gfiorese";

            $connessione = mysqli_connect($host, $user, $password, $dbname);

            $sql = "INSERT INTO Contatto (Id, Nome, Cognome, Telefono, Email, Messaggio) 
                                  VALUES (null,'$nome','$cognome','$telefono','$email', '$messaggio')";

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
?>

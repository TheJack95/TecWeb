<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        if($all_values_ok)
        {
            //$guid = GUID();

            // CREDENZIALI ALTERVISTA

            // $host = "localhost";
            // $user = "tecwebgeg";
            // $password = "";
            // $dbname = "my_tecwebgeg";


            // CREDENZIALI UNIPD

            $host = "localhost";
            $user = "gfiorese";
            $password = "eeNgeeghaiBooqu1";
            $dbname = "gfiorese";

            // stringa di connessione al DBMS
            $connessione = mysqli_connect($host, $user, $password, $dbname);

            $sql = "INSERT INTO Contatto (id, nome, cognome, telefono, email, messaggio)
								VALUES (null,'$nome','$cognome','$telefono','$email', '$messaggio')";

            if ($connessione->query($sql) === TRUE) {
                echo "Messaggio inviato con successo";
            } else {
                echo "Errore: messaggio non inviato. Riprovare";
            }


            // chiusura della connessione
            $connessione->close();
        }
    }
}


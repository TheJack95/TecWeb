<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        if($all_values_ok)
        {
            //$guid = GUID();

            // CREDENZIALI UNIPD

            // $host = "localhost";
            // $user = "gfiorese";
            // $password = "sheelahJie2ieKoi";
            // $dbname = "gfiorese";

            // nome di host
            $host = "localhost";
            // username dell'utente in connessione
            $user = "root";
            // password dell'utente
            $password = "";
            // nome del database
            $dbname = "tecweb";

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


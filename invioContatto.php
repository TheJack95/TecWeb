<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        if($all_values_ok)
        {
            // nome di host
            $host = "localhost";
            // username dell'utente in connessione
            $user = "root";
            // password dell'utente
            $password = "giacomo";
            $dbname = "sito";



            // stringa di connessione al DBMS
            $connessione = new mysqli($host, $user, $password, $dbname);


            $sql = "INSERT INTO Contatto (id, nome, cognome, telefono, email, messaggio)
								VALUES (null ,'$nome','$cognome','$telefono','$email', '$messaggio')";

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

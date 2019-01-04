<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        if($all_values_ok)
        {
            // nome di host
            $host = "localhost:8081";
            // username dell'utente in connessione
            $user = "root";
            // password dell'utente
            $password = "";
            $dbname = "tecweb";



            // stringa di connessione al DBMS
            $connessione = new mysqli($host, $user, $password, $dbname);


            $sql = "INSERT INTO Prenotazione VALUES (null, '$username','$nome','$cognome','$telefono','$email','$messaggio','$Checkin', '$Checkout', '$BeB', '$nPers' )";


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

?>

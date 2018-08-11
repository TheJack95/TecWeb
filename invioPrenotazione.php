<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        if($all_values_ok)
        {
            $guid = GUID();

            // nome di host
            $host = "localhost";
            // username dell'utente in connessione
            $user = "root";
            // password dell'utente
            $password = "giacomo";
            $dbname = "sito";



            // stringa di connessione al DBMS
            $connessione = new mysqli($host, $user, $password, $dbname);


            $sql = "INSERT INTO Prenotazione (id, nome, cognome, telefono, email, messaggio, Checkin, Checkout, BeB, Persone)
								VALUES ('$guid','$nome','$cognome','$telefono','$email','$messaggio','$Checkin', '$Checkout', '$BeB', '$nPers' )";

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
function GUID()
{
    /*if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }*/

    return sprintf('%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535));
}
?>
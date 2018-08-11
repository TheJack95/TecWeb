<?php
// nome di host
$host = "localhost";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "giacomo";
$dbname = "sito";



// stringa di connessione al DBMS
$conn = new mysqli($host, $user, $password, $dbname);
if($conn->connect_error) die($conn->connect_error);


$sqlP = "SELECT * FROM Prenotazione";
$sqlC = "SELECT * FROM Contatto";
$r1 = $conn->query($sqlC);
$r2 = $conn->query($sqlP);

if(!$r1 && !$r2) die($conn->error);


echo "<h2> Messaggi dai clienti </h2>";
if ($r1->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($r1)) {
        echo "<p class='testo'>";
        echo "Nome: ". $row["Nome"].
            "<br> Cognome: " . $row["Cognome"] .
            "<br> Telefono: " . $row["Telefono"] .
            "<br> Email: " . $row["Email"].
            "<br> Messaggio: " . $row["Messaggio"]. "<br>";
        echo "</p>";
    }
} else {
    echo "0 results";
}



echo "<h2> Prenotazioni </h2>";
if ($r2->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($r2)) {
        echo "<p class='testo'>";

        echo "Nome: ". $row["Nome"].
            "<br> Cognome: " . $row["Cognome"] .
            "<br> Telefono: " . $row["Telefono"] .
            "<br> Email: " . $row["Email"] .
            "<br> Messaggio: " . $row["Messaggio"].
            "<br> Checkin: " . $row["Checkin"].
            "<br> Checkout: " . $row["Checkout"].
            "<br> B&B: " . $row["BeB"].
            "<br> Numero persone: " . $row["Persone"]. "<br>";
        echo "</p>";
    }
} else {
    echo "0 results";
}



// chiusura della connessione
$conn->close();





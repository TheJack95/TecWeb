<?php

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

$username = $_GET["name"];

$conn = mysqli_connect($host, $user, $password, $dbname);

if($username == 'admin') {
    echo "<h2>Prenotazioni dei clienti</h2>";
    $sqlP = "SELECT * FROM Prenotazione ";
    $result = mysqli_query($conn, $sqlP);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='pren'><table><tr><td>" . "Nome</td><td>" . $row["Nome"] . "</td></tr>" .
            "<tr><td>Cognome</td><td> " . $row["Cognome"] . "</td></tr>" .
            "<tr><td>Telefono</td><td> " . $row["Telefono"] . "</td></tr>" .
            "<tr><td>E-mail</td><td> " . $row["Email"] . "</td></tr>" .
            "<tr><td>Messaggio</td><td> " . $row["Messaggio"] . "</td></tr>" .
            "<tr><td>Check-in</td><td> " . $row["Checkin"] . "</td></tr>" .
            "<tr><td>Check-out</td><td> " . $row["Checkout"] . "</td></tr>" .
            "<tr><td>Struttura</td><td> " . $row["BeB"] . "</td></tr>" .
            "<tr><td>N. Persone</td><td> " . $row["Persone"] . "</td></tr>" .
            "</td></tr>" . "</table></div>";
    }
    echo "<h2>Messaggi dai clienti</h2>";
    $sqlC = "SELECT * FROM Contatto ";
    $result = mysqli_query($conn, $sqlC);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='pren'><table><tr><td>" . "Nome</td><td> " . $row["Nome"] . "</td></tr>" .
            "<tr><td>Cognome</td><td> " . $row["Cognome"] . "</td></tr>" .
            "<tr><td>Telefono</td><td> " . $row["Telefono"] . "</td></tr>" .
            "<tr><td>E-mail</td><td> " . $row["Email"] . "</td></tr>" .
            "<tr><td>Messaggio</td><td> " . $row["Messaggio"] . "</td></tr>" .
            "</td></tr>" . "</table></div>";
    }
}
else {
    echo "<h2>Le tue prenotazioni</h2>";
    $sqlP = "SELECT * FROM Prenotazione WHERE Username = '$username' ";
    $result = mysqli_query($conn, $sqlP);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='pren'><table><tr><td>" . "Nome</td><td> " . $row["Nome"] . "</td></tr>" .
            "<tr><td>Cognome</td><td> " . $row["Cognome"]."</td></td>" .
            "<tr><td>Telefono</td><td> " . $row["Telefono"]."</td></tr>" .
            "<tr><td>E-mail</td><td> " . $row["Email"]."</td></tr>" .
            "<tr><td>Messaggio</td><td> " . $row["Messaggio"]."</td></tr>" .
            "<tr><td>Check-in</td><td> " . $row["Checkin"]."</td></tr>" .
            "<tr><td>Check-out</td><td> " . $row["Checkout"]."</td></tr>" .
            "<tr><td>Struttura</td><td> " . $row["BeB"]."</td></tr>" .
            "<tr><td>N. Persone</td><td> " . $row["Persone"]."</td></tr>" .
            "</td></tr></table></div>";
    }
    echo "<div class=\"prenotazionebutton\"><a href=\"prenotazioni.php\" class='btnP'>Effettua una prenotazione</a></div>";
    echo "</div>";
}

$conn->close();

?>

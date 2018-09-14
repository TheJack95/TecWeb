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
//$username=$_POST['username'];


$pass=$_POST['pass'];
if($conn->connect_error)
    die($conn->connect_error);


$username=$pss="";

$username=$_POST['user']; 
$pass=$_POST['pass'];

if($username=="" && $pass=="")
 header("location:login.php?err=Campo vuoto o errato");
elseif($username == 'admin') {

    echo "<h2>Prenotazione dei Clienti</h2>";

    $sqlP = "SELECT * FROM Prenotazione ";
    $result = mysqli_query($conn, $sqlP);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id='pren'>" . " - Nome: " . $row["Nome"] . "<br>" .
            " - Cognome: " . $row["Cognome"] . "<br>" .
            " - Telefono: " . $row["Telefono"] . "<br>" .
            " - E-mail: " . $row["Email"] . "<br>" .
            " - Messaggio: " . $row["Messaggio"] . "<br>" .
            " - Check-in: " . $row["Checkin"] . "<br>" .
            " - Check-out: " . $row["Checkout"] . "<br>" .
            " - Struttura: " . $row["BeB"] . "<br>" .
            " - N. Persone: " . $row["Persone"] . "<br>" .
            "<br>" . "</div>";
    }

    echo "<h2>Messaggi dai Clienti</h2>";

    $sqlC = "SELECT * FROM Contatto ";
    $result = mysqli_query($conn, $sqlC);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id='pren'>" . " - Nome: " . $row["Nome"] . "<br>" .
            " - Cognome: " . $row["Cognome"] . "<br>" .
            " - Telefono: " . $row["Telefono"] . "<br>" .
            " - E-mail: " . $row["Email"] . "<br>" .
            " - Messaggio: " . $row["Messaggio"] . "<br>" .
            "<br>" . "</div>";
    }
}
else
{
    echo "<h2>La tua prenotazione</h2>";

    $sqlP = "SELECT * FROM Prenotazione WHERE Username = '$username' ";

    $result = mysqli_query($conn, $sqlP);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div id='pren'>" . " - Nome: " . $row["Nome"] . "<br>" .
            " - Cognome: " . $row["Cognome"]."<br>" .
            " - Telefono: " . $row["Telefono"]."<br>" .
            " - E-mail: " . $row["Email"]."<br>" .
            " - Messaggio: " . $row["Messaggio"]."<br>" .
            " - Check-in: " . $row["Checkin"]."<br>" .
            " - Check-out: " . $row["Checkout"]."<br>" .
            " - Struttura: " . $row["BeB"]."<br>" .
            " - N. Persone: " . $row["Persone"]."<br>" .
            "<br>";
    }

    echo "<form action=\"prenotazioni.php\" >
        <button class='btnP' type=\"submit\">Effettua una prenotazione</button>
        </form>";

    echo "</div>";
}



// chiusura della connessione
$conn->close();





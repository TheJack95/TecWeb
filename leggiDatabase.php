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

$row1 = $r1->num_rows;
$row2 = $r2->num_rows;

echo "<table><tr> <th>Id</th> <th>Nome</th> <th>Cognome</th> <th>Telefono</th> <th>Email</th> <th>Messaggio</th></tr>";
for($i=0; $i<$r1; ++$i)
{
    $r1->data_seek($i);
    $row1 = $r1->fetch_array(MYSQLI_NUM);

    echo "</tr>";
    for($k=0; $k<6; ++$k) echo "<td>$row1[$k]</td>";
    echo "</tr>";
}
echo "</table>";


echo "<table><tr> <th>Id</th> <th>Nome</th> <th>Cognome</th> <th>Telefono</th> <th>Email</th> <th>Messaggio</th><th>Check-in</th> <th>Check-out</th> <th>Nome B&B</th></tr>";
for($j=0; $j<$r2; ++$j)
{
    $r2->data_seek($j);
    $row2 = $r2->fetch_array(MYSQLI_NUM);

    echo "</tr>";
    for($k=0; $k<9; ++$k) echo "<td>$row2[$k]</td>";
    echo "</tr>";
}
echo "</table>";


// chiusura della connessione
$conn->close();





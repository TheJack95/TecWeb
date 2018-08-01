<?php
    $conn = new mysqli('localhost', 'root', 'giacomo', 'form');
    if($conn->connect_error)
        die($conn->connect_error);

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $telefono = $_POST['telefono'];
    $mailFrom = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    $query = "INSERT INTO Contatto VALUES('0','$nome','$cognome','$telefono','$mailFrom','$messaggio')";
    
    $conn->query($query);
?>

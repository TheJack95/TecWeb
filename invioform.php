<?php
$name = $_POST['nome'];
$cognome = $_POST['cognome'];
$telefono = $_POST['telefono'];
$mailFrom = $_POST['email'];
$messaggio = $_POST['message'];
$fp = fopen('data.xml', 'a+');
fwrite($fp,
    "<contatto><nome>$name</nome><cognome>$cognome</cognome><telefono>$telefono</telefono><email>$mailFrom</email><messaggio>$messaggio</messaggio></contatto>");
fclose($fp);
?>

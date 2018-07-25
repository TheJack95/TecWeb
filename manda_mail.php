<?php  
     
$name = $_POST['nome'];
$cognome = $_POST['cognome'];
$telefono = $_POST['telefono'];
$mailFrom = $_POST['email'];
$messaggio = $_POST['testo'];
$riceviMail = isset($_POST['mail']) ? $_POST['CONTRATTO'] : 'no';
$mailTo ='tabacchi.erik@gmail.com';
$headers = 'from: '.$mailFrom;
$subject = 'contatti';
$subject2 = 'copia mail';
     
mail($mailTo, $subject, $messaggio, $headers);
     
if($riceviMail == 'yes')
    mail($mailFrom, $subject2, $message, $headers);
   
     



?>

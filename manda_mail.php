<?php  
     
     $name = $_POST['nome'];
     $cognome = $_POST['cognome'];
     $telefono = $_POST['telefono'];
     $mailFrom = $_POST['email'];
     $messaggio = $_POST['testo'];
     $riceviMail = isset($_POST['mail']) ? $_POST['CONTRATTO'] : 'no';
     
     $mailTo ='fioresegiulia@hotmail.com';
     $headers = 'from: '.$mailFrom;
     
     mail($mailTo, 'contatti', $message, $headers);
     
     if($riceviMail == 'yes')
     mail($mailFrom, 'Copia mail', $message, $headers);
     
    header("location: form.php");


?>

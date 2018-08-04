<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Contatti</title>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="form.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
    </head>

    <body id="contatti">
        <div id="header">
            <div id="logo">
                <img src="img/logogeg.jpg" alt="logo Bed & Breakfast's GEG"/>
                <div id="testologo">
                    Bed & Breakfast
                </div>
            </div>
            <h1  id="titolo">
                <span xml:lang="en">BED & BREAKFAST'S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
            </h1>
        </div>

        <?php include("menu.php"); ?>
        
        <?php

			// define variables and set to empty values
			$val_name = $val_surname = $val_email = $val_mex = "";
			$nome = $cognome  = $email = $telefono = $messaggio = "";
			$all_values_ok = true;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["nome"])) {
					$val_name = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
					$all_values_ok = false;
				} else {
					$nome = test_input($_POST["nome"]);
				}

				if (empty($_POST["cognome"])) {
					$val_surname = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
					$all_values_ok = false;
				} else {
					$cognome= test_input($_POST["cognome"]);
				}

				$telefono = $_POST["telefono"];

				if (empty($_POST["email"])) {
					$val_email = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
					$all_values_ok = false;
				} else {
					$email = test_input($_POST["email"]);
					// controllo su email
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$emailErr = "Invalid email format";
					}
				}

				if (empty($_POST["messaggio"])) {
					$all_values_ok = false;
					$val_mex = "CAMPO/I OBBLIGATORIO/I VUOTO/I ";
				} else {
					$messaggio = test_input($_POST["messaggio"]);
				}

			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			?>

            
        <form id="contact" method="post" action="" name="datiUtenti">
				<div id="input_rule">
					<label class="label-cont" for="nome">Nome <span class="important">*</span> </label>
					<input class="input_text" type="text" id="nome" name="nome"><div class="error"><?php echo $val_name?></div>
				</div>
				<div id="input_rule">
					<label class="label-cont" for="cognome">Cognome <span class="important">*</span></label>
					<input class="input_text" type="text" id="cognome" name="cognome"><div class="error"><?php echo $val_surname?></div>
				</div>
				<div id="input_rule">
					<label class="label-cont" for="email">E-Mail <span class="important">*</span></label>
					<input class="input_text" type="text" id="email" name="email"><div class="error"><?php echo $val_email?></div>
				</div>
				<div id="input_rule">
					<label class="label-cont" for="telefono">Telefono</label>
					<input class="input_text" type="text" id="telefono" name="telefono">
				</div>
				<div id="input_rule">
					<label class="label-cont" for="messaggio">Messaggio <span class="important">*</span></label>
					<textarea class="txt" id="message" name="messaggio" placeholder="Scrivi qui la tua richiesta..."></textarea>
					<div class="error"><?php echo $val_mex?></div>
				</div>
				<div id="button_rule">
					<input class="submit_button" type="submit" name="submit" value="Invia la tua richiesta"> 
				</div>
        </form>

		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			if (isset($_POST['submit'])) {
				if($all_values_ok)
				{
								$guid = GUID();
								
								// nome di host
								$host = "127.0.0.1";
								// username dell'utente in connessione
								$user = "root";
								// password dell'utente
								$password = "";
								$dbname = "geg";
								
								

								// stringa di connessione al DBMS
								$connessione = new mysqli($host, $user, $password, $dbname);

								// verifica su eventuali errori di connessione
								if ($connessione->connect_errno) {
									echo "Connessione fallita: ". $connessione->connect_error . ".";
									exit();
								}
								else
									echo "Connessione effetuata";
								
									
								$sql = "INSERT INTO contatto (id, nome, cognome, telefono, email, messaggio)
								VALUES ('$guid','$nome','$cognome','$telefono','$email','$messaggio')";

								if ($connessione->query($sql) === TRUE) {
									echo "New record created successfully";
								} else {
									echo "Error: " . $sql . "<br>" . $connessione->error;
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

        <?php include("footer.php"); ?>
    </body>
</html>

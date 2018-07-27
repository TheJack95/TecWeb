<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>
		<title>Contatti</title>
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        	<link rel="stylesheet" type="text/css" href="B&B_style.css" media="screen"/>
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
                  <h1  id="titolo"><span xml:lang="en">BED & BREAKFAST'S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr></h1>
                </div>
		
		<div class="menu">
			<?php include("menu.php"); ?>
		</div>
	
		<form id="form" action="manda_mail.php" method="post" name="datiUtenti">
			Nome : <input type="text" name="nome" /><br/>
			Cognome : <input type="text" name="cognome"/><br/>
			E-mail : <input type="text" name="email" /><br/>
			Telefono : <input type="text" name="telefono"/><br/>
			Messaggio :</br>
			<textarea name="testo" cols="40" rows="5"></textarea><br/>
			<input type="checkbox" name="mail" id="action" value="action"/>
			<label for="Ricevi email">Spunta se vuoi ricevere questo messaggio sulla tua email.</label><br/>
			<button type="submit">Invia</button>
		</form>
		
		<?php include("footer.php"); ?>
	</body>
</html>

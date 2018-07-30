<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>
		<title>Contatti</title>
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        	<link rel="stylesheet" type="text/css" href="B&B_style.css" media="screen"/>
        	<link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="form.css" media="screen"/>
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
		<form id="contact" method="post" action="manda_mail.php" name="datiUtenti">
			<div>
				<label class="label-cont" for="nome">Nome</label>
				<input class="prova" type="text" id="nome" name="nome"><br/>

				<label class="label-cont" for="cognome">Cognome</label>
				<input class="prova" type="text" id="cognome" name="cognome">

				<label class="label-cont" for="email">E-Mail</label>
				<input class="prova" type="text" id="email" name="email">

				<label class="label-cont" for="telefono">Telefono</label>
				<input class="prova" type="text" id="telefono" name="telefono">

				<label class="label-cont" for="message">Messaggio</label>
				<textarea class="txt" id="message" name="message" placeholder="Scrivi qui la tua richiesta..."></textarea>

				<input type="checkbox" name="mail" id="action" value="action"/>
				<label for="ricevuta">Contrassegna se vuoi ricevere questo messaggio sulla tua cassella di posta</label><br/>

				<button class="go" type="submit" value="invia">Invia</button>
			</div>
		</form>

		<?php include("footer.php"); ?>
	</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta charset="utf-8"/>
        <title>Contatti</title>
	    <link rel="icon" href="img/logogeg.jpg"/>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="contatti.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
        <script type="text/javascript" src="scrollback.js"></script>
    </head>

    <body id="contatti">
        <div id="header">
            <div id="logo">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast's GEG"/>
                <div class="testologo">
                    Bed &amp; Breakfast&rsquo;s
                </div>
            </div>
            <div id="logo2">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast's GEG"/>
                <div class="testologo">
                    Bed &amp; Breakfast&rsquo;s
                </div>
            </div>
            <h1 class="titolo">
                <span lang="en">Bed &amp; Breakfast&rsquo;s</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
            </h1>
        </div>

        <?php include("menu.php"); ?>
        <p class="testo">
            In questa pagina puoi contattare lo staff di <abbr title="Bed and Breakfast" lang="en">B&amp;B&rsquo;s</abbr> <abbr title="Giulia 		    Erik Giacomo">GEG</abbr>. Per qualunque informazione puoi lasciare un messaggio nell'apposito spazio e verrai ricontattato 		    entro qualche ora. <strong>Puoi utilizzare questo form anche per registrarti al nostro sito</strong>: scrivi nella casella messaggio &ldquo;<strong>ISCRIZIONE</strong>&rdquo; e riceverai delle credenziali d'accesso temporanee via email.
        </p>

        <?php include("formvalid.php"); ?>

        <form id="contact" method="post" name="datiUtenti">
				<div class="input_rule">
					<label class="label-cont" for="nome">Nome <span class="important">*</span> </label>
					<input class="input_text" type="text" id="nome" name="nome"><div class="error"><?php echo $val_nome?></div>
				</div>
				<div class="input_rule">
					<label class="label-cont" for="cognome">Cognome <span class="important">*</span></label>
					<input class="input_text" type="text" id="cognome" name="cognome"><div class="error"><?php echo $val_cognome?></div>
				</div>
				<div class="input_rule">
					<label class="label-cont" for="email">E-Mail <span class="important">*</span></label>
					<input class="input_text" type="text" id="email" name="email"><div class="error"><?php echo $val_email?></div>
				</div>
				<div class="input_rule">
					<label class="label-cont" for="telefono">Telefono </label>
					<input class="input_text" type="text" id="telefono" name="telefono">
				</div>
				<div class="input_rule">
					<label class="label-cont" for="messaggio">Messaggio <span class="important">*</span></label>
					<textarea class="input_text" id="messaggio" name="messaggio" placeholder="Scrivi qui la tua richiesta..."></textarea>
                    <div class="error"><?php echo $val_messaggio?></div>
				</div>
				<div id="button_rule">
					<input class="submit_button" type="submit" name="submit" value="Invia la tua richiesta"> 
				</div>
        </form>

        <?php include("invioContatto.php"); ?>

        <button type="button" id="top-button" onclick="topFunction()">TOP</button>

        <?php include("footer.php"); ?>
    </body>
</html>

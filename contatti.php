<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Contatti</title>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="contatti.css" media="screen"/>
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
            <div id="logo2">
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
        <p class="testo">
            In questa pagina puoi contattare il nostro la sede di <abbr title="Bed and Breakfast" xml:lang="en">B&B</abbr>
            <abbr title="Giulia Erik Giacomo">GEG</abbr>; entro qualche ora ti garantiamo che riceverai una risposta.
            Per qualunque informazione puoi lasciare un messaggio nell'apposito spazio, verrai contattato il prima possibile.
            <strong>Puoi utilizzare questo form per iscriverti al nostro sito, scrivendo nella casella messaggio "ISCRIZIONE".</strong>
            Riceverai delle credenziali d'accesso temporanee via email.
        </p>
        <?php include("formvalid.php"); ?>

        <form id="contact" method="post" action="" name="datiUtenti">
				<div class="input_rule">
					<label class="label-cont" for="nome">Nome<span class="important">*</span> </label>
					<input class="input_text" type="text" id="nome" name="nome"><div class="error"><?php echo $val_name?></div>
				</div>
				<div class="input_rule">
					<label class="label-cont" for="cognome">Cognome <span class="important">*</span></label>
					<input class="input_text" type="text" id="cognome" name="cognome"><div class="error"><?php echo $val_surname?></div>
				</div>
				<div class="input_rule">
					<label class="label-cont" for="email">E-Mail <span class="important">*</span></label>
					<input class="input_text" type="text" id="email" name="email"><div class="error"><?php echo $val_email?></div>
				</div>
				<div class="input_rule">
					<label class="label-cont" for="telefono">Telefono</label>
					<input class="input_text" type="text" id="telefono" name="telefono">
				</div>
				<div class="input_rule">
					<label class="label-cont" for="messaggio">Messaggio <span class="important">*</span></label>
					<textarea class="txt" id="message" name="messaggio" placeholder="Scrivi qui la tua richiesta..."></textarea>
					<div class="error"><?php echo $val_mex?></div>
				</div>
				<div id="button_rule">
					<input class="submit_button" type="submit" name="submit" value="Invia la tua richiesta"> 
				</div>
        </form>
        <?php include("invioContatto.php"); ?>


        <?php include("footer.php"); ?>
    </body>
</html>

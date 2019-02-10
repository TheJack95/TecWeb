<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Prenotazioni</title>
	    <link rel="icon" href="img/logogeg.jpg"/>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="contatti.css" media="screen"/>
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
    </head>

    <body id="pren">
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
                <span xml:lang="en">Bed &amp; Breakfast&rsquo;s</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
            </h1>
        </div>

        <?php include("menu.php"); ?>

        <p class="testo">
            In questa pagina puoi prenotare la tua stanza presso uno dei nostri B&amp;B&rsquo;s. Entro qualche ora dall&rsquo;invio della 		    richiesta, ti verrà inviata una mail di conferma dell&rsquo;avvenuta prenotazione. Per qualunque informazione puoi lasciare un 		    messaggio nell&rsquo;apposito spazio e verrai contattato il prima possibile. <strong>Ricorda di iscriverti <a class="contatti" 		    href="contatti.php">qui</a></strong> prima di proseguire con la compilazione della prenotazione. Buona permanenza da tutto lo staff!
        </p>

        <?php include("formvalid.php"); ?>

        <form method="post" name="datiUtenti">
            <div class="sel">
                <select class="boh" name="BeB">
                    <option value="" disabled selected>Seleziona il Bed &amp; Breakfast </option>
                    <option value="AlBorgo">B&amp;B Al Borgo</option>
                    <option value="Boscoverde">B&amp;B Boscoverde</option>
                    <option value="CadoreHaus">B&amp;B Cadore Haus</option>
                    <option value="LaCorte">B&amp;B La Corte</option>
                    <option value="StelladelViandante">B&amp;B La Stella del Viandante</option>
                </select>
                <label class="label-cont" for="Checkin"></label><input class="boh" type="date" id="Checkin" name="Checkin"/>
                <label class="label-cont" for="Checkout"></label><input class="boh" type="date" id="Checkout" name="Checkout"/>
                <select class="boh" id="sel1" name="Persone">
                    <option>Seleziona il numero di ospiti </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div id="contact">
                <div class="input_rule">
                    <label class="label-cont" for="username">Username <span class="important">*</span> </label>
                    <input class="input_text" type="text" id="username" name="username">
                </div>

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
                    <label class="label-cont" for="telefono">Telefono</label>
                    <input class="input_text" type="text" id="telefono" name="telefono">
                </div>

                <div class="input_rule">
                    <label class="label-cont" for="messaggio">Messaggio <span class="important">*</span></label>
                    <textarea class="input_text" id="messaggio" name="messaggio" placeholder="Scrivi qui la tua richiesta..."></textarea>
                    <div class="error"><?php echo $val_messaggio?></div>
                </div>

                <div id="button_rule">
                    <input class="submit_button" type="submit" name="submit" value="Invia la tua prenotazione">
                </div>
            </div>
        </form>

        <?php include("invioPrenotazione.php"); ?>

        <button type="button" id="top-button" onclick="topFunction()">&#8593;</button>

        <?php include("footer.php"); ?>
    </body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Prenotazioni</title>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="contatti.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
    </head>

    <body id="pren">
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
            In questa pagina puoi prenotare la tua stanza presso uno dei nostri B&B. Entro qualche ora ti verrà inviata
            una mail di conferma dell'avvenuta prenotazione. Per qualunque informazione puoi lasciare un messaggio nell'apposito
            spazio, verrai contattato il prima possibile.
            <br/><strong>Ricordati di iscriverti <a rel="login" href="areaPrivata.php">qui</a> prima di effettuare una prenotazione.</strong><br>
            Buona permanenza da tutto lo staff!
        </p>

        <?php include("formvalid.php"); ?>



        <form  method="post" action="" name="datiUtenti">

            <div class="sel">
                <select class="boh" name="BeB">
                    <option value="sel">Seleziona il Bed and Breakfast</option>
                    <option value="AlBorgo">Al Borgo</option>
                    <option value="CadoreHaus">Cadore Hause</option>
                    <option value="StelladelViandante">Stella del Viandante</option>
                    <option value="Boscoverde">Boscoverde</option>
                    <option value="LaCorte">La Corte</option>
                </select>
                <input class="boh" type="txt" name="Checkin" placeholder="Check-in" onfocus="(this.type='date')" id="Check"/>
                <input class="boh"type="txt" name="Checkout" placeholder="Check-out" onfocus="(this.type='date')" id="Check"/>
                <select class="boh" id="sel1" name="Persone">
                    <option>Seleziona il numero di persone</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div id="contact">
                <div class="input_rule">
                    <label class="label-cont" for="nome">Nome <span class="important">*</span> </label>
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
                    <input class="submit_button" type="submit" name="submit" value="Prenotazione">
                </div>
            </div>

        </form>
        <?php include("invioPrenotazione.php"); ?>

        <?php include("footer.php"); ?>
    </body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Prenotazioni</title>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="form.css" media="screen"/>
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
            <h1  id="titolo">
                <span xml:lang="en">BED & BREAKFAST'S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
            </h1>
        </div>

        <?php include("menu.php"); ?>

        <p class="testo">
            In questa pagina puoi prenotare la tua stanza presso uno dei nostri B&B. Entro qualche ora ti verrà inviata
            una mail di conferma dell'avvenuta prenotazione. Per qualunque informazione puoi lasciare un messaggio nell'apposito
            spazio, verrai contattato il prima possibile.
            Buona permanenza da tutto lo staff!
        </p>

        <form id="contact" method="post" action="formvalid.php">
            <div>
                <p><span class="error"><?php echo $OK;?></span></p>

                <label  for="BeB">Seleziona il Bed and Breakfast</label>
                <select class="prova" name="BeB">
                    <option value="AlBorgo">Al Borgo</option>
                    <option value="CadoreHaus">Cadore Hause</option>
                    <option value="StelladelViandante">Stella del Viandante</option>
                    <option value="Boscoverde">Boscoverde</option>
                    <option value="LaCorte">La Corte</option>
                </select>

                <label class="label-cont" for="nome">Nome <span class="error">*</span> </label>
                <input class="prova" type="text" id="nome" name="nome"><br/>

                <label class="label-cont" for="cognome">Cognome <span class="error">*</span></label>
                <input class="prova" type="text" id="cognome" name="cognome">


                <label class="label-cont" for="email">E-Mail <span class="error">*</span></label>
                <input class="prova" type="text" id="email" name="email">


                <label class="label-cont" for="telefono">Telefono</label>
                <input class="prova" type="text" id="telefono" name="telefono">

                <label class="label-cont" for="messaggio">Messaggio</label>
                <textarea class="txt" id="message" name="messaggio" placeholder="Scrivi qui la tua richiesta..."></textarea>



                <button class="go"  type="submit" value="invia">Invia</button>
                <?php echo $txtOK;?>
            </div>
        </form>


        <?php include("footer.php"); ?>
    </body>
</html>

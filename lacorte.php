<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <title>B&amp;B La Corte</title>
        <link rel="icon" href="img/lacorteLogo.png"/>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
        <script type="text/javascript" src="scrollback.js"></script>
    </head>

    <body id="LaCorte">
        <div id="header">
            <div id="logo">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
                <div class="testologo">
                    Bed &amp; Breakfast&rsquo;s
                </div>
            </div>
            <div id="logo2">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
                <div class="testologo">
                    Bed &amp; Breakfast&rsquo;s
                </div>
            </div>
            <h1 class="titolo">
                <abbr title="Bed and Breakfast" xml:lang="en">B&amp;B</abbr> La Corte
            </h1>
        </div>

        <?php include("menu.php"); ?>


        <div class="tutto">
            <img id="imgBeB" src="img/lacorte.jpg" alt="La Corte B&amp;B"/>
            <img id="logoBeB" src="img/lacorteLogo.png" alt="logo La Corte B&amp;B"/>
            <ul id="info">
                <li>+39 0000 000000</li>
                <li>Via Bassafonda, 46</li>
                <li>45010 Rosolina (RO)</li>
                <li><a href="https://goo.gl/maps/R8aMwSJQsUs" target="_blank">Guarda nella mappa</a></li>
                <li><a href="prenotazioni.php">Prenota</a> o <a href="contatti.php">richiedi</a> maggiori informazioni</li>
            </ul>

            <p class="testo">
                Situata a Rosolina, a 5 km dal parco regionale del Delta del Po, questa casa di campagna,ex
                maneggio interamente ristrutturato, offre tre camere luminose e un giardino con area giochi per
                bambini.
                Le camere sono climatizzate e includono arredi in stile classico e moderno e un bagno privato.
                Ogni mattina viene servita una colazione dolce a base di prodotti da forno, marmellate e bevande
                calde e fredde.
                Nel centro di Rosolina troverete un autobus che conduce alla spiaggia.
                Le coppie apprezzano molto la posizione: l'hanno valutata 9,1 per un viaggio a due.
                Questa è anche la struttura con il miglior punteggio per il rapporto qualità-prezzo a Rosolina!
                Rispetto ad altre strutture di questa città, gli ospiti ottengono di più spendendo meno.
            </p>

            <div id="imgCamere">
                <img class="camera" src="img/lacorteCamera1.jpg" alt="Camera"/>
                <img class="camera" src="img/lacorteCamera2.jpg" alt="Camera"/>
            </div>

        </div>

        <button type="button" id="top-button" onclick="topFunction()">&#8593;</button>
        <?php include("footer.php"); ?>

    </body>

</html>

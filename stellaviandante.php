<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
        <title>B&amp;B La Stella del Viandante</title>
	    <link rel="icon" href="img/lastelladelviandanteLogo.png" />
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen" />
        <script type="text/javascript" src="scrollback.js"></script>
    </head>

    <body id="StellaViandate">
        <div id="header">
            <div id="logo">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast's GEG"/>
                <div class="testologo">Bed &amp; Breakfast&rsquo;s</div>
            </div>
            <div id="logo2">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast's GEG"/>
                <div class="testologo">Bed &amp; Breakfast&rsquo;s</div>
            </div>
            <h1 class="titolo">
               <abbr title="Bed and Breakfast" xml:lang="en">B&amp;B</abbr> La Stella del Viandante
            </h1>
        </div>

        <?php include("menu.php"); ?>

        <div class="tutto">
            <img id="imgBeB" src="img/lastelladelviandante.png" alt="B&amp;B La Stella del Viandante" />
            <img id="logoBeB" src="img/lastelladelviandanteLogo.png" alt="Logo La Stella del Viandante" />

            <ul id="info">
                <li>+39 0000 000000</li>
                <li>Via Danilo Busin, 7</li>
                <li>32020 Falcade (BL)</li>
                <li><a href="https://goo.gl/maps/e6JwcoXmWN12" target="_blank">Guarda nella mappa</a></li>
                <li><a href="prenotazioni.php">Prenota</a> o <a href="contatti.php">richiedi</a> maggiori informazioni</li>
            </ul>

            <p class="testo">
                Situato a Caviola, a 7 minuti dal impianto di risalita del comprensorio sciistico San Pellegrino
                il Boscoverde offre connessione Wi&ndash;Fi e parcheggio privato gratuiti. Arredate in stile alpino,
                tutte le camere sono dotate di bagno privato fornito di doccia e set cortesia, TV a schermo piatto,
                minibar e, in alcuni casi, di balcone con vista sulle montagne.
            </p>

            <div id="imgCamere">
                <img class="camera" src="img/lastelladelviandanteCamera1.jpg" alt="Camera" />
                <img class="camera" src="img/lastelladelviandanteCamera2.jpg" alt="Camera" />
            </div>

        </div>

        <button type="button" id="top-button" onclick="topFunction()">&#8593;</button>

        <?php include("footer.php"); ?>
    </body>
</html>

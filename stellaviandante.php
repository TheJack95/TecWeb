<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
        <title>B&B La Stella del Viandante</title>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
    </head>

    <body>
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
            <h1 id="titolo">
               <abbr title="Bed and Breakfast" xml:lang="en">B&B</abbr> Stella del Viandante
            </h1>
        </div>


        <?php include("menu.php"); ?>

        <div class="tutto">
            <img id="imgBeB" src="img/B&B_Falcade.jpg" alt="B&B Falcade"/>  <!--IMMAGINE B&B-->
            <img id="logoBeB" src="img/logoB&B_Falcade.jpg" alt="Logo Stella del Viandante"/>	<!--LOGO B&B-->
            <ul id="info">
                <li>Telefono: 00000000 </li>
                <li>Indirizzo: Via Danilo Busin 7, Falcade </li>
                <li><a href="https://goo.gl/maps/e6JwcoXmWN12" target="_blank">Vedi sulla mappa</a></li>
                <li><a href="prenotazioni.php">Prenota o richiendi maggiori informazioni</a></li>
            </ul>

            <p class="testo" style="clear:left">
                Situato a Caviola, a 7 minuti dal impianto di risalita del comprensorio sciistico San Pellegrino
                il Boscoverde offre connessione WiFi e parcheggio privato gratuiti. Arredate in stile alpino,
                tutte le camere sono dotate di bagno privato fornito di doccia e set cortesia, TV a schermo piatto,
                minibar e, in alcuni casi, di balcone con vista sulle montagne
            </p>

            <div id="imgCamere">
                <img class="camera" src="img/camera_Falcade.jpg" alt="Camera"/>
                <img class="camera" src="img/camera_Falcade2.jpg" alt="Camera"/>
            </div>

        </div>

        <?php include("footer.php"); ?>
    </body>

</html>

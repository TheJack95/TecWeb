<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta charset="utf-8"/>
        <title>B&amp;B Boscoverde</title>
        <link rel="icon" href="img/boscoverdeLogo.png"/>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
    </head>

    <body id="BoscoVerde">
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
                <abbr title="Bed and Breakfast" lang="en">B&amp;B</abbr> Boscoverde
            </h1>
        </div>

		<?php include("menu.php"); ?>

        <div class="tutto">
            <img id="imgBeB" src="img/boscoverde.png" alt="B&amp;B Boscoverde"/>  <!--IMMAGINE B&B-->
            <img id="logoBeB" src="img/boscoverdeLogo.png" alt="Logo Boscoverde"/>	<!--LOGO B&B-->

            <ul id="info">
                <li>Telefono: +39 0000 000000</li>
                <li>Indirizzo: via Visome 211, 32100 Belluno</li>
                <li><a href= "https://goo.gl/maps/zkUznEEVUAo" target="_blank">Vedi sulla mappa</a></li>
                <li><a href="prenotazioni.php">Prenota o richiedi maggiori informazioni</a></li>
            </ul>

            <p class="testo">
                Nel nostro B&amp;B ogni camera &egrave; dotata di arredamento completo: letti (possibilità a scelta di letto matrimoniale
                o di due letti separati), comodini, un comodo divano, set di biancheria da camera completo, televisore,
                fornitura di energia elettrica, riscaldamento, aria condizionata e servizio di pulizie quotidiane.
                Situato sul colle del Monte Nevegal, una delle più affascinanti località del bellunese,
                meta adatta sia per chi vuole rilassarsi sia a chi preferisce una vacanza più movimentata, divertimento ed
                esplorazione infatti non mancheranno grazie a sentieri di montagna immersi nella natura,
                pareti di roccia per gli amanti delle scalate, piste da sci e molto altro ancora!
            </p>


        <div id="imgCamere">
            <img class="camera" src="img/boscoverdeCamera1.jpg" alt="Camera"/>
            <img class="camera" src="img/boscoverdeCamera2.jpg" alt="Camera"/>
        </div>

      </div>
       <?php include("footer.php"); ?>
    </body>

</html>

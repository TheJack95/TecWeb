<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta charset="utf-8"/>
        <title>B&B Al Borgo</title>
        <link rel="icon" href="img/alborgoLogo.png"/>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
    </head>

    <body id="Borgo">
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
                <abbr title="Bed and Breakfast" xml:lang="en">B&amp;B</abbr> Al Borgo
            </h1>
        </div>

        <?php include("menu.php"); ?>

        <div class="tutto">

            <img id="imgBeB" src="img/alborgo.png" alt="Al Borgo"/>
            <img id="logoBeB" src="img/alborgoLogo.png" alt="Al Borgo Logo"/>

            <ul id="info">
                <li>+39 0000 000000</li>
                <li>Via Ventolone, 4</li>
                <li>435032 Arqu&agrave; Petrarca (PD)</li>
                <li><a href="https://goo.gl/maps/9VnRUVpRX7C2" target="_blank">Guarda nella mappa</a></li>
                <li><a href="prenotazioni.php">Prenota</a> o <a href="contatti.php">richiedi</a> maggiori informazioni</li>
            </ul>

            <p class="testo">
                <strong>Siamo aperti tutto l&apos;anno!</strong>
            </p>
            <p class="testo">
                Abbiamo tre camere, di cui due con bagno privato interno, la terza con bagno privato esterno alla stanza. Ogni
                camera ha l&apos;impianto di condizionamento e climatizzazione. In ogni camera &egrave; naturalmente disponibile la 			televisione. In tutta la struttura &egrave; possibile utilizzare il collegamento ad Internet; &egrave; inoltre presente uno 			spazio comune a disposizione dei nostri ospiti. Tutti i giorni viene eseguito il servizio di pulizia delle camere e dei locali. 		Non dovete preoccuparvi per gli orari o per il parcheggio, &egrave; possibile rientrare a qualsiasi ora (anche della notte) ed 			il parcheggio &egrave; a disposizione degli ospiti. La struttura &egrave; una dimora storica, ovviamente assicurata, con 			posizione panoramica e tranquilla. Il giardino e la terrazza permettono agli ospiti di trascorrere piacevoli momenti di relax, 			all&apos;aria aperta ed in completa tranquillit&agrave;.
            </p>
            <p class="testo">
                Avete con voi i vostri bambini? Nessun problema, Al Borgo abbiamo sia le attrezzature (e i giochi) che il
                servizio di <span lang="en">baby&ndash;sitting</span>, oltre chiaramente alle culle e al letto apposito (su richiesta).
                Il gestore vive nella casa, ha una buona conoscenza della zona e potr&agrave; aiutarvi ad organizzare il vostro
                tempo per non perdere nessuna delle opportunit&agrave; offerte da Arqu&agrave; Petrarca e zone limitrof.
            </p>

            <div id="imgCamere">
                <img class="camera" src="img/alborgoCamera1.jpg" alt="Camera"/>
                <img class="camera" src="img/alborgoCamera2.jpg" alt="Camera"/>
            </div>
        </div>

        <?php include("footer.php"); ?>
    </body>

</html>

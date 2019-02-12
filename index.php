<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Bed &amp; Breakfast&rsquo;s GEG</title>
        <link rel="icon" href="img/logogeg.jpg" />
        <link rel="stylesheet" media="screen" href="fogliocss.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <script type="text/javascript" src="scrollback.js"></script>
    </head>

    <body id="home">
        <div id="header">
            <div id="logo">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
                <div class="testologo">Bed &amp; Breakfast&rsquo;s</div>
            </div>
            <div id="logo2">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
                <div class="testologo">Bed &amp; Breakfast&rsquo;s</div>
            </div>

            <h1 class="titolo">
                <span xml:lang="en">BED &amp; BREAKFAST&rsquo;S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
            </h1>
        </div>

        <?php include("menu.php"); ?>

        <div class="tutto">
            <h1 class="titolo">Chi Siamo</h1>
            <img id="homerosolina" src="img/montagna.png" alt="foto della montagna" />
            <p class="testo">
                <span xml:lang="en">Bed &amp; Breakfast&rsquo;s</span> <abbr title="Giulia Erik Giacomo">GEG</abbr> nasce nel 2017
                dall&rsquo;idea di tre giovani imprenditori con l&rsquo;intenzione di valorizzare delle strutture gi&agrave; esistenti, ma
                troppo piccole per essere competitive singolarmente, creando una catena, senza per&ograve; uniformarle.
                L&rsquo;idea &egrave; quella di permettere ai viaggiatori di conoscere le bellezze del luogo in cui si trovano e ci&ograve; 			&egrave; possibile solamente grazie al nostro impegno costante per la manutenzione delle caratteristiche delle singole 			strutture.
            </p>

            <h1 class="sTitolo">Dove Siamo</h1>
            <p class="testo">
                Le localit&agrave; dove sono collocati i <abbr title="Bed and Breakfast" xml:lang="en">B&amp;B</abbr> sono molto diverse tra loro:
                Falcade, Nevegal e Auronzo di Cadore (tutte situate in provincia di Belluno) si trovano immerse nelle stupende Dolomiti Venete,
                mentre le strutture di Arqu&agrave; Petrarca (PD) e Rosolina (RO) si trovano nella Pianura Padana Veneta. Le nostre strutture
                dispongono tutte di ampie camere con due o quattro posti letto, bagno privato, un piccolo angolo cottura e un tavolo da pranzo.</p>

            <h1 class="sTitolo">I Nostri Prezzi</h1>
            <p class="testo">
                Le camere sono affittabili da &euro; 15 a &euro; 30 a persona a notte nel periodo di bassa stagione e da &euro; 20 a &euro; 40
                a persona a notte nel periodo di alta stagione, mentre la tassa varia in base alla localit&agrave;.<br />
                Se vuoi informazioni pi&ugrave; precise <a class="contatti" href="contatti.php">contattaci</a>, siamo a
                tua disposizione!
            </p>

            <h1 class="sTitolo">I Nostri Servizi</h1>
            <div class="lista">
                <ul>
                    <li><strong>I servizi compresi:</strong></li>
                    <li><span xml:lang="en">Check&ndash;in</span> e <span xml:lang="en">check&ndash;out</span> alle 8 alle 20</li>
                    <li>Colazione internazionale a <span xml:lang="fr">buffet</span></li>
                    <li>Posto auto e/o posto bici</li>
                    <li>Possibilit&agrave; di ricarica per <span xml:lang="en">E&ndash;bike</span></li>
                    <li>Connessione <span xml:lang="en">Wi&ndash;Fi</span> nelle camere</li>
                </ul>
            </div>
            <div class="lista">
                <ul>
                    <li><strong>I servizi disponibili a pagamento:</strong></li>
                    <li>Pranzo al sacco </li>
                    <li>Noleggio biciclette</li>
                    <li>Noleggio sci e scarponi (solo nelle strutture bellunesi)</li>
                    <li>Servizio taxi da/per la stazione pi&ugrave; vicina</li>
                </ul>
            </div>

            <div id="imgCamere">
                <img class="camera" src="img/borgo.png" alt="foto di un borgo" />
                <img class="camera" src="img/dolomiti.png" alt="foto panoramica della Dolomiti" />
            </div>
        </div> <!-- fine class tutto -->

        <div>
            <button type="button" id="top-button" onclick="topFunction()">&#8593;</button>
        </div>

        <?php include("footer.php"); ?>
    </body>
</html>

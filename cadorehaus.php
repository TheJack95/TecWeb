<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<head>
        <meta charset="utf-8"/>
		<title>B&amp;B Cadore Haus</title>
		<link rel="icon" href="img/cadorehausLogo.png"/>
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
		<link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
        <script type="text/javascript" src="scrollback.js"></script>
	</head>
	
	<body id="CadoreHause">
		<div id="header">
			<div id="logo">
				<img src="img/logogeg.jpg" alt="logo Bed & Breakfast's GEG"/>
				<div class="testologo">
					Bed &amp; Breakfast&rsquo;s
				</div>
			</div>
            <div id="logo2">
                <img src="img/logogeg.jpg" alt="logo Bed & Breakfast's GEG"/>
                <div class="testologo">
                    Bed &amp; Breakfast&rsquo;s
                </div>
            </div>
			<h1 class="titolo">
                <abbr title="Bed and Breakfast" lang="en">B&amp;B</abbr> Cadore Haus
			</h1>
		</div>

		<?php include("menu.php"); ?>


        <div class="tutto">

            <img id="imgBeB" src="img/cadorehaus.png" alt="Ecco come si presenta la Cadore Haus, con i suoi splendidi balconi in legno adornati di fiori."/>
            <img id="logoBeB" src="img/cadorehausLogo.png" alt="Logo Cadore Haus"/>

            <ul id="info">
                <li>+39 0000 000000</li>
                <li>Via Saletta, 30</li>
                <li>32041 Auronzo di Cadore (BL)</li>
                <li><a href="https://goo.gl/maps/RNhypTnWjv92" target="_blank">Guarda nella mappa</a></li>
                <li><a href="prenotazioni.php">Prenota</a> o <a href="contatti.php">richiedi</a> maggiori informazioni</li>
            </ul>

            <p class="testo">
                Nel cuore delle Dolomiti, la Cadore Haus offre momenti di assoluto relax a contatto con la natura.
                Ricavato dall'antica dependance dell'Albergo Cadore, la casa vanta stanze accoglienti e curate.
                La costruzione si trova nel centro del paese, a pochi passi dalla chiesa di San Lucano, nella frazione
                di Villapiccola. Costruita nel 1904 e convertita in attivit&agrave; ricettiva nel 2006, la Cadore Haus vanta
                una grande attenzione ai dettagli e uno spiccato senso dello stile. Gli interni sono rivestiti da
                boiserie in legno progettate e realizzate da abili artigiani della zona. Ogni particolare &egrave; stato scelto
                per creare un'atmosfera di familiarit&agrave; e assoluta eleganza. La casa trae ispirazione dagli alberghi di
                inizio secolo: le pareti in legno, i ricchi tendaggi e i pregevoli mobili d'antiquariato che la arredano
                ne fanno un luogo ideale per trascorrere dei momenti indimenticabili tra le Alpi. La struttura si
                articola su due piani: al piano terra si trova la reception, una piccola hall e la sala dove viene
                servita la colazione. Al primo piano si trovano le camere, ciascuna dotata di bagno autonomo.
            </p>
            <div id="imgCamere">
                <img class="camera" src="img/cadorehausCamera1.jpg" alt="Camera"/>
                <img class="camera" src="img/cadorehausCamera2.jpg" alt="Camera"/>
            </div>
        </div>
        <button type="button" id="top-button" onclick="topFunction()">&#8593</button>
        <!--<button type="button" id="top-button"><a href="#header">TOP</a></button>-->
        <?php include("footer.php"); ?>
	</body>

</html>

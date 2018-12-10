<!-- Cadore Haus HTML -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
		<title>B&B Cadore Haus</title>
		<link rel="icon" href="img/logogeg.jpg"/>
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
		<link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
	</head>
	
	<body>
		<div id="header">
			<div id="logo">
				<img src="img/logogeg.jpg" alt="logo Bed & Breakfast&rsquo;s GEG"/>
				<div id="testologo">
					Bed &amp; Breakfast
				</div>
			</div>
            <div id="logo2">
                <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
                <div id="testologo">
                    Bed &amp; Breakfast
                </div>
            </div>
			<h1 id="titolo">
                <abbr title="Bed and Breakfast" xml:lang="en">B&amp;B</abbr> Cadore Haus
			</h1>
		</div>

		<?php include("menu.php"); ?>


        <div class="tutto">

            <img id="imgBeB" src="img/cadore.jpg" alt="Ecco come si presenta la Cadore Haus, con i suoi splendidi balconi in legno adornati di fiori."/>
            <img id="logoBeB" src="img/logocadore.png" alt="Logo Cadore Haus"/>

            <ul id="info">
                <li>Telefono: 0000000000</li>
                <li>Indirizzo: Via Saletta, 30, 32041 Auronzo di Cadore BL</li>
                <li><a href="https://goo.gl/maps/RNhypTnWjv92" target="_blank">Vedi sulla mappa</a></li>
                <li><a href="prenotazioni.php">Prenota o richiendi maggiori informazioni</a></li>
            </ul>

            <p class="testo">Nel cuore delle Dolomiti, la Cadore Haus offre momenti di assoluto relax a contatto con la natura.
                Ricavato dall&rsquo;antica dependance dell&rsquo;Albergo Cadore, la casa vanta stanze accoglienti e curate. La costruzione si trova nel centro del paese, a pochi passi dalla chiesa di San Lucano, nella frazione di Villapiccola. Costruita nel 1904 e convertita in attivit&agrave; ricettiva nel 2006, la Cadore Haus vanta una grande attenzione ai dettagli e uno spiccato senso dello stile. Gli interni sono rivestiti da boiserie in legno progettate e realizzate da abili artigiani della zona. Ogni particolare &egrave; stato scelto per creare un&rsquo;atmosfera di familiarit&agrave; e assoluta eleganza. La casa trae ispirazione dagli alberghi di inizio secolo: le pareti in legno, i ricchi tendaggi e i pregevoli mobili d&rsquo;antiquariato che la arredano ne fanno un luogo ideale per trascorrere dei momenti indimenticabili tra le Alpi. La struttura si articola su due piani: al piano terra si trova la reception, una piccola hall e la sala dove viene servita la colazione. Al primo piano si trovano le camere, ciascuna dotata di bagno autonomo.</p>


            <div id="imgCamere">
                <img class="camera" src="img/cadoremobilio.jpg" alt="Camera" width="350" height="250"/>
                <img class="camera" src="img/cadorecamere.jpg" alt="Camera" width="350" height="250"/>
            </div>
        </div>
        <?php include("footer.php"); ?>
	</body>

</html>

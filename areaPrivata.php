<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Area Personale</title>
        <link rel="icon" href="img/logogeg.jpg"/>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="areaPrivata.css" media="screen"/>
        <script type="text/javascript" src="scrollback.js"></script>
    </head>

    <body id="AP">
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
                <span lang="en">Bed &amp; Breakfast&rsquo;s</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
            </h1>
        </div>

        <?php include("menu.php"); ?>

        <div class="tutto">
            <?php include("leggiDatabase.php"); ?>
        </div>
        <button type="button" id="top-button" onclick="topFunction()">&#8593</button>
        <?php include("footer.php"); ?>
    </body>
</html>

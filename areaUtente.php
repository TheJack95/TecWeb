<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
    <title>Area Personale</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="login.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="areaPrivata.css" media="screen"/>
</head>
<div class="container">
    <body id="AP">
    <div id="header">
        <div id="logo">
            <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
            <div class="testologo">
                Bed &amp; Breakfast
            </div>
        </div>

        <div id="logo2">
            <img src="img/logogeg.jpg" alt="logo Bed &amp; Breakfast&rsquo;s GEG"/>
            <div class="testologo">
                Bed &amp; Breakfast
            </div>
        </div>

        <h1  id="titolo"><span xml:lang="en">BED &amp; BREAKFAST&rsquo;S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr></h1>

    </div>

    <?php include("menu.php"); ?>

    <div class="tutto">
        <?php include("leggiDatabase.php");?>
    </div>


    </body>

    <?php include("footer.php"); ?>
</div>

</html>

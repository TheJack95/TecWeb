<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Area Personale</title>
        <link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="areaPrivata.css" media="screen"/>
    </head>
    <body id="AP">
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

                <h1  id="titolo"><span xml:lang="en">BED & BREAKFAST'S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr></h1>

            </div>

            <?php include("menu.php"); ?>

            <div class="tutto">
                <?php include("leggiDatabase.php"); ?>
            </div>

        <?php include("footer.php"); ?>
    </body>

</html>

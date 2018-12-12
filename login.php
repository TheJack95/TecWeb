<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>
        <meta charset="utf-8"/>
		<title>Area Personale</title>
		<link rel="icon" href="img/logogeg.jpg"/>
        <link rel="stylesheet" type="text/css" href="login.css" />
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="menu.css" />
		<link rel="stylesheet" type="text/css" href="footer.css"/>
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css" />
	</head>
	
	<body id="AP">
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
			<h1  id="titolo">
				<span xml:lang="en">BED &amp; BREAKFAST&rsquo;S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
			</h1>
		</div>
		
		<?php error_reporting(0); include("menu.php"); ?>
		
		<form id="login" action="areaPrivata.php" method="post">
			
			<div class="nome">
                <label for="user">Username <span class="error">*</span></label><br/>
                <input class="cella" type="text" id="user" name="user" ><?php echo $_GET['err'] ?></div><br/>
			</div>
			
			<div class="nome">
                <label for="pass">Password <span class="error">*</span></label><br/>
                <input class="cella" type="text" id="pass" name="pass"><?php echo $_GET['err'] ?></div><br/>
			</div>
			
			<button class="go" type="submit">Login</button>
			
			<div class="aiuto">
				<span>Se non sei ancora registrato, <a href="contatti.php">contattaci</a>!</span>
			</div>
		</form>
		
		<?php include("footer.php"); ?>
		
	</body>
</html>

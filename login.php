<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>
		<title>Area Personale</title>
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="menu.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="login.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="footer.css" media="screen"/>
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
			<h1  id="titolo">
				<span xml:lang="en">BED & BREAKFAST'S</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
			</h1>
		</div>
		
		<?php include("menu.php"); ?>
		
		<form id="login" action="action_page.php" method="post">
			
			<div class="nome">
                <label for="user">Username <span class="error">*</span></label><br/>
                <input class="cella" type="text" id="user" name="user" placeholder="Inserisci lo username"><br/>
			</div>
			
			<div class="nome">
                <label for="pass">Password <span class="error">*</span></label><br/>
                <input class="cella" type="text" id="pass" name="pass" placeholder="Inserisci la password"><br/>
			</div>
			
			<button class="go" type="submit">Login</button>
			
			<div class="aiuto">
				<span>Se non sei ancora registrato, <a href="form.php">contattaci</a>!</span>
			</div>
		</form>
		
		<?php include("footer.php"); ?>
		
	</body>
</html>

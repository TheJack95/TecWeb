<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	<head>
        <meta charset="utf-8"/>
		<title>Area Personale</title>
		<link rel="icon" href="img/logogeg.jpg"/>
        <link rel="stylesheet" type="text/css" href="login.css" />
		<link rel="stylesheet" type="text/css" href="fogliocss.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="menu.css" />
		<link rel="stylesheet" type="text/css" href="footer.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen and (max-width:600px)" href="cssMOBILE.css"/>
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

			<h1 class="titolo">
				<span xml:lang="en">Bed &amp; Breakfast&rsquo;s</span> <abbr title="Giulia Erik Giacomo">GEG</abbr>
			</h1>
		</div>
		
		<?php include("menu.php"); ?>

        <?php include("loginvalid.php"); ?>

		<form id="login" action="#" method="post">
			<div class="nome">
                <label for="user">Username <span class="error">*</span></label><br/>
                <input class="cella" type="text" id="user" name="user" ><div class="error"><?php echo $val_user?></div>
			</div>
			
			<div class="nome">
                <label for="pass">Password <span class="error">*</span></label><br/>
                <input class="cella" type="password" id="pass" name="pass"><div class="error"><?php echo $val_pass?></div>
			</div>
			
			<button class="go" type="submit">Login</button>

			<div class="aiuto">
				<span>Se non sei ancora registrato, <a href="contatti.php">contattaci</a>!</span>
			</div>
		</form>

        <button type="button" id="top-button" onclick="topFunction()">&#8593;</button>

		<?php include("footer.php"); ?>
		
	</body>
</html>

<div class="menu" id="myTopnav">
    <a href="homepage.php" class="home">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Bed &amp; Breakfast&rsquo;s
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="B&B.php">Panoramica B&amp;B&rsquo;s</a>
            <a href="ilBorgo.php">B&amp;B Al Borgo</a>
            <a href="boscoverde.php">B&amp;B Boscoverde</a>
            <a href="cadorehaus.php">B&amp;B Cadore Haus</a>
            <a href="lacorte.php">B&amp;B La Corte</a>
            <a href="stellaviandante.php">B&amp;B Stella del Viandante</a>
        </div>
    </div>
    <a class="BeB" href="B&B.php">Bed &amp; Breakfast&rsquo;s</a>
    <a class="contatti" href="contatti.php">Contatti</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    <a class="AP" href="login.php">Area Personale</a>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "menu") {
            x.className += " responsive";
        } else {
            x.className = "menu";
        }
    }
</script>

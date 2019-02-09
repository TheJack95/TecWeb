<div class="menu" id="mymenu">
    <a href="index.php" class="home">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Bed &amp; Breakfast&rsquo;s
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="BandB.php" class="BandB">Panoramica B&amp;B&rsquo;s</a>
            <a href="ilBorgo.php" class="Borgo">B&amp;B Al Borgo</a>
            <a href="boscoverde.php" class="BoscoVerde">B&amp;B Boscoverde</a>
            <a href="cadorehaus.php" class="CadoreHause">B&amp;B Cadore Haus</a>
            <a href="lacorte.php" class="LaCorte">B&amp;B La Corte</a>
            <a href="stellaviandante.php" class="StellaViandante">B&amp;B La Stella del Viandante</a>
        </div>
    </div>
    <a class="contatti" href="contatti.php">Contatti</a>
    <a class="AP" href="login.php">Area Personale</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"> &#9776; </a>     <!- ICONA PER MOBILE ->
</div>

<!- Gli script sono stati messi qua per comodità al posto di fare un file separato in quanto sono solo per il menù ->
<script>
    /* Cambia testo di un link del menù */
    if(document.title === "Area Privata") {
        document.getElementById("log").innerHTML = "Logout";
        document.getElementById("log").style.cursor = "pointer";
        document.getElementById("log").style.pointerEvents = "visible";
    }
    
/* SCRIPT PER MOBILE */
    function myFunction() {
        var x = document.getElementById("mymenu");
        if (x.className === "menu") {
            x.className += " responsive";
        } else {
            x.className = "menu";
        }
    }
</script>

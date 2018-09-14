<div class="menu" id="myTopnav">
    <a href="index.php" class="home">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Bed & Breakfast
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="B&B.php">Panoramica B&B</a>
            <a href="ilBorgo.php">B&B Al Borgo</a>
            <a href="boscoverde.php">B&B Boscoverde</a>
            <a href="cadorehaus.php">B&B Cadore Haus</a>
            <a href="lacorte.php">B&B La Corte</a>
            <a href="stellaviandante.php">B&B Stella del Viandante</a>
        </div>
    </div>
    <a class="BeB" href="B&B.php">Bed & Breakfast</a>
    <a class="contatti"  href="contatti.php">Contatti</a>
    <a href="javascript:void(0);"  class="icon" onclick="myFunction()">&#9776;</a>
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

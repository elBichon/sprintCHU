<nav>
    <a href="#">&#9776;</a>
    <ul>
        <li><a href="index.php"><img id="logo" src="img/logo.png"></a></li>
        <li><a href="patient.php">PATIENT</a></li>
        <li><a href="index.php">GESTION</a></li>
    </ul>
</nav>

<script>//You can replace this JS with a CSS hover or target selector
$("nav>a").click(function() {
                 $("nav ul").toggleClass("nava");
                 return false;
                 });
</script>
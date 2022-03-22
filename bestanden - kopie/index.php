<?php
require_once("classes/Mitchell.php");
$mitchell = new Mitchell();
?>
<!DOCTYPE html>
<html>

<!-- AFBEELDEN STYLING CSS(.css bestand) -->
<!-- Functie Balk CSS(.css bestand) -->
<head>
<title>Beroepsproduct</title>

  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="BeroepsproductHome.css" type="text/css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<base href="https://portfolio.adainforma.tk/mitchell/" />
 <!--Afbeeldingen CSS style-->
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 7.4%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

  
</head>

<!-- Functie Balk Buttons -->
<!-- Titel -->
<!-- Afbeelding en style -->
<!-- portfolio en contact -->
<body>

<div class="topnav">
	<div class="logoo">
		<img src="logo12atrans.png" width="50" />
	</div>
  <a <?php if(!isset($_GET["pagina"])) { echo 'class="active"'; } ?> href="https://portfolio.adainforma.tk/mitchell/"><i><i>Home</i></a>
  <a <?php if(isset($_GET["pagina"]) && $_GET["pagina"] == "portfolio") { echo 'class="active"'; } ?> href="?pagina=portfolio"><i>Portfolio</i></a>
  <a <?php if(isset($_GET["pagina"]) && $_GET["pagina"] == "projecten") { echo 'class="active"'; } ?> href="?pagina=projecten"><i>Projecten</i></a>
  <a <?php if(isset($_GET["pagina"]) && $_GET["pagina"] == "contact") { echo 'class="active"'; } ?> href="?pagina=contact"><i>Contact</i></a>
  
  <div class="nav-right">
	<div class="datum"><b><span id="datum">00:00</span></b></div>
  </div>
</div>
  
<div class="container-fluid">
<?php
/*
	Kijken of `?pagina` in de adresbalk wordt gezien
	daarna kijken of deze overeen komt
*/
if(isset($_GET["pagina"])) {
	if($_GET["pagina"] == "portfolio") {
		// $_GET["pagina"] komt overeen met ?pagina=portfolio
		require_once("classes/PortfolioClass.php");
		require("BeroepsproductPortfolio.php");
		
	}elseif($_GET["pagina"] == "contact") {
		// $_GET["pagina"] komt overeen met ?pagina=contact
		require("BeroepsproductContact.php");
		
	}elseif($_GET["pagina"] == "projecten") {
		// $_GET["pagina"] komt overeen met ?pagina=contact
		require_once("classes/ProjectenClass.php");
		require("BeroepsproductProjecten.php");
	}else{
		// Voor als de pagina niet meer bestaat
		echo("Deze pagina werd niet gevonden.");
	}
}else{
	// haalt de homepage script uit de database op via een class mitchell
	echo $mitchell->Homepage();
}
?>
<div>
<!-- javascript diploma teller -->
<script type="text/javascript">
// diploma
function DiplomaCountdown() {
	const afteldatum = new Date("01-07-2022 00:20:00").getTime();
	const x = setInterval(function() {
		const nu = new Date().getTime();
		const verschil = afteldatum - nu;
		
		const dagen = Math.floor(verschil / (1000 * 60 * 60 * 24));
		const uren = Math.floor((verschil % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		const minuten = Math.floor((verschil % (1000 * 60 * 60)) / (1000 * 60));
		const seconden = Math.floor((verschil % (1000 * 60)) / 1000);
		
		const element = document.getElementById("datum");
		
		element.innerText = "Geslaagd in " + dagen + " dagen, " + uren + " uur, " + minuten + " minuten en " + seconden + " seconden.";
		
		if(verschil < 0) {
			clearInterval(x);
			element.innerText = "GESLAAGD! 🎉";
		}
		
	}, 1000);
}
DiplomaCountdown();
</script>
</body>
</html>

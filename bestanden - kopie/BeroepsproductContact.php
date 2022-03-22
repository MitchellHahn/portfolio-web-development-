<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Positie van de Afbeelding-->
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>

<!--Titel-->
<h1>Contactgegevens</h1>

<div>
<?php
require("classes/config.php");
$query = $pdo->prepare("SELECT naam,telefoonnummer,email FROM contactgegevens WHERE id='1'");
if($query->execute()) {
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	
	foreach($results as $result) {
		$contactgegevens = $result;
		echo "Naam: " . $contactgegevens->naam."<br />";	
		echo '
			<!--Link naar e-mail en social media -->
			Email: <a href="mailto:'.$contactgegevens->email.'">'.$contactgegevens->email.'</a><br />
			Social Media: <a href="https://www.linkedin.com/in/mitchell-hahn-033a35a2/">LinkedIn</a><br /><br />
		';
	}
?>
</div>

<!--Afbeelding en groote-->
<img src="portfolio_afbeeldingen/contactfoto.png" alt="Contact" width="400" >
<?php } ?>
</body>
</html>
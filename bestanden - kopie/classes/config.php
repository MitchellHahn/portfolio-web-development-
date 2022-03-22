<?php
// verbinden met database
// host, gebruikersnaam, wachtwoord, database
$host = "";
$username = "";
$password = '';
$database = "";

try {
	$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch (PDOExeception $error) {
	die("Verbinden met database is mislukt.");
}
?>
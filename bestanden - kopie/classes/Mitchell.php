<?php
// Nieuwe class
// Portfolio class koppelen aan hoofd class
class Mitchell {
	private $pdo;
	function __construct() {
		require("config.php");
		$this->pdo = $pdo;
	}
	
	// Home
	public function Homepage() {
		$page = "home";
		$query = $this->pdo->prepare("SELECT titel, content FROM homepage LIMIT 1");
		$query->bindparam("page", $page);
		
		if($query->execute()) {
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			
			if($query->rowCount() == 0) return "Pagina niet gevonden.";
			return $results[0]->content;
		}else{
			return "Kan homepage niet laden..";
		}
	}
	
	public function Test() {
		return "test";
	}
}
?>
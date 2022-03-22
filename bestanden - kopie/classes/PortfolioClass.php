<?php
class PortfolioClass {
	private $pdo;
	function __construct() {
		require("config.php");
		$this->pdo = $pdo;
	}
	
	public function Werkervaring() {
		$query = $this->pdo->prepare("SELECT * FROM portfolio_werkervaring ORDER BY id ASC");
		if($query->execute()) {
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			return $results;
		}else{
			return [];
		}
	}
	
	public function Onderwijs() {
		$query = $this->pdo->prepare("SELECT * FROM portfolio_onderwijs ORDER BY id ASC");
		if($query->execute()) {
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			return $results;
		}else{
			return [];
		}
	}
	
	public function Certificaten() {
		$query = $this->pdo->prepare("SELECT * FROM portfolio_certificaten ORDER BY id ASC");
		if($query->execute()) {
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			return $results;
		}else{
			return [];
		}
	}
}
?>
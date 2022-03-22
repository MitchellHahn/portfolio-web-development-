<?php
class Projecten {
	private $pdo;
	public function __construct() {
		require("config.php");
		$this->pdo = $pdo;
	}
	
	public function alleprojecten() {
		$query = $this->pdo->prepare("SELECT * FROM projecten ORDER by projectnummer ASC");
		if($query->execute()) {
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			return $results;
		}else{
			return [];
		}
	}
}
?>
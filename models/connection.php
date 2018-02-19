<?php
	
	class Connection {
		
		public function connect() {
			$link = new PDO("mysql:host=localhost;dbname=php_practice", "crodaycat", "T35t");
		}
	}

?>
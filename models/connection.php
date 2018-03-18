<?php
	
	class Connection {
		
		public static function connect() {
			$link = new PDO("mysql:host=localhost;dbname=php_practice", "root", "root");
			return $link;
		}
	}

?>
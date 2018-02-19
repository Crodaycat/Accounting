<?php
	
	require_once "connection.php";

	class UserData extends Connection {
		
		public function userRegisterModel ($data, $table) {
			
			$stmt = Connection::connect()->prepare();

		}
	}

?>
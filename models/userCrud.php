<?php
	
	require_once "connection.php";

	class UserData extends Connection {
		
		public static function userRegisterModel ($data, $table) {
			
			$stmt = Connection::connect()->prepare("INSERT INTO $table(usuario, password, email) VALUES (:usuario, :password, :email)");

			$stmt -> bindParam(":usuario", $data["user"], PDO::PARAM_STR);
			$stmt -> bindParam(":password", $data["password"], PDO::PARAM_STR);
			$stmt -> bindParam(":email", $data["email"], PDO::PARAM_STR);

			if ($stmt -> execute()) {
				return "Success";
			} else {
				return "error";
			}

		}
	}

?>
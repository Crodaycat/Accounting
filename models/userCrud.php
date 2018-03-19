<?php
	
	require_once "connection.php";

	class UserData extends Connection {
		
		public static function userRegisterModel ($data, $table) {
			
			$stmt = Connection::connect()->prepare("INSERT INTO $table(usuario, password, email) VALUES (:usuario, :password, :email)");

			$stmt -> bindParam(":usuario", $data["user"], PDO::PARAM_STR);
			$stmt -> bindParam(":password", $data["password"], PDO::PARAM_STR);
			$stmt -> bindParam(":email", $data["email"], PDO::PARAM_STR);

			if ($stmt -> execute()) {
				return "success";
			} else {
				return "error";
			}

			$stmt -> close();

		}

		public static function userLoginModel ($data, $table) {

			$stmt = Connection::connect()->prepare("SELECT usuario, email, password FROM $table WHERE email = :email");
			$stmt -> bindParam(":email", $data["email"], PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();

			$stmt -> close();
		}

		public static function usersViewModel ($table) {
			$stmt = Connection::connect()->prepare("SELECT usuarios_id, usuario, email, password FROM $table");
			$stmt -> execute();
			return $stmt -> fetchAll();
			$stmt -> close();
		}

		public static function userEditModel ($data, $table) {
			$stmt = Connection::connect() -> prepare ("SELECT usuario, email, password FROM $table WHERE usuarios_id = :userId");
			$stmt -> bindParam(":userId", $data, PDO::PARAM_INT);
			$stmt -> execute();
			return $stmt -> fetch();

			$stmt -> close();
		}

		public static function userUpdateModel ($data, $table){
			$stmt = Connection::connect() -> prepare ("UPDATE $table SET usuario = :usuario, email = :email, password = :password WHERE usuarios_id = :id");

			$stmt -> bindParam(":id", $data["id"], PDO::PARAM_INT);
			$stmt -> bindParam(":usuario", $data["usuario"], PDO::PARAM_STR);
			$stmt -> bindParam(":email", $data["email"], PDO::PARAM_STR);
			$stmt -> bindParam(":password", $data["password"], PDO::PARAM_STR);

			if ($stmt -> execute()) {
				return "success";
			} else{
				return "error";
			}

			$smtm-> close();

		}

	}

?>
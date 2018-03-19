<?php

	class IndexController {

		#LoggedView template
		public function loggedView () {
			include ("views/loggedView.php");
		}

		public function loginView() {
			include ("views/loginView.php");
		}

		public function linksPagesController () {
			if (isset($_GET["action"])) {
				$link = $_GET["action"];
			} else {
				$link = "index";
			}
			
			$response = LinksPages::linksPagesModel($link);
			include $response;
		}

		public function userRegisterController () {
			if (isset($_POST["singInName"])) {
				$data = array(	"user"=>$_POST["singInName"],
							"password"=>$_POST["singInPassword"],
							"email"=>$_POST["singInEmail"]);


				$response = UserData::userRegisterModel ($data, "usuarios");

				if ($response == "success") {
					header("location:index.php?action=ok");
				} else {
					header("location:index.php");
				}
			}
		}

		public function userLogInController () {
			if (isset($_POST["logInEmail"])) {
				$data = array("email" => $_POST["logInEmail"], 
							"passowrd" => $_POST["logInPassword"]);

				$response = UserData::userLogInModel ($data, "usuarios");

				if ($response["email"] == $_POST["logInEmail"] && $response["password"] == $_POST["logInPassword"]) {
					session_start();
					$_SESSION["userName"] = $response["usuario"];
					$_SESSION["userEmail"] = $response["email"];

					header("location:index.php");
				} else {
					header("location:fallo");
				}
			}
		}

	}

?>
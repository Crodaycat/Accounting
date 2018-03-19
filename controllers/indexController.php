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

	}

?>
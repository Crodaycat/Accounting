<?php

	class IndexController {

		#LoggedView template
		public function loggedView () {
			include ("views/loggedView.php");
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
			$data = array(	"user"=>$_POST["user"],
							"password"=>$_POST["password"],
							"email"=>$_POST["email"]);

			$response = UserData::userRegisterModel ($data, "usuarios");

			echo $response;
		}

	}

?>
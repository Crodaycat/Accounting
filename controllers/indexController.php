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

	}

?>
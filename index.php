<?php
	
	require_once "controllers/indexController.php";
	require_once "models/userCrud.php";
	require_once "models/model.php";
	session_start();
	$indexController = new IndexController();
	if (isset($_SESSION["userName"])) {
		if ($_SESSION["userName"] != "") {
			$indexController -> loggedView();
		}
	} else {
		$indexController -> loginView();
	}	
?>
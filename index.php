<?php
	
	require_once "controllers/indexController.php";
	require_once "models/userCrud.php";
	require_once "models/model.php";

	$indexController = new IndexController();
	$indexController -> loggedView();
	
?>
<?php
	
	require_once "controllers/IndexController.php";

	$indexController = new IndexController();
	$indexController -> loggedView();
?>
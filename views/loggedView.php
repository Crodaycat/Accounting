<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, user-scalable = no initial-scale = 1.0, maximum-scale = 1.0, minimum-scale=1.0">
		<link rel="StyleSheet" href="css/bootstrap.min.css" type="text/css">
		
		<link rel="StyleSheet" href="css/style-gui.css" type="text/css">
	</head>
	<body>

	<header>
		<a href="#" class="btn-menu">
			Menu
			<i class="icon right fa fa-bars"></i>
		</a>

		<div style="display: inline-block; float: right;">
			Bienvenido <?php echo $_SESSION["userName"]; ?> 
			<a href="logout"><i class="fas fa-sign-out-alt"></i></a>
		</div>
	</header>

	<?php

		include "modules/navigation.php";

	?>

	<div class="main main-content container">
		<?php
			$indexController = new IndexController();
			$indexController -> linksPagesController();
		?>

		<br><br>

		<i class="fa fa-bar-chart" aria-hidden="true"></i> Barras
		<i class="fa fa-times" aria-hidden="true"></i> Cerrar
		<i class="fa fa-shield" aria-hidden="true"></i> Sguridad
		<i class="fa fa-cog" aria-hidden="true"></i> Configuración
		<i class="fa fa-shopping-cart" aria-hidden="true"></i> Inventario
		<i class="fa fa-plus-square" aria-hidden="true"></i> Inventario +
		<i class="fa fa-minus-square" aria-hidden="true"></i> Inventario -
		<i class="fa fa-pencil-square" aria-hidden="true"></i> Inventario Editar
		<i class="fa fa-file-text" aria-hidden="true"></i> Venta - Facturación

	</div>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/nav-bar-menu.js" type="text/javascript"></script>

	</body>
</html>
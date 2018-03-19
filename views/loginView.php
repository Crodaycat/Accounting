<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, user-scalable = no initial-scale = 1.0, maximum-scale = 1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="StyleSheet" href="css/style-gui.css" type="text/css">
	</head>
	<body>

	<header>
		<div style="display: inline-block; float: right;">Bienvenido, ingresa con tu e-mail y contraseña para acceder a la plataforma.</div>
	</header>

	<div class="main container size-fs-position">
		<div class="row content-center size-fs">
			<div class="col-lg-4">
				<form method="POST" class="content-center-hor">
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" name="logInEmail" id="email" class="form-control" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="logInPassword" id="password" class="form-control" placeholder="Password">
					</div>
					<button class="btn btn-primary" type="submit">Ingresar</button>
				</form>

				<?php
					ob_start();
					$logIn = new IndexController();
					$logIn -> userLoginController();

					if (isset($_GET["action"])) {
						if ($_GET["action"] == "loggedIn") {
							$logIn -> loggedView();
						} else {
							echo "Fallo al Ingresar.";
						}
					}
				?>

			</div>
		</div>
	</div>

	<script src="https://use.fontawesome.com/5ffb4732b9.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>
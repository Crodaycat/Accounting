<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, user-scalable = no initial-scale = 1.0, maximum-scale = 1.0, minimum-scale=1.0">
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


	</body>
</html>
<?php
	ob_start();
?>

<form method="POST">

	<div class="form-group">
		<label for="name">Name</label>
		
		<input type="text" name="singInName" id="name" class="form-control form-control-lg" aria-describedby="nameHelp" placeholder="Enter your name">

		<small id="nameHelp" class="form-text text-muted">Your name</small>
	</div>

	<div class="form-group">
		<label for="email">Email</label>

		<input type="email" name="singInEmail" id="email" class="form-control form-control-lg" aria-describedby="emailHelp" placeholder="Enter email">

		<small id="emailHelp" class="form-text text-muted">Enter your email</small>
	</div>

	<div class="form-group">
		<label for="password">Password</label>

		<input type="password" name="singInPassword" id="password" class="form-control form-control-lg" aria-describedby="passwordHelp" placeholder="Enter your password">

		<small id="passwordHelp" class="form-text text-muted">Enter your password</small>
	</div>

	<button type="submit" class="btn btn-block btn-lg btn-primary">Register</button>

</form>

<?php
	$register = new IndexController();
	$register -> userRegisterController();

	if (isset($_GET['action'])) {
		if ($_GET['action'] == "userRegisterOk") {
			echo "Registro exitoso";
		}
	}

	exit();
?>
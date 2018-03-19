<h1>Listado de usuarios</h1>

<?php
	if (isset($_GET["action"])) {
		if ($_GET["action"] == "userUpdated") {
			echo "Cambio exitoso.";
		}

	}
?>

<table class="table">
	<thead>
		<tr>
			<th>Usuario</th>
			<th>E-mail</th>
			<th>Password</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$read = new IndexController();
			$read -> usersViewController();
		?>
	</tbody>
</table>
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
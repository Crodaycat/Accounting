<div class="container-fluid">
	<div class="row content-center-hor">
		<div class="col col-xl-6 col-lg-6 col-md-10">
			<form method="POST">
				<h1>Editar usuario</h1>
				<?php
					ob_start();
					$editUser = new IndexController();
					$editUser -> userEditController();
					$editUser -> userUpdateController();
				?>
				<button type="submit" class="btn btn-block btn-lg btn-primary">Update changes</button>
			</form>
		</div>
	</div>
</div>
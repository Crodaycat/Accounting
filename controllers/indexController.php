<?php

	class IndexController {

		#LoggedView template
		public function loggedView () {
			include ("views/loggedView.php");
		}

		public function loginView() {
			include ("views/loginView.php");
		}

		public function linksPagesController () {
			if (isset($_GET["action"])) {
				$link = $_GET["action"];
			} else {
				$link = "index";
			}
			
			$response = LinksPages::linksPagesModel($link);
			include $response;
		}

		public function userRegisterController () {
			if (isset($_POST["singInName"])) {
				$data = array(	"user"=>$_POST["singInName"],
							"password"=>$_POST["singInPassword"],
							"email"=>$_POST["singInEmail"]);


				$response = UserData::userRegisterModel ($data, "usuarios");

				if ($response == "success") {
					header("location:index.php?action=ok");
				} else {
					header("location:index.php");
				}
			}
		}

		public function userLogInController () {
			if (isset($_POST["logInEmail"])) {
				$data = array("email" => $_POST["logInEmail"], 
							"passowrd" => $_POST["logInPassword"]);

				$response = UserData::userLogInModel ($data, "usuarios");

				if ($response["email"] == $_POST["logInEmail"] && $response["password"] == $_POST["logInPassword"]) {
					session_start();
					$_SESSION["userName"] = $response["usuario"];
					$_SESSION["userEmail"] = $response["email"];

					header("location:index.php");
				} else {
					header("location:fallo");
				}
			}
		}

		public function usersViewController () {
			$response = UserData::usersViewModel("usuarios");

			foreach ($response as $row => $user) {
				echo 	'<tr>
							<td>'.$user["usuario"].'</td>
							<td>'.$user["email"].'</td>
							<td>'.$user["password"].'</td>
							<td>
								<a href="index.php?action=userEdit&id='.$user["usuarios_id"].'">	Editar <i class="icon right fas fa-edit"></i><a/> - 
								<a href="'.'">Eliminar <i class="fas fa-times-circle"></i></a>
							</td>
						</tr>';
			}
		}

		public function userEditController () {
			$datos= $_GET["id"];
			$response = UserData::userEditModel($datos, "usuarios");

			echo '
				<input type="hidden" name="userId" value="'.$datos.'"></input>
				<div class="form-group">
					<label for="name">Name</label>
					
					<input type="text" name="editName" id="name" class="form-control form-control-lg" aria-describedby="nameHelp" value="'.$response["usuario"].'">

					<small id="nameHelp" class="form-text text-muted">Edit here the name</small>
				</div>

				<div class="form-group">
					<label for="email">Email</label>

					<input type="email" name="editEmail" id="email" class="form-control form-control-lg" aria-describedby="emailHelp" value="'.$response["email"].'">

					<small id="emailHelp" class="form-text text-muted">Edit here the e-mail</small>
				</div>

				<div class="form-group">
					<label for="password">Password</label>

					<input type="password" name="editPassword" id="password" class="form-control form-control-lg" aria-describedby="passwordHelp" value="'.$response["password"].'">

					<small id="passwordHelp" class="form-text text-muted">Edit here the password</small>
				</div>';
		}

		public function userUpdateController () {
			if (isset($_POST["editName"])) {
				$data = array("id" => $_POST["userId"],
						"usuario" => $_POST["editName"],
						"email" => $_POST["editEmail"],
						"password" => $_POST["editPassword"]);

				$response = userData::userUpdateModel($data, "usuarios");
				
				if ($response == "success") {
					header("location:index.php?action=userUpdated");
				} else {
					echo "error";
				}
			}
		}

	}

?>
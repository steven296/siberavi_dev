<?php

class ControladorLogin{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrLogin(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				$user = $_POST["ingUsuario"];
				$pass = $_POST["ingPassword"];

				$respuesta = ModeloLogin::mdlLogin($user, $pass);

				if($respuesta == "ok"){
					$_SESSION["user"] = $user;
					$_SESSION["pass"] = $pass;
					$_SESSION["iniciarSesion"] = "ok";

					header("Location:inicio");

				} else {
					$_SESSION["user"] = null;
					$_SESSION["pass"] = null;

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}	

		}

	}

}

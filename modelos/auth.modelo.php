<?php

require_once "conexion.php";

class ModeloLogin{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlLogin($user, $pass){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM mysql.user WHERE user = :user && password = PASSWORD(:pass) && host = 'localhost'");

		$stmt -> bindParam(":user", $user, PDO::PARAM_STR);
		$stmt -> bindParam(":pass", $pass, PDO::PARAM_STR);

		$stmt -> execute();

		if($stmt->fetch()){

			return "ok";	

		}else{

			return "error";
		
		}

	}

}
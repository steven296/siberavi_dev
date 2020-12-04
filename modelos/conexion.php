<?php

class Conexion{

	static public function conectar(){

		if (isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
			
			$link = new PDO("mysql:host=localhost;dbname=topicos",
			            $_SESSION['user'],
			            $_SESSION['pass']);
		}else{
			$link = new PDO("mysql:host=localhost;dbname=topicos",
			            "root",
			            "");
		}
		

		$link->exec("set names utf8");

		return $link;

	}

}
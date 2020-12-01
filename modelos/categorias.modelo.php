<?php

require_once "conexion.php";

class ModeloCategorias{

	/*=============================================
	CREAR CATEGORIA
	=============================================*/

	static public function mdlIngresarCategoria($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO categorias(name) VALUES (:name)");

		$stmt->bindParam(":name", $datos, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function mdlMostrarCategorias(){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM categorias");

		if(!$stmt->execute()){

			return "error";
		
		}

		return $stmt -> fetchAll();

	}

	/*=============================================
	MOSTRAR CATEGORIA ESPECIFICA
	=============================================*/

	static public function mdlMostrarCategoria($item, $valor){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM categorias WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt->fetch();

	}

	/*=============================================
	EDITAR CATEGORIA
	=============================================*/

	static public function mdlEditarCategoria($datos){

		$stmt = Conexion::conectar()->prepare("UPDATE categorias SET name = :name WHERE id = :id");

		$stmt -> bindParam(":name", $datos["name"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR CATEGORIA
	=============================================*/

	static public function mdlBorrarCategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}


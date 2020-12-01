<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/auth.controlador.php";
require_once "controladores/categorias.controlador.php";

require_once "modelos/auth.modelo.php";
require_once "modelos/categorias.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
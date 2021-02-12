<?php
// Se require una sola vez de de la carpeta controllers
require_once("mvc/controllers/plantilla.controlador.php");


$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

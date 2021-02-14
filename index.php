<?php
// Controllers en el index.php
require_once("mvc/controllers/plantilla.controlador.php");

require_once __DIR__ . './mvc/controllers/plantilla.controlador.php';
require_once __DIR__ . './mvc/controllers/ventas.controlador.php';
require_once __DIR__ . './mvc/controllers/productos.controlador.php';
require_once __DIR__ . './mvc/controllers/reportes.controlador.php';
require_once __DIR__ . './mvc/controllers/usuarios.controlador.php';


// Modelos en el index. php
require_once __DIR__ . './mvc/models/ventas.model.php';
require_once __DIR__ . './mvc/models/productos.model.php';
require_once __DIR__ . './mvc/models/reportes.model.php';
require_once __DIR__ . './mvc/models/usuarios.model.php';


// Instaciamos de las clase controlador
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

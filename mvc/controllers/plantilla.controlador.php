<?php
class ControladorPlantilla
{

    // Metodos en php
    public function ctrPlantilla()
    {
        // Incluye paginas completas html y php
        // include("mvc/views/view-plantilla/plantilla.php");
        include __DIR__ . './../views/view-plantilla/plantilla.php';
    }
}

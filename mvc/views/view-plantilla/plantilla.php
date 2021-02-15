<?php
// Para utilizar sesiones debemos llamar al metodo session_start en el DOCTYPE html
// Para que se utilize varibles de session en esta pagina o plantilla
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de ventas POS</title>

  <!--=============================== Aqui todo el css del Proyecto Sistema de ventas =============================-->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="mvc/views/view-plantilla/plugins/fontawesome-free/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="mvc/views/view-plantilla/dist/css/adminlte.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="mvc/views/view-plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Animaciones css -->
  <link rel="stylesheet" href="node_modules/animate.css/animate.css">
  <!-- CSS Principal -->
  <link rel="stylesheet" href="mvc/views/css/plantilla.css">
  <!--=========================== END OF del css proyecto Sistema de ventas ===========================-->


</head>


<!-------------------------------- CUERPO DEL DOCUMENTO ------------------------------>


<!-- SHARED DEl LA APLICACION-->
<?php

// Sistema de login
// son variables globales
// Si esta variable de sesion existe y sesion es igual a ok -> el usuariosya inicio sesion
if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == 'ok') {

  // echo 'Hola Mundo';
  // die();

  // controla el menu sidebar sidebar - collapse
  echo "<body class='hold-transition sidebar-collapse sidebar-mini accent-info'>";
  // Site wrapper
  echo '<div class="wrapper">';

  // Header del administrador

  // Include DIR debe empezar con ./
  include __DIR__ . './../shared/header.php';
  // Barra lateral de admin
  include __DIR__ . './../shared/asside.php';


  // Content de la App ventas
  // Si viene una variable get llamada ruta
  if (isset($_GET["ruta"])) {
    // Y esa varible get ruta tienen un  valor
    if (
      $_GET["ruta"] == "inicio" ||
      $_GET["ruta"] == "usuarios" ||
      $_GET["ruta"] == "categorias" ||
      $_GET["ruta"] == "productos" ||
      $_GET["ruta"] == "clientes" ||
      $_GET["ruta"] == "ventas" ||
      $_GET["ruta"] == "crear-ventas" ||
      $_GET["ruta"] == "reportes" ||
      $_GET["ruta"] == "salir"
    ) {
      // Entonces ingresamos a esa ruta
      include __DIR__ . "./../shared/" . $_GET["ruta"] . ".php";
    } else {
      include __DIR__ . './../shared/404.php';
    }
  } else { // Si no viene una variable get Que muestre INICIO por defecto
    include __DIR__ . './../shared/inicio.php';
  }
  // Footer del admin
  include __DIR__ . './../shared/footer.php';
  // Fin wrapper
  echo "</div>";
} else {
  // controla el menu sidebar sidebar - collapse
  echo "<body class='hold-transition sidebar-collapse sidebar-mini accent-info login-page'>";
  // Login del admin
  include __DIR__ . './../shared/login.php';
}
?>


<!--=============================== PLUGINS javaScript del proyecto =============================-->
<!-- jQuery -->
<script src="mvc/views/view-plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="mvc/views/view-plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="mvc/views/view-plantilla/dist/js/adminlte.min.js"></script>
<!-- Js customizado -->
<script src="mvc/views/js/plantilla.js"></script>

<!--=========================== END OF de JavaScript ===========================-->


</body>
<!---------------------------- END OF DEL DOCUMENTO ---------------------------->

</html>
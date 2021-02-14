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
  <link rel="stylesheet" href="mvc/views/view-plantilla/dist/css/adminlte.min.css">
  <!--=========================== END OF del css proyecto Sistema de ventas ===========================-->


</head>


<!-------------------------------- CUERPO DEL DOCUMENTO ------------------------------>

<body class="hold-transition sidebar-collapse sidebar-mini accent-info">
  <!-- Site wrapper -->
  <div class="wrapper">

    <!-- SHARED DEl LA APLICACION-->
    <?php

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
        $_GET["ruta"] == "reportes"
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

    ?>



  </div>
  <!-- ./wrapper -->

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
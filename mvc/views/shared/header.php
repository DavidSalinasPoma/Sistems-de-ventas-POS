<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
    <!-- Boton del menu sidebar -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Full screem y boton usuario -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Pantalla completa">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-alt"></i>
                <span class="">Usuario Administrador</span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                <div class="user-header p-3 bg-danger">
                    <div class="d-flex justify-content-center">
                        <img src="mvc/views/img/plantilla/icono-negro.png" class="img-fluid img-circle elevation-1" alt="Imagen de ususrio del sistema" style="width: 120px;">
                    </div>
                    <div class="d-flex flex-column align-items-center mt-3">
                        <span class="text-lg text-white-50">David Salinas - Desarrollador Web</span>
                        <span class="text-sm text-white-50">Usuario desde el 12 de febrero de 2021</span>
                    </div>
                </div>
                <div class="user-footer" style="background-color: #f9f9f9;">
                    <a href="salir" class="">
                        <div class="d-flex justify-content-end p-3">
                            <button type="button" class="btn btn-default btn-flat">Cerrar sesión</button>
                        </div>
                    </a>
                </div>



            </div>
        </li>
    </ul>



</nav>
<!-- /.navbar -->
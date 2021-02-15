<!-- Login -->
<div class="img-hero">
    <div class="login-box ">
        <div class="login-logo">
            <img src="mvc/views/img/plantilla/logo-blanco-bloque.png" class="img-fluid" style="padding: 30px 80px 0px 80px;" alt="Imagen de la empresa">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingresar al Sistema</p>

                <form method="post">

                    <!-- Usuario -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Usuario" name="usuarios" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7 col-md-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recuerdame
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-5 col-md-4">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- Paso 1 para el login -->
                    <!-- Creacion de un objeto -->
                    <?php
                    $login = new ControladorUsuario();
                    $login->ctrIngresoUsuarios();
                    ?>


                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>
<!-- /.login-box -->
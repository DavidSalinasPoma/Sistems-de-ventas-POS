<?php

class ControladorUsuario
{
    // Metodos
    public function ctrIngresoUsuarios()
    {
        // Preguntamos si vienen variable post
        if (isset($_POST["usuarios"])) {
            // Aqui validamos el campo usuario para prevenir SQL Inyection(Ataques al sistema)
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarios"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])
            ) {
                // Enviamos a la tabla ususarios la siguiente informacion
                $tabla = "usuarios";

                // Campo a consultar
                $campo = "usuario";

                // Su valor del campo
                $valor = $_POST["usuarios"];

                // Enviamos tres parametros para hacer las preguntas y recibimos la respuesta
                //  otra manera de instaciar un objeto aqui se recibe una respuetas de la instancia
                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $campo, $valor);
                // Mostrar respuesta con un var_dum cuando se ejecute
                // var_dump($respuesta['usuario']);
                // Preguntamos si las credenciales  son iguales a la base de datos
                if ($respuesta["usuario"] == $_POST["usuarios"] && $respuesta["password"] == $_POST["password"]) {
                    $_SESSION["iniciarSesion"] = "ok";

                    // Redireccionamos a la pagina de inicio
                    echo "<script>
                    window.location = 'inicio';
                    </script>";
                } else {
                    echo "<div class='alert alert-danger mt-4 mb-0 animate__animated animate__fadeIn'>Error al ingresar, vuekve a intentarlo</div>";
                }
            }
        }
    }
}

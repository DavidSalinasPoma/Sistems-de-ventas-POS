<?php
// Lo requiere una sola vez
require_once 'conexion.php';

class ModeloUsuarios
{
    // Metodos que devuelve una respuesta en forma de una respuesta.
    static public function mdlMostrarUsuarios($tabla, $campo, $valor)
    {
        // Aqui preparamos una sentencia SQL
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $campo = :$campo");
        // Enlazamos el parameto :$campo
        $stmt->bindParam(":" . $campo, $valor, PDO::PARAM_STR);
        // Ejecutamos la preparacion de la sentencia sql
        $stmt->execute();

        // fetch Retorna una sola linea de nuestra tabla
        return $stmt->fetch();
    }
}

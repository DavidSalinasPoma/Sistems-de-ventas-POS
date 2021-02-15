<?php
class Conexion
{

    // Metodo de conexion a la base de datos
    static public function conectar()
    {
        // LAs conexiones la realizaremos a travez de pdo
        // Parametros para la conexion PDO
        // 1.- La conexion al servidor
        // 2.- El usuario
        // 3.- La contraeña
        // 4.- Permite utilizar caracteres latinos
        $link = new PDO("mysql:host=localhost;dbname=pos", "root", "");

        // Aqui caracteres latinos tildes, eñes
        $link->exec("set names utf8");

        // Retornamos una objeto
        return $link;
    }
}

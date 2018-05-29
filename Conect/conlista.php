<?php
function Conectarse()
{
    $servidor    = "localhost";
    $basededatos = "rutas";
    $usuario     = "root";
    $clave       = "";

    $cn = new mysqli($servidor, $usuario, $clave, $basededatos) or die("Error conectando a la base de datos");
    //mysql_select_db($basededatos, $cn) or die("Error seleccionando la Base de datos");
    //mysqli_query("SET NAMES 'utf8'");

    return $cn;
}

<?php
function Conectarse()
{
    $server    = "localhost";
    $bd = "rutas";
    $usu     = "root";
    $pas       = "";

    @$cn = mysql_connect($server, $usu, $pas) or die("Error conectando a la base de datos");
    mysql_select_db($bd, $cn) or die("Error seleccionando la Base de datos");
    mysql_query("SET NAMES 'utf8'");

    return $cn;
    
}
#conexion para mostrar los datos en la tabla de Usuarios
$conexion = new mysqli("localhost","root","","rutas");


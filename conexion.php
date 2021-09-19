<?php 

$dbhost="localhost:3306"; // host del MySQL (generalmente localhost) 
$dbusuario="root"; // aqui debes ingresar el nombre de usuario 
// para acceder a la base 
$dbpassword=""; // password de acceso para el usuario de la 
// linea anterior 
$db="gestion_inventario"; // Seleccionamos la base con la cual trabajar 
$conexion = new mysqli($dbhost,$dbusuario,$dbpassword,$db); 
// Check connection
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
    echo "Conexion Fallida 1";
}
//echo "Conexion Exitosa 1<br>";



?> 

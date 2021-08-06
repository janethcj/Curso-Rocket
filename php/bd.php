<?php

$host="localhost";
$usuario="root";
$contraseña="12345678";
$base="rocket";

$conexion= new mysqli($host, $usuario, $contraseña, $base);

if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_error().")".$conexion->mysqli_connect_error());
}

?>

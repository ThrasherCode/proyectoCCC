<?php
$db_direccion="localhost";
$db_nombre="databaseencuesta";
$db_usuario="root";
$db_contrasena="pitopanocha1";

$conexion=mysqli_connect($db_direccion,$db_usuario,$db_contrasena,$db_nombre);
 if (mysqli_connect_errno()) {
 	echo "falló la conexion a la base de datos";
 	exit();
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	   table,th,td{
	   	border-collapse: collapse;
		border:1px solid black;
	   }


		

	</style>
</head>
<body>
<?php
include 'consultasDocente.php';
include 'conexionDB.php';
$resultado=mysqli_query($conexion,$consulta);
 
echo "<table>";
   echo "<tr><td>ID</td><td>nombre</td><td>Apellido1</td><td>Apellido2</td><td>Estatus</td></tr>";
while ($fila=mysqli_fetch_row($resultado)) {
	echo"<tr>";
	for ($i=0; $i <count($fila) ; $i++) { 
	echo "<td>";
	echo $fila[$i];
	echo "</td>";	
    }
    echo "<br>";
    echo"</tr>";
}
 mysqli_close($conexion);
echo "</table>";
?>


</body>
</html>
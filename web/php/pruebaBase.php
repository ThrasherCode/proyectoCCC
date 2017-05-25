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
	<script type="text/javascript">
		function verID(num) {
			alert(num);
		}

	</script>
</head>
<body>
<?php
include 'consultasDocente.php';
include 'conexionDB.php';
$resultado=mysqli_query($conexion,$consulta);
 
echo "<table>";
   echo "<tr><td>nombre</td><td>Apellido1</td><td>Apellido2</td><td>Estatus</td><td>modificar</td></tr>";
while ($fila=mysqli_fetch_row($resultado)) {
	echo"<tr>";
	for ($i=1; $i <count($fila) ; $i++) { 
	echo "<td>";
	echo $fila[$i];
	echo "</td>";	
    }
    echo "<br>";
    echo "<td><img src='../img/logo.png'  onclick=\"verID($fila[0])\"></td>";
    echo"</tr>";

}
 mysqli_close($conexion);
echo "</table>";
?>


</body>
</html>
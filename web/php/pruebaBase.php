<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'consultasDocente.php';
include 'conexionDB.php';
$resultado=mysqli_query($conexion,$consulta);


while ($fila=mysqli_fetch_row($resultado)) {
	for ($i=0; $i <count($fila) ; $i++) { 
	echo $fila[$i];
    }
    echo "<br>";

}
 mysqli_close($conexion);

?>


</body>
</html>
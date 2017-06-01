<?php
include 'consultasDocente.php';
include 'conexionDB.php';
$resultado=mysqli_query($conexion,$consulta);
 

echo "<div class='container'>";
 echo "<div class='table-responsive'>";
 echo "<table class='table table-bordered table-hover table-condensed'>";
 echo "<tr><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Estatus</th><th>Modificar</th><th>Eliminar</th></tr>";
while ($fila=mysqli_fetch_row($resultado)) {
	echo"<tr>";
	for ($i=1; $i <count($fila) ; $i++) { 
	echo "<td>";
	echo $fila[$i];
	echo "</td>";	
    }
    echo "<td><img src='../img/editIcon.png'  onclick=\"verID($fila[0])\" class='imgTabla'></td>";
    echo "<td><img src='../img/TrashCan.png'  onclick=\"verID($fila[0])\" class='imgTabla'></td>";
    echo"</tr>";
}
 mysqli_close($conexion);
echo "</table>";
echo "</div>";
echo "</div>";
?>
<?php
$conexion = mysqli_connect('localhost','root','','teatro');

$fila=$_REQUEST["fila"];
$columna=$_REQUEST["columna"];
$min_grupo=$_REQUEST["min_grupo"];
$max_grupo=$_REQUEST["max_grupo"];
$grupos_rechazados=$_REQUEST["grupos_rechazados"];

$num=$_REQUEST["i"];

echo "<table>";
for ($i=0; $i < $fila; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $columna; $j++) { 
		echo '	<td>
					<div class=" alert alert-success" style="width: 4rem; height: 4rem;">		  </div>
				</td>';
	}
	echo "</tr>";
}

echo "</table>";

// INSERTAR
$sql = "INSERT INTO asientos (fila, columna)
			VALUES ('$fila','$columna')";

echo mysqli_query($conexion, $sql);



?>



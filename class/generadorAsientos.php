<?php
$fila=$_REQUEST["fila"];
$columna=$_REQUEST["columna"];
$num=$_REQUEST["i"];

echo "<table>";
echo "<h3>".$num."</h3>";
for ($i=0; $i < $fila; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $columna; $j++) { 
		echo "<td>";
		echo $i.$j;
		echo "</td>";
	}
	echo "</tr>";
}

echo "</table>";

?>



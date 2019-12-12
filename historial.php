<?PHP
$conexion = mysqli_connect('localhost','root','','teatro');

$sql = "SELECT fila, columna, min_grupo, max_grupo, grupos_rechazados FROM corrida";
$resultado = mysqli_query($conexion,$sql); 
if (!$resultado) {
    // $mensaje  = 'Consulta no válida: ' . mysqli_error() . "\n";
    $mensaje .= 'Consulta completa: ' . $consulta;
    die($mensaje);
}

// Usar el resultado
// Si se intenta imprimir $resultado no será posible acceder a la información del recurso
// Se debe usar una de las funciones de resultados de mysql
// Consulte también mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.

echo '<table class="table">';
echo '<tr>
					<th>
					Cantidad de filas
					</th>
					<th>
					Cantidad de sillas por filas
					</th>
					<th>
					Número de grupos que ingresaron
					</th>
					<th>
					Tamaños de los grupos [Rango]
					</th>
					<th>
					Cantidad de sillas desperdiciadas
					</th>
					<th>
					Cantidad de grupos rechazados
					</th>
				</tr>';
				


while ($fila = mysqli_fetch_assoc($resultado)) {
	echo '
	<tr>
					<td>
					'.$fila['fila'].'
					</td>
					<td>
					'.$fila['columna'].'
					</td>
					<td>
					'.$fila['min_grupo'].'
					</td>
					<td>
					'.$fila['max_grupo'].'
					</td>
					<td>
					'.$fila['grupos_rechazados'].'
					</td>
					<td>
					'.$fila['fila'].'
					</td>
					
				</tr>';

    echo $fila['fila'];
    echo $fila['columna'];
    echo $fila['min_grupo'];
    echo $fila['max_grupo'];
    echo $fila['grupos_rechazados'];
}


mysqli_query($conexion, $sql);


?>
<!DOCTYPE html>
<html>

<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>



	<div class="container">
		<br>
		<h2>Historial de simulaciones</h2>
		<br>
		<button type="button" class="btn btn-outline-secondary"><a href="Index.html">Regresar</a></button>
		<br><br>
		<div class="">
			<table class="table">
				<tr>
					<th>
					Cantidad de filas
					</th>
					<th>
					Cantidad de sillas por filas
					</th>
					<th>
					Número de grupos que ingresaron
					</th>
					<th>
					Tamaños de los grupos [Rango]
					</th>
					<th>
					Cantidad de sillas desperdiciadas
					</th>
					<th>
					Cantidad de grupos rechazados
					</th>
				</tr>
				<tr>
					<td>
						101
					</td>
					<td>
						10
					</td>
					<td>
						5
					</td>
					<td>
						1-10
					</td>
					<td>
						0
					</td>
					<td>
						2
					</td>
					
				</tr>
				<tr>
					<td>
						50
					</td>
					<td>
						8
					</td>
					<td>
						5
					</td>
					<td>
						1-5
					</td>
					<td>
						2
					</td>
					<td>
						0
					</td>
					
				</tr>
			</table>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>

</html>
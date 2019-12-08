<?php

$min = $_POST['min'];
$max = $_POST['max'];
$filas = $_POST['canfila'];
$sillas = $_POST['sillaXFila'];


$matriz = $filas * $sillas;
echo "El tamaño del teatro es: " . $matriz . " sillas en total. <br>";
$gruposSentados = 0;

while ($matriz >= $gruposSentados) {
    $grupos = rand($min,$max);
    if ($grupos <= $matriz) {
        echo "Grupo de: " . $grupos . "<br>";
        $gruposSentados += $grupos; 
    } else{
        echo "Esperando grupo correcto";
    }

}




// for ($i=0; $i < ; $i++) { 
    
// }

?>
<?php

$num_ale = array();
for ($i = 0; $i < 15; $i++) {
    $num_ale[] = rand(1, 100);
}
echo "Números aleatorios generados: ";
print_r($num_ale);


$rot_array = array();
$aux = $num_ale[0]; 
for ($i = 1; $i < 15; $i++) {
    $rot_array[$i - 1] = $num_ale[$i];
}

$rot_array[14] = $aux; 
?>
<br>
<?
echo "Contenido del array rotado: " . implode(", ", $rot_array);

?>

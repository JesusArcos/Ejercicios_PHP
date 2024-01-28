<?php
$carnet = strtolower(readline("Carnet de conducir (si/no): "));
$edad = readline("Edad: ");

if ($carnet == 'si' && $edad >= 18) {
    echo "Puedes conducir.\n";
} else {
    echo "No puedes conducir.\n";
}
?>

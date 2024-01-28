<?php

$lado1 = floatval(readline("Introduce la longitud del lado 1: "));
$lado2 = floatval(readline("Introduce la longitud del lado 2: "));
$lado3 = floatval(readline("Introduce la longitud del lado 3: "));

// Verificar el tipo de triángulo
if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "Es un triángulo equilátero.\n";
} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "Es un triángulo isósceles.\n";
} else {
    echo "Es un triángulo escaleno.\n";
}
?>
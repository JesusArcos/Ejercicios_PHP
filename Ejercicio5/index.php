<?php
$numero1 = readline("Introduce un numero: ");
$numero2 = readline("Introduce un numero: ");
$numero3 = readline("Introduce un numero: ");

if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo "$numero1 es el mayor.\n";
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "$numero2 es el mayor.\n";
} elseif ($numero3 > $numero1 && $numero3 > $numero2) {
    echo "$numero3 es el mayor.\n";
}
?>

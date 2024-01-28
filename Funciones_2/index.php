<?

include 'funciones2.php';

$miArray = generaArrayInt(10);

echo "El array es: " . implode(", ", $miArray) . "\n";
echo "Mín: " . minimoArrayInt($miArray) . "\n";
echo "Máx: " . maximoArrayInt($miArray) . "\n";

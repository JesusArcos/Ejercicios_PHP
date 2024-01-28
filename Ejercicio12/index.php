<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Dólares</title>
</head>
<body>

<?php

$cantidadEuros = 50;
$tasaCambio = 1.10;

$cantidadDolares = $cantidadEuros * $tasaCambio;
?>

<h2>Conversor de Euros a Dólares</h2>
<p>Cantidad en euros: <?php echo $cantidadEuros; ?></p>
<p>Tasa de cambio: 1 euro = <?php echo $tasaCambio; ?> dólares</p>
<p>Cantidad en dólares: <?php echo $cantidadDolares; ?></p>

</body>
</html>

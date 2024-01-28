<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de Clases</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px;
        }

        th, td {
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>
<body>

<?php

$horario = [
    "Lunes" => ["Redes", "ASO","Empresas"],
    "Martes" => ["ASO", "Seguridad", "Redes"],
    "Miércoles" => ["H.L.C", "H.L.C/Base de datos", "IAW"],
    "Jueves" => ["ASO", "Empresas", "IAW"],
    "Viernes" => ["Base de datos", "Seguridad", "Redes"]
];

echo "<table>";
echo "<tr><th>Día</th><th>Clase 1</th><th>Clase 2</th><th>Clase 3</th></tr>";

foreach ($horario as $dia => $clases) {
    echo "<tr>";
    echo "<td>$dia</td>";
    foreach ($clases as $clase) {
        echo "<td>$clase</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

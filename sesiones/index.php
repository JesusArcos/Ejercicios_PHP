<?php
    session_start();
    
if(isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
} else {
    $_SESSION['visitas'] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <h1> Contador de Visitas </h1>
</head>

<body>
    <?
    echo "<h3>Has visitado mi página: $_SESSION[visitas] veces</h3>";
    ?>
</body>
</html>
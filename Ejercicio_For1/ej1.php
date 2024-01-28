<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
<?
    
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo "El resultado es " . $num1 * $num2;
    } else { echo "No has pasado los parametros";
            }
    
?>
</body>
</html>
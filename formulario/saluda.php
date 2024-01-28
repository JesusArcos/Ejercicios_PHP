<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?
    if (isset($_GET['nombre'])) {
    echo"Hola, has escrito " , $GET("nombre");
    } else {
        echo "no has escrito nada";
    }
    </form>
</body>
</html>
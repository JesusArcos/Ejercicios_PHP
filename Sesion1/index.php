<?
session_start(); 

//aquí se comprueba si el nombre ha insertado un nombre1 y password
//utiliza la función hash('sha512',$password) para cifrar la contraseña
//si el nombre1 es test y la password cifrada coincide con el hash('sha512',"test")
//se trata de un nombre válido y debemos proceder a guardar el nombre1 en la sesión 
//y posteriormente usar la función header("Location: contenido.php"); para acceder
//a la parte privada de la aplicación
//Si el username y contraseña no coincide con test/test usaremos la función header
//header("Location: index.php"); para ir a la parte pública de la aplicación
if(isset($_POST['nombre'])) {

    $nombre = strtolower($_POST['nombre']);



    if ($nombre) {
        $_SESSION['nombre1'] = $nombre;
        header("Location: contenido.php");
    } else {
        header ("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

</head>
<body>
    <form action="<? echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">

    <input type="text" name="nombre" placeholder="nombre">
    <input type="submit" value="Aceptar">
    </form>

</body>
</html>

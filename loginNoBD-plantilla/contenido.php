<?
//aquí tendremos que iniciar sesión y comprobar que hay un username almacenado en la sesión
//si lo hay podemos mostrar el contenido privado
//en caso contracio usaremos la función header("Location: login.php"); para redirigir al usuario
//al login

session_start();

if (isset($_SESSION ['username'])) {
    echo "<h1>Bienvenido, como estás " . $_SESSION['username'] . "</h1>";
    echo "Pagina de Contenido"

?>
<a href="cerrarsesion.php">Cerrar sesion </a>
<?php
}else{
    header ("Location: login.php");
}
?>
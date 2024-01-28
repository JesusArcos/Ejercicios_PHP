<?

include 'funciones.php';

$num = 13;

if(esCapicua($num)) {
    echo "$num es capicua";
} else {
    echo "$num no es capicua";
}
?>

<br>

<?

if(esPrimo($num)) {
    echo "$num es primo";
} else {
    echo "$num no es primo";
}
?>
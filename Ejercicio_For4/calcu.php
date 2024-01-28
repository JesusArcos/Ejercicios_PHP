<?php
    $num1 = $_GET['Num1'];
    $num2 = $_GET['Num2'];
    $signo = $_GET['signo'];

    if($signo == "+"){
    $solucion = $num1 + $num2;
    }else if($signo == "-"){
    $solucion = $num1 - $num2;
    }else if($signo == "*"){
    $solucion = $num1 * $num2;
    }else if($signo == "/"){
    $solucion = $num1 / $num2;
    }
    echo "Solución: ".$solucion;
?>
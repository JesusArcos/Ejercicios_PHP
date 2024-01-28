<?php

function generaArrayInt($n) {
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[] = rand(0, 100);
    }
    return $array;
}

function  minimoArrayInt($array) {
    return min($array);
}

function  maximoArrayInt($array) {
    return max($array);

}

?>
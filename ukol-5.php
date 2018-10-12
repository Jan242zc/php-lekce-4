<?php
function minimum($a, $b){
    if (!is_numeric($a) || !is_numeric($b)){
        return false;
    } elseif ($a < $b){
        return $a;
    } else {
        return $b;
    }
}

$mensi = minimum(56, 'xy');

if ($mensi === false) {
    echo 'chyba!';
} else {
    echo $mensi;
}
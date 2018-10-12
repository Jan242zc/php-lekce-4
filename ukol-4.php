<?php
function maximum($cislo1, $cislo2) {
    if (!is_numeric($cislo1) || !is_numeric($cislo2)){
        echo "Chyba! <br>";
    } elseif ($cislo1 == $cislo2) {
        echo "Čísla se rovnají. <br>";
    } elseif ($cislo1 > $cislo2){
        echo "Větší je $cislo1 <br>";
    } else {
        echo "Větší je $cislo2 <br>";
    }
}

maximum(304, 560);
maximum(7.2, 7.1);
maximum(23, 23);
maximum(253, 'x');
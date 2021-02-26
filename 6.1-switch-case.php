<?php

// switch-case
    $media = 7;

    switch ( $media ) {
        case $media >= 0 && $media < 10:
            echo "Excluiu"; break;
        case $media >= 10 && $media < 14:
            echo "Admitido"; break;
        case $media >= 14 && $media <=20:
            echo "Dispensado"; break;
        default:
            echo "Inválido";
    }

?>    
    
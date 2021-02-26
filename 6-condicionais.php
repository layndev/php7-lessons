<?php

// condicionais

    // if-else: comparaça: ==, ===, menor que: <, maior que: >, diferente: !=

    $a = 10;
    $b = 20;
    $c = 30;
    $palavra = "above";
// ========================================
    // uma instrução
    if ( $a == 10  ) {
        echo "O valor $a = 10";
    }

    echo "<hr />";

    // duas instruções
    if ($a < $b) {
        echo "O valor $a é menor que o valor $b.";
    } else {
        echo "O valor $a é maior que o valor $b.";
    }
        echo "<hr />";
    // mais de duas instruções

    if ( $a < $b ) {
        echo "O valor $a é menor que $b";
        echo "<br />";
    } if ( $b < $c ) {
        echo "O valor $b é menor que $c ";
        echo "<br />";
    } else {
        echo "O valor $b é maior que $c";
    }
    
    echo "<hr>";
    // if-else ternário

    echo ( $palavra === "above" ) ? " Palavra exata " : " Palavra não corresponde ";
    
    echo "<hr />";
    // diferença de == e ===

    $valor = "12";
    $valor1 = 12;

    echo ( $valor == $valor1 ) ? "Valores correspondem!" : "Valores não correspondem!";
    echo "<br />";
    echo ( $valor === $valor1 ) ? "Valores correspondem!" : "Valores não correspondem!";

    echo "<hr />";

    // continuando - elseif

    if ( $media >= 0 && $media < 10 ) {
        echo "Excluiu";
    } elseif ( $media > 10 && $media <14 ) {
        echo "Admitiu";
    } elseif ( $media >= 14 && $media <= 20) {
        echo "Dispensou";
    } else {
        echo "Média inválida!";
    }
?>
    

?>
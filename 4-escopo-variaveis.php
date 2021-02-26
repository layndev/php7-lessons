<?php

// variáveis locais
$a = 4;
$b = 100;
$c = 10;
$nome = "Ladino";

function nomear() {
    // variável global
    global $nome;
    echo $nome;
}
nomear();
echo "<hr />";

function somar() {
    // variáveis globais
    global $a;
    global $b;
    global $c;

    echo "A soma de $a, $b e $c é = " . ($a + $b + $c);
        
}

nomear();

echo "<hr />";
// outra forma de definir variáveis globais
function soma() {

    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

echo "<hr />";

// de local para global
function nomerCachoro() {
    global $nome_cao;
    $nome_cao = "Viralata";
}

nomerCachoro();
echo $nome_cao;

?>
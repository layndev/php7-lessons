<?php
// loops: ciclos de repetição
// while - enquanto; verifica e depois executa

$contador = 4;

while ( $contador <= 10 ) {
    echo 'Contador é ' . $contador . '<br />';
    $contador++;
}

echo '<hr />';
// do-while; executa e depois pensa
$cont = 9;
do {
    echo 'Contador do \'do while\' é ' . $cont . '<br />';
    $cont++;
} while ($cont <= 10);

echo '<hr />';

// for($i: declarando o contador; $i<10: condicionando; 
// $i++: incrementando)

for ( $contador = 0; $contador < 10; $contador++ ) {
    // criando tabuada de 13
    echo '13 x ' . $contador . ' = '. 13*$contador . '<br />';
}
?>
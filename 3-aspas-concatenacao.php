<?php
// aspas
    // aspas duplas: interpretativas

    $nome = "Ladino";
    $idade = 24;

    echo "O meu é $nome, minha idade é $idade";

    // aspas simples: literais

    echo "<br />";

    echo 'O meu é $nome, minha idade é $idade';

    echo "<hr />";

    echo 'Dizem um tal de \'Ladino\' ';


    // concatenação em PHP " . "
    $apelido = "Anselmo";
    echo "<hr />";

    echo "Eu sou " . $nome . ", e meu pai é " . $apelido;
    echo "<br/ >";
    echo "Eu sou {$nome}, e meu pai é $apelido" . 
            ", e tenho um cão chamado " . $cao = "Rex" . ".";

?>
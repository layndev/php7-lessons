<?php

// constantes: define("NOME_VARIÁVEL", VALOR)

define("NOME", "Ladino Anselmo");
define("IDADE", 24);
define("EMAIL", "ladino.anselmo@gmail.com");
echo "<br />";
echo "O meu nome é " . NOME . ", minha idade é " . IDADE . " e meu email é" . EMAIL; 

echo "<hr />";

// constantes em arrays

define("MOTOS", ["Ducati", "Kawasaki", "Yahamaha", "Honda", "Suzuki"]);

echo "A moto selecionada é " . MOTOS[1];
echo "<br />";
echo "<pre>";
print_r(MOTOS);
echo "</pre>";
echo "<br />";
echo MOTOS[4];

echo "<br />";

// tentativa de redifinição de constante
// define("NOME", "James");
// echo "O nome bonito é " . NOME;






?>
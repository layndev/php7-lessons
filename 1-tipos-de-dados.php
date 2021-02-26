<?php

// Tipos de dados: php fracamente tipada

    // string
    
    $nome = " Ladino ";

    // int
    
    $idade = 24;

    // float
    $altura = 1.68;

    // boolean

    $casado = true;

    echo " O meu nome é " . $nome . " tenho " . $idade . " anos, minha altura é " . $altura . ", casado = " . $casado;

    echo "<br />";

    // echo " O meu nome é " . $nome . " tenho " . $idade . " anos, minha altura é " . $altura .".";

    // echo "<hr />";

    // echo " O meu nome é " . $nome . " tenho " . $idade . " anos, minha altura é " . $altura .".";

    echo "<hr />";

    echo " ========== Dados compostos ========== ";

    // array: dados compostos ordenados

        $carros = array ( 2, " Mercedes ", "Porsche", "BMW", 2.46 );
        echo "<br />"; 
        echo "<pre>";
        print_r($carros);
        echo "</pre>";

        echo "<br />";

        echo "<pre>";
        var_dump($carros);
        echo "</pre>";

    // object

    class Cliente {
        public $nome;
            public function atribuirNome($nome){
            $this->nome = $nome;
        }

    }

    $cliente = new Cliente();

    $cliente->atribuirNome("Ladino");

    echo "<br />";
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    echo "<hr />";

    // dados especiais

    echo "============= Dados Especiais ============";

    $nome = null;

    echo $nome;
    echo "<br />";
    var_dump($nome);
?>
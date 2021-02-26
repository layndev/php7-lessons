<?php

// array
    
    $frutas_da_epoca = ['Pêssego', 'Maçã'];

    $frutas = array('Banana', 'Manga', 'Papaia', 'Goiaba');

    echo '<pre>';
    print_r($frutas_da_epoca);
    echo '</pre>';
    echo '<hr />';
    echo '<pre>';
    var_dump($frutas);
    echo '</pre>';
    echo '<hr />';
    // definindo índices na array

    // índices numéricos

    $animais = ['Leão', 200=> 'Camelo', 'Pato'];
    echo '<pre>';
    print_r($animais);
    echo '</pre>';
    echo '<br />';
    // índices associativos

    $animais = ['selva' => 'Leão', 'Deserto' => 'Camelo', 'Doméstico' => 'Pato'];

    echo '<pre>';
    print_r($animais);
    echo '</pre>';
    echo '<hr />';

    // inserindo elementons na array

    $alunos = [1 => 'Celso', 'Carlos', 'Lopes', 'Saquina', 'Chefe'];
    echo '<pre>';
    print_r($alunos);
    echo '</pre>';
    echo '<hr />';

    $alunos[0] = 'Mingos';
    echo '<pre>';
    print_r($alunos);
    echo '</pre>';
    echo '<hr />';

    // qtd elementos na array

    echo count($alunos);
    echo '<hr />';

    // percorrendo array com foreach: foreach( $array as $value)

        // sem associar
    foreach( $alunos as $valor ) {
        echo $valor . '<br />'; 
    }

    echo '<br />';

    $lazer = ['Manhã' => 'Brincar', 2 => 'Estudar', 'tarde' => 'Play Station', 'Conduzir', 'Pular'];
    foreach( $lazer as $elemento ) {
        echo 'Gosta de ' . $elemento . '<br />';
    }

    echo '<hr />';

        // associando
        foreach( $lazer as $indice => $valor ) {
            echo 'Ele gosta de: ' . $indice . ' ==> ' . $valor. '<br />';
        }
    echo '<hr />';

    // arrays multi dimensionais

        $estudantes = [
            'Masculinos' => ['Acácio', 'Bonito' => 'carlos'],
            'Femininos' => ['Saquina']
        ];

        echo '<pre>';
        print_r($estudantes);
        echo '</pre>';
        echo '<br />';
        echo count($estudantes);
        echo '<br />';
        
        echo $estudantes['Masculinos']['Bonito']
        // foreach em arrays multi dimensionais







?>
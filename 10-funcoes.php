<?php
// funções: com retorno (return) e sem retorno (void)

    // função básica
    function falar() {
        echo 'Falou';
    }
    // falar();

    echo '<hr/ >';

    // função com parâmetro
    function nomearCarro($nomeCarro, $nomeAdmirador) {
        echo 'O carro favorito de ' . $nomeAdmirador .  ' é ' . $nomeCarro;
    }

    nomearCarro('Bugati', 'James');
    echo '<br />';
    nomearCarro('Vitz', 'Bruno');
    echo '<br />';
    nomearCarro('Ferrari', 'Ladino');
    echo '<br />';
    nomearCarro('Ractis', 'Saúde');
    echo '<br />';
    nomearCarro('Toyota', 'Carlos');
    echo '<br />';
    nomearCarro('Landrover', 'Crimildo');
    echo '<br />';
    nomearCarro('Larborghini', 'Júlio');

    echo '<hr />';
    

    // funções sem retorno verificando condição
    function sexo( $nome, $empresa ) {
        
        $sexo = 'masc';

        if ($sexo === 'masc') {
            echo $nome . ' trabalhará na ' . $empresa;
        } elseif( $sexo === 'fem') {
            echo $nome . ' não trabalhará na ' . $empresa;
        } else {
            echo 'Informou um sexo errado';
        }
    }

    sexo('Jair', 'Anadarko');
    echo '<hr />';

    // somar sem retotno: void
    echo 'Sem retorno. do tipo: Void';
    echo '<br />';
    function somar1($a, $b) {
        $resultado = $a + $b;
        echo $resultado;
    }
    $valor = somar1(30, 22);
    echo '<br />';
    echo $soma = $valor + 10;
    echo '<hr />';

    // somar com retotno: return
    echo 'Com retorno. To tipo: return';
    echo '<br />';
    function somar2($a, $b) {
        $resultado = $a + $b;
        echo $resultado;
        return $resultado;
    }
    $valor = somar2(30, 22);
    echo '<br />';
    echo $soma = $valor + 10;



?>
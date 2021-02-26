<?php
// funções de arrays
// $aluno = 'Santinho';
$alunos = ['Ivo', 'Gerson', 'Leo', 'Ernesto', 
            'Jair', 'Bruno2', 'Elves', 'Cristiano', 'Santinho'
        ];
// is_array($array): verifica se é ou não array
    if (is_array($alunos)) {
        echo 'É uma array.';
    } else {
        echo 'Não é uma array.';
    }
    echo '<br />';

// in_array($valor, $array): verifica se existe no array.

    if(in_array('elves', $alunos)) {
        echo 'Existe na array.';
    } else {
        echo 'Não existe na array';
    }
    echo '<br />';
    
// array_keys($array): retornar índices da array

$computadores = ['HP' => 'EliteBook', 'Lenovo' => 'Thinkpad Yoga'];
echo '<pre>';
print_r(array_keys($computadores));
echo '</pre>';
echo '<br />';

// array_values($array); retorna índices númericos.

$valores = array_values($computadores);
echo '<pre>';
print_r($valores);
echo '</pre>';
echo '<br />';

// array_merge($array, $array2): agrega conteúdo de arrays
$bonitos = ['Carlitos', 'Machava', 'Mais Lindo' => 'Ladino', 
            'Pedro'];
echo '<pre>';
print_r(array_merge($alunos, $computadores, $bonitos));
echo '</pre>';
echo '<br />';

// array_pop($array): exclui última posição de array
echo '<pre>';
print_r(array_pop($bonitos));
echo '</pre>';
echo 'Depois do array_pop';
echo '<pre>';
print_r($bonitos);
echo '</pre>';
echo '<hr />';
// array_shift($array); remove o primeiro elemento da array

echo '<pre>';
print_r(array_shift($bonitos));
echo '</pre>';
echo 'Depois do array_shift';
echo '<pre>';
print_r($bonitos);
echo '</pre>';
echo '<hr />';

// array_unshift($array, $valor1, $valor2, ...): adiciona elementos nas primeiras posições
echo '<pre>';
print_r(array_unshift($bonitos, 'Bruno Lopes', 'Bruno Almeida', 'Saúde', 'Jair'));
echo '</pre>';
echo 'Depois do array_unshift';
echo '<pre>';
print_r($bonitos);
echo '</pre>';
echo '<hr />';

// array_push($array, $valor1, $valor2, ...)
echo '<pre>';
print_r(array_push($bonitos, 'Lopes', 'Almeida', 'Saíde', 'Jaimar'));
echo '</pre>';
echo 'Depois do array_push';
echo '<pre>';
print_r($bonitos);
echo '</pre>';
echo '<hr />';

// array_combine($array1, $array2, ...): mescla arrays
$chaves = ['Inteligente', 'Feio', 'Lindo'];
$valor = ['Carlos', 'Calton', 'Helton'];
echo '<pre>';
print_r(array_combine($chaves, $valor));
echo '</pre>';
echo '<hr />';

// array_sum($val1, $val2, $val3, ...): mescla arrays
$array1 = [20, 10, 29, 30];
echo '<pre>';
print_r(array_sum($array1));
echo '</pre>';
echo '<hr />';

/////explode ('coisa_a_remover', $array): transforma string em array
$data = "01/09/2019";

$novaData = explode("/", $data);
echo '<pre>';
print_r($novaData);
echo '</pre>';
echo '<hr />';
// //////implode('coisa_a_adicionar_na_string', $array): trasnforma array em string
$nomes = ["Ernesto", "Milena", "Carmem", "Cailane"];
$string = implode(", ", $nomes);
echo $string;
?>
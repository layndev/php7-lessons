<?php
// funções de manipulação de arquivos:
    // fopen($arquivo, 'modo: modo de leitura/leitura e escrita')
        // 'a': write only; 'r': read only...
    // fwrite($arquivo, $conteudo)
    // fgets($arquivo_aberto, $filesize): retorno do conteúdo do $arquivo_aberto
    // feof($arquivo_aberto, $size): até fim do ficheiro
    // fclose($arquivo_aberto);

// trabalhar com ficheiros

// recebendo o ficheiro
$arquivo = 'ficheiro.txt';

$conteudo = "TISE3\r\n";

$tamanho = filesize($arquivo);

// verificando a função filesize()
// echo '<pre>';
// var_dump($tamanho);
// echo '</pre>';

// fazendo abertura do arquivo

// $arquivo_aberto = fopen( $arquivo, 'a' );

// fwrite($arquivo_aberto, $conteudo);

$arquivo_aberto = fopen( $arquivo, 'r' );
// escrevendo no arquivo_aberto
// fwrite($arquivo_aberto, $conteudo);

// percorrendo o ciclo de repetição
while( !feof($arquivo_aberto) ) {
    $linha = fgets($arquivo_aberto, $tamanho);
    echo $linha . '<br />';
}
fclose($arquivo_aberto);
?>
<?php
// operadores de incremento
    $valor1 = 10;
    $valor2 = 20;
   
    // pré-incremento
    echo '************** Incremento ************';
     echo '<br />'; 
     echo 'variável antes do pré-incremento <br />' . $valor1;
     echo '<br />';
     echo 'variável depois do pré-incremento';
     echo '<br />';
     echo ++$valor1;
     echo '<br />';
     echo 'Valor1';
     echo '<br />'; 
     echo $valor1;

     echo '<br />';

    // pós-incremento
    echo 'variável antes do pós-incremento <br />' . $valor2;
    echo '<br />';
    echo 'variável depois do pós-incremento';
    echo '<br />';
    echo $valor2++;
    echo '<br />';
    echo 'valor2';
    echo '<br />'; 
    echo $valor2;

    echo '<hr />';
    // decremento
    echo '************** Decremento ************';
    echo '<br />'; 

        $valor3 = 50;
        $valor4 = 60;

        // pré-decremento
     echo 'variável antes do pré-incremento <br />' . $valor3;
     echo '<br />';
     echo 'variável depois do pré-incremento';
     echo '<br />';
     echo --$valor3;
     echo '<br />';
     echo 'Valor1';
     echo '<br />'; 
     echo $valor3;
        
     echo '<br />';
    // pós-incremento
    echo 'variável antes do pós-incremento <br />' . $valor4;
    echo '<br />';
    echo 'variável depois do pós-incremento';
    echo '<br />';
    echo $valor4--;
    echo '<br />';
    echo 'valor2';
    echo '<br />'; 
    echo $valor4;



?>
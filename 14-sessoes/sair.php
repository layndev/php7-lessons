<?php

// inicializando a sessão
session_start();

// visualizando os dados da sessão
// echo 'O teu user é ' . $_SESSION['user'] . ' e a tua senha é ' 
//             . $_SESSION['password'] . '<br />' . session_id();

session_unset();
session_destroy();
?>

<br />
<a href="dados.php"> Dados da sessão </a>
<br />
<a href="index.php"> Inicializar sessão </a>
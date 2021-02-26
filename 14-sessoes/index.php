<?php
// variáveis superglobais
// $_POST[], $_GET[], $_REQUEST[], $_SERVER[], $_SESSION[];
session_start();

// definindo variáveis
$_SESSION['user'] = 'ladino';
$_SESSION['password'] = '123';

// exibindo os dados da página
echo 'AUTENTICADO' . '<hr />';
echo 'O teu user é ' . $_SESSION['user'] . ' e a tua senha é ' 
            . $_SESSION['password'] . '<br />' . session_id();


?>

<br />
<a href="dados.php"> Dados da sessão </a>
<?php
// inicializando a sessão
session_start();

// visualizando os dados da sessão
echo $_SESSION['user'];
echo $_SESSION['password'];
?>


<br />
<a href="sair.php">Sair</a>
<br />
<a href="index.php"> Inicializar sessão </a>
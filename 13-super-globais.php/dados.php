<?php
método superglobal: '$_POST'
// $nome = $_POST['nome'];
// $idade = $_POST['idade'];
// $email = $_POST['email'];

// método superglobal; '$_GET'
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$email = $_GET['email'];
?>

<!-- Tabela de resultados -->
<h4> Dados Inseridos </h4>
<table border="1">
    <tr>
        <th> Nome </th>
        <th> Idade </th>
        <th> Email </th>
    </tr>
    <tr>
        <td> <?php echo $nome ?> </td>
        <td> <?php echo $idade ?> </td>
        <td> <?php echo $email ?> </td>
    </tr>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
    
    <table>
        <tr>
            <td>Nome: </td>
            <td> <input type="text" name="nome"> </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td> <input type="text" name="email"> </td>
        </tr>
        <tr>
            <td>Idade: </td>
            <td> <input type="text" name="idade"> </td>
        </tr>
        <tr>
            <td>URL: </td>
            <td> <input type="text" name="url"> </td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>   
            <td> <button type="submit" name="enviar"> Enviar </button> </td>
        </tr>

    </table>
    
    </form>
<?php

if( isset($_POST['enviar']) ) {
    $erros = [];

    if( !$idade = filter_input( INPUT_POST, 'idade', FILTER_VALIDATE_INT ) ) {
        $erros[] = "Idade precisa ser um inteiro <br />";
    }
        // elseif ( $idade = filter_input( INPUT_POST, 'idade', FILTER_VALIDATE_INT ) ) {
        //     $idade = $_POST['idade'];
        // }
    if( !$email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL ) ) {
        $erros[] = "Email inválido <br />";
    }
        elseif ( $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ) {
            $email = $_POST['email'];
    }
    if( !$url = filter_input( INPUT_POST, 'url', FILTER_VALIDATE_URL ) ) {
        $erros[] = "URL inválida <br />";
    }
        elseif ( $url = filter_input( INPUT_POST, 'url', FILTER_VALIDATE_URL ) ) {
            $url = $_POST['url'];
    }
}

if ( !empty($erros) ) {
    foreach ( $erros as $erro ) {
        echo "<span style='color: red; '><li> $erro </li></span>";
    }
}


?>


<h4>Dados Recebidos</h4>
    <table border="1" width="500">
        <tr>
            <th> Nome </th>
            <th> Email </th>
            <th> Idade </th>
            <th> URL </th>
        </tr> 
        <tr align="center">
            <td> <?php echo $nome = $_POST['nome']; ?> </td>
            <td> <?php echo $email; ?> </td>
            <td> <?php echo $idade; ?> </td>
            <td> <?php echo $url; ?> </td>
        </tr>
    </table>

</body>
</html>
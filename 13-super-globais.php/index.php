<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 
    <table>
        <tr>
            <td>
                Nome: 
            </td>
            <td>
                <input type="text" name="nome" placeholder='Nome'>
            </td>
        </tr>
        <tr>
            <td>
                Idade: 
            </td>
            <td>
                <input type="text" name="idade" placeholder='Idade'>
            </td>
        </tr>
        <tr>
            <td>
                Email: 
            </td>
            <td>
                <input type="text" name="email" placeholder='Email'>
            </td>
        </tr>
        <tr>
            <td colspan='1'>
                
            </td>
            <td>
                <button type="submit" name="enviar"> Enviar </button>
            </td>
        </tr>
    </table>
    
    </form>
<br />

<?php
// método superglobal: '$_POST'

$nome = $_POST['nome'];
// $idade = $_POST['idade'];
// $email = $_POST['email'];

// validando as entradas

if ( isset( $_POST['enviar'] ) ) {

    $erros = [];

    // validando
    
    // if (!$idade = filter_input( INPUT_POST, 'idade',  FILTER_VALIDATE_INT)) {
    //     $erros[] = "Idade precisa ser um inteiro";
    // }

    //     // valores serão introduzidos feita a validação
    // } elseif ( $idade = filter_input( INPUT_POST, 'idade',  FILTER_VALIDATE_INT) ) {
    //     // $idade = $_POST['idade'];
        
    // }
    
    // if( !$email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL ) ) {
    //     $erros[] = "Email inválido";


    //     // valores serão introduzidos feita a validação
    // } elseif( $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL ) ) {
    //     // $email = $_POST['email'];
    // }


    // FAZENDO SANITAÇÃO E VALIDAÇAO
    
        $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );  
        
        $idade = filter_input( INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT );
        if( !filter_var( $idade, FILTER_VALIDATE_INT ) ) {
            $erros[] = 'Idade precisa ser um inteiro';
        }
    

        $email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $erros[] = 'Email inválido!';
            $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
        }
    
}


    if ( !empty($erros) ) {
        foreach( $erros as $erro ) {
            echo "<li color='red'>" . $erro . "</li>" . '<br />';
        }
    }

// ?>


    <h4> Dados Inseridos </h4>
    <table border="1" height="50" width="400">
    <tr>
        <th> Nome </th>
        <th> Idade </th>
        <th> Email </th>
    </tr>
    <tr>
        <td> <?php echo $nome; ?> </td>
        <td> <?php echo $idade; ?> </td>
        <td> <?php echo $email; ?> </td>
    </tr>
    
    <!-- <a href="dados.php?nome=Ladino+Anselmo&idade=24&email=ladino.anselmo%40gmail.com">Enviar Dados</a> -->
</body>
</html>
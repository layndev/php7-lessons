

<form action="1-imposto.php" method="post">

Salário: 
<br />
<input type="number" name="salario">
<br />
<button type="submit"> Calcular Imposto </button>
</form>

<?php
// imposoto

// função
function impostoRenda( $salario ) {
    // global $imposto;
    if ( $salario > 300 && $salario < 2000  ) {
        $imposto = $salario * 0;
    } elseif ( $salario >= 2000 && $salario < 5000 ) {
        $imposto = $salario * 0.075;
    } elseif ( $salario >= 5000 && $salario < 20000 ) {
        $imposto = $salario * 0.225;
    } elseif ( $salario >= 20000 && $salario < 50000 ) {
        $imposto = $salario * 0.275;
    } elseif( $salario >= 50000 ) {
        $imposto = $salario * 0.35;
    } else {
        $imposto = "<b style='color: red; '> Salário Inválido! </b>";
    }

    return $imposto;
    
}

$salario = $_POST['salario'];

?>

<table border="1">
    <tr>
        <th>Salário</th>
        <th>Imposto</th>
    </tr>
    <tr>
        <td> <?php echo $salario; ?> </td>
        <td> <?php echo impostoRenda($salario); ?> </td>
    </tr>
</table>



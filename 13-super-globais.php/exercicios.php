<h1 align="center" style="margin-top: 50px; color: red;"> Formulário </h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table align="center">
    <tr>
        <td>
        </td>
        <td> <div style="position: relative;">
                <input style="height: 40px; width: 400px; 
                    border: 1px solid #333; padding: 0px 20px;
                    font-size: 17pt; background-color: #eeeeee; color: #000;
                    " type="text" name="salario" placeholder="Introduza o salário"> 
                    <div style="position: absolute; left: 350px; top: 8px; font-size: 17pt; 
                                color: #757575">,MT</div>
            </div> 
        </td>
    </tr>
    <tr align="center">
    <td>
    </td>
    <td>
        <button style="margin-top: 40px; height: 60px; width: 100px; font-size: 13pt;
                       border-radius: 30px; border: none; box-shadow: 1px 1px 2px #000;
                       background: #1899ef; color: #fff; cursor: pointer;" 
                type="submit" name="send"> Gerar Imposto </button>
        </td>
    </tr>
</table>

<?php


// função
function calcImposto($sal) {
    
    // global $imposto;
    
    if ( $sal > 0 && $sal <= 2000 ) {
        $imposto = 0;
    } elseif ( $sal > 2000 && $sal <= 5000) {
        $imposto = $sal * 0.075;
    } elseif ( $sal > 5000 && $sal <= 20000 ) {
        $imposto = $sal * 0.225;
    } elseif ( $sal > 20000 && $sal <= 50000 ) {
        $imposto = $sal * 0.275;
    } elseif ( $sal > 50000 ) {
        $imposto = $sal * 0.35;
    }

    return $imposto;
}

// $sal = $_POST['salario'];

// echo calcImposto($_POST['salario']);

?>

<h1 align="center" style="margin-top: 40px; color: red;"> Resultados </h1>
<table border="1" width="400" height="100" align="center">
    <tr align="center">
        <th>SALÁRIO</th>
        <th>IMPOSTO</th>
    </tr>
    <tr align="center">
        <td> <?php echo $_POST['salario']; ?> </td>
        <td> <?php echo calcImposto($_POST['salario']); ?> </td>
    </tr>
</table>
</form>
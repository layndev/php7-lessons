<?php
class ConexaoController {
    public $pdo;

    // constructor
    public function __construct($db_name, $host, $user, $password){
        try {
            $this->pdo = new PDO("mysql:dbname=".$db_name.";host=".$host, $user, $password);
            // echo "<b style='color: green'> Sucesso na conexão </b>";
        } catch (PDOException $erroPdo) {
            echo "<b style='color: red'> Foi detectado erro de conexão: </b>" . $erroPdo->getMessage();
            exit();
        } catch (Exception $erroGenerico){
            echo "<b style='color: red'> Foi detectado erro genérico: </b>" . $erroGenerico->getMessage();
            exit();
        }
    }
}



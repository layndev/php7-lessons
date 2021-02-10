<?php

require_once '../models/cliente_model.php';
class ClienteController {
    
    public $clienteModel;
    public $nomeTabela = 'clientes';
    
    // instanciar o objecto cliente

    public function __construct(){
        $this->clienteModel = new ClienteModel('above_crud', 'localhost', 'root', '');
    }

    public function listarClientes(){
        $resultado = [];

        $query = "SELECT * FROM $this->nomeTabela ORDER BY nome";

        $preparo = $this->clienteModel->obterPdo()->prepare($query);
        $preparo->execute();

        $resultado = $preparo->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultado;

    }

    public function criarCliente(){
        $resultado = [];
        $query = "SELECT id FROM $this->nomeTabela WHERE contacto = :contacto";
        // preparando a query
        $preparo = $this->clienteModel->obterPdo()->prepare($query);
        $preparo->bindParam(":contacto", $this->clienteModel->contacto);
        $preparo->execute();
        $preparo->fetch(PDO::FETCH_ASSOC);

        if($preparo->rowCount() > 0){
            return false;
        } else {
            $query = "INSERT INTO $this->nomeTabela (nome, contacto, valor)
            VALUE (:nome, :contacto, :valor)";
        
        $preparo = $this->clienteModel->obterPdo()->prepare($query);

        $preparo->bindParam(":nome", $this->clienteModel->nome);
        $preparo->bindParam(":contacto", $this->clienteModel->contacto);
        $preparo->bindParam(":valor", $this->clienteModel->valor);

        $preparo->execute();
        return true;
        }
    }

    public function popularCliente($id){
        $query = "SELECT * FROM $this->nomeTabela WHERE id = :id";
        $preparo = $this->clienteModel->obterPdo()->prepare($query);
        $preparo->bindParam(":id", $id);
        $preparo->execute();
        $resultado = $preparo->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function atualizarCliente($id){

        $query = "UPDATE $this->nomeTabela SET nome = :nome, contacto = :contacto,
        valor = :valor WHERE id = :id";
        $preparo = $this->clienteModel->obterPdo()->prepare($query);

        $preparo->bindParam(":nome", $this->clienteModel->nome);
        $preparo->bindParam(":contacto", $this->clienteModel->contacto);
        $preparo->bindParam(":valor", $this->clienteModel->valor);
        $preparo->bindParam(":id", $id);

        $preparo->execute();

        return true;
    }

    public function apagarCliente($id){
        $query = "DELETE FROM $this->nomeTabela WHERE id = :id";
        $preparo = $this->clienteModel->obterPdo()->prepare($query);

        $preparo->bindParam(":id", $id);

        $preparo->execute();

        return true;
    }   


    // função que executa cadastro e atualização
    public function executar($id, $nome, $contacto, $valor){
        $this->clienteModel->nome = $nome;
        $this->clienteModel->contacto = $contacto;
        $this->clienteModel->valor = $valor;

        if($id == ''){
            if(!empty($nome) && !empty($contacto) && !empty($valor)){

                // se não estiver vazio o formulário, cadastrar
                    if($this->criarCliente() == true){
                        $mensagem = 'Cadastrado com sucesso!';
                        header("location: read_employee.php?mensagem=$mensagem");
                        
                    } else {
                        echo 'Este contacto já existe no banco de dados!';
                    }
        
                } else {
                    echo 'Preencha todos os campos!';
                }
        } else {
            
            if(!empty($nome) && !empty($contacto) && !empty($valor)){

                // se não estiver vazio o formulário, atualizar
                    if($this->atualizarCliente($id) == true){
                        $mensagem = 'Atualizado com sucesso!';
                        header("location: read_employee.php?mensagem=$mensagem");
                        
                    } else {
                        echo 'Este contacto já existe no banco de dados!';
                    }
        
                } else {
                    echo 'Preencha todos os campos!';
            }
        }


    }
}


?>
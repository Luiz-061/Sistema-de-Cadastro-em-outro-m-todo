<?php 

require __DIR__.'/../Model/PessoaModel.php';
require __DIR__.'/../Model/Pessoa.php';
 
class PessoaController{
   
    public static function cadastrar($nome, $profissao){
        session_start();
        $newpessoa = new Pessoa();
        $pessoaModel = new PessoaModel();
        $newpessoa->setNome($nome);
        $newpessoa->setProfissao($profissao);
        $sucesso = $pessoaModel->create($newpessoa);
        if($sucesso){
            $_SESSION["msg"] = "Cliente cadastrado com sucesso!";
            header('location: ./index.php');
        }else{
            $_SESSION["msg"] = "Erro ao cadastrar o cliente";
             header('location: ./index.php');
        }

    }
    public static function atualizar($id, $nome, $profissao){
        session_start();
        $newpessoa = new Pessoa();
        $pessoaModel = new PessoaModel();
         $newpessoa->setNome($nome);
        $newpessoa->setProfissao($profissao);
        $newpessoa->setId($id);

        $sucesso = $pessoaModel->update($newpessoa);
        if($sucesso){
            $_SESSION["msg"] = "Cliente editado com sucesso!";
            header('location: ./index.php');
        }else{
            $_SESSION["msg"] = "Erro ao editar  o cliente";
             header('location: ./index.php');
        }
        
    }
    public static function excluir($id){
        session_start();
         $pessoaModel = new PessoaModel();
        $sucesso = $pessoaModel->delete($id);

          if($sucesso){
            $_SESSION["msg"] = "Cliente excluido com sucesso!";
            header('location: ./index.php');
        }else{
            $_SESSION["msg"] = "Erro ao excluir o cliente";
             header('location: ./index.php');
        }
    }
}
?>
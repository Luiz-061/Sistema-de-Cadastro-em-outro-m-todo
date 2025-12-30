<?php 
require __DIR__.'/Controller/PessoaController.php';

$acao = @$_GET["acao"];
$id = @$_GET["id"];
$nome = htmlspecialchars($_POST["nome"]);
$profissao = htmlspecialchars($_POST["profissao"]);



switch($acao){
    case 'cadastrar':
        PessoaController::cadastrar($nome, $profissao);
        break;
    
    case 'atualizar':
        PessoaController::atualizar($id,$nome,$profissao);
        break;

    case 'excluir':
        PessoaController::excluir($id);
        break;

}

?>
<?php 
require __DIR__.'/db.php';

class PessoaModel{
    public function create(Pessoa $pessoa){
      try{
         $db = Database::getInstance();
       $SQL = "INSERT INTO pessoa (nome_pessoa, profissao) VALUES (:nome, :profissao)";
       $stmt= $db->prepare($SQL);
       
       $stmt->bindValue(':nome', $pessoa->getNome());
       $stmt->bindValue(':profissao', $pessoa->getProfissao());
        $stmt->execute();
        return TRUE;
      }catch(PDOException $e){
        echo $e->getMessage();
      }
    }
    public static function count(){
        $db = Database::getInstance();
       $SQL = "SELECT * FROM pessoa";
       $stmt= $db->prepare($SQL);
      $stmt->execute();

      return $stmt->rowCount();
       
    }
    public static function select(){
      $db = Database::getInstance();
       $SQL = "SELECT * FROM pessoa";
       $stmt= $db->prepare($SQL);
      $stmt->execute();

      if($stmt->rowCount()<0){
        echo "<h3>Não há Pessoas cadastradas no momento :(<h3>";
      }else{
         $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $pessoas;
      }
     

    }
    public static function FindById($id){
      $db = Database::getInstance();
       $SQL = "SELECT * FROM pessoa WHERE id_pessoa = :id";
       $stmt= $db->prepare($SQL);
       $stmt->bindParam(':id', $id,PDO::PARAM_STR);
      $stmt->execute();

      $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

      return $pessoa;

    }
    public function update(Pessoa $pessoa){
       $db = Database::getInstance();
       $SQL = "UPDATE pessoa SET nome_pessoa = :nome, profissao = :profissao, data = CURRENT_TIMESTAMP() WHERE id_pessoa = :id";
       $stmt= $db->prepare($SQL);
       $stmt->bindValue(':nome', $pessoa->getNome());
       $stmt->bindValue(':profissao', $pessoa->getProfissao());
       $stmt->bindValue(':id', $pessoa->getId());
       $stmt->execute();

       return $stmt->rowCount();
       
    }
    public function delete($id){
       $db = Database::getInstance();
       $SQL = "DELETE FROM pessoa WHERE id_pessoa = :id";
       $stmt= $db->prepare($SQL);
       $stmt->bindParam(':id', $id,PDO::PARAM_STR);
       $stmt->execute();

       return TRUE;

    }
}


?>
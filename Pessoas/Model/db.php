<?php 

class Database{
    protected $pdo;
    public static function getInstance(){
        try{
            $dn = "mysql:host=localhost;dbname=test";
            $us = 'root';
            $pss = '';

            $pdo = new PDO($dn,$us,$pss);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(PDOException $e){
           echo "Erro<br>".$e->getMessage();
        }

    }
}

?>
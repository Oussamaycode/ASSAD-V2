<?php

class Database {

    private $host="localhost";
    private $username="root";
    private $password="";
    private $dbname="ASSAD";
    

    public function connect(){

    try{
       $dsn="mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8mb4";
       $pdo=new PDO($dsn,$this->username,$this->password);
       $pdo->setAttribute( PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    }
    catch(PDOException $e){
        echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
             "line : " . $e->getLine();
        exit;     
    }

    } 

}

?>
<?php
class sql
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $userPassword= "";
    private $database = "ceppic";
    private string $connection ;


public function __construct()
{
    try {
        $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->userPassword);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    catch(PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

public function inserer($query)
{
    $this-> connection->exec($query);
}

// public function __destruct()
// {
//     $this->connexion = null;
// }
}


   
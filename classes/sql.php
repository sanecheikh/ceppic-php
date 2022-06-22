<?php
class Sql
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $userPassword= "";
    private $database = "cippic";
    private object $connection ;

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
    $this->connection->exec($query);
}

public function lister($query)
{
    $resultat = $this->connection->prepare($query);
    $resultat->execute();
    return $resultat->fetchAll();
}

public function supprimer($query,$idUser)
{
    $resultat = $this->connexion->prepare($query);
    $resultat->bindValue(':id',$idUser,PDO::PARAM_INT);
    $resultat->execute();
}

public function __destruct()
{
    if(isset($this->connection))
        $this->connexion = null;
}
}



   
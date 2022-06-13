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
        try{
            $this->connection =new PDO("mysql:host= $this->serverName;$this->database",$this->userName,$this->userPassword);
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Erreur :". $e->getMessage());
    }

}
public function inserer($querry){
    $this->connection-->exec($querry);

}
 public function __destruct()
{
    //echo "the connection is ";
    $this-> connection= null ;
}
}

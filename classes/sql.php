<?php
class sql
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $userPassword= "";
    private $database = "ceppic";
    private string $connexion ;

    public function__construct()
    {
        try{
            $this->connexion =new PDO("mysql:host=$server;dbname=$database",$userName,$userPassword,);
            $this->connexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Erreur :".)
    }

}
}
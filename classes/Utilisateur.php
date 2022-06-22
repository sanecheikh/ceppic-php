<?php

class Utilisateur implements interfaceUtilisateur
{
    public function __construct($nom)
    {
        $this->name=$nom;
    }
       
    public function __call($methode, $arg){
        echo 'Méthode ' .$methode. ' inaccessible depuis un contexte objet.
        <br>Arguments passés : ' .implode(', ', $arg). '<br>';
    }
    public static function __callStatic($methode, $arg){
        echo 'Méthode ' .$methode. ' inaccessible depuis un contexte statique.
        <br>Arguments passés : ' .implode(', ', $arg). '<br>';
    }
    public function __toString(){
        return 'Nom d\'utilisateur : ' ;//tenter d'afficher un objet//
    }
    public function __invoke($arg){
        echo 'Un objet a été utilisé comme une fonction.';
    }
    public function __clone(){
        //invoque lors de l'utilisateur du clonage d'un objet//
    }

    public function inscrireUtilisateur()
    {
       
          

        }

    
    

    
    
    public function modifierUtilisateur()
    { 
       $this->nom ;
       $this->prenom ;
    }

    public function supprimerUtilisateur()
    {

    }

    public function connecterUtilisateur()
    {

    }

    public function deconnecterUtilisateur()
    {

    }
}
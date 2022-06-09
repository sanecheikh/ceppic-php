<h1>Inscription</h1>
<?php
if (isset($_POST['frmInscription'])){
$message= "je viens du formulaire";
$nom =htmlentities(trim($_POST['nom']));
$prenom =htmlentities(trim($_POST['prenom']));
$email =htmlentities(trim($_POST['email']));

$erreurs = array();


if (mb_strlen($nom)===0);
array_push($erreurs ,"il manque votre nom");
if(mb_strlen($prenom)===0);
array_push($erreurs ,'il manque votre prenom');
if (mb_strlen($email)===0)

array_push($erreurs ,'il manque votre email');

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
array_push($erreurs, "Votre adresse mail n'est pas conforme");

if(count($erreurs)){
$messageErreur = "<ul>";

for($i=0;$i<count($erreurs) ;$i++) {
    $messageErreur .="<l>";
    $messageErreur .=$erreurs[$i];
    $messageErreur .= "</li>";
}
    echo $messageErreur;
    include './includes/frminscription.php';

}

else {
    $servername= "localhost";
    $userName = "root";
    $userPassword="";
    $datebase = "cippic";
    
    try{
        $connexion =new PDO("mysql:host=$server;dbname=$database",$userName,$userPassword,);
        $connexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete ="INSER INTO utlisateus (id_utilisateur ,nom,prenom,email) values (null, '$nom','$prenom', '$email');";
       
        $connexion->exec($requete);
        displayMessage(' Requete OK');
    
    
       }
    
       catch(PDOException $e) {
        die("Erreur : " . $e->getMessage());                
       };
   
}
}



else {
    $nom = $prenom = $mail = $password= $Verifier_Password="";
    include './includes/frmInscription.php';
}


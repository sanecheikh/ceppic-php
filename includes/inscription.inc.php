<h1>Inscription</h1>

<?php

if (isset($_POST['frminscription'])){
$message= "je viens du formulaire";
$nom =htmlentities(trim($_POST['nom']));
$prenom =htmlentities(trim($_POST['prenom']));
$email =htmlentities(trim($_POST['email']));
$password1 = htmlentities(trim($_POST['password1']));
$password2 = htmlentities(trim($_POST['password2']));
$erreurs = array();


if (mb_strlen($nom)===0)
array_push($erreurs ,"il manque votre nom");
if(mb_strlen($prenom)===0)
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
   
        $password = password_hash($password1, PASSWORD_DEFAULT);
        $requete ="INSERT INTO utilisateur (id_utilisateur ,nom,prenom,email,password) values (null, '$nom','$prenom', '$email','$password');";
       
        $queryInsert = new Sql();
        $queryInsert->inserer($requete);

        displayMessage(' Requete OK');  
   
}
}



else {
    $nom = $prenom = $mail = $password= $Verifier_Password="";
    include './includes/frmInscription.php';
}


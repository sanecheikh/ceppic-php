<h1>Inscription</h1>
<?php
if (isset($_POST['frmInscription'])){
$message= "je viens du formulaire";
$nom =htmlentities(trim($_POST['nom']));
$prenom =htmlentities(trim($_POST['prenom']));
$email =htmlentities(trim($_POST['email']));

$erreurs = array();


if (mb_strlen($nom)===0);
array_push($_erreurs ,"il manque votre nom");
if(mb_strlen($prenom)===0);
array_push($erreurs ,'il manque votre prenom');
if (mb_strlen($email)===0);

array_push($erreurs ,'il manque votre email');
if(count($erreurs)){
$messageErreur = "<ul>";

for($i=0;$i<count($erreurs) ;$i++) {
    $messageErreur .="<l>";
    $messageErreur .=$erreurs[$i];
    $messageErreur .= "</li>";
    echo $messageErreur;
}
}


dump($nom);
dump($prenom);
dump($email);
}
else
$message = "je ne viens pas du formilaire";

echo $message;
?>
<form action="index.php?page=inscription"methode="post">
    <div>
        <label for="nom">Nom :</label>
        <input type= "text" id="Nom=" name ="nom" value="<?=$nom ?>"/>
    </div>
    <div>
    <label for="nom">prenom :</label>
        <input type= "text" id="Prenom=" name ="prenom" value="<?=$prenom ?>"/>
    </div>
    <div>
    <label for="nom">email :</label>
        <input type= "text" id="Email= name = "email" value="<?=$email ?>"/>
    </div>
    <div>
    <input type="reset" value="effacer"/>
    <input type="submit" value="envoyer"/>
    </div>
</form>
 
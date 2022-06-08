<h1>Inscription</h1>
<?php
if (isset($_POST['frmInscription'])){
$message= "je viens du formulaire";
$nom =htmlentities(trim($_POST['nom']));
$prenom =htmlentities(trim($_POST['prenom']));
$email =htmlentities(trim($_POST['email']));

dump($nom);
dump($prenom);
dump($email);


}
else{
$message = "je ne viens pas du formilaire";
}
echo $message;
?>
<form action="index.php?page=inscription"methode="post">
    <div>
        <label for="nom">Nom :</label>
        <input type= "text" id="Nom="/>
    </div>
    <div>
    <label for="nom">prenom :</label>
        <input type= "text" id="Prenom="/>
    </div>
    <div>
    <label for="nom">email :</label>
        <input type= "text" id="Email="/>
    </div>
    <div>
    <input type="reset" value="effacer"/>
    <input type="submit" value="envoyer"/>
    </div>
</form>
  
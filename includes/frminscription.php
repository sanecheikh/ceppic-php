<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" />
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" />
    </div>
    <div>
        <label for="mail">email :</label>
        <input type="text" id="mail" name="email" />
    </div>
    <div> <label for="password">password1:</label>
     <input type ='text' id ="passvord" name ="password"/>
</div>
<div><label for="password"> Password2:</label>
     <input type ='text' id ="Password2" name ="password2"/></div>
    
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmInscription" />
</form>
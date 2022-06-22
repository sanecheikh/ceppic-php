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
        <label for="email">email :</label>
        <input type="text" id="email" name="email" />
    </div>
    <div> <label for="password">password1:</label>
     <input type ='text' id ="password1" name ="password1"/>
</div>
<div><label for="password"> Password2:</label>
     <input type ='text' id ="password2" name ="password2"/></div>
    
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frminscription" />
</form>
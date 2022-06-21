<h1>Login</h1>
<?php
if (isset($_POST['frmlogin'])) {
    $message = "je viens de me connecter";
    $email = htmlentities(trim($_POST['mail']));
    $password = htmlentities(trim($_POST['mdp']));

    $erreurs = array();
    if (mb_strlen($email) === 0)
    array_push($erreurs, 'il manque votre email');
    if (mb_strlen($password) === 0)
    array_push($erreurs, 'il manque votre password');



    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<l>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;

        include './include/frmLogin.php';
    } 
    else {
        $requeteLogin= "SELECT password FROM utilisateur WHERE mail='$email'";
        $sqlLogin = new Sql();
        $resultatLogin = $sqlLogin->Lister($requeteLogin);
        if (count($resultatLogin) >0) {
            //tratement pour verifier le mot de passe
            $resultatLoginPassworld = $resultatLogin[0]['password'];
            if (Password_verify($password  ,$resultatLoginPassword)){
                $message ='vous etes connecte';
                $_SESSION['Login']=true;
            }else{
                $message = "Erreur d'authentication";
                $_SESSION = false;
            }

        }else{
            $message ="Votre adress n'est pas dans la base";
        }
        echo $message;
        $url = $_SERVER['HTTP_ORIGIN'].dirname($_SERVER['REQUEST_URL']);
        echo redirection($url, 2000);
        echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";

        // include './include/frmLogin.php';
        $_SESSION['LoginUser'] = $email;
        $messageEmail = $email . ' vous êtes connecté !';

        sendEmail($email, 'contact@ceppic-php.fr', 'Login Success', $messageEmail);

        header('Location:index.php?page=admin');
       
    }
} else {
    $email = "";
    include './includes/frmLogin.php';
}

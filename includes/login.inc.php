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
    } else {
        // include './include/frmLogin.php';
        $_SESSION['LoginUser'] = $email;
        header('location:index.php?membre');
    }
} else {
    $email = "";
    include './includes/frmLogin.php';
}

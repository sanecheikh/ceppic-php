
<?php
//session_start();
?>
<h1>Login</h1>
<?php
if (isset($_POST['frmLogin'])){
$message= "je viens de me connecter";
$email =htmlentities(trim($_POST['email']));
$password= htmlentities(trim($post['password']));

$erreurs = array();
if (mb_strlen($email)===0);     
array_push($erreurs ,'il manque votre email');
if (mb_strlen($password)===0);
array_push($erreurs ,'il manque votre password');


if (count($erreurs)) {
$messageErreur = "<ul>";

for($i=0;$i<count($erreurs) ;$i++) {
    $messageErreur .="<l>";
    $messageErreur .=$erreurs[$i];
    $messageErreur .= "</li>";
}
$messageErreur .= "</ul>";
    
echo $messageErreur;

include './include/frmLogin.php';
}


else {
    include './include/frmLogin.php';
    $_SESSION['loginUser']=$email;
    echo $_SESSION['loginUser'];
}
}


else {
$mail = "";
include './include/frmLogin.php';
}


?>
<form action="index.php?page=inscription"methode="post">
    <div>
        <label for="email">email :</label>
        <input type= "text" id="email=" name ="email"/>
    </div>
    <div>
    <label for="password">password:</label>
        <input type= "password" id="password=" name =""/>
    </div>
    <div><input type="submit" value="Effacer"/>
    <input type="submit" value="Envoyer"/>

</div>
</from>
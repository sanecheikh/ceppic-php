<?php
session_start();
if(isset($_SESSION['LogUser'])){
    print_r($_SESSION);

}
    ?>

<header>
    <nav>
        <ul>
        <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <li><a href="index.php?page=login">Login</a></li>
            <li><a href="index.php?page=logout">logout</a></li>
           
         
        
        </ul>
    </nav>
</header>
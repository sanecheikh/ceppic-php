
<header>
    <nav>
        <ul>
        <li><a href="index.php?page=accueil">Accueil</a></li>
       <li><a href="index.php?page=contact">Contact</a></li>
       <?php
       if (isset($_SESSION['LoginUser'])) {
            ?>
                <span class="login">
                <li><a href="index.php?page=logout">Logout</a></li>
                    <li><strong><?= $_SESSION['LoginUser'] ?></strong></li>
            </span>
            <?php } else { ?>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <li><a href="index.php?page=login">Login</a></li>
            <?php } ?>
            
        </ul>
    </nav>
</header>
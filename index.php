
<?php
session_start();

spl_autoload_register(function ($className) {
    require './classes/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadFunction.php';

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';

//dump($_SERVER,"var_dump");
//dump($_SERVER['REMOTE_ADD],"var_dump");
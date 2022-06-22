
<?php
session_start();
require'./vendor/autoload.php';
$test = "12345";
var_dump($test);

spl_autoload_register(function ($className) {
    require './classes/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadFunction.php';

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
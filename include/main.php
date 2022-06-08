<?php
require_once './includes/nav.php';
?>
<main>
    <?php
     if(isset($_GET['page'])) ?
    $page=$_GET['page'];
    echo $page;
    if(isset($_GET['page']))
    $page = $_GET['page'];
    else
    $page = "N 'existe pas";
    echo $page;



?>
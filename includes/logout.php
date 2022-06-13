<?php
session_start();
session_destroy();
echo "session detruit";
//echo 'session detruite !';
header('Location :/index.php');

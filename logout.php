<?php


session_start();

$_SESSION["loggedin"] = 0;

session_destroy();

header("Location: Login.php");


?>

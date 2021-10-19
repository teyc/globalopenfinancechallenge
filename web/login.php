<?php

// TODO should be POST
$accountNumber = $_GET["accountNumber"];
$password = $_GET["password"];

switch ($accountNumber) {
    case '1':
        $name = "Tim Roberts";
        break;
    
    default:
        $name = "Susan Smith";
        break;
}

session_start();
$_SESSION["name"] = $name;

// Log in to 
header("Location: /open-banking-03.php");
?>
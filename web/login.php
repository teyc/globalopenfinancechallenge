<?php
include('./db.php');
include('./api.php');

// TODO should be POST
$accountNumber = $_GET["accountNumber"];
$password = $_GET["password"];

$authCode = consent($accountNumber);

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

// call our api
// db_save('monthly', $monthly);

// Log in to 
header("Location: /open-banking-03.php");
?>
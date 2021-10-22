<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('USERID', 'USERID');

session_start();

function db_save($key, $data) {
    $userid = $_SESSION[USERID];
    $json = json_encode($data);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/db/$userid/$key.json", $json);
}

function db_load($key) {
    $userid = $_SESSION[USERID];
    $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/db/$userid/$key.json");
    return json_decode($json);
}

?>

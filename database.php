<?php

session_start();

include 'config.php';
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];

$db = new PDO("mysql:host=".HOST.";dbname=".DBNAME, LOGIN, MOT_DE_PASSE, $options);


?>
<?php


define('DSN', 'localhost');
define('DBNAME', 'forum');
define('LOGIN', 'root');
define('MOT_DE_PASSE', '');

$options = [
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_ERRMODE            => PDO::ERRMODE_WARNING,
 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];
   
    $db = new PDO("mysql:host=localhost;dbname=forum","root","",$options);                       

?>
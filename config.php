<?php


define('DSN', '');
define('DBNAME', '');
define('LOGIN', '');
define('MOT_DE_PASSE', '');

$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
   
    $db = new PDO("mysql:host="DSN, "dbname="DBNAME, LOGIN, MOT_DE_PASSE, $options);                        
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
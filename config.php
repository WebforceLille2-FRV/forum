<?php


define('DSN', '');
define('DBNAME', '');
define('LOGIN', '');
define('MOT_DE_PASSE', '');
$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        // on change la methode de recuperation des données (tableau associatif) par defaut
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
        //Afficher les erreurs MySql dans le php ou alors dans le PDO::ERRMODE_EXCEPTION
        //Rien à voir avec la config php.ini, ce sont des erreurs MySql interpretées par PDO

try {
    $db = new PDO("mysql:host="DSN, "dbname="DBNAME, LOGIN, MOT_DE_PASSE, $options);
            // on va chercher $options dans params.php (options pour pdo).
            
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(sprintf("%s dans %s à la ligne %d : %s", get_class($e), $e->getFile(), $e->getLine(), $e->getMessage()));
}
    if ($db) {
        echo "Connexion à la base de données : OK"."<br />", PHP_EOL;
        
    }


?>
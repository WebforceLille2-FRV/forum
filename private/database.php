<?php
    session_start();
    include 'config.php';
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];
    $db = new PDO("mysql:host=".HOST. ";dbname=".DBNAME, LOGIN , PASSWORD , $options);
    // Fichier contenant toutes les fonctions PHP de notre site
    include 'functions.php';
    
    //setcookie("id",1, time()+3600,"/");
    //mail('webforce3@20mail.eu', "Sujet", "Message");
    if(isset($_SESSION['user'])){
        $currentUser = $db->query("SELECT email FROM user where id =".$_SESSION['user'])->fetch();
        var_dump($_SESSION['user']); ?>
        <a href="logout.php">Se déconnecter</a>
        <?php
    }
?>
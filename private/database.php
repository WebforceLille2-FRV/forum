<?php
    session_start();
    include 'config.php';
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $db = new PDO("mysql:host=".HOST. ";dbname=".DBNAME, LOGIN , PASSWORD , $options);

    include 'functions.php';

    if(isset($_SESSION['user'])){
        $currentUser = $db->query("SELECT email FROM users where id =".$_SESSION['user'])->fetch();
        var_dump($_SESSION['user']); ?>
        <a href="logout.php">Se déconnecter</a>
        <?php
    }

?>
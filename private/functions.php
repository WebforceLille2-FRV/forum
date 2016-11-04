<?php

function userStatus(){
    if(isset($_SESSION['user'])){
        $currentUser = $db->query("SELECT email FROM users where id =".$_SESSION['user'])->fetch();
        var_dump($_SESSION['user']); ?>
        <a href="logout.php">Se déconnecter</a>
        <?php
    }
}

// Check if the user is in the DDB by the email
function emailExists($email){
    global $db;
    $q = $db->prepare("SELECT * FROM users WHERE email = '".$email."'");    
    $q-> bindValue(":email", $email, PDO::PARAM_STR);
    $q-> execute();
    $user = $q->fetch();
    return $user;
}

function usernameExists($email){
    global $db;
    $q = $db->prepare("SELECT * FROM users WHERE username = '".$username."'");    
    $q-> bindValue(":email", $email, PDO::PARAM_STR);
    $q-> execute();
    $user = $q->fetch();
    return $user;
}

function getCategory(){
    global $db;
    $q = $db->query("SELECT * FROM category");
    $categories = $q->fetchAll();
    return $categories;
}


?>
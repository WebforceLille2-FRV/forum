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

// Function to get all categories
function getCategory(){
    global $db;
    $q = $db->query("SELECT * FROM category WHERE parent IS NULL ");
    $categories = $q->fetchAll();
    return $categories;
}

// Pour remplacer tous les caracteres exotiques dans l'url
function slug($title) {

    $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
    );

    // -- Remove duplicated spaces
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $title);

    // -- Returns the slug
    $slug = strtolower(strtr($title, $table));
    return $slug;

}



?>
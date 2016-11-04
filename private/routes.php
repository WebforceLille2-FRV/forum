<?php
$routes = array(
    array('GET', '/', function(){
        global $db, $router;
        include '../private/header.php';
        include '../private/home.php';
        include '../private/footer.php';
    }, 'home'),
    array('GET|POST', '/login', function(){
        include '../private/header.php';
        include '../private/login.php';
        include '../private/footer.php';
    }, 'login'),
    
    array('GET|POST', '/register', function(){
        global $db;
        include '../private/header.php';
        include '../private/register.php';
        include '../private/footer.php';
    }, 'register'),    
    
    array('GET', '/logout', function(){
        global $db;
        include '../private/header.php';
        include '../private/logout.php';
        include '../private/footer.php';
    }, 'logout'),
    
    array('GET', '/category/[*:slug]', function($slug){
        global $db, $router;
        include '../private/header.php';
        include '../private/category.php';
        include '../private/footer.php';
    }, 'category'),    
    
    array('GET', '/forum/[i:id]', function($id, $b){ echo $id . " ".$b; }, 'forum'),
    array('GET', '/profil', function(){ $_SESSION['id'] = 2; var_dump($_SESSION); }, 'profil')
);
?>
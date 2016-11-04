<?php 
// On utilise les sessions
session_start();
// Ce fichier est l'autoload de composer
require '../vendor/autoload.php';
// Ce fichier contient toutes nos routes
require '../private/routes.php';
// Connexion à la base de données
require '../private/database.php';
require '../private/functions.php';
// On instancie l'objet altorouter
$router = new AltoRouter();
$router->setBasePath("/01_PHP/14-ForumPHP/forum/public");
// On ajoute nos routes dans altorouter
$router->addRoutes($routes);
$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
    // Toutes les fonctions PHP de notre forum
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

 ?>

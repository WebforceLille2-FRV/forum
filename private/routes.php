<?php 

	require 'vendor/autoload.php';

	$router = new AltoRouter();

	$router->setBasePath('/01_PHP/07_composer');

	$router->map( 'GET', '/', function() {
    echo "Page accueil";
	}, 'home');

	$router->map( 'GET', '/', function() {
    echo "Page contact";
	}, 'contact');

	$match = $router->match();
	var_dump($match);

	if($match && is_callable($match['target'])){
		call_user_func_array($match['target'], $match['params']);

	}else {
		header($_SERVER["SERVER_PROTOCOL"]. '404 not found');
	}


?>
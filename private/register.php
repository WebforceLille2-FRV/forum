<?php 

include 'database.php'; 
var_dump($db);
function register(){
global $db;
	if(isset($_POST['submit']) && !empty($_POST)){
		// On nettoie les entrées utilisateur
		$email     = trim(strip_tags($_POST['email']));
		$email     = filter_var($email,FILTER_VALIDATE_EMAIL);
		$password  = trim(strip_tags($_POST['password']));
		$passwordHash =  password_hash($password,PASSWORD_DEFAULT);

		$p = $db->prepare("INSERT INTO users(username,password,email,role) 
						   VALUES(:username,:password,:email,:role)");
	$p->bindValue(":username",$_POST['username'],PDO::PARAM_STR);

	$p->bindValue(":password",$passwordHash ,PDO::PARAM_STR);
	$p->bindValue("email"    ,$email    ,PDO::PARAM_STR);

	$p->bindValue(":role"    ,"user"    ,PDO::PARAM_STR);
	
		if($p->execute()){
			header('Location:../public/index.php');
			echo 'inscription validée';
		} // Fermeture If
	} // Fermeture isset Submit et !empty Post
}

register();

?>
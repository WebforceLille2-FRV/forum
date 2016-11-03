<?php 
include 'database.php'; 
var_dump($db);


	if(isset($_POST['submit']) && !empty($_POST)){
		global $db;
		// On nettoie les entrées utilisateur
		$email     = trim(strip_tags($_POST['email']));
		$email     = filter_var($email,FILTER_VALIDATE_EMAIL);
		$password  = trim(strip_tags($_POST['password']));
		//$passwordVerify = password_verify($password,PASSWORD_DEFAULT);

		$p = $db->prepare("SELECT * FROM users WHERE password = :password, email = :email");
		$p->bindValue(":password",$password,PDO::PARAM_STR);
		$p->bindValue(":email",$email,PDO::PARAM_STR);
		$p->execute();
		
		var_dump($p);
  
}






?>
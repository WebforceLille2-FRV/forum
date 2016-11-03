<?php 

include 'database.php';
function register(){
	// On nettoie les entrées utilisateur
$email     = trim(strip_tags($_POST['email']));
$email     = filter_var($email,FILTER_VALIDATE_EMAIL);
$emailHash = password_hash($email,PASSWORD_DEFAULT);
$password  = trim(strip_tags($_POST['password'])); 
      
	if(isset($_POST['submit']) && !empty($_POST)){
			$p = $db->prepare("INSERT INTO users(username,password,email,role) 
							   VALUES(:username,:password,:email,:role)");
	$p->bindValue(":username",$_POST['username'],PDO::PARAM_STR);
	$p->bindValue(":password",$password ,PDO::PARAM_STR);
	$p->bindValue("email"    ,$emailHash    ,PDO::PARAM_STR);
	$p->bindValue(":role"    ,"user"    ,PDO::PARAM_STR);
		if($p->execute()){
			header('Location:index.php');
			echo 'inscription validée';
		} // Fermeture If
	} // Fermeture isset Submit et !empty Post
}

register();

?>
<?php 
<<<<<<< Updated upstream
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
=======
require_once 'header.php';
include 'database.php';
?>
<form action="login.php" method="POST">
	  <h2>Register</h2>
	<label for="username">Name    : <input type="text" name="username" id="username"/></label>
	<label for="password">Password : <input type="password" name="password" id="password"/></label>
	<button type="submit" name="submit">Se loger</button>
	<p class="col-lg-8"><a href="../private/forgot.php">Mot de passe oublié ?</a></p>
</form>

<?php 

if(isset($_POST['submit']) && !empty($_POST)){
	$p = $db->prepare("SELECT * FROM users WHERE username = :username");
	$p ->bindValue(":username",$_POST['username'],PDO::PARAM_STR);
	$p->execute();
	$rep = $p->fetch();

	$hash = $rep['password']; 
	$passVerify = password_verify($_POST['password'],$hash);
	if($passVerify == true){
		echo 'It works';
		//header('Location:index.php');
	}

} // Fermeture isset submit



>>>>>>> Stashed changes






<<<<<<< Updated upstream
=======
//require_once 'footer.php';
>>>>>>> Stashed changes
?>

<form action="login.php" method="POST">
	  <h2>Register</h2>
	<label for="username">Name    : <input type="text" name="username" id="username"/></label>
	<label for="password">Password : <input type="password" name="password" id="password"/></label>
	<button type="submit" name="submit">Se loger</button>
	<p class="col-lg-8"><a href="../private/forgot.php">Mot de passe oublié ?</a></p>
</form>

<?php 
include 'database.php';
if(isset($_POST['submit']) && !empty($_POST)){
	$p = $db->prepare("SELECT * FROM users WHERE username = :username");
	$p ->bindValue(":username",$_POST['username'],PDO::PARAM_STR);
	$p->execute();
	$rep = $p->fetch();

	$hash = $rep['password']; 
	$passVerify = password_verify($_POST['password'],$hash);
	if($passVerify == true){
		header('Location:../public/index.php');
	}
	else{
		echo "Mot de passe ou login incorrect.";
	}
} // Fermeture isset submit


?>
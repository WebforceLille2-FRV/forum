<?php include 'database.php'; ?>

<form method="POST">
   <h2>Saisissez votre login</h2>
    <input autocomplete="off" type="text" name="username">
    <h2>Votre mot de passe</h2>
    <input autocomplete="off" type="password" name="password">
    <button name="login">Se connecter</button>
</form>

<?php 

if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $q = $db->prepare("SELECT * FROM users WHERE username = :username");
    $q->bindValue(":username", $username, PDO::PARAM_STR);
    $q->execute();
    $username = $q->fetch();
    
 echo "Bonjour ! Vous etes maintenant connecté.";
   
?>


<?php include 'database.php'; ?>
<?php if(isset($_GET['token'])){
    
    $token = trim($_GET['token']);
    
    $q = $db->prepare("SELECT * FROM user WHERE token = :token");
    $q->bindValue(":token", $token, PDO::PARAM_STR);
    $q->execute();
    
    if($user = $q->fetch()){
        // tester si le token est valide
        if(time() - substr($user['token'],32) <= 86400){ ?>
        <form action="" method="POST">
            <label for="password">Password:</label><br />
            <input type="password" name="password"><br />
            <label for="password">Retapez le password:</label><br />
            <input type="password" name="password-cf"><br />
            <button name="forget">Redefinir mon mot de passe</button>
        </form>      
        <?php if(isset($_POST['forget'])){
            
            $password = trim($_POST['password']);
            $passwordCf = trim($_POST['password-cf']);
            if(strlen($password) >=4 && $password == $passwordCf){
                //on change le mot de passe
                $q = $db->prepare("UPDATE users SET token = NULL, password = :password WHERE id=" .$user['id']);
                $q-> bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
                if($q->execute()){
                    echo "Votre mot de passe a été changé";
                }
                
            }else{
                echo "Le mot de passe n'est pas identique";
            }
            
        }  
            
        }else{
            echo "Le token n'est plus valide depuis " .date("d/m/Y H:i:s", substr($user['token'],32)).".";
            $db->query("UPDATE user SET token = NULL WHERE id=" .$user['id']);
        }

    }else{
        echo "Le token n'est pas valide.";
    }
    
    
}else{?>


    <h4>Changer Mot de passe</h4>
    <form action="" method="POST">
        <label for="email">Email:</label><br />
        <input type="text" name="email"><br />
        <button name="reinitialize">Reinitialiser le mot de passe</button>

    </form>

    <?php

        if(isset($_POST['reinitialize'])){
        $email = strip_tags(trim($_POST['email']));

        $valid = true;
        if(empty($email)){
            echo "Merci de renseigner votre email";
            $valid = false;
        }    
            
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L'Email n'est pas valide";
            $valid = false;
        }

        if($valid){

        $user = emailExists($email);


            var_dump($user);

            if($user['email'] == $_POST['email']){
                $token = md5(uniqid()).time(); // génération d'un token
                //header pour envoyer le lien en html
                $header = 'MIME-Version: 1.0' . "\r\n";
                $header = 'Content-type: test/html; charset=iso-8859-1' . "\r\n";
                mail($user['email'], "[Mon site] Mot de passe oublié", "<h1>Vous pouvez redefinir votre mot de passe <a href='http://localhost/01_PHP/13-Authentification/forgotpassword.php?token=".$token."' target=_blank> ici</a></h1>");
                
                //mail($user['email'], "[Mon site] Mot de passe oublié", "<h1>Vous pouvez redefinir votre mot de passe <a href='http://localhost/01_PHP/13-Authentification/forgotpassword.php?token=".$token."' target=_blank> ici</a></h1>"); // CONFIG FRED
                
                //mail($user['email'], "[Mon site] Mot de passe oublié", "<h1>Vous pouvez redefinir votre mot de passe <a href='http://localhost/01_PHP/13-Authentification/forgotpassword.php?token=".$token."' target=_blank> ici</a></h1>"); // CONFIG ROBIN


                $db->query("UPDATE users SET token = '".$token."' WHERE email = '".$user['email']."'");
                echo "true";


            }else{
                echo"Email non reconnu!";
            }



        }
        }
}
?>

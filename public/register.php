<?php 


$options = [
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::ATTR_ERRMODE            => PDO::ERRMODE_WARNING,
 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];
  
//$email    = trim(strip_tags(filter_var($_POST['email'],FILTER_VALIDATE-EMAIL)));
//$password = trim(strip_tags($_POST['password'])); 


$db = new PDO("mysql:host=localhost;dbname=forum","root","",$options);       

$p = $db->prepare("INSERT INTO users(username,password,email,role) VALUES(:username,:password,:email,:role)");
$p->bindValue(":username",$_POST['username'],PDO::PARAM_STR);
$p->bindValue(":password",$_POST['password'],PDO::PARAM_STR);
$p->bindValue("email",$_POST['email'],PDO::PARAM_STR);
$p->bindValue(":role","user",PDO::PARAM_STR);
$p->execute();
var_dump($p);











?>
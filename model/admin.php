<?php 
session_start();
require_once '../connect/connect.php';
$login = $_POST['login'];
$password = $_POST['password'];

$sql = $pdo->prepare("SELECT id, login FROM admin WHERE login=:login AND password=:password");
$sql -> execute(['login' => $login, 'password' => $password]);
$array = $sql->fetch(PDO::FETCH_ASSOC);
if($array['id'] > 0){
    $_SESSION['login'] = $array["login"];
    header('Location:../view/admin.php');
}
else{
    header('Location:../view/login.php');
}

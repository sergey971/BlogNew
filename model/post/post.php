<?php 
error_reporting(E_ALL);
$host = 'localhost';
$db   = 'blog';
$user = 'root';
$pass = 'mysql';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$author = $_POST['author'];
$message = $_POST['message'];
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$str = $url[5];


$sql="UPDATE `blog` SET `author` = :author, `message` = :message WHERE `id`= $str";
$query = $pdo -> prepare($sql);
$query-> execute(["author" => $author, "message" => $message]);
header("Location: /php/model/post.php");

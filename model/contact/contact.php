<?php 
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

        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        $row = "UPDATE `contact` SET city=:city, phone=:phone, email=:email";
        $query = $pdo->prepare($row);
        $query->execute(["city"=>$city,"phone"=>$phone,"email"=>$email]);
        header("Location: /php/model/contact.php");
exit;


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

if(isset($_POST['save'])){
    $list = ['.php', '.zip', '.js','.html'];
    foreach($list as $item){
        if(preg_match("/$item$/",$_FILES['im']['name'])) exit("Расщирения файла не подходит");
    }
    $type =getimagesize($_FILES['im']['tmp_name']);
    if($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')){
        if($_FILES['im']['name'] < 1024*1000){
            $upload = '../images/'.$_FILES['im']['name'];

            if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
            else echo "Ошибка при загрузке файла";
        }
        else exit("Размер файла привышен");
    }
    else exit("Тип файла не подходит");
}
?>

<?php

$title = $_POST['title'];
$description = $_POST['description'];
$sql="UPDATE `about` SET `title` = :title, `description` = :description, `filename` = :filename";
$query = $pdo -> prepare($sql);
$query-> execute(["title" => $title, "description" => $description, "filename"=>$_FILES['im']['name']]);
header("Location: /php/model/about.php");
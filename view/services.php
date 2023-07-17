<?php 
require_once './connect/connect.php';
$services = $pdo->prepare("SELECT * FROM `services`");
$services-> execute();
$resultServices = $services->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <ul  style="display: flex;  background-color: #663;">
    <?foreach($resultServices as $value):?>
        <li><?=$value['services']?></li>
        <li><?=$value['description']?></li>
        <img style="width: 300px; height:300px;" src="./model/images/<?=$value['filename']?>" alt="">
        <?endforeach;?>
    </ul>

</body>

</html>
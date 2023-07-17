<?php 
require_once './connect/connect.php';
$sql = $pdo->prepare("SELECT * FROM `contact`");
$sql-> execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$res['title']?></title>
    <meta name="description" content="<?=$res['description']?>">
</head>
<body>
<h3>Контакты</h3>
    <!-- Здесь можно добавить форму для добавления или редактирования контактов -->
    <ul style="display: flex;  background-color: red;">
      <li id="name" name = "city"><?=$res['city']?></li><br>
      <li id="phone" name = "phone"><?=$res['phone']?></li><br>
      <li id="email" name = "email"><?=$res['email']?></li><br>
      <!-- Здесь можно добавить динамическое создание списка контактов -->
    </ul>
  </div>
</body>
</html>
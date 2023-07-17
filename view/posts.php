<?php
require_once './connect/connect.php';
$post = $pdo->prepare('SELECT * FROM `blog`');
$post->execute();
$resPost = $post->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посты</title>
</head>
<body>
<div class="posts" style=" background-color:black ;">
    <h3>Посты</h3>
    <!-- Здесь можно добавить форму для добавления или редактирования постов -->
    
      <?foreach ($resPost as $valuePost){?>
      <h1><?=$valuePost['author']?></h1>
      <p><?=$valuePost['message']?></p>
      <h5><?=$valuePost['data']?></h5>
      <!-- Здесь можно добавить динамическое создание списка постов -->
      <?}?>
    
  </div>
</body>
</html>
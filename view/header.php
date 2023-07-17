<?php 
require_once './connect/connect.php';
$main = $pdo->prepare("SELECT * FROM `header`");
$main->execute();
$result = $main->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Произвольный заголовок</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    .header h1 {
      margin: 0;
      font-size: 24px;
    }
    
    .header p {
      margin: 10px 0 0;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div style=" background-color: green;" class="header">
    <h1><?=$result->title;?></h1>
    <p><?=$result->description;?></p>
  </div> 
</body>
</html>

<?php 
require_once './connect/connect.php';
$about = $pdo->prepare("SELECT * FROM `about`");
$about->execute();
$resultAbout = $about->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
  <title>О нас</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;

    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      color: #333;
      text-align: center;
    }
    
    p {
      line-height: 1.5;
      color: #666;
    }
  </style>
</head>
<body >
  <div        class="container">
  <div style=" background-color: #666;">
    <h1 name="title"><?=$resultAbout->title?></h1>
<p name=description>
<?=$resultAbout->description?>
</p>
<div class="test" style="width: 400px; height:400px;">
  
  <img style="width:100%;" src="./model/images/<?=$resultAbout->filename?>" alt="">
</div>
  </div>
</body>
</html>

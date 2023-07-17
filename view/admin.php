<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
</head>
<body>
    <?php if(!empty($_SESSION['login'])):?>
   <?php echo "Добрый день, ".$_SESSION['login'];?>
   <br>
   <a href="./logout.php">Выйти</a>
   <br> 
   <a href="../model/contact.php">Редактировать контакты </a> <br>
   <a href="../model/services.php">Редактировать услуги</a> <br>
   <br>
   <a href="../model/about.php">Редактировать о нас</a> 
   <br>
   <a href="#">Редактировать о блог постов</a> 
   <?php else:
   echo ' <h2>Вы хакер</h2>';
   echo '<a href="/php/">На главную</a>';
   
    
    ?>
   <?php endif?>  
</body>
</html>
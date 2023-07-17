<?php session_start();
require_once('../connect/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
</head>

<body>
    <h1>Редактирование страницы услуг </h1>
    <?php if (!empty($_SESSION['login'])) : ?>
        <?php echo "Добрый день, " . $_SESSION['login']; ?>
        <br>
        <a href="./logout.php">Выйти</a>
        <br>
        <?php
        $sql = $pdo->prepare('SELECT * FROM `services`');
        $sql->execute();
        while($res = $sql->fetch(PDO::FETCH_OBJ)):?>
        <form method="POST" action="../model/services/services.php/<?=$res->id?>" enctype="multipart/form-data">
            <?=$res->id?>
            <input type="text" name="services" value="<?php echo $res->services?>">
            <textarea type="text" name="description" ><?php echo $res->description?></textarea>
            <p>

                <input type="file" name="im">
            </p>
            <input type="submit" name="save" value="Сохранить">
        </form>
        <img style="width: 30%; height:40%" src="../model/images/<?= $res->filename?>" alt="">
            <?php endwhile?>
    <?php else :
        echo ' <h2>Вы хакер</h2>';
        echo '<a href="/php/">На главную</a>';
    ?>
    <?php endif ?>

</body>

</html>
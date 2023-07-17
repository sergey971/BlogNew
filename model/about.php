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
    <h1>Редактирование страницы о нас </h1>
    <?php if (!empty($_SESSION['login'])) : ?>
        <?php echo "Добрый день, " . $_SESSION['login']; ?>
        <br>
        <a href="./logout.php">Выйти</a>
        <br>
        <?php
        $sql = $pdo->prepare('SELECT * FROM `about`');
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
        ?>
        <form method="POST" action="../model/about/about.php" enctype="multipart/form-data">
            <input type="text" name="title" value="<?php echo $res->title?>">
            <input type="text" name="description" value="<?php echo $res->description?>">
            <p>

                <input type="file" name="im">
            </p>
            <input type="submit" name="save" value="Отправить">
        </form>
        <img style="width: 30%; height:40%" src="../model/about/images/<?= $res->filename?>" alt="">

    <?php else :
        echo ' <h2>Вы хакер</h2>';
        echo '<a href="/php/">На главную</a>';
    ?>
    <?php endif ?>

</body>

</html>
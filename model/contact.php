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
    <h1>Редактирование контактнойц информации</h1>
    <?php if (!empty($_SESSION['login'])) : ?>
        <?php echo "Добрый день, " . $_SESSION['login']; ?>
        <br>
        <a href="./logout.php">Выйти</a>
        <br>
        <?php
        $sql = $pdo->prepare('SELECT * FROM `contact`');
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
        ?>
        <form method="POST" action="../model/contact/contact.php">
            <input type="text" name="city" value="<?php echo $res->city?>">
            <input type="text" name="phone" value="<?php echo $res->phone?>">
            <input type="text" name="email" value="<?php echo $res->email?>">
            <input type="submit" value="Отправить">
        </form>

    <?php else :
        echo ' <h2>Вы хакер</h2>';
        echo '<a href="/php/">На главную</a>';
    ?>
    <?php endif ?>

</body>

</html>
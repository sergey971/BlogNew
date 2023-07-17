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
    <h1>Редактирование статей блога</h1>
    <br>

    <br>
    <?php if (!empty($_SESSION['login'])) : ?>
        <?php echo "Добрый день, " . $_SESSION['login']; ?>
        <br>
        <a href="./logout.php">Выйти</a>
        <br>
        <?php
        $sql = $pdo->prepare('SELECT * FROM `blog`');
        $sql->execute();
        while($res = $sql->fetch(PDO::FETCH_OBJ)):?>
        <form method="POST" action="../model/post/post.php/<?=$res->id?>">
        <?=$res->id?>
            <input type="text" name="author" value="<?php echo $res->author?>">
            <input type="text" name="message" value="<?php echo $res->message?>">
            <input type="submit" class="send" name="send" value="Отправить">
        </form>

<?endwhile?>
<script>
                const sends = document.querySelectorAll('.send');
                sends.forEach(send => {
                    send.addEventListener('click', function(){
                        alert('отправленно');
                    })
                });
            </script>
    <?php else :
        echo ' <h2>Вы хакер</h2>';
        echo '<a href="/php/">На главную</a>';
    ?>
    <?php endif ?>
<?=
$_SERVER['DOCUMENT_ROOT']
?>
</body>

</html>
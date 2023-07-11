<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once './connect.php';
require './getPage.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <title>Записная книжка</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            width: 100%;
            height: 100px;
            padding: 5px;
            font-size: 16px;
        }

        .form-group button {
            padding: 5px 10px;
            font-size: 16px;
        }

        .note-list {
            list-style-type: none;
            padding: 0;
        }

        .note-list li {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .note-list li h3 {
            margin-top: 0;
        }

        .note-list li p {
            margin-top: 0;
        }
    </style>
    <div class="container">
        <h1>Записная книжка</h1>

        <form method="POST" action="./getPage.php">
            <div class="form-group">
                <label for="author">Автор:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="message">Содержание:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Добавить</button>
            </div>
        </form>


        <ul class="note-list">
            <?foreach ($stmt as $value):?>
            <h2>Автор</h2>
           <h3><?php echo $value['author'];?></h3>
        <h2>Сообщение</h2>
        <h3> <?php echo $value['message'];?></h3>
        <h3> <?php echo $value['data'];?></h3>
        <h3> <?php echo $value['id'];?></h3>
        
        <a href="./getPage.php?delete=<?= $value['id']?>">Удалить</a>
        <?php endforeach;?>
    </ul>
    </div>

</body>

</html>
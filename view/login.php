<!DOCTYPE html>
<html>

<head>
    <title>Вход в административную панель</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
        background-color: #f9f9f9;
        font-family: Arial, sans-serif;
    }

    .login-container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 100px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div class="login-container">
        <h2>Вход в административную панель</h2>
        <form method="POST" action="../model/admin.php">
            <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Войти</button>
        </form>
    </div>
</body>

</html>
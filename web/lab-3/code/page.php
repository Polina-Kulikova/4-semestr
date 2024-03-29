<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Куликова Полина</title>
    </head>
    <body>
        <h1>Данные из сессии:</h1>
        <p>Фамилия: <?php echo $_SESSION['surname']; ?></p>
        <p>Имя: <?php echo $_SESSION['name']; ?></p>
        <p>Возраст: <?php echo $_SESSION['age']; ?></p>
    </body>
</html>
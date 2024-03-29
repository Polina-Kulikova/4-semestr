<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Куликова Полина</title>
    </head>
        <body>
            <h1>Задание 2b: Информация о пользователе</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                Фамилия: <input type="text" name="surname"><br>
                Имя: <input type="text" name="name"><br>
                Возраст: <input type="number" name="age"><br>
                <input type="submit" value="Отправить">
            </form>
            <a href="page.php"><button>Перейти на другую страницу</button></a>
        </body>
</html>
